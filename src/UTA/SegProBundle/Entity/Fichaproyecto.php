<?php

namespace UTA\SegProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichaproyecto
 */
class Fichaproyecto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoidentificacion;

    /**
     * @var string
     */
    private $nombrecorto;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $fechainicio;

    /**
     * @var \DateTime
     */
    private $fechatermino;

    /**
     * @var \DateTime
     */
    private $fechapostulacion;

    /**
     * @var \DateTime
     */
    private $fechaadjudicacion;

    /**
     * @var integer
     */
    private $montoadjudicado;

    /**
     * @var \UTA\SegProBundle\Entity\Estadoproyecto
     */
    private $estadoproyect;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $objetivos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->objetivos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set codigoidentificacion
     *
     * @param string $codigoidentificacion
     * @return Fichaproyecto
     */
    public function setCodigoidentificacion($codigoidentificacion)
    {
        $this->codigoidentificacion = $codigoidentificacion;
    
        return $this;
    }

    /**
     * Get codigoidentificacion
     *
     * @return string 
     */
    public function getCodigoidentificacion()
    {
        return $this->codigoidentificacion;
    }

    /**
     * Set nombrecorto
     *
     * @param string $nombrecorto
     * @return Fichaproyecto
     */
    public function setNombrecorto($nombrecorto)
    {
        $this->nombrecorto = $nombrecorto;
    
        return $this;
    }

    /**
     * Get nombrecorto
     *
     * @return string 
     */
    public function getNombrecorto()
    {
        return $this->nombrecorto;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Fichaproyecto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Fichaproyecto
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
     * Set fechatermino
     *
     * @param \DateTime $fechatermino
     * @return Fichaproyecto
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
     * Set fechapostulacion
     *
     * @param \DateTime $fechapostulacion
     * @return Fichaproyecto
     */
    public function setFechapostulacion($fechapostulacion)
    {
        $this->fechapostulacion = $fechapostulacion;
    
        return $this;
    }

    /**
     * Get fechapostulacion
     *
     * @return \DateTime 
     */
    public function getFechapostulacion()
    {
        return $this->fechapostulacion;
    }

    /**
     * Set fechaadjudicacion
     *
     * @param \DateTime $fechaadjudicacion
     * @return Fichaproyecto
     */
    public function setFechaadjudicacion($fechaadjudicacion)
    {
        $this->fechaadjudicacion = $fechaadjudicacion;
    
        return $this;
    }

    /**
     * Get fechaadjudicacion
     *
     * @return \DateTime 
     */
    public function getFechaadjudicacion()
    {
        return $this->fechaadjudicacion;
    }

    /**
     * Set montoadjudicado
     *
     * @param integer $montoadjudicado
     * @return Fichaproyecto
     */
    public function setMontoadjudicado($montoadjudicado)
    {
        $this->montoadjudicado = $montoadjudicado;
    
        return $this;
    }

    /**
     * Get montoadjudicado
     *
     * @return integer 
     */
    public function getMontoadjudicado()
    {
        return $this->montoadjudicado;
    }

    /**
     * Set estadoproyect
     *
     * @param \UTA\SegProBundle\Entity\Estadoproyecto $estadoproyect
     * @return Fichaproyecto
     */
    public function setEstadoproyect(\UTA\SegProBundle\Entity\Estadoproyecto $estadoproyect = null)
    {
        $this->estadoproyect = $estadoproyect;
    
        return $this;
    }

    /**
     * Get estadoproyect
     *
     * @return \UTA\SegProBundle\Entity\Estadoproyecto 
     */
    public function getEstadoproyect()
    {
        return $this->estadoproyect;
    }

    /**
     * Add objetivos
     *
     * @param \UTA\SegProBundle\Entity\Objetivos $objetivos
     * @return Fichaproyecto
     */
    public function addObjetivo(\UTA\SegProBundle\Entity\Objetivos $objetivos)
    {
        $this->objetivos[] = $objetivos;
    
        return $this;
    }

    /**
     * Remove objetivos
     *
     * @param \UTA\SegProBundle\Entity\Objetivos $objetivos
     */
    public function removeObjetivo(\UTA\SegProBundle\Entity\Objetivos $objetivos)
    {
        $this->objetivos->removeElement($objetivos);
    }

    /**
     * Get objetivos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObjetivos()
    {
        return $this->objetivos;
    }


    public function __toString()
    {
        return $this->getNombrecorto();
    }
}