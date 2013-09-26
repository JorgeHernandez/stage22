<?php

/* ::layout.html.twig */
class __TwigTemplate_662c2d94c920950cf621c2d4790e92986226cd7a11f781f0a0586ab10d5fb398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'content_wrapper' => array($this, 'block_content_wrapper'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"/favicon.ico\" />
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>

    <body>
        <!--header-->
        <div id=\"header\">
            ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "        </div>
        <!--/header-->

        ";
        // line 32
        $this->displayBlock('content_wrapper', $context, $blocks);
        // line 68
        echo "
        <!--footer-->
        <div id=\"footer\">
            <div class=\"contacts\">
                <span>
                    ";
        // line 73
        echo $this->env->getExtension('translator')->getTranslator()->trans("Позвонить", array(), "messages");
        echo ":
                    <strong>
                        +380 97 874-03-42
                    </strong>

                    ";
        // line 78
        echo $this->env->getExtension('translator')->getTranslator()->trans("Написать", array(), "messages");
        echo ":
                    <a href=\"mailto:info@stfalcon.com\">info@stfalcon.com</a>
                </span>

                <span>
                    ";
        // line 83
        echo $this->env->getExtension('translator')->getTranslator()->trans("Адрес", array(), "messages");
        echo ":
                    <br />
                    ";
        // line 85
        echo $this->env->getExtension('translator')->getTranslator()->trans("ул. Камeнецкая", array(), "messages");
        echo " 38,
                    ";
        // line 86
        echo $this->env->getExtension('translator')->getTranslator()->trans("Хмельницкий", array(), "messages");
        echo ",
                    ";
        // line 87
        echo $this->env->getExtension('translator')->getTranslator()->trans("Украина", array(), "messages");
        // line 88
        echo "                </span>
            </div>

            <div class=\"copyright\">
                &copy; 2009–";
        // line 92
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Веб-студия", array(), "messages");
        echo " stfalcon.com
                <br />
                <br />
                ";
        // line 95
        echo $this->env->getExtension('translator')->getTranslator()->trans("Сайт работает на", array(), "messages");
        // line 96
        echo "                <a href=\"http://symfony.com\" rel=\"nofollow\">
                    <img weidth=\"120\" height=\"30\" style=\"vertical-align: middle; padding-left: 5px;\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/footer/symfony-logo.png"), "html", null, true);
        echo "\" alt=\"Symfony2\" title=\"Symfony2\" />
                </a>
            </div>
        </div>
        <!--/footer-->

        ";
        // line 103
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "
        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-5635962-2']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Веб-студия", array(), "messages");
        echo " stfalcon.com";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8a19dbf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a19dbf_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/cache/css/8a19dbf_style_1.css");
            // line 10
            echo "                <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "8a19dbf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a19dbf") : $this->env->getExtension('assets')->getAssetUrl("_controller/cache/css/8a19dbf.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "        ";
    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        // line 19
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">
                    <h1 class=\"logo\">
                        ";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("Веб-студия", array(), "messages");
        echo " stfalcon.com
                    </h1>
                </a>

                <div class=\"menu\">
                    ";
        // line 26
        echo $this->env->getExtension('knp_menu')->render("main", array("currentAsLink" => false));
        echo "
                </div>
            ";
    }

    // line 32
    public function block_content_wrapper($context, array $blocks = array())
    {
        // line 33
        echo "            <!--content-->
            <div id=\"main\">
                <div class=\"breadcrumbs\">
                    ";
        // line 36
        echo $this->env->getExtension('knp_menu')->render("breadcrumbs", array("currentAsLink" => false));
        echo "
                </div>

                <div id=\"content\">
                    <div class=\"content-wrapper\">
                        ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "                    </div>
                </div>

                <!--sidebar-->
                <div id=\"sidebar\">
                    ";
        // line 47
        $this->displayBlock('sidebar', $context, $blocks);
        // line 62
        echo "                </div>
                <!--sidebar-->

            </div>
            <!--/content-->
        ";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
    }

    // line 47
    public function block_sidebar($context, array $blocks = array())
    {
        // line 48
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_rss"), "html", null, true);
        echo "\" class=\"rss\">
                            ";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("Подписаться на RSS ленту", array(), "messages");
        // line 50
        echo "                        </a>

                        <!--twitter block-->
                        <div class=\"twitter\">
                            ";
        // line 55
        echo "                            <p>
                                ";
        // line 56
        echo $this->env->getExtension('translator')->getTranslator()->trans("Следить за", array(), "messages");
        echo " <a href=\"http://twitter.com/#!/stfalcon\" rel=\"nofollow\">@stfalcon</a>
                            </p>
                            <div class=\"twitter-top\"></div>
                        </div>
                        <!--/twitter block-->
                    ";
    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 36,  201 => 32,  309 => 141,  259 => 121,  251 => 116,  137 => 59,  688 => 405,  678 => 402,  673 => 400,  668 => 398,  664 => 396,  653 => 388,  647 => 385,  637 => 381,  602 => 358,  595 => 354,  591 => 352,  571 => 338,  564 => 334,  545 => 320,  540 => 318,  500 => 300,  495 => 298,  480 => 288,  457 => 269,  449 => 266,  436 => 258,  434 => 257,  419 => 248,  413 => 245,  388 => 226,  302 => 174,  216 => 126,  182 => 107,  399 => 157,  397 => 156,  362 => 140,  311 => 118,  276 => 159,  273 => 100,  270 => 98,  240 => 85,  237 => 41,  235 => 136,  224 => 78,  221 => 77,  205 => 73,  170 => 60,  197 => 87,  189 => 82,  690 => 409,  682 => 219,  675 => 215,  669 => 212,  665 => 210,  663 => 209,  652 => 205,  649 => 204,  641 => 201,  638 => 200,  632 => 198,  630 => 197,  627 => 374,  621 => 194,  619 => 369,  616 => 192,  613 => 191,  603 => 145,  594 => 142,  589 => 349,  584 => 140,  573 => 137,  563 => 126,  560 => 125,  554 => 124,  549 => 121,  543 => 120,  535 => 118,  532 => 315,  528 => 314,  523 => 312,  520 => 113,  518 => 310,  515 => 111,  508 => 110,  505 => 109,  491 => 106,  488 => 293,  485 => 104,  470 => 281,  467 => 104,  465 => 103,  461 => 101,  451 => 96,  424 => 56,  420 => 55,  415 => 53,  402 => 158,  386 => 150,  369 => 142,  359 => 32,  348 => 135,  328 => 125,  326 => 191,  319 => 189,  303 => 139,  278 => 170,  258 => 55,  247 => 162,  233 => 106,  228 => 62,  198 => 150,  704 => 418,  698 => 210,  695 => 412,  693 => 208,  687 => 224,  677 => 204,  672 => 202,  660 => 208,  657 => 389,  654 => 206,  646 => 193,  643 => 384,  626 => 190,  609 => 362,  604 => 187,  599 => 186,  596 => 185,  593 => 184,  587 => 348,  583 => 178,  581 => 345,  576 => 138,  559 => 174,  542 => 173,  538 => 172,  530 => 170,  527 => 169,  524 => 168,  521 => 167,  519 => 166,  507 => 160,  501 => 157,  498 => 156,  496 => 107,  493 => 154,  489 => 134,  474 => 129,  471 => 128,  458 => 100,  453 => 268,  444 => 141,  442 => 140,  437 => 93,  423 => 135,  421 => 128,  407 => 124,  398 => 120,  392 => 44,  380 => 147,  374 => 144,  361 => 106,  352 => 103,  350 => 102,  345 => 133,  342 => 22,  339 => 189,  329 => 93,  327 => 92,  322 => 190,  314 => 89,  310 => 185,  300 => 84,  294 => 177,  292 => 109,  289 => 133,  277 => 129,  275 => 169,  272 => 168,  266 => 125,  253 => 67,  246 => 65,  241 => 139,  239 => 109,  236 => 62,  231 => 157,  203 => 55,  194 => 26,  149 => 34,  347 => 97,  341 => 94,  338 => 129,  324 => 124,  298 => 88,  291 => 85,  285 => 79,  262 => 70,  230 => 134,  218 => 54,  193 => 50,  187 => 47,  121 => 28,  567 => 127,  556 => 329,  552 => 327,  544 => 172,  539 => 170,  533 => 171,  531 => 167,  525 => 163,  516 => 165,  512 => 159,  506 => 303,  503 => 158,  499 => 108,  494 => 154,  487 => 152,  479 => 103,  476 => 149,  473 => 128,  469 => 134,  466 => 280,  462 => 132,  459 => 275,  452 => 123,  448 => 122,  445 => 95,  429 => 255,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  406 => 50,  394 => 83,  391 => 82,  385 => 94,  381 => 92,  379 => 40,  376 => 81,  366 => 210,  360 => 139,  356 => 124,  354 => 30,  351 => 198,  332 => 126,  306 => 140,  295 => 135,  287 => 167,  284 => 172,  279 => 102,  248 => 88,  245 => 48,  242 => 47,  225 => 155,  222 => 101,  213 => 60,  207 => 154,  204 => 33,  200 => 90,  173 => 12,  373 => 37,  370 => 99,  364 => 107,  355 => 138,  349 => 92,  346 => 117,  343 => 95,  335 => 188,  333 => 224,  330 => 186,  323 => 115,  318 => 90,  316 => 178,  313 => 186,  307 => 79,  305 => 78,  299 => 112,  296 => 75,  290 => 108,  283 => 131,  280 => 78,  274 => 76,  268 => 126,  265 => 63,  263 => 124,  260 => 61,  257 => 149,  252 => 50,  226 => 47,  219 => 42,  195 => 88,  191 => 68,  188 => 86,  183 => 132,  177 => 18,  12 => 34,  132 => 57,  116 => 46,  113 => 51,  26 => 18,  93 => 34,  84 => 62,  66 => 24,  61 => 23,  184 => 80,  178 => 77,  168 => 77,  162 => 70,  156 => 72,  107 => 49,  163 => 76,  155 => 92,  151 => 7,  140 => 59,  105 => 39,  100 => 63,  80 => 27,  23 => 11,  56 => 32,  181 => 45,  175 => 99,  164 => 71,  153 => 65,  130 => 76,  127 => 23,  79 => 20,  37 => 16,  103 => 22,  68 => 30,  62 => 28,  483 => 132,  477 => 130,  472 => 158,  464 => 149,  460 => 153,  456 => 146,  447 => 142,  443 => 263,  440 => 94,  438 => 262,  433 => 144,  430 => 57,  426 => 136,  416 => 134,  412 => 127,  410 => 51,  405 => 130,  401 => 236,  396 => 46,  390 => 152,  387 => 116,  384 => 120,  382 => 41,  377 => 114,  371 => 212,  368 => 135,  365 => 141,  363 => 33,  358 => 105,  344 => 105,  340 => 103,  325 => 184,  317 => 99,  315 => 143,  312 => 97,  308 => 175,  301 => 113,  297 => 111,  288 => 84,  286 => 106,  281 => 79,  271 => 103,  267 => 72,  261 => 56,  255 => 68,  250 => 49,  244 => 31,  238 => 74,  232 => 73,  227 => 103,  223 => 56,  217 => 41,  211 => 124,  180 => 19,  172 => 74,  146 => 78,  143 => 28,  135 => 59,  131 => 58,  122 => 42,  110 => 95,  74 => 55,  41 => 17,  158 => 55,  138 => 81,  129 => 34,  117 => 23,  87 => 39,  73 => 78,  70 => 32,  64 => 25,  199 => 71,  186 => 21,  174 => 102,  169 => 100,  166 => 91,  161 => 75,  159 => 10,  154 => 8,  145 => 50,  141 => 61,  139 => 60,  124 => 103,  120 => 51,  108 => 47,  94 => 87,  65 => 73,  52 => 21,  96 => 88,  91 => 60,  81 => 83,  90 => 86,  49 => 18,  47 => 19,  24 => 12,  31 => 14,  97 => 21,  92 => 40,  88 => 30,  78 => 39,  71 => 31,  59 => 40,  30 => 3,  34 => 15,  29 => 1,  28 => 12,  27 => 13,  22 => 11,  82 => 14,  75 => 37,  72 => 24,  50 => 19,  43 => 18,  40 => 7,  25 => 12,  249 => 54,  160 => 41,  148 => 56,  142 => 60,  134 => 25,  126 => 104,  123 => 56,  118 => 50,  114 => 30,  111 => 48,  104 => 22,  101 => 47,  99 => 71,  86 => 85,  77 => 34,  69 => 25,  58 => 68,  55 => 21,  53 => 20,  46 => 20,  44 => 18,  38 => 16,  35 => 5,  32 => 15,  212 => 96,  206 => 93,  202 => 152,  196 => 70,  192 => 147,  190 => 87,  185 => 85,  179 => 82,  176 => 62,  171 => 51,  167 => 72,  165 => 71,  157 => 67,  152 => 80,  150 => 69,  147 => 68,  144 => 5,  136 => 74,  133 => 46,  128 => 44,  125 => 43,  119 => 72,  115 => 97,  112 => 96,  109 => 40,  106 => 46,  102 => 92,  98 => 43,  95 => 45,  89 => 43,  85 => 10,  83 => 41,  76 => 19,  67 => 26,  63 => 22,  60 => 22,  57 => 25,  54 => 24,  51 => 29,  48 => 19,  45 => 18,  42 => 13,  39 => 17,  36 => 15,  33 => 15,);
    }
}
