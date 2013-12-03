<?php

namespace UTA\SegProBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user')
            ->add('nombre')
            ->add('apellido')
            ->add('cargo')
            ->add('segprouser')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UTA\SegProBundle\Entity\Usuario'
        ));
    }

    public function getName()
    {
        return 'uta_segprobundle_usuariotype';
    }
}
