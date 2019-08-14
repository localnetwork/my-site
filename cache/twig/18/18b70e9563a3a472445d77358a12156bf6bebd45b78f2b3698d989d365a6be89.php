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

/* modular/services.html.twig */
class __TwigTemplate_16b94bd3e0cbd62ce13b10608f997ee15438667a33fb53c3f83c642514592060 extends \Twig\Template
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
        echo "<section class=\"block-services py50 o-hidden\">
    <div class=\"container\">
        <h2 class=\"block__title text-center fs25 fs40-md mb40 text-uppercase\">
            ";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "
        </h2>
        
        
        <div class=\"item-list rn-20\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/services"], "method"), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 10
            echo "            
    
            
            ";
            // line 13
            echo $this->getAttribute($this->getAttribute($context["child"], "media", []), $this->getAttribute($this->getAttribute(($context["header"] ?? null), "slider", []), "name", []), [], "array");
            echo "
            
            
            
            ";
            // line 17
            $context["featured"] = (($this->getAttribute($this->getAttribute($context["child"], "header", []), "featured", [])) ? ("1") : ("0"));
            echo " 
            ";
            // line 18
            $context["childImage"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["child"], "media", []), "images", []));
            echo " 
            
            
            
            ";
            // line 22
            if ((($context["featured"] ?? null) == 1)) {
                echo " 
                <div class=\"item col-12 col-sm-6 col-lg-4 px20 mb50\">
                    <div class=\"item-wrapper text-center\">
                        
                        <h3 class=\"item__title matchHeight fw700 fs18 fs25-md mb20\"><a href=\"";
                // line 26
                echo $this->getAttribute($context["child"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["child"], "title", []);
                echo "</a></h3>
                            
                            <div class=\"item__image\">
                                ";
                // line 29
                $context["imgCheck"] = (($this->getAttribute($this->getAttribute($context["child"], "header", []), "featured_image", [])) ? ("1") : ("0"));
                // line 30
                echo "                                
                                
                                ";
                // line 32
                $context["a"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["child"], "header", []), "slider", [])), "name", []);
                // line 33
                echo "                                
                                
                                ";
                // line 35
                if ((($context["imgCheck"] ?? null) == 1)) {
                    // line 36
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "header", []), "featured_image", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["imagesuploaded"]) {
                        // line 37
                        echo "                                 
                                 
                                  
                                    <figure class=\"graf-figure\">
                                        <a href=\"";
                        // line 41
                        echo $this->getAttribute($context["child"], "url", []);
                        echo "\">
                                      <div class=\"aspectRatioPlaceholder\">
                                        <div class=\"aspectRatioPlaceholder-fill\"></div>
                                        <div class=\"progressiveMedia lazyload\" data-width=\"210\" data-height=\"210\">
                                          <img class=\"progressiveMedia-thumbnail\" src=\"";
                        // line 45
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "media", []), $this->getAttribute($context["imagesuploaded"], "name", []), [], "array"), "cropZoom", [0 => 10, 1 => 10], "method"), "url", []);
                        echo "\" width=\"10\" height=\"10\" />
                                          <canvas class=\"progressiveMedia-canvas\"></canvas>
                                          
                                          <img class=\"progressiveMedia-image lazyload\" data-srcset=\"";
                        // line 48
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "media", []), $this->getAttribute($context["imagesuploaded"], "name", []), [], "array"), "cropZoom", [0 => 300, 1 => 300], "method"), "url", []);
                        echo " 1920w\" width=\"210\" height=\"210\" />
                                        </div>
                                      </div>
                                      </a>
                                    </figure>
                                 ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagesuploaded'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "                                
                                ";
                } else {
                    // line 56
                    echo "                                    <figure class=\"graf-figure\">
                                        <a href=\"";
                    // line 57
                    echo $this->getAttribute($context["child"], "url", []);
                    echo "\">
                                      <div class=\"aspectRatioPlaceholder\">
                                        <div class=\"aspectRatioPlaceholder-fill\"></div>
                                        <div class=\"progressiveMedia lazyload\" data-width=\"210\" data-height=\"210\">
                                          <img class=\"progressiveMedia-thumbnail\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" width=\"10\" height=\"10\" />
                                          <canvas class=\"progressiveMedia-canvas\"></canvas>
                                          
                                          <img class=\"progressiveMedia-image lazyload\" data-srcset=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 1920w\" width=\"210\" height=\"210\" />
                                        </div>
                                      </div>
                                      </a>
                                    </figure> 
                                ";
                }
                // line 70
                echo "                                 
                                
                                
                                <img src=\"";
                // line 73
                echo $this->getAttribute($this->getAttribute($context["child"], "media", []), $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "featured_image", [])), "name", []), [], "array");
                echo "\">  
                                
                                
                                 
                                
                                    
                                
                            </div>
                            
                            
                                
                            <div class=\"item__description text-center py20 lh30 fs15 fs16-md\"> 
                                ";
                // line 85
                echo \Grav\Common\Utils::truncate($this->getAttribute($this->getAttribute($context["child"], "header", []), "shortdesc", []), 150);
                echo "
                            </div>
                            
                            <div class=\"item__rm text-center\">
                                <a class=\"d-inline-block py13 px29 fs14 fw700 text-white bgc-orange btn-default text-uppercase\" href=\"";
                // line 89
                echo $this->getAttribute($context["child"], "url", []);
                echo "\">Learn More</a>
                            </div>
                    </div>
                    </div>
            ";
            }
            // line 94
            echo "            
            
            
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "   
        </div>
    </div>
