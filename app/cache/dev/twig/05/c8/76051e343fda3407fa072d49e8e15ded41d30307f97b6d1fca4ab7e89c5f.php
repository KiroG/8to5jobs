<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_05c876051e343fda3407fa072d49e8e15ded41d30307f97b6d1fca4ab7e89c5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  27 => 13,  25 => 12,  20 => 1,  179 => 72,  169 => 69,  163 => 68,  157 => 64,  151 => 61,  145 => 59,  142 => 58,  139 => 57,  135 => 55,  124 => 52,  112 => 47,  102 => 42,  100 => 41,  89 => 37,  75 => 30,  71 => 29,  65 => 26,  62 => 25,  60 => 24,  57 => 23,  50 => 22,  38 => 19,  29 => 15,  26 => 14,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 215,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 201,  621 => 200,  618 => 199,  615 => 198,  597 => 197,  594 => 196,  592 => 195,  588 => 193,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 173,  558 => 169,  552 => 167,  549 => 166,  546 => 165,  540 => 162,  536 => 161,  533 => 160,  527 => 159,  522 => 156,  516 => 155,  508 => 153,  505 => 152,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  469 => 141,  463 => 140,  460 => 139,  457 => 138,  454 => 136,  447 => 135,  444 => 134,  438 => 133,  435 => 132,  430 => 131,  427 => 130,  424 => 129,  418 => 128,  412 => 174,  410 => 165,  406 => 163,  403 => 162,  400 => 129,  398 => 128,  394 => 126,  391 => 125,  386 => 123,  379 => 119,  373 => 118,  368 => 117,  365 => 116,  355 => 101,  348 => 80,  342 => 79,  338 => 78,  335 => 77,  329 => 75,  327 => 74,  322 => 72,  317 => 70,  312 => 68,  308 => 67,  304 => 66,  298 => 63,  294 => 61,  288 => 60,  280 => 59,  276 => 57,  273 => 56,  266 => 52,  262 => 51,  258 => 49,  243 => 38,  241 => 37,  236 => 35,  231 => 33,  227 => 32,  222 => 30,  219 => 29,  216 => 28,  210 => 22,  203 => 275,  201 => 186,  194 => 181,  190 => 179,  188 => 178,  185 => 177,  183 => 125,  180 => 124,  178 => 123,  175 => 122,  173 => 71,  166 => 114,  164 => 113,  152 => 103,  148 => 101,  141 => 98,  138 => 97,  121 => 51,  117 => 50,  114 => 92,  94 => 39,  83 => 86,  74 => 82,  72 => 56,  69 => 55,  53 => 20,  51 => 19,  49 => 18,  43 => 15,  41 => 20,  37 => 12,  35 => 11,  159 => 49,  153 => 62,  147 => 46,  144 => 99,  140 => 44,  132 => 43,  129 => 42,  125 => 40,  119 => 39,  113 => 37,  110 => 46,  106 => 44,  103 => 34,  101 => 33,  97 => 91,  91 => 38,  85 => 87,  82 => 33,  78 => 31,  70 => 25,  67 => 28,  61 => 23,  58 => 22,  55 => 21,  52 => 20,  47 => 21,  45 => 16,  42 => 17,  39 => 13,  34 => 18,  28 => 14,);
    }
}
