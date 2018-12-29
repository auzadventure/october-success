<?php

/* C:\Users\Lionel\Dropbox\9_Web_Development\htdocs\local\laravel\successbooks.sg/plugins/grofgraf/contactme/components/contactform/default.htm */
class __TwigTemplate_a55a5066d4070138d20edd36c62e038c7933087bb6744c211c586e96a771e525 extends Twig_Template
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
        echo "<div class=\"confirm-contact-container\">
</div>
<form id=\"contact-form\"
  data-request=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onMailSend\"
  data-request-update=\"'";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::confirm': '.confirm-contact-container'\"
  ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "enableFileUpload", array())) {
            // line 7
            echo "  data-request-files
  ";
        }
        // line 9
        echo "  >
  <div class=\"form-group\">
    <label for=\"name\">
      ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "name", array()), "html", null, true);
        echo "
    </label>
    <input type=\"text\" name=\"name\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
    <label for=\"email\">
      ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "email", array()), "html", null, true);
        echo "
    </label>
    <input type=\"text\" name=\"email\" class=\"form-control\">
  </div>
  ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "enableFileUpload", array())) {
            // line 23
            echo "  <div class=\"form-group\">
    <label for=\"attachment\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "attachment", array()), "html", null, true);
            echo "</label>
    <input type=\"file\" name=\"attachment\" class=\"form-control\">
  </div>
  ";
        }
        // line 28
        echo "  <div class=\"form-group\">
    <label for=\"message\">
      ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "message", array()), "html", null, true);
        echo "
    </label>
    <textarea rows=\"5\" name=\"message_content\" class=\"form-control\"></textarea>
  </div>
  ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "enableCaptcha", array())) {
            // line 35
            echo "    <div class=\"form-group\">
      <label for=\"g-recaptcha\">
        ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "captcha", array()), "html", null, true);
            echo "
      </label>
      <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "captchaSiteKey", array()), "html", null, true);
            echo "\"></div>
    </div>
  ";
        }
        // line 42
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "mailgunSubscribeExist", array())) {
            // line 43
            echo "    <div class=\"form-group\">
      <div class=\"checkbox\">
        <label><input type=\"checkbox\" name=\"maillist_subscribe\" checked>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "maillist", array()), "html", null, true);
            echo "</label>
        <input type=\"hidden\" name=\"confirm_subscribe\" value=\"true\">
      </div>
    </div>
  ";
        }
        // line 50
        echo "  <button class=\"btn btn-primary btn-lg pull-right mt-4\">
    ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "button_text", array()), "html", null, true);
        echo "
  </button>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Lionel\\Dropbox\\9_Web_Development\\htdocs\\local\\laravel\\successbooks.sg/plugins/grofgraf/contactme/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 51,  118 => 50,  110 => 45,  106 => 43,  103 => 42,  97 => 39,  92 => 37,  88 => 35,  86 => 34,  79 => 30,  75 => 28,  68 => 24,  65 => 23,  63 => 22,  56 => 18,  47 => 12,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"confirm-contact-container\">
</div>
<form id=\"contact-form\"
  data-request=\"{{ __SELF__ }}::onMailSend\"
  data-request-update=\"'{{ __SELF__ }}::confirm': '.confirm-contact-container'\"
  {% if __SELF__.enableFileUpload %}
  data-request-files
  {% endif %}
  >
  <div class=\"form-group\">
    <label for=\"name\">
      {{label.name}}
    </label>
    <input type=\"text\" name=\"name\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
    <label for=\"email\">
      {{label.email}}
    </label>
    <input type=\"text\" name=\"email\" class=\"form-control\">
  </div>
  {% if __SELF__.enableFileUpload %}
  <div class=\"form-group\">
    <label for=\"attachment\">{{label.attachment}}</label>
    <input type=\"file\" name=\"attachment\" class=\"form-control\">
  </div>
  {% endif %}
  <div class=\"form-group\">
    <label for=\"message\">
      {{label.message}}
    </label>
    <textarea rows=\"5\" name=\"message_content\" class=\"form-control\"></textarea>
  </div>
  {% if __SELF__.enableCaptcha %}
    <div class=\"form-group\">
      <label for=\"g-recaptcha\">
        {{label.captcha}}
      </label>
      <div class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.captchaSiteKey }}\"></div>
    </div>
  {% endif %}
  {% if __SELF__.mailgunSubscribeExist %}
    <div class=\"form-group\">
      <div class=\"checkbox\">
        <label><input type=\"checkbox\" name=\"maillist_subscribe\" checked>{{label.maillist}}</label>
        <input type=\"hidden\" name=\"confirm_subscribe\" value=\"true\">
      </div>
    </div>
  {% endif %}
  <button class=\"btn btn-primary btn-lg pull-right mt-4\">
    {{label.button_text}}
  </button>
</form>
", "C:\\Users\\Lionel\\Dropbox\\9_Web_Development\\htdocs\\local\\laravel\\successbooks.sg/plugins/grofgraf/contactme/components/contactform/default.htm", "");
    }
}
