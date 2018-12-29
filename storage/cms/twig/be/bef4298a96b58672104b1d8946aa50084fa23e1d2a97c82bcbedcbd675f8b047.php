<?php

/* C:\Users\Lionel\Dropbox\9_Web_Development\htdocs\local\laravel\successbooks.sg/themes/demo/pages/product.htm */
class __TwigTemplate_3006c11b1a86d66d79047ae93335bd9b6e757fc7f35b8c3bf3abfa673b5a266b extends Twig_Template
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
        // line 2
        $context["Product"] = twig_get_attribute($this->env, $this->source, ($context["ProductPage"] ?? null), "get", array(), "method");
        // line 3
        echo "
<div class=\"container\">

<h1>Selection</h1>

<a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo " \" class='btn btn-default'> 
\t<i class='icon-home'></i>Home
</a>


<div data-id=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", array()), "html", null, true);
        echo "\">

    <h2>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", array()), "html", null, true);
        echo "</h2>

\t
\t<div class=\"row\">
\t<div class=\"col-md-3\" style='padding:20px'>
\t\t";
        // line 20
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "preview_image", array()))) {
            // line 21
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "preview_image", array()), "path", array()), "html", null, true);
            echo "\" 
\t\t\t\t\tclass='product-image-large'
\t\t\t\t\ttitle=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "preview_image", array()), "title", array()), "html", null, true);
            echo "\" 
\t\t\t\t\talt=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "preview_image", array()), "description", array()), "html", null, true);
            echo "\">
         ";
        }
        // line 25
        echo "\t
\t</div>\t
\t
\t<div class=\"col-md-9\">
\t
\t<h5>Description</h5>
\t<p> ";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description", array());
        echo " </p>
\t\t
\t\t
\t <h4>Price</h4>
\t 

\t\t";
        // line 37
        $context["Offer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "offer", array()), "first", array(), "method");
        // line 38
        echo "\t\t

\t\t";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["Offer"] ?? null), "isNotEmpty", array(), "method")) {
            echo "  
\t\t\t\t<h3>Price: \$";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Offer"] ?? null), "price", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Offer"] ?? null), "currency", array()), "html", null, true);
            echo "</h3>

\t\t\t\t
\t\t\t\t
\t\t";
        }
        // line 45
        echo "\t\t\t
\t
\t\t

\t</div>
\t
\t</div>

\t

</div>




</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Lionel\\Dropbox\\9_Web_Development\\htdocs\\local\\laravel\\successbooks.sg/themes/demo/pages/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 45,  97 => 41,  93 => 40,  89 => 38,  87 => 37,  78 => 31,  70 => 25,  65 => 24,  61 => 23,  55 => 21,  53 => 20,  45 => 15,  40 => 13,  32 => 8,  25 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Get product item #}
{% set Product = ProductPage.get() %}

<div class=\"container\">

<h1>Selection</h1>

<a href=\"{{ 'home'|page }} \" class='btn btn-default'> 
\t<i class='icon-home'></i>Home
</a>


<div data-id=\"{{ Product.id }}\">

    <h2>{{ Product.name }}</h2>

\t
\t<div class=\"row\">
\t<div class=\"col-md-3\" style='padding:20px'>
\t\t{% if Product.preview_image is not empty %}
                    <img src=\"{{ Product.preview_image.path }}\" 
\t\t\t\t\tclass='product-image-large'
\t\t\t\t\ttitle=\"{{ Product.preview_image.title }}\" 
\t\t\t\t\talt=\"{{ Product.preview_image.description }}\">
         {% endif %}\t
\t</div>\t
\t
\t<div class=\"col-md-9\">
\t
\t<h5>Description</h5>
\t<p> {{ Product.description | raw }} </p>
\t\t
\t\t
\t <h4>Price</h4>
\t 

\t\t{% set Offer = Product.offer.first() %}
\t\t

\t\t{% if Offer.isNotEmpty()%}  
\t\t\t\t<h3>Price: \${{ Offer.price }} {{ Offer.currency }}</h3>

\t\t\t\t
\t\t\t\t
\t\t{% endif %}\t\t\t
\t
\t\t

\t</div>
\t
\t</div>

\t

</div>




</div>", "C:\\Users\\Lionel\\Dropbox\\9_Web_Development\\htdocs\\local\\laravel\\successbooks.sg/themes/demo/pages/product.htm", "");
    }
}
