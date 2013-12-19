<?php
namespace UTA\SegProBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity(repositoryClass="UTA\SegProBundle\Entity\FuentedefinanciamientoRepository")
 * @ORM\Table(name="fuentedefinanciamiento")
 */
class Fuentedefinanciamiento
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false, name="Nombre")
     */
    private $nombre;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false, name="Descripcion")
     */
    private $descripcion;

    /** 
     * @ORM\Column(type="date", nullable=true, name="FechaApertura")
     */
    private $fechaapertura;

    /** 
     * @ORM\Column(type="date", nullable=true, name="FechaCierre")
     */
    private $fechacierre;
    
    /**
     * @ORM\OneToMany(targetEntity="UTA\SegProBundle\Entity\SegproFuente", mappedBy="fuentes")
     */
    private $asocSegproFuente;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->asocSegproFuente = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Fuentedefinanciamiento
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Fuentedefinanciamiento
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
     * Set fechaapertura
     *
     * @param \DateTime $fechaapertura
     * @return Fuentedefinanciamiento
     */
    public function setFechaapertura($fechaapertura)
    {
        $this->fechaapertura = $fechaapertura;
    
        return $this;
    }

    /**
     * Get fechaapertura
     *
     * @return \DateTime 
     */
    public function getFechaapertura()
    {
        return $this->fechaapertura;
    }

    /**
     * Set fechacierre
     *
     * @param \DateTime $fechacierre
     * @return Fuentedefinanciamiento
     */
    public function setFechacierre($fechacierre)
    {
        $this->fechacierre = $fechacierre;
    
        return $this;
    }

    /**
     * Get fechacierre
     *
     * @return \DateTime 
     */
    public function getFechacierre()
    {
        return $this->fechacierre;
    }

    /**
     * Add asocSegproFuente
     *
     * @param \UTA\SegProBundle\Entity\SegproFuente $asocSegproFuente
     * @return Fuentedefinanciamiento
     */
    public function addAsocSegproFuente(\UTA\SegProBundle\Entity\SegproFuente $asocSegproFuente)
    {
        $this->asocSegproFuente[] = $asocSegproFuente;
    
        return $this;
    }

    /**
     * Remove asocSegproFuente
     *
     * @param \UTA\SegProBundle\Entity\SegproFuente $asocSegproFuente
     */
    public function removeAsocSegproFuente(\UTA\SegProBundle\Entity\SegproFuente $asocSegproFuente)
    {
        $this->asocSegproFuente->removeElement($asocSegproFuente);
    }

    /**
     * Get asocSegproFuente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAsocSegproFuente()
    {
        return $this->asocSegproFuente;
    }
    
    public function __toString() {
        return $this->getNombre();
    }
}