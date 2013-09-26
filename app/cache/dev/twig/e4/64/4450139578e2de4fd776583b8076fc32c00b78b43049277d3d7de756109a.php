<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_e4644450139578e2de4fd776583b8076fc32c00b78b43049277d3d7de756109a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 5
            echo "        <style type=\"text/css\">
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => $this->getContext($context, "token"))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => $this->getContext($context, "token"))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  822 => 475,  819 => 474,  808 => 472,  804 => 471,  800 => 469,  787 => 468,  761 => 463,  758 => 462,  739 => 460,  722 => 459,  718 => 457,  714 => 456,  710 => 455,  706 => 454,  702 => 453,  694 => 451,  691 => 450,  689 => 449,  661 => 447,  634 => 438,  618 => 436,  546 => 397,  541 => 395,  536 => 393,  208 => 78,  337 => 114,  334 => 113,  331 => 112,  293 => 100,  357 => 151,  320 => 135,  282 => 115,  264 => 105,  254 => 101,  234 => 81,  215 => 79,  209 => 77,  201 => 86,  309 => 141,  259 => 109,  251 => 116,  137 => 59,  688 => 405,  678 => 402,  673 => 400,  668 => 398,  664 => 396,  653 => 388,  647 => 385,  637 => 439,  602 => 358,  595 => 354,  591 => 352,  571 => 338,  564 => 334,  545 => 320,  540 => 318,  500 => 300,  495 => 298,  480 => 288,  457 => 269,  449 => 266,  436 => 258,  434 => 257,  419 => 248,  413 => 245,  388 => 160,  302 => 137,  216 => 82,  182 => 68,  399 => 157,  397 => 156,  362 => 153,  311 => 130,  276 => 159,  273 => 95,  270 => 98,  240 => 93,  237 => 41,  235 => 93,  224 => 86,  221 => 85,  205 => 73,  170 => 63,  197 => 75,  189 => 82,  690 => 409,  682 => 219,  675 => 215,  669 => 212,  665 => 210,  663 => 209,  652 => 205,  649 => 204,  641 => 440,  638 => 200,  632 => 437,  630 => 197,  627 => 374,  621 => 194,  619 => 369,  616 => 192,  613 => 191,  603 => 145,  594 => 142,  589 => 349,  584 => 140,  573 => 137,  563 => 398,  560 => 125,  554 => 124,  549 => 121,  543 => 396,  535 => 118,  532 => 315,  528 => 314,  523 => 312,  520 => 113,  518 => 310,  515 => 111,  508 => 110,  505 => 109,  491 => 106,  488 => 293,  485 => 104,  470 => 281,  467 => 104,  465 => 103,  461 => 101,  451 => 96,  424 => 56,  420 => 55,  415 => 53,  402 => 158,  386 => 150,  369 => 142,  359 => 32,  348 => 135,  328 => 111,  326 => 191,  319 => 108,  303 => 139,  278 => 170,  258 => 103,  247 => 97,  233 => 106,  228 => 87,  198 => 150,  704 => 418,  698 => 452,  695 => 412,  693 => 208,  687 => 224,  677 => 204,  672 => 448,  660 => 208,  657 => 389,  654 => 206,  646 => 442,  643 => 384,  626 => 190,  609 => 362,  604 => 187,  599 => 186,  596 => 185,  593 => 184,  587 => 348,  583 => 178,  581 => 401,  576 => 138,  559 => 174,  542 => 173,  538 => 172,  530 => 170,  527 => 169,  524 => 168,  521 => 167,  519 => 166,  507 => 160,  501 => 157,  498 => 156,  496 => 107,  493 => 154,  489 => 134,  474 => 129,  471 => 128,  458 => 100,  453 => 268,  444 => 141,  442 => 140,  437 => 93,  423 => 135,  421 => 128,  407 => 124,  398 => 120,  392 => 44,  380 => 147,  374 => 144,  361 => 106,  352 => 149,  350 => 163,  345 => 133,  342 => 161,  339 => 145,  329 => 93,  327 => 139,  322 => 109,  314 => 131,  310 => 105,  300 => 277,  294 => 177,  292 => 120,  289 => 119,  277 => 129,  275 => 138,  272 => 168,  266 => 113,  253 => 92,  246 => 65,  241 => 83,  239 => 109,  236 => 62,  231 => 88,  203 => 55,  194 => 84,  149 => 61,  347 => 162,  341 => 94,  338 => 129,  324 => 124,  298 => 101,  291 => 85,  285 => 79,  262 => 70,  230 => 95,  218 => 54,  193 => 68,  187 => 66,  121 => 26,  567 => 127,  556 => 329,  552 => 327,  544 => 172,  539 => 170,  533 => 171,  531 => 391,  525 => 163,  516 => 165,  512 => 159,  506 => 303,  503 => 158,  499 => 108,  494 => 154,  487 => 152,  479 => 103,  476 => 149,  473 => 128,  469 => 134,  466 => 280,  462 => 132,  459 => 275,  452 => 123,  448 => 122,  445 => 95,  429 => 255,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  406 => 50,  394 => 83,  391 => 82,  385 => 159,  381 => 92,  379 => 158,  376 => 81,  366 => 155,  360 => 152,  356 => 124,  354 => 164,  351 => 118,  332 => 154,  306 => 128,  295 => 133,  287 => 118,  284 => 97,  279 => 102,  248 => 88,  245 => 101,  242 => 47,  225 => 155,  222 => 78,  213 => 89,  207 => 88,  204 => 87,  200 => 76,  173 => 75,  373 => 37,  370 => 156,  364 => 107,  355 => 138,  349 => 321,  346 => 320,  343 => 95,  335 => 188,  333 => 141,  330 => 153,  323 => 149,  318 => 90,  316 => 145,  313 => 106,  307 => 104,  305 => 78,  299 => 112,  296 => 75,  290 => 108,  283 => 131,  280 => 114,  274 => 76,  268 => 94,  265 => 93,  263 => 124,  260 => 61,  257 => 149,  252 => 105,  226 => 86,  219 => 92,  195 => 74,  191 => 68,  188 => 66,  183 => 63,  177 => 59,  12 => 34,  132 => 51,  116 => 42,  113 => 41,  26 => 3,  93 => 34,  84 => 25,  66 => 18,  61 => 18,  184 => 80,  178 => 77,  168 => 60,  162 => 71,  156 => 72,  107 => 36,  163 => 60,  155 => 52,  151 => 46,  140 => 45,  105 => 37,  100 => 23,  80 => 28,  23 => 1,  56 => 5,  181 => 64,  175 => 64,  164 => 58,  153 => 51,  130 => 50,  127 => 39,  79 => 25,  37 => 5,  103 => 35,  68 => 14,  62 => 12,  483 => 132,  477 => 130,  472 => 158,  464 => 149,  460 => 153,  456 => 146,  447 => 142,  443 => 263,  440 => 94,  438 => 262,  433 => 144,  430 => 57,  426 => 136,  416 => 134,  412 => 127,  410 => 51,  405 => 130,  401 => 236,  396 => 46,  390 => 152,  387 => 116,  384 => 120,  382 => 41,  377 => 157,  371 => 212,  368 => 135,  365 => 141,  363 => 167,  358 => 105,  344 => 147,  340 => 160,  325 => 110,  317 => 99,  315 => 143,  312 => 97,  308 => 129,  301 => 102,  297 => 111,  288 => 129,  286 => 106,  281 => 125,  271 => 103,  267 => 72,  261 => 56,  255 => 68,  250 => 49,  244 => 31,  238 => 74,  232 => 92,  227 => 94,  223 => 56,  217 => 41,  211 => 124,  180 => 19,  172 => 74,  146 => 48,  143 => 54,  135 => 52,  131 => 58,  122 => 36,  110 => 40,  74 => 23,  41 => 7,  158 => 56,  138 => 49,  129 => 47,  117 => 44,  87 => 27,  73 => 21,  70 => 20,  64 => 17,  199 => 71,  186 => 81,  174 => 58,  169 => 56,  166 => 62,  161 => 57,  159 => 10,  154 => 47,  145 => 51,  141 => 50,  139 => 60,  124 => 45,  120 => 43,  108 => 30,  94 => 33,  65 => 13,  52 => 12,  96 => 31,  91 => 32,  81 => 24,  90 => 32,  49 => 13,  47 => 10,  24 => 2,  31 => 3,  97 => 38,  92 => 29,  88 => 27,  78 => 23,  71 => 15,  59 => 11,  30 => 7,  34 => 4,  29 => 6,  28 => 4,  27 => 3,  22 => 1,  82 => 18,  75 => 22,  72 => 20,  50 => 11,  43 => 8,  40 => 7,  25 => 2,  249 => 54,  160 => 59,  148 => 56,  142 => 57,  134 => 51,  126 => 45,  123 => 44,  118 => 43,  114 => 40,  111 => 31,  104 => 22,  101 => 34,  99 => 33,  86 => 27,  77 => 30,  69 => 19,  58 => 13,  55 => 12,  53 => 18,  46 => 11,  44 => 6,  38 => 5,  35 => 6,  32 => 5,  212 => 77,  206 => 93,  202 => 76,  196 => 85,  192 => 73,  190 => 67,  185 => 85,  179 => 77,  176 => 62,  171 => 74,  167 => 73,  165 => 54,  157 => 67,  152 => 80,  150 => 53,  147 => 68,  144 => 5,  136 => 74,  133 => 39,  128 => 50,  125 => 43,  119 => 35,  115 => 97,  112 => 47,  109 => 39,  106 => 25,  102 => 34,  98 => 25,  95 => 24,  89 => 28,  85 => 28,  83 => 27,  76 => 24,  67 => 19,  63 => 16,  60 => 16,  57 => 13,  54 => 3,  51 => 11,  48 => 9,  45 => 8,  42 => 6,  39 => 5,  36 => 4,  33 => 3,);
    }
}
