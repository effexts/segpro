<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // uta_seg_pro_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'uta_seg_pro_homepage');
            }

            return array (  '_controller' => 'UTA\\SegProBundle\\Controller\\HomeController::indexAction',  '_route' => 'uta_seg_pro_homepage',);
        }

        // uta_segpro_resumen_proyecto
        if (0 === strpos($pathinfo, '/resumen') && preg_match('#^/resumen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uta_segpro_resumen_proyecto')), array (  '_controller' => 'UTA\\SegProBundle\\Controller\\ProyectoController::resumenAction',));
        }

        // uta_segpro_statsporproyecto
        if (0 === strpos($pathinfo, '/estadistica-por-proyecto') && preg_match('#^/estadistica\\-por\\-proyecto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uta_segpro_statsporproyecto')), array (  '_controller' => 'UTA\\SegProBundle\\Controller\\ProyectoController::statsPorProyectoAction',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'UTA\\SegProBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_dashboard');
                }

                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/uta/segpro')) {
                if (0 === strpos($pathinfo, '/admin/uta/segpro/estadoactividad')) {
                    // admin_uta_segpro_estadoactividad_list
                    if ($pathinfo === '/admin/uta/segpro/estadoactividad/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.estadoactividad',  '_sonata_name' => 'admin_uta_segpro_estadoactividad_list',  '_route' => 'admin_uta_segpro_estadoactividad_list',);
                    }

                    // admin_uta_segpro_estadoactividad_create
                    if ($pathinfo === '/admin/uta/segpro/estadoactividad/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.estadoactividad',  '_sonata_name' => 'admin_uta_segpro_estadoactividad_create',  '_route' => 'admin_uta_segpro_estadoactividad_create',);
                    }

                    // admin_uta_segpro_estadoactividad_batch
                    if ($pathinfo === '/admin/uta/segpro/estadoactividad/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.estadoactividad',  '_sonata_name' => 'admin_uta_segpro_estadoactividad_batch',  '_route' => 'admin_uta_segpro_estadoactividad_batch',);
                    }

                    // admin_uta_segpro_estadoactividad_edit
                    if (preg_match('#^/admin/uta/segpro/estadoactividad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_estadoactividad_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.estadoactividad',  '_sonata_name' => 'admin_uta_segpro_estadoactividad_edit',));
                    }

                    // admin_uta_segpro_estadoactividad_delete
                    if (preg_match('#^/admin/uta/segpro/estadoactividad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_estadoactividad_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.estadoactividad',  '_sonata_name' => 'admin_uta_segpro_estadoactividad_delete',));
                    }

                    // admin_uta_segpro_estadoactividad_show
                    if (preg_match('#^/admin/uta/segpro/estadoactividad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_estadoactividad_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.estadoactividad',  '_sonata_name' => 'admin_uta_segpro_estadoactividad_show',));
                    }

                    // admin_uta_segpro_estadoactividad_export
                    if ($pathinfo === '/admin/uta/segpro/estadoactividad/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.estadoactividad',  '_sonata_name' => 'admin_uta_segpro_estadoactividad_export',  '_route' => 'admin_uta_segpro_estadoactividad_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/uta/segpro/cargo')) {
                    // admin_uta_segpro_cargo_list
                    if ($pathinfo === '/admin/uta/segpro/cargo/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.cargo',  '_sonata_name' => 'admin_uta_segpro_cargo_list',  '_route' => 'admin_uta_segpro_cargo_list',);
                    }

                    // admin_uta_segpro_cargo_create
                    if ($pathinfo === '/admin/uta/segpro/cargo/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.cargo',  '_sonata_name' => 'admin_uta_segpro_cargo_create',  '_route' => 'admin_uta_segpro_cargo_create',);
                    }

                    // admin_uta_segpro_cargo_batch
                    if ($pathinfo === '/admin/uta/segpro/cargo/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.cargo',  '_sonata_name' => 'admin_uta_segpro_cargo_batch',  '_route' => 'admin_uta_segpro_cargo_batch',);
                    }

                    // admin_uta_segpro_cargo_edit
                    if (preg_match('#^/admin/uta/segpro/cargo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_cargo_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.cargo',  '_sonata_name' => 'admin_uta_segpro_cargo_edit',));
                    }

                    // admin_uta_segpro_cargo_delete
                    if (preg_match('#^/admin/uta/segpro/cargo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_cargo_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.cargo',  '_sonata_name' => 'admin_uta_segpro_cargo_delete',));
                    }

                    // admin_uta_segpro_cargo_show
                    if (preg_match('#^/admin/uta/segpro/cargo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_cargo_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.cargo',  '_sonata_name' => 'admin_uta_segpro_cargo_show',));
                    }

                    // admin_uta_segpro_cargo_export
                    if ($pathinfo === '/admin/uta/segpro/cargo/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.cargo',  '_sonata_name' => 'admin_uta_segpro_cargo_export',  '_route' => 'admin_uta_segpro_cargo_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/uta/segpro/fuentedefinanciamiento')) {
                    // admin_uta_segpro_fuentedefinanciamiento_list
                    if ($pathinfo === '/admin/uta/segpro/fuentedefinanciamiento/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.fuentedefinanciamiento',  '_sonata_name' => 'admin_uta_segpro_fuentedefinanciamiento_list',  '_route' => 'admin_uta_segpro_fuentedefinanciamiento_list',);
                    }

                    // admin_uta_segpro_fuentedefinanciamiento_create
                    if ($pathinfo === '/admin/uta/segpro/fuentedefinanciamiento/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.fuentedefinanciamiento',  '_sonata_name' => 'admin_uta_segpro_fuentedefinanciamiento_create',  '_route' => 'admin_uta_segpro_fuentedefinanciamiento_create',);
                    }

                    // admin_uta_segpro_fuentedefinanciamiento_batch
                    if ($pathinfo === '/admin/uta/segpro/fuentedefinanciamiento/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.fuentedefinanciamiento',  '_sonata_name' => 'admin_uta_segpro_fuentedefinanciamiento_batch',  '_route' => 'admin_uta_segpro_fuentedefinanciamiento_batch',);
                    }

                    // admin_uta_segpro_fuentedefinanciamiento_edit
                    if (preg_match('#^/admin/uta/segpro/fuentedefinanciamiento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_fuentedefinanciamiento_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.fuentedefinanciamiento',  '_sonata_name' => 'admin_uta_segpro_fuentedefinanciamiento_edit',));
                    }

                    // admin_uta_segpro_fuentedefinanciamiento_delete
                    if (preg_match('#^/admin/uta/segpro/fuentedefinanciamiento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_fuentedefinanciamiento_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.fuentedefinanciamiento',  '_sonata_name' => 'admin_uta_segpro_fuentedefinanciamiento_delete',));
                    }

                    // admin_uta_segpro_fuentedefinanciamiento_show
                    if (preg_match('#^/admin/uta/segpro/fuentedefinanciamiento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_fuentedefinanciamiento_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.fuentedefinanciamiento',  '_sonata_name' => 'admin_uta_segpro_fuentedefinanciamiento_show',));
                    }

                    // admin_uta_segpro_fuentedefinanciamiento_export
                    if ($pathinfo === '/admin/uta/segpro/fuentedefinanciamiento/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.fuentedefinanciamiento',  '_sonata_name' => 'admin_uta_segpro_fuentedefinanciamiento_export',  '_route' => 'admin_uta_segpro_fuentedefinanciamiento_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/uta/segpro/usuario')) {
                    // admin_uta_segpro_usuario_list
                    if ($pathinfo === '/admin/uta/segpro/usuario/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.usuario',  '_sonata_name' => 'admin_uta_segpro_usuario_list',  '_route' => 'admin_uta_segpro_usuario_list',);
                    }

                    // admin_uta_segpro_usuario_create
                    if ($pathinfo === '/admin/uta/segpro/usuario/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.usuario',  '_sonata_name' => 'admin_uta_segpro_usuario_create',  '_route' => 'admin_uta_segpro_usuario_create',);
                    }

                    // admin_uta_segpro_usuario_batch
                    if ($pathinfo === '/admin/uta/segpro/usuario/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.usuario',  '_sonata_name' => 'admin_uta_segpro_usuario_batch',  '_route' => 'admin_uta_segpro_usuario_batch',);
                    }

                    // admin_uta_segpro_usuario_edit
                    if (preg_match('#^/admin/uta/segpro/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_usuario_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.usuario',  '_sonata_name' => 'admin_uta_segpro_usuario_edit',));
                    }

                    // admin_uta_segpro_usuario_delete
                    if (preg_match('#^/admin/uta/segpro/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_usuario_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.usuario',  '_sonata_name' => 'admin_uta_segpro_usuario_delete',));
                    }

                    // admin_uta_segpro_usuario_show
                    if (preg_match('#^/admin/uta/segpro/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_usuario_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.usuario',  '_sonata_name' => 'admin_uta_segpro_usuario_show',));
                    }

                    // admin_uta_segpro_usuario_export
                    if ($pathinfo === '/admin/uta/segpro/usuario/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.usuario',  '_sonata_name' => 'admin_uta_segpro_usuario_export',  '_route' => 'admin_uta_segpro_usuario_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/uta/segpro/actividad')) {
                    // admin_uta_segpro_actividad_list
                    if ($pathinfo === '/admin/uta/segpro/actividad/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.actividad',  '_sonata_name' => 'admin_uta_segpro_actividad_list',  '_route' => 'admin_uta_segpro_actividad_list',);
                    }

                    // admin_uta_segpro_actividad_create
                    if ($pathinfo === '/admin/uta/segpro/actividad/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.actividad',  '_sonata_name' => 'admin_uta_segpro_actividad_create',  '_route' => 'admin_uta_segpro_actividad_create',);
                    }

                    // admin_uta_segpro_actividad_batch
                    if ($pathinfo === '/admin/uta/segpro/actividad/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.actividad',  '_sonata_name' => 'admin_uta_segpro_actividad_batch',  '_route' => 'admin_uta_segpro_actividad_batch',);
                    }

                    // admin_uta_segpro_actividad_edit
                    if (preg_match('#^/admin/uta/segpro/actividad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_actividad_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.actividad',  '_sonata_name' => 'admin_uta_segpro_actividad_edit',));
                    }

                    // admin_uta_segpro_actividad_delete
                    if (preg_match('#^/admin/uta/segpro/actividad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_actividad_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.actividad',  '_sonata_name' => 'admin_uta_segpro_actividad_delete',));
                    }

                    // admin_uta_segpro_actividad_show
                    if (preg_match('#^/admin/uta/segpro/actividad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_actividad_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.actividad',  '_sonata_name' => 'admin_uta_segpro_actividad_show',));
                    }

                    // admin_uta_segpro_actividad_export
                    if ($pathinfo === '/admin/uta/segpro/actividad/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.actividad',  '_sonata_name' => 'admin_uta_segpro_actividad_export',  '_route' => 'admin_uta_segpro_actividad_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/uta/segpro/estadoproyecto')) {
                    // admin_uta_segpro_estadoproyecto_list
                    if ($pathinfo === '/admin/uta/segpro/estadoproyecto/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.estadoproyecto',  '_sonata_name' => 'admin_uta_segpro_estadoproyecto_list',  '_route' => 'admin_uta_segpro_estadoproyecto_list',);
                    }

                    // admin_uta_segpro_estadoproyecto_create
                    if ($pathinfo === '/admin/uta/segpro/estadoproyecto/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.estadoproyecto',  '_sonata_name' => 'admin_uta_segpro_estadoproyecto_create',  '_route' => 'admin_uta_segpro_estadoproyecto_create',);
                    }

                    // admin_uta_segpro_estadoproyecto_batch
                    if ($pathinfo === '/admin/uta/segpro/estadoproyecto/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.estadoproyecto',  '_sonata_name' => 'admin_uta_segpro_estadoproyecto_batch',  '_route' => 'admin_uta_segpro_estadoproyecto_batch',);
                    }

                    // admin_uta_segpro_estadoproyecto_edit
                    if (preg_match('#^/admin/uta/segpro/estadoproyecto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_estadoproyecto_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.estadoproyecto',  '_sonata_name' => 'admin_uta_segpro_estadoproyecto_edit',));
                    }

                    // admin_uta_segpro_estadoproyecto_delete
                    if (preg_match('#^/admin/uta/segpro/estadoproyecto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_estadoproyecto_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.estadoproyecto',  '_sonata_name' => 'admin_uta_segpro_estadoproyecto_delete',));
                    }

                    // admin_uta_segpro_estadoproyecto_show
                    if (preg_match('#^/admin/uta/segpro/estadoproyecto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_estadoproyecto_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.estadoproyecto',  '_sonata_name' => 'admin_uta_segpro_estadoproyecto_show',));
                    }

                    // admin_uta_segpro_estadoproyecto_export
                    if ($pathinfo === '/admin/uta/segpro/estadoproyecto/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.estadoproyecto',  '_sonata_name' => 'admin_uta_segpro_estadoproyecto_export',  '_route' => 'admin_uta_segpro_estadoproyecto_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/uta/segpro/fichaproyecto')) {
                    // admin_uta_segpro_fichaproyecto_list
                    if ($pathinfo === '/admin/uta/segpro/fichaproyecto/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.fichaproyecto',  '_sonata_name' => 'admin_uta_segpro_fichaproyecto_list',  '_route' => 'admin_uta_segpro_fichaproyecto_list',);
                    }

                    // admin_uta_segpro_fichaproyecto_create
                    if ($pathinfo === '/admin/uta/segpro/fichaproyecto/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.fichaproyecto',  '_sonata_name' => 'admin_uta_segpro_fichaproyecto_create',  '_route' => 'admin_uta_segpro_fichaproyecto_create',);
                    }

                    // admin_uta_segpro_fichaproyecto_batch
                    if ($pathinfo === '/admin/uta/segpro/fichaproyecto/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.fichaproyecto',  '_sonata_name' => 'admin_uta_segpro_fichaproyecto_batch',  '_route' => 'admin_uta_segpro_fichaproyecto_batch',);
                    }

                    // admin_uta_segpro_fichaproyecto_edit
                    if (preg_match('#^/admin/uta/segpro/fichaproyecto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_fichaproyecto_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.fichaproyecto',  '_sonata_name' => 'admin_uta_segpro_fichaproyecto_edit',));
                    }

                    // admin_uta_segpro_fichaproyecto_delete
                    if (preg_match('#^/admin/uta/segpro/fichaproyecto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_fichaproyecto_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.fichaproyecto',  '_sonata_name' => 'admin_uta_segpro_fichaproyecto_delete',));
                    }

                    // admin_uta_segpro_fichaproyecto_show
                    if (preg_match('#^/admin/uta/segpro/fichaproyecto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_fichaproyecto_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.fichaproyecto',  '_sonata_name' => 'admin_uta_segpro_fichaproyecto_show',));
                    }

                    // admin_uta_segpro_fichaproyecto_export
                    if ($pathinfo === '/admin/uta/segpro/fichaproyecto/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.fichaproyecto',  '_sonata_name' => 'admin_uta_segpro_fichaproyecto_export',  '_route' => 'admin_uta_segpro_fichaproyecto_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/uta/segpro/objetivos')) {
                    // admin_uta_segpro_objetivos_list
                    if ($pathinfo === '/admin/uta/segpro/objetivos/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.objetivos',  '_sonata_name' => 'admin_uta_segpro_objetivos_list',  '_route' => 'admin_uta_segpro_objetivos_list',);
                    }

                    // admin_uta_segpro_objetivos_create
                    if ($pathinfo === '/admin/uta/segpro/objetivos/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.objetivos',  '_sonata_name' => 'admin_uta_segpro_objetivos_create',  '_route' => 'admin_uta_segpro_objetivos_create',);
                    }

                    // admin_uta_segpro_objetivos_batch
                    if ($pathinfo === '/admin/uta/segpro/objetivos/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.objetivos',  '_sonata_name' => 'admin_uta_segpro_objetivos_batch',  '_route' => 'admin_uta_segpro_objetivos_batch',);
                    }

                    // admin_uta_segpro_objetivos_edit
                    if (preg_match('#^/admin/uta/segpro/objetivos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_objetivos_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.objetivos',  '_sonata_name' => 'admin_uta_segpro_objetivos_edit',));
                    }

                    // admin_uta_segpro_objetivos_delete
                    if (preg_match('#^/admin/uta/segpro/objetivos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_objetivos_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.objetivos',  '_sonata_name' => 'admin_uta_segpro_objetivos_delete',));
                    }

                    // admin_uta_segpro_objetivos_show
                    if (preg_match('#^/admin/uta/segpro/objetivos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_objetivos_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.objetivos',  '_sonata_name' => 'admin_uta_segpro_objetivos_show',));
                    }

                    // admin_uta_segpro_objetivos_export
                    if ($pathinfo === '/admin/uta/segpro/objetivos/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.objetivos',  '_sonata_name' => 'admin_uta_segpro_objetivos_export',  '_route' => 'admin_uta_segpro_objetivos_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/uta/segpro/segpro')) {
                    // admin_uta_segpro_segpro_list
                    if ($pathinfo === '/admin/uta/segpro/segpro/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.segpro',  '_sonata_name' => 'admin_uta_segpro_segpro_list',  '_route' => 'admin_uta_segpro_segpro_list',);
                    }

                    // admin_uta_segpro_segpro_create
                    if ($pathinfo === '/admin/uta/segpro/segpro/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.segpro',  '_sonata_name' => 'admin_uta_segpro_segpro_create',  '_route' => 'admin_uta_segpro_segpro_create',);
                    }

                    // admin_uta_segpro_segpro_batch
                    if ($pathinfo === '/admin/uta/segpro/segpro/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.segpro',  '_sonata_name' => 'admin_uta_segpro_segpro_batch',  '_route' => 'admin_uta_segpro_segpro_batch',);
                    }

                    // admin_uta_segpro_segpro_edit
                    if (preg_match('#^/admin/uta/segpro/segpro/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_segpro_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.segpro',  '_sonata_name' => 'admin_uta_segpro_segpro_edit',));
                    }

                    // admin_uta_segpro_segpro_delete
                    if (preg_match('#^/admin/uta/segpro/segpro/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_segpro_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.segpro',  '_sonata_name' => 'admin_uta_segpro_segpro_delete',));
                    }

                    // admin_uta_segpro_segpro_show
                    if (preg_match('#^/admin/uta/segpro/segpro/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_uta_segpro_segpro_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.segpro',  '_sonata_name' => 'admin_uta_segpro_segpro_show',));
                    }

                    // admin_uta_segpro_segpro_export
                    if ($pathinfo === '/admin/uta/segpro/segpro/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.segpro',  '_sonata_name' => 'admin_uta_segpro_segpro_export',  '_route' => 'admin_uta_segpro_segpro_export',);
                    }

                }

            }

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
