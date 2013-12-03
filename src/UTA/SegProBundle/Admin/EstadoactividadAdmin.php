<?php 

namespace UTA\SegProBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EstadoactividadAdmin extends Admin
{
    //Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('estado', 'text', array('label' => 'Estado'))
            ->add('descripcion', 'text', array('label' => 'Descripción'))
            // ->add('author', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            // ->add('body') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    //Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('estado')
            ->add('descripcion')
        ;
    }

    //Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('estado')
            // ->add('slug')
            ->add('descripcion')
        ;
    }
}

?>