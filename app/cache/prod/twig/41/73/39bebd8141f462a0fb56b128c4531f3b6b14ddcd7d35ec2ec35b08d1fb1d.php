<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_417339bebd8141f462a0fb56b128c4531f3b6b14ddcd7d35ec2ec35b08d1fb1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
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
        ob_start();
        // line 16
        if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
            // line 17
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : null)) {
                // line 18
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "value" => 0, "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <span class=\"label label-success\">";
                // line 19
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                echo "</span>
        </a>
    ";
            } else {
                // line 22
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "value" => 1, "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <span class=\"label label-important\">";
                // line 23
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                echo "</span>
        </a>
    ";
            }
        } else {
            // line 27
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : null)) {
                // line 28
                echo "        <span class=\"label label-success\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                echo "</span>
    ";
            } else {
                // line 30
                echo "        <span class=\"label label-important\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                echo "</span>
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  572 => 180,  561 => 178,  557 => 177,  549 => 174,  544 => 172,  538 => 170,  536 => 169,  530 => 165,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  504 => 158,  499 => 156,  492 => 154,  487 => 152,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  357 => 125,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  300 => 113,  291 => 109,  288 => 108,  282 => 80,  275 => 77,  272 => 76,  226 => 67,  186 => 54,  148 => 44,  370 => 100,  367 => 131,  361 => 127,  352 => 121,  346 => 92,  343 => 91,  340 => 90,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  280 => 79,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 66,  192 => 55,  185 => 20,  180 => 104,  174 => 53,  137 => 47,  12 => 34,  150 => 58,  20 => 11,  129 => 42,  52 => 23,  157 => 47,  153 => 48,  139 => 59,  110 => 36,  65 => 29,  34 => 16,  96 => 139,  170 => 57,  134 => 42,  127 => 34,  100 => 43,  90 => 29,  76 => 34,  53 => 24,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 70,  244 => 99,  236 => 94,  232 => 93,  216 => 25,  211 => 84,  200 => 79,  195 => 77,  188 => 21,  184 => 72,  172 => 52,  152 => 63,  120 => 48,  77 => 13,  84 => 36,  58 => 22,  222 => 75,  215 => 14,  212 => 13,  205 => 59,  202 => 10,  197 => 56,  194 => 5,  160 => 48,  126 => 55,  97 => 37,  83 => 15,  181 => 89,  155 => 52,  145 => 43,  124 => 43,  118 => 46,  81 => 36,  70 => 29,  113 => 48,  104 => 42,  74 => 32,  37 => 23,  23 => 11,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 70,  278 => 115,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 41,  132 => 44,  128 => 44,  111 => 30,  107 => 46,  61 => 27,  273 => 96,  269 => 75,  254 => 60,  246 => 69,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 74,  217 => 75,  208 => 60,  204 => 80,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  131 => 45,  119 => 31,  108 => 144,  102 => 142,  71 => 32,  67 => 30,  63 => 17,  59 => 27,  47 => 22,  38 => 14,  94 => 40,  89 => 17,  85 => 37,  79 => 34,  75 => 21,  68 => 30,  56 => 25,  50 => 23,  29 => 15,  87 => 38,  72 => 31,  55 => 25,  21 => 11,  26 => 14,  98 => 42,  93 => 40,  88 => 37,  78 => 29,  46 => 9,  27 => 14,  40 => 13,  44 => 21,  35 => 20,  31 => 16,  43 => 26,  41 => 19,  28 => 14,  201 => 57,  196 => 90,  183 => 82,  171 => 56,  166 => 50,  163 => 49,  158 => 74,  156 => 59,  151 => 45,  142 => 42,  138 => 67,  136 => 39,  123 => 52,  121 => 42,  117 => 49,  115 => 40,  105 => 45,  101 => 40,  91 => 75,  69 => 19,  66 => 28,  62 => 28,  49 => 23,  24 => 12,  32 => 14,  25 => 13,  22 => 12,  19 => 11,  209 => 24,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 102,  173 => 71,  168 => 65,  164 => 54,  162 => 55,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 43,  133 => 51,  130 => 35,  125 => 40,  122 => 43,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 44,  99 => 23,  95 => 19,  92 => 39,  86 => 65,  82 => 36,  80 => 25,  73 => 27,  64 => 18,  60 => 16,  57 => 15,  54 => 26,  51 => 14,  48 => 15,  45 => 20,  42 => 19,  39 => 18,  36 => 18,  33 => 17,  30 => 15,);
    }
}
