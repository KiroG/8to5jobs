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
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
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
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
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
        return array (  150 => 58,  20 => 1,  129 => 42,  153 => 48,  110 => 36,  65 => 26,  34 => 16,  170 => 57,  134 => 42,  127 => 40,  100 => 41,  90 => 29,  76 => 32,  53 => 24,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 63,  84 => 26,  58 => 22,  155 => 52,  118 => 46,  81 => 34,  70 => 29,  113 => 46,  225 => 75,  222 => 74,  218 => 14,  215 => 13,  205 => 10,  200 => 79,  197 => 5,  186 => 91,  181 => 59,  160 => 59,  126 => 55,  97 => 31,  23 => 12,  148 => 57,  124 => 49,  104 => 42,  77 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 69,  140 => 53,  132 => 43,  128 => 49,  107 => 35,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 11,  204 => 80,  179 => 72,  159 => 49,  143 => 56,  135 => 48,  119 => 39,  102 => 42,  71 => 32,  67 => 28,  63 => 27,  59 => 10,  38 => 18,  94 => 39,  89 => 37,  85 => 28,  75 => 31,  68 => 31,  56 => 25,  87 => 38,  21 => 2,  26 => 14,  93 => 28,  88 => 37,  78 => 26,  46 => 19,  27 => 14,  44 => 21,  31 => 15,  28 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 56,  166 => 54,  163 => 60,  158 => 74,  156 => 59,  151 => 61,  142 => 58,  138 => 42,  136 => 58,  121 => 51,  117 => 50,  105 => 32,  91 => 39,  62 => 25,  49 => 6,  24 => 13,  25 => 3,  19 => 11,  79 => 35,  72 => 30,  69 => 32,  47 => 19,  40 => 7,  37 => 7,  22 => 12,  246 => 90,  157 => 58,  145 => 56,  139 => 59,  131 => 49,  123 => 48,  120 => 48,  115 => 45,  111 => 43,  108 => 42,  101 => 40,  98 => 39,  96 => 19,  83 => 24,  74 => 18,  66 => 30,  55 => 24,  52 => 23,  50 => 23,  43 => 21,  41 => 20,  35 => 6,  32 => 5,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 65,  164 => 59,  162 => 55,  154 => 72,  149 => 62,  147 => 46,  144 => 45,  141 => 43,  133 => 51,  130 => 57,  125 => 40,  122 => 43,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 35,  95 => 40,  92 => 32,  86 => 17,  82 => 36,  80 => 25,  73 => 24,  64 => 18,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 9,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
