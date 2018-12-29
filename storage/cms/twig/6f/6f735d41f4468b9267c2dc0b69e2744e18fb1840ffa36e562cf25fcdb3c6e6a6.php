<?php

/* C:\Users\Lionel\Dropbox\9_Web_Development\htdocs\local\laravel\successbooks.sg/themes/demo/pages/home.htm */
class __TwigTemplate_6786d77be0caaffeb80c22b5ee7b9b2c68d6b6f73e2c44a22137114cb86e37e7 extends Twig_Template
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

<div class=\"logo\" style='padding: 50px 0 0'>
\t<img src=\"";
        // line 4
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/successbooks_logo.png");
        echo "\" alt=\"\" style='width:500px'>
\t<h4>The No.1 place for business self improvement</h4>
\t<hr>
</div>

<img src=\"";
        // line 9
        echo $this->extensions['System\Twig\Extension']->mediaFilter("home/slider_successstartshere.jpg");
        echo "\" style='margin-bottom:10px' />

<hr />

<h2>Get Serious With Success</h2>

<div class=\"row\">

<div class=\"col-md-6\">

<p>Walk away from the 97% and join the 3% of people achieving success. This is the networking and 
success book club that introduces you to the books that make a difference.
</p>

<p>We introduce the greatest and the best books to expand you mind</p>

</div>
<div class=\"col-md-6\">


<blockquote style='background-color:#efefef'>Measure a serious student of success by the books in his library that he reads.
\t\t<small>- Jim Rohn</small>
</blockquote>

</div>


</div>



<h2>Read Our Latest</h2>
\t
\t
<div class=\"row\">

\t";
        // line 45
        $context["Products"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", array(), "method"), "sort", array(0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", array(), "method")), "method"), "active", array(), "method"), "category", array(0 => 3), "method");
        // line 46
        echo "\t
\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 48
            echo "\t
\t<div class=\"col-md-3\">
\t\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\" data-id=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", array()), "html", null, true);
            echo "\">
\t\t\t<a href=\"product/";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "slug", array()), "html", null, true);
            echo "\">
                <h4>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", array()), "html", null, true);
            echo "</h4>
\t\t\t </a>
\t\t\t <div class=\"\" style='text-align:center'>
\t\t\t ";
            // line 56
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["Product"], "preview_image", array()))) {
                // line 57
                echo "\t\t\t 
\t\t\t\t<a href=\"product/";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "slug", array()), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Product"], "preview_image", array()), "path", array()), "html", null, true);
                echo "\" 
\t\t\t\t\tstyle='padding: 10px; width:60%'
\t\t\t\t\ttitle=\"";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Product"], "preview_image", array()), "title", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Product"], "preview_image", array()), "description", array()), "html", null, true);
                echo "\">
\t\t\t\t</a> 
\t\t\t ";
            }
            // line 63
            echo "\t\t\t 
\t\t\t </div>

\t\t\t <p style='padding: 5px 10px'>";
            // line 66
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->source, $context["Product"], "preview_text", array()), 100));
            echo "</p>
\t\t\t 
 
\t\t</div>
\t\t
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t
\t</div>

\t

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Lionel\\Dropbox\\9_Web_Development\\htdocs\\local\\laravel\\successbooks.sg/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 74,  130 => 66,  125 => 63,  117 => 61,  112 => 59,  108 => 58,  105 => 57,  103 => 56,  97 => 53,  93 => 52,  89 => 51,  84 => 48,  80 => 47,  77 => 46,  75 => 45,  36 => 9,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

<div class=\"logo\" style='padding: 50px 0 0'>
\t<img src=\"{{'home/successbooks_logo.png'|media}}\" alt=\"\" style='width:500px'>
\t<h4>The No.1 place for business self improvement</h4>
\t<hr>
</div>

<img src=\"{{'home/slider_successstartshere.jpg'|media }}\" style='margin-bottom:10px' />

<hr />

<h2>Get Serious With Success</h2>

<div class=\"row\">

<div class=\"col-md-6\">

<p>Walk away from the 97% and join the 3% of people achieving success. This is the networking and 
success book club that introduces you to the books that make a difference.
</p>

<p>We introduce the greatest and the best books to expand you mind</p>

</div>
<div class=\"col-md-6\">


<blockquote style='background-color:#efefef'>Measure a serious student of success by the books in his library that he reads.
\t\t<small>- Jim Rohn</small>
</blockquote>

</div>


</div>



<h2>Read Our Latest</h2>
\t
\t
<div class=\"row\">

\t{% set Products = ProductList.make().sort(ProductList.getSorting()).active().category(3) %}
\t
\t{% for Product in Products %}
\t
\t<div class=\"col-md-3\">
\t\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\" data-id=\"{{ Product.id }}\">
\t\t\t<a href=\"product/{{ Product.slug }}\">
                <h4>{{ Product.name }}</h4>
\t\t\t </a>
\t\t\t <div class=\"\" style='text-align:center'>
\t\t\t {% if Product.preview_image is not empty %}
\t\t\t 
\t\t\t\t<a href=\"product/{{ Product.slug }}\">
                    <img src=\"{{ Product.preview_image.path }}\" 
\t\t\t\t\tstyle='padding: 10px; width:60%'
\t\t\t\t\ttitle=\"{{ Product.preview_image.title }}\" alt=\"{{ Product.preview_image.description }}\">
\t\t\t\t</a> 
\t\t\t {% endif %}\t\t\t 
\t\t\t </div>

\t\t\t <p style='padding: 5px 10px'>{{ str_limit(Product.preview_text,100) }}</p>
\t\t\t 
 
\t\t</div>
\t\t
\t\t</div>
\t</div>
\t{% endfor %}
\t
\t</div>

\t

</div>", "C:\\Users\\Lionel\\Dropbox\\9_Web_Development\\htdocs\\local\\laravel\\successbooks.sg/themes/demo/pages/home.htm", "");
    }
}
