<?php

namespace UTA\SegProBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActividadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('identificador', 'text', array('label'=>'Identificador'))
            ->add('fechainicio', 'date', array('label' => 'Fecha de Inicio', 'widget'=>'single_text', 'format'=>'dd/MM/yyyy', 'attr'=>array('class'=>'datepickers')))
            // ->add('fechainicio', null, array('label' => 'Fecha de Inicio null'))
            ->add('fechacomprometidatermino', 'date', array('label' => 'Fecha Comprometida de Término', 'widget'=>'single_text','format'=>'dd/MM/yyyy', 'attr'=>array('class'=>'datepickers')))
            ->add('fechatermino', 'date', array('label' => 'Fecha de Término', 'widget'=>'single_text','format'=>'dd/MM/yyyy', 'attr'=>array('class'=>'datepickers')))
            ->add('monto', 'integer', array('label'=>'Monto'))
            ->add('estado', null, array('label' => 'Estado de Actividad'))
            // ->add('segpros')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UTA\SegProBundle\Entity\Actividad'
        ));
    }

    public function getName()
    {
        return 'uta_segprobundle_actividadtype';
    }
}
