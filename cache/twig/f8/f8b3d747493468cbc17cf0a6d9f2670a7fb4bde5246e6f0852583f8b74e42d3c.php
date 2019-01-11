<?php

/* partials/base.html.twig */
class __TwigTemplate_8f1264fa9cbdc0f0059f554b9f33344cc4e5debdabce92a6c32f1b95378d24fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_classes' => array($this, 'block_body_classes'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "    </head>

    <body class=\"";
        // line 34
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
        ";
        // line 35
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 36
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 36)->display($context);
            // line 37
            echo "        ";
        }
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 42
        echo "
        ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "        ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 45
        echo "
        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Bootstrap 4 Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div>

        ";
        // line 52
        $this->displayBlock('bottom', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <meta charset=\"utf-8\" />
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

            ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "
            <title>";
        // line 11
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />

            ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

            ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/font-awesome.min.css", 1 => 99), "method");
        // line 16
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css-compiled/theme.css", 1 => 98), "method");
        // line 17
        echo "            ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 22
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/modernizr-custom.js", 1 => 100), "method");
        // line 23
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/site.js", 1 => array("group" => "bottom")), "method");
        // line 24
        echo "
                ";
        // line 25
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 26
            echo "                    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 27
            echo "                    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 28
            echo "                ";
        }
        // line 29
        echo "            ";
    }

    // line 34
    public function block_body_classes($context, array $blocks = array())
    {
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
    }

    // line 39
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 40
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 40)->display($context);
        // line 41
        echo "        ";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
    }

    // line 44
    public function block_pagination($context, array $blocks = array())
    {
    }

    // line 52
    public function block_bottom($context, array $blocks = array())
    {
        // line 53
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 53,  196 => 52,  191 => 44,  186 => 43,  182 => 41,  179 => 40,  176 => 39,  170 => 34,  166 => 29,  163 => 28,  160 => 27,  157 => 26,  155 => 25,  152 => 24,  149 => 23,  146 => 22,  143 => 21,  140 => 20,  136 => 17,  133 => 16,  130 => 15,  127 => 14,  120 => 30,  118 => 20,  112 => 18,  110 => 14,  105 => 12,  97 => 11,  94 => 10,  92 => 9,  86 => 5,  83 => 4,  77 => 55,  75 => 52,  66 => 45,  63 => 44,  61 => 43,  58 => 42,  56 => 39,  53 => 38,  50 => 37,  47 => 36,  45 => 35,  41 => 34,  37 => 32,  35 => 4,  30 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
    <head>
        {% block head %}
            <meta charset=\"utf-8\" />
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

            {% include 'partials/metadata.html.twig' %}

            <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
            <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" />

            {% block stylesheets %}
                {% do assets.add('theme://css/font-awesome.min.css', 99) %}
                {% do assets.add('theme://css-compiled/theme.css', 98) %}
            {% endblock %}
            {{ assets.css()|raw }}

            {% block javascripts %}
                {% do assets.add('jquery', 101) %}
                {% do assets.add('theme://js/modernizr-custom.js', 100) %}
                {% do assets.add('theme://js/site.js', {group:'bottom'}) %}

                {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                    {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
                    {% do assets.add('theme://js/html5shiv-printshiv.min.js') %}
                {% endif %}
            {% endblock %}
            {{ assets.js()|raw }}
        {% endblock head %}
    </head>

    <body class=\"{% block body_classes %}{{ page.header.body_classes }}{% endblock %}\">
        {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
        {% endif %}

        {% block header_navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        {% block content %}{% endblock %}
        {% block pagination %}{% endblock %}

        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Bootstrap 4 Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div>

        {% block bottom %}
            {{ assets.js('bottom')|raw }}
        {% endblock %}
    </body>
</html>
", "partials/base.html.twig", "E:\\WEB-DEV\\Test\\grav-admin\\user\\themes\\bootstrap4\\templates\\partials\\base.html.twig");
    }
}
