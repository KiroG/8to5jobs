<?php

/* IbwJobeetBundle:Job:admin.html.twig */
class __TwigTemplate_8f614daf66ecbc10c7bf4915bf91a03a9282d370f113dd46b3266908367e6733 extends Twig_Template
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
        echo "<div id=\"job_actions\">
    <h3>Admin</h3>
    <ul>
        ";
        // line 4
        if ((!$this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated"))) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token"))), "html", null, true);
            echo "\">Edit</a></li>
    <li>
        <form action=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_publish", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token"))), "html", null, true);
            echo "\" method=\"post\">
            ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : $this->getContext($context, "publish_form")), 'widget');
            echo "
            <button type=\"submit\">Publish</button>
        </form>
    </li>
";
        }
        // line 13
        echo "        <li>
            <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_delete", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                <button type=\"submit\" onclick=\"if(!confirm('Are you sure?')) { return false; }\">Delete</button>
            </form>
        </li>
        ";
        // line 19
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated")) {
            // line 20
            echo "            <li ";
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon")) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
                ";
            // line 21
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isExpired")) {
                // line 22
                echo "                    Expired
                ";
            } else {
                // line 24
                echo "                    Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "getDaysBeforeExpires"), "html", null, true);
                echo "</strong> days
                ";
            }
            // line 26
            echo " 
                ";
            // line 27
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon")) {
                // line 28
                echo "                    - <a href=\"\">Extend</a> for another 30 days
                ";
            }
            // line 30
            echo "            </li>
        ";
        } else {
            // line 32
            echo "            <li>
                [Bookmark this <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ibw_job_preview", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token"), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "companyslug"), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "locationslug"), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "positionslug"))), "html", null, true);
            echo "\">URL</a> to manage this job in the future.]
            </li>
        ";
        }
        // line 36
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  58 => 19,  155 => 48,  118 => 37,  81 => 23,  70 => 18,  113 => 35,  225 => 75,  222 => 74,  218 => 14,  215 => 13,  205 => 10,  200 => 6,  197 => 5,  186 => 91,  181 => 59,  160 => 76,  126 => 63,  97 => 42,  23 => 3,  148 => 57,  124 => 39,  104 => 32,  77 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 41,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 11,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 66,  119 => 61,  102 => 32,  71 => 19,  67 => 21,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 25,  85 => 25,  75 => 20,  68 => 14,  56 => 10,  87 => 35,  21 => 2,  26 => 5,  93 => 28,  88 => 30,  78 => 21,  46 => 11,  27 => 4,  44 => 13,  31 => 4,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 56,  166 => 54,  163 => 62,  158 => 74,  156 => 66,  151 => 47,  142 => 68,  138 => 42,  136 => 51,  121 => 46,  117 => 44,  105 => 32,  91 => 27,  62 => 25,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 16,  69 => 22,  47 => 14,  40 => 7,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 44,  139 => 45,  131 => 49,  123 => 62,  120 => 44,  115 => 36,  111 => 35,  108 => 38,  101 => 36,  98 => 29,  96 => 31,  83 => 34,  74 => 20,  66 => 16,  55 => 13,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 7,  32 => 7,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 57,  168 => 82,  164 => 59,  162 => 52,  154 => 72,  149 => 51,  147 => 58,  144 => 49,  141 => 43,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 35,  95 => 33,  92 => 32,  86 => 25,  82 => 27,  80 => 23,  73 => 24,  64 => 17,  60 => 20,  57 => 13,  54 => 12,  51 => 15,  48 => 9,  45 => 16,  42 => 10,  39 => 9,  36 => 8,  33 => 4,  30 => 5,);
    }
}
