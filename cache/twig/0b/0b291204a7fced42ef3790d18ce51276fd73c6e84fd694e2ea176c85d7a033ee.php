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

/* form.html.twig */
class __TwigTemplate_ee5f24ae805c8c5417e9758f7936df4ce36d990293da7c5c80ee241d1ca34a30 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<section class=\"block-slider\" >
    <div class=\"block-wrapper\">
        ";
        // line 6
        $context["images"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []);
        echo " 
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 8
            echo "        <div class=\"item\"> 
            <img width=\"100%\" src=\"";
            // line 9
            echo $this->getAttribute($this->getAttribute($context["img"], "cropZoom", [0 => 10, 1 => 10], "method"), "url", []);
            echo "\" data-lazy-srcset=\"";
            echo $this->getAttribute($this->getAttribute($context["img"], "cropZoom", [0 => 767, 1 => 400], "method"), "url", []);
            echo " 767w, ";
            echo $this->getAttribute($this->getAttribute($context["img"], "cropZoom", [0 => 991, 1 => 600], "method"), "url", []);
            echo " 991w, ";
            echo $this->getAttribute($this->getAttribute($context["img"], "cropZoom", [0 => 1920, 1 => 700], "method"), "url", []);
            echo " 1920w\"> 
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo " 
    </div>
</section>  

<h1 class=\"page-header bgc-dark p30 py70-lg px120-lg text-center text-white fs20 fs34-lg fw700 m0\">
    ";
        // line 16
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "
</h1> 
<div class=\"o-hidden\">
    <div class=\"row\"> 
        <div class=\"col-12 col-lg-6 p30\">
            ";
        // line 21
        $this->loadTemplate("forms/form.html.twig", "form.html.twig", 21)->display($context);
        echo " 
        </div>
        <div class=\"page-content p30 col-12 col-lg-6\" style=\"background-color:#f5f5f5;\">
            ";
        // line 24
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            
            
            ";
        // line 27
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "location", [])), "name", []), [], "array"), "url", [])) {
            // line 28
            echo "                <div class=\"field-location\">
                    <a class=\"btn bgc-orange text-white text-uppercase fw700 fs18 ls1 py15 px23 btn-default d-inline-block\" target=\"_blank\" href=\"";
            // line 29
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "location", [])), "name", []), [], "array"), "url", []);
            echo "\">
                        <i class=\"fa fa-map-marker mr-1\"></i> View Location
                    </a>
                </div>
            
            ";
        }
        // line 35
        echo "        </div>
    </div> 
</div>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  104 => 29,  101 => 28,  99 => 27,  93 => 24,  87 => 21,  79 => 16,  72 => 11,  57 => 9,  54 => 8,  50 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
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

{% block content %}
<section class=\"block-slider\" >
    <div class=\"block-wrapper\">
        {% set images = page.media.images %} 
        {% for img in images %}
        <div class=\"item\"> 
            <img width=\"100%\" src=\"{{ img.cropZoom(10,10).url }}\" data-lazy-srcset=\"{{ img.cropZoom(767,400).url }} 767w, {{ img.cropZoom(991,600).url }} 991w, {{ img.cropZoom(1920,700).url }} 1920w\"> 
        </div>
        {% endfor %} 
    </div>
</section>  

<h1 class=\"page-header bgc-dark p30 py70-lg px120-lg text-center text-white fs20 fs34-lg fw700 m0\">
    {{ page.header.title }}
</h1> 
<div class=\"o-hidden\">
    <div class=\"row\"> 
        <div class=\"col-12 col-lg-6 p30\">
            {% include \"forms/form.html.twig\" %} 
        </div>
        <div class=\"page-content p30 col-12 col-lg-6\" style=\"background-color:#f5f5f5;\">
            {{ page.content }}
            
            
            {% if page.media[header.location|first.name].url %}
                <div class=\"field-location\">
                    <a class=\"btn bgc-orange text-white text-uppercase fw700 fs18 ls1 py15 px23 btn-default d-inline-block\" target=\"_blank\" href=\"{{ page.media[header.location|first.name].url }}\">
                        <i class=\"fa fa-map-marker mr-1\"></i> View Location
                    </a>
                </div>
            
            {% endif %}
        </div>
    </div> 
</div>
{% endblock %}\t ", "form.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/form.html.twig");
    }
}
