<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_88c7c263d808b6cad01d82ce8a0775582d5942b9cc8e7f0e6d78bfc53c3bb137 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 17
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin"), "isGranted", array(0 => "edit", 1 => (isset($context["value"]) ? $context["value"] : null)), "method")) {
                    // line 18
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 20
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 22
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo ", ";
                }
                // line 23
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 26
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo ", ";
                }
                // line 27
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
    }

    // line 31
    public function block_relation_link($context, array $blocks = array())
    {
        // line 32
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "route"), "parameters")), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
        echo "</a>";
    }

    // line 35
    public function block_relation_value($context, array $blocks = array())
    {
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 156,  390 => 150,  378 => 144,  364 => 139,  359 => 138,  328 => 124,  290 => 106,  234 => 80,  198 => 69,  161 => 70,  318 => 122,  316 => 121,  284 => 106,  279 => 104,  256 => 89,  237 => 86,  690 => 410,  676 => 401,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  595 => 354,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  550 => 326,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  481 => 290,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  422 => 250,  420 => 249,  396 => 234,  383 => 224,  366 => 140,  331 => 187,  267 => 94,  242 => 140,  351 => 135,  323 => 125,  301 => 111,  299 => 112,  281 => 105,  251 => 101,  248 => 100,  239 => 83,  225 => 77,  213 => 126,  165 => 71,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 397,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 373,  621 => 200,  615 => 198,  597 => 197,  594 => 196,  588 => 350,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 337,  558 => 169,  552 => 167,  546 => 165,  540 => 162,  527 => 159,  522 => 156,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  454 => 136,  447 => 135,  438 => 133,  424 => 254,  418 => 128,  412 => 174,  406 => 158,  391 => 125,  373 => 142,  348 => 80,  338 => 130,  335 => 188,  317 => 70,  308 => 67,  276 => 57,  231 => 33,  210 => 75,  190 => 179,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 404,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 366,  608 => 187,  605 => 361,  602 => 185,  596 => 181,  592 => 195,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  533 => 160,  528 => 167,  525 => 166,  516 => 155,  512 => 159,  510 => 158,  507 => 157,  505 => 152,  502 => 155,  498 => 134,  486 => 292,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  456 => 273,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 157,  400 => 129,  394 => 152,  371 => 113,  358 => 139,  349 => 133,  342 => 129,  339 => 100,  336 => 126,  329 => 75,  326 => 185,  321 => 123,  319 => 124,  311 => 89,  297 => 84,  289 => 112,  286 => 80,  274 => 98,  263 => 71,  250 => 93,  233 => 62,  228 => 78,  191 => 69,  178 => 123,  175 => 76,  146 => 49,  114 => 71,  572 => 180,  561 => 178,  557 => 330,  549 => 166,  544 => 172,  538 => 319,  536 => 161,  530 => 168,  521 => 162,  517 => 161,  511 => 160,  508 => 153,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  477 => 150,  470 => 135,  467 => 148,  463 => 140,  460 => 139,  449 => 123,  446 => 139,  441 => 105,  426 => 102,  419 => 98,  415 => 247,  410 => 165,  395 => 84,  392 => 83,  388 => 117,  386 => 123,  382 => 93,  380 => 83,  377 => 115,  369 => 141,  357 => 125,  347 => 134,  333 => 117,  324 => 92,  307 => 87,  300 => 113,  291 => 169,  288 => 107,  282 => 79,  275 => 103,  272 => 158,  226 => 67,  186 => 81,  148 => 63,  370 => 100,  367 => 131,  361 => 208,  352 => 135,  346 => 196,  343 => 132,  340 => 90,  332 => 125,  330 => 87,  327 => 126,  320 => 84,  315 => 118,  313 => 82,  310 => 81,  304 => 174,  302 => 114,  296 => 109,  293 => 109,  287 => 72,  280 => 101,  277 => 100,  271 => 108,  265 => 99,  262 => 105,  260 => 98,  257 => 149,  223 => 58,  192 => 65,  185 => 68,  180 => 62,  174 => 60,  137 => 46,  12 => 34,  150 => 64,  20 => 11,  129 => 56,  52 => 17,  157 => 41,  153 => 56,  139 => 59,  110 => 77,  65 => 29,  34 => 16,  96 => 40,  170 => 73,  134 => 58,  127 => 32,  100 => 36,  90 => 27,  76 => 57,  53 => 10,  270 => 110,  266 => 52,  261 => 91,  253 => 95,  249 => 70,  244 => 85,  236 => 35,  232 => 84,  216 => 28,  211 => 81,  200 => 70,  195 => 68,  188 => 178,  184 => 63,  172 => 52,  152 => 92,  120 => 46,  77 => 27,  84 => 38,  58 => 22,  222 => 81,  215 => 74,  212 => 13,  205 => 59,  202 => 77,  197 => 70,  194 => 86,  160 => 69,  126 => 42,  97 => 63,  83 => 86,  181 => 79,  155 => 53,  145 => 52,  124 => 31,  118 => 28,  81 => 25,  70 => 29,  113 => 41,  104 => 67,  74 => 33,  37 => 18,  23 => 18,  480 => 128,  474 => 285,  469 => 141,  461 => 155,  457 => 138,  453 => 142,  444 => 134,  440 => 148,  437 => 147,  435 => 258,  430 => 131,  427 => 130,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 128,  393 => 126,  387 => 122,  384 => 147,  381 => 120,  379 => 119,  374 => 114,  368 => 117,  365 => 141,  362 => 110,  360 => 109,  355 => 136,  341 => 131,  337 => 103,  322 => 72,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 61,  285 => 111,  283 => 102,  278 => 115,  268 => 107,  264 => 72,  258 => 49,  252 => 88,  247 => 66,  241 => 84,  229 => 73,  220 => 80,  214 => 61,  177 => 61,  169 => 57,  140 => 41,  132 => 57,  128 => 47,  111 => 40,  107 => 24,  61 => 25,  273 => 56,  269 => 100,  254 => 102,  246 => 86,  243 => 89,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 134,  224 => 71,  221 => 75,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 69,  143 => 48,  135 => 35,  131 => 48,  119 => 28,  108 => 47,  102 => 38,  71 => 29,  67 => 27,  63 => 50,  59 => 23,  47 => 19,  38 => 17,  94 => 35,  89 => 39,  85 => 34,  79 => 31,  75 => 31,  68 => 30,  56 => 24,  50 => 20,  29 => 21,  87 => 33,  72 => 56,  55 => 22,  21 => 12,  26 => 13,  98 => 43,  93 => 34,  88 => 60,  78 => 24,  46 => 35,  27 => 13,  40 => 19,  44 => 19,  35 => 16,  31 => 15,  43 => 18,  41 => 18,  28 => 14,  201 => 72,  196 => 90,  183 => 125,  171 => 63,  166 => 100,  163 => 49,  158 => 62,  156 => 67,  151 => 45,  142 => 60,  138 => 36,  136 => 39,  123 => 53,  121 => 52,  117 => 50,  115 => 49,  105 => 27,  101 => 73,  91 => 34,  69 => 50,  66 => 23,  62 => 28,  49 => 20,  24 => 13,  32 => 15,  25 => 12,  22 => 12,  19 => 11,  209 => 73,  203 => 71,  199 => 67,  193 => 73,  189 => 64,  187 => 84,  182 => 79,  176 => 76,  173 => 116,  168 => 60,  164 => 71,  162 => 70,  154 => 66,  149 => 50,  147 => 90,  144 => 61,  141 => 98,  133 => 49,  130 => 56,  125 => 45,  122 => 44,  116 => 45,  112 => 48,  109 => 40,  106 => 35,  103 => 45,  99 => 26,  95 => 42,  92 => 61,  86 => 64,  82 => 33,  80 => 31,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 16,  30 => 15,);
    }
}
