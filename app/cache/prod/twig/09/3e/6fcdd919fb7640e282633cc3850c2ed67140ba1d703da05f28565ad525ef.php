<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_093e6fcdd919fb7640e282633cc3850c2ed67140ba1d703da05f28565ad525ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "content");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 215,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 201,  621 => 200,  615 => 198,  597 => 197,  594 => 196,  588 => 193,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 173,  558 => 169,  552 => 167,  546 => 165,  540 => 162,  527 => 159,  522 => 156,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  454 => 136,  447 => 135,  438 => 133,  424 => 129,  418 => 128,  412 => 174,  406 => 163,  391 => 125,  373 => 118,  348 => 80,  338 => 78,  335 => 77,  317 => 70,  308 => 67,  276 => 57,  231 => 33,  210 => 22,  190 => 179,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 195,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  533 => 160,  528 => 167,  525 => 166,  516 => 155,  512 => 159,  510 => 158,  507 => 157,  505 => 152,  502 => 155,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  456 => 143,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 162,  400 => 129,  394 => 126,  371 => 113,  358 => 106,  349 => 103,  342 => 79,  339 => 100,  336 => 99,  329 => 75,  326 => 93,  321 => 91,  319 => 90,  311 => 89,  297 => 84,  289 => 81,  286 => 80,  274 => 77,  263 => 71,  250 => 67,  233 => 62,  228 => 59,  191 => 50,  178 => 123,  175 => 122,  146 => 34,  114 => 92,  572 => 180,  561 => 178,  557 => 177,  549 => 166,  544 => 172,  538 => 170,  536 => 161,  530 => 168,  521 => 162,  517 => 161,  511 => 160,  508 => 153,  504 => 158,  499 => 156,  492 => 132,  487 => 152,  477 => 150,  470 => 135,  467 => 148,  463 => 140,  460 => 139,  449 => 123,  446 => 139,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 165,  395 => 84,  392 => 83,  388 => 117,  386 => 123,  382 => 93,  380 => 83,  377 => 115,  369 => 136,  357 => 125,  347 => 102,  333 => 117,  324 => 92,  307 => 87,  300 => 113,  291 => 82,  288 => 60,  282 => 79,  275 => 77,  272 => 76,  226 => 67,  186 => 54,  148 => 101,  370 => 100,  367 => 131,  361 => 107,  352 => 121,  346 => 92,  343 => 91,  340 => 90,  332 => 97,  330 => 87,  327 => 74,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 66,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  280 => 59,  277 => 78,  271 => 66,  265 => 64,  262 => 51,  260 => 62,  257 => 61,  223 => 58,  192 => 55,  185 => 177,  180 => 124,  174 => 53,  137 => 47,  12 => 34,  150 => 58,  20 => 11,  129 => 56,  52 => 20,  157 => 41,  153 => 48,  139 => 31,  110 => 25,  65 => 29,  34 => 53,  96 => 40,  170 => 57,  134 => 42,  127 => 34,  100 => 43,  90 => 27,  76 => 13,  53 => 20,  270 => 110,  266 => 52,  261 => 107,  253 => 102,  249 => 70,  244 => 99,  236 => 35,  232 => 93,  216 => 28,  211 => 84,  200 => 55,  195 => 77,  188 => 178,  184 => 47,  172 => 52,  152 => 103,  120 => 46,  77 => 25,  84 => 16,  58 => 22,  222 => 30,  215 => 14,  212 => 13,  205 => 59,  202 => 10,  197 => 54,  194 => 181,  160 => 48,  126 => 55,  97 => 91,  83 => 86,  181 => 89,  155 => 52,  145 => 53,  124 => 43,  118 => 28,  81 => 26,  70 => 29,  113 => 46,  104 => 23,  74 => 82,  37 => 12,  23 => 13,  480 => 128,  474 => 149,  469 => 141,  461 => 155,  457 => 138,  453 => 142,  444 => 134,  440 => 148,  437 => 147,  435 => 132,  430 => 131,  427 => 130,  423 => 128,  413 => 134,  409 => 124,  407 => 95,  402 => 130,  398 => 128,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 117,  365 => 116,  362 => 110,  360 => 109,  355 => 101,  341 => 105,  337 => 103,  322 => 72,  314 => 99,  312 => 68,  309 => 97,  305 => 95,  298 => 63,  294 => 61,  285 => 81,  283 => 70,  278 => 115,  268 => 85,  264 => 72,  258 => 49,  252 => 80,  247 => 66,  241 => 37,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 41,  132 => 57,  128 => 47,  111 => 40,  107 => 24,  61 => 26,  273 => 56,  269 => 75,  254 => 68,  246 => 69,  243 => 38,  240 => 86,  238 => 64,  235 => 74,  230 => 82,  227 => 32,  224 => 71,  221 => 77,  219 => 29,  217 => 75,  208 => 57,  204 => 80,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  131 => 48,  119 => 44,  108 => 45,  102 => 43,  71 => 29,  67 => 25,  63 => 22,  59 => 165,  47 => 17,  38 => 7,  94 => 90,  89 => 34,  85 => 87,  79 => 31,  75 => 31,  68 => 30,  56 => 25,  50 => 21,  29 => 15,  87 => 17,  72 => 56,  55 => 21,  21 => 11,  26 => 14,  98 => 36,  93 => 39,  88 => 33,  78 => 84,  46 => 19,  27 => 13,  40 => 19,  44 => 19,  35 => 11,  31 => 17,  43 => 15,  41 => 18,  28 => 14,  201 => 186,  196 => 90,  183 => 125,  171 => 56,  166 => 114,  163 => 49,  158 => 74,  156 => 59,  151 => 45,  142 => 42,  138 => 97,  136 => 39,  123 => 30,  121 => 95,  117 => 93,  115 => 27,  105 => 44,  101 => 37,  91 => 89,  69 => 55,  66 => 23,  62 => 166,  49 => 18,  24 => 3,  32 => 12,  25 => 12,  22 => 11,  19 => 11,  209 => 24,  203 => 275,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 102,  173 => 116,  168 => 65,  164 => 113,  162 => 55,  154 => 46,  149 => 36,  147 => 46,  144 => 99,  141 => 98,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 26,  109 => 45,  106 => 35,  103 => 38,  99 => 30,  95 => 20,  92 => 19,  86 => 33,  82 => 35,  80 => 31,  73 => 24,  64 => 184,  60 => 23,  57 => 155,  54 => 154,  51 => 19,  48 => 22,  45 => 16,  42 => 13,  39 => 13,  36 => 17,  33 => 16,  30 => 17,);
    }
}
