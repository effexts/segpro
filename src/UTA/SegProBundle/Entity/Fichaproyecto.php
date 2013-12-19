<?php
namespace UTA\SegProBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity(repositoryClass="UTA\SegProBundle\Entity\FichaproyectoRepository")
 * @ORM\Table(name="fichaproyecto")
 */
class Fichaproyecto
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false, name="CodigoIdentificacion")
     */
    private $codigoidentificacion;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false, name="NombreCorto")
     */
    private $nombrecorto;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false, name="Nombre")
     */
    private $nombre;

    /** 
     * @ORM\Column(type="date", nullable=true, name="FechaInicio")
     */
    private $fechainicio;

    /** 
     * @ORM\Column(type="date", nullable=true, name="FechaTermino")
     */
    private $fechatermino;

    /** 
     * @ORM\Column(type="date", nullable=false, name="FechaPostulacion")
     */
    private $fechapostulacion;

    /** 
     * @ORM\Column(type="date", nullable=true, name="FechaAdjudicacion")
     */
    private $fechaadjudicacion;

    /** 
     * @ORM\Column(type="bigint", nullable=false, name="montoAdjudicado")
     */
    private $montoadjudicado;

    /** 
     * @ORM\ManyToOne(targetEntity="UTA\SegProBundle\Entity\Estadoproyecto")
     * @ORM\JoinColumn(name="estadoproyecto_id", referencedColumnName="id", unique=false)
     */
    private $estadoproyecto;

    /** 
     * @ORM\OneToMany(targetEntity="UTA\SegProBundle\Entity\Objetivos", mappedBy="ficha")
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
     * Set estadoproyecto
     *
     * @param \UTA\SegProBundle\Entity\Estadoproyecto $estadoproyecto
     * @return Fichaproyecto
     */
    public function setEstadoproyecto(\UTA\SegProBundle\Entity\Estadoproyecto $estadoproyecto = null)
    {
        $this->estadoproyecto = $estadoproyecto;
    
        return $this;
    }

    /**
     * Get estadoproyecto
     *
     * @return \UTA\SegProBundle\Entity\Estadoproyecto 
     */
    public function getEstadoproyecto()
    {
        return $this->estadoproyecto;
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

    public function __toString() {
        return $this->getNombrecorto();
    }
}