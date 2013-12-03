<?php 

namespace UTA\SegProBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Intl;

class ActividadAdmin extends Admin
{
    //Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('identificador', 'text', array('label'=>'Identificador'))
            ->add('fechainicio', 'datetime', array('label' => 'Fecha de Inicio', 'widget' => 'single_text', 'required' => false, 'date_format'=> 'dd/MM/yyyy', 'format'=>'dd/MM/yyyy',  'attr' => array('class' => 'datepickers')))
            // ->add('createdAt', 'doctrine_orm_datetime_range', array(), null, array('widget' => 'single_text', 'format' => 'd.M.y', 'required' => false,  'attr' => array('class' => 'datepick-input',  "data-date-format"=>"dd.mm.yyyy")))
            ->add('fechacomprometidatermino', 'datetime', array('label' => 'Fecha Comprometida de Término', 'widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'required' => false, 'attr' => array('class' => 'datepickers',  "data-date-format"=>"dd-mm-yyyy")))
            ->add('fechatermino', 'datetime', array('label'=>'Fecha de término', 'widget' => 'single_text', 'format' => 'dd/MM/yyyy','required' => false, 'attr' => array('class'=>'datepickers')))
            ->add('monto', 'integer', array('label'=>'Monto'))
            ->add('estado', 'sonata_type_model', array(
                                        'class' => 'UTA\SegProBundle\Entity\Estadoactividad',
                                        'label'=>'Estado de Actividad'
                                        // 'required' => false
                                    ))
            ->add('segpros','entity', array('class'=> 'UTA\SegProBundle\Entity\Segpro', 'label'=>'Proyecto Asignados'))
            // ->add('author', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            // ->add('body') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    //Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        // $datagridMapper
        //     ->add('fechainicio')
        //     ->add('fechacomprometidatermino')
        //     ->add('fechatermino')
        //     ->add('monto')
        //     ->add('estado')
        //     ->add('segpros')
        // ;
    }

    //Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('identificador', 'text', array('label'=>'Identificador'))
            ->add('fechainicio')
            // ->add('slug')
            ->add('fechacomprometidatermino')
            ->add('fechatermino')
            ->add('monto', 'currency', array('label'=>'Monto', 'currency'=>'CLP', 'locale'=>'es_CL'))
            ->add('estado')
            ->add('segpros', 'text', array('label'=>'Proyecto'))
        ;
    }
}

?>