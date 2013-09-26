<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        // _assetic_jquery
        if ($pathinfo === '/cache/js/84a41fe_part_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
        }

        // _assetic_jquery_0
        if ($pathinfo === '/assetic/jquery_jquery-1.7.2.min_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
        }

        // _assetic_jquery_ui
        if ($pathinfo === '/cache/js/84a41fe_part_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery_ui',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery_ui',);
        }

        // _assetic_jquery_ui_0
        if ($pathinfo === '/assetic/jquery_ui_jquery-ui-1.8.19.custom.min_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery_ui',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_ui_0',);
        }

        if (0 === strpos($pathinfo, '/cache')) {
            if (0 === strpos($pathinfo, '/cache/js/84a41fe')) {
                // _assetic_84a41fe
                if ($pathinfo === '/cache/js/84a41fe.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '84a41fe',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_84a41fe',);
                }

                if (0 === strpos($pathinfo, '/cache/js/84a41fe_')) {
                    if (0 === strpos($pathinfo, '/cache/js/84a41fe_part_')) {
                        // _assetic_84a41fe_0
                        if ($pathinfo === '/cache/js/84a41fe_part_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '84a41fe',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_84a41fe_0',);
                        }

                        // _assetic_84a41fe_1
                        if ($pathinfo === '/cache/js/84a41fe_part_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '84a41fe',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_84a41fe_1',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/cache/js/84a41fe_jquery.')) {
                        // _assetic_84a41fe_2
                        if ($pathinfo === '/cache/js/84a41fe_jquery.wresize_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '84a41fe',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_84a41fe_2',);
                        }

                        // _assetic_84a41fe_3
                        if ($pathinfo === '/cache/js/84a41fe_jquery.mousewheel.min_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '84a41fe',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_84a41fe_3',);
                        }

                        // _assetic_84a41fe_4
                        if ($pathinfo === '/cache/js/84a41fe_jquery.stf.carousel_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '84a41fe',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_84a41fe_4',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/cache/css/8a19dbf')) {
                // _assetic_8a19dbf
                if ($pathinfo === '/cache/css/8a19dbf.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8a19dbf',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8a19dbf',);
                }

                // _assetic_8a19dbf_0
                if ($pathinfo === '/cache/css/8a19dbf_style_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8a19dbf',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8a19dbf_0',);
                }

            }

            if (0 === strpos($pathinfo, '/cache/js/de5976c')) {
                // _assetic_de5976c
                if ($pathinfo === '/cache/js/de5976c.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'de5976c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_de5976c',);
                }

                if (0 === strpos($pathinfo, '/cache/js/de5976c_')) {
                    // _assetic_de5976c_0
                    if ($pathinfo === '/cache/js/de5976c_jquery.markitup_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'de5976c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_de5976c_0',);
                    }

                    // _assetic_de5976c_1
                    if ($pathinfo === '/cache/js/de5976c_InlineUpload_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'de5976c',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_de5976c_1',);
                    }

                    // _assetic_de5976c_2
                    if ($pathinfo === '/cache/js/de5976c_markItUpSettings_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'de5976c',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_de5976c_2',);
                    }

                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Application\\Bundle\\DefaultBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // contacts
        if ($pathinfo === '/contacts') {
            return array (  '_controller' => 'Application\\Bundle\\DefaultBundle\\Controller\\DefaultController::contactsAction',  '_route' => 'contacts',);
        }

        // blog_post_upload_image
        if ($pathinfo === '/admin/blog/uploadImage') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_blog_post_upload_image;
            }

            return array (  '_controller' => 'Application\\Bundle\\DefaultBundle\\Controller\\UploadController::uploadImageAction',  '_route' => 'blog_post_upload_image',);
        }
        not_blog_post_upload_image:

        // portfolio_category_view
        if (0 === strpos($pathinfo, '/portfolio') && preg_match('#^/portfolio/(?P<slug>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_category_view')), array (  'page' => 1,  '_controller' => 'Stfalcon\\Bundle\\PortfolioBundle\\Controller\\CategoryController::viewAction',));
        }

        // portfolioProjectsApplyOrder
        if ($pathinfo === '/admin/portfolio/category/applyOrder') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_portfolioProjectsApplyOrder;
            }

            return array (  '_controller' => 'Stfalcon\\Bundle\\PortfolioBundle\\Controller\\CategoryController::orderProjects',  '_route' => 'portfolioProjectsApplyOrder',);
        }
        not_portfolioProjectsApplyOrder:

        // portfolio_project_view
        if (0 === strpos($pathinfo, '/portfolio') && preg_match('#^/portfolio/(?P<categorySlug>[^/]++)/(?P<projectSlug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio_project_view')), array (  '_controller' => 'Stfalcon\\Bundle\\PortfolioBundle\\Controller\\ProjectController::viewAction',));
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // blog
            if (preg_match('#^/blog(?:/(?P<title>page)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog')), array (  'page' => '1',  'title' => 'page',  '_controller' => 'Stfalcon\\Bundle\\BlogBundle\\Controller\\PostController::indexAction',));
            }

            // blog_post_view
            if (0 === strpos($pathinfo, '/blog/post') && preg_match('#^/blog/post/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post_view')), array (  '_controller' => 'Stfalcon\\Bundle\\BlogBundle\\Controller\\PostController::viewAction',));
            }

            // blog_rss
            if ($pathinfo === '/blog/rss') {
                return array (  '_controller' => 'Stfalcon\\Bundle\\BlogBundle\\Controller\\PostController::rssAction',  '_route' => 'blog_rss',);
            }

            // blog_tag_view
            if (0 === strpos($pathinfo, '/blog/tag') && preg_match('#^/blog/tag/(?P<text>[^/]++)(?:/(?P<title>page)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_tag_view')), array (  'page' => '1',  'title' => 'page',  '_controller' => 'Stfalcon\\Bundle\\BlogBundle\\Controller\\TagController::viewAction',));
            }

            // blog_post_disqus_sync
            if (0 === strpos($pathinfo, '/blog/post') && preg_match('#^/blog/post/(?P<slug>[^/]++)/disqus\\-sync$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post_disqus_sync')), array (  '_controller' => 'Stfalcon\\Bundle\\BlogBundle\\Controller\\CommentController::disqusSyncAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
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
                if ($pathinfo === '/admin/core/get-short-object-description') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/stfalcon')) {
                if (0 === strpos($pathinfo, '/admin/stfalcon/blog')) {
                    if (0 === strpos($pathinfo, '/admin/stfalcon/blog/post')) {
                        // admin_stfalcon_blog_post_list
                        if ($pathinfo === '/admin/stfalcon/blog/post/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'stfalcon_blog.admin.post',  '_sonata_name' => 'admin_stfalcon_blog_post_list',  '_route' => 'admin_stfalcon_blog_post_list',);
                        }

                        // admin_stfalcon_blog_post_create
                        if ($pathinfo === '/admin/stfalcon/blog/post/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'stfalcon_blog.admin.post',  '_sonata_name' => 'admin_stfalcon_blog_post_create',  '_route' => 'admin_stfalcon_blog_post_create',);
                        }

                        // admin_stfalcon_blog_post_batch
                        if ($pathinfo === '/admin/stfalcon/blog/post/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'stfalcon_blog.admin.post',  '_sonata_name' => 'admin_stfalcon_blog_post_batch',  '_route' => 'admin_stfalcon_blog_post_batch',);
                        }

                        // admin_stfalcon_blog_post_edit
                        if (preg_match('#^/admin/stfalcon/blog/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stfalcon_blog_post_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'stfalcon_blog.admin.post',  '_sonata_name' => 'admin_stfalcon_blog_post_edit',));
                        }

                        // admin_stfalcon_blog_post_delete
                        if (preg_match('#^/admin/stfalcon/blog/post/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stfalcon_blog_post_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'stfalcon_blog.admin.post',  '_sonata_name' => 'admin_stfalcon_blog_post_delete',));
                        }

                        // admin_stfalcon_blog_post_show
                        if (preg_match('#^/admin/stfalcon/blog/post/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stfalcon_blog_post_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'stfalcon_blog.admin.post',  '_sonata_name' => 'admin_stfalcon_blog_post_show',));
                        }

                        // admin_stfalcon_blog_post_export
                        if ($pathinfo === '/admin/stfalcon/blog/post/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'stfalcon_blog.admin.post',  '_sonata_name' => 'admin_stfalcon_blog_post_export',  '_route' => 'admin_stfalcon_blog_post_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/stfalcon/blog/tag')) {
                        // admin_stfalcon_blog_tag_list
                        if ($pathinfo === '/admin/stfalcon/blog/tag/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'stfalcon_blog.admin.tag',  '_sonata_name' => 'admin_stfalcon_blog_tag_list',  '_route' => 'admin_stfalcon_blog_tag_list',);
                        }

                        // admin_stfalcon_blog_tag_create
                        if ($pathinfo === '/admin/stfalcon/blog/tag/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'stfalcon_blog.admin.tag',  '_sonata_name' => 'admin_stfalcon_blog_tag_create',  '_route' => 'admin_stfalcon_blog_tag_create',);
                        }

                        // admin_stfalcon_blog_tag_batch
                        if ($pathinfo === '/admin/stfalcon/blog/tag/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'stfalcon_blog.admin.tag',  '_sonata_name' => 'admin_stfalcon_blog_tag_batch',  '_route' => 'admin_stfalcon_blog_tag_batch',);
                        }

                        // admin_stfalcon_blog_tag_edit
                        if (preg_match('#^/admin/stfalcon/blog/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stfalcon_blog_tag_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'stfalcon_blog.admin.tag',  '_sonata_name' => 'admin_stfalcon_blog_tag_edit',));
                        }

                        // admin_stfalcon_blog_tag_delete
                        if (preg_match('#^/admin/stfalcon/blog/tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stfalcon_blog_tag_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'stfalcon_blog.admin.tag',  '_sonata_name' => 'admin_stfalcon_blog_tag_delete',));
                        }

                        // admin_stfalcon_blog_tag_show
                        if (preg_match('#^/admin/stfalcon/blog/tag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stfalcon_blog_tag_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'stfalcon_blog.admin.tag',  '_sonata_name' => 'admin_stfalcon_blog_tag_show',));
                        }

                        // admin_stfalcon_blog_tag_export
                        if ($pathinfo === '/admin/stfalcon/blog/tag/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'stfalcon_blog.admin.tag',  '_sonata_name' => 'admin_stfalcon_blog_tag_export',  '_route' => 'admin_stfalcon_blog_tag_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/stfalcon/portfolio')) {
                    if (0 === strpos($pathinfo, '/admin/stfalcon/portfolio/category')) {
                        // admin_stfalcon_portfolio_category_list
                        if ($pathinfo === '/admin/stfalcon/portfolio/category/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.category',  '_sonata_name' => 'admin_stfalcon_portfolio_category_list',  '_route' => 'admin_stfalcon_portfolio_category_list',);
                        }

                        // admin_stfalcon_portfolio_category_create
                        if ($pathinfo === '/admin/stfalcon/portfolio/category/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.category',  '_sonata_name' => 'admin_stfalcon_portfolio_category_create',  '_route' => 'admin_stfalcon_portfolio_category_create',);
                        }

                        // admin_stfalcon_portfolio_category_batch
                        if ($pathinfo === '/admin/stfalcon/portfolio/category/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.category',  '_sonata_name' => 'admin_stfalcon_portfolio_category_batch',  '_route' => 'admin_stfalcon_portfolio_category_batch',);
                        }

                        // admin_stfalcon_portfolio_category_edit
                        if (preg_match('#^/admin/stfalcon/portfolio/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stfalcon_portfolio_category_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.category',  '_sonata_name' => 'admin_stfalcon_portfolio_category_edit',));
                        }

                        // admin_stfalcon_portfolio_category_delete
                        if (preg_match('#^/admin/stfalcon/portfolio/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stfalcon_portfolio_category_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.category',  '_sonata_name' => 'admin_stfalcon_portfolio_category_delete',));
                        }

                        // admin_stfalcon_portfolio_category_show
                        if (preg_match('#^/admin/stfalcon/portfolio/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stfalcon_portfolio_category_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.category',  '_sonata_name' => 'admin_stfalcon_portfolio_category_show',));
                        }

                        // admin_stfalcon_portfolio_category_export
                        if ($pathinfo === '/admin/stfalcon/portfolio/category/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.category',  '_sonata_name' => 'admin_stfalcon_portfolio_category_export',  '_route' => 'admin_stfalcon_portfolio_category_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/stfalcon/portfolio/project')) {
                        // admin_stfalcon_portfolio_project_list
                        if ($pathinfo === '/admin/stfalcon/portfolio/project/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.project',  '_sonata_name' => 'admin_stfalcon_portfolio_project_list',  '_route' => 'admin_stfalcon_portfolio_project_list',);
                        }

                        // admin_stfalcon_portfolio_project_create
                        if ($pathinfo === '/admin/stfalcon/portfolio/project/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.project',  '_sonata_name' => 'admin_stfalcon_portfolio_project_create',  '_route' => 'admin_stfalcon_portfolio_project_create',);
                        }

                        // admin_stfalcon_portfolio_project_batch
                        if ($pathinfo === '/admin/stfalcon/portfolio/project/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.project',  '_sonata_name' => 'admin_stfalcon_portfolio_project_batch',  '_route' => 'admin_stfalcon_portfolio_project_batch',);
                        }

                        // admin_stfalcon_portfolio_project_edit
                        if (preg_match('#^/admin/stfalcon/portfolio/project/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stfalcon_portfolio_project_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.project',  '_sonata_name' => 'admin_stfalcon_portfolio_project_edit',));
                        }

                        // admin_stfalcon_portfolio_project_delete
                        if (preg_match('#^/admin/stfalcon/portfolio/project/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stfalcon_portfolio_project_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.project',  '_sonata_name' => 'admin_stfalcon_portfolio_project_delete',));
                        }

                        // admin_stfalcon_portfolio_project_show
                        if (preg_match('#^/admin/stfalcon/portfolio/project/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_stfalcon_portfolio_project_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.project',  '_sonata_name' => 'admin_stfalcon_portfolio_project_show',));
                        }

                        // admin_stfalcon_portfolio_project_export
                        if ($pathinfo === '/admin/stfalcon/portfolio/project/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'stfalcon_portfolio.admin.project',  '_sonata_name' => 'admin_stfalcon_portfolio_project_export',  '_route' => 'admin_stfalcon_portfolio_project_export',);
                        }

                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
