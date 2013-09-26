<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_9332b3e80ea80c9bc68207605fc83b500cde907523c02f65f9c5b616a8c76f2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'show' => array($this, 'block_show'),
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
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 28
            echo "            <table class=\"table table-bordered\">
                ";
            // line 29
            if ($this->getContext($context, "name")) {
                // line 30
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getContext($context, "name")), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 36
            echo "
                ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "view_group"), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 38
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 39
                if ($this->getAttribute($this->getContext($context, "elements", true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                    // line 40
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getContext($context, "elements"), $this->getContext($context, "field_name"), array(), "array"), $this->getContext($context, "object"));
                    echo "
                        ";
                }
                // line 42
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 100,  370 => 99,  364 => 97,  355 => 94,  349 => 92,  346 => 91,  343 => 90,  335 => 88,  333 => 87,  330 => 86,  323 => 84,  318 => 83,  316 => 82,  313 => 81,  307 => 79,  305 => 78,  299 => 76,  296 => 75,  290 => 72,  283 => 69,  280 => 68,  274 => 66,  268 => 64,  265 => 63,  263 => 62,  260 => 61,  257 => 60,  252 => 55,  226 => 27,  219 => 25,  195 => 23,  191 => 21,  188 => 20,  183 => 104,  177 => 60,  12 => 34,  132 => 56,  116 => 46,  113 => 36,  26 => 1,  93 => 39,  84 => 34,  66 => 28,  61 => 22,  184 => 72,  178 => 71,  168 => 68,  162 => 49,  156 => 48,  107 => 42,  163 => 59,  155 => 63,  151 => 63,  140 => 47,  105 => 41,  100 => 37,  80 => 20,  23 => 1,  56 => 24,  181 => 88,  175 => 84,  164 => 79,  153 => 58,  130 => 65,  127 => 49,  79 => 35,  37 => 16,  103 => 42,  68 => 15,  62 => 26,  483 => 162,  477 => 161,  472 => 158,  464 => 155,  460 => 153,  456 => 151,  447 => 149,  443 => 148,  440 => 147,  438 => 146,  433 => 144,  430 => 143,  426 => 142,  416 => 134,  412 => 132,  410 => 131,  405 => 130,  401 => 129,  396 => 126,  390 => 122,  387 => 121,  384 => 120,  382 => 119,  377 => 116,  371 => 112,  368 => 111,  365 => 110,  363 => 109,  358 => 95,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 98,  312 => 97,  308 => 95,  301 => 91,  297 => 90,  288 => 89,  286 => 70,  281 => 86,  271 => 85,  267 => 84,  261 => 81,  255 => 80,  250 => 78,  244 => 31,  238 => 74,  232 => 73,  227 => 71,  223 => 70,  217 => 69,  211 => 68,  180 => 65,  172 => 58,  146 => 48,  143 => 53,  135 => 57,  131 => 44,  122 => 39,  110 => 44,  74 => 30,  41 => 7,  158 => 62,  138 => 47,  129 => 55,  117 => 46,  87 => 36,  73 => 29,  70 => 28,  64 => 27,  199 => 90,  186 => 82,  174 => 69,  169 => 57,  166 => 60,  161 => 78,  159 => 65,  154 => 63,  145 => 59,  141 => 57,  139 => 70,  124 => 42,  120 => 47,  108 => 35,  94 => 39,  65 => 27,  52 => 10,  96 => 38,  91 => 32,  81 => 36,  90 => 38,  49 => 9,  47 => 21,  24 => 11,  31 => 14,  97 => 40,  92 => 38,  88 => 37,  78 => 32,  71 => 24,  59 => 25,  30 => 16,  34 => 15,  29 => 14,  28 => 12,  27 => 12,  22 => 11,  82 => 34,  75 => 31,  72 => 29,  50 => 19,  43 => 13,  40 => 24,  25 => 12,  249 => 54,  160 => 58,  148 => 56,  142 => 50,  134 => 45,  126 => 51,  123 => 48,  118 => 40,  114 => 40,  111 => 44,  104 => 44,  101 => 36,  99 => 42,  86 => 35,  77 => 19,  69 => 28,  58 => 21,  55 => 20,  53 => 23,  46 => 14,  44 => 18,  38 => 4,  35 => 15,  32 => 15,  212 => 24,  206 => 78,  202 => 67,  196 => 73,  192 => 71,  190 => 84,  185 => 66,  179 => 102,  176 => 70,  171 => 72,  167 => 54,  165 => 57,  157 => 54,  152 => 51,  150 => 46,  147 => 45,  144 => 57,  136 => 51,  133 => 41,  128 => 40,  125 => 43,  119 => 49,  115 => 46,  112 => 47,  109 => 35,  106 => 45,  102 => 45,  98 => 40,  95 => 39,  89 => 33,  85 => 36,  83 => 28,  76 => 34,  67 => 25,  63 => 13,  60 => 18,  57 => 26,  54 => 16,  51 => 15,  48 => 20,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 17,);
    }
}
