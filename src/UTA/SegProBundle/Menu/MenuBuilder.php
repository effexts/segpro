<?php

namespace UTA\SegProBundle\Menu;

/**
 * Descripción: Clase utilizada para la realización automática de los breadcrumbs.
 *
 * @author Kenny Rodriguez Loayza
 */

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder {
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createBreadcrumbMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'breadcrumbs');
        // this item will always be displayed
        $menu->addChild('Inicio', array('route' => 'uta_seg_pro_homepage'));
        
        // create the menu according to the route
        switch($request->get('_route')){
            case 'uta_segpro_resumen_proyecto':
                $menu
                    ->addChild('label_resumen_proyecto', array('routeParameters' => array('id'=>$request->get('id'))))
                    ->setCurrent(true)  // setCurrent is use to add a "current" css class
                    ->setLabel($request->get('label'))
                ;
                
            break;
            case 'uta_segpro_statsporproyecto':
                $menu->addChild('label_resumen_proyecto', array(
                    'route'=>'uta_segpro_resumen_proyecto',
                    'routeParameters'=> array( 'id'=> $request->get('id'))
                ))
                     ->setLabel($request->get('label'))
                ;
                $menu
                    ->addChild('Estadísticas')
                    ->setCurrent(true)
//                    ->setLabel($request->get('label'))
                ;
            break;
            case 'uta_segpro_consulta':
                $menu->addChild('Consultas')
                    ->setCurrent(true);
            break;
            case 'uta_segpro_ver_todos':
                $menu->addChild('Ver todos')
                    ->setCurrent(true);
            break;
            case 'uta_segpro_admproyectos':
                $menu->addChild('Agregar Proyectos')
                    ->setCurrent(true);
            break;
//            case 'Acme_view_post':
//                $menu->addChild('label.list.post', array(
//                    'route' => 'Acme_list_post'
//                ));
//                
//                $menu
//                    ->addChild('label.view.post')
//                    ->setCurrent(true)
//                    ->setLabel($request->get('label'))
//                    // the "label" parameter must be passed in your controller
//                    // with $request->attributes->set('label','My label');
//                ;
//            break;
//            case 'Acme_add_comment_on_post':
//                $menu->addChild('label.list.post', array(
//                    'route' => 'Acme_list_post'
//                ));
//                
//                $menu
//                    ->addChild('label.view.post', array(
//                        'route' => 'Acme_view_post',
//                        'routeParameters' => array('slug' => $request->get('slug'))
//                        /* the "slug" parameter is the placeholder in the route
//                           Acme_add_comment_on_post. If no placeholder is used, then
//                           you must use the $request->attributes->set() method
//                        */
//                    ))
//                    ->setLabel($request->get('label'))
//                ;
//                $menu
//                    ->addChild('label.add.comment')
//                    ->setCurrent(true)
//                ;                    
//            break;            
        }

        return $menu;
    }
}
