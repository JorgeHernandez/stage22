<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_a5ba551421a818dad97082e817974533fadcd91f997418893cedd2ee9224e648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav_menu' => array($this, 'block_sonata_nav_menu'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'notice' => array($this, 'block_notice'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        echo "<!DOCTYPE html>
<html ";
        // line 22
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "
        <title>
            ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 63
        if ((!twig_test_empty($this->getContext($context, "_title")))) {
            // line 64
            echo "                ";
            echo $this->getContext($context, "_title");
            echo "
            ";
        } else {
            // line 66
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 67
                echo "                    -
                    ";
                // line 68
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 69
                    echo "                        ";
                    if ((!$this->getAttribute($this->getContext($context, "loop"), "first"))) {
                        // line 70
                        echo "                            &gt;
                        ";
                    }
                    // line 72
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                    echo "
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                ";
            }
            // line 75
            echo "            ";
        }
        // line 76
        echo "        </title>
    </head>
    <body class=\"sonata-bc ";
        // line 78
        if (twig_test_empty($this->getContext($context, "_side_menu"))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\">
        ";
        // line 80
        echo "
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    ";
        // line 90
        if (array_key_exists("admin_pool", $context)) {
            // line 91
            echo "                        <div class=\"navbar-text pull-right\">";
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin_pool"), "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</div>

                        ";
            // line 93
            $this->displayBlock('logo', $context, $blocks);
            // line 99
            echo "
                        ";
            // line 100
            $this->displayBlock('sonata_nav_menu', $context, $blocks);
            // line 131
            echo "                    ";
        }
        // line 132
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 137
        $this->displayBlock('notice', $context, $blocks);
        // line 147
        echo "
            <div class=\"row-fluid\">
                ";
        // line 149
        if (((!twig_test_empty($this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 150
            echo "                    <div class=\"span6\">
                        <ul class=\"breadcrumb\">
                            ";
            // line 152
            if (twig_test_empty($this->getContext($context, "_breadcrumb"))) {
                // line 153
                echo "                                ";
                if (array_key_exists("action", $context)) {
                    // line 154
                    echo "                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 155
                        echo "                                        ";
                        if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                            // line 156
                            echo "                                            <li>
                                                ";
                            // line 157
                            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "menu"), "uri")))) {
                                // line 158
                                echo "                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "uri"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                                echo "</a>
                                                ";
                            } else {
                                // line 160
                                echo "                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                                echo "
                                                ";
                            }
                            // line 162
                            echo "                                                <span class=\"divider\">/</span>
                                            </li>
                                        ";
                        } else {
                            // line 165
                            echo "                                            <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                            echo "</li>
                                        ";
                        }
                        // line 167
                        echo "                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    echo "                                ";
                }
                // line 169
                echo "                            ";
            } else {
                // line 170
                echo "                                ";
                echo $this->getContext($context, "_breadcrumb");
                echo "
                            ";
            }
            // line 172
            echo "                        </ul>
                    </div>
                ";
        }
        // line 175
        echo "
                ";
        // line 176
        if ((!twig_test_empty($this->getContext($context, "_actions")))) {
            // line 177
            echo "                    <div class=\"span4 offset2\">
                        ";
            // line 178
            echo $this->getContext($context, "_actions");
            echo "
                    </div>
                ";
        }
        // line 181
        echo "            </div>

            <div class=\"row-fluid\">
                ";
        // line 184
        if ((!twig_test_empty($this->getContext($context, "_side_menu")))) {
            // line 185
            echo "                    <div class=\"sidebar span2\">
                        <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 186
            echo $this->getContext($context, "_side_menu");
            echo "</div>
                    </div>
                ";
        }
        // line 189
        echo "
                <div class=\"content ";
        // line 190
        echo (((!twig_test_empty($this->getContext($context, "_side_menu")))) ? (" span10") : ("span12"));
        echo "\">
                    ";
        // line 191
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 221
        echo "                </div>
            </div>

            ";
        // line 224
        $this->displayBlock('footer', $context, $blocks);
        // line 231
        echo "        </div>
    </body>
