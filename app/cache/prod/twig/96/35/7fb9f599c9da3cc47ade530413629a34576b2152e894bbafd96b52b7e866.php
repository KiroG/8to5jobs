<?php

/* IbwJobeetBundle:Default:login.html.twig */
class __TwigTemplate_96357fb9f599c9da3cc47ade530413629a34576b2152e894bbafd96b52b7e866 extends Twig_Template
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
        // line 1
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo " 
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />
 
    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
 
    <button type=\"submit\">login</button>
</form>";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 75,  215 => 14,  212 => 13,  205 => 11,  202 => 10,  197 => 6,  194 => 5,  160 => 76,  126 => 63,  97 => 42,  83 => 34,  181 => 89,  155 => 48,  145 => 69,  124 => 39,  118 => 37,  81 => 23,  70 => 18,  113 => 35,  104 => 32,  74 => 20,  37 => 13,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 41,  128 => 49,  111 => 35,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 74,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 66,  131 => 52,  119 => 61,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 24,  47 => 9,  38 => 6,  94 => 28,  89 => 25,  85 => 25,  79 => 18,  75 => 28,  68 => 14,  56 => 9,  50 => 10,  29 => 5,  87 => 35,  72 => 16,  55 => 23,  21 => 2,  26 => 6,  98 => 29,  93 => 28,  88 => 26,  78 => 21,  46 => 11,  27 => 4,  40 => 15,  44 => 12,  35 => 7,  31 => 8,  43 => 8,  41 => 7,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 56,  166 => 54,  163 => 62,  158 => 74,  156 => 66,  151 => 47,  142 => 68,  138 => 67,  136 => 56,  123 => 62,  121 => 46,  117 => 44,  115 => 36,  105 => 32,  101 => 31,  91 => 27,  69 => 18,  66 => 16,  62 => 25,  49 => 12,  24 => 4,  32 => 6,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 84,  168 => 82,  164 => 59,  162 => 52,  154 => 72,  149 => 51,  147 => 58,  144 => 49,  141 => 43,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 26,  86 => 25,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 14,  57 => 13,  54 => 12,  51 => 14,  48 => 9,  45 => 16,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 5,);
    }
}
