<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_53620d2c22ab7f56fc16e9e7a308d8cae6b3ef007280401014f5213e7df14ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
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
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"row-fluid\">
        ";
        // line 18
        $context["has_center"] = false;
        // line 19
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "            ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "center")) {
                // line 21
                echo "                ";
                $context["has_center"] = true;
                // line 22
                echo "            ";
            }
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        <div class=\"";
        // line 25
        if ((isset($context["has_center"]) ? $context["has_center"] : null)) {
            echo "span3";
        } else {
            echo "span6";
        }
        echo "\">
            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "                ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "left")) {
                // line 28
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                echo "
                ";
            }
            // line 30
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>

        ";
        // line 33
        if ((isset($context["has_center"]) ? $context["has_center"] : null)) {
            // line 34
            echo "            <div class=\"span4\">
                ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 36
                echo "                    ";
                if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "center")) {
                    // line 37
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                    echo "
                    ";
                }
                // line 39
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </div>
        ";
        }
        // line 42
        echo "
        <div class=\"";
        // line 43
        if ((isset($context["has_center"]) ? $context["has_center"] : null)) {
            echo "span4";
        } else {
            echo "span6";
        }
        echo "\">
            ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 45
            echo "                ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "position") == "right")) {
                // line 46
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "settings"))));
                echo "
                ";
            }
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  52 => 20,  157 => 64,  153 => 48,  139 => 57,  110 => 36,  65 => 26,  34 => 15,  96 => 19,  170 => 57,  134 => 42,  127 => 40,  100 => 41,  90 => 29,  76 => 32,  53 => 24,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  120 => 44,  77 => 24,  84 => 26,  58 => 22,  222 => 75,  215 => 14,  212 => 13,  205 => 11,  202 => 10,  197 => 6,  194 => 5,  160 => 54,  126 => 45,  97 => 31,  83 => 24,  181 => 89,  155 => 52,  145 => 59,  124 => 52,  118 => 37,  81 => 16,  70 => 25,  113 => 37,  104 => 40,  74 => 18,  37 => 7,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 69,  140 => 44,  132 => 43,  128 => 49,  111 => 35,  107 => 35,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 74,  217 => 75,  208 => 68,  204 => 80,  179 => 72,  159 => 49,  143 => 56,  135 => 48,  131 => 49,  119 => 39,  108 => 38,  102 => 42,  71 => 29,  67 => 24,  63 => 17,  59 => 10,  47 => 19,  38 => 18,  94 => 39,  89 => 37,  85 => 28,  79 => 20,  75 => 33,  68 => 30,  56 => 21,  50 => 25,  29 => 15,  87 => 35,  72 => 16,  55 => 21,  21 => 2,  26 => 14,  98 => 38,  93 => 28,  88 => 36,  78 => 26,  46 => 8,  27 => 14,  40 => 7,  44 => 21,  35 => 6,  31 => 14,  43 => 21,  41 => 20,  28 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 56,  166 => 54,  163 => 68,  158 => 74,  156 => 59,  151 => 61,  142 => 58,  138 => 67,  136 => 51,  123 => 62,  121 => 51,  117 => 50,  115 => 42,  105 => 32,  101 => 33,  91 => 30,  69 => 32,  66 => 18,  62 => 25,  49 => 6,  24 => 13,  32 => 5,  25 => 3,  22 => 12,  19 => 11,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 65,  164 => 59,  162 => 55,  154 => 72,  149 => 51,  147 => 46,  144 => 45,  141 => 43,  133 => 55,  130 => 41,  125 => 40,  122 => 43,  116 => 43,  112 => 47,  109 => 34,  106 => 35,  103 => 34,  99 => 35,  95 => 26,  92 => 32,  86 => 17,  82 => 27,  80 => 25,  73 => 24,  64 => 18,  60 => 24,  57 => 27,  54 => 26,  51 => 10,  48 => 9,  45 => 18,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 15,);
    }
}
