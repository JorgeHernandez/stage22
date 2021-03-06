<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_e717c16a3f0187eb3e3382b2aca124907ddc9a7e2534bd8164dc95c6c90bdaa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
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
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
    <div class=\"span5\">
        <table class=\"table\" id=\"revisions\">
            <thead>
                <tr>
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "revisions"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "rev"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "history_revision_timestamp"), "method"));
            $template->display($context);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "username"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "history_view_revision", 1 => $this->getContext($context, "object"), 2 => array("revision" => $this->getAttribute($this->getContext($context, "revision"), "rev"))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "rev"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
    </div>
    <div id=\"revision-detail\" class=\"span7 revision-detail\">

    </div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {

            jQuery('a.revision-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                jQuery('#revision-detail').html('');
                jQuery('table#revisions tbody tr').removeClass('current');
                jQuery(this).parent('').removeClass('current');

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 178,  556 => 176,  552 => 175,  544 => 172,  539 => 170,  533 => 168,  531 => 167,  525 => 163,  516 => 160,  512 => 159,  506 => 158,  503 => 157,  499 => 156,  494 => 154,  487 => 152,  479 => 150,  476 => 149,  473 => 148,  469 => 134,  466 => 133,  462 => 132,  459 => 131,  452 => 123,  448 => 122,  445 => 121,  429 => 102,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  406 => 94,  394 => 83,  391 => 82,  385 => 94,  381 => 92,  379 => 82,  376 => 81,  366 => 130,  360 => 126,  356 => 124,  354 => 121,  351 => 120,  332 => 116,  306 => 114,  295 => 110,  287 => 107,  284 => 80,  279 => 78,  248 => 69,  245 => 68,  242 => 67,  225 => 66,  222 => 65,  213 => 60,  207 => 59,  204 => 58,  200 => 56,  173 => 52,  373 => 80,  370 => 99,  364 => 97,  355 => 94,  349 => 92,  346 => 117,  343 => 90,  335 => 88,  333 => 87,  330 => 86,  323 => 115,  318 => 83,  316 => 82,  313 => 81,  307 => 79,  305 => 78,  299 => 112,  296 => 75,  290 => 108,  283 => 69,  280 => 68,  274 => 76,  268 => 74,  265 => 63,  263 => 71,  260 => 61,  257 => 60,  252 => 55,  226 => 27,  219 => 64,  195 => 23,  191 => 54,  188 => 20,  183 => 104,  177 => 60,  12 => 34,  132 => 56,  116 => 46,  113 => 36,  26 => 12,  93 => 39,  84 => 34,  66 => 30,  61 => 22,  184 => 72,  178 => 71,  168 => 50,  162 => 48,  156 => 46,  107 => 143,  163 => 59,  155 => 63,  151 => 63,  140 => 47,  105 => 39,  100 => 37,  80 => 29,  23 => 11,  56 => 24,  181 => 88,  175 => 84,  164 => 79,  153 => 45,  130 => 65,  127 => 49,  79 => 35,  37 => 17,  103 => 42,  68 => 25,  62 => 29,  483 => 162,  477 => 161,  472 => 158,  464 => 155,  460 => 153,  456 => 130,  447 => 149,  443 => 148,  440 => 104,  438 => 146,  433 => 144,  430 => 143,  426 => 142,  416 => 134,  412 => 132,  410 => 131,  405 => 130,  401 => 129,  396 => 126,  390 => 122,  387 => 106,  384 => 120,  382 => 119,  377 => 116,  371 => 112,  368 => 135,  365 => 110,  363 => 109,  358 => 95,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 98,  312 => 97,  308 => 95,  301 => 113,  297 => 90,  288 => 89,  286 => 70,  281 => 79,  271 => 75,  267 => 84,  261 => 81,  255 => 80,  250 => 78,  244 => 31,  238 => 74,  232 => 73,  227 => 71,  223 => 70,  217 => 69,  211 => 68,  180 => 65,  172 => 58,  146 => 48,  143 => 53,  135 => 44,  131 => 44,  122 => 32,  110 => 40,  74 => 32,  41 => 18,  158 => 62,  138 => 47,  129 => 34,  117 => 46,  87 => 73,  73 => 29,  70 => 31,  64 => 27,  199 => 90,  186 => 82,  174 => 69,  169 => 57,  166 => 60,  161 => 78,  159 => 47,  154 => 63,  145 => 59,  141 => 41,  139 => 40,  124 => 42,  120 => 47,  108 => 35,  94 => 39,  65 => 24,  52 => 23,  96 => 38,  91 => 32,  81 => 36,  90 => 74,  49 => 9,  47 => 20,  24 => 11,  31 => 14,  97 => 139,  92 => 137,  88 => 37,  78 => 32,  71 => 26,  59 => 22,  30 => 14,  34 => 15,  29 => 14,  28 => 13,  27 => 12,  22 => 11,  82 => 63,  75 => 31,  72 => 29,  50 => 22,  43 => 15,  40 => 14,  25 => 12,  249 => 54,  160 => 58,  148 => 56,  142 => 50,  134 => 45,  126 => 33,  123 => 48,  118 => 30,  114 => 41,  111 => 44,  104 => 142,  101 => 38,  99 => 42,  86 => 35,  77 => 28,  69 => 28,  58 => 21,  55 => 24,  53 => 20,  46 => 16,  44 => 19,  38 => 17,  35 => 15,  32 => 15,  212 => 24,  206 => 78,  202 => 67,  196 => 55,  192 => 71,  190 => 84,  185 => 53,  179 => 102,  176 => 70,  171 => 51,  167 => 54,  165 => 49,  157 => 54,  152 => 51,  150 => 44,  147 => 43,  144 => 42,  136 => 51,  133 => 41,  128 => 40,  125 => 43,  119 => 49,  115 => 29,  112 => 47,  109 => 35,  106 => 45,  102 => 45,  98 => 37,  95 => 138,  89 => 33,  85 => 64,  83 => 28,  76 => 34,  67 => 25,  63 => 19,  60 => 18,  57 => 26,  54 => 16,  51 => 15,  48 => 17,  45 => 19,  42 => 20,  39 => 18,  36 => 16,  33 => 15,);
    }
}
