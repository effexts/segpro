<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToStringTransformer;
use UTA\SegProBundle\Entity\Segpro;
use Ob\HighchartsBundle\Highcharts\Highchart;
use UTA\SegProBundle\Entity\Actividad;
use UTA\SegProBundle\Form\ActividadType;

class ProyectoController extends Controller {

    public function indexAction() {

        return $this->render('UTASegProBundle:Proyecto:index.html.twig');
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
                        'estado' => $actividad->getEstado()->getEstado()
                    );
                    $response->headers->set('Content-Type', 'application/json');
                    $response->setContent(json_encode($output));

                    return $response;
                }

                return $this->redirect($this->generateUrl('uta_segpro_resumen_proyecto', array('id' => $actividad->getId())));
            }
        }

        $request->attributes->set('label','Proyecto: '.$resumen->getFicha()->getNombreCorto());
        return $this->render('UTASegProBundle:Proyecto:resumen.html.twig', array(
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
        $request->attributes->set('label','Proyecto: '.$proyecto->getFicha()->getNombreCorto());
        return $this->render('UTASegProBundle:Proyecto:statsPorProyecto.html.twig', array(
                    'chart' => $ob,
                    'admin' => $admin,
                    'proyecto'=>$proyecto
        ));
    }

    public function queryByYearAction($year, Request $request){
        $em = $this->getDoctrine()->getManager();
        if ($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN') || $this->get('security.context')->isGranted('ROLE_DIPLAN') || $this->get('security.context')->isGranted('ROLE_DDP') ) {
            $proyectos = $em->getRepository('UTASegProBundle:Segpro')
                ->buscarProyectosByYear($year);
        }
        else {
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
                array('No Ejecutado', (int) $proyecto->getFicha()->getMontoadjudicado()-$monto),
                array('Ejecutado',$monto),
            );

            $ob = new Highchart();
            $ob->chart->renderTo('grafico' . $divgrafico); // The #id of the div where to render the chart
            $ob->chart->height('200');
            $ob->title->text('');
            $ob->plotOptions->pie(array(
                'allowPointSelect'  => true,
                'cursor'    => 'pointer',
                'dataLabels'    => array('enabled' => false),
                'showInLegend'  => true
            ));
//            $ob->chart->type('column');
//            $ob->title->text($proyecto->getFicha()->getNombrecorto());
//            $ob->title->text("");
//            $ob->xAxis->title('Eje Horizontal')->categories([$proyecto->getFicha()->getNombrecorto()]);
//            $ob->yAxis(array('min' => 0, 'title' => array('text' => 'Eje Vertical'), 'stackLabels' => array('enabled' => true, 'style' => array('fontWeight' => 'bold', 'color' => 'gray'))));
            // $ob->plotOptions->column(array('stacking'=>'normal', 'dataLabels'=>array('enabled'=>true,'color'=>'white')));
            $ob->series(array(array('type'=>'pie','name'=>'Total','data'=>$series)));
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
}
