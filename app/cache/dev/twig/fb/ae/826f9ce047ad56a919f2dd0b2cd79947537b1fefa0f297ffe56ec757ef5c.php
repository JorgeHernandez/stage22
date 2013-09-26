<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_fbae826f9ce047ad56a919f2dd0b2cd79947537b1fefa0f297ffe56ec757ef5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig");
        // line 34
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'actions' => array($this, 'block_actions'),
                'side_menu' => array($this, 'block_side_menu'),
                'form' => array($this, 'block_form'),
            )
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((!(null === $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => $this->getAttribute($this->getContext($context, "admin"), "toString", array(0 => $this->getContext($context, "object")), "method")), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 24
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 25
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 26
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        // line 27
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 28
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 29
        echo "    </div>
";
    }

    // line 32
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
    }

    // line 36
    public function block_form($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  12 => 34,  132 => 56,  116 => 37,  113 => 36,  26 => 13,  93 => 34,  84 => 26,  66 => 22,  61 => 22,  184 => 72,  178 => 71,  168 => 68,  162 => 49,  156 => 48,  107 => 42,  163 => 66,  155 => 64,  151 => 63,  140 => 55,  105 => 41,  100 => 37,  80 => 27,  23 => 1,  56 => 23,  181 => 88,  175 => 84,  164 => 79,  153 => 75,  130 => 65,  127 => 64,  79 => 35,  37 => 15,  103 => 40,  68 => 20,  62 => 23,  483 => 162,  477 => 161,  472 => 158,  464 => 155,  460 => 153,  456 => 151,  447 => 149,  443 => 148,  440 => 147,  438 => 146,  433 => 144,  430 => 143,  426 => 142,  416 => 134,  412 => 132,  410 => 131,  405 => 130,  401 => 129,  396 => 126,  390 => 122,  387 => 121,  384 => 120,  382 => 119,  377 => 116,  371 => 112,  368 => 111,  365 => 110,  363 => 109,  358 => 106,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 98,  312 => 97,  308 => 95,  301 => 91,  297 => 90,  288 => 89,  286 => 88,  281 => 86,  271 => 85,  267 => 84,  261 => 81,  255 => 80,  250 => 78,  244 => 77,  238 => 74,  232 => 73,  227 => 71,  223 => 70,  217 => 69,  211 => 68,  180 => 65,  172 => 60,  146 => 56,  143 => 44,  135 => 57,  131 => 49,  122 => 39,  110 => 48,  74 => 25,  41 => 7,  158 => 62,  138 => 47,  129 => 55,  117 => 50,  87 => 33,  73 => 25,  70 => 24,  64 => 23,  199 => 90,  186 => 82,  174 => 69,  169 => 81,  166 => 80,  161 => 78,  159 => 65,  154 => 63,  145 => 59,  141 => 57,  139 => 70,  124 => 52,  120 => 47,  108 => 35,  94 => 30,  65 => 24,  52 => 16,  96 => 38,  91 => 32,  81 => 36,  90 => 20,  49 => 15,  47 => 21,  24 => 2,  31 => 14,  97 => 36,  92 => 42,  88 => 28,  78 => 23,  71 => 30,  59 => 27,  30 => 16,  34 => 17,  29 => 14,  28 => 12,  27 => 3,  22 => 11,  82 => 31,  75 => 16,  72 => 24,  50 => 19,  43 => 19,  40 => 17,  25 => 11,  249 => 32,  160 => 56,  148 => 46,  142 => 50,  134 => 42,  126 => 51,  123 => 40,  118 => 43,  114 => 40,  111 => 44,  104 => 46,  101 => 36,  99 => 44,  86 => 29,  77 => 26,  69 => 23,  58 => 18,  55 => 20,  53 => 25,  46 => 14,  44 => 18,  38 => 22,  35 => 14,  32 => 16,  212 => 82,  206 => 78,  202 => 67,  196 => 73,  192 => 71,  190 => 84,  185 => 66,  179 => 64,  176 => 70,  171 => 72,  167 => 67,  165 => 57,  157 => 54,  152 => 51,  150 => 46,  147 => 45,  144 => 57,  136 => 69,  133 => 41,  128 => 40,  125 => 43,  119 => 61,  115 => 46,  112 => 44,  109 => 35,  106 => 34,  102 => 45,  98 => 34,  95 => 43,  89 => 33,  85 => 38,  83 => 28,  76 => 34,  67 => 25,  63 => 26,  60 => 27,  57 => 26,  54 => 35,  51 => 7,  48 => 21,  45 => 20,  42 => 16,  39 => 18,  36 => 16,  33 => 17,);
    }
}