</html>
";
    }

    // line 22
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "            <script type=\"text/javascript\">
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 44
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            ";
        // line 56
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.confirmExit.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>";
        }
        // line 57
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 93
    public function block_logo($context, array $blocks = array())
    {
        // line 94
        echo "                            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard"), "html", null, true);
        echo "\" class=\"brand\">
                                <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "admin_pool"), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
        echo "\" />
                                ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
        echo "
                            </a>
                        ";
    }

    // line 100
    public function block_sonata_nav_menu($context, array $blocks = array())
    {
        // line 101
        echo "                            <div class=\"nav-collapse\">
                                <ul class=\"nav\">
                                    ";
        // line 103
        $this->displayBlock('top_bar_before_nav', $context, $blocks);
        // line 104
        echo "                                    ";
        $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
        // line 127
        echo "                                    ";
        $this->displayBlock('top_bar_after_nav', $context, $blocks);
        // line 128
        echo "                                </ul>
                            </div>
                        ";
    }

    // line 103
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 104
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 105
        echo "                                        ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 106
            echo "                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin_pool"), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 107
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute($this->getContext($context, "group"), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 108
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!$this->getContext($context, "display"))) {
                        // line 109
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($this->getContext($context, "role"));
                        // line 110
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "
                                                ";
                // line 112
                if ($this->getContext($context, "display")) {
                    // line 113
                    echo "                                                <li class=\"dropdown\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 114
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                    // line 116
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 117
                        echo "                                                            ";
                        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 118
                            echo "                                                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                            ";
                        }
                        // line 120
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "                                                    </ul>
                                                </li>
                                                ";
                }
                // line 124
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                                        ";
        }
        // line 126
        echo "                                    ";
    }

    // line 127
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 137
    public function block_notice($context, array $blocks = array())
    {
        // line 138
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 139
            echo "                    ";
            $context["session_var"] = ("sonata_flash_" . $this->getContext($context, "notice_level"));
            // line 140
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => $this->getContext($context, "session_var")), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 141
                echo "                        <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . $this->getContext($context, "notice_level")), "html", null, true);
                echo "\">
                            ";
                // line 142
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "flash"), array(), "SonataAdminBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "            ";
    }

    // line 191
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 192
        echo "
                        ";
        // line 193
        if ((!twig_test_empty($this->getContext($context, "_preview")))) {
            // line 194
            echo "                            <div class=\"sonata-ba-preview\">";
            echo $this->getContext($context, "_preview");
            echo "</div>
                        ";
        }
        // line 196
        echo "
                        ";
        // line 197
        if ((!twig_test_empty($this->getContext($context, "_content")))) {
            // line 198
            echo "                            <div class=\"sonata-ba-content\">";
            echo $this->getContext($context, "_content");
            echo "</div>
                        ";
        }
        // line 200
        echo "
                        ";
        // line 201
        if ((!twig_test_empty($this->getContext($context, "_show")))) {
            // line 202
            echo "                            <div class=\"sonata-ba-show\">";
            echo $this->getContext($context, "_show");
            echo "</div>
                        ";
        }
        // line 204
        echo "
                        ";
        // line 205
        if ((!twig_test_empty($this->getContext($context, "_form")))) {
            // line 206
            echo "                            <div class=\"sonata-ba-form\">";
            echo $this->getContext($context, "_form");
            echo "</div>
                        ";
        }
        // line 208
        echo "
                        ";
        // line 209
        if (((!twig_test_empty($this->getContext($context, "_list_table"))) || (!twig_test_empty($this->getContext($context, "_list_filters"))))) {
            // line 210
            echo "                            <div class=\"row-fluid\">
                                <div class=\"sonata-ba-list span10\">
                                    ";
            // line 212
            echo $this->getContext($context, "_list_table");
            echo "
                                </div>
                                <div class=\"sonata-ba-filter span2\">
                                    ";
            // line 215
            echo $this->getContext($context, "_list_filters");
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 219
        echo "
                    ";
    }

    // line 224
    public function block_footer($context, array $blocks = array())
    {
        // line 225
        echo "                <div class=\"row-fluid\">
                    <div class=\"span2 offset10 pull-right\">
                        <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                    </div>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 225,  682 => 219,  675 => 215,  669 => 212,  665 => 210,  663 => 209,  652 => 205,  649 => 204,  641 => 201,  638 => 200,  632 => 198,  630 => 197,  627 => 196,  621 => 194,  619 => 193,  616 => 192,  613 => 191,  603 => 145,  594 => 142,  589 => 141,  584 => 140,  573 => 137,  563 => 126,  560 => 125,  554 => 124,  549 => 121,  543 => 120,  535 => 118,  532 => 117,  528 => 116,  523 => 114,  520 => 113,  518 => 112,  515 => 111,  508 => 110,  505 => 109,  491 => 106,  488 => 105,  485 => 104,  470 => 127,  467 => 104,  465 => 103,  461 => 101,  451 => 96,  424 => 56,  420 => 55,  415 => 53,  402 => 49,  386 => 43,  369 => 36,  359 => 32,  348 => 28,  328 => 221,  326 => 191,  319 => 189,  303 => 181,  278 => 170,  258 => 167,  247 => 162,  233 => 158,  228 => 156,  198 => 150,  704 => 213,  698 => 210,  695 => 209,  693 => 208,  687 => 224,  677 => 204,  672 => 202,  660 => 208,  657 => 199,  654 => 206,  646 => 193,  643 => 202,  626 => 190,  609 => 146,  604 => 187,  599 => 186,  596 => 185,  593 => 184,  587 => 180,  583 => 178,  581 => 139,  576 => 138,  559 => 174,  542 => 173,  538 => 172,  530 => 170,  527 => 169,  524 => 168,  521 => 167,  519 => 166,  507 => 160,  501 => 157,  498 => 156,  496 => 107,  493 => 154,  489 => 134,  474 => 129,  471 => 128,  458 => 100,  453 => 145,  444 => 141,  442 => 140,  437 => 93,  423 => 135,  421 => 128,  407 => 124,  398 => 120,  392 => 44,  380 => 115,  374 => 113,  361 => 106,  352 => 103,  350 => 102,  345 => 101,  342 => 22,  339 => 99,  329 => 93,  327 => 92,  322 => 190,  314 => 89,  310 => 185,  300 => 84,  294 => 177,  292 => 176,  289 => 175,  277 => 77,  275 => 169,  272 => 168,  266 => 71,  253 => 67,  246 => 65,  241 => 160,  239 => 63,  236 => 62,  231 => 157,  203 => 55,  194 => 50,  149 => 34,  347 => 97,  341 => 94,  338 => 93,  324 => 91,  298 => 88,  291 => 85,  285 => 79,  262 => 70,  230 => 60,  218 => 54,  193 => 50,  187 => 47,  121 => 28,  567 => 127,  556 => 176,  552 => 175,  544 => 172,  539 => 170,  533 => 171,  531 => 167,  525 => 163,  516 => 165,  512 => 159,  506 => 158,  503 => 158,  499 => 108,  494 => 154,  487 => 152,  479 => 103,  476 => 149,  473 => 128,  469 => 134,  466 => 133,  462 => 132,  459 => 131,  452 => 123,  448 => 122,  445 => 95,  429 => 102,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  406 => 50,  394 => 83,  391 => 82,  385 => 94,  381 => 92,  379 => 40,  376 => 81,  366 => 130,  360 => 126,  356 => 124,  354 => 30,  351 => 29,  332 => 95,  306 => 114,  295 => 87,  287 => 107,  284 => 172,  279 => 78,  248 => 69,  245 => 68,  242 => 67,  225 => 155,  222 => 65,  213 => 60,  207 => 154,  204 => 153,  200 => 54,  173 => 93,  373 => 37,  370 => 99,  364 => 107,  355 => 94,  349 => 92,  346 => 117,  343 => 95,  335 => 231,  333 => 224,  330 => 86,  323 => 115,  318 => 90,  316 => 82,  313 => 186,  307 => 79,  305 => 78,  299 => 112,  296 => 75,  290 => 108,  283 => 82,  280 => 78,  274 => 76,  268 => 74,  265 => 63,  263 => 71,  260 => 61,  257 => 68,  252 => 165,  226 => 58,  219 => 64,  195 => 23,  191 => 54,  188 => 20,  183 => 132,  177 => 60,  12 => 34,  132 => 24,  116 => 46,  113 => 25,  26 => 11,  93 => 18,  84 => 15,  66 => 4,  61 => 22,  184 => 47,  178 => 100,  168 => 50,  162 => 48,  156 => 35,  107 => 23,  163 => 59,  155 => 38,  151 => 63,  140 => 27,  105 => 17,  100 => 43,  80 => 8,  23 => 11,  56 => 22,  181 => 45,  175 => 99,  164 => 90,  153 => 45,  130 => 65,  127 => 23,  79 => 13,  37 => 13,  103 => 42,  68 => 5,  62 => 164,  483 => 132,  477 => 130,  472 => 158,  464 => 149,  460 => 153,  456 => 146,  447 => 142,  443 => 148,  440 => 94,  438 => 146,  433 => 144,  430 => 57,  426 => 136,  416 => 134,  412 => 127,  410 => 51,  405 => 130,  401 => 121,  396 => 46,  390 => 122,  387 => 116,  384 => 120,  382 => 41,  377 => 114,  371 => 112,  368 => 135,  365 => 110,  363 => 33,  358 => 105,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 89,  312 => 97,  308 => 184,  301 => 113,  297 => 178,  288 => 84,  286 => 70,  281 => 79,  271 => 73,  267 => 72,  261 => 81,  255 => 68,  250 => 66,  244 => 31,  238 => 74,  232 => 73,  227 => 71,  223 => 56,  217 => 69,  211 => 57,  180 => 131,  172 => 58,  146 => 78,  143 => 28,  135 => 44,  131 => 44,  122 => 32,  110 => 24,  74 => 32,  41 => 15,  158 => 62,  138 => 47,  129 => 34,  117 => 46,  87 => 16,  73 => 29,  70 => 40,  64 => 25,  199 => 52,  186 => 82,  174 => 69,  169 => 57,  166 => 91,  161 => 37,  159 => 36,  154 => 63,  145 => 59,  141 => 41,  139 => 75,  124 => 29,  120 => 47,  108 => 26,  94 => 39,  65 => 28,  52 => 112,  96 => 38,  91 => 12,  81 => 63,  90 => 17,  49 => 19,  47 => 18,  24 => 11,  31 => 14,  97 => 139,  92 => 67,  88 => 37,  78 => 21,  71 => 6,  59 => 81,  30 => 3,  34 => 15,  29 => 11,  28 => 12,  27 => 2,  22 => 11,  82 => 14,  75 => 198,  72 => 59,  50 => 75,  43 => 16,  40 => 54,  25 => 12,  249 => 54,  160 => 41,  148 => 56,  142 => 76,  134 => 25,  126 => 30,  123 => 48,  118 => 27,  114 => 30,  111 => 44,  104 => 22,  101 => 21,  99 => 42,  86 => 15,  77 => 34,  69 => 17,  58 => 24,  55 => 113,  53 => 21,  46 => 21,  44 => 15,  38 => 13,  35 => 12,  32 => 11,  212 => 24,  206 => 56,  202 => 152,  196 => 149,  192 => 147,  190 => 137,  185 => 53,  179 => 45,  176 => 42,  171 => 51,  167 => 54,  165 => 49,  157 => 54,  152 => 80,  150 => 44,  147 => 33,  144 => 42,  136 => 74,  133 => 41,  128 => 40,  125 => 43,  119 => 72,  115 => 70,  112 => 69,  109 => 35,  106 => 45,  102 => 23,  98 => 20,  95 => 68,  89 => 66,  85 => 10,  83 => 64,  76 => 61,  67 => 39,  63 => 3,  60 => 154,  57 => 153,  54 => 17,  51 => 20,  48 => 66,  45 => 17,  42 => 61,  39 => 14,  36 => 16,  33 => 11,);
    }
}
