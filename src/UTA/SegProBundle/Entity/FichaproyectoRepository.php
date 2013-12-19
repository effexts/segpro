<?php

namespace UTA\SegProBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FichaproyectoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FichaproyectoRepository extends EntityRepository
{
    public function getYears()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT f FROM UTASegProBundle:Fichaproyecto f');
        $fichas = $query->getResult();
        $years = array();
        foreach ($fichas as $ficha) {
            if($ficha->getFechapostulacion()){
            $years[$ficha->getFechapostulacion()->format('Y')]=$ficha->getFechapostulacion()->format('Y');
//            \Doctrine\Common\Util\Debug::dump(date_format($ficha->getFechaInicio(),'Y')  );
            }
        }
       return $years;    
    }
}