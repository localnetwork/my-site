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

/* service.html.twig */
class __TwigTemplate_b6f3f144bc492a07057e45fc5e32febd4521284919d58cdeb8597448b3c675a5 extends \Twig\Template
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
        $context["page_class"] = "node-type-service";
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "service.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        echo " 
    <section class=\"block-slider\" >
        <div class=\"block-wrapper\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "slider", []));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 9
            echo "            <div class=\"item\"> 
                <img width=\"100%\" src=\"";
            // line 10
            echo $this->getAttribute($this->getAttribute($context["img"], "cropZoom", [0 => 10, 1 => 10], "method"), "url", []);
            echo "\" data-lazy-srcset=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["img"], "name", []), [], "array"), "cropZoom", [0 => 767, 1 => 400], "method"), "url", []);
            echo " 767w, ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["img"], "name", []), [], "array"), "cropZoom", [0 => 991, 1 => 600], "method"), "url", []);
            echo " 991w, ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["img"], "name", []), [], "array"), "cropZoom", [0 => 1920, 1 => 700], "method"), "url", []);
            echo " 1920w\"> 
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
        </div>
    </section>   
<h1 class=\"page-header bgc-dark p30 py70-lg px120-lg text-center text-white fs20 fs34-lg fw700 m0\">
    ";
        // line 16
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "
</h1> 


";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", [])) {
            // line 21
            echo "<h2 class=\"page-subtitle text-center tc-orange fs20 fs29-lg fw700 mt50\">
    ";
            // line 22
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []);
            echo "
</h2>
";
        }
        // line 25
        echo "
<div class=\"d-flex flex-wrap py30 py50-md px20 px30-md fs16 fs18-md \">
    <div class=\"page-content col-md-8\"> 
        ";
        // line 28
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo " 
    </div>
    <div class=\"col-md-4\">
        ";
        // line 31
        $this->loadTemplate("call-to-action.html.twig", "service.html.twig", 31)->display($context);
        echo " 
    </div> 
</div>
";
    }

    public function getTemplateName()
    {
        return "service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  100 => 28,  95 => 25,  89 => 22,  86 => 21,  84 => 20,  77 => 16,  71 => 12,  56 => 10,  53 => 9,  49 => 8,  42 => 5,  37 => 1,  35 => 3,  29 => 1,);
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

{% set page_class = 'node-type-service' %}

{% block content %} 
    <section class=\"block-slider\" >
        <div class=\"block-wrapper\">
            {% for img in page.header.slider %}
            <div class=\"item\"> 
                <img width=\"100%\" src=\"{{ img.cropZoom(10,10).url }}\" data-lazy-srcset=\"{{ page.media[img.name].cropZoom(767,400).url }} 767w, {{ page.media[img.name].cropZoom(991,600).url }} 991w, {{ page.media[img.name].cropZoom(1920,700).url }} 1920w\"> 
            </div>
            {% endfor %} 
        </div>
    </section>   
<h1 class=\"page-header bgc-dark p30 py70-lg px120-lg text-center text-white fs20 fs34-lg fw700 m0\">
    {{ page.header.title }}
</h1> 


{% if page.header.subtitle %}
<h2 class=\"page-subtitle text-center tc-orange fs20 fs29-lg fw700 mt50\">
    {{ page.header.subtitle }}
</h2>
{% endif %}

<div class=\"d-flex flex-wrap py30 py50-md px20 px30-md fs16 fs18-md \">
    <div class=\"page-content col-md-8\"> 
        {{ page.content }} 
    </div>
    <div class=\"col-md-4\">
        {% include 'call-to-action.html.twig' %} 
    </div> 
</div>
{% endblock %}", "service.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/service.html.twig");
    }
}
