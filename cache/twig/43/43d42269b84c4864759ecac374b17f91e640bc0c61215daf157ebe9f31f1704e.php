<?php

/* partials/header.html.twig */
class __TwigTemplate_ad9defb5c21dee6c972ebf2fa1d66f5117763d8a5b25c31138203bdb31a25f2c extends Twig_Template
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
        echo "<header class=\"header\">
  <div class=\"header--image\" style=\"background-image:url(https://goo.gl/OdjI42);background-color:#000;\">
    <div class=\"row\">
      <div class=\"column small-12\">
        <h1>";
        // line 5
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</h1>
        <h4>";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", array()), "description", array());
        echo "</h4>
      </div>
    </div>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"header\">
  <div class=\"header--image\" style=\"background-image:url(https://goo.gl/OdjI42);background-color:#000;\">
    <div class=\"row\">
      <div class=\"column small-12\">
        <h1>{{ site.title }}</h1>
        <h4>{{ site.metadata.description }}</h4>
      </div>
    </div>
  </div>
</header>
", "partials/header.html.twig", "/Users/mblode/Sites/medium/user/themes/medium/templates/partials/header.html.twig");
    }
}
