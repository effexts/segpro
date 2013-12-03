<?php 

namespace UTA\SegProBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SegproAdmin extends Admin
{
    //Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('identificador', 'text', array('label' => 'Identificador'))
            ->add('nombre', 'text', array('label' => 'Nombre'))
            ->add('fuente', 'sonata_type_model', array(
                                        'label'     =>  'Fuente de Financiamiento',
                                        'class'     =>  'UTA\SegProBundle\Entity\Fuentedefinanciamiento',
                                        'required'  =>  false
                                    ))
            ->add('ficha', 'sonata_type_model', array(
                                        'class'     =>  'UTA\SegProBundle\Entity\Fichaproyecto',
                                        'label'     =>  'Ficha Proyecto',
                                        'required'  =>  false
                                    ))
            // ->add('actividades', 'sonata_type_model', array(
            //                             'class'     =>  'UTA\SegProBundle\Entity\Actividad',
            //                             'label'     =>  'Actividades',
            //                             'required'  =>  false ),
            //                     array(
            //                             'edit' => 'inline',
            //                             'inline' => 'table'
            //                     ))
            // ->add('actividades', 'entity', array(
            //                             'class'     =>  'UTA\SegProBundle\Entity\Actividad',
            //                             'label'     =>  'Actividades',
            //                             'required'  =>  false
            //                         ))
            // ->add('users', 'sonata_type_model', array(
            //                             'class'     =>  'UTA\SegProBundle\Entity\Usuario',
            //                             'label'     =>  'Usuarios',
            //                             'required'  =>  false
            //                         ))

            // ->add('author', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            // ->add('body') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    //Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('identificador')
            ->add('nombre')
            ->add('fuente')
            ->add('ficha')
            ->add('actividades')
            ->add('users')
        ;
    }

    //Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('identificador')
            // ->add('slug')
            ->add('nombre')
            ->add('fuente')
            ->add('ficha')
            ->add('actividades')
            ->add('users')
        ;
    }
}

?>