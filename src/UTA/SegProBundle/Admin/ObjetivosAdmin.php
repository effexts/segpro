<?php 

namespace UTA\SegProBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ObjetivosAdmin extends Admin
{
    //Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('tipoobj', 'text', array('label' => 'Tipo de Objetivo'))
            ->add('descripcion', 'text', array('label' => 'Descripción'))
            ->add('idFicha', 'sonata_type_model', array(
                                        'class'     =>  'UTA\SegProBundle\Entity\Fichaproyecto',
                                        'label'     =>  'Ficha Proyecto',
                                        'required'  =>  false
                                    ))
            // ->add('author', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            // ->add('body') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    //Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('tipoobj')
            ->add('descripcion')
            // ->add('idFicha')
        ;
    }

    //Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('tipoobj')
            // ->add('slug')
            ->add('descripcion')
            ->add('idFicha')
        ;
    }
}

?>