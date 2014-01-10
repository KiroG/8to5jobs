<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_9451252e2fd88d054e8e31e6e0327c8adb89e86ebed88116c7b3d71abc503707 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        ";
        // line 27
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment") == "dev")) {
            // line 28
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_configurator_home");
            echo "\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 140,  303 => 139,  292 => 134,  401 => 156,  390 => 150,  378 => 144,  364 => 139,  359 => 138,  328 => 124,  290 => 106,  234 => 80,  198 => 69,  161 => 70,  318 => 144,  316 => 121,  284 => 106,  279 => 104,  256 => 120,  237 => 86,  690 => 410,  676 => 401,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  595 => 354,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  550 => 326,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  481 => 290,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  422 => 250,  420 => 249,  396 => 234,  383 => 224,  366 => 140,  331 => 187,  267 => 94,  242 => 112,  351 => 135,  323 => 125,  301 => 111,  299 => 112,  281 => 105,  251 => 101,  248 => 115,  239 => 83,  213 => 126,  202 => 77,  165 => 76,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 397,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 373,  621 => 200,  615 => 198,  597 => 197,  594 => 196,  588 => 350,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 337,  558 => 169,  552 => 167,  546 => 165,  540 => 162,  527 => 159,  522 => 156,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  454 => 136,  447 => 135,  438 => 133,  424 => 254,  418 => 128,  412 => 174,  406 => 158,  391 => 125,  373 => 142,  348 => 80,  338 => 130,  335 => 188,  317 => 70,  308 => 67,  276 => 57,  231 => 33,  210 => 75,  194 => 86,  190 => 179,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 404,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 366,  608 => 187,  605 => 361,  602 => 185,  596 => 181,  592 => 195,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  533 => 160,  528 => 167,  525 => 166,  516 => 155,  512 => 159,  510 => 158,  507 => 157,  505 => 152,  502 => 155,  498 => 134,  486 => 292,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  456 => 273,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 157,  400 => 129,  394 => 152,  371 => 113,  358 => 139,  349 => 133,  342 => 129,  339 => 100,  336 => 126,  329 => 75,  326 => 185,  321 => 123,  319 => 124,  311 => 89,  297 => 84,  289 => 112,  286 => 132,  274 => 128,  263 => 124,  250 => 93,  233 => 62,  228 => 78,  191 => 69,  178 => 123,  175 => 76,  146 => 49,  114 => 71,  572 => 180,  561 => 178,  557 => 330,  549 => 166,  544 => 172,  538 => 319,  536 => 161,  530 => 168,  521 => 162,  517 => 161,  511 => 160,  508 => 153,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  477 => 150,  470 => 135,  467 => 148,  463 => 140,  460 => 139,  449 => 123,  446 => 139,  441 => 105,  426 => 102,  419 => 98,  415 => 247,  410 => 165,  395 => 84,  392 => 83,  388 => 117,  386 => 123,  382 => 93,  380 => 83,  377 => 115,  369 => 141,  357 => 125,  347 => 134,  333 => 117,  324 => 92,  307 => 87,  300 => 138,  291 => 169,  288 => 107,  282 => 79,  275 => 103,  272 => 158,  226 => 67,  370 => 100,  367 => 131,  361 => 208,  352 => 135,  346 => 196,  343 => 132,  340 => 90,  332 => 125,  330 => 87,  327 => 126,  320 => 84,  315 => 118,  313 => 82,  310 => 81,  304 => 174,  302 => 114,  296 => 109,  293 => 109,  287 => 72,  280 => 130,  277 => 100,  271 => 108,  265 => 125,  262 => 105,  260 => 123,  257 => 149,  223 => 58,  192 => 87,  185 => 85,  180 => 62,  174 => 60,  137 => 46,  12 => 34,  150 => 64,  20 => 11,  129 => 56,  153 => 71,  110 => 22,  65 => 29,  34 => 16,  170 => 78,  134 => 58,  127 => 60,  100 => 36,  90 => 32,  76 => 28,  53 => 11,  270 => 110,  266 => 52,  261 => 91,  253 => 95,  249 => 70,  244 => 85,  236 => 108,  232 => 84,  216 => 99,  211 => 81,  195 => 68,  188 => 178,  184 => 63,  172 => 52,  152 => 92,  84 => 29,  58 => 17,  155 => 53,  118 => 28,  81 => 25,  70 => 33,  113 => 41,  225 => 77,  222 => 81,  218 => 14,  215 => 74,  205 => 59,  200 => 70,  197 => 89,  186 => 81,  181 => 79,  160 => 75,  126 => 42,  97 => 41,  23 => 18,  148 => 63,  124 => 31,  104 => 49,  77 => 27,  480 => 128,  474 => 285,  469 => 141,  461 => 155,  457 => 138,  453 => 142,  444 => 134,  440 => 148,  437 => 147,  435 => 258,  430 => 131,  427 => 130,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 128,  393 => 126,  387 => 122,  384 => 147,  381 => 120,  379 => 119,  374 => 114,  368 => 117,  365 => 141,  362 => 110,  360 => 109,  355 => 136,  341 => 131,  337 => 103,  322 => 72,  314 => 99,  312 => 142,  309 => 117,  305 => 115,  298 => 173,  294 => 61,  285 => 111,  283 => 102,  278 => 115,  268 => 126,  264 => 72,  258 => 49,  252 => 88,  247 => 66,  241 => 84,  229 => 73,  220 => 80,  214 => 98,  177 => 61,  169 => 57,  140 => 41,  132 => 59,  128 => 58,  107 => 24,  61 => 12,  273 => 56,  269 => 100,  254 => 102,  243 => 89,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 134,  224 => 102,  221 => 75,  219 => 100,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 69,  143 => 48,  135 => 62,  119 => 28,  102 => 17,  71 => 29,  67 => 32,  63 => 19,  59 => 13,  38 => 6,  94 => 34,  89 => 39,  85 => 32,  75 => 39,  68 => 30,  56 => 11,  87 => 33,  21 => 12,  26 => 9,  93 => 34,  88 => 31,  78 => 26,  46 => 8,  27 => 13,  44 => 19,  31 => 3,  28 => 3,  201 => 72,  196 => 90,  183 => 125,  171 => 63,  166 => 100,  163 => 49,  158 => 79,  156 => 67,  151 => 45,  142 => 60,  138 => 61,  136 => 60,  121 => 52,  117 => 19,  105 => 18,  91 => 34,  62 => 29,  49 => 13,  24 => 13,  25 => 35,  19 => 11,  79 => 31,  72 => 37,  69 => 24,  47 => 8,  40 => 6,  37 => 5,  22 => 12,  246 => 86,  157 => 41,  145 => 52,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 49,  111 => 40,  108 => 19,  101 => 43,  98 => 47,  96 => 40,  83 => 86,  74 => 27,  66 => 25,  55 => 21,  52 => 14,  50 => 20,  43 => 11,  41 => 10,  35 => 5,  32 => 16,  29 => 3,  209 => 95,  203 => 92,  199 => 67,  193 => 73,  189 => 64,  187 => 86,  182 => 84,  176 => 81,  173 => 116,  168 => 60,  164 => 71,  162 => 70,  154 => 66,  149 => 50,  147 => 68,  144 => 67,  141 => 66,  133 => 49,  130 => 56,  125 => 45,  122 => 44,  116 => 45,  112 => 52,  109 => 40,  106 => 45,  103 => 45,  99 => 26,  95 => 42,  92 => 45,  86 => 43,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 25,  51 => 24,  48 => 9,  45 => 8,  42 => 7,  39 => 17,  36 => 5,  33 => 4,  30 => 3,);
    }
}
