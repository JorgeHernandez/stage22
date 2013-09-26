<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_1472b734bf97956ad048684d1ab431e101c68d76e26fc80c4002ba9f408052dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "revisions"));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "revision"), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "revision"), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "revision"), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "revision"), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 225,  682 => 219,  675 => 215,  669 => 212,  665 => 210,  663 => 209,  652 => 205,  649 => 204,  641 => 201,  638 => 200,  632 => 198,  630 => 197,  627 => 196,  621 => 194,  619 => 193,  616 => 192,  613 => 191,  603 => 145,  594 => 142,  589 => 141,  584 => 140,  573 => 137,  563 => 126,  560 => 125,  554 => 124,  549 => 121,  543 => 120,  535 => 118,  532 => 117,  528 => 116,  523 => 114,  520 => 113,  518 => 112,  515 => 111,  508 => 110,  505 => 109,  491 => 106,  488 => 105,  485 => 104,  470 => 127,  467 => 104,  465 => 103,  461 => 101,  451 => 96,  424 => 56,  420 => 55,  415 => 53,  402 => 49,  386 => 43,  369 => 36,  359 => 32,  348 => 28,  328 => 221,  326 => 191,  319 => 189,  303 => 181,  278 => 170,  258 => 167,  247 => 162,  233 => 158,  228 => 156,  198 => 150,  704 => 213,  698 => 210,  695 => 209,  693 => 208,  687 => 224,  677 => 204,  672 => 202,  660 => 208,  657 => 199,  654 => 206,  646 => 193,  643 => 202,  626 => 190,  609 => 146,  604 => 187,  599 => 186,  596 => 185,  593 => 184,  587 => 180,  583 => 178,  581 => 139,  576 => 138,  559 => 174,  542 => 173,  538 => 172,  530 => 170,  527 => 169,  524 => 168,  521 => 167,  519 => 166,  507 => 160,  501 => 157,  498 => 156,  496 => 107,  493 => 154,  489 => 134,  474 => 129,  471 => 128,  458 => 100,  453 => 145,  444 => 141,  442 => 140,  437 => 93,  423 => 135,  421 => 128,  407 => 124,  398 => 120,  392 => 44,  380 => 115,  374 => 113,  361 => 106,  352 => 103,  350 => 102,  345 => 101,  342 => 22,  339 => 99,  329 => 93,  327 => 92,  322 => 190,  314 => 89,  310 => 185,  300 => 84,  294 => 177,  292 => 176,  289 => 175,  277 => 77,  275 => 169,  272 => 168,  266 => 71,  253 => 67,  246 => 65,  241 => 160,  239 => 63,  236 => 62,  231 => 157,  203 => 55,  194 => 50,  149 => 34,  347 => 97,  341 => 94,  338 => 93,  324 => 91,  298 => 88,  291 => 85,  285 => 79,  262 => 70,  230 => 60,  218 => 54,  193 => 50,  187 => 47,  121 => 28,  567 => 127,  556 => 176,  552 => 175,  544 => 172,  539 => 170,  533 => 171,  531 => 167,  525 => 163,  516 => 165,  512 => 159,  506 => 158,  503 => 158,  499 => 108,  494 => 154,  487 => 152,  479 => 103,  476 => 149,  473 => 128,  469 => 134,  466 => 133,  462 => 132,  459 => 131,  452 => 123,  448 => 122,  445 => 95,  429 => 102,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  406 => 50,  394 => 83,  391 => 82,  385 => 94,  381 => 92,  379 => 40,  376 => 81,  366 => 130,  360 => 126,  356 => 124,  354 => 30,  351 => 29,  332 => 95,  306 => 114,  295 => 87,  287 => 107,  284 => 172,  279 => 78,  248 => 69,  245 => 68,  242 => 67,  225 => 155,  222 => 65,  213 => 60,  207 => 154,  204 => 153,  200 => 54,  173 => 93,  373 => 37,  370 => 99,  364 => 107,  355 => 94,  349 => 92,  346 => 117,  343 => 95,  335 => 231,  333 => 224,  330 => 86,  323 => 115,  318 => 90,  316 => 82,  313 => 186,  307 => 79,  305 => 78,  299 => 112,  296 => 75,  290 => 108,  283 => 82,  280 => 78,  274 => 76,  268 => 74,  265 => 63,  263 => 71,  260 => 61,  257 => 68,  252 => 165,  226 => 58,  219 => 64,  195 => 23,  191 => 54,  188 => 20,  183 => 132,  177 => 60,  12 => 34,  132 => 24,  116 => 46,  113 => 25,  26 => 11,  93 => 18,  84 => 15,  66 => 4,  61 => 22,  184 => 47,  178 => 100,  168 => 50,  162 => 48,  156 => 35,  107 => 23,  163 => 59,  155 => 38,  151 => 63,  140 => 27,  105 => 17,  100 => 43,  80 => 27,  23 => 11,  56 => 22,  181 => 45,  175 => 99,  164 => 90,  153 => 45,  130 => 65,  127 => 23,  79 => 13,  37 => 13,  103 => 42,  68 => 5,  62 => 23,  483 => 132,  477 => 130,  472 => 158,  464 => 149,  460 => 153,  456 => 146,  447 => 142,  443 => 148,  440 => 94,  438 => 146,  433 => 144,  430 => 57,  426 => 136,  416 => 134,  412 => 127,  410 => 51,  405 => 130,  401 => 121,  396 => 46,  390 => 122,  387 => 116,  384 => 120,  382 => 41,  377 => 114,  371 => 112,  368 => 135,  365 => 110,  363 => 33,  358 => 105,  344 => 105,  340 => 103,  325 => 101,  317 => 99,  315 => 89,  312 => 97,  308 => 184,  301 => 113,  297 => 178,  288 => 84,  286 => 70,  281 => 79,  271 => 73,  267 => 72,  261 => 81,  255 => 68,  250 => 66,  244 => 31,  238 => 74,  232 => 73,  227 => 71,  223 => 56,  217 => 69,  211 => 57,  180 => 131,  172 => 58,  146 => 78,  143 => 28,  135 => 44,  131 => 44,  122 => 32,  110 => 24,  74 => 32,  41 => 17,  158 => 62,  138 => 47,  129 => 34,  117 => 46,  87 => 16,  73 => 29,  70 => 40,  64 => 25,  199 => 52,  186 => 82,  174 => 69,  169 => 57,  166 => 91,  161 => 37,  159 => 36,  154 => 63,  145 => 59,  141 => 41,  139 => 75,  124 => 29,  120 => 47,  108 => 26,  94 => 39,  65 => 24,  52 => 112,  96 => 38,  91 => 12,  81 => 63,  90 => 17,  49 => 19,  47 => 18,  24 => 11,  31 => 13,  97 => 139,  92 => 67,  88 => 30,  78 => 21,  71 => 6,  59 => 81,  30 => 3,  34 => 14,  29 => 11,  28 => 12,  27 => 2,  22 => 11,  82 => 14,  75 => 198,  72 => 59,  50 => 75,  43 => 16,  40 => 54,  25 => 12,  249 => 54,  160 => 41,  148 => 56,  142 => 76,  134 => 25,  126 => 30,  123 => 48,  118 => 27,  114 => 30,  111 => 44,  104 => 22,  101 => 21,  99 => 42,  86 => 15,  77 => 34,  69 => 17,  58 => 22,  55 => 113,  53 => 21,  46 => 21,  44 => 15,  38 => 13,  35 => 12,  32 => 11,  212 => 24,  206 => 56,  202 => 152,  196 => 149,  192 => 147,  190 => 137,  185 => 53,  179 => 45,  176 => 42,  171 => 51,  167 => 54,  165 => 49,  157 => 54,  152 => 80,  150 => 44,  147 => 33,  144 => 42,  136 => 74,  133 => 41,  128 => 40,  125 => 43,  119 => 72,  115 => 70,  112 => 69,  109 => 35,  106 => 45,  102 => 23,  98 => 20,  95 => 68,  89 => 66,  85 => 10,  83 => 64,  76 => 61,  67 => 39,  63 => 3,  60 => 154,  57 => 153,  54 => 17,  51 => 20,  48 => 19,  45 => 18,  42 => 61,  39 => 14,  36 => 16,  33 => 11,);
    }
}
