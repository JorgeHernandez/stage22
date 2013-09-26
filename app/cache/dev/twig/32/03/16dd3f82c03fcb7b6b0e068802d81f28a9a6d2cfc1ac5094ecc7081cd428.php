<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_320316dd3f82c03fcb7b6b0e068802d81f28a9a6d2cfc1ac5094ecc7081cd428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), $this->getAttribute($this->getContext($context, "field_description"), "name"), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "uniqid"))), array());
                    // line 29
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "placeholder"))) {
                    // line 30
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 34
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 39
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 40
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            </span>
        ";
            }
            // line 43
            echo "
        <span id=\"field_actions_";
            // line 44
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 46
            if ((((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && $this->getContext($context, "btn_list"))) {
                // line 47
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 48
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_list"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-list\"></i>
                        ";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_list"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 56
            echo "
                ";
            // line 57
            if ((((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && $this->getContext($context, "btn_add"))) {
                // line 58
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 59
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_add"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_add"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 67
            echo "            </span>

            <span class=\"btn-group\">
                ";
            // line 70
            if ((((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && $this->getContext($context, "btn_delete"))) {
                // line 71
                echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
                // line 72
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_delete"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-off\"></i>
                        ";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_delete"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 80
            echo "            </span>
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
            // line 83
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">

        </div>
    </div>

    ";
            // line 88
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 88,  189 => 83,  690 => 225,  682 => 219,  675 => 215,  669 => 212,  665 => 210,  663 => 209,  652 => 205,  649 => 204,  641 => 201,  638 => 200,  632 => 198,  630 => 197,  627 => 196,  621 => 194,  619 => 193,  616 => 192,  613 => 191,  603 => 145,  594 => 142,  589 => 141,  584 => 140,  573 => 137,  563 => 126,  560 => 125,  554 => 124,  549 => 121,  543 => 120,  535 => 118,  532 => 117,  528 => 116,  523 => 114,  520 => 113,  518 => 112,  515 => 111,  508 => 110,  505 => 109,  491 => 106,  488 => 105,  485 => 104,  470 => 127,  467 => 104,  465 => 103,  461 => 101,  451 => 96,  424 => 56,  420 => 55,  415 => 53,  402 => 49,  386 => 43,  369 => 36,  359 => 32,  348 => 28,  328 => 221,  326 => 191,  319 => 189,  303 => 181,  278 => 170,  258 => 167,  247 => 162,  233 => 158,  228 => 156,  198 => 150,  704 => 213,  698 => 210,  695 => 209,  693 => 208,  687 => 224,  677 => 204,  672 => 202,  660 => 208,  657 => 199,  654 => 206,  646 => 193,  643 => 202,  626 => 190,  609 => 146,  604 => 187,  599 => 186,  596 => 185,  593 => 184,  587 => 180,  583 => 178,  581 => 139,  576 => 138,  559 => 174,  542 => 173,  538 => 172,  530 => 170,  527 => 169,  524 => 168,  521 => 167,  519 => 166,  507 => 160,  501 => 157,  498 => 156,  496 => 107,  493 => 154,  489 => 134,  474 => 129,  471 => 128,  458 => 100,  453 => 145,  444 => 141,  442 => 140,  437 => 93,  423 => 135,  421 => 128,  407 => 124,  398 => 120,  392 => 44,  380 => 115,  374 => 113,  361 => 106,  352 => 103,  350 => 102,  345 => 101,  342 => 22,  339 => 99,  329 => 93,  327 => 92,  322 => 190,  314 => 89,  310 => 185,  300 => 84,  294 => 177,  292 => 176,  289 => 175,  277 => 77,  275 => 169,  272 => 168,  266 => 71,  253 => 67,  246 => 65,  241 => 160,  239 => 63,  236 => 62,  231 => 157,  203 => 55,  194 => 50,  149 => 34,  347 => 97,  341 => 94,  338 => 93,  324 => 91,  298 => 88,  291 => 85,  285 => 79,  262 => 70,  230 => 60,  218 => 54,  193 => 50,  187 => 47,  121 => 28,  567 => 127,  556 => 176,  552 => 175,  544 => 172,  539 => 170,  533 => 171,  531 => 167,  525 => 163,  516 => 165,  512 => 159,  506 => 158,  503 => 158,  499 => 108,  494 => 154,  487 => 152,  479 => 103,  476 => 149,  473 => 128,  469 => 134,  466 => 133,  462 => 132,  459 => 131,  452 => 123,  448 => 122,  445 => 95,  429 => 102,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  406 => 50,  394 => 83,  391 => 82,  385 => 94,  381 => 92,  379 => 40,  376 => 81,  366 => 130,  360 => 126,  356 => 124,  354 => 30,  351 => 29,  332 => 95,  306 => 114,  295 => 87,  287 => 107,  284 => 172,  279 => 78,  248 => 69,  245 => 68,  242 => 67,  225 => 155,  222 => 65,  213 => 60,  207 => 154,  204 => 153,  200 => 54,  173 => 93,  373 => 37,  370 => 99,  364 => 107,  355 => 94,  349 => 92,  346 => 117,  343 => 95,  335 => 231,  333 => 224,  330 => 86,  323 => 115,  318 => 90,  316 => 82,  313 => 186,  307 => 79,  305 => 78,  299 => 112,  296 => 75,  290 => 108,  283 => 82,  280 => 78,  274 => 76,  268 => 74,  265 => 63,  263 => 71,  260 => 61,  257 => 68,  252 => 165,  226 => 58,  219 => 64,  195 => 23,  191 => 54,  188 => 20,  183 => 132,  177 => 60,  12 => 34,  132 => 24,  116 => 46,  113 => 48,  26 => 11,  93 => 18,  84 => 15,  66 => 4,  61 => 22,  184 => 80,  178 => 77,  168 => 50,  162 => 70,  156 => 35,  107 => 23,  163 => 59,  155 => 38,  151 => 64,  140 => 59,  105 => 17,  100 => 43,  80 => 27,  23 => 11,  56 => 22,  181 => 45,  175 => 99,  164 => 71,  153 => 45,  130 => 56,  127 => 23,  79 => 13,  37 => 13,  103 => 42,  68 => 30,  62 => 23,  483 => 132,  477 => 130,  472 => 158,  464 => 149,  460 => 153,  456 => 146,  447 => 142,  443 => 148,  440 => 94,  438 => 146,  433 => 144,  430 => 57,  426 => 136,  416 => 134,  412 => 127,  410 => 51,  405 => 130,  401 => 121,  396 => 46,  390 => 122,  387 => 116,  384 => 120,  382 => 41,  377 => 114,  371 => 112,  368 => 135,  365 => 110,  363 => 33,  358 => 105,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 89,  312 => 97,  308 => 184,  301 => 113,  297 => 178,  288 => 84,  286 => 70,  281 => 79,  271 => 73,  267 => 72,  261 => 81,  255 => 68,  250 => 66,  244 => 31,  238 => 74,  232 => 73,  227 => 71,  223 => 56,  217 => 69,  211 => 57,  180 => 131,  172 => 74,  146 => 78,  143 => 28,  135 => 58,  131 => 44,  122 => 32,  110 => 24,  74 => 32,  41 => 17,  158 => 62,  138 => 47,  129 => 34,  117 => 46,  87 => 39,  73 => 29,  70 => 40,  64 => 25,  199 => 52,  186 => 82,  174 => 69,  169 => 57,  166 => 91,  161 => 37,  159 => 36,  154 => 63,  145 => 61,  141 => 41,  139 => 75,  124 => 53,  120 => 47,  108 => 47,  94 => 39,  65 => 29,  52 => 112,  96 => 38,  91 => 12,  81 => 36,  90 => 17,  49 => 19,  47 => 18,  24 => 11,  31 => 13,  97 => 139,  92 => 40,  88 => 30,  78 => 21,  71 => 31,  59 => 81,  30 => 3,  34 => 14,  29 => 11,  28 => 12,  27 => 13,  22 => 11,  82 => 14,  75 => 198,  72 => 59,  50 => 75,  43 => 16,  40 => 54,  25 => 12,  249 => 54,  160 => 41,  148 => 56,  142 => 76,  134 => 25,  126 => 30,  123 => 48,  118 => 50,  114 => 30,  111 => 44,  104 => 22,  101 => 44,  99 => 42,  86 => 15,  77 => 34,  69 => 17,  58 => 22,  55 => 21,  53 => 20,  46 => 21,  44 => 15,  38 => 16,  35 => 12,  32 => 11,  212 => 24,  206 => 56,  202 => 152,  196 => 149,  192 => 147,  190 => 137,  185 => 53,  179 => 45,  176 => 42,  171 => 51,  167 => 72,  165 => 49,  157 => 67,  152 => 80,  150 => 44,  147 => 33,  144 => 42,  136 => 74,  133 => 57,  128 => 40,  125 => 43,  119 => 72,  115 => 70,  112 => 69,  109 => 35,  106 => 46,  102 => 23,  98 => 43,  95 => 68,  89 => 66,  85 => 10,  83 => 64,  76 => 61,  67 => 39,  63 => 3,  60 => 22,  57 => 153,  54 => 17,  51 => 20,  48 => 19,  45 => 18,  42 => 61,  39 => 14,  36 => 16,  33 => 15,);
    }
}
