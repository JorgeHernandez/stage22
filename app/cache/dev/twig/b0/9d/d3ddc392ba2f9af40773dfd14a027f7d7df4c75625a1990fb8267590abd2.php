<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_b09dd3ddc392ba2f9af40773dfd14a027f7d7df4c75625a1990fb8267590abd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "filter_form"), "vars"), "errors")) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "filter", true), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "filter_form"), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "filter"), "fielddescription"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "filter_form"), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br />
    ";
    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "filter_form"), 'widget');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 100,  370 => 99,  364 => 97,  355 => 94,  349 => 92,  346 => 91,  343 => 90,  335 => 88,  333 => 87,  330 => 86,  323 => 84,  318 => 83,  316 => 82,  313 => 81,  307 => 79,  305 => 78,  299 => 76,  296 => 75,  290 => 72,  283 => 69,  280 => 68,  274 => 66,  268 => 64,  265 => 63,  263 => 62,  260 => 61,  257 => 60,  252 => 55,  226 => 27,  219 => 25,  195 => 23,  191 => 21,  188 => 20,  183 => 104,  177 => 60,  12 => 34,  132 => 56,  116 => 46,  113 => 36,  26 => 1,  93 => 34,  84 => 34,  66 => 20,  61 => 22,  184 => 72,  178 => 71,  168 => 68,  162 => 49,  156 => 48,  107 => 42,  163 => 59,  155 => 63,  151 => 63,  140 => 47,  105 => 41,  100 => 37,  80 => 20,  23 => 1,  56 => 24,  181 => 88,  175 => 84,  164 => 79,  153 => 58,  130 => 65,  127 => 49,  79 => 35,  37 => 16,  103 => 36,  68 => 15,  62 => 23,  483 => 162,  477 => 161,  472 => 158,  464 => 155,  460 => 153,  456 => 151,  447 => 149,  443 => 148,  440 => 147,  438 => 146,  433 => 144,  430 => 143,  426 => 142,  416 => 134,  412 => 132,  410 => 131,  405 => 130,  401 => 129,  396 => 126,  390 => 122,  387 => 121,  384 => 120,  382 => 119,  377 => 116,  371 => 112,  368 => 111,  365 => 110,  363 => 109,  358 => 95,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 98,  312 => 97,  308 => 95,  301 => 91,  297 => 90,  288 => 89,  286 => 70,  281 => 86,  271 => 85,  267 => 84,  261 => 81,  255 => 80,  250 => 78,  244 => 31,  238 => 74,  232 => 73,  227 => 71,  223 => 70,  217 => 69,  211 => 68,  180 => 65,  172 => 58,  146 => 48,  143 => 53,  135 => 57,  131 => 44,  122 => 39,  110 => 48,  74 => 25,  41 => 7,  158 => 62,  138 => 47,  129 => 55,  117 => 50,  87 => 33,  73 => 29,  70 => 28,  64 => 23,  199 => 90,  186 => 82,  174 => 69,  169 => 57,  166 => 60,  161 => 78,  159 => 65,  154 => 63,  145 => 59,  141 => 57,  139 => 70,  124 => 42,  120 => 47,  108 => 35,  94 => 39,  65 => 24,  52 => 10,  96 => 38,  91 => 32,  81 => 36,  90 => 38,  49 => 9,  47 => 21,  24 => 11,  31 => 22,  97 => 36,  92 => 42,  88 => 28,  78 => 31,  71 => 24,  59 => 25,  30 => 16,  34 => 23,  29 => 14,  28 => 12,  27 => 3,  22 => 11,  82 => 33,  75 => 30,  72 => 24,  50 => 19,  43 => 6,  40 => 24,  25 => 12,  249 => 54,  160 => 58,  148 => 56,  142 => 50,  134 => 45,  126 => 51,  123 => 48,  118 => 40,  114 => 40,  111 => 44,  104 => 46,  101 => 36,  99 => 44,  86 => 35,  77 => 19,  69 => 23,  58 => 18,  55 => 20,  53 => 23,  46 => 14,  44 => 18,  38 => 4,  35 => 16,  32 => 15,  212 => 24,  206 => 78,  202 => 67,  196 => 73,  192 => 71,  190 => 84,  185 => 66,  179 => 102,  176 => 70,  171 => 72,  167 => 54,  165 => 57,  157 => 54,  152 => 51,  150 => 46,  147 => 45,  144 => 57,  136 => 51,  133 => 41,  128 => 40,  125 => 43,  119 => 47,  115 => 46,  112 => 45,  109 => 35,  106 => 34,  102 => 45,  98 => 40,  95 => 43,  89 => 33,  85 => 38,  83 => 28,  76 => 34,  67 => 25,  63 => 13,  60 => 18,  57 => 26,  54 => 16,  51 => 15,  48 => 14,  45 => 19,  42 => 25,  39 => 17,  36 => 16,  33 => 17,);
    }
}
