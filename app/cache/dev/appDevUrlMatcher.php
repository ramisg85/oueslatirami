<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/bootstrap')) {
            // _assetic_bootstrap_css
            if ($pathinfo === '/css/bootstrap.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
            }

            if (0 === strpos($pathinfo, '/css/bootstrap_')) {
                // _assetic_bootstrap_css_0
                if ($pathinfo === '/css/bootstrap__bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                }

                // _assetic_bootstrap_css_1
                if ($pathinfo === '/css/bootstrap_form_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/bootstrap')) {
                // _assetic_bootstrap_js
                if ($pathinfo === '/js/bootstrap.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                if (0 === strpos($pathinfo, '/js/bootstrap_')) {
                    // _assetic_bootstrap_js_0
                    if ($pathinfo === '/js/bootstrap_transition_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                    }

                    // _assetic_bootstrap_js_1
                    if ($pathinfo === '/js/bootstrap_alert_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
                    }

                    // _assetic_bootstrap_js_2
                    if ($pathinfo === '/js/bootstrap_button_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/bootstrap_c')) {
                        // _assetic_bootstrap_js_3
                        if ($pathinfo === '/js/bootstrap_carousel_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_3',);
                        }

                        // _assetic_bootstrap_js_4
                        if ($pathinfo === '/js/bootstrap_collapse_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_4',);
                        }

                    }

                    // _assetic_bootstrap_js_5
                    if ($pathinfo === '/js/bootstrap_dropdown_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_5',);
                    }

                    // _assetic_bootstrap_js_6
                    if ($pathinfo === '/js/bootstrap_modal_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_6',);
                    }

                    // _assetic_bootstrap_js_7
                    if ($pathinfo === '/js/bootstrap_tooltip_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_7',);
                    }

                    // _assetic_bootstrap_js_8
                    if ($pathinfo === '/js/bootstrap_popover_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_8',);
                    }

                    // _assetic_bootstrap_js_9
                    if ($pathinfo === '/js/bootstrap_scrollspy_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_9',);
                    }

                    // _assetic_bootstrap_js_10
                    if ($pathinfo === '/js/bootstrap_tab_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_10',);
                    }

                    // _assetic_bootstrap_js_11
                    if ($pathinfo === '/js/bootstrap_affix_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_11',);
                    }

                    // _assetic_bootstrap_js_12
                    if ($pathinfo === '/js/bootstrap_bc-bootstrap-collection_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_12',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/jquery')) {
                // _assetic_jquery
                if ($pathinfo === '/js/jquery.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                // _assetic_jquery_0
                if ($pathinfo === '/js/jquery_jquery-1.11.1_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // ro_front_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/home/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ro_front_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_front_homepage')), array (  '_controller' => 'FrontOffice\\RO\\FrontBundle\\Controller\\DefaultController::indexAction',));
        }

        // ro_reservation_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/lister_reservation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_reservation_homepage')), array (  '_controller' => 'BackOffice\\RO\\ReservationBundle\\Controller\\reservationController::lister_reservationAction',));
        }

        // ro_reservation_add
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add_reservation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_reservation_add')), array (  '_controller' => 'BackOffice\\RO\\ReservationBundle\\Controller\\reservationController::add_reservationAction',));
        }

        // ro_reservation_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit_reservation/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_reservation_edit')), array (  '_controller' => 'BackOffice\\RO\\ReservationBundle\\Controller\\reservationController::edit_reservationAction',));
        }

        // ro_reservation_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/delete_reservation/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_reservation_delete')), array (  '_controller' => 'BackOffice\\RO\\ReservationBundle\\Controller\\reservationController::delete_reservationAction',));
        }

        // ro_reservation_detail
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/detail_reservation/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_reservation_detail')), array (  '_controller' => 'BackOffice\\RO\\ReservationBundle\\Controller\\reservationController::detail_reservationAction',));
        }

        // ro_facture_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/lister_facture$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_facture_homepage')), array (  '_controller' => 'ROFactureBundle:facture:lister_facture',));
        }

        // ro_facture_add
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add_facture$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_facture_add')), array (  '_controller' => 'ROFactureBundle:facture:add_facture',));
        }

        // ro_facture_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit_facture/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_facture_edit')), array (  '_controller' => 'ROFactureBundle:facture:edit_facture',));
        }

        // ro_facture_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/delete_facture/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_facture_delete')), array (  '_controller' => 'ROFactureBundle:facture:delete_facture',));
        }

        // ro_facture_detail
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/detail_facture/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_facture_detail')), array (  '_controller' => 'ROFactureBundle:facture:detail_facture',));
        }

        // ro_equipement_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/lister_equipement$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_equipement_homepage')), array (  '_controller' => 'BackOffice\\RO\\EquipementBundle\\Controller\\equipementController::lister_equipementAction',));
        }

        // ro_equipement_add
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add_equipement$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_equipement_add')), array (  '_controller' => 'BackOffice\\RO\\EquipementBundle\\Controller\\equipementController::add_equipementAction',));
        }

        // ro_equipement_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit_equipement/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_equipement_edit')), array (  '_controller' => 'BackOffice\\RO\\EquipementBundle\\Controller\\equipementController::edit_equipementAction',));
        }

        // ro_equipement_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/delete_equipement/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_equipement_delete')), array (  '_controller' => 'BackOffice\\RO\\EquipementBundle\\Controller\\equipementController::delete_equipementAction',));
        }

        // ro_equipement_detail
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/detail_equipement/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_equipement_detail')), array (  '_controller' => 'BackOffice\\RO\\EquipementBundle\\Controller\\equipementController::detail_equipementAction',));
        }

        // ro_contrat_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/lister_contrat$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_contrat_homepage')), array (  '_controller' => 'BackOffice\\RO\\ContratBundle\\Controller\\contratController::lister_contratAction',));
        }

        // ro_contrat_add
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add_contrat$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_contrat_add')), array (  '_controller' => 'BackOffice\\RO\\ContratBundle\\Controller\\contratController::add_contratAction',));
        }

        // ro_contrat_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit_contrat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_contrat_edit')), array (  '_controller' => 'BackOffice\\RO\\ContratBundle\\Controller\\contratController::edit_contratAction',));
        }

        // ro_contrat_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/delete_contrat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_contrat_delete')), array (  '_controller' => 'BackOffice\\RO\\ContratBundle\\Controller\\contratController::delete_contratAction',));
        }

        // ro_contrat_detail
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/detail_contrat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_contrat_detail')), array (  '_controller' => 'BackOffice\\RO\\ContratBundle\\Controller\\contratController::detail_contratAction',));
        }

        // ro_client_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/lister_client$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_client_homepage')), array (  '_controller' => 'ROClientBundle:client:lister_client',));
        }

        // ro_client_add
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add_client$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_client_add')), array (  '_controller' => 'ROClientBundle:client:add_client',));
        }

        // ro_client_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit_client/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_client_edit')), array (  '_controller' => 'ROClientBundle:client:edit_client',));
        }

        // ro_client_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/delete_client/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_client_delete')), array (  '_controller' => 'ROClientBundle:client:delete_client',));
        }

        // ro_client_detail
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/detail_client/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_client_detail')), array (  '_controller' => 'ROClientBundle:client:detail_client',));
        }

        // ro_entreprise_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/lister_entreprise$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_entreprise_homepage')), array (  '_controller' => 'BackOffice\\RO\\EntrepriseBundle\\Controller\\entrepriseController::lister_entrepriseAction',));
        }

        // ro_entreprise_add
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add_entreprise$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_entreprise_add')), array (  '_controller' => 'BackOffice\\RO\\EntrepriseBundle\\Controller\\entrepriseController::add_entrepriseAction',));
        }

        // ro_entreprise_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit_entreprise/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_entreprise_edit')), array (  '_controller' => 'BackOffice\\RO\\EntrepriseBundle\\Controller\\entrepriseController::edit_entrepriseAction',));
        }

        // ro_entreprise_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/delete_entreprise/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_entreprise_delete')), array (  '_controller' => 'BackOffice\\RO\\EntrepriseBundle\\Controller\\entrepriseController::delete_entrepriseAction',));
        }

        // ro_entreprise_detail
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/detail_entreprise/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_entreprise_detail')), array (  '_controller' => 'BackOffice\\RO\\EntrepriseBundle\\Controller\\entrepriseController::detail_entrepriseAction',));
        }

        // ro_categorie_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/lister_categorie$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_categorie_homepage')), array (  '_controller' => 'BackOffice\\RO\\CategorieBundle\\Controller\\categorieController::lister_categorieAction',));
        }

        // ro_categorie_add
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add_categorie$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_categorie_add')), array (  '_controller' => 'BackOffice\\RO\\CategorieBundle\\Controller\\categorieController::add_categorieAction',));
        }

        // ro_categorie_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit_categorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_categorie_edit')), array (  '_controller' => 'BackOffice\\RO\\CategorieBundle\\Controller\\categorieController::edit_categorieAction',));
        }

        // ro_categorie_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/delete_categorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_categorie_delete')), array (  '_controller' => 'BackOffice\\RO\\CategorieBundle\\Controller\\categorieController::delete_categorieAction',));
        }

        // ro_categorie_detail
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/detail_categorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_categorie_detail')), array (  '_controller' => 'BackOffice\\RO\\CategorieBundle\\Controller\\categorieController::detail_categorieAction',));
        }

        // ro_marque_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/lister_marque$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_marque_homepage')), array (  '_controller' => 'BackOffice\\RO\\MarqueBundle\\Controller\\marqueController::lister_marqueAction',));
        }

        // ro_marque_add
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add_marque$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_marque_add')), array (  '_controller' => 'BackOffice\\RO\\MarqueBundle\\Controller\\marqueController::add_marqueAction',));
        }

        // ro_marque_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit_marque/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_marque_edit')), array (  '_controller' => 'BackOffice\\RO\\MarqueBundle\\Controller\\marqueController::edit_marqueAction',));
        }

        // ro_marque_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/delete_marque/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_marque_delete')), array (  '_controller' => 'BackOffice\\RO\\MarqueBundle\\Controller\\marqueController::delete_marqueAction',));
        }

        // ro_marque_detail
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/detail_marque/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_marque_detail')), array (  '_controller' => 'BackOffice\\RO\\MarqueBundle\\Controller\\marqueController::detail_marqueAction',));
        }

        // ro_modele_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/lister_modele$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_modele_homepage')), array (  '_controller' => 'BackOffice\\RO\\ModeleBundle\\Controller\\modeleController::lister_modeleAction',));
        }

        // ro_modele_add
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add_modele$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_modele_add')), array (  '_controller' => 'BackOffice\\RO\\ModeleBundle\\Controller\\modeleController::add_modeleAction',));
        }

        // ro_modele_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit_modele/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_modele_edit')), array (  '_controller' => 'BackOffice\\RO\\ModeleBundle\\Controller\\modeleController::edit_modeleAction',));
        }

        // ro_modele_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/delete_modele/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_modele_delete')), array (  '_controller' => 'BackOffice\\RO\\ModeleBundle\\Controller\\modeleController::delete_modeleAction',));
        }

        // ro_modele_detail
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/detail_modele/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_modele_detail')), array (  '_controller' => 'BackOffice\\RO\\ModeleBundle\\Controller\\modeleController::detail_modeleAction',));
        }

        // ro_vehicule_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/lister_vehicule$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_vehicule_homepage')), array (  '_controller' => 'BackOffice\\RO\\VehiculeBundle\\Controller\\vehiculeController::lister_vehiculeAction',));
        }

        // ro_vehicule_add
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add_vehicule$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_vehicule_add')), array (  '_controller' => 'BackOffice\\RO\\VehiculeBundle\\Controller\\vehiculeController::add_vehiculeAction',));
        }

        // ro_vehicule_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit_vehicule/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_vehicule_edit')), array (  '_controller' => 'BackOffice\\RO\\VehiculeBundle\\Controller\\vehiculeController::edit_vehiculeAction',));
        }

        // ro_vehicule_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/delete_vehicule/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_vehicule_delete')), array (  '_controller' => 'BackOffice\\RO\\VehiculeBundle\\Controller\\vehiculeController::delete_vehiculeAction',));
        }

        // ro_vehicule_detail
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/detail_vehicule/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_vehicule_detail')), array (  '_controller' => 'BackOffice\\RO\\VehiculeBundle\\Controller\\vehiculeController::detail_vehiculeAction',));
        }

        // ro_vehicule_remplir_modele
        if (0 === strpos($pathinfo, '/admin/remplir_modele') && preg_match('#^/admin/remplir_modele/(?P<idMarque>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ro_vehicule_remplir_modele;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_vehicule_remplir_modele')), array (  '_controller' => 'BackOffice\\RO\\VehiculeBundle\\Controller\\vehiculeController::remplir_modeleAction',));
        }
        not_ro_vehicule_remplir_modele:

        // ro_agence_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/lister_agence$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_agence_homepage')), array (  '_controller' => 'BackOffice\\RO\\AgenceBundle\\Controller\\agenceController::lister_agenceAction',));
        }

        // ro_agence_add
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add_agence$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_agence_add')), array (  '_controller' => 'BackOffice\\RO\\AgenceBundle\\Controller\\agenceController::add_agenceAction',));
        }

        // ro_agence_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit_agence/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_agence_edit')), array (  '_controller' => 'BackOffice\\RO\\AgenceBundle\\Controller\\agenceController::edit_agenceAction',));
        }

        // ro_agence_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/delete_agence/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_agence_delete')), array (  '_controller' => 'BackOffice\\RO\\AgenceBundle\\Controller\\agenceController::delete_agenceAction',));
        }

        // ro_agence_detail
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/detail_agence/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_agence_detail')), array (  '_controller' => 'BackOffice\\RO\\AgenceBundle\\Controller\\agenceController::detail_agenceAction',));
        }

        if (0 === strpos($pathinfo, '/connexion_utilisateur')) {
            // utilisateur_connexion
            if ($pathinfo === '/connexion_utilisateur') {
                return array (  '_controller' => 'BackOffice\\RO\\UtilisateurBundle\\Controller\\utilisateurController::connexion_utilisateurAction',  '_route' => 'utilisateur_connexion',);
            }

            // utilisateur_connexion_check
            if ($pathinfo === '/connexion_utilisateur_check') {
                return array('_route' => 'utilisateur_connexion_check');
            }

        }

        // utilisateur_deconnexion
        if ($pathinfo === '/deconnexion_utilisateur') {
            return array('_route' => 'utilisateur_deconnexion');
        }

        // ro_utilisateur_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/lister_utilisateur$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_utilisateur_homepage')), array (  '_controller' => 'BackOffice\\RO\\UtilisateurBundle\\Controller\\utilisateurController::lister_utilisateurAction',));
        }

        // ro_utilisateur_add
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/add_utilisateur$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_utilisateur_add')), array (  '_controller' => 'BackOffice\\RO\\UtilisateurBundle\\Controller\\utilisateurController::add_utilisateurAction',));
        }

        // ro_utilisateur_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/edit_utilisateur/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_utilisateur_edit')), array (  '_controller' => 'BackOffice\\RO\\UtilisateurBundle\\Controller\\utilisateurController::edit_utilisateurAction',));
        }

        // ro_utilisateur_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/delete_utilisateur/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_utilisateur_delete')), array (  '_controller' => 'BackOffice\\RO\\UtilisateurBundle\\Controller\\utilisateurController::delete_utilisateurAction',));
        }

        // ro_utilisateur_detail
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/detail_utilisateur/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ro_utilisateur_detail')), array (  '_controller' => 'BackOffice\\RO\\UtilisateurBundle\\Controller\\utilisateurController::detail_utilisateurAction',));
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
