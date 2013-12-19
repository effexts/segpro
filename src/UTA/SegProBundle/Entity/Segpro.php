<?php
namespace UTA\SegProBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity(repositoryClass="UTA\SegProBundle\Entity\SegproRepository")
 * @ORM\Table(name="segpro")
 */
class Segpro
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
    private $codigouta;

    /** 
     * @ORM\OneToOne(targetEntity="UTA\SegProBundle\Entity\Fichaproyecto")
     * @ORM\JoinColumn(name="ficha_id", referencedColumnName="id", unique=true)
     */
    private $ficha;

    /** 
     * @ORM\OneToMany(targetEntity="UTA\SegProBundle\Entity\Actividad", mappedBy="segpros", cascade={"persist","remove"})
     */
    private $actividades;

    /** 
     * @ORM\OneToMany(targetEntity="UTA\SegProBundle\Entity\SegproFuente", mappedBy="segpro")
     */
    private $asocSegproFuente;

    /** 
     * @ORM\ManyToMany(
     *     targetEntity="UTA\SegProBundle\Entity\Usuario", 
     *     mappedBy="segprouser", 
     *     cascade={"persist","remove"}
     * )
     */
    private $users;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividades = new \Doctrine\Common\Collections\ArrayCollection();
        $this->asocSegproFuente = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codigouta
     *
     * @param integer $codigouta
     * @return Segpro
     */
    public function setCodigouta($codigouta)
    {
        $this->codigouta = $codigouta;
    
        return $this;
    }

    /**
     * Get codigouta
     *
     * @return integer 
     */
    public function getCodigouta()
    {
        return $this->codigouta;
    }

    /**
     * Set ficha
     *
     * @param \UTA\SegProBundle\Entity\Fichaproyecto $ficha
     * @return Segpro
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

    /**
     * Add actividades
     *
     * @param \UTA\SegProBundle\Entity\Actividad $actividades
     * @return Segpro
     */
    public function addActividade(\UTA\SegProBundle\Entity\Actividad $actividades)
    {
        $this->actividades[] = $actividades;
    
        return $this;
    }

    /**
     * Remove actividades
     *
     * @param \UTA\SegProBundle\Entity\Actividad $actividades
     */
    public function removeActividade(\UTA\SegProBundle\Entity\Actividad $actividades)
    {
        $this->actividades->removeElement($actividades);
    }

    /**
     * Get actividades
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActividades()
    {
        return $this->actividades;
    }

    /**
     * Add asocSegproFuente
     *
     * @param \UTA\SegProBundle\Entity\SegproFuente $asocSegproFuente
     * @return Segpro
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

    /**
     * Add users
     *
     * @param \UTA\SegProBundle\Entity\Usuario $users
     * @return Segpro
     */
    public function addUser(\UTA\SegProBundle\Entity\Usuario $users)
    {
        $this->users[] = $users;
    
        return $this;
    }

    /**
     * Remove users
     *
     * @param \UTA\SegProBundle\Entity\Usuario $users
     */
    public function removeUser(\UTA\SegProBundle\Entity\Usuario $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
    
    public function __toString() {
//        \Doctrine\Common\Util\Debug::dump($this->getFicha());
        
        return is_null($this->getFicha())? $this->getCodigouta() : $this->getFicha()->getNombrecorto();
    }
}