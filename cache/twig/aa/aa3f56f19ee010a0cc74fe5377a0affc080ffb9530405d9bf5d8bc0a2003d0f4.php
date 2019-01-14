<?php

/* project_home.html.twig */
class __TwigTemplate_0bd162628e460a0fd86599147ada7434f2d1460036994da55c463d569d7181a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "project_home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"pure-g\">
        <div class=\"pure-u-1-5\">
        ";
        // line 7
        $this->loadTemplate("partials/navigation_projects.html.twig", "project_home.html.twig", 7)->display($context);
        // line 8
        echo "        </div>

        <div class=\"pure-u-4-5\">
            <div>
            ";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </div>
            <div>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 16
            echo "                ";
            if ($this->getAttribute($this->getAttribute($context["p"], "media", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "project_thumbnail", array()), array(), "array")) {
                // line 17
                echo "                    <a href=\"";
                echo $this->getAttribute($context["p"], "url", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "media", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "project_thumbnail", array()), array(), "array"), "url", array());
                echo "\" title=\"\" /> </a>
                ";
            }
            // line 18
            echo "        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </div>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "project_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  65 => 18,  57 => 17,  54 => 16,  50 => 15,  44 => 12,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}

    <div class=\"pure-g\">
        <div class=\"pure-u-1-5\">
        {% include 'partials/navigation_projects.html.twig' %}
        </div>

        <div class=\"pure-u-4-5\">
            <div>
            {{ page.content }}
            </div>
            <div>
            {% for p in page.collection %}
                {% if p.media[site.project_thumbnail] %}
                    <a href=\"{{ p.url }}\"><img src=\"{{ p.media[site.project_thumbnail].url }}\" title=\"\" /> </a>
                {% endif %}        
            {% endfor %}
            </div>
        </div>

    </div>
{% endblock %}
", "project_home.html.twig", "E:\\WEBDEV\\PORTFOLIO\\portfolio\\user\\themes\\bb-theme\\templates\\project_home.html.twig");
    }
}
