<?php

namespace UTA\SegProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objetivos
 */
class Objetivos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tipoobj;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \UTA\SegProBundle\Entity\Fichaproyecto
     */
    private $idFicha;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tipoobj
     *
     * @param string $tipoobj
     * @return Objetivos
     */
    public function setTipoobj($tipoobj)
    {
        $this->tipoobj = $tipoobj;
    
        return $this;
    }

    /**
     * Get tipoobj
     *
     * @return string 
     */
    public function getTipoobj()
    {
        return $this->tipoobj;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Objetivos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set idFicha
     *
     * @param \UTA\SegProBundle\Entity\Fichaproyecto $idFicha
     * @return Objetivos
     */
    public function setIdFicha(\UTA\SegProBundle\Entity\Fichaproyecto $idFicha = null)
    {
        $this->idFicha = $idFicha;
    
        return $this;
    }

    /**
     * Get idFicha
     *
     * @return \UTA\SegProBundle\Entity\Fichaproyecto 
     */
    public function getIdFicha()
    {
        return $this->idFicha;
    }
}