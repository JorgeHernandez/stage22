<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_23c294375902120c5b2fa37d5c6c761d3ba4c1219a49371414c0ff2bc941fd83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
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
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage"), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nbresults"), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nbresults")), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
        echo "_per_page\" style=\"width: auto; height: auto\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "getperpageoptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($this->getContext($context, "per_page") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "maxperpage"))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), array("_page" => 1, "_per_page" => $this->getContext($context, "per_page"))))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $this->getContext($context, "per_page"), "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  84 => 26,  66 => 22,  61 => 19,  184 => 72,  178 => 71,  168 => 68,  162 => 64,  156 => 61,  107 => 42,  163 => 66,  155 => 64,  151 => 63,  140 => 55,  105 => 41,  100 => 39,  80 => 25,  23 => 11,  56 => 23,  181 => 88,  175 => 84,  164 => 79,  153 => 75,  130 => 65,  127 => 64,  79 => 47,  37 => 4,  103 => 40,  68 => 20,  62 => 23,  483 => 162,  477 => 161,  472 => 158,  464 => 155,  460 => 153,  456 => 151,  447 => 149,  443 => 148,  440 => 147,  438 => 146,  433 => 144,  430 => 143,  426 => 142,  416 => 134,  412 => 132,  410 => 131,  405 => 130,  401 => 129,  396 => 126,  390 => 122,  387 => 121,  384 => 120,  382 => 119,  377 => 116,  371 => 112,  368 => 111,  365 => 110,  363 => 109,  358 => 106,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 98,  312 => 97,  308 => 95,  301 => 91,  297 => 90,  288 => 89,  286 => 88,  281 => 86,  271 => 85,  267 => 84,  261 => 81,  255 => 80,  250 => 78,  244 => 77,  238 => 74,  232 => 73,  227 => 71,  223 => 70,  217 => 69,  211 => 68,  180 => 65,  172 => 60,  146 => 56,  143 => 55,  135 => 51,  131 => 49,  122 => 50,  110 => 36,  74 => 19,  41 => 7,  158 => 62,  138 => 47,  129 => 52,  117 => 47,  87 => 33,  73 => 43,  70 => 26,  64 => 18,  199 => 90,  186 => 82,  174 => 69,  169 => 81,  166 => 80,  161 => 78,  159 => 65,  154 => 63,  145 => 59,  141 => 57,  139 => 70,  124 => 63,  120 => 47,  108 => 35,  94 => 37,  65 => 24,  52 => 21,  96 => 38,  91 => 6,  81 => 21,  90 => 20,  49 => 33,  47 => 19,  24 => 2,  31 => 14,  97 => 38,  92 => 51,  88 => 25,  78 => 23,  71 => 30,  59 => 9,  30 => 16,  34 => 15,  29 => 14,  28 => 12,  27 => 3,  22 => 1,  82 => 48,  75 => 16,  72 => 25,  50 => 9,  43 => 19,  40 => 18,  25 => 11,  249 => 32,  160 => 56,  148 => 46,  142 => 50,  134 => 42,  126 => 51,  123 => 40,  118 => 43,  114 => 45,  111 => 44,  104 => 32,  101 => 31,  99 => 39,  86 => 25,  77 => 14,  69 => 23,  58 => 18,  55 => 17,  53 => 25,  46 => 21,  44 => 18,  38 => 22,  35 => 21,  32 => 15,  212 => 82,  206 => 78,  202 => 67,  196 => 73,  192 => 71,  190 => 84,  185 => 66,  179 => 64,  176 => 70,  171 => 72,  167 => 67,  165 => 57,  157 => 54,  152 => 51,  150 => 59,  147 => 58,  144 => 57,  136 => 69,  133 => 41,  128 => 44,  125 => 43,  119 => 61,  115 => 46,  112 => 44,  109 => 36,  106 => 56,  102 => 30,  98 => 34,  95 => 52,  89 => 33,  85 => 49,  83 => 31,  76 => 24,  67 => 25,  63 => 23,  60 => 27,  57 => 26,  54 => 35,  51 => 7,  48 => 8,  45 => 13,  42 => 12,  39 => 18,  36 => 16,  33 => 17,);
    }
}
