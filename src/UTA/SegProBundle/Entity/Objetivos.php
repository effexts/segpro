<?php
namespace UTA\SegProBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity
 * @ORM\Table(name="objetivos")
 */
class Objetivos
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /** 
     * @ORM\Column(type="string", length=1, nullable=false, name="tipoObj")
     */
    private $tipoobj;

    /** 
     * @ORM\Column(type="text", nullable=false)
     */
    private $descripcion;

    /** 
     * @ORM\ManyToOne(targetEntity="UTA\SegProBundle\Entity\Fichaproyecto", inversedBy="objetivos")
     * @ORM\JoinColumn(name="ficha_id", referencedColumnName="id")
     */
    private $ficha;

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
     * Set ficha
     *
     * @param \UTA\SegProBundle\Entity\Fichaproyecto $ficha
     * @return Objetivos
     */
    public function setFicha(\UTA\SegProBundle\Entity\Fichaproyecto $ficha = null)
    {
        $this->ficha = $ficha;
    
        return $this;
    }

    /**
     * Get ficha
     *
     * @return \UTA\SegProBundle\Entity\Fichaproyecto 
     */
    public function getFicha()
    {
        return $this->ficha;
    }
    
    public function __toString() {
        return $this->getDescripcion();
    }
}