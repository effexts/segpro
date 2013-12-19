<?php
namespace UTA\SegProBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
/** 
 * @ORM\Entity
 * @ORM\Table(name="usuario")
 */
class Usuario implements AdvancedUserInterface, \Serializable
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
     * @ORM\Column(type="string", length=255, nullable=false, name="Apellido")
     */
    private $apellido;

    /** 
     * @ORM\Column(type="string", unique=true, length=25, nullable=false, name="Usuario")
     */
    private $username;
    
    /**
     * @ORM\Column(type="string", nullable=true, name="Correo")
     */
    private $correo;

    /** 
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $salt;

    /** 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $password;

    /** 
     * @ORM\Column(type="boolean", nullable=true, name="is_active")
     */
    private $isActive;

    /** 
     * @ORM\ManyToMany(targetEntity="UTA\SegProBundle\Entity\Segpro", inversedBy="users", cascade={"persist","remove"})
     * @ORM\JoinTable(
     *     name="segpro_usuarios", 
     *     joinColumns={}, 
     *     inverseJoinColumns={@ORM\JoinColumn(name="Segpro_id", referencedColumnName="id")}
     * )
     */
    private $segprouser;

    /** 
     * @ORM\ManyToMany(targetEntity="UTA\SegProBundle\Entity\Cargo", inversedBy="users", cascade={"persist","remove"})
     * @ORM\JoinTable(name="users_cargo", joinColumns={}, inverseJoinColumns={})
     */
    private $roles;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
        $this->segprouser = new \Doctrine\Common\Collections\ArrayCollection();
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Usuario
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
     * Set apellido
     *
     * @param string $apellido
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Usuario
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Add segprouser
     *
     * @param \UTA\SegProBundle\Entity\Segpro $segprouser
     * @return Usuario
     */
    public function addSegprouser(\UTA\SegProBundle\Entity\Segpro $segprouser)
    {
        $this->segprouser[] = $segprouser;
    
        return $this;
    }

    /**
     * Remove segprouser
     *
     * @param \UTA\SegProBundle\Entity\Segpro $segprouser
     */
    public function removeSegprouser(\UTA\SegProBundle\Entity\Segpro $segprouser)
    {
        $this->segprouser->removeElement($segprouser);
    }

    /**
     * Get segprouser
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSegprouser()
    {
        return $this->segprouser;
    }
    /*  setSegprouser, ver si es verdad el problema de los errores   */

    public function setSegprouser(\Doctrine\Common\Collections\Collection $segprousers) {
        $this->segprouser = $segprousers;
//        foreach ($segprousers as $spuser) {
//            $spuser->    setSegpros($this);
//        }
    }
    /**
     * Add roles
     *
     * @param \UTA\SegProBundle\Entity\Cargo $roles
     * @return Usuario
     */
    public function addRole(\UTA\SegProBundle\Entity\Cargo $roles)
    {
        $this->roles[] = $roles;
    
        return $this;
    }

    /**
     * Remove roles
     *
     * @param \UTA\SegProBundle\Entity\Cargo $roles
     */
    public function removeRole(\UTA\SegProBundle\Entity\Cargo $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles()
    {
        return $this->roles->toArray();
    }

    public function setRoles(\Doctrine\Common\Collections\Collection $rolesuser) {
        $this->roles = $rolesuser;
    }
    
    public function eraseCredentials() {
        
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
        return $this->isActive;
    }

    public function serialize() {
        return serialize(array($this->id,));
    }

    public function unserialize($serialized) {
        list($this->id,) = unserialize($serialized);
    }
    
    public function __toString() {
        return $this->nombre." ".$this->apellido;
    }


    /**
     * Set correo
     *
     * @param string $correo
     * @return Usuario
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    
        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }
}