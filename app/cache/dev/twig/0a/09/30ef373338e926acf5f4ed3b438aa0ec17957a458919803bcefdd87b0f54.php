<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_0a0930ef373338e926acf5f4ed3b438aa0ec17957a458919803bcefdd87b0f54 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 25,  33 => 16,  27 => 14,  30 => 15,  24 => 13,  22 => 12,  19 => 11,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  480 => 128,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  456 => 143,  453 => 142,  451 => 141,  446 => 139,  430 => 137,  428 => 136,  425 => 135,  423 => 128,  414 => 127,  409 => 124,  403 => 121,  400 => 120,  398 => 119,  394 => 118,  388 => 117,  384 => 116,  377 => 115,  374 => 114,  371 => 113,  358 => 106,  349 => 103,  347 => 102,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  324 => 92,  321 => 91,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  289 => 81,  282 => 79,  272 => 76,  269 => 75,  250 => 67,  247 => 66,  243 => 65,  238 => 64,  233 => 62,  228 => 59,  208 => 57,  200 => 55,  191 => 50,  184 => 47,  178 => 45,  175 => 43,  173 => 42,  157 => 41,  152 => 38,  149 => 36,  146 => 34,  139 => 31,  118 => 28,  107 => 24,  101 => 22,  95 => 20,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  76 => 13,  64 => 184,  57 => 27,  52 => 113,  47 => 75,  44 => 74,  42 => 62,  39 => 61,  34 => 53,  318 => 144,  312 => 142,  306 => 140,  303 => 139,  300 => 138,  292 => 134,  286 => 80,  274 => 77,  268 => 126,  263 => 71,  256 => 120,  248 => 115,  242 => 112,  236 => 63,  230 => 105,  224 => 102,  219 => 100,  214 => 98,  203 => 56,  197 => 54,  187 => 86,  182 => 84,  170 => 78,  165 => 76,  158 => 74,  153 => 71,  147 => 68,  144 => 33,  141 => 66,  138 => 61,  136 => 60,  132 => 59,  123 => 30,  120 => 56,  112 => 26,  110 => 25,  104 => 23,  98 => 21,  92 => 19,  86 => 43,  78 => 40,  75 => 39,  72 => 199,  70 => 33,  67 => 185,  62 => 166,  59 => 165,  54 => 26,  51 => 24,  38 => 18,  370 => 100,  367 => 99,  361 => 107,  355 => 105,  352 => 94,  346 => 92,  343 => 91,  340 => 90,  332 => 97,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 75,  287 => 72,  283 => 70,  280 => 130,  277 => 78,  271 => 66,  265 => 125,  262 => 63,  260 => 123,  257 => 61,  254 => 68,  249 => 55,  246 => 54,  241 => 31,  223 => 58,  216 => 99,  209 => 95,  192 => 87,  188 => 21,  185 => 85,  180 => 104,  176 => 81,  174 => 60,  169 => 58,  166 => 57,  164 => 54,  160 => 75,  143 => 48,  137 => 47,  131 => 45,  128 => 58,  124 => 43,  121 => 29,  115 => 27,  113 => 39,  100 => 36,  79 => 14,  68 => 30,  65 => 15,  60 => 13,  56 => 12,  40 => 6,  37 => 54,  35 => 16,  32 => 13,  29 => 11,  23 => 1,  97 => 37,  94 => 36,  88 => 32,  83 => 35,  80 => 41,  77 => 20,  74 => 19,  71 => 25,  69 => 198,  66 => 23,  63 => 14,  55 => 18,  49 => 112,  46 => 21,  43 => 21,  12 => 34,);
    }
}
