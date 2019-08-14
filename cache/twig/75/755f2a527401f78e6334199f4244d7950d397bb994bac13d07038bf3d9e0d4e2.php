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

/* partials/navigation.html.twig */
class __TwigTemplate_77b3b93a004dfa67d5950cd5734d7d46c7cd96e5628a77d2aa63a9c7adfa43f5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
";
        // line 19
        echo " 

    <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
        <ul class=\"navbar-nav w-100 d-flex justify-content-center\">
            ";
        // line 23
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
            // line 24
            echo "                ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
            ";
        } else {
            // line 26
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 27
                echo "                ";
                if ($this->getAttribute($context["page"], "visible", [])) {
                    // line 28
                    echo "                    ";
                    $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                    // line 29
                    echo "                        ";
                    list($context["ul"], $context["ulend"], $context["expanded"]) =                     ["", "", ""];
                    // line 30
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                        // line 31
                        echo "                                ";
                        if (($this->getAttribute($context["f"], "visible", []) == true)) {
                            // line 32
                            echo "                                
                                 ";
                            // line 33
                            list($context["ul"], $context["ulend"], $context["expanded"]) =                             ["<ul class=\"dropdown-menu w-100\">", "</ul>", " dropdown d-flex flex-wrap align-items-center "];
                            // line 34
                            echo "                                ";
                        }
                        // line 35
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "                                ";
                    $context["activeParent"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                    // line 37
                    echo "                                ";
                    $context["activeChild"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active-trail") : (""));
                    // line 38
                    echo "                                
                                <li class=\"nav-item ";
                    // line 39
                    echo ($context["expanded"] ?? null);
                    echo " ";
                    echo ($context["activeParent"] ?? null);
                    echo "\"><a class=\"nav-link ";
                    echo ($context["activeChild"] ?? null);
                    echo "\" href=\"";
                    echo $this->getAttribute($context["page"], "url", []);
                    echo "\">
                                    ";
                    // line 40
                    echo $this->getAttribute($context["page"], "menu", []);
                    echo "
                                    
                                    
                                    
                                    </a>
                                    ";
                    // line 45
                    if ((($context["expanded"] ?? null) == true)) {
                        // line 46
                        echo "                                        <a href=\"#\" class=\"d-block d-none-md\"  role=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-angle-down\" ></i> 
                                        
                                        </a>
                                    ";
                    }
                    // line 50
                    echo "                                    
                                    
                                    
                                    
                                    
                                    ";
                    // line 55
                    if ((twig_length_filter($this->env, $this->getAttribute($context["page"], "children", [])) > 0)) {
                        // line 56
                        echo "                                        ";
                        echo ($context["ul"] ?? null);
                        echo "
                                         
                                            ";
                        // line 58
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["subpage"]) {
                            // line 59
                            echo "                                                ";
                            if (($this->getAttribute($context["subpage"], "visible", []) == true)) {
                                // line 60
                                echo "                                                  <li class=\"dropdown-item\">
                                                  <a class=\"nav-link dropdown-link ";
                                // line 61
                                echo (($this->getAttribute($context["page"], "url", [])) ? ("1") : ("0"));
                                echo " ";
                                echo ($context["active"] ?? null);
                                echo "\" href=\"";
                                echo $this->getAttribute($context["subpage"], "url", []);
                                echo "\">";
                                echo $this->getAttribute($context["subpage"], "title", []);
                                echo "</a></li>
                                                ";
                            }
                            // line 63
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 64
                        echo "                                        ";
                        echo ($context["ulend"] ?? null);
                        echo "
                                    ";
                    } else {
                        // line 66
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["subpage"]) {
                            // line 67
                            echo "                                        ";
                            if (($this->getAttribute($context["subpage"], "visible", []) == true)) {
                                // line 68
                                echo "                                          <li class=\"nav-item dropdown-item ";
                                echo ($context["activeParent"] ?? null);
                                echo " ";
                                echo (($this->getAttribute($context["page"], "url", [])) ? ("1") : ("0"));
                                echo " \">
                                          <a class=\"dropdown-link ";
                                // line 69
                                echo ($context["activeChild"] ?? null);
                                echo "\" href=\"";
                                echo $this->getAttribute($context["subpage"], "url", []);
                                echo "\">";
                                echo $this->getAttribute($context["subpage"], "title", []);
                                echo "</a></li>
                                        ";
                            }
                            // line 71
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 72
                        echo "                                    ";
                    }
                    // line 73
                    echo "                                </li>
                ";
                }
                // line 75
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "        ";
        }
        // line 77
        echo "        </ul> 
    </div>";
    }

    // line 2
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 5
                echo "        <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
            <a href=\"";
                // line 6
                echo $this->getAttribute($context["p"], "url", []);
                echo "\">
                ";
                // line 7
                if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                    echo "\"></i>";
                }
                // line 8
                echo "                ";
                echo $this->getAttribute($context["p"], "menu", []);
                echo "
            </a>
            ";
                // line 10
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 11
                    echo "                <ul>
                    ";
                    // line 12
                    echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                    echo "
                </ul>
            ";
                }
                // line 15
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 17,  269 => 15,  263 => 12,  260 => 11,  258 => 10,  252 => 8,  246 => 7,  242 => 6,  237 => 5,  234 => 4,  229 => 3,  217 => 2,  212 => 77,  209 => 76,  203 => 75,  199 => 73,  196 => 72,  190 => 71,  181 => 69,  174 => 68,  171 => 67,  166 => 66,  160 => 64,  154 => 63,  143 => 61,  140 => 60,  137 => 59,  133 => 58,  127 => 56,  125 => 55,  118 => 50,  112 => 46,  110 => 45,  102 => 40,  92 => 39,  89 => 38,  86 => 37,  83 => 36,  77 => 35,  74 => 34,  72 => 33,  69 => 32,  66 => 31,  61 => 30,  58 => 29,  55 => 28,  52 => 27,  47 => 26,  41 => 24,  39 => 23,  33 => 19,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
        <li class=\"{{ current_page }}\">
            <a href=\"{{ p.url }}\">
                {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                {{ p.menu }}
            </a>
            {% if p.children.visible.count > 0 %}
                <ul>
                    {{ _self.loop(p) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}

{% endmacro %}
 

    <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
        <ul class=\"navbar-nav w-100 d-flex justify-content-center\">
            {% if theme_config.dropdown.enabled %}
                {{ _self.loop(pages) }}
            {% else %}
            {% for page in pages.children.visible %}
                {% if page.visible %}
                    {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                        {% set ul, ulend, expanded = '', '', '' %}
                            {% for f in page.children %}
                                {% if f.visible == true %}
                                
                                 {% set ul, ulend, expanded = '<ul class=\"dropdown-menu w-100\">', '</ul>', ' dropdown d-flex flex-wrap align-items-center ' %}
                                {% endif %}
                            {% endfor %}
                                {% set activeParent = (page.active or page.activeChild) ? 'active' %}
                                {% set activeChild = (page.active or page.activeChild) ? 'active-trail' %}
                                
                                <li class=\"nav-item {{ expanded }} {{ activeParent }}\"><a class=\"nav-link {{ activeChild }}\" href=\"{{ page.url }}\">
                                    {{ page.menu }}
                                    
                                    
                                    
                                    </a>
                                    {% if expanded == true %}
                                        <a href=\"#\" class=\"d-block d-none-md\"  role=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-angle-down\" ></i> 
                                        
                                        </a>
                                    {% endif %}
                                    
                                    
                                    
                                    
                                    
                                    {% if page.children|length > 0 %}
                                        {{ ul }}
                                         
                                            {% for subpage in page.children %}
                                                {% if subpage.visible == true %}
                                                  <li class=\"dropdown-item\">
                                                  <a class=\"nav-link dropdown-link {{ page.url ? '1' : '0' }} {{ active }}\" href=\"{{ subpage.url }}\">{{ subpage.title }}</a></li>
                                                {% endif %}
                                            {% endfor %}
                                        {{ ulend }}
                                    {% else %}
                                    {% for subpage in page.children %}
                                        {% if subpage.visible == true %}
                                          <li class=\"nav-item dropdown-item {{ activeParent }} {{ page.url ? '1' : '0' }} \">
                                          <a class=\"dropdown-link {{ activeChild }}\" href=\"{{ subpage.url }}\">{{ subpage.title }}</a></li>
                                        {% endif %}
                                    {% endfor %}
                                    {% endif %}
                                </li>
                {% endif %}
            {% endfor %}
        {% endif %}
        </ul> 
    </div>", "partials/navigation.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/partials/navigation.html.twig");
    }
}
