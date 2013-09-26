<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0e3e1af873a1541b82717e043f622b70ce67e704a8f831807e07148500e760ee extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  31 => 3,  97 => 22,  92 => 20,  88 => 19,  78 => 17,  71 => 14,  59 => 9,  30 => 4,  34 => 5,  29 => 3,  28 => 3,  27 => 2,  22 => 1,  82 => 18,  75 => 16,  72 => 12,  50 => 18,  43 => 11,  40 => 10,  25 => 2,  249 => 32,  160 => 56,  148 => 46,  142 => 45,  134 => 42,  126 => 41,  123 => 40,  118 => 39,  114 => 38,  111 => 37,  104 => 24,  101 => 32,  99 => 31,  86 => 25,  77 => 14,  69 => 11,  58 => 16,  55 => 21,  53 => 8,  46 => 6,  44 => 5,  38 => 9,  35 => 4,  32 => 4,  212 => 82,  206 => 78,  202 => 76,  196 => 73,  192 => 71,  190 => 70,  185 => 68,  179 => 64,  176 => 63,  171 => 62,  167 => 58,  165 => 57,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 42,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 35,  112 => 34,  109 => 36,  106 => 32,  102 => 30,  98 => 28,  95 => 21,  89 => 24,  85 => 22,  83 => 24,  76 => 19,  67 => 12,  63 => 6,  60 => 12,  57 => 22,  54 => 10,  51 => 9,  48 => 17,  45 => 16,  42 => 6,  39 => 5,  36 => 5,  33 => 3,);
    }
}
