<?php

namespace UTA\SegProBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FuentedefinanciamientoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FuentedefinanciamientoRepository extends EntityRepository
{
    public function getFuentes()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT ff.id, ff.nombre FROM UTASegProBundle:Fuentedefinanciamiento ff');
        $fuentes = $query->getResult();
//        \Doctrine\Common\Util\Debug::dump($fuentes);
//        foreach ($fichas as $ficha) {
//            if($ficha->getFechaInicio()){
//            $years[]=$ficha->getFechaInicio()->format('Y');
//            \Doctrine\Common\Util\Debug::dump(date_format($ficha->getFechaInicio(),'Y')  );
//            }
//        }
       
       return $fuentes; 
    }
}