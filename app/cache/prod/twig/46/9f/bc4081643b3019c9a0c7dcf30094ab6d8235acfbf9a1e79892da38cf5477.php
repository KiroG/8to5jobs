<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_469fbc4081643b3019c9a0c7dcf30094ab6d8235acfbf9a1e79892da38cf5477 extends Twig_Template
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
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-user\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 64,  153 => 62,  139 => 57,  110 => 41,  65 => 26,  34 => 18,  96 => 19,  170 => 57,  134 => 42,  127 => 40,  100 => 41,  90 => 29,  76 => 32,  53 => 24,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  120 => 44,  77 => 24,  84 => 26,  58 => 22,  222 => 75,  215 => 14,  212 => 13,  205 => 11,  202 => 10,  197 => 6,  194 => 5,  160 => 54,  126 => 45,  97 => 42,  83 => 24,  181 => 89,  155 => 52,  145 => 59,  124 => 52,  118 => 37,  81 => 16,  70 => 21,  113 => 42,  104 => 40,  74 => 18,  37 => 7,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 69,  140 => 45,  132 => 47,  128 => 49,  111 => 35,  107 => 35,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 74,  217 => 75,  208 => 68,  204 => 80,  179 => 72,  159 => 61,  143 => 56,  135 => 48,  131 => 49,  119 => 61,  108 => 38,  102 => 42,  71 => 29,  67 => 31,  63 => 17,  59 => 10,  47 => 21,  38 => 19,  94 => 39,  89 => 37,  85 => 35,  79 => 20,  75 => 33,  68 => 14,  56 => 21,  50 => 23,  29 => 15,  87 => 35,  72 => 16,  55 => 25,  21 => 2,  26 => 14,  98 => 38,  93 => 28,  88 => 36,  78 => 31,  46 => 8,  27 => 12,  40 => 7,  44 => 21,  35 => 6,  31 => 14,  43 => 8,  41 => 20,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 56,  166 => 54,  163 => 68,  158 => 74,  156 => 59,  151 => 61,  142 => 58,  138 => 67,  136 => 51,  123 => 62,  121 => 51,  117 => 50,  115 => 42,  105 => 32,  101 => 36,  91 => 38,  69 => 32,  66 => 18,  62 => 25,  49 => 6,  24 => 13,  32 => 5,  25 => 3,  22 => 12,  19 => 11,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 65,  164 => 59,  162 => 55,  154 => 72,  149 => 51,  147 => 56,  144 => 46,  141 => 43,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 43,  112 => 47,  109 => 34,  106 => 44,  103 => 32,  99 => 35,  95 => 26,  92 => 32,  86 => 17,  82 => 33,  80 => 25,  73 => 24,  64 => 18,  60 => 24,  57 => 23,  54 => 12,  51 => 10,  48 => 9,  45 => 7,  42 => 16,  39 => 15,  36 => 19,  33 => 13,  30 => 15,);
    }
}
