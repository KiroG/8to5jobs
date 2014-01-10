<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_d49dd09be775a4d5e9a1b4d774eafc25faa8d62a592963ee496d8e37abc38842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_side_menu($context, array $blocks = array())
    {
        if (array_key_exists("action", $context)) {
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active"), "list");
        }
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
    Redefine the content block in your action template

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 58,  20 => 1,  129 => 42,  52 => 23,  157 => 58,  153 => 48,  139 => 59,  110 => 36,  65 => 26,  34 => 16,  96 => 19,  170 => 57,  134 => 42,  127 => 40,  100 => 41,  90 => 29,  76 => 32,  53 => 24,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 63,  120 => 48,  77 => 24,  84 => 26,  58 => 22,  222 => 75,  215 => 14,  212 => 13,  205 => 11,  202 => 10,  197 => 6,  194 => 5,  160 => 59,  126 => 55,  97 => 31,  83 => 24,  181 => 89,  155 => 52,  145 => 56,  124 => 49,  118 => 46,  81 => 34,  70 => 29,  113 => 46,  104 => 42,  74 => 18,  37 => 7,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 69,  140 => 53,  132 => 43,  128 => 49,  111 => 43,  107 => 35,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 74,  217 => 75,  208 => 68,  204 => 80,  179 => 72,  159 => 49,  143 => 56,  135 => 48,  131 => 49,  119 => 39,  108 => 42,  102 => 42,  71 => 32,  67 => 28,  63 => 27,  59 => 10,  47 => 19,  38 => 18,  94 => 39,  89 => 37,  85 => 28,  79 => 35,  75 => 31,  68 => 31,  56 => 25,  50 => 23,  29 => 15,  87 => 38,  72 => 30,  55 => 24,  21 => 2,  26 => 14,  98 => 39,  93 => 28,  88 => 37,  78 => 26,  46 => 19,  27 => 14,  40 => 7,  44 => 21,  35 => 6,  31 => 15,  43 => 21,  41 => 20,  28 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 56,  166 => 54,  163 => 60,  158 => 74,  156 => 59,  151 => 61,  142 => 58,  138 => 67,  136 => 58,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 32,  101 => 40,  91 => 39,  69 => 32,  66 => 30,  62 => 25,  49 => 6,  24 => 13,  32 => 5,  25 => 3,  22 => 12,  19 => 11,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 65,  164 => 59,  162 => 55,  154 => 72,  149 => 62,  147 => 46,  144 => 45,  141 => 43,  133 => 51,  130 => 57,  125 => 40,  122 => 43,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 35,  95 => 40,  92 => 32,  86 => 17,  82 => 36,  80 => 25,  73 => 24,  64 => 18,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 9,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
