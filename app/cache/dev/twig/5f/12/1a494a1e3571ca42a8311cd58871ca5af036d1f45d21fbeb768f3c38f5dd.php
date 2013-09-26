<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_5f121a494a1e3571ca42a8311cd58871ca5af036d1f45d21fbeb768f3c38f5dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );

        $this->macros = array(
            "display_listener" => array(
                'method' => "getDisplay_listener",
                'arguments' => array(
                    "listener" => null,
                ),
            ),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_404a4c4dc5531addd6f8d1fc25f57c377301642b93f8f8f1c53d980d0ecf0c54"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAiCAQAAADragGFAAAD60lEQVR42o2UfUxbVRjGb7fy4ah2QwdECSgjEpcYUP8hmtiWljbt+Gih62zGVqBjXkqgVcYQKzNLJF1HBxt0S9YMgqHVLt1oZRqidcpcgQ1dMpkxgyVK2NSYyWTAJoPB4/1g0iLQnZub+348v3vOPe95L/FogFO+pbBMbtPmgEsEDXC1OXJbYVn5FnBoPwg4wVfVCc7J3WRToxoxIbmYRjXZJHcLzqnqTvAZkEUsSfI2iddxCHtR8LkIvBCIR0UKsNdxSOKVt1mSwGGQ87GKNk3ncO1ARdFxkU/qxMYQaKPUKfIVHR+oGK7VdCrazsdSGKJKqsW+oRqnMcu7s91Td02FuBAo7prKU7ezPcvrNA7ViH0l1Ygi/Kmiz+y2H3Tirvqj0PvLqk09ieAsfW1PYrXJXwZ9/VFx11Vda2OW159KmEvFvkkdadvunN19oEbYrXSczMD6/6D1JzOUDmH3gZrZ3dudpG1SJ/aZSwnSuqsDebIz9oZBtbC7/SDykATu0oZTXl77QWH3oNreIDuD3F0dpJXoU3sMU9nG5ku6lop8N9RIAw9ccqvGoDGQWymIR0XUqk+PVF0qNjZPZXsMfWoCKUijrky8Qt0KyuIiWtMqnBdAAOG8phXRVORFKvM6rWC0KQQiqfAG8PEUnkY8ZUVW7hdg6arcTyk2UJlnKAWfsqIRSSwfSFDeDIaUN5FAhBtIlz4IhqQPkB4eytROBEPaCWQ+xkyu3mDI1fs4Mz33dUsw9KUdieGhzVXf0GIF8hmoPIC4sNBEmuweLbbca56kn9kzI+ngrIkgosHMLqu/90c/a31oQVSYxemu0ELNDCph0E0z+3cd8WshnMAb4jlaqP/rjuwPWelt2hYtfCHFutWhJ95vXTw8v6l/yh3dNyphPJMLMatDz6rHaJHhnwsXJQ+33R/z1d6l/dxxJK+GrHMVsvOUTOdNX+ztvKycaLnORo6Vg7sy9GRVFyspnhp2wIDKs+6cGTay5wI2rQj9nbpt8dTtuzVM4gW89JVlB7V/a1QLEUeMrEBDNaDkfvHht07TrVi/eObrrStUC7H6AJ0smH848MnPWUzn5swM9qNHzyxRO4KE/1XoRoZklk5aRy/bdX8KIJ8XLwhQ+ut3H526ylbLk7OsWogy29hlkL+LKPEHd25f+WXIdJf+T7xzQ8RkjG7wljW5duRRM+yYDvThMIpQjGP+79mtWKzW8yEV8snp9wsgWzh1a64De/Ay+NiEV0HOdXw8plhgsaaKoGohxuSigxKM9cOMN7GZTSIC8ZT33vi3BczG6AOIXYKS85mj+e443kYKokO/FsnQWUeZl84OvUZX618UFpIDvqMM6gAAAABJRU5ErkJggg==\" alt=\"Events\" /></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 32
            echo "            <tr>
                <td><code>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 34
            echo $this->callMacro($context["__internal_404a4c4dc5531addd6f8d1fc25f57c377301642b93f8f8f1c53d980d0ecf0c54"], "display_listener", array(0 => $this->getContext($context, "listener")));
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>

    ";
        // line 39
        if ($this->getAttribute($this->getContext($context, "collector"), "notcalledlisteners")) {
            // line 40
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            ";
            // line 47
            $context["listeners"] = $this->getAttribute($this->getContext($context, "collector"), "notcalledlisteners");
            // line 48
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getContext($context, "listeners"))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 49
                echo "                <tr>
                    <td><code>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeners"), $this->getContext($context, "listener"), array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 51
                echo $this->callMacro($context["__internal_404a4c4dc5531addd6f8d1fc25f57c377301642b93f8f8f1c53d980d0ecf0c54"], "display_listener", array(0 => $this->getAttribute($this->getContext($context, "listeners"), $this->getContext($context, "listener"), array(), "array")));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </table>
    ";
        }
    }

    // line 58
    public function getDisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 59
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "listener"), "type") == "Closure")) {
                // line 60
                echo "        Closure
    ";
            } elseif (($this->getAttribute($this->getContext($context, "listener"), "type") == "Function")) {
                // line 62
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getContext($context, "listener"), "file"), $this->getAttribute($this->getContext($context, "listener"), "line"));
                // line 63
                echo "        ";
                if ($this->getContext($context, "link")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "link"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "function"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "function"), "html", null, true);
                }
                // line 64
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "listener"), "type") == "Method")) {
                // line 65
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getContext($context, "listener"), "file"), $this->getAttribute($this->getContext($context, "listener"), "line"));
                // line 66
                echo "        ";
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "listener"), "class"));
                echo "::";
                if ($this->getContext($context, "link")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "link"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "method"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "method"), "html", null, true);
                }
                // line 67
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 151,  320 => 135,  282 => 115,  264 => 105,  254 => 101,  234 => 89,  215 => 79,  209 => 77,  201 => 32,  309 => 141,  259 => 121,  251 => 116,  137 => 59,  688 => 405,  678 => 402,  673 => 400,  668 => 398,  664 => 396,  653 => 388,  647 => 385,  637 => 381,  602 => 358,  595 => 354,  591 => 352,  571 => 338,  564 => 334,  545 => 320,  540 => 318,  500 => 300,  495 => 298,  480 => 288,  457 => 269,  449 => 266,  436 => 258,  434 => 257,  419 => 248,  413 => 245,  388 => 160,  302 => 278,  216 => 126,  182 => 107,  399 => 157,  397 => 156,  362 => 153,  311 => 130,  276 => 159,  273 => 110,  270 => 98,  240 => 93,  237 => 41,  235 => 136,  224 => 78,  221 => 83,  205 => 73,  170 => 63,  197 => 87,  189 => 82,  690 => 409,  682 => 219,  675 => 215,  669 => 212,  665 => 210,  663 => 209,  652 => 205,  649 => 204,  641 => 201,  638 => 200,  632 => 198,  630 => 197,  627 => 374,  621 => 194,  619 => 369,  616 => 192,  613 => 191,  603 => 145,  594 => 142,  589 => 349,  584 => 140,  573 => 137,  563 => 126,  560 => 125,  554 => 124,  549 => 121,  543 => 120,  535 => 118,  532 => 315,  528 => 314,  523 => 312,  520 => 113,  518 => 310,  515 => 111,  508 => 110,  505 => 109,  491 => 106,  488 => 293,  485 => 104,  470 => 281,  467 => 104,  465 => 103,  461 => 101,  451 => 96,  424 => 56,  420 => 55,  415 => 53,  402 => 158,  386 => 150,  369 => 142,  359 => 32,  348 => 135,  328 => 125,  326 => 191,  319 => 189,  303 => 139,  278 => 170,  258 => 103,  247 => 97,  233 => 106,  228 => 87,  198 => 150,  704 => 418,  698 => 210,  695 => 412,  693 => 208,  687 => 224,  677 => 204,  672 => 202,  660 => 208,  657 => 389,  654 => 206,  646 => 193,  643 => 384,  626 => 190,  609 => 362,  604 => 187,  599 => 186,  596 => 185,  593 => 184,  587 => 348,  583 => 178,  581 => 345,  576 => 138,  559 => 174,  542 => 173,  538 => 172,  530 => 170,  527 => 169,  524 => 168,  521 => 167,  519 => 166,  507 => 160,  501 => 157,  498 => 156,  496 => 107,  493 => 154,  489 => 134,  474 => 129,  471 => 128,  458 => 100,  453 => 268,  444 => 141,  442 => 140,  437 => 93,  423 => 135,  421 => 128,  407 => 124,  398 => 120,  392 => 44,  380 => 147,  374 => 144,  361 => 106,  352 => 149,  350 => 102,  345 => 133,  342 => 146,  339 => 145,  329 => 93,  327 => 139,  322 => 190,  314 => 131,  310 => 185,  300 => 277,  294 => 177,  292 => 120,  289 => 119,  277 => 129,  275 => 111,  272 => 168,  266 => 125,  253 => 67,  246 => 65,  241 => 139,  239 => 109,  236 => 62,  231 => 88,  203 => 55,  194 => 26,  149 => 58,  347 => 97,  341 => 94,  338 => 129,  324 => 124,  298 => 88,  291 => 85,  285 => 79,  262 => 70,  230 => 134,  218 => 54,  193 => 68,  187 => 66,  121 => 26,  567 => 127,  556 => 329,  552 => 327,  544 => 172,  539 => 170,  533 => 171,  531 => 167,  525 => 163,  516 => 165,  512 => 159,  506 => 303,  503 => 158,  499 => 108,  494 => 154,  487 => 152,  479 => 103,  476 => 149,  473 => 128,  469 => 134,  466 => 280,  462 => 132,  459 => 275,  452 => 123,  448 => 122,  445 => 95,  429 => 255,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  406 => 50,  394 => 83,  391 => 82,  385 => 159,  381 => 92,  379 => 158,  376 => 81,  366 => 155,  360 => 152,  356 => 124,  354 => 150,  351 => 322,  332 => 126,  306 => 128,  295 => 121,  287 => 118,  284 => 172,  279 => 102,  248 => 88,  245 => 96,  242 => 47,  225 => 155,  222 => 101,  213 => 60,  207 => 76,  204 => 33,  200 => 67,  173 => 12,  373 => 37,  370 => 156,  364 => 107,  355 => 138,  349 => 321,  346 => 320,  343 => 95,  335 => 188,  333 => 141,  330 => 140,  323 => 115,  318 => 90,  316 => 178,  313 => 186,  307 => 79,  305 => 78,  299 => 112,  296 => 75,  290 => 108,  283 => 131,  280 => 114,  274 => 76,  268 => 107,  265 => 63,  263 => 124,  260 => 61,  257 => 149,  252 => 100,  226 => 86,  219 => 42,  195 => 88,  191 => 68,  188 => 66,  183 => 63,  177 => 59,  12 => 34,  132 => 57,  116 => 40,  113 => 51,  26 => 3,  93 => 34,  84 => 29,  66 => 21,  61 => 18,  184 => 65,  178 => 77,  168 => 77,  162 => 53,  156 => 72,  107 => 37,  163 => 60,  155 => 92,  151 => 46,  140 => 45,  105 => 37,  100 => 23,  80 => 28,  23 => 1,  56 => 15,  181 => 64,  175 => 99,  164 => 71,  153 => 65,  130 => 50,  127 => 49,  79 => 17,  37 => 4,  103 => 24,  68 => 24,  62 => 22,  483 => 132,  477 => 130,  472 => 158,  464 => 149,  460 => 153,  456 => 146,  447 => 142,  443 => 263,  440 => 94,  438 => 262,  433 => 144,  430 => 57,  426 => 136,  416 => 134,  412 => 127,  410 => 51,  405 => 130,  401 => 236,  396 => 46,  390 => 152,  387 => 116,  384 => 120,  382 => 41,  377 => 157,  371 => 212,  368 => 135,  365 => 141,  363 => 332,  358 => 105,  344 => 147,  340 => 103,  325 => 138,  317 => 99,  315 => 143,  312 => 97,  308 => 129,  301 => 125,  297 => 111,  288 => 84,  286 => 106,  281 => 79,  271 => 103,  267 => 72,  261 => 56,  255 => 68,  250 => 49,  244 => 31,  238 => 74,  232 => 73,  227 => 103,  223 => 56,  217 => 41,  211 => 124,  180 => 19,  172 => 74,  146 => 43,  143 => 54,  135 => 27,  131 => 58,  122 => 48,  110 => 27,  74 => 23,  41 => 5,  158 => 55,  138 => 81,  129 => 34,  117 => 44,  87 => 27,  73 => 23,  70 => 14,  64 => 16,  199 => 71,  186 => 21,  174 => 58,  169 => 56,  166 => 91,  161 => 75,  159 => 10,  154 => 47,  145 => 50,  141 => 61,  139 => 60,  124 => 103,  120 => 47,  108 => 47,  94 => 37,  65 => 24,  52 => 12,  96 => 34,  91 => 20,  81 => 18,  90 => 32,  49 => 13,  47 => 11,  24 => 2,  31 => 3,  97 => 38,  92 => 33,  88 => 23,  78 => 24,  71 => 12,  59 => 14,  30 => 7,  34 => 8,  29 => 6,  28 => 4,  27 => 3,  22 => 1,  82 => 18,  75 => 11,  72 => 28,  50 => 8,  43 => 8,  40 => 7,  25 => 2,  249 => 54,  160 => 59,  148 => 56,  142 => 60,  134 => 51,  126 => 35,  123 => 47,  118 => 50,  114 => 30,  111 => 40,  104 => 22,  101 => 34,  99 => 39,  86 => 31,  77 => 30,  69 => 25,  58 => 14,  55 => 13,  53 => 18,  46 => 11,  44 => 6,  38 => 6,  35 => 6,  32 => 5,  212 => 78,  206 => 93,  202 => 73,  196 => 69,  192 => 147,  190 => 67,  185 => 85,  179 => 82,  176 => 62,  171 => 57,  167 => 62,  165 => 54,  157 => 67,  152 => 80,  150 => 69,  147 => 68,  144 => 5,  136 => 74,  133 => 39,  128 => 50,  125 => 43,  119 => 31,  115 => 97,  112 => 47,  109 => 39,  106 => 25,  102 => 43,  98 => 34,  95 => 21,  89 => 32,  85 => 31,  83 => 14,  76 => 24,  67 => 21,  63 => 20,  60 => 20,  57 => 19,  54 => 37,  51 => 16,  48 => 14,  45 => 7,  42 => 6,  39 => 5,  36 => 3,  33 => 3,);
    }
}
