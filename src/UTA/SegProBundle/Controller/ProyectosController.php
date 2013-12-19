<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToStringTransformer;
use Ob\HighchartsBundle\Highcharts\Highchart;
use UTA\SegProBundle\Entity\Actividad;
use UTA\SegProBundle\Entity\Segpro;
use UTA\SegProBundle\Entity\Fichaproyecto;
use UTA\SegProBundle\Entity\SegproFuente;
use UTA\SegProBundle\Entity\Fuentedefinanciamiento;
use UTA\SegProBundle\Form\ActividadType;
use UTA\SegProBundle\Utilidades\Funciones;
use UTA\SegProBundle\Utilidades\Graficos;

class ProyectosController extends Controller {

    public function indexAction() {

        return $this->render('UTASegProBundle:Proyectos:index.html.twig');
    }

    public function resumenAction($id, Request $request) {

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('UTASegProBundle:Segpro');
        $resumen = $repo->find($id);

        $actividad = new Actividad();
        $form = $this->createForm(new ActividadType(), $actividad);

        if ($request->isMethod('POST')) {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $actividad->setSegpros($resumen);
                $em->persist($actividad);
                $em->flush();

                if ($request->isXmlHttpRequest()) {
                    $response = new Response();
                    $dateTransform = new DateTimeToStringTransformer(null, null, 'd/m/Y', null);
                    $output = array(
                        'success' => true,
                        'id' => $actividad->getId(),
                        'identificador' => $actividad->getIdentificador(),
                        'fechainicio' => $dateTransform->transform($actividad->getFechainicio()),
                        'fechacomprometidatermino' => $dateTransform->transform($actividad->getFechacomprometidatermino()),
                        'fechatermino' => $dateTransform->transform($actividad->getFechatermino()),
                        'monto' => $actividad->getMonto(),
                        'estado' => $actividad->getEstadoActividad()
                    );
                    $response->headers->set('Content-Type', 'application/json');
                    $response->setContent(json_encode($output));

                    return $response;
                }

                return $this->redirect($this->generateUrl('uta_segpro_resumen_proyecto', array('id' => $actividad->getId())));
            }
        }

