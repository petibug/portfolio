<?php

/* project.html.twig */
class __TwigTemplate_13bd3ad6ce56994b39a5957dee97686b81d3c22e5a384a165dfd85fc2e54a867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "project.html.twig", 1);
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
        // line 10
        $this->loadTemplate("partials/navigation_projects.html.twig", "project.html.twig", 10)->display($context);
        // line 11
        echo "            </div>

            <div class=\"pure-u-4-5\">
                ";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "
                ";
        // line 15
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "

                <div>
                    <ul>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["filename"] => $context["image"]) {
            // line 20
            echo "                    ";
            if (($context["filename"] != $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "project_thumbnail", array()))) {
                // line 21
                echo "                    <li>
                        <div class=\"image-surround\">
                            ";
                // line 23
                echo $this->getAttribute($this->getAttribute($context["image"], "cropResize", array(0 => 300, 1 => 200), "method"), "html", array());
                echo "
                        </div>
                        <div class=\"image-info\">
                            <h2>";
                // line 26
                echo $this->getAttribute($this->getAttribute($context["image"], "meta", array()), "title", array());
                echo "</h2>
                            <p>";
                // line 27
                echo $this->getAttribute($this->getAttribute($context["image"], "meta", array()), "description", array());
                echo "</p>
                        </div>
                    </li>
                    ";
            }
            // line 31
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filename'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    </ul>
                </div>
             </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  85 => 31,  78 => 27,  74 => 26,  68 => 23,  64 => 21,  61 => 20,  57 => 19,  50 => 15,  46 => 14,  41 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
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
                {{page.title}}
                {{ page.content }}

                <div>
                    <ul>
                    {% for filename, image in page.media.images %}
                    {% if filename != site.project_thumbnail %}
                    <li>
                        <div class=\"image-surround\">
                            {{ image.cropResize(300,200).html }}
                        </div>
                        <div class=\"image-info\">
                            <h2>{{ image.meta.title }}</h2>
                            <p>{{ image.meta.description }}</p>
                        </div>
                    </li>
                    {% endif %}
                    {% endfor %}
                    </ul>
                </div>
             </div>
        </div>
{% endblock %}
", "project.html.twig", "E:\\WEBDEV\\PORTFOLIO\\portfolio\\user\\themes\\bb-theme\\templates\\project.html.twig");
    }
}
