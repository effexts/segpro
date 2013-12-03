<?php

namespace UTA\SegProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividad
 */
class Actividad
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $identificador;
    
    /**
     * @var \DateTime
     */
    private $fechainicio;

    /**
     * @var \DateTime
     */
    private $fechacomprometidatermino;

    /**
     * @var \DateTime
     */
    private $fechatermino;

    /**
     * @var integer
     */
    private $monto;

    /**
     * @var \UTA\SegProBundle\Entity\Estadoactividad
     */
    private $estado;

    /**
     * @var \UTA\SegProBundle\Entity\Segpro
     */
    private $segpros;


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
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Actividad
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;
    
        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechacomprometidatermino
     *
     * @param \DateTime $fechacomprometidatermino
     * @return Actividad
     */
    public function setFechacomprometidatermino($fechacomprometidatermino)
    {
        $this->fechacomprometidatermino = $fechacomprometidatermino;
    
        return $this;
    }

    /**
     * Get fechacomprometidatermino
     *
     * @return \DateTime 
     */
    public function getFechacomprometidatermino()
    {
        return $this->fechacomprometidatermino;
    }

    /**
     * Set fechatermino
     *
     * @param \DateTime $fechatermino
     * @return Actividad
     */
    public function setFechatermino($fechatermino)
    {
        $this->fechatermino = $fechatermino;
    
        return $this;
    }

    /**
     * Get fechatermino
     *
     * @return \DateTime 
     */
    public function getFechatermino()
    {
        return $this->fechatermino;
    }

    /**
     * Set monto
     *
     * @param integer $monto
     * @return Actividad
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    
        return $this;
    }

    /**
     * Get monto
     *
     * @return integer 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set estado
     *
     * @param \UTA\SegProBundle\Entity\Estadoactividad $estado
     * @return Actividad
     */
    public function setEstado(\UTA\SegProBundle\Entity\Estadoactividad $estado = null)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return \UTA\SegProBundle\Entity\Estadoactividad 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set segpros
     *
     * @param \UTA\SegProBundle\Entity\Segpro $segpros
     * @return Actividad
     */
    public function setSegpros(\UTA\SegProBundle\Entity\Segpro $segpros = null)
    {
        $this->segpros = $segpros;
    
        return $this;
    }

    /**
     * Get segpros
     *
     * @return \UTA\SegProBundle\Entity\Segpro 
     */
    public function getSegpros()
    {
        return $this->segpros;
    }

    public function __toString()
    {
        return (string) $this->getIdentificador();
    }



    /**
     * Set identificador
     *
     * @param string $identificador
     * @return Actividad
     */
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;
    
        return $this;
    }

    /**
     * Get identificador
     *
     * @return string 
     */
    public function getIdentificador()
    {
        return $this->identificador;
    }
}