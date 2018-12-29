<?php

/* C:\Users\Lionel\Dropbox\9_Web_Development\htdocs\local\laravel\successbooks.sg/themes/demo/partials/site/header.htm */
class __TwigTemplate_2f47223bc6acb9cef9c2f7a57637cd6f226590b897a096b881336719cd19a279 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t\t\t<img src=\"";
        // line 12
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/logo-bgblack.png");
        echo "\" alt=\"\" style='height:100%'>
\t\t\t</a>
\t\t</div>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li><a class=\"navbar-link\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\" >How To Buy</a></li>
\t\t\t\t<li><a class=\"navbar-link\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\" >Contact Us</a></li>
\t\t\t
\t\t\t</ul>

 
 
        
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Lionel\\Dropbox\\9_Web_Development\\htdocs\\local\\laravel\\successbooks.sg/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  46 => 16,  39 => 12,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
\t\t\t\t<img src=\"{{ 'home/logo-bgblack.png'|media }}\" alt=\"\" style='height:100%'>
\t\t\t</a>
\t\t</div>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li><a class=\"navbar-link\" href=\"{{ 'contact-us' | page }}\" >How To Buy</a></li>
\t\t\t\t<li><a class=\"navbar-link\" href=\"{{ 'contact-us' | page }}\" >Contact Us</a></li>
\t\t\t
\t\t\t</ul>

 
 
        
    </div>
</nav>", "C:\\Users\\Lionel\\Dropbox\\9_Web_Development\\htdocs\\local\\laravel\\successbooks.sg/themes/demo/partials/site/header.htm", "");
    }
}
