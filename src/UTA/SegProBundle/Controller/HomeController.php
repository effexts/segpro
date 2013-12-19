<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use UTA\SegProBundle\Utilidades\Graficos;

class HomeController extends Controller {

    public function indexAction() {

        $em = $this->getDoctrine()->getManager();
        $proyectos = 
//                ($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN') || $this->get('security.context')->isGranted('ROLE_DIPLAN') || $this->get('security.context')->isGranted('ROLE_DDP') )
//                ? $em->getRepository('UTASegProBundle:Segpro')->findAll()
//                : 
            $em->getRepository('UTASegProBundle:Segpro')->buscarAsociadosaUsuario($this->getUser()->getId());
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
