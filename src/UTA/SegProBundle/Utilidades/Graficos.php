<?php

namespace UTA\SegProBundle\Utilidades;

use Ob\HighchartsBundle\Highcharts\Highchart;
/**
 * Description of Funciones
 *
 * @author root
 */
class Graficos {

    public function obtenerGraficosTorta($proyectos) {
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
            $ob->series(array(array('type' => 'pie', 'name' => 'Total', 'data' => $series)));
            $ob->credits->enabled(false);
            $ob->tooltip->useHTML(true);
//            \Doctrine\Common\Util\Debug::dump($proyecto->getFicha()->getNombrecorto());
            $ob->tooltip->headerFormat('<small>{$proyecto->getFicha()->getNombrecorto()}</small><table>');
            $ob->tooltip->pointFormat('<tr><td style="color: {series.color}">{point.name}: </td><td style="text-align: right"><b>${point.y}</b></td></tr> <tr><td style="color: {series.color}"></td><td style="text-align: right"><b>{point.percentage}%</b></td></tr>');
            $ob->tooltip->footerFormat('</table>');
            $ob->exporting->enabled(false);


            $graficos[$divgrafico++] = $ob;
        }
        return $graficos;
    }

}
