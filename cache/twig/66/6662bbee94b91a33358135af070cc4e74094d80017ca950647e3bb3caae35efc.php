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

/* about.html.twig */
class __TwigTemplate_1ba1c7ccea8725c3936b4ae73065268db2f19b7f8366b1c641133ef348418717 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "<section class=\"block-slider\" >
    <div class=\"block-wrapper\">
        ";
        // line 7
        $context["images"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []);
        echo " 
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 9
            echo "        <div class=\"item\"> 
            <img width=\"100%\" src=\"";
            // line 10
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
        // line 12
        echo " 
    </div>
</section> 


<h1 class=\"page-header m0 text-center py50 px100 bgc-dark text-white text-uppercase fw700\">
    ";
        // line 18
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "
</h1>
<div class=\"page-content p30\">
    ";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "     
</div>

";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  80 => 18,  72 => 12,  57 => 10,  54 => 9,  50 => 8,  46 => 7,  42 => 5,  39 => 4,  29 => 1,);
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


<h1 class=\"page-header m0 text-center py50 px100 bgc-dark text-white text-uppercase fw700\">
    {{ page.header.title }}
</h1>
<div class=\"page-content p30\">
    {{ page.content }}     
</div>

{% endblock %}", "about.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/about.html.twig");
    }
}
