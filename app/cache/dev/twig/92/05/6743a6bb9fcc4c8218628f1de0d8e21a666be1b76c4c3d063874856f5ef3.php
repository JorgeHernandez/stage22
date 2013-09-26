<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_92056743a6bb9fcc4c8218628f1de0d8e21a666be1b76c4c3d063874856f5ef3 extends Twig_Template
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
        // line 1
        echo "<a";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "options"));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "attr"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 88,  175 => 84,  164 => 79,  153 => 75,  130 => 65,  127 => 64,  79 => 47,  37 => 26,  103 => 55,  68 => 20,  62 => 38,  483 => 162,  477 => 161,  472 => 158,  464 => 155,  460 => 153,  456 => 151,  447 => 149,  443 => 148,  440 => 147,  438 => 146,  433 => 144,  430 => 143,  426 => 142,  416 => 134,  412 => 132,  410 => 131,  405 => 130,  401 => 129,  396 => 126,  390 => 122,  387 => 121,  384 => 120,  382 => 119,  377 => 116,  371 => 112,  368 => 111,  365 => 110,  363 => 109,  358 => 106,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 98,  312 => 97,  308 => 95,  301 => 91,  297 => 90,  288 => 89,  286 => 88,  281 => 86,  271 => 85,  267 => 84,  261 => 81,  255 => 80,  250 => 78,  244 => 77,  238 => 74,  232 => 73,  227 => 71,  223 => 70,  217 => 69,  211 => 68,  180 => 65,  172 => 60,  146 => 56,  143 => 55,  135 => 51,  131 => 49,  122 => 62,  110 => 36,  74 => 19,  41 => 10,  158 => 58,  138 => 47,  129 => 45,  117 => 39,  87 => 28,  73 => 43,  70 => 15,  64 => 39,  199 => 90,  186 => 82,  174 => 61,  169 => 81,  166 => 80,  161 => 78,  159 => 66,  154 => 63,  145 => 59,  141 => 57,  139 => 70,  124 => 63,  120 => 44,  108 => 35,  94 => 29,  65 => 19,  52 => 34,  96 => 28,  91 => 6,  81 => 21,  90 => 20,  49 => 33,  47 => 12,  24 => 2,  31 => 3,  97 => 30,  92 => 51,  88 => 25,  78 => 23,  71 => 14,  59 => 9,  30 => 5,  34 => 25,  29 => 6,  28 => 3,  27 => 21,  22 => 1,  82 => 48,  75 => 16,  72 => 25,  50 => 9,  43 => 29,  40 => 10,  25 => 20,  249 => 32,  160 => 56,  148 => 46,  142 => 50,  134 => 42,  126 => 47,  123 => 40,  118 => 43,  114 => 37,  111 => 36,  104 => 32,  101 => 31,  99 => 31,  86 => 25,  77 => 14,  69 => 24,  58 => 17,  55 => 16,  53 => 10,  46 => 12,  44 => 11,  38 => 5,  35 => 7,  32 => 24,  212 => 82,  206 => 78,  202 => 67,  196 => 73,  192 => 71,  190 => 84,  185 => 66,  179 => 64,  176 => 74,  171 => 72,  167 => 59,  165 => 57,  157 => 54,  152 => 51,  150 => 74,  147 => 73,  144 => 51,  136 => 69,  133 => 41,  128 => 44,  125 => 43,  119 => 61,  115 => 42,  112 => 59,  109 => 36,  106 => 56,  102 => 30,  98 => 34,  95 => 52,  89 => 50,  85 => 49,  83 => 41,  76 => 23,  67 => 40,  63 => 6,  60 => 11,  57 => 36,  54 => 35,  51 => 7,  48 => 17,  45 => 7,  42 => 9,  39 => 5,  36 => 5,  33 => 7,);
    }
}
