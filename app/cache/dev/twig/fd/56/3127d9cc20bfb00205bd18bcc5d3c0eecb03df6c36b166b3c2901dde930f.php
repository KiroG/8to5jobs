<?php

/* IbwJobeetBundle::layout.html.twig */
class __TwigTemplate_fd563127d9cc20bfb00205bd18bcc5d3c0eecb03df6c36b166b3c2901dde930f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title> ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "    </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
            ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link rel=\"alternate\" type=\"application/atom+xml\" title=\"Latest Jobs\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("ibw_job", array("_format" => "atom"));
        echo "\" />
    <!-- Bootstrap -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    <style>
\t/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-left: 15px;
  padding-right: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
  padding-bottom: 19px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  font-size: 21px;
  padding: 14px 24px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-left: 0;
    padding-right: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
\t</style>
  </head>
  <body>
  <div class=\"container\">
  <div class=\"page-header\">
    <h1><a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("ibw_jobeet_homepage");
        echo "\"><img alt=\"Jobeet Job Board\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/logo.jpg"), "html", null, true);
        echo "\" /></a></h1>

</div>
<nav class=\"navbar navbar-default\" role=\"navigation\">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
   
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
  <form  class=\"navbar-form navbar-left\" role=\"search\" action=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("ibw_job_search");
        echo "\" method=\"get\">
            <div class=\"form-group\">
            <input type=\"text\" name=\"query\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" id=\"search_keywords\" class=\"form-control\" placeholder=\"Live Search\" /></div>
             <button type=\"submit\" class=\"btn btn-default\">Search</button>
            <img id=\"loader\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/loader.gif"), "html", null, true);
        echo "\" style=\"vertical-align: middle; display: none\" />
            <div class=\"help-block\">
                Enter some keywords (city, country, position, ...)
            </div>
            <!--<p class=\"help-block\">Enter some keywords (city, country, position, ...)</p>
-->        </form>
   
 <!--   <form class=\"navbar-form navbar-left\" role=\"search\">
      <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Live Search\">
      </div>
      <button type=\"submit\" class=\"btn btn-default\">Search</button>
    </form>-->
    <ul class=\"nav navbar-nav navbar-right\">
     
    <form class=\"navbar-form navbar-left\" role=\"post_job\" action=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("ibw_job_new");
        echo "\">
      <button type=\"submit\" class=\"btn btn-default\">Post a Job</button>
    </form>
    </ul>
  </div>
  </nav>
<!--<div class=\"panel panel-default\">-->
  
               ";
        // line 163
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 164
            echo "                   <div class=\"flash_notice\">
                       ";
            // line 165
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                   </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo " 
               ";
        // line 169
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 170
            echo "                   <div class=\"flash_error\">
                       ";
            // line 171
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                   </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo " 
               
                   ";
        // line 176
        $this->displayBlock('content', $context, $blocks);
        // line 178
        echo "               
\t\t\t   
           <!--</div>-->
\t\t   </br>
\t\t   </br>
\t\t   </br>
 
 <div id=\"footer\">
 <span class=\"label label-info\">
                       <a href=\"\">About 8to5.co.za</a></span>|<span class=\"label label-info\">
                       <a href=\"";
        // line 188
        echo $this->env->getExtension('routing')->getPath("ibw_job", array("_format" => "atom"));
        echo "\">Full feed</a></span>|<span class=\"label label-info\">
                       <a href=\"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("ibw_affiliate_new");
        echo "\">Jobeet API</a></span>|<span class=\"label label-info\">
                       <a href=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("ibw_affiliate_new");
        echo "\">Become an affiliate</a></span>|<span class=\"label label-info\">
                   \t\t powered by <a href=\"http://www.symfony.com/\">
                          <b>TNMA</b>
                       </a></span>
               </div>
\t\t</div>
  
  </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "                8to5.co.za - Your best job board
            ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/js/search.js"), "html", null, true);
        echo "\"></script>
          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://code.jquery.com/jquery.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        
\t<script src=\"js/bootstrap.min.js\"></script>
    ";
    }

    // line 176
    public function block_content($context, array $blocks = array())
    {
        // line 177
        echo "                   ";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 177,  320 => 176,  312 => 19,  305 => 15,  300 => 14,  297 => 13,  290 => 11,  287 => 10,  282 => 5,  279 => 4,  265 => 190,  261 => 189,  257 => 188,  245 => 178,  243 => 176,  239 => 174,  230 => 171,  227 => 170,  223 => 169,  220 => 168,  211 => 165,  208 => 164,  204 => 163,  193 => 155,  175 => 140,  170 => 138,  165 => 136,  143 => 119,  45 => 24,  40 => 23,  37 => 13,  35 => 10,  30 => 7,  28 => 4,  23 => 1,);
    }
}
