<?php

/* partials/navigation_projects.html.twig */
class __TwigTemplate_cbdb59ec3f76509e74d2dab30c590ee60c8709774ed1d9bce40dd75b76e5510b extends Twig_Template
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
        echo "<nav>
    <ul>

            ";
        // line 4
        $context["progress"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@page.children" => "/projects"), "order" => array("by" => "date", "dir" => "desc"))), "method");
        // line 5
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["progress"]) ? $context["progress"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 6
            echo "                ";
            $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("selected") : (""));
            // line 7
            echo "                <li class=\"";
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
                    <a href=\"";
            // line 8
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">
                        ";
            // line 9
            if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                echo "\"></i>";
            }
            // line 10
            echo "                        ";
            echo $this->getAttribute($context["p"], "title", array());
            echo "
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    

    </ul>
</nav>

";
    }

    public function getTemplateName()
    {
        return "partials/navigation_projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  49 => 10,  43 => 9,  39 => 8,  34 => 7,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav>
    <ul>

            {% set progress = page.collection({'items':{'@page.children': '/projects'},'order': {'by': 'date', 'dir': 'desc'}}) %}
            {% for p in progress %}
                {% set current_page = (p.active or p.activeChild) ? 'selected' : '' %}
                <li class=\"{{ current_page }}\">
                    <a href=\"{{ p.url }}\">
                        {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                        {{ p.title }}
                    </a>
                </li>
            {% endfor %}

    

    </ul>
</nav>

", "partials/navigation_projects.html.twig", "E:\\WEBDEV\\PORTFOLIO\\portfolio\\user\\themes\\bb-theme\\templates\\partials\\navigation_projects.html.twig");
    }
}
