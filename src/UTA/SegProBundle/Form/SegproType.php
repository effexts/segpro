<?php

namespace UTA\SegProBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SegproType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('identificador')
            ->add('nombre')
            ->add('fuente')
            ->add('ficha')
            ->add('users')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UTA\SegProBundle\Entity\Segpro'
        ));
    }

    public function getName()
    {
        return 'uta_segprobundle_segprotype';
    }
}
