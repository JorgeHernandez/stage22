<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_ec2fc6b770f864b32017291f97752fab84be1000f022c092e50dd5cf5bfb9770 extends Twig_Template
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
        if (((($this->getAttribute($this->getContext($context, "admin"), "isAclEnabled", array(), "method") && $this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "MASTER", 1 => $this->getContext($context, "object")), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "acl", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-user\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 72,  178 => 71,  168 => 68,  162 => 64,  156 => 61,  107 => 42,  163 => 66,  155 => 64,  151 => 63,  140 => 55,  105 => 41,  100 => 39,  80 => 30,  23 => 11,  56 => 23,  181 => 88,  175 => 84,  164 => 79,  153 => 75,  130 => 65,  127 => 64,  79 => 47,  37 => 4,  103 => 40,  68 => 20,  62 => 23,  483 => 162,  477 => 161,  472 => 158,  464 => 155,  460 => 153,  456 => 151,  447 => 149,  443 => 148,  440 => 147,  438 => 146,  433 => 144,  430 => 143,  426 => 142,  416 => 134,  412 => 132,  410 => 131,  405 => 130,  401 => 129,  396 => 126,  390 => 122,  387 => 121,  384 => 120,  382 => 119,  377 => 116,  371 => 112,  368 => 111,  365 => 110,  363 => 109,  358 => 106,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 98,  312 => 97,  308 => 95,  301 => 91,  297 => 90,  288 => 89,  286 => 88,  281 => 86,  271 => 85,  267 => 84,  261 => 81,  255 => 80,  250 => 78,  244 => 77,  238 => 74,  232 => 73,  227 => 71,  223 => 70,  217 => 69,  211 => 68,  180 => 65,  172 => 60,  146 => 56,  143 => 55,  135 => 51,  131 => 49,  122 => 50,  110 => 36,  74 => 19,  41 => 18,  158 => 62,  138 => 47,  129 => 52,  117 => 47,  87 => 33,  73 => 43,  70 => 26,  64 => 18,  199 => 90,  186 => 82,  174 => 69,  169 => 81,  166 => 80,  161 => 78,  159 => 65,  154 => 63,  145 => 59,  141 => 57,  139 => 70,  124 => 63,  120 => 47,  108 => 35,  94 => 37,  65 => 24,  52 => 21,  96 => 38,  91 => 6,  81 => 21,  90 => 20,  49 => 33,  47 => 19,  24 => 2,  31 => 14,  97 => 38,  92 => 51,  88 => 25,  78 => 23,  71 => 30,  59 => 9,  30 => 14,  34 => 15,  29 => 14,  28 => 12,  27 => 13,  22 => 11,  82 => 48,  75 => 16,  72 => 25,  50 => 9,  43 => 19,  40 => 18,  25 => 12,  249 => 32,  160 => 56,  148 => 46,  142 => 50,  134 => 42,  126 => 51,  123 => 40,  118 => 43,  114 => 45,  111 => 44,  104 => 32,  101 => 31,  99 => 39,  86 => 25,  77 => 14,  69 => 24,  58 => 17,  55 => 22,  53 => 25,  46 => 21,  44 => 18,  38 => 5,  35 => 12,  32 => 15,  212 => 82,  206 => 78,  202 => 67,  196 => 73,  192 => 71,  190 => 84,  185 => 66,  179 => 64,  176 => 70,  171 => 72,  167 => 67,  165 => 57,  157 => 54,  152 => 51,  150 => 59,  147 => 58,  144 => 57,  136 => 69,  133 => 41,  128 => 44,  125 => 43,  119 => 61,  115 => 46,  112 => 44,  109 => 36,  106 => 56,  102 => 30,  98 => 34,  95 => 52,  89 => 33,  85 => 49,  83 => 31,  76 => 29,  67 => 25,  63 => 23,  60 => 27,  57 => 26,  54 => 35,  51 => 7,  48 => 8,  45 => 7,  42 => 9,  39 => 18,  36 => 16,  33 => 15,);
    }
}
