<?php
namespace UTA\SegProBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Security\Core\Role\RoleInterface;

/** 
 * @ORM\Entity
 * @ORM\Table(name="cargo")
 */
class Cargo implements RoleInterface
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /** 
     * @ORM\Column(type="string", length=255, nullable=false, name="Cargo")
     */
    private $cargo;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false, name="Descripcion")
     */
    private $descripcion;

    /** 
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private $role;

    /** 
     * @ORM\ManyToMany(targetEntity="UTA\SegProBundle\Entity\Usuario", mappedBy="roles")
     */
    private $users;
    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set cargo
     *
     * @param string $cargo
     * @return Cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    
        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Cargo
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
     * Set role
     *
     * @param string $role
     * @return Cargo
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Add users
     *
     * @param \UTA\SegProBundle\Entity\Usuario $users
     * @return Cargo
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
        return $this->getCargo();
    }
}