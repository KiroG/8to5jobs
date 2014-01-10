<?php

/* IbwJobeetBundle:Job:index.atom.twig */
class __TwigTemplate_fb08aa7135775db92d40535f9b7e4e577651f3cf400ea191a6e4119c3d73d4aa extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "activejobs"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 3
                echo "        <entry>
            <title>";
                // line 4
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "position"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location"), "html", null, true);
                echo ")</title>
            <link href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ibw_job_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "company" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "companyslug"), "location" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "locationslug"), "position" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "positionslug"))), "html", null, true);
                echo "\" />
            <id>";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
                echo "</id>
            <updated>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdAt"), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
                echo "</updated>
            <summary type=\"xhtml\">
                <div xmlns=\"http://www.w3.org/1999/xhtml\">
                    ";
                // line 10
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo")) {
                    // line 11
                    echo "                        <div>
                            <a href=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
                    echo "\">
                                <img src=\"http://";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "host"), "html", null, true);
                    echo "/uploads/jobs/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "logo"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
                    echo " logo\" />
                            </a>
                        </div>
                    ";
                }
                // line 17
                echo "                    <div>
                        ";
                // line 18
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description"), "html", null, true));
                echo "
                    </div>
                    <h4>How to apply?</h4>
                    <p>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "howtoapply"), "html", null, true);
                echo "</p>
                </div>
            </summary>
            <author><name>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "company"), "html", null, true);
                echo "</name></author>
        </entry>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:index.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  120 => 44,  77 => 22,  84 => 28,  58 => 19,  222 => 75,  215 => 14,  212 => 13,  205 => 11,  202 => 10,  197 => 6,  194 => 5,  160 => 76,  126 => 63,  97 => 42,  83 => 24,  181 => 89,  155 => 48,  145 => 69,  124 => 45,  118 => 37,  81 => 23,  70 => 18,  113 => 35,  104 => 37,  74 => 18,  37 => 5,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 41,  128 => 49,  111 => 35,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 74,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 66,  131 => 49,  119 => 61,  108 => 38,  102 => 32,  71 => 17,  67 => 21,  63 => 17,  59 => 24,  47 => 10,  38 => 6,  94 => 28,  89 => 25,  85 => 25,  79 => 26,  75 => 28,  68 => 14,  56 => 12,  50 => 10,  29 => 5,  87 => 35,  72 => 16,  55 => 23,  21 => 2,  26 => 5,  98 => 29,  93 => 28,  88 => 30,  78 => 21,  46 => 11,  27 => 3,  40 => 8,  44 => 13,  35 => 6,  31 => 4,  43 => 9,  41 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 56,  166 => 54,  163 => 63,  158 => 74,  156 => 59,  151 => 47,  142 => 68,  138 => 67,  136 => 51,  123 => 62,  121 => 46,  117 => 44,  115 => 42,  105 => 32,  101 => 36,  91 => 27,  69 => 22,  66 => 18,  62 => 25,  49 => 12,  24 => 4,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 84,  168 => 65,  164 => 59,  162 => 52,  154 => 72,  149 => 51,  147 => 56,  144 => 49,  141 => 43,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 35,  95 => 33,  92 => 32,  86 => 24,  82 => 27,  80 => 21,  73 => 24,  64 => 17,  60 => 13,  57 => 13,  54 => 12,  51 => 10,  48 => 9,  45 => 7,  42 => 10,  39 => 9,  36 => 8,  33 => 4,  30 => 5,);
    }
}
