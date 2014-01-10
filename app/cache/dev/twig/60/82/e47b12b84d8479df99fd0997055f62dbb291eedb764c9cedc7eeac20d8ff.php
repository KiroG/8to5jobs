<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_6082e47b12b84d8479df99fd0997055f62dbb291eedb764c9cedc7eeac20d8ff extends Twig_Template
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
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-edit\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 15,  22 => 12,  43 => 21,  41 => 20,  38 => 18,  33 => 16,  23 => 3,  19 => 11,  40 => 13,  24 => 13,  21 => 11,  51 => 21,  37 => 17,  114 => 46,  107 => 44,  100 => 42,  94 => 40,  92 => 39,  89 => 38,  85 => 37,  82 => 36,  75 => 32,  71 => 30,  69 => 29,  66 => 28,  62 => 27,  59 => 26,  56 => 25,  50 => 23,  45 => 19,  42 => 19,  39 => 20,  36 => 18,  34 => 12,  31 => 15,  28 => 14,);
    }
}
