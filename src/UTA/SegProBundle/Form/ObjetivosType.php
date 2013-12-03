<?php

namespace UTA\SegProBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ObjetivosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipoobj', 'choice', array(
                                        'label' => 'Tipo Objetivo', 
                                        'choices' => array('0' => 'General', '1' => 'Específico'), 
                                        'required' => true,
                                        'expanded' => true,
                                        'multiple' => false,
                                        ))
            ->add('descripcion', 'textarea', array('label' => 'Descripción'))
            // ->add('idFicha')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UTA\SegProBundle\Entity\Objetivos'
        ));
    }

    public function getName()
    {
        return 'uta_segprobundle_objetivostype';
    }
}
