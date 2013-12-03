<?php

namespace Proxies\__CG__\UTA\SegProBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Actividad extends \UTA\SegProBundle\Entity\Actividad implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setFechainicio($fechainicio)
    {
        $this->__load();
        return parent::setFechainicio($fechainicio);
    }

    public function getFechainicio()
    {
        $this->__load();
        return parent::getFechainicio();
    }

    public function setFechacomprometidatermino($fechacomprometidatermino)
    {
        $this->__load();
        return parent::setFechacomprometidatermino($fechacomprometidatermino);
    }

    public function getFechacomprometidatermino()
    {
        $this->__load();
        return parent::getFechacomprometidatermino();
    }

    public function setFechatermino($fechatermino)
    {
        $this->__load();
        return parent::setFechatermino($fechatermino);
    }

    public function getFechatermino()
    {
        $this->__load();
        return parent::getFechatermino();
    }

    public function setMonto($monto)
    {
        $this->__load();
        return parent::setMonto($monto);
    }

    public function getMonto()
    {
        $this->__load();
        return parent::getMonto();
    }

    public function setEstado(\UTA\SegProBundle\Entity\Estadoactividad $estado = NULL)
    {
        $this->__load();
        return parent::setEstado($estado);
    }

    public function getEstado()
    {
        $this->__load();
        return parent::getEstado();
    }

    public function setSegpros(\UTA\SegProBundle\Entity\Segpro $segpros = NULL)
    {
        $this->__load();
        return parent::setSegpros($segpros);
    }

    public function getSegpros()
    {
        $this->__load();
        return parent::getSegpros();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function setIdentificador($identificador)
    {
        $this->__load();
        return parent::setIdentificador($identificador);
    }

    public function getIdentificador()
    {
        $this->__load();
        return parent::getIdentificador();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'identificador', 'fechainicio', 'fechacomprometidatermino', 'fechatermino', 'monto', 'estado', 'segpros');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}