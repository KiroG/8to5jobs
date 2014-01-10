<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_c17c8ace76ee0a8be9556994365c0f9c8c188350ffa7573122b5df1981bdf9e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
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
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "id"), "html", null, true);
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
        return array (  351 => 135,  323 => 125,  301 => 117,  299 => 116,  281 => 110,  251 => 101,  248 => 100,  239 => 97,  213 => 82,  202 => 77,  165 => 64,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 215,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 201,  621 => 200,  615 => 198,  597 => 197,  594 => 196,  588 => 193,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 173,  558 => 169,  552 => 167,  546 => 165,  540 => 162,  527 => 159,  522 => 156,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  454 => 136,  447 => 135,  438 => 133,  424 => 129,  418 => 128,  412 => 174,  406 => 163,  391 => 125,  373 => 118,  348 => 80,  338 => 130,  335 => 77,  317 => 70,  308 => 67,  276 => 57,  231 => 33,  210 => 22,  194 => 181,  190 => 179,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 195,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  533 => 160,  528 => 167,  525 => 166,  516 => 155,  512 => 159,  510 => 158,  507 => 157,  505 => 152,  502 => 155,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  456 => 143,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 162,  400 => 129,  394 => 126,  371 => 113,  358 => 139,  349 => 103,  342 => 79,  339 => 100,  336 => 99,  329 => 75,  326 => 93,  321 => 91,  319 => 124,  311 => 89,  297 => 84,  289 => 112,  286 => 80,  274 => 77,  263 => 71,  250 => 67,  233 => 62,  228 => 88,  191 => 50,  178 => 123,  175 => 122,  146 => 34,  114 => 92,  572 => 180,  561 => 178,  557 => 177,  549 => 166,  544 => 172,  538 => 170,  536 => 161,  530 => 168,  521 => 162,  517 => 161,  511 => 160,  508 => 153,  504 => 158,  499 => 156,  492 => 132,  487 => 152,  477 => 150,  470 => 135,  467 => 148,  463 => 140,  460 => 139,  449 => 123,  446 => 139,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 165,  395 => 84,  392 => 83,  388 => 117,  386 => 123,  382 => 93,  380 => 83,  377 => 115,  369 => 136,  357 => 125,  347 => 134,  333 => 117,  324 => 92,  307 => 87,  300 => 113,  291 => 82,  288 => 60,  282 => 79,  275 => 77,  272 => 76,  226 => 67,  370 => 100,  367 => 131,  361 => 107,  352 => 121,  346 => 92,  343 => 132,  340 => 90,  332 => 97,  330 => 87,  327 => 126,  320 => 84,  315 => 123,  313 => 82,  310 => 81,  304 => 66,  302 => 114,  296 => 111,  293 => 113,  287 => 72,  280 => 59,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  223 => 58,  192 => 55,  185 => 177,  180 => 124,  174 => 67,  137 => 47,  12 => 34,  150 => 58,  20 => 11,  129 => 56,  153 => 48,  110 => 25,  65 => 29,  34 => 4,  170 => 57,  134 => 56,  127 => 54,  100 => 43,  90 => 27,  76 => 13,  53 => 10,  270 => 110,  266 => 52,  261 => 107,  253 => 102,  249 => 70,  244 => 99,  236 => 35,  232 => 93,  216 => 28,  211 => 81,  195 => 77,  188 => 178,  184 => 47,  172 => 52,  152 => 103,  84 => 16,  58 => 22,  155 => 52,  118 => 28,  81 => 26,  70 => 29,  113 => 44,  225 => 87,  222 => 30,  218 => 14,  215 => 13,  205 => 59,  200 => 55,  197 => 74,  186 => 54,  181 => 59,  160 => 48,  126 => 55,  97 => 91,  23 => 13,  148 => 60,  124 => 43,  104 => 23,  77 => 27,  480 => 128,  474 => 149,  469 => 141,  461 => 155,  457 => 138,  453 => 142,  444 => 134,  440 => 148,  437 => 147,  435 => 132,  430 => 131,  427 => 130,  423 => 128,  413 => 134,  409 => 124,  407 => 95,  402 => 130,  398 => 128,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 117,  365 => 141,  362 => 110,  360 => 109,  355 => 101,  341 => 131,  337 => 103,  322 => 72,  314 => 99,  312 => 68,  309 => 120,  305 => 119,  298 => 63,  294 => 61,  285 => 111,  283 => 70,  278 => 115,  268 => 107,  264 => 72,  258 => 49,  252 => 80,  247 => 66,  241 => 37,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 66,  140 => 41,  132 => 57,  128 => 47,  107 => 24,  61 => 26,  273 => 56,  269 => 75,  254 => 102,  243 => 98,  240 => 86,  238 => 64,  235 => 74,  230 => 82,  227 => 32,  224 => 71,  221 => 77,  219 => 84,  217 => 75,  208 => 57,  204 => 78,  179 => 72,  159 => 49,  143 => 59,  135 => 48,  119 => 44,  102 => 43,  71 => 29,  67 => 19,  63 => 22,  59 => 23,  38 => 17,  94 => 35,  89 => 34,  85 => 30,  75 => 31,  68 => 30,  56 => 25,  87 => 17,  21 => 11,  26 => 14,  93 => 39,  88 => 33,  78 => 84,  46 => 19,  27 => 13,  44 => 19,  31 => 14,  28 => 13,  201 => 186,  196 => 90,  183 => 125,  171 => 56,  166 => 114,  163 => 49,  158 => 62,  156 => 59,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  121 => 95,  117 => 93,  105 => 39,  91 => 34,  62 => 24,  49 => 9,  24 => 3,  25 => 12,  19 => 11,  79 => 31,  72 => 56,  69 => 55,  47 => 17,  40 => 19,  37 => 18,  22 => 11,  246 => 99,  157 => 41,  145 => 53,  139 => 31,  131 => 55,  123 => 30,  120 => 46,  115 => 27,  111 => 40,  108 => 45,  101 => 37,  98 => 37,  96 => 40,  83 => 86,  74 => 23,  66 => 23,  55 => 22,  52 => 20,  50 => 22,  43 => 15,  41 => 18,  35 => 11,  32 => 16,  29 => 15,  209 => 24,  203 => 275,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 69,  176 => 102,  173 => 116,  168 => 65,  164 => 113,  162 => 55,  154 => 46,  149 => 36,  147 => 46,  144 => 99,  141 => 98,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 45,  112 => 26,  109 => 45,  106 => 35,  103 => 38,  99 => 30,  95 => 20,  92 => 19,  86 => 33,  82 => 28,  80 => 31,  73 => 24,  64 => 184,  60 => 15,  57 => 155,  54 => 154,  51 => 19,  48 => 22,  45 => 19,  42 => 18,  39 => 13,  36 => 17,  33 => 16,  30 => 17,);
    }
}
