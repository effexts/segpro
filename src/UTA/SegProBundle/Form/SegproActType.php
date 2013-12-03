<?php 
namespace UTA\SegProBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use UTA\SegProBundle\Entity\Actividad;

class SegproActType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('actividades','collection', array(
				'type'				=>	new ActividadType(),
				'label'				=>	'Listado de Actividad',
				'by_reference'		=>	false,
				'prototype'	=>	new Actividad(),
				'allow_delete'		=>	true,
				'allow_add'			=>	true,
				'attr'				=>	array(
					'class'	=>	'row actividades'
					)

				));
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults( array(
			'data_class'	=>	'UTA\SegProBundle\Entity\Segpro',
		));
	}

	public function getName()
	{
		return 'SegproActs';
	}
}

?>