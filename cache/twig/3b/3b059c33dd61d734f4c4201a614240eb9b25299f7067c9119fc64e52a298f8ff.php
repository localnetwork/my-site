<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/misc/backtop.html.twig */
class __TwigTemplate_e62200f54cd25d144d185bf3cd39ceb68573f89aab7a27d4c2a03a28f3cb2e12 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'aboveFold' => [$this, 'block_aboveFold'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["backTop"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("header.toTop.arrowStatus")) ? ("enabled") : ("disabled"));
        echo " 
";
        // line 2
        $context["backColor"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("header.toTop.color");
        echo " 

";
        // line 4
        if ((($context["backTop"] ?? null) == "enabled")) {
            // line 5
            echo "
    <div id=\"backTop\" class=\"back-to-top\" style=\"cursor: pointer;\"> 
    </div> 
    
    ";
            // line 10
            echo "    
    ";
            // line 11
            $this->displayBlock('aboveFold', $context, $blocks);
            // line 44
            echo "
    
    ";
            // line 47
            echo "    
    ";
            // line 48
            $this->displayBlock('bottom', $context, $blocks);
        } else {
            // line 53
            echo "    <div arrow-disabled=\"arrow-disabled\"></div>
";
        }
    }

    // line 11
    public function block_aboveFold($context, array $blocks = [])
    {
        // line 12
        echo "        <style>
            #backTop {
                position: fixed;
                bottom: 30px;
                right: 20px; 
                z-index: 999;
                width: 50px;
                height: 50px; 
                border-radius: 3px; 
                background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ3Ny4xNzUgNDc3LjE3NSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDc3LjE3NSA0NzcuMTc1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij48ZyB0cmFuc2Zvcm09Im1hdHJpeCg2LjEyMzIzZS0xNyAxIC0xIDYuMTIzMjNlLTE3IDQ3Ny4xNzUgLTIuODQyMTdlLTE0KSI+PGc+Cgk8cGF0aCBkPSJNMTQ1LjE4OCwyMzguNTc1bDIxNS41LTIxNS41YzUuMy01LjMsNS4zLTEzLjgsMC0xOS4xcy0xMy44LTUuMy0xOS4xLDBsLTIyNS4xLDIyNS4xYy01LjMsNS4zLTUuMywxMy44LDAsMTkuMWwyMjUuMSwyMjUgICBjMi42LDIuNiw2LjEsNCw5LjUsNHM2LjktMS4zLDkuNS00YzUuMy01LjMsNS4zLTEzLjgsMC0xOS4xTDE0NS4xODgsMjM4LjU3NXoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPjwvZz4gPC9zdmc+Cg==');
                background-size: 50%;
                background-position: center;
                background-repeat: no-repeat; 
                opacity: 0;
                visibility: hidden;
                display: block;
                transition: all ease .3s; 
                ";
        // line 29
        if ((($context["backColor"] ?? null) != "")) {
            // line 30
            echo "                    background-color: ";
            echo ($context["backColor"] ?? null);
            echo ";
                ";
        } else {
            // line 32
            echo "                
                    background-color: #333; 
                ";
        }
        // line 35
        echo "            } 
            
            #backTop.show {
                visibility: inherit;
                transition: all ease .3s;
                opacity: .7;
            }
        </style>
    ";
    }

    // line 48
    public function block_bottom($context, array $blocks = [])
    {
        // line 49
        echo "
    ";
        // line 50
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/backtop.js", 1 => ["priority" => 99, "loading" => "defer"]], "method");
        // line 51
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/misc/backtop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 51,  123 => 50,  120 => 49,  117 => 48,  105 => 35,  100 => 32,  94 => 30,  92 => 29,  73 => 12,  70 => 11,  64 => 53,  61 => 48,  58 => 47,  54 => 44,  52 => 11,  49 => 10,  43 => 5,  41 => 4,  36 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set backTop = theme_var('header.toTop.arrowStatus') ? 'enabled' : 'disabled' %} 
{% set backColor = theme_var('header.toTop.color') %} 

{% if backTop == 'enabled' %}

    <div id=\"backTop\" class=\"back-to-top\" style=\"cursor: pointer;\"> 
    </div> 
    
    {# STYLESHEET #}
    
    {% block aboveFold %}
        <style>
            #backTop {
                position: fixed;
                bottom: 30px;
                right: 20px; 
                z-index: 999;
                width: 50px;
                height: 50px; 
                border-radius: 3px; 
                background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ3Ny4xNzUgNDc3LjE3NSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDc3LjE3NSA0NzcuMTc1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij48ZyB0cmFuc2Zvcm09Im1hdHJpeCg2LjEyMzIzZS0xNyAxIC0xIDYuMTIzMjNlLTE3IDQ3Ny4xNzUgLTIuODQyMTdlLTE0KSI+PGc+Cgk8cGF0aCBkPSJNMTQ1LjE4OCwyMzguNTc1bDIxNS41LTIxNS41YzUuMy01LjMsNS4zLTEzLjgsMC0xOS4xcy0xMy44LTUuMy0xOS4xLDBsLTIyNS4xLDIyNS4xYy01LjMsNS4zLTUuMywxMy44LDAsMTkuMWwyMjUuMSwyMjUgICBjMi42LDIuNiw2LjEsNCw5LjUsNHM2LjktMS4zLDkuNS00YzUuMy01LjMsNS4zLTEzLjgsMC0xOS4xTDE0NS4xODgsMjM4LjU3NXoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgZGF0YS1vbGRfY29sb3I9IiMwMDAwMDAiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPjwvZz4gPC9zdmc+Cg==');
                background-size: 50%;
                background-position: center;
                background-repeat: no-repeat; 
                opacity: 0;
                visibility: hidden;
                display: block;
                transition: all ease .3s; 
                {% if backColor != '' %}
                    background-color: {{ backColor }};
                {% else %}
                
                    background-color: #333; 
                {% endif %}
            } 
            
            #backTop.show {
                visibility: inherit;
                transition: all ease .3s;
                opacity: .7;
            }
        </style>
    {% endblock %}

    
    {# SCRIPT #}
    
    {% block bottom %}

    {% do assets.addJs('theme://js/backtop.js', {'priority':99, 'loading':'defer'}) %}
    {% endblock %}
{% else %}
    <div arrow-disabled=\"arrow-disabled\"></div>
{% endif %}", "partials/misc/backtop.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/partials/misc/backtop.html.twig");
    }
}
