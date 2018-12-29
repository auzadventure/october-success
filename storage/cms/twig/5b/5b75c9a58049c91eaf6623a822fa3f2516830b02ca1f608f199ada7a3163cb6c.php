<?php

/* C:\Users\Lionel\Dropbox\9_Web_Development\htdocs\local\laravel\successbooks.sg/themes/demo/pages/contact-us.htm */
class __TwigTemplate_bdd3ee27aa8e4eda66b1a48360cd17269390d61c5e8e2dbdfcf017a09102fc3e extends Twig_Template
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
        echo "<div class=\"container\">
<h2>How To Purchase</h2>

<h4>Book Pick Up</h4>
The Company
331 North Bridge Road


<hr>
<div class=\"row\">

<div class=\"col-md-6\">


<div class=\"panel panel-default\">
<div class=\"panel-heading\">
\tEmail Contact Us Form
</div>
<div class=\"panel-body\">
\t";
        // line 20
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 21
        echo "</div>


</div>




</div>

</div>



</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Lionel\\Dropbox\\9_Web_Development\\htdocs\\local\\laravel\\successbooks.sg/themes/demo/pages/contact-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 21,  44 => 20,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
<h2>How To Purchase</h2>

<h4>Book Pick Up</h4>
The Company
331 North Bridge Road


<hr>
<div class=\"row\">

<div class=\"col-md-6\">


<div class=\"panel panel-default\">
<div class=\"panel-heading\">
\tEmail Contact Us Form
</div>
<div class=\"panel-body\">
\t{% component 'contactForm' %}
</div>


</div>




</div>

</div>



</div>", "C:\\Users\\Lionel\\Dropbox\\9_Web_Development\\htdocs\\local\\laravel\\successbooks.sg/themes/demo/pages/contact-us.htm", "");
    }
}
