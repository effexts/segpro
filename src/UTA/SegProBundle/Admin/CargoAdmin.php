<?php 

namespace UTA\SegProBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CargoAdmin extends Admin
{
    //Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('cargo', 'text', array('label' => 'Cargo'))
            ->add('descripcion', 'text', array('label' => 'Descripción'))
            ->add('role','text', array('label' => 'Rol'))
            // ->add('author', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            // ->add('body') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    //Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('cargo')
            ->add('descripcion')
            
        ;
    }

    //Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('cargo')
            // ->add('slug')
            ->add('descripcion')
            ->add('role')
        ;
    }
}

?>