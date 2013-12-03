<?php

namespace UTA\SegProBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CargoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cargo', null, array('label' => 'Cargo'))
            ->add('descripcion', null, array('label' => 'Descripción'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UTA\SegProBundle\Entity\Cargo'
        ));
    }

    public function getName()
    {
        return 'uta_segprobundle_cargotype';
    }
}
