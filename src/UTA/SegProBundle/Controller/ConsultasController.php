<?php

/**
 * Description of ConsultasController
 *
 * @author root
 */

namespace UTA\SegProBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToStringTransformer;
use UTA\SegProBundle\Entity\Segpro;

use UTA\SegProBundle\Entity\Actividad;
use UTA\SegProBundle\Form\ActividadType;
use UTA\SegProBundle\Utilidades\Graficos;

class ConsultasController extends Controller {

    public function indexAction(Request $request) {
        $nombreFuente = '';
        $funciones = new Graficos();
        $repofichas = $this->getDoctrine()->getRepository('UTASegProBundle:Fichaproyecto');
        $choiceYear = $repofichas->getYears();
//        \Doctrine\Common\Util\Debug::dump($choiceYear);
        $repofuentes = $this->getDoctrine()->getRepository('UTASegProBundle:SegproFuente');
        $choiceFuentes = $repofuentes->getFuentesUso();
//        \Doctrine\Common\Util\Debug::dump($choiceFuentes);

//        $defaultData = array('class' => 'small');
        $form = $this->createFormBuilder()
                ->add('year', 'choice', array('label' => 'Año', 'choices' => $choiceYear, 'required' => false, 'attr' => array('class' => 'large-2')))
                ->add('fuente', 'choice', array('label' => 'Fuente de Financiamiento', 'choices' => $choiceFuentes, 'required' => false, 'attr' => array('class' => 'large-4')))
                ->add('Buscar', 'submit', array('attr' => array('class' => 'small')))
                ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            // data es un array con claves de year y fuente.
            $data = $form->getData();
            if($data['fuente']) {
                $nombreFuente = $this->getDoctrine()->getManager()->getRepository('UTASegProBundle:Fuentedefinanciamiento')->find($data['fuente']);
            }
//            \Doctrine\Common\Util\Debug::dump($data);
            if ($data['year'] && $data['fuente']) {
                $em = $this->getDoctrine()->getManager();
                if ($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')
                 || $this->get('security.context')->isGranted('ROLE_DIPLAN')
                 || $this->get('security.context')->isGranted('ROLE_DDP')) {
                    
                    $proyectos = $em->getRepository('UTASegProBundle:Segpro')
                            ->buscarProyectosFuenteYear($data['year'], $data['fuente']);
                } else {
                    $proyectos = $em->getRepository('UTASegProBundle:Segpro')
                            ->buscarAsociadosaUsuarioFuenteYear($this->getUser()->getId(), $data['year'],$data['fuente']);
                }
                $graficos = $funciones->obtenerGraficosTorta($proyectos);
//                \Doctrine\Common\Util\Debug::dump($graficos);
            } else if ($data['year']) {
                $em = $this->getDoctrine()->getManager();
                if ($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')
                 || $this->get('security.context')->isGranted('ROLE_DIPLAN')
                 || $this->get('security.context')->isGranted('ROLE_DDP')) {
                    
                    $proyectos = $em->getRepository('UTASegProBundle:Segpro')
                            ->buscarProyectosByYear($data['year']);
                } else {
                    $proyectos = $em->getRepository('UTASegProBundle:Segpro')
                            ->buscarAsociadosaUsuarioByYear($this->getUser()->getId(), $data['year']);
                }
                $graficos = $funciones->obtenerGraficosTorta($proyectos);
//                \Doctrine\Common\Util\Debug::dump($graficos);
                
            } else if ($data['fuente']) {
                $em = $this->getDoctrine()->getManager();
                if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')
                 || $this->get('security.context')->isGranted('ROLE_DIPLAN')
                 || $this->get('security.context')->isGranted('ROLE_DDP')){
                    $proyectos = $em->getRepository('UTASegProBundle:Segpro')
                            ->buscarProyectosbyFuente($data['fuente']);
                } else {
                    //Buscar proyectos asociados a usuario por fuente de financiamiento
                }
                $graficos = $funciones->obtenerGraficosTorta($proyectos);
//                \Doctrine\Common\Util\Debug::dump($graficos);
            }
            return $this->render('UTASegProBundle:Consultas:resultados.html.twig', array(
                                            'segpros' => $proyectos,
                                            'charts' => $graficos,
                                            'vista' => 'consulta',
                                            'agno' => $data['year'],
                                            'fuente' => $nombreFuente));
        }

        return $this->render('UTASegProBundle:Consultas:index.html.twig', array('form' => $form->createView()));
    }


}
