<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_46c65e37ce99e811e9920919df464a1f7b54abb0078f0740860451c88a996d26 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute($this->getContext($context, "request"), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "request"), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute($this->getContext($context, "router"), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($this->getContext($context, "router"), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "traces"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("almost") : ((((2 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 36,  201 => 32,  309 => 141,  259 => 121,  251 => 116,  137 => 59,  688 => 405,  678 => 402,  673 => 400,  668 => 398,  664 => 396,  653 => 388,  647 => 385,  637 => 381,  602 => 358,  595 => 354,  591 => 352,  571 => 338,  564 => 334,  545 => 320,  540 => 318,  500 => 300,  495 => 298,  480 => 288,  457 => 269,  449 => 266,  436 => 258,  434 => 257,  419 => 248,  413 => 245,  388 => 226,  302 => 174,  216 => 126,  182 => 107,  399 => 157,  397 => 156,  362 => 140,  311 => 118,  276 => 159,  273 => 100,  270 => 98,  240 => 85,  237 => 41,  235 => 136,  224 => 78,  221 => 77,  205 => 73,  170 => 60,  197 => 87,  189 => 82,  690 => 409,  682 => 219,  675 => 215,  669 => 212,  665 => 210,  663 => 209,  652 => 205,  649 => 204,  641 => 201,  638 => 200,  632 => 198,  630 => 197,  627 => 374,  621 => 194,  619 => 369,  616 => 192,  613 => 191,  603 => 145,  594 => 142,  589 => 349,  584 => 140,  573 => 137,  563 => 126,  560 => 125,  554 => 124,  549 => 121,  543 => 120,  535 => 118,  532 => 315,  528 => 314,  523 => 312,  520 => 113,  518 => 310,  515 => 111,  508 => 110,  505 => 109,  491 => 106,  488 => 293,  485 => 104,  470 => 281,  467 => 104,  465 => 103,  461 => 101,  451 => 96,  424 => 56,  420 => 55,  415 => 53,  402 => 158,  386 => 150,  369 => 142,  359 => 32,  348 => 135,  328 => 125,  326 => 191,  319 => 189,  303 => 139,  278 => 170,  258 => 55,  247 => 162,  233 => 106,  228 => 62,  198 => 150,  704 => 418,  698 => 210,  695 => 412,  693 => 208,  687 => 224,  677 => 204,  672 => 202,  660 => 208,  657 => 389,  654 => 206,  646 => 193,  643 => 384,  626 => 190,  609 => 362,  604 => 187,  599 => 186,  596 => 185,  593 => 184,  587 => 348,  583 => 178,  581 => 345,  576 => 138,  559 => 174,  542 => 173,  538 => 172,  530 => 170,  527 => 169,  524 => 168,  521 => 167,  519 => 166,  507 => 160,  501 => 157,  498 => 156,  496 => 107,  493 => 154,  489 => 134,  474 => 129,  471 => 128,  458 => 100,  453 => 268,  444 => 141,  442 => 140,  437 => 93,  423 => 135,  421 => 128,  407 => 124,  398 => 120,  392 => 44,  380 => 147,  374 => 144,  361 => 106,  352 => 103,  350 => 102,  345 => 133,  342 => 22,  339 => 189,  329 => 93,  327 => 92,  322 => 190,  314 => 89,  310 => 185,  300 => 84,  294 => 177,  292 => 109,  289 => 133,  277 => 129,  275 => 169,  272 => 168,  266 => 125,  253 => 67,  246 => 65,  241 => 139,  239 => 109,  236 => 62,  231 => 157,  203 => 55,  194 => 26,  149 => 34,  347 => 97,  341 => 94,  338 => 129,  324 => 124,  298 => 88,  291 => 85,  285 => 79,  262 => 70,  230 => 134,  218 => 54,  193 => 50,  187 => 47,  121 => 26,  567 => 127,  556 => 329,  552 => 327,  544 => 172,  539 => 170,  533 => 171,  531 => 167,  525 => 163,  516 => 165,  512 => 159,  506 => 303,  503 => 158,  499 => 108,  494 => 154,  487 => 152,  479 => 103,  476 => 149,  473 => 128,  469 => 134,  466 => 280,  462 => 132,  459 => 275,  452 => 123,  448 => 122,  445 => 95,  429 => 255,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  406 => 50,  394 => 83,  391 => 82,  385 => 94,  381 => 92,  379 => 40,  376 => 81,  366 => 210,  360 => 139,  356 => 124,  354 => 30,  351 => 198,  332 => 126,  306 => 140,  295 => 135,  287 => 167,  284 => 172,  279 => 102,  248 => 88,  245 => 48,  242 => 47,  225 => 155,  222 => 101,  213 => 60,  207 => 154,  204 => 33,  200 => 90,  173 => 12,  373 => 37,  370 => 99,  364 => 107,  355 => 138,  349 => 92,  346 => 117,  343 => 95,  335 => 188,  333 => 224,  330 => 186,  323 => 115,  318 => 90,  316 => 178,  313 => 186,  307 => 79,  305 => 78,  299 => 112,  296 => 75,  290 => 108,  283 => 131,  280 => 78,  274 => 76,  268 => 126,  265 => 63,  263 => 124,  260 => 61,  257 => 149,  252 => 50,  226 => 47,  219 => 42,  195 => 88,  191 => 68,  188 => 86,  183 => 132,  177 => 18,  12 => 34,  132 => 57,  116 => 40,  113 => 51,  26 => 3,  93 => 34,  84 => 31,  66 => 20,  61 => 18,  184 => 80,  178 => 77,  168 => 77,  162 => 70,  156 => 72,  107 => 37,  163 => 76,  155 => 92,  151 => 7,  140 => 45,  105 => 39,  100 => 63,  80 => 25,  23 => 11,  56 => 17,  181 => 45,  175 => 99,  164 => 71,  153 => 65,  130 => 76,  127 => 23,  79 => 28,  37 => 4,  103 => 36,  68 => 22,  62 => 22,  483 => 132,  477 => 130,  472 => 158,  464 => 149,  460 => 153,  456 => 146,  447 => 142,  443 => 263,  440 => 94,  438 => 262,  433 => 144,  430 => 57,  426 => 136,  416 => 134,  412 => 127,  410 => 51,  405 => 130,  401 => 236,  396 => 46,  390 => 152,  387 => 116,  384 => 120,  382 => 41,  377 => 114,  371 => 212,  368 => 135,  365 => 141,  363 => 33,  358 => 105,  344 => 105,  340 => 103,  325 => 184,  317 => 99,  315 => 143,  312 => 97,  308 => 175,  301 => 113,  297 => 111,  288 => 84,  286 => 106,  281 => 79,  271 => 103,  267 => 72,  261 => 56,  255 => 68,  250 => 49,  244 => 31,  238 => 74,  232 => 73,  227 => 103,  223 => 56,  217 => 41,  211 => 124,  180 => 19,  172 => 74,  146 => 78,  143 => 28,  135 => 27,  131 => 58,  122 => 42,  110 => 42,  74 => 24,  41 => 7,  158 => 55,  138 => 81,  129 => 34,  117 => 44,  87 => 32,  73 => 22,  70 => 32,  64 => 16,  199 => 71,  186 => 21,  174 => 102,  169 => 100,  166 => 91,  161 => 75,  159 => 10,  154 => 8,  145 => 50,  141 => 61,  139 => 60,  124 => 103,  120 => 51,  108 => 47,  94 => 34,  65 => 21,  52 => 12,  96 => 19,  91 => 60,  81 => 22,  90 => 33,  49 => 9,  47 => 8,  24 => 2,  31 => 6,  97 => 37,  92 => 40,  88 => 18,  78 => 28,  71 => 31,  59 => 14,  30 => 3,  34 => 3,  29 => 3,  28 => 4,  27 => 3,  22 => 1,  82 => 29,  75 => 11,  72 => 28,  50 => 15,  43 => 11,  40 => 5,  25 => 2,  249 => 54,  160 => 41,  148 => 56,  142 => 60,  134 => 51,  126 => 104,  123 => 47,  118 => 50,  114 => 30,  111 => 48,  104 => 22,  101 => 39,  99 => 35,  86 => 27,  77 => 30,  69 => 24,  58 => 10,  55 => 18,  53 => 16,  46 => 11,  44 => 10,  38 => 30,  35 => 5,  32 => 4,  212 => 96,  206 => 93,  202 => 152,  196 => 70,  192 => 147,  190 => 87,  185 => 85,  179 => 82,  176 => 62,  171 => 51,  167 => 72,  165 => 71,  157 => 67,  152 => 80,  150 => 69,  147 => 68,  144 => 5,  136 => 74,  133 => 46,  128 => 50,  125 => 43,  119 => 45,  115 => 97,  112 => 43,  109 => 40,  106 => 46,  102 => 43,  98 => 35,  95 => 22,  89 => 33,  85 => 24,  83 => 14,  76 => 23,  67 => 26,  63 => 20,  60 => 19,  57 => 16,  54 => 24,  51 => 29,  48 => 14,  45 => 8,  42 => 5,  39 => 9,  36 => 5,  33 => 7,);
    }
}
