<?php

namespace UTA\SegProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Usuario
 */
class Usuario implements AdvancedUserInterface, \Serializable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var string
     */
    private $password;

    /**
     * @var boolean
     */
    private $isActive;

    /**
     * @var \UTA\SegProBundle\Entity\Cargo
     */
    private $cargo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $segprouser;

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
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
     * Set cargo
     *
     * @param \UTA\SegProBundle\Entity\Cargo $cargo
     * @return Usuario
     */
    public function setCargo(\UTA\SegProBundle\Entity\Cargo $cargo = null)
    {
        $this->cargo = $cargo;
    
        return $this;
    }

    /**
     * Get cargo
     *
     * @return \UTA\SegProBundle\Entity\Cargo 
     */
    public function getCargo()
    {
        return $this->cargo;
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
    
    
//    public function getRoles()
//    {
//        return array('ROLE_SUPER_ADMIN');
//    }
    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }
    
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }
    
    public function unserialize($serialized)
    {
        list(
                $this->id,
        ) = unserialize($serialized);
    }
    
        /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $roles;


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
    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles() {
        return $this->roles;
    }

}