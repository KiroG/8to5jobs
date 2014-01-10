<?php

/* IbwJobeetBundle:JobAdmin:list_image.html.twig */
class __TwigTemplate_5869da6584f13f043d81dda78ed2f8ab78453ab1b18741c0af606458fd84c92d extends Twig_Template
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
        echo "<tr>
    <th>Logo</th>
    <td><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPath")), "html", null, true);
        echo "\" /></td>
</tr>";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:JobAdmin:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,  40 => 13,  24 => 12,  21 => 11,  51 => 21,  37 => 17,  114 => 46,  107 => 44,  100 => 42,  94 => 40,  92 => 39,  89 => 38,  85 => 37,  82 => 36,  75 => 32,  71 => 30,  69 => 29,  66 => 28,  62 => 27,  59 => 26,  56 => 25,  50 => 23,  45 => 19,  42 => 19,  39 => 18,  36 => 17,  34 => 12,  31 => 15,  28 => 13,);
    }
}
