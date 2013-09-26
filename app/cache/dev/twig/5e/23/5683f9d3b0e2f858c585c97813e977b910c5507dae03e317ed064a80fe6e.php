<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5e235683f9d3b0e2f858c585c97813e977b910c5507dae03e317ed064a80fe6e extends Twig_Template
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
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "\".

Please e-mail us at [email] and let us know what you were doing when this
error occurred. We will fix it as soon as possible. Sorry for any
inconvenience caused.
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 9,  91 => 6,  81 => 40,  90 => 20,  49 => 7,  47 => 9,  24 => 2,  31 => 3,  97 => 22,  92 => 20,  88 => 19,  78 => 17,  71 => 14,  59 => 9,  30 => 4,  34 => 4,  29 => 3,  28 => 3,  27 => 4,  22 => 1,  82 => 18,  75 => 16,  72 => 12,  50 => 18,  43 => 8,  40 => 10,  25 => 2,  249 => 32,  160 => 56,  148 => 46,  142 => 45,  134 => 42,  126 => 41,  123 => 40,  118 => 39,  114 => 38,  111 => 37,  104 => 24,  101 => 40,  99 => 31,  86 => 25,  77 => 14,  69 => 15,  58 => 13,  55 => 21,  53 => 8,  46 => 8,  44 => 9,  38 => 4,  35 => 6,  32 => 4,  212 => 82,  206 => 78,  202 => 76,  196 => 73,  192 => 71,  190 => 70,  185 => 68,  179 => 64,  176 => 63,  171 => 62,  167 => 58,  165 => 57,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 42,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 35,  112 => 34,  109 => 36,  106 => 32,  102 => 30,  98 => 28,  95 => 21,  89 => 24,  85 => 22,  83 => 41,  76 => 19,  67 => 12,  63 => 6,  60 => 12,  57 => 11,  54 => 9,  51 => 9,  48 => 17,  45 => 6,  42 => 6,  39 => 7,  36 => 4,  33 => 3,);
    }
}
