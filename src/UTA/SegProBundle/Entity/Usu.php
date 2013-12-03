<?php

namespace UTA\SegProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

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
        $this->segprouser = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set user
     *
     * @param string $user
     * @return Usuario
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
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
}