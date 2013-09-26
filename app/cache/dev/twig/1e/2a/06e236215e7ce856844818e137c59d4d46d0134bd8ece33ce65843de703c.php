<?php

/* KnpPaginatorBundle:Pagination:filtration.html.twig */
class __TwigTemplate_1e2a06e236215e7ce856844818e137c59d4d46d0134bd8ece33ce65843de703c extends Twig_Template
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
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "action"), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "filterFieldName"), "html", null, true);
        echo "\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fields"));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "field"), "html", null, true);
            echo "\"";
            if (($this->getContext($context, "selectedField") == $this->getContext($context, "field"))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </select>

    <input type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "selectedValue"), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "filterValueName"), "html", null, true);
        echo "\" />

    <button>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "button"), "html", null, true);
        echo "</button>

</form>";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:filtration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  483 => 162,  477 => 161,  472 => 158,  464 => 155,  460 => 153,  456 => 151,  447 => 149,  443 => 148,  440 => 147,  438 => 146,  433 => 144,  430 => 143,  426 => 142,  416 => 134,  412 => 132,  410 => 131,  405 => 130,  401 => 129,  396 => 126,  390 => 122,  387 => 121,  384 => 120,  382 => 119,  377 => 116,  371 => 112,  368 => 111,  365 => 110,  363 => 109,  358 => 106,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 98,  312 => 97,  308 => 95,  301 => 91,  297 => 90,  288 => 89,  286 => 88,  281 => 86,  271 => 85,  267 => 84,  261 => 81,  255 => 80,  250 => 78,  244 => 77,  238 => 74,  232 => 73,  227 => 71,  223 => 70,  217 => 69,  211 => 68,  180 => 65,  172 => 60,  146 => 56,  143 => 55,  135 => 51,  131 => 49,  122 => 42,  110 => 36,  74 => 19,  41 => 6,  158 => 58,  138 => 47,  129 => 45,  117 => 42,  87 => 28,  73 => 20,  70 => 15,  64 => 13,  199 => 90,  186 => 82,  174 => 61,  169 => 71,  166 => 70,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 57,  139 => 56,  124 => 46,  120 => 44,  108 => 40,  94 => 31,  65 => 23,  52 => 19,  96 => 28,  91 => 6,  81 => 21,  90 => 20,  49 => 7,  47 => 12,  24 => 2,  31 => 3,  97 => 22,  92 => 20,  88 => 25,  78 => 23,  71 => 14,  59 => 9,  30 => 4,  34 => 4,  29 => 6,  28 => 3,  27 => 4,  22 => 1,  82 => 18,  75 => 16,  72 => 25,  50 => 9,  43 => 8,  40 => 10,  25 => 2,  249 => 32,  160 => 56,  148 => 46,  142 => 50,  134 => 42,  126 => 47,  123 => 40,  118 => 43,  114 => 37,  111 => 37,  104 => 32,  101 => 31,  99 => 31,  86 => 25,  77 => 14,  69 => 24,  58 => 15,  55 => 9,  53 => 10,  46 => 8,  44 => 9,  38 => 5,  35 => 4,  32 => 4,  212 => 82,  206 => 78,  202 => 67,  196 => 73,  192 => 71,  190 => 84,  185 => 66,  179 => 64,  176 => 74,  171 => 72,  167 => 59,  165 => 57,  157 => 54,  152 => 51,  150 => 58,  147 => 53,  144 => 51,  136 => 55,  133 => 41,  128 => 44,  125 => 43,  119 => 36,  115 => 42,  112 => 41,  109 => 36,  106 => 37,  102 => 30,  98 => 34,  95 => 33,  89 => 28,  85 => 22,  83 => 41,  76 => 19,  67 => 17,  63 => 6,  60 => 11,  57 => 10,  54 => 14,  51 => 7,  48 => 17,  45 => 7,  42 => 9,  39 => 5,  36 => 5,  33 => 7,);
    }
}
