<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UTA\SegProBundle\Entity\Usuario;
use UTA\SegProBundle\Entity\Segpro;
use Ob\HighchartsBundle\Highcharts\Highchart;

class HomeController extends Controller {

    public function indexAction() {

        $em = $this->getDoctrine()->getManager();
        if ($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN') || $this->get('security.context')->isGranted('ROLE_DIPLAN') || $this->get('security.context')->isGranted('ROLE_DDP') ) {
            $proyectos = $em->getRepository('UTASegProBundle:Segpro')
                ->findAll();
        }
        else {
            $proyectos = $em->getRepository('UTASegProBundle:Segpro')
                    ->buscarAsociadosaUsuario($this->getUser()->getId());            
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