        $request->attributes->set('label', 'Proyecto: ' . $resumen->getFicha()->getNombreCorto());
        return $this->render('UTASegProBundle:Proyectos:resumen.html.twig', array(
                    'actividad' => $actividad,
                    'proyecto' => $resumen,
//                    'admin' => $admin,
                    'form' => $form->createView()));
    }

    public function statsPorProyectoAction($id, Request $request) {
        $logg = $this->container->get('logger');

        $admin = false;
        // Chart
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('UTASegProBundle:Segpro');
        $proyecto = $repo->find($id);
        $actividades = $proyecto->getActividades();
        $data = array();
        $monto = 0;

        foreach ($actividades as $acts) {
            $monto+=$acts->getMonto();
            $logg->info('Monto: ', (array) $monto);
        }

        $series = array(
            array('name' => 'Total', 'data' => [(int) $proyecto->getFicha()->getMontoadjudicado()]),
            array('name' => 'Ejecutado', 'data' => [$monto])
        );

        $ob = new Highchart();
        $ob->chart->renderTo('grafico'); // The #id of the div where to render the chart
        $ob->chart->type('column');
        $ob->title->text($proyecto->getFicha()->getNombrecorto());
        $ob->xAxis->title('Eje Horizontal')->categories([$proyecto->getFicha()->getNombrecorto()]);
        $ob->yAxis(array('min' => 0, 'title' => array('text' => 'Eje Vertical'), 'stackLabels' => array('enabled' => true, 'style' => array('fontWeight' => 'bold', 'color' => 'gray'))));
        // $ob->plotOptions->column(array('stacking'=>'normal', 'dataLabels'=>array('enabled'=>true,'color'=>'white')));
        $ob->series($series);
        $ob->credits->enabled(false);
        $ob->tooltip->pointFormat('<span style="color:{series.color}">{series.name}</span>: <b>${point.y}</b><br/>');
        // $ob->exporting->enabled(false);
        $request->attributes->set('label', 'Proyecto: ' . $proyecto->getFicha()->getNombreCorto());
        return $this->render('UTASegProBundle:Proyectos:statsPorProyecto.html.twig', array(
                    'chart' => $ob,
                    'admin' => $admin,
                    'proyecto' => $proyecto
        ));
    }

    public function queryByYearAction($year, Request $request) {
        $em = $this->getDoctrine()->getManager();
        if ($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN') || $this->get('security.context')->isGranted('ROLE_DIPLAN') || $this->get('security.context')->isGranted('ROLE_DDP')) {
            $proyectos = $em->getRepository('UTASegProBundle:Segpro')
                    ->buscarProyectosByYear($year);
        } else {
            $proyectos = $em->getRepository('UTASegProBundle:Segpro')
                    ->buscarAsociadosaUsuarioByYear($this->getUser()->getId(), $year);
        }
//                \Doctrine\Common\Util\Debug::dump($proyectos);
        $divgrafico = 0;
        $graficos = array();
        foreach ($proyectos as $proyecto) {
            $actividades = $proyecto->getActividades();
            $monto = 0;
            foreach ($actividades as $acts) {
                $monto+=$acts->getMonto();
            }
            $series = array(
                array('No Ejecutado', (int) $proyecto->getFicha()->getMontoadjudicado() - $monto),
                array('Ejecutado', $monto),
            );

            $ob = new Highchart();
            $ob->chart->renderTo('grafico' . $divgrafico); // The #id of the div where to render the chart
            $ob->chart->height('200');
            $ob->title->text('');
            $ob->plotOptions->pie(array(
                'allowPointSelect' => true,
                'cursor' => 'pointer',
                'dataLabels' => array('enabled' => false),
                'showInLegend' => true
            ));
//            $ob->chart->type('column');
//            $ob->title->text($proyecto->getFicha()->getNombrecorto());
//            $ob->title->text("");
//            $ob->xAxis->title('Eje Horizontal')->categories([$proyecto->getFicha()->getNombrecorto()]);
//            $ob->yAxis(array('min' => 0, 'title' => array('text' => 'Eje Vertical'), 'stackLabels' => array('enabled' => true, 'style' => array('fontWeight' => 'bold', 'color' => 'gray'))));
            // $ob->plotOptions->column(array('stacking'=>'normal', 'dataLabels'=>array('enabled'=>true,'color'=>'white')));
            $ob->series(array(array('type' => 'pie', 'name' => 'Total', 'data' => $series)));
            $ob->credits->enabled(false);
            $ob->tooltip->useHTML(true);
            $ob->tooltip->headerFormat('<small>{$proyecto->getFicha()->getNombrecorto()}</small><table>');
            $ob->tooltip->pointFormat('<tr><td style="color: {series.color}">{point.name}: </td><td style="text-align: right"><b>${point.y}</b></td></tr> <tr><td style="color: {series.color}"></td><td style="text-align: right"><b>{point.percentage}%</b></td></tr>');
            $ob->tooltip->footerFormat('</table>');
//            $ob->tooltip->tooltip(array('shared'=>true,'useHTML'=>true,'headerFormat'=>'<small>{series.name}</small><table>','pointFormat'=>'<tr><td style="color: {series.color}">{point.name}: </td>' +
//                '<td style="text-align: right"><b>${point.y}</b></td></tr>','footerFormat'=>'</table>','valueDecimals'=>0));
//            $ob->tooltip->pointFormat('<span style="color:{series.color}">{series.name}</span>: <b>${point.y}</b><br/>');
            $ob->exporting->enabled(false);

//            tooltip: {
//                shared: true,
//                useHTML: true,
//                headerFormat: '<small>{series.name}</small><table>',
//                pointFormat: '<tr><td style="color: {series.color}">{point.name}: </td>' +
//                '<td style="text-align: right"><b>${point.y}</b></td></tr>',
//                footerFormat: '</table>',
//                valueDecimals: 0
//            },            

            $graficos[$divgrafico++] = $ob;
        }
        return $this->render('UTASegProBundle:Home:index.html.twig', array('segpros' => $proyectos, 'charts' => $graficos));
    }

    public function administrarAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $oracleConn = $this->get('doctrine.dbal.oracle_connection');
        $result1 = $oracleConn->fetchAll('SELECT DISTINCT P.APR_AGNO from ADMPROY.ADP_PROYECTO P ORDER BY P.APR_AGNO ASC');
        foreach ($result1 as $year) {
            $choiceYear[$year['APR_AGNO']] = $year['APR_AGNO'];
        }
        $form = $this->createFormBuilder()
                ->add('year', 'choice', array('label' => 'Año', 'choices' => $choiceYear, 'required' => false, 'attr' => array('class' => 'large-2')))
                ->add('Buscar', 'submit', array('attr' => array('class' => 'small')))
                ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            $defaultConn2 = $this->get('doctrine.dbal.oracle_connection');
            $result2 = $defaultConn2->fetchAll('select P.APR_CODIGO codigouta,P.APR_DESC nombre, P.APR_INTERNO, P.APR_ANOPOS fechapostulacion, P.APR_ANOADJ fechaadjudicacion, P.APR_ANODUR duracion_anios, P.APR_FI fechainicio, P.APR_FT fechatermino, P.APR_AGNO anio, P.APR_NOMBRECORTO nombrecorto
                FROM ADMPROY.ADP_PROYECTO P WHERE P.APR_AGNO=' . $data['year']);
            $listado = array();
            
            foreach ($result2 as $proyecto) {
                $proyecto['EXISTE'] = empty($em->getRepository('UTASegProBundle:Segpro')->findByCodigouta($proyecto['CODIGOUTA']))
                                ? false
                                : true;
                $listado[]=$proyecto;
            }
//            \Doctrine\Common\Util\Debug::dump($listado);
            return $this->render('UTASegProBundle:Pruebas:pruebas.html.twig', array('listado' => $listado, 'agno' => $data['year']));
        }
        return $this->render('UTASegProBundle:Pruebas:pruebas.html.twig', array('form' => $form->createView()));
    }

    public function agregarProyectosAction($idProyecto, Request $request) {

        if ($request->isXmlHttpRequest()) {
            $response = new Response();
            $em = $this->getDoctrine()->getManager();
            $connOracle = $this->get('doctrine.dbal.oracle_connection');
            $result2 = $connOracle->fetchAll('select P.APR_CODIGO codigouta,P.APR_DESC nombre, P.APR_INTERNO, P.APR_ANOPOS fechapostulacion, P.APR_ANOADJ fechaadjudicacion, P.APR_ANODUR duracion_anios, P.APR_FI fechainicio, P.APR_FT fechatermino, P.APR_AGNO anio, P.APR_NOMBRECORTO nombrecorto, ATEP_CODIGO
                FROM ADMPROY.ADP_PROYECTO P where P.APR_CODIGO =' . $idProyecto);
            $proyectoExiste = $em->getRepository('UTASegProBundle:Segpro')->findByCodigouta($result2[0]['CODIGOUTA']);
            if (empty($result2)) {
                return $this->redirect($this->generateUrl('uta_seg_pro_homepage'));
            } else if (!empty($proyectoExiste)) {
                $output = array('success' => false, 'error'=>'Proyecto ya existe');
                $response->headers->set('Content-Type', 'application/json');
                $response->setContent(json_encode($output));
                return $response;
            } else {

                $segpro = new Segpro();
                $ficha = new Fichaproyecto();
                $ficha->setCodigoidentificacion($result2[0]['APR_INTERNO']);
                $ficha->setNombrecorto($result2[0]['NOMBRECORTO']);
                $ficha->setNombre($result2[0]['NOMBRE']);
                if (!is_null($result2[0]['FECHAINICIO'])) {
                    $ficha->setFechainicio(new \DateTime($result2[0]['FECHAINICIO']));
                }
                if (!is_null($result2[0]['FECHATERMINO'])) {
                    $ficha->setFechatermino(new \DateTime($result2[0]['FECHATERMINO']));
                }
                if (!is_null($result2[0]['FECHAADJUDICACION'])) {
                    $ficha->setFechaadjudicacion(new \DateTime($result2[0]['FECHAADJUDICACION']));
                }
                if (!is_null($result2[0]['FECHAPOSTULACION'])) {
                    $ficha->setFechapostulacion(new \DateTime($result2[0]['FECHAPOSTULACION']));
                }
                $ficha->setEstadoproyecto($em->find('UTASegProBundle:Estadoproyecto', $result2[0]['ATEP_CODIGO']));
                $segpro->setCodigouta($result2[0]['CODIGOUTA']);
                $monto = $connOracle->fetchAll('SELECT AFI_CODIGO, MONTO from ADMPROY.ADP_MONTO WHERE APR_CODIGO=' . $result2[0]['CODIGOUTA']);
                $funciones = new Funciones();
                $montoTotal = $funciones->obtenerMontoTotal($monto);
                $ficha->setMontoadjudicado($montoTotal);
//            \Doctrine\Common\Util\Debug::dump($montoTotal);
                $segpro->setFicha($ficha);
                $em->persist($ficha);
                $em->persist($segpro);
                $em->flush();


                if (empty($monto)) {
                    return $this->redirect($this->generateUrl('uta_seg_pro_homepage'));
                } else {
                    foreach ($monto as $mont) {
                        $segprofuente = new SegproFuente();
                        $fuentes = $em->find('UTASegProBundle:Fuentedefinanciamiento', $mont['AFI_CODIGO']);
//                     \Doctrine\Common\Util\Debug::dump($fuentes);
                        $segprofuente->setSegpro($segpro);
                        $segprofuente->setFuentes($fuentes);
                        $segprofuente->setMonto($mont['MONTO']);
                        $em->persist($segprofuente);
                        $em->flush();
                    }
                }
                $output = array('success' => true);
                $response->headers->set('Content-Type', 'application/json');
                $response->setContent(json_encode($output));
                return $response;
            }
        } else {
            return $this->redirect($this->generateUrl('uta_seg_pro_homepage'));
        }
    }
    
    public function verTodosAction() {
        $em = $this->getDoctrine()->getManager();
        $proyectos = 
                ($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN') || $this->get('security.context')->isGranted('ROLE_DIPLAN') || $this->get('security.context')->isGranted('ROLE_DDP') )
                ? $em->getRepository('UTASegProBundle:Segpro')->findAll()
                : $em->getRepository('UTASegProBundle:Segpro')->buscarAsociadosaUsuario($this->getUser()->getId());
        if( !empty($proyectos) ){
            $obGraficos = new Graficos();
            $graficos = $obGraficos->obtenerGraficosTorta($proyectos);
//                \Doctrine\Common\Util\Debug::dump($graficos);
            return $this->render('UTASegProBundle:Home:index.html.twig', array(
                                        'segpros' => $proyectos,
                                        'charts' => $graficos 
                                ));
        }
        else {
            return $this->render('UTASegProBundle:Home:index.html.twig');
        }
    }
}
