<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_d783cafa18ccb29e1aa643d4554128cf61806809576af2261c4f9ffe823e7dff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        if (twig_test_empty($this->getContext($context, "value"))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getContext($context, "value"), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "format")), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getContext($context, "value"), "F j, Y"), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 100,  370 => 99,  364 => 97,  355 => 94,  349 => 92,  346 => 91,  343 => 90,  335 => 88,  333 => 87,  330 => 86,  323 => 84,  318 => 83,  316 => 82,  313 => 81,  307 => 79,  305 => 78,  299 => 76,  296 => 75,  290 => 72,  283 => 69,  280 => 68,  274 => 66,  268 => 64,  265 => 63,  263 => 62,  260 => 61,  257 => 60,  252 => 55,  226 => 27,  219 => 25,  195 => 23,  191 => 21,  188 => 20,  183 => 104,  177 => 60,  12 => 34,  132 => 56,  116 => 46,  113 => 36,  26 => 12,  93 => 39,  84 => 34,  66 => 28,  61 => 22,  184 => 72,  178 => 71,  168 => 68,  162 => 49,  156 => 48,  107 => 42,  163 => 59,  155 => 63,  151 => 63,  140 => 47,  105 => 41,  100 => 37,  80 => 20,  23 => 11,  56 => 24,  181 => 88,  175 => 84,  164 => 79,  153 => 58,  130 => 65,  127 => 49,  79 => 35,  37 => 17,  103 => 42,  68 => 15,  62 => 26,  483 => 162,  477 => 161,  472 => 158,  464 => 155,  460 => 153,  456 => 151,  447 => 149,  443 => 148,  440 => 147,  438 => 146,  433 => 144,  430 => 143,  426 => 142,  416 => 134,  412 => 132,  410 => 131,  405 => 130,  401 => 129,  396 => 126,  390 => 122,  387 => 121,  384 => 120,  382 => 119,  377 => 116,  371 => 112,  368 => 111,  365 => 110,  363 => 109,  358 => 95,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 98,  312 => 97,  308 => 95,  301 => 91,  297 => 90,  288 => 89,  286 => 70,  281 => 86,  271 => 85,  267 => 84,  261 => 81,  255 => 80,  250 => 78,  244 => 31,  238 => 74,  232 => 73,  227 => 71,  223 => 70,  217 => 69,  211 => 68,  180 => 65,  172 => 58,  146 => 48,  143 => 53,  135 => 57,  131 => 44,  122 => 39,  110 => 44,  74 => 30,  41 => 7,  158 => 62,  138 => 47,  129 => 55,  117 => 46,  87 => 36,  73 => 29,  70 => 28,  64 => 27,  199 => 90,  186 => 82,  174 => 69,  169 => 57,  166 => 60,  161 => 78,  159 => 65,  154 => 63,  145 => 59,  141 => 57,  139 => 70,  124 => 42,  120 => 47,  108 => 35,  94 => 39,  65 => 27,  52 => 23,  96 => 38,  91 => 32,  81 => 36,  90 => 38,  49 => 9,  47 => 21,  24 => 11,  31 => 14,  97 => 40,  92 => 38,  88 => 37,  78 => 32,  71 => 24,  59 => 25,  30 => 16,  34 => 15,  29 => 14,  28 => 13,  27 => 12,  22 => 11,  82 => 34,  75 => 31,  72 => 29,  50 => 22,  43 => 13,  40 => 18,  25 => 12,  249 => 54,  160 => 58,  148 => 56,  142 => 50,  134 => 45,  126 => 51,  123 => 48,  118 => 40,  114 => 40,  111 => 44,  104 => 44,  101 => 36,  99 => 42,  86 => 35,  77 => 19,  69 => 28,  58 => 21,  55 => 24,  53 => 23,  46 => 20,  44 => 19,  38 => 4,  35 => 15,  32 => 15,  212 => 24,  206 => 78,  202 => 67,  196 => 73,  192 => 71,  190 => 84,  185 => 66,  179 => 102,  176 => 70,  171 => 72,  167 => 54,  165 => 57,  157 => 54,  152 => 51,  150 => 46,  147 => 45,  144 => 57,  136 => 51,  133 => 41,  128 => 40,  125 => 43,  119 => 49,  115 => 46,  112 => 47,  109 => 35,  106 => 45,  102 => 45,  98 => 40,  95 => 39,  89 => 33,  85 => 36,  83 => 28,  76 => 34,  67 => 25,  63 => 19,  60 => 18,  57 => 26,  54 => 16,  51 => 15,  48 => 20,  45 => 19,  42 => 20,  39 => 18,  36 => 16,  33 => 17,);
    }
}