</section> ";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 98,  193 => 94,  185 => 89,  178 => 85,  163 => 73,  158 => 70,  142 => 57,  139 => 56,  135 => 54,  123 => 48,  117 => 45,  110 => 41,  104 => 37,  99 => 36,  97 => 35,  93 => 33,  91 => 32,  87 => 30,  85 => 29,  77 => 26,  70 => 22,  63 => 18,  59 => 17,  52 => 13,  47 => 10,  43 => 9,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"block-services py50 o-hidden\">
    <div class=\"container\">
        <h2 class=\"block__title text-center fs25 fs40-md mb40 text-uppercase\">
            {{ page.title }}
        </h2>
        
        
        <div class=\"item-list rn-20\">
            {% for child in page.find('/services').children %}
            
    
            
            {{ child.media[header.slider.name] }}
            
            
            
            {% set featured = child.header.featured ? '1' : '0' %} 
            {% set childImage = child.media.images|first %} 
            
            
            
            {% if featured == 1 %} 
                <div class=\"item col-12 col-sm-6 col-lg-4 px20 mb50\">
                    <div class=\"item-wrapper text-center\">
                        
                        <h3 class=\"item__title matchHeight fw700 fs18 fs25-md mb20\"><a href=\"{{ child.url}}\">{{ child.title }}</a></h3>
                            
                            <div class=\"item__image\">
                                {% set imgCheck = child.header.featured_image ? '1' : '0' %}
                                
                                
                                {% set a = child.header.slider|first.name %}
                                
                                
                                {% if imgCheck == 1%}
                                    {% for imagesuploaded in child.header.featured_image %}
                                 
                                 
                                  
                                    <figure class=\"graf-figure\">
                                        <a href=\"{{ child.url}}\">
                                      <div class=\"aspectRatioPlaceholder\">
                                        <div class=\"aspectRatioPlaceholder-fill\"></div>
                                        <div class=\"progressiveMedia lazyload\" data-width=\"210\" data-height=\"210\">
                                          <img class=\"progressiveMedia-thumbnail\" src=\"{{ child.media[imagesuploaded.name].cropZoom(10,10).url }}\" width=\"10\" height=\"10\" />
                                          <canvas class=\"progressiveMedia-canvas\"></canvas>
                                          
                                          <img class=\"progressiveMedia-image lazyload\" data-srcset=\"{{ child.media[imagesuploaded.name].cropZoom(300,300).url }} 1920w\" width=\"210\" height=\"210\" />
                                        </div>
                                      </div>
                                      </a>
                                    </figure>
                                 {% endfor %}
                                
                                {% else %}
                                    <figure class=\"graf-figure\">
                                        <a href=\"{{ child.url}}\">
                                      <div class=\"aspectRatioPlaceholder\">
                                        <div class=\"aspectRatioPlaceholder-fill\"></div>
                                        <div class=\"progressiveMedia lazyload\" data-width=\"210\" data-height=\"210\">
                                          <img class=\"progressiveMedia-thumbnail\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" width=\"10\" height=\"10\" />
                                          <canvas class=\"progressiveMedia-canvas\"></canvas>
                                          
                                          <img class=\"progressiveMedia-image lazyload\" data-srcset=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== 1920w\" width=\"210\" height=\"210\" />
                                        </div>
                                      </div>
                                      </a>
                                    </figure> 
                                {% endif %}
                                 
                                
                                
                                <img src=\"{{ child.media[header.featured_image|first.name] }}\">  
                                
                                
                                 
                                
                                    
                                
                            </div>
                            
                            
                                
                            <div class=\"item__description text-center py20 lh30 fs15 fs16-md\"> 
                                {{ child.header.shortdesc|truncate(150)  }}
                            </div>
                            
                            <div class=\"item__rm text-center\">
                                <a class=\"d-inline-block py13 px29 fs14 fw700 text-white bgc-orange btn-default text-uppercase\" href=\"{{ child.url}}\">Learn More</a>
                            </div>
                    </div>
                    </div>
            {% endif %}
            
            
            
            
        {% endfor %}   
        </div>
    </div>
</section> ", "modular/services.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/modular/services.html.twig");
    }
}
