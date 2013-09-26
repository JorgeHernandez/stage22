<?php

/* TwigBundle:Exception:exception.xml.twig */
class __TwigTemplate_9e0c1023332c73110df263fdcc5674929cc3fb25b14f9ec0c1e21fb25b3f3ebd extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "toarray"));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "    <exception class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "class"), "html", null, true);
            echo "\" message=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "message"), "html", null, true);
            echo "\">
";
            // line 6
            $this->env->loadTemplate("TwigBundle:Exception:traces.xml.twig")->display(array("exception" => $this->getContext($context, "e")));
            // line 7
            echo "    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</error>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  49 => 11,  47 => 7,  24 => 2,  31 => 3,  97 => 22,  92 => 20,  88 => 19,  78 => 17,  71 => 14,  59 => 9,  30 => 4,  34 => 4,  29 => 3,  28 => 3,  27 => 2,  22 => 1,  82 => 18,  75 => 16,  72 => 12,  50 => 18,  43 => 11,  40 => 10,  25 => 2,  249 => 32,  160 => 56,  148 => 46,  142 => 45,  134 => 42,  126 => 41,  123 => 40,  118 => 39,  114 => 38,  111 => 37,  104 => 24,  101 => 32,  99 => 31,  86 => 25,  77 => 14,  69 => 15,  58 => 13,  55 => 21,  53 => 8,  46 => 6,  44 => 9,  38 => 5,  35 => 4,  32 => 4,  212 => 82,  206 => 78,  202 => 76,  196 => 73,  192 => 71,  190 => 70,  185 => 68,  179 => 64,  176 => 63,  171 => 62,  167 => 58,  165 => 57,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 42,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 35,  112 => 34,  109 => 36,  106 => 32,  102 => 30,  98 => 28,  95 => 21,  89 => 24,  85 => 22,  83 => 19,  76 => 19,  67 => 12,  63 => 6,  60 => 14,  57 => 22,  54 => 9,  51 => 9,  48 => 17,  45 => 6,  42 => 6,  39 => 7,  36 => 6,  33 => 3,);
    }
}
