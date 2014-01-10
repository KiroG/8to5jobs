<?php

/* ::base.html.twig */
class __TwigTemplate_81d150cb91b2e7277f56a7816ac551da3b5c5d5a563b9979acc281f70ab817ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  798 => 184,  793 => 182,  785 => 178,  783 => 177,  772 => 172,  751 => 163,  724 => 154,  721 => 153,  715 => 151,  699 => 142,  697 => 141,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  658 => 124,  638 => 118,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  564 => 99,  555 => 95,  524 => 90,  503 => 81,  490 => 77,  464 => 71,  450 => 64,  442 => 62,  433 => 60,  405 => 49,  385 => 41,  245 => 335,  350 => 26,  810 => 492,  807 => 491,  796 => 183,  792 => 488,  788 => 486,  749 => 162,  746 => 161,  727 => 476,  710 => 149,  706 => 473,  694 => 138,  677 => 465,  649 => 122,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  532 => 410,  529 => 92,  389 => 160,  345 => 147,  334 => 141,  259 => 103,  363 => 32,  344 => 24,  255 => 353,  212 => 279,  672 => 345,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 119,  626 => 325,  622 => 452,  609 => 319,  606 => 449,  593 => 105,  591 => 309,  569 => 300,  563 => 298,  559 => 296,  548 => 292,  545 => 291,  541 => 290,  519 => 278,  515 => 85,  497 => 267,  489 => 262,  479 => 256,  471 => 253,  459 => 69,  448 => 240,  436 => 235,  397 => 213,  376 => 205,  353 => 328,  295 => 178,  431 => 189,  408 => 50,  325 => 129,  207 => 269,  306 => 286,  303 => 106,  292 => 134,  401 => 172,  390 => 43,  378 => 157,  364 => 139,  359 => 138,  328 => 139,  290 => 5,  234 => 80,  198 => 69,  161 => 202,  318 => 111,  316 => 16,  284 => 106,  279 => 104,  256 => 96,  237 => 86,  690 => 469,  676 => 401,  664 => 342,  659 => 392,  654 => 123,  650 => 388,  643 => 120,  639 => 380,  633 => 377,  629 => 454,  595 => 354,  581 => 305,  577 => 303,  575 => 341,  573 => 340,  550 => 94,  531 => 283,  526 => 310,  518 => 307,  514 => 306,  509 => 83,  481 => 290,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 195,  429 => 188,  422 => 226,  420 => 249,  396 => 234,  383 => 207,  366 => 33,  331 => 140,  267 => 101,  242 => 112,  351 => 120,  323 => 128,  301 => 111,  299 => 8,  281 => 411,  251 => 101,  248 => 336,  239 => 83,  213 => 78,  202 => 266,  165 => 83,  816 => 268,  813 => 267,  808 => 262,  801 => 185,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 176,  778 => 248,  775 => 485,  769 => 171,  767 => 170,  764 => 169,  758 => 241,  756 => 165,  753 => 164,  747 => 237,  745 => 236,  742 => 235,  739 => 156,  735 => 189,  732 => 188,  729 => 155,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 150,  709 => 232,  703 => 229,  700 => 228,  698 => 471,  693 => 224,  687 => 221,  684 => 220,  682 => 467,  679 => 466,  674 => 397,  668 => 344,  665 => 212,  662 => 125,  648 => 210,  642 => 208,  637 => 205,  631 => 327,  623 => 373,  621 => 200,  615 => 198,  597 => 197,  594 => 196,  588 => 308,  586 => 192,  582 => 190,  579 => 187,  576 => 101,  571 => 178,  567 => 414,  558 => 169,  552 => 293,  546 => 165,  540 => 162,  527 => 91,  522 => 406,  501 => 80,  496 => 79,  493 => 78,  491 => 147,  488 => 146,  485 => 145,  478 => 74,  475 => 143,  472 => 142,  454 => 244,  447 => 135,  438 => 236,  424 => 254,  418 => 224,  412 => 222,  406 => 158,  391 => 125,  373 => 156,  348 => 140,  338 => 135,  335 => 21,  317 => 185,  308 => 13,  276 => 395,  231 => 83,  210 => 270,  194 => 248,  190 => 76,  713 => 214,  707 => 148,  704 => 210,  702 => 472,  696 => 140,  686 => 468,  681 => 404,  669 => 201,  666 => 126,  663 => 199,  655 => 194,  652 => 193,  635 => 117,  618 => 199,  613 => 320,  608 => 187,  605 => 361,  602 => 317,  596 => 106,  592 => 195,  590 => 178,  585 => 307,  568 => 175,  551 => 174,  547 => 93,  542 => 321,  539 => 171,  533 => 284,  528 => 167,  525 => 280,  516 => 155,  512 => 84,  510 => 158,  507 => 157,  505 => 270,  502 => 155,  498 => 134,  486 => 292,  483 => 258,  473 => 254,  465 => 249,  462 => 202,  456 => 68,  451 => 141,  428 => 59,  425 => 135,  414 => 52,  403 => 48,  400 => 47,  394 => 168,  371 => 35,  358 => 151,  349 => 133,  342 => 23,  339 => 100,  336 => 126,  329 => 188,  326 => 138,  321 => 135,  319 => 124,  311 => 14,  297 => 104,  289 => 113,  286 => 112,  274 => 110,  263 => 365,  250 => 341,  233 => 304,  228 => 78,  191 => 246,  178 => 59,  175 => 58,  146 => 181,  114 => 111,  572 => 180,  561 => 178,  557 => 96,  549 => 411,  544 => 172,  538 => 319,  536 => 161,  530 => 168,  521 => 162,  517 => 404,  511 => 160,  508 => 153,  504 => 302,  499 => 268,  492 => 295,  487 => 152,  477 => 150,  470 => 73,  467 => 72,  463 => 248,  460 => 139,  449 => 198,  446 => 197,  441 => 196,  426 => 58,  419 => 98,  415 => 180,  410 => 221,  395 => 84,  392 => 83,  388 => 42,  386 => 159,  382 => 93,  380 => 158,  377 => 37,  369 => 141,  357 => 123,  347 => 191,  333 => 117,  324 => 113,  307 => 128,  300 => 105,  291 => 102,  288 => 4,  282 => 79,  275 => 105,  272 => 158,  226 => 84,  370 => 100,  367 => 339,  361 => 152,  352 => 135,  346 => 196,  343 => 146,  340 => 145,  332 => 20,  330 => 87,  327 => 114,  320 => 127,  315 => 131,  313 => 15,  310 => 81,  304 => 181,  302 => 125,  296 => 121,  293 => 6,  287 => 72,  280 => 130,  277 => 100,  271 => 374,  265 => 105,  262 => 98,  260 => 363,  257 => 149,  223 => 58,  192 => 87,  185 => 74,  180 => 62,  174 => 217,  137 => 46,  12 => 34,  150 => 55,  20 => 1,  129 => 148,  153 => 77,  110 => 38,  65 => 17,  34 => 4,  170 => 84,  134 => 161,  127 => 35,  100 => 36,  90 => 27,  76 => 31,  53 => 5,  270 => 102,  266 => 366,  261 => 91,  253 => 342,  249 => 70,  244 => 85,  236 => 108,  232 => 88,  216 => 79,  211 => 81,  195 => 68,  188 => 90,  184 => 233,  172 => 57,  152 => 46,  84 => 41,  58 => 14,  155 => 47,  118 => 49,  81 => 30,  70 => 19,  113 => 40,  225 => 298,  222 => 297,  218 => 14,  215 => 280,  205 => 108,  200 => 72,  197 => 249,  186 => 239,  181 => 232,  160 => 75,  126 => 147,  97 => 41,  23 => 1,  148 => 63,  124 => 132,  104 => 90,  77 => 25,  480 => 75,  474 => 285,  469 => 141,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 61,  435 => 258,  430 => 131,  427 => 130,  423 => 57,  413 => 134,  409 => 124,  407 => 242,  402 => 215,  398 => 128,  393 => 211,  387 => 164,  384 => 147,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 197,  362 => 110,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 72,  314 => 99,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 61,  285 => 3,  283 => 115,  278 => 410,  268 => 373,  264 => 72,  258 => 354,  252 => 88,  247 => 66,  241 => 93,  229 => 87,  220 => 290,  214 => 98,  177 => 61,  169 => 210,  140 => 58,  132 => 59,  128 => 58,  107 => 37,  61 => 2,  273 => 394,  269 => 107,  254 => 102,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 75,  219 => 100,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 62,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 6,  38 => 6,  94 => 57,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 10,  27 => 7,  44 => 11,  31 => 5,  28 => 3,  201 => 106,  196 => 92,  183 => 125,  171 => 216,  166 => 209,  163 => 82,  158 => 80,  156 => 195,  151 => 188,  142 => 60,  138 => 61,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  24 => 2,  25 => 35,  19 => 1,  79 => 32,  72 => 21,  69 => 11,  47 => 12,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 7,  32 => 6,  29 => 5,  209 => 95,  203 => 73,  199 => 265,  193 => 73,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 175,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 45,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 10,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 11,  45 => 9,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 3,);
    }
}
