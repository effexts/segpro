<?php
namespace UTA\SegProBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity
 * @ORM\Table(name="actividad")
 */
class Actividad
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /** 
     * @ORM\Column(type="string", nullable=false, name="identificador")
     */
    private $identificador;

    /** 
     * @ORM\Column(type="date", nullable=false, name="fechaInicio")
     */
    private $fechainicio;

    /** 
     * @ORM\Column(type="date", nullable=false, name="fechaComprometidaTermino")
     */
    private $fechacomprometidatermino;

    /** 
     * @ORM\Column(type="date", nullable=true, name="fechaTermino")
     */
    private $fechatermino;

    /** 
     * @ORM\Column(type="integer", nullable=true)
     */
    private $monto;

    /** 
     * @ORM\ManyToOne(targetEntity="UTA\SegProBundle\Entity\Segpro", inversedBy="actividades")
     * @ORM\JoinColumn(name="segpros_id", referencedColumnName="id")
     */
    private $segpros;

    /** 
     * @ORM\ManyToOne(targetEntity="UTA\SegProBundle\Entity\Estadoactividad")
     * @ORM\JoinColumn(name="estadoAct_id", referencedColumnName="id")
     */
    private $estadoActividad;
    

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

    /**
     * Set estadoActividad
     *
     * @param \UTA\SegProBundle\Entity\Estadoactividad $estadoActividad
     * @return Actividad
     */
    public function setEstadoActividad(\UTA\SegProBundle\Entity\Estadoactividad $estadoActividad = null)
    {
        $this->estadoActividad = $estadoActividad;
    
        return $this;
    }

    /**
     * Get estadoActividad
     *
     * @return \UTA\SegProBundle\Entity\Estadoactividad 
     */
    public function getEstadoActividad()
    {
        return $this->estadoActividad;
    }
    public function __toString() {
        return $this->getIdentificador();
    }
}