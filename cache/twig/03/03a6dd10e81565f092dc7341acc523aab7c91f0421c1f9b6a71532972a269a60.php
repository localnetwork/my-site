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

/* features.html.twig */
class __TwigTemplate_6bdbd41eaa481f7b789a6e27461decc36fb127c56acaade406cbf0093efe7e43 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["page_class"] = "page-features";
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "features.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 16
        echo " 
<h1 class=\"page-header bgc-dark p30 py70-lg px120-lg text-center text-white fs20 fs34-lg fw700 m0\">
    ";
        // line 18
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "
</h1> 


<div class=\"py30 py50-md px20 px30-md\">
    <div class=\"row\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "features", []));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            echo " 
            <div class=\"item col-6 col-md-4 col-lg-3 mb20\">
                <div class=\"item-wrapper\"> 
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["feature"], "image", []));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 28
                echo "                        <div class=\"item__image\">
                            <img class=\"w-100\" alt=\"";
                // line 29
                echo $this->getAttribute($context["feature"], "title", []);
                echo "\" src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["img"], "name", []), [], "array"), "resize", [0 => 370, 1 => 370], "method"), "url", []);
                echo "\">
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                    
                    
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["feature"], "pdf", []));
            foreach ($context['_seq'] as $context["_key"] => $context["pdf"]) {
                // line 35
                echo "                        <div class=\"item__rm text-center mt20\">
                            <a class=\"link-download bgc-orange text-white text-uppercase fw700 fs14 ls1 py15 px23 btn-default d-inline-block\" href=\"";
                // line 36
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["pdf"], "name", []), [], "array"), "url", []);
                echo "\" download=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["pdf"], "name", []), [], "array"), "url", []);
                echo "\">
                                <i class=\"fa fa-download mr-1\"></i> Download File
                            </a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdf'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                </div>
            </div>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 45,  108 => 41,  95 => 36,  92 => 35,  88 => 34,  84 => 32,  73 => 29,  70 => 28,  66 => 27,  58 => 24,  49 => 18,  45 => 16,  42 => 5,  37 => 1,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set page_class = \"page-features\" %}

{% block content %}
{#<section class=\"block-slider\" >#}
{#    <div class=\"block-wrapper\">#}
{#        {% set images = page.media.images %} #}
{#        {% for img in images %}#}
{#        <div class=\"item\"> #}
{#            <img width=\"100%\" src=\"{{ img.cropZoom(10,10).url }}\" data-lazy-srcset=\"{{ img.cropZoom(767,400).url }} 767w, {{ img.cropZoom(991,600).url }} 991w, {{ img.cropZoom(1920,700).url }} 1920w\"> #}
{#        </div>#}
{#        {% endfor %} #}
{#    </div>#}
{#</section>  #}
 
<h1 class=\"page-header bgc-dark p30 py70-lg px120-lg text-center text-white fs20 fs34-lg fw700 m0\">
    {{ page.header.title }}
</h1> 


<div class=\"py30 py50-md px20 px30-md\">
    <div class=\"row\">
        {% for feature in header.features %} 
            <div class=\"item col-6 col-md-4 col-lg-3 mb20\">
                <div class=\"item-wrapper\"> 
                    {% for img in feature.image %}
                        <div class=\"item__image\">
                            <img class=\"w-100\" alt=\"{{ feature.title }}\" src=\"{{ page.media[img.name].resize(370,370).url }}\">
                        </div>
                    {% endfor %}
                    
                    
                    {% for pdf in feature.pdf %}
                        <div class=\"item__rm text-center mt20\">
                            <a class=\"link-download bgc-orange text-white text-uppercase fw700 fs14 ls1 py15 px23 btn-default d-inline-block\" href=\"{{ page.media[pdf.name].url }}\" download=\"{{ page.media[pdf.name].url }}\">
                                <i class=\"fa fa-download mr-1\"></i> Download File
                            </a>
                        </div>
                    {% endfor %}
                </div>
            </div>
            
        {% endfor %}
    </div>
</div>


{% endblock %}", "features.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/features.html.twig");
    }
}
