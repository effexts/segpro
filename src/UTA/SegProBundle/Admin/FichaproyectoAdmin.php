<?php 

namespace UTA\SegProBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FichaproyectoAdmin extends Admin
{
    //Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('codigoidentificacion', 'text', array('label' => 'Código Identificación'))
            ->add('nombrecorto', 'text', array('label' => 'Nombre Corto'))
            ->add('nombre', 'text', array('label' => 'Nombre'))
            ->add('fechainicio', 'datetime', array('label' => 'Fecha de Inicio', 'widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'required' => false, 'attr' => array('class' => 'datepickers',  "data-date-format"=>"dd-mm-yyyy")))
            ->add('fechatermino', 'datetime', array('label' => 'Fecha de Término', 'widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'required' => false, 'attr' => array('class' => 'datepickers',  "data-date-format"=>"dd-mm-yyyy")))
            ->add('fechapostulacion', 'datetime', array('label' => 'Fecha de Postulación', 'widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'required' => false, 'attr' => array('class' => 'datepickers',  "data-date-format"=>"dd-mm-yyyy")))
            ->add('fechaadjudicacion', 'datetime', array('label' => 'Fecha de Adjudicación', 'widget' => 'single_text', 'format' => 'dd/MM/yyyy', 'required' => false, 'attr' => array('class' => 'datepickers',  "data-date-format"=>"dd-mm-yyyy")))
            ->add('montoadjudicado', 'text', array('label' => 'Monto Adjudicado'))
            ->add('estadoproyect', 'entity', array('class'=> 'UTA\SegProBundle\Entity\Estadoproyecto', 'label' => 'Estado de Proyecto'))
            // ->add('objetivos', 'entity', array('class'=> 'UTA\SegProBundle\Entity\Objetivos', 'label' => 'Objetivos'))
            // ->add('author', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            // ->add('body') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    //Fields to be shown on filter forms
    // protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    // {
    //     $datagridMapper
    //         ->add('codigoidentificacion')
    //         ->add('nombrecorto')
    //         ->add('nombre')
    //         ->add('fechainicio')
    //         ->add('fechatermino')
    //         ->add('fechapostulacion')
    //         ->add('fechaadjudicacion')
    //         ->add('montoadjudicado')
    //         ->add('estadoproyect')
    //         ->add('objetivos')
    //     ;
    // }

    //Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            // ->addIdentifier('id')
            // ->add('slug')
            ->addIdentifier('codigoidentificacion', 'text', array('label' => 'Cod. Identificación'))
            ->add('nombrecorto', 'text', array('label' => 'Nombre Corto'))
            ->add('nombre', 'text', array('label' => 'Nombre'))
            ->add('fechainicio', 'date', array('label' => 'Fecha de Inicio', 'pattern' => "dd 'de' LLLL, Y", 'locale'=> 'es_CL', 'timezone'=>'America/Santiago'))
            ->add('fechatermino', 'date', array('label' => 'Fecha de Término', 'pattern' => "dd 'de' MMMM, Y"))
            ->add('fechapostulacion', 'date', array('label' => 'Fecha de Postulación', 'pattern' => "dd 'de' MMMM, Y"))
            ->add('fechaadjudicacion', 'date', array('label' => 'Fecha de Adjudicación', 'pattern' => "dd 'de' MMMM, Y"))
            ->add('montoadjudicado', 'currency', array('label' => 'Monto Adjudicado', 'currency'=>'CLP', 'locale'=>'es_CL'))
            ->add('estadoproyect',null, array('label'=>'Estado de Proyecto'))
            // ->add('objetivos')
        ;
    }
}

?>