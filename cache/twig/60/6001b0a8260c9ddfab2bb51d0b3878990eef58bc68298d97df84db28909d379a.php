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

/* modular/slider.html.twig */
class __TwigTemplate_e208bfea059e6b799c01b532184882c9b1e3f96e37dd34ed6696071ea70d01fd extends \Twig\Template
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
<section class=\"block-slider\" >
    <div class=\"block-wrapper\">
        ";
        // line 4
        $context["images"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []);
        echo " 
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 6
            echo "        <div class=\"item\"> 
            <img width=\"100%\" src=\"";
            // line 7
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
        // line 9
        echo " 
    </div>
</section> ";
    }

    public function getTemplateName()
    {
        return "modular/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  46 => 7,  43 => 6,  39 => 5,  35 => 4,  30 => 1,);
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
<section class=\"block-slider\" >
    <div class=\"block-wrapper\">
        {% set images = page.media.images %} 
        {% for img in images %}
        <div class=\"item\"> 
            <img width=\"100%\" src=\"{{ img.cropZoom(10,10).url }}\" data-lazy-srcset=\"{{ img.cropZoom(767,400).url }} 767w, {{ img.cropZoom(991,600).url }} 991w, {{ img.cropZoom(1920,700).url }} 1920w\"> 
        </div>
        {% endfor %} 
    </div>
</section> ", "modular/slider.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/modular/slider.html.twig");
    }
}
