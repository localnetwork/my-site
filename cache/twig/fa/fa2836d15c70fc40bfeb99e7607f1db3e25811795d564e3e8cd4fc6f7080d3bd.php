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

/* faqs.html.twig */
class __TwigTemplate_8f2d2640ac589c2bdde1181922e4a20a68f34afb69524d4511599197cb275381 extends \Twig\Template
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
        $context["page_class"] = "node-type-faqs";
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "faqs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        // line 7
        echo "
<section class=\"block-slider\" >
    <div class=\"block-wrapper\">
        ";
        // line 10
        $context["images"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []);
        echo " 
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 12
            echo "        <div class=\"item\"> 
            <img width=\"100%\" src=\"";
            // line 13
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
        // line 15
        echo " 
    </div>
</section>  

<h1 class=\"page-header bgc-dark p30 py70-lg px120-lg text-center text-white fs20 fs34-lg fw700 m0\">
    ";
        // line 20
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "
</h1>




<div class=\"page-content p15 p30-md item-list accordion faq-list\" id=\"accordionExample\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "faq", []), "list", []));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 28
            echo "        ";
            $context["counter"] = ((((isset($context["counter"]) || array_key_exists("counter", $context))) ? (_twig_default_filter(($context["counter"] ?? null), 0)) : (0)) + 1);
            echo " 
        
        <div class=\"item \"> 
          <h2 class=\"item__title mb-0 fs16 fs20-md\">
            <a class=\"d-flex justify-content-between p20 text-white fw700 collapsed\" data-toggle=\"collapse\" data-target=\"#faq-";
            // line 32
            echo ($context["counter"] ?? null);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne\" style=\"cursor: pointer;\">
              ";
            // line 33
            echo $this->getAttribute($context["faq"], "title", []);
            echo "
              
              <i class=\"fa fa-angle-down\"></i>
            </a> 
          </h2>
            
            ";
            // line 39
            if ($this->getAttribute($context["faq"], "body", [])) {
                // line 40
                echo "            
                <div id=\"faq-";
                // line 41
                echo ($context["counter"] ?? null);
                echo "\" class=\"item__body  collapse\" aria-labelledby=\"";
                echo $this->getAttribute($context["faq"], "title", []);
                echo "-";
                echo ($context["counter"] ?? null);
                echo "\" data-parent=\"#accordionExample\">
                    
                    <div class=\"p20 fs16 fs18-md\"> ";
                // line 43
                echo $this->getAttribute($context["faq"], "body", []);
                echo "  </div>
                </div>
            
            ";
            }
            // line 47
            echo "             
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "faqs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 50,  139 => 47,  132 => 43,  123 => 41,  120 => 40,  118 => 39,  109 => 33,  105 => 32,  97 => 28,  93 => 27,  83 => 20,  76 => 15,  61 => 13,  58 => 12,  54 => 11,  50 => 10,  45 => 7,  42 => 6,  37 => 1,  35 => 3,  29 => 1,);
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

{% set page_class = 'node-type-faqs' %}


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




<div class=\"page-content p15 p30-md item-list accordion faq-list\" id=\"accordionExample\">
    {% for faq in page.header.faq.list %}
        {% set counter = ( counter | default(0) ) + 1 %} 
        
        <div class=\"item \"> 
          <h2 class=\"item__title mb-0 fs16 fs20-md\">
            <a class=\"d-flex justify-content-between p20 text-white fw700 collapsed\" data-toggle=\"collapse\" data-target=\"#faq-{{ counter }}\" aria-expanded=\"true\" aria-controls=\"collapseOne\" style=\"cursor: pointer;\">
              {{ faq.title }}
              
              <i class=\"fa fa-angle-down\"></i>
            </a> 
          </h2>
            
            {% if faq.body %}
            
                <div id=\"faq-{{ counter }}\" class=\"item__body  collapse\" aria-labelledby=\"{{ faq.title }}-{{ counter }}\" data-parent=\"#accordionExample\">
                    
                    <div class=\"p20 fs16 fs18-md\"> {{ faq.body }}  </div>
                </div>
            
            {% endif %}
             
        </div>
    {% endfor %}
</div>

{% endblock %}", "faqs.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/faqs.html.twig");
    }
}
