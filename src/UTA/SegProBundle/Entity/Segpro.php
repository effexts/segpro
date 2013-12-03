<?php

namespace UTA\SegProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Segpro
 */
class Segpro
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $identificador;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \UTA\SegProBundle\Entity\Fuentedefinanciamiento
     */
    private $fuente;

    /**
     * @var \UTA\SegProBundle\Entity\Fichaproyecto
     */
    private $ficha;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $actividades;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividades = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set identificador
     *
     * @param string $identificador
     * @return Segpro
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
     * Set nombre
     *
     * @param string $nombre
     * @return Segpro
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
     * Set fuente
     *
     * @param \UTA\SegProBundle\Entity\Fuentedefinanciamiento $fuente
     * @return Segpro
     */
    public function setFuente(\UTA\SegProBundle\Entity\Fuentedefinanciamiento $fuente = null)
    {
        $this->fuente = $fuente;
    
        return $this;
    }

    /**
     * Get fuente
     *
     * @return \UTA\SegProBundle\Entity\Fuentedefinanciamiento 
     */
    public function getFuente()
    {
        return $this->fuente;
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




/*  setActividades, ver si es verdad el problema de los errores   */
    public function setActividades(\Doctrine\Common\Collections\Collection $actividads)
    {
        $this->actividades = $actividads;
        foreach ($actividads as $acts) {
            $acts->setSegpros($this);
        }
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



    public function __toString()
    {
        return $this->getNombre();
    }
}