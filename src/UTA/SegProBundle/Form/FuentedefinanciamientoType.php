<?php

namespace UTA\SegProBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FuentedefinanciamientoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', null, array('label' => 'Nombre'))
            ->add('descripcion', null, array('label' => 'Descripción'))
            ->add('fechaapertura', 'dateTimePicker', array('label' => 'Fecha de Apertura'))
            ->add('fechacierre', 'dateTimePicker', array('label' => 'Fecha de Cierre'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UTA\SegProBundle\Entity\Fuentedefinanciamiento'
        ));
    }

    public function getName()
    {
        return 'uta_segprobundle_fuentedefinanciamientotype';
    }
}
