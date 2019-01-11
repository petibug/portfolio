<?php

/* README.md.twig */
class __TwigTemplate_e222a106c65176c36d905548b4bc4ab0191925ad8cfa82677f3bc3a6d4c100aa extends Twig_Template
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
        echo "# ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "name", array()));
        echo " Theme

The **";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "name", array()));
        echo "** Theme is for [Grav CMS](http://github.com/getgrav/grav).  This README.md file should be modified to describe the features, installation, configuration, and general usage of this theme.

## Description

";
        // line 7
        echo $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "description", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "README.md.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("# {{ component.name|titleize }} Theme

The **{{ component.name|titleize }}** Theme is for [Grav CMS](http://github.com/getgrav/grav).  This README.md file should be modified to describe the features, installation, configuration, and general usage of this theme.

## Description

{{ component.description }}
", "README.md.twig", "E:\\WEB-DEV\\Test\\grav-admin\\user\\plugins\\devtools\\components\\theme\\pure-blank\\README.md.twig");
    }
}
