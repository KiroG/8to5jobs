<?php

/* SonataCoreBundle:FlashMessage:render.html.twig */
class __TwigTemplate_267b953e195779686ddce1b6e5f7a66ebb657c5f62b27c73bac7bd92ba415236 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = ((array_key_exists("domain", $context)) ? ((isset($context["domain"]) ? $context["domain"] : null)) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessages((isset($context["type"]) ? $context["type"] : null), (isset($context["domain"]) ? $context["domain"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_core_status')->statusClass((isset($context["type"]) ? $context["type"] : null)), "html", null, true);
                echo "\">
            ";
                // line 15
                echo (isset($context["message"]) ? $context["message"] : null);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:FlashMessage:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  134 => 42,  127 => 40,  100 => 33,  90 => 29,  76 => 13,  53 => 7,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  120 => 44,  77 => 24,  84 => 26,  58 => 13,  222 => 75,  215 => 14,  212 => 13,  205 => 11,  202 => 10,  197 => 6,  194 => 5,  160 => 54,  126 => 63,  97 => 42,  83 => 24,  181 => 89,  155 => 52,  145 => 69,  124 => 45,  118 => 37,  81 => 23,  70 => 21,  113 => 37,  104 => 34,  74 => 18,  37 => 7,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 60,  140 => 45,  132 => 41,  128 => 49,  111 => 35,  107 => 35,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 74,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 66,  131 => 49,  119 => 61,  108 => 38,  102 => 32,  71 => 19,  67 => 21,  63 => 17,  59 => 10,  47 => 10,  38 => 6,  94 => 30,  89 => 25,  85 => 25,  79 => 20,  75 => 23,  68 => 14,  56 => 12,  50 => 10,  29 => 2,  87 => 35,  72 => 16,  55 => 23,  21 => 2,  26 => 13,  98 => 29,  93 => 28,  88 => 24,  78 => 21,  46 => 8,  27 => 3,  40 => 7,  44 => 4,  35 => 6,  31 => 14,  43 => 8,  41 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 56,  166 => 54,  163 => 63,  158 => 74,  156 => 59,  151 => 50,  142 => 68,  138 => 67,  136 => 51,  123 => 62,  121 => 39,  117 => 44,  115 => 42,  105 => 32,  101 => 36,  91 => 27,  69 => 22,  66 => 18,  62 => 25,  49 => 6,  24 => 4,  32 => 5,  25 => 3,  22 => 2,  19 => 11,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 84,  168 => 65,  164 => 59,  162 => 55,  154 => 72,  149 => 51,  147 => 56,  144 => 46,  141 => 43,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 35,  95 => 26,  92 => 32,  86 => 24,  82 => 27,  80 => 25,  73 => 24,  64 => 18,  60 => 13,  57 => 13,  54 => 12,  51 => 10,  48 => 9,  45 => 7,  42 => 10,  39 => 3,  36 => 15,  33 => 4,  30 => 3,);
    }
}
