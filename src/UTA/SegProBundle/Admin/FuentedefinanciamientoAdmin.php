<?php 

namespace UTA\SegProBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FuentedefinanciamientoAdmin extends Admin
{
    //Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nombre', 'text', array('label' => 'Nombre'))
            ->add('descripcion', 'text', array('label' => 'Descripción'))
            ->add('fechaapertura', 'datetime', array('label' => 'Fecha de Apertura', 'widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'required' => false, 'attr' => array('class' => 'datepickers',  "data-date-format"=>"dd-mm-yyyy")))
            ->add('fechacierre', 'datetime', array('label' => 'Fecha de Cierre', 'widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'required' => false, 'attr' => array('class' => 'datepickers',  "data-date-format"=>"dd-mm-yyyy")))
            // ->add('author', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            // ->add('body') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    //Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre')
            ->add('descripcion')
            ->add('fechaapertura')
            ->add('fechacierre')
        ;
    }

    //Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nombre')
            // ->add('slug')
            ->add('descripcion')
            ->add('fechaapertura')
            ->add('fechacierre')
        ;
    }
}

?>