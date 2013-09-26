<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_4110d4f6a18f3b0cc156b0d721ca89d8bbacd5e5324587407c9801ac7293c50f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "editable")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EDIT", 1 => $this->getContext($context, "object")), "method"))) {
            // line 17
            echo "    ";
            if ($this->getContext($context, "value")) {
                // line 18
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute($this->getContext($context, "field_description"), "name"), "objectId" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "value" => 0, "code" => $this->getAttribute($this->getContext($context, "admin"), "code", array(0 => $this->getContext($context, "object")), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <i class=\"icon-ok-circle\"></i>&nbsp;";
                // line 20
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                // line 21
                echo "</a>
    ";
            } else {
                // line 23
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute($this->getContext($context, "field_description"), "name"), "objectId" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "value" => 1, "code" => $this->getAttribute($this->getContext($context, "admin"), "code", array(0 => $this->getContext($context, "object")), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <i class=\"icon-ban-circle\"></i>&nbsp;";
                // line 25
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                // line 26
                echo "</a>
    ";
            }
        } else {
            // line 29
            echo "    ";
            if ($this->getContext($context, "value")) {
                // line 30
                echo "        <i class=\"icon-ok-circle\"></i>&nbsp;";
                // line 31
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            } else {
                // line 33
                echo "        <i class=\"icon-ban-circle\"></i>&nbsp;";
                // line 34
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 178,  556 => 176,  552 => 175,  544 => 172,  539 => 170,  533 => 168,  531 => 167,  525 => 163,  516 => 160,  512 => 159,  506 => 158,  503 => 157,  499 => 156,  494 => 154,  487 => 152,  479 => 150,  476 => 149,  473 => 148,  469 => 134,  466 => 133,  462 => 132,  459 => 131,  452 => 123,  448 => 122,  445 => 121,  429 => 102,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  406 => 94,  394 => 83,  391 => 82,  385 => 94,  381 => 92,  379 => 82,  376 => 81,  366 => 130,  360 => 126,  356 => 124,  354 => 121,  351 => 120,  332 => 116,  306 => 114,  295 => 110,  287 => 107,  284 => 80,  279 => 78,  248 => 69,  245 => 68,  242 => 67,  225 => 66,  222 => 65,  213 => 60,  207 => 59,  204 => 58,  200 => 56,  173 => 52,  373 => 80,  370 => 99,  364 => 97,  355 => 94,  349 => 92,  346 => 117,  343 => 90,  335 => 88,  333 => 87,  330 => 86,  323 => 115,  318 => 83,  316 => 82,  313 => 81,  307 => 79,  305 => 78,  299 => 112,  296 => 75,  290 => 108,  283 => 69,  280 => 68,  274 => 76,  268 => 74,  265 => 63,  263 => 71,  260 => 61,  257 => 60,  252 => 55,  226 => 27,  219 => 64,  195 => 23,  191 => 54,  188 => 20,  183 => 104,  177 => 60,  12 => 34,  132 => 56,  116 => 46,  113 => 36,  26 => 11,  93 => 39,  84 => 37,  66 => 28,  61 => 22,  184 => 72,  178 => 71,  168 => 50,  162 => 48,  156 => 46,  107 => 143,  163 => 59,  155 => 63,  151 => 63,  140 => 47,  105 => 39,  100 => 43,  80 => 13,  23 => 11,  56 => 24,  181 => 88,  175 => 84,  164 => 79,  153 => 45,  130 => 65,  127 => 49,  79 => 35,  37 => 18,  103 => 42,  68 => 25,  62 => 29,  483 => 162,  477 => 161,  472 => 158,  464 => 155,  460 => 153,  456 => 130,  447 => 149,  443 => 148,  440 => 104,  438 => 146,  433 => 144,  430 => 143,  426 => 142,  416 => 134,  412 => 132,  410 => 131,  405 => 130,  401 => 129,  396 => 126,  390 => 122,  387 => 106,  384 => 120,  382 => 119,  377 => 116,  371 => 112,  368 => 135,  365 => 110,  363 => 109,  358 => 95,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 98,  312 => 97,  308 => 95,  301 => 113,  297 => 90,  288 => 89,  286 => 70,  281 => 79,  271 => 75,  267 => 84,  261 => 81,  255 => 80,  250 => 78,  244 => 31,  238 => 74,  232 => 73,  227 => 71,  223 => 70,  217 => 69,  211 => 68,  180 => 65,  172 => 58,  146 => 48,  143 => 53,  135 => 44,  131 => 44,  122 => 32,  110 => 40,  74 => 32,  41 => 18,  158 => 62,  138 => 47,  129 => 34,  117 => 46,  87 => 73,  73 => 29,  70 => 33,  64 => 27,  199 => 90,  186 => 82,  174 => 69,  169 => 57,  166 => 60,  161 => 78,  159 => 47,  154 => 63,  145 => 59,  141 => 41,  139 => 40,  124 => 42,  120 => 47,  108 => 26,  94 => 39,  65 => 30,  52 => 23,  96 => 38,  91 => 32,  81 => 36,  90 => 39,  49 => 9,  47 => 21,  24 => 11,  31 => 14,  97 => 139,  92 => 17,  88 => 37,  78 => 32,  71 => 31,  59 => 22,  30 => 14,  34 => 16,  29 => 14,  28 => 13,  27 => 13,  22 => 11,  82 => 36,  75 => 31,  72 => 34,  50 => 23,  43 => 15,  40 => 20,  25 => 12,  249 => 54,  160 => 58,  148 => 56,  142 => 50,  134 => 45,  126 => 33,  123 => 48,  118 => 30,  114 => 30,  111 => 44,  104 => 142,  101 => 38,  99 => 42,  86 => 15,  77 => 34,  69 => 28,  58 => 25,  55 => 25,  53 => 23,  46 => 21,  44 => 20,  38 => 20,  35 => 15,  32 => 15,  212 => 24,  206 => 78,  202 => 67,  196 => 55,  192 => 71,  190 => 84,  185 => 53,  179 => 102,  176 => 70,  171 => 51,  167 => 54,  165 => 49,  157 => 54,  152 => 51,  150 => 44,  147 => 43,  144 => 42,  136 => 51,  133 => 41,  128 => 40,  125 => 43,  119 => 49,  115 => 29,  112 => 47,  109 => 35,  106 => 45,  102 => 23,  98 => 19,  95 => 41,  89 => 33,  85 => 64,  83 => 14,  76 => 34,  67 => 31,  63 => 19,  60 => 26,  57 => 26,  54 => 16,  51 => 15,  48 => 17,  45 => 19,  42 => 21,  39 => 18,  36 => 17,  33 => 15,);
    }
}
