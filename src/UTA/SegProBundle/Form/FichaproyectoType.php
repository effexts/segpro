<?php

namespace UTA\SegProBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FichaproyectoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigoidentificacion', null, array('label' => 'Código de Identificación'))
            ->add('nombrecorto', null, array('label' => 'Nombre Corto'))
            ->add('nombre', null, array('label' => 'Nombre'))
            ->add('fechainicio', null, array('label' => 'Fecha de Inicio'))
            ->add('fechatermino', null, array('label' => 'Fecha de Término'))
            ->add('fechapostulacion', null, array('label' => 'Fecha de Postulación'))
            ->add('fechaadjudicacion', null, array('label' => 'Fecha de Adjudicación'))
            ->add('montoadjudicado', null, array('label' => 'Monto Adjudicado'))
            ->add('estadoproyect', null, array('label' => 'Estado de Proyecto'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UTA\SegProBundle\Entity\Fichaproyecto'
        ));
    }

    public function getName()
    {
        return 'uta_segprobundle_fichaproyectotype';
    }
}
