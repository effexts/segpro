<?php
namespace UTA\SegProBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity(repositoryClass="SegproFuenteRepository")
 * @ORM\Table(name="segprofuente")
 */
class SegproFuente
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /** 
     * @ORM\Column(type="integer", nullable=true)
     */
    private $monto;

    /** 
     * @ORM\ManyToOne(targetEntity="UTA\SegProBundle\Entity\Segpro", inversedBy="asocSegproFuente")
     * @ORM\JoinColumn(name="segpro_id", referencedColumnName="id")
     */
    private $segpro;

    /** 
     * @ORM\ManyToOne(targetEntity="UTA\SegProBundle\Entity\Fuentedefinanciamiento", inversedBy="asocSegproFuente")
     * @ORM\JoinColumn(name="fuentes_id", referencedColumnName="id")
     */
    private $fuentes;

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
     * Set monto
     *
     * @param integer $monto
     * @return SegproFuente
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
     * Set segpro
     *
     * @param \UTA\SegProBundle\Entity\Segpro $segpro
     * @return SegproFuente
     */
    public function setSegpro(\UTA\SegProBundle\Entity\Segpro $segpro = null)
    {
        $this->segpro = $segpro;
    
        return $this;
    }

    /**
     * Get segpro
     *
     * @return \UTA\SegProBundle\Entity\Segpro 
     */
    public function getSegpro()
    {
        return $this->segpro;
    }

    /**
     * Set fuentes
     *
     * @param \UTA\SegProBundle\Entity\Fuentedefinanciamiento $fuentes
     * @return SegproFuente
     */
    public function setFuentes(\UTA\SegProBundle\Entity\Fuentedefinanciamiento $fuentes = null)
    {
        $this->fuentes = $fuentes;
    
        return $this;
    }

    /**
     * Get fuentes
     *
     * @return \UTA\SegProBundle\Entity\Fuentedefinanciamiento 
     */
    public function getFuentes()
    {
        return $this->fuentes;
    }
}