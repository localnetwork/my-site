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

/* partials/media-list-wrapper__sidebar.html.twig */
class __TwigTemplate_df53969bc7d89d719ebcceb8340221260df177b75c291700592d9dbce56d2720 extends \Twig\Template
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
        // line 40
        echo "
";
        // line 41
        $context["macro"] = $this;
        // line 42
        echo "
<div class=\"pages-list-container clear block size-1-4\">
    <h5>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES"));
        echo "</h5>
    <div class=\"mediapicker-scroll\">
        <ul class=\"pages-list depth-0\">
            ";
        // line 47
        echo $context["macro"]->getloop(($context["pages"] ?? null), 0, $context);
        echo "
        </ul>
    </div>
</div>
";
    }

    // line 1
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "
    ";
            // line 4
            $context["separator"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["twig_vars"] ?? null), "config", [], "array"), "system", []), "param_sep", []);
            // line 5
            echo "    ";
            $context["base_url"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative", [], "array");
            // line 6
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_simple", [], "array");
            // line 7
            echo "    ";
            $context["admin_route"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_route", [], "array");
            // line 8
            echo "    ";
            $context["admin_lang"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_lang", [], "array");
            // line 9
            echo "    ";
            $context["warn"] = $this->getAttribute(($context["twig_vars"] ?? null), "warn", [], "array");
            // line 10
            echo "
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 12
                echo "        ";
                $context["page_route"] = twig_trim_filter($this->getAttribute($context["p"], "rawRoute", []), "/");
                // line 13
                echo "        ";
                if (($this->getAttribute($context["p"], "language", []) && ($this->getAttribute($context["p"], "language", []) != ($context["admin_lang"] ?? null)))) {
                    // line 14
                    echo "            ";
                    $context["page_url"] = ((((((($context["base_url_simple"] ?? null) . "/") . $this->getAttribute($context["p"], "language", [])) . "/") . ($context["admin_route"] ?? null)) . "/pages/") . ($context["page_route"] ?? null));
                    // line 15
                    echo "        ";
                } else {
                    // line 16
                    echo "            ";
                    $context["page_url"] = ((($context["base_url"] ?? null) . "/pages/") . ($context["page_route"] ?? null));
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", []), "html", null, true);
                echo "\">
            <div class=\"row\">
                <span ";
                // line 21
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", [0 => 0], "method"), "count", []) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo " class=\"hint--bottom\">
                <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 22
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", [0 => 0], "method"), "count", []) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", [])) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", [])) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", [])) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", [])) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>

                <span data-hint=\"";
                // line 25
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "routes", []), "default", [])) : ($this->getAttribute($context["p"], "route", []))), "html", null, true);
                echo "\" class=\"hint--bottom\">
                    <a data-page=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", []), "html", null, true);
                echo "\" class=\"js__page-link page-link\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", []), "html", null, true);
                echo "</a>
                </span>

                <span class=\"page-home\">";
                // line 29
                echo (($this->getAttribute($context["p"], "home", [])) ? ("<i class=\"fa fa-home\"></i>") : (""));
                echo "</span>
            </div>
            ";
                // line 31
                if (($this->getAttribute($this->getAttribute($context["p"], "children", [], "method"), "count", []) > 0)) {
                    // line 32
                    echo "
                <ul class=\"depth-";
                    // line 33
                    echo twig_escape_filter($this->env, (($context["depth"] ?? null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                    ";
                    // line 34
                    echo $context["self"]->getloop($context["p"], (($context["depth"] ?? null) + 1), ($context["twig_vars"] ?? null));
                    echo "
                </ul>
            ";
                }
                // line 37
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "partials/media-list-wrapper__sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 37,  162 => 34,  158 => 33,  155 => 32,  153 => 31,  148 => 29,  140 => 26,  136 => 25,  128 => 22,  124 => 21,  119 => 19,  116 => 18,  113 => 17,  110 => 16,  107 => 15,  104 => 14,  101 => 13,  98 => 12,  94 => 11,  91 => 10,  88 => 9,  85 => 8,  82 => 7,  79 => 6,  76 => 5,  74 => 4,  71 => 3,  68 => 2,  54 => 1,  45 => 47,  39 => 44,  35 => 42,  33 => 41,  30 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro loop(page, depth, twig_vars) %}
    {% import _self as self %}

    {% set separator = twig_vars['config'].system.param_sep %}
    {% set base_url = twig_vars['base_url_relative'] %}
    {% set base_url_simple = twig_vars['base_url_simple'] %}
    {% set admin_route = twig_vars['admin_route'] %}
    {% set admin_lang = twig_vars['admin_lang'] %}
    {% set warn = twig_vars['warn'] %}

    {% for p in page.children() %}
        {% set page_route =  p.rawRoute|trim('/') %}
        {% if p.language and p.language != admin_lang %}
            {% set page_url = base_url_simple ~ '/' ~ p.language ~ '/' ~ admin_route ~ '/pages/' ~ page_route %}
        {% else %}
            {% set page_url = base_url ~ '/pages/' ~ page_route  %}
        {% endif %}

        <li class=\"page-item\" data-nav-id=\"{{ p.route }}\">
            <div class=\"row\">
                <span {{ p.children(0).count > 0 ? 'data-toggle=\"children\"' : ''}} class=\"hint--bottom\">
                <i class=\"page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}\"></i>
                </span>

                <span data-hint=\"{{ p.header.routes.default ?: p.route }}\" class=\"hint--bottom\">
                    <a data-page=\"{{ p.route }}\" class=\"js__page-link page-link\" href=\"#\">{{ p.title }}</a>
                </span>

                <span class=\"page-home\">{{ p.home ? '<i class=\"fa fa-home\"></i>' }}</span>
            </div>
            {% if p.children().count > 0 %}

                <ul class=\"depth-{{ depth + 1 }}\" style=\"display:none;\">
                    {{ self.loop(p, depth + 1, twig_vars) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as macro %}

<div class=\"pages-list-container clear block size-1-4\">
    <h5>{{ \"PLUGIN_ADMIN.PAGES\"|tu|e }}</h5>
    <div class=\"mediapicker-scroll\">
        <ul class=\"pages-list depth-0\">
            {{ macro.loop(pages, 0, _context) }}
        </ul>
    </div>
</div>
", "partials/media-list-wrapper__sidebar.html.twig", "/home/prestigelabelsco/public_html/user/plugins/admin/themes/grav/templates/partials/media-list-wrapper__sidebar.html.twig");
    }
}
