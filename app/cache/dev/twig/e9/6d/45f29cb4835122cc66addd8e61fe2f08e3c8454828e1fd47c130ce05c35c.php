<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_e96d45f29cb4835122cc66addd8e61fe2f08e3c8454828e1fd47c130ce05c35c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig");

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"icon-ok\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"icon-remove\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($this->getContext($context, "name")) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getContext($context, "name")), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "view_group"), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin", true), "show", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "show"), $this->getContext($context, "field_name"), array(), "array"), $this->getContext($context, "object"));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 56,  116 => 37,  113 => 36,  26 => 13,  93 => 34,  84 => 26,  66 => 31,  61 => 22,  184 => 72,  178 => 71,  168 => 68,  162 => 49,  156 => 48,  107 => 42,  163 => 66,  155 => 64,  151 => 63,  140 => 55,  105 => 41,  100 => 31,  80 => 25,  23 => 1,  56 => 23,  181 => 88,  175 => 84,  164 => 79,  153 => 75,  130 => 65,  127 => 64,  79 => 35,  37 => 15,  103 => 40,  68 => 20,  62 => 23,  483 => 162,  477 => 161,  472 => 158,  464 => 155,  460 => 153,  456 => 151,  447 => 149,  443 => 148,  440 => 147,  438 => 146,  433 => 144,  430 => 143,  426 => 142,  416 => 134,  412 => 132,  410 => 131,  405 => 130,  401 => 129,  396 => 126,  390 => 122,  387 => 121,  384 => 120,  382 => 119,  377 => 116,  371 => 112,  368 => 111,  365 => 110,  363 => 109,  358 => 106,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 98,  312 => 97,  308 => 95,  301 => 91,  297 => 90,  288 => 89,  286 => 88,  281 => 86,  271 => 85,  267 => 84,  261 => 81,  255 => 80,  250 => 78,  244 => 77,  238 => 74,  232 => 73,  227 => 71,  223 => 70,  217 => 69,  211 => 68,  180 => 65,  172 => 60,  146 => 56,  143 => 44,  135 => 57,  131 => 49,  122 => 39,  110 => 48,  74 => 29,  41 => 7,  158 => 62,  138 => 47,  129 => 55,  117 => 50,  87 => 33,  73 => 25,  70 => 24,  64 => 23,  199 => 90,  186 => 82,  174 => 69,  169 => 81,  166 => 80,  161 => 78,  159 => 65,  154 => 63,  145 => 59,  141 => 57,  139 => 70,  124 => 52,  120 => 47,  108 => 35,  94 => 30,  65 => 24,  52 => 23,  96 => 38,  91 => 33,  81 => 36,  90 => 20,  49 => 33,  47 => 21,  24 => 2,  31 => 14,  97 => 38,  92 => 42,  88 => 28,  78 => 23,  71 => 30,  59 => 27,  30 => 16,  34 => 17,  29 => 14,  28 => 12,  27 => 3,  22 => 11,  82 => 31,  75 => 16,  72 => 33,  50 => 19,  43 => 19,  40 => 17,  25 => 11,  249 => 32,  160 => 56,  148 => 46,  142 => 50,  134 => 42,  126 => 51,  123 => 40,  118 => 43,  114 => 40,  111 => 44,  104 => 46,  101 => 36,  99 => 44,  86 => 25,  77 => 14,  69 => 32,  58 => 21,  55 => 20,  53 => 25,  46 => 21,  44 => 18,  38 => 22,  35 => 14,  32 => 16,  212 => 82,  206 => 78,  202 => 67,  196 => 73,  192 => 71,  190 => 84,  185 => 66,  179 => 64,  176 => 70,  171 => 72,  167 => 67,  165 => 57,  157 => 54,  152 => 51,  150 => 46,  147 => 45,  144 => 57,  136 => 69,  133 => 41,  128 => 40,  125 => 43,  119 => 61,  115 => 46,  112 => 44,  109 => 35,  106 => 34,  102 => 45,  98 => 34,  95 => 43,  89 => 33,  85 => 38,  83 => 31,  76 => 34,  67 => 25,  63 => 26,  60 => 27,  57 => 26,  54 => 35,  51 => 7,  48 => 21,  45 => 20,  42 => 16,  39 => 18,  36 => 16,  33 => 17,);
    }
}
