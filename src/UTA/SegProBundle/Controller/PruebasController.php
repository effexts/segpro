<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * Description of pruebasController
 *
 * @author root
 */
class PruebasController extends Controller {
    
    public function indexAction(Request $request) {
//        $oracleConn = $this->get('doctrine.dbal.oracle_connection');
//        $result1 = $oracleConn->fetchAll('SELECT DISTINCT P.APR_AGNO from ADMPROY.ADP_PROYECTO P ORDER BY P.APR_AGNO ASC');
//        foreach ($result1 as $year) {
//            $choiceYear[$year['APR_AGNO']]=$year['APR_AGNO'];
//        }
//        \Doctrine\Common\Util\Debug::dump($choiceYear);
//        $form = $this->createFormBuilder()
//            ->add('year', 'choice', array('label' => 'Años', 'choices' => $choiceYear, 'required' => false, 'attr' => array('class' => 'large-2')))
//            ->add('Buscar3', 'submit', array('attr' => array('class' => 'small')))
//            ->getForm();
//        $form->handleRequest($request);
        
//        if($form->isValid())
//        {
//            $data = $form->getData();
//            $defaultConn2 = $this->get('doctrine.dbal.oracle_connection');
//            $result2 = $defaultConn2->fetchAll('select P.APR_CODIGO codigouta,P.APR_DESC nombre, P.APR_INTERNO, P.APR_ANOPOS fechapostulacion, P.APR_ANOADJ fechaadjudicacion, P.APR_ANODUR duracion_anios, P.APR_FI fechainicio, P.APR_FT fechatermino, P.APR_AGNO anio, P.APR_NOMBRECORTO nombrecorto
//                FROM ADMPROY.ADP_PROYECTO P WHERE P.APR_AGNO='.$data['year']);
////            \Doctrine\Common\Util\Debug::dump($result2);
////            return $this->render('UTASegProBundle:Pruebas:pruebas.html.twig', array('listado' => $result2, 'agno'=>$data['year']));
//        }


//        \Doctrine\Common\Util\Debug::dump($result);
        return $this->render('UTASegProBundle:Pruebas:pruebas.html.twig', array('form' => $form->createView()));
    }
}
