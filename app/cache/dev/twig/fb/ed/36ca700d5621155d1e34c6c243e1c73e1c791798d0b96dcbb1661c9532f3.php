<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_fbed36ca700d5621155d1e34c6c243e1c73e1c791798d0b96dcbb1661c9532f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
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
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
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
        return array (  350 => 327,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  677 => 465,  649 => 462,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  532 => 410,  529 => 409,  389 => 160,  345 => 147,  334 => 141,  259 => 103,  363 => 153,  344 => 119,  255 => 101,  212 => 78,  672 => 345,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  626 => 325,  622 => 452,  609 => 319,  606 => 449,  593 => 310,  591 => 309,  569 => 300,  563 => 298,  559 => 296,  548 => 292,  545 => 291,  541 => 290,  519 => 278,  515 => 276,  497 => 267,  489 => 262,  479 => 256,  471 => 253,  459 => 246,  448 => 240,  436 => 235,  397 => 213,  376 => 205,  353 => 328,  295 => 178,  431 => 189,  408 => 176,  325 => 129,  207 => 75,  306 => 286,  303 => 106,  292 => 134,  401 => 172,  390 => 150,  378 => 157,  364 => 139,  359 => 138,  328 => 139,  290 => 119,  234 => 80,  198 => 69,  161 => 63,  318 => 111,  316 => 121,  284 => 106,  279 => 104,  256 => 96,  237 => 86,  690 => 469,  676 => 401,  664 => 342,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 454,  595 => 354,  581 => 305,  577 => 303,  575 => 341,  573 => 340,  550 => 326,  531 => 283,  526 => 310,  518 => 307,  514 => 306,  509 => 272,  481 => 290,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 195,  429 => 188,  422 => 226,  420 => 249,  396 => 234,  383 => 207,  366 => 140,  331 => 140,  267 => 101,  242 => 112,  351 => 120,  323 => 128,  301 => 111,  299 => 112,  281 => 114,  251 => 101,  248 => 97,  239 => 83,  213 => 78,  202 => 94,  165 => 83,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 485,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 471,  693 => 224,  687 => 221,  684 => 220,  682 => 467,  679 => 466,  674 => 397,  668 => 344,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 327,  623 => 373,  621 => 200,  615 => 198,  597 => 197,  594 => 196,  588 => 308,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 414,  558 => 169,  552 => 293,  546 => 165,  540 => 162,  527 => 408,  522 => 406,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  454 => 244,  447 => 135,  438 => 236,  424 => 254,  418 => 224,  412 => 222,  406 => 158,  391 => 125,  373 => 156,  348 => 140,  338 => 135,  335 => 134,  317 => 185,  308 => 287,  276 => 111,  231 => 83,  210 => 77,  194 => 68,  190 => 76,  713 => 214,  707 => 211,  704 => 210,  702 => 472,  696 => 206,  686 => 468,  681 => 404,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 320,  608 => 187,  605 => 361,  602 => 317,  596 => 181,  592 => 195,  590 => 178,  585 => 307,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  533 => 284,  528 => 167,  525 => 280,  516 => 155,  512 => 159,  510 => 158,  507 => 157,  505 => 270,  502 => 155,  498 => 134,  486 => 292,  483 => 258,  473 => 254,  465 => 249,  462 => 202,  456 => 273,  451 => 141,  428 => 230,  425 => 135,  414 => 127,  403 => 157,  400 => 214,  394 => 168,  371 => 156,  358 => 151,  349 => 133,  342 => 137,  339 => 100,  336 => 126,  329 => 188,  326 => 138,  321 => 135,  319 => 124,  311 => 89,  297 => 104,  289 => 113,  286 => 112,  274 => 110,  263 => 95,  250 => 93,  233 => 87,  228 => 78,  191 => 67,  178 => 59,  175 => 58,  146 => 49,  114 => 71,  572 => 180,  561 => 178,  557 => 295,  549 => 411,  544 => 172,  538 => 319,  536 => 161,  530 => 168,  521 => 162,  517 => 404,  511 => 160,  508 => 153,  504 => 302,  499 => 268,  492 => 295,  487 => 152,  477 => 150,  470 => 135,  467 => 148,  463 => 248,  460 => 139,  449 => 198,  446 => 197,  441 => 196,  426 => 102,  419 => 98,  415 => 180,  410 => 221,  395 => 84,  392 => 83,  388 => 117,  386 => 159,  382 => 93,  380 => 158,  377 => 115,  369 => 141,  357 => 123,  347 => 191,  333 => 117,  324 => 113,  307 => 128,  300 => 105,  291 => 102,  288 => 118,  282 => 79,  275 => 105,  272 => 158,  226 => 84,  370 => 100,  367 => 339,  361 => 152,  352 => 135,  346 => 196,  343 => 146,  340 => 145,  332 => 116,  330 => 87,  327 => 114,  320 => 127,  315 => 131,  313 => 183,  310 => 81,  304 => 181,  302 => 125,  296 => 121,  293 => 120,  287 => 72,  280 => 130,  277 => 100,  271 => 108,  265 => 105,  262 => 98,  260 => 123,  257 => 149,  223 => 58,  192 => 87,  185 => 74,  180 => 62,  174 => 65,  137 => 46,  12 => 34,  150 => 55,  20 => 1,  129 => 56,  153 => 77,  110 => 22,  65 => 22,  34 => 5,  170 => 84,  134 => 39,  127 => 35,  100 => 36,  90 => 37,  76 => 28,  53 => 17,  270 => 102,  266 => 52,  261 => 91,  253 => 100,  249 => 70,  244 => 85,  236 => 108,  232 => 88,  216 => 79,  211 => 81,  195 => 68,  188 => 90,  184 => 63,  172 => 57,  152 => 46,  84 => 27,  58 => 18,  155 => 47,  118 => 49,  81 => 23,  70 => 26,  113 => 40,  225 => 77,  222 => 83,  218 => 14,  215 => 74,  205 => 108,  200 => 72,  197 => 69,  186 => 81,  181 => 65,  160 => 75,  126 => 42,  97 => 41,  23 => 18,  148 => 63,  124 => 31,  104 => 37,  77 => 25,  480 => 128,  474 => 285,  469 => 141,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 258,  430 => 131,  427 => 130,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 215,  398 => 128,  393 => 211,  387 => 164,  384 => 147,  381 => 120,  379 => 119,  374 => 114,  368 => 117,  365 => 197,  362 => 110,  360 => 109,  355 => 329,  341 => 118,  337 => 103,  322 => 72,  314 => 99,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 61,  285 => 175,  283 => 115,  278 => 98,  268 => 126,  264 => 72,  258 => 94,  252 => 88,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 98,  177 => 61,  169 => 57,  140 => 58,  132 => 59,  128 => 58,  107 => 24,  61 => 23,  273 => 174,  269 => 107,  254 => 102,  243 => 92,  240 => 86,  238 => 139,  235 => 89,  230 => 105,  227 => 86,  224 => 81,  221 => 75,  219 => 100,  217 => 79,  208 => 76,  204 => 73,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  38 => 6,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 25,  78 => 18,  46 => 14,  27 => 7,  44 => 11,  31 => 8,  28 => 6,  201 => 106,  196 => 92,  183 => 125,  171 => 63,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 60,  138 => 61,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 21,  49 => 14,  24 => 2,  25 => 35,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 49,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 30,  74 => 27,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 95,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 71,  162 => 59,  154 => 60,  149 => 50,  147 => 75,  144 => 42,  141 => 73,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 45,  99 => 23,  95 => 39,  92 => 28,  86 => 43,  82 => 19,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
