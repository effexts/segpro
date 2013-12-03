<?php

namespace UTA\SegProBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EstadoproyectoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripcion', null, array('label' => 'Descripción'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UTA\SegProBundle\Entity\Estadoproyecto'
        ));
    }

    public function getName()
    {
        return 'uta_segprobundle_estadoproyectotype';
    }
}
