<?php 

namespace UTA\SegProBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UsuarioAdmin extends Admin
{
    
    protected $securtityContext;
    
    public function __construct($code, $class, $baseControllerName, ContainerInterface $container)
    {
        parent::__construct($code, $class, $baseControllerName);
        $this->container = $container;
    }
    //Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper){
        $formMapper
            ->add('nombre', 'text', array('label' => 'Nombre'))
            ->add('apellido', 'text', array('label'=>'Apellido'))
            ->add('roles', 'sonata_type_model', array('expanded' => true, 'by_reference' => false, 'multiple' => true, 'class' => 'UTA\SegProBundle\Entity\Cargo', 'label'=>'Cargo', 'compound'=>true ))
            ->add('username', 'text', array('label' => 'Nombre de Usuario'))
            ->add('password', 'password', array('label' => 'Contraseña'))
//            ->add('salt', 'text', array('label' => 'Salt', 'required'=>false))
//            ->add('isActive', 'text', array('label' => '¿Está Activo?', 'attr'=>array('widget'=>'choice')))
            ->add('segprouser','sonata_type_model', array('class'=> 'UTA\SegProBundle\Entity\Segpro', 'label'=>'Proyectos Asignados', 'required'=>false, 'expanded'=>true, 'by_reference'=>false,'multiple'=>true,'compound'=>true))
            //->add('segprouser','sonata_type_collection', array('label'=>'Proyectos Asignados'), array('edit'=>'standard', 'inline'=>'standard'))
        ;
    }

    //Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
//            ->add('user')
//            ->add('nombre')
//            ->add('apellido')
//            ->add('cargo')
//            ->add('segprouser')
        ;
    }

    //Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->add('nombre')
            ->add('apellido')
            ->add('roles')
            ->add('segprouser')
            ->add('password')
        ;
    }
    
    public function prePersist($usuario) {
        $factory = $this->container->get('security.encoder_factory');
        $encoder = $factory->getEncoder($usuario);
        $password = $encoder->encodePassword($usuario->getPassword(), $usuario->getSalt());
        $usuario->setPassword($password);
        //parent::prePersist($usuario);
    }
    public function preUpdate($usuario) {
        $factory = $this->container->get('security.encoder_factory');
        $encoder = $factory->getEncoder($usuario);
        $password = $encoder->encodePassword($usuario->getPassword(), $usuario->getSalt());
        $usuario->setPassword($password);
        //parent::preUpdate($usuario);
    }
}

?>