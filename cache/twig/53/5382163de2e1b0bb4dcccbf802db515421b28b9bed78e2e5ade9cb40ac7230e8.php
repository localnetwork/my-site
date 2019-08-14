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

/* partials/base.html.twig */
class __TwigTemplate_d181e72ee10809be9f91efb4324346249494843bf43474cf0941ff32b0637025 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'aboveFold' => [$this, 'block_aboveFold'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "
";
        // line 3
        $context["loadCSS"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("loadCSS")) ? ("1") : ("0"));
        echo " 
";
        // line 4
        $context["preloader"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("preloader")) ? ("1") : ("0"));
        echo " 

";
        // line 6
        $context["page_class"] = ($context["page_class"] ?? null);
        echo " 


<!DOCTYPE html>
<html lang=\"";
        // line 10
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
<head>
";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 97
        echo "</head>
<body id=\"body\" class=\"body is-page-loading ";
        // line 98
        echo ((($this->getAttribute(($context["page"] ?? null), "url", []) == "/")) ? ("front") : ("not-front"));
        echo " ";
        echo ($context["page_class"] ?? null);
        echo " ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo " \"> 


";
        // line 101
        if ((($context["preloader"] ?? null) == "1")) {
            // line 102
            echo "<div class=\"preloader\">
    <span></span> 
</div>

";
        }
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('header', $context, $blocks);
        // line 129
        echo "

";
        // line 131
        $this->displayBlock('body', $context, $blocks);
        // line 137
        echo "


";
        // line 140
        $this->displayBlock('footer', $context, $blocks);
        // line 161
        echo "

";
        // line 163
        if ((($context["loadCSS"] ?? null) == "1")) {
            // line 164
            echo "<script>
    !function(t){\"use strict\";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement(\"link\").relList.supports(\"preload\")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){var e=t.media||\"all\";function a(){t.addEventListener?t.removeEventListener(\"load\",a):t.attachEvent&&t.detachEvent(\"onload\",a),t.setAttribute(\"onload\",null),t.media=e}t.addEventListener?t.addEventListener(\"load\",a):t.attachEvent&&t.attachEvent(\"onload\",a),setTimeout(function(){t.rel=\"stylesheet\",t.media=\"only x\"}),setTimeout(a,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName(\"link\"),n=0;n<a.length;n++){var o=a[n];\"preload\"!==o.rel||\"style\"!==o.getAttribute(\"as\")||o.getAttribute(\"data-loadcss\")||(o.setAttribute(\"data-loadcss\",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener(\"load\",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent(\"onload\",function(){e.poly(),t.clearInterval(a)})}\"undefined\"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}(\"undefined\"!=typeof global?global:this);
</script> 

";
        }
        // line 169
        echo "
";
        // line 170
        $this->loadTemplate("partials/misc/backtop.html.twig", "partials/base.html.twig", 170)->display($context);
        // line 171
        echo "


";
        // line 174
        $this->displayBlock('bottom', $context, $blocks);
        // line 186
        echo " 

";
        // line 189
        echo $this->getAttribute(($context["assets"] ?? null), "js", []);
        echo "

</body>";
    }

    // line 12
    public function block_head($context, array $blocks = [])
    {
        // line 13
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 14
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 18
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 18)->display($context);
        // line 19
        echo "     
    
    ";
        // line 21
        $context["favicon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc(((($context["favicon"] ?? null)) ? ("favicon") : ("favicon")));
        // line 22
        echo "    
    ";
        // line 23
        if (($context["favicon"] ?? null)) {
            // line 24
            echo "    
    ";
            // line 25
            $context["favicon_file"] = $this->getAttribute(twig_first($this->env, ($context["favicon"] ?? null)), "name", []);
            // line 26
            echo "    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://favicon/" . ($context["favicon_file"] ?? null)));
            echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
            // line 27
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://favicon/" . ($context["favicon_file"] ?? null)));
            echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
            // line 28
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://favicon/" . ($context["favicon_file"] ?? null)));
            echo "\">
    ";
        } else {
            // line 30
            echo "    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://apple-touch-icon.png");
            echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
            // line 31
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://favicon-32x32.png");
            echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
            // line 32
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://favicon-16x16.png");
            echo "\">
    ";
        }
        // line 34
        echo "    
    
    
    <!-- PRELOADING FONTS -->
    ";
        // line 38
        $this->loadTemplate("partials/misc/preload-fonts.html.twig", "partials/base.html.twig", 38)->display($context);
        // line 39
        echo "    
    <!-- END PRELOADING FONTS -->
   
    <link rel=\"canonical\" href=\"";
        // line 42
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />
    
    ";
        // line 45
        echo "    ";
        $this->loadTemplate("partials/misc/global-critical.html.twig", "partials/base.html.twig", 45)->display($context);
        // line 46
        echo "    
    ";
        // line 48
        echo "    ";
        $this->displayBlock('aboveFold', $context, $blocks);
        // line 51
        echo "

   
    
    
    ";
        // line 57
        echo "    
    ";
        // line 58
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 72
        echo " 
    
    ";
        // line 74
        if ((($context["loadCSS"] ?? null) == "1")) {
            // line 75
            echo "        ";
            echo $this->getAttribute(($context["assets"] ?? null), "css", [0 => "assets-css", 1 => ["rel" => "preload", "as" => "style", "onload" => "this.rel=\"stylesheet\""]], "method");
            echo " 
        <noscript>
    
        ";
            // line 78
            echo $this->getAttribute(($context["assets"] ?? null), "css", [0 => "assets-css"], "method");
            echo " 
        
        </noscript>
    ";
        } else {
            // line 82
            echo "        ";
            echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
            echo "
    ";
        }
        // line 84
        echo "    
    
    
    
    

";
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "
";
    }

    // line 48
    public function block_aboveFold($context, array $blocks = [])
    {
        // line 49
        echo "        ";
        echo ($context["aboveFold"] ?? null);
        echo "
    ";
    }

    // line 58
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 59
        echo "        ";
        if ((($context["loadCSS"] ?? null) == "0")) {
            // line 60
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://libraries/bootstrap/css/bootstrap.min.css"], "method");
            // line 61
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://libraries/font-awesome/css/font-awesome.css"], "method");
            // line 62
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://libraries/slick/slick/slick.css"], "method");
            // line 63
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://libraries/pure-media/css/style.min.css"], "method");
            echo "  
            ";
            // line 64
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css"], "method");
            echo " 
        ";
        } else {
            // line 66
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://libraries/bootstrap/css/bootstrap.min.css", 1 => ["group" => "assets-css"]], "method");
            // line 67
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://libraries/font-awesome/css/font-awesome.css", 1 => ["group" => "assets-css"]], "method");
            // line 68
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://libraries/slick/slick/slick.css", 1 => ["group" => "assets-css"]], "method");
            // line 69
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://libraries/pure-media/css/style.min.css", 1 => ["group" => "assets-css"]], "method");
            // line 70
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css", 1 => ["group" => "assets-css"]], "method");
            echo " 
        ";
        }
        // line 72
        echo "    ";
    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        // line 91
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 92
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 93
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
    }

    // line 108
    public function block_header($context, array $blocks = [])
    {
        // line 109
        echo "    <header class=\"header navbar-light\">
        <nav class=\"navbar p0 py10-lg px30-lg navbar-expand-md flex-wrap justify-content-between\">
            <div class=\"navbar-header d-flex flex-wrap align-items-center py15 py0-lg justify-content-center justify-content-between justify-content-md-center\">
                ";
        // line 112
        $this->loadTemplate("partials/misc/logo.html.twig", "partials/base.html.twig", 112)->display($context);
        // line 113
        echo "            
                <button class=\"navbar-toggler x collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mainNavbar\" aria-controls=\"mainNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
             
            <div class=\"nav-right\"> 
                ";
        // line 122
        $this->loadTemplate("social.html.twig", "partials/base.html.twig", 122)->display($context);
        echo " 
                
                ";
        // line 124
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 124)->display($context);
        echo " 
            </div>
        </nav>
    </header>
";
    }

    // line 131
    public function block_body($context, array $blocks = [])
    {
        // line 132
        echo "    <main id=\"main-content\" class=\"main-content\">
        ";
        // line 133
        $this->displayBlock('content', $context, $blocks);
        // line 134
        echo "    </main>
     
";
    }

    // line 133
    public function block_content($context, array $blocks = [])
    {
    }

    // line 140
    public function block_footer($context, array $blocks = [])
    {
        // line 141
        echo "    <footer class=\"footer text-center bgc-dark d-block text-white mt30\">
        <section class=\"block-quote bgc-orange py45\">
            <div class=\"container\">
                <div class=\"d-flex flex-wrap justify-content-center align-items-center\">
                    <h2 class=\"block__title fs20 fs34-md mb15 mb0-sm\">
                        Get a quote for your project
                    </h2>
                    <div class=\"block__rm text-uppercase pl20 pl100-md\">
                        <a class=\"btn-default d-inline-block text-white fs14 fw700 px29 py13\" href=\"/contact-us\">Contact Us Today</a>
                    </div>
                </div>
            </div>
        </section> 
        
        
        <div class=\"footer-credits py20\">
            &lt; code / &gt; with <i style=\"color:red;\" class=\"fa fa-heart fa-pulse\"></i> by <a class=\"fw700\" href=\"http://halcyonwebdesign.com.ph\" target=\"_blank\" style=\"color: #00ace8;\">Halcyon Web Design</a> 
        </div>
    </footer>
";
    }

    // line 174
    public function block_bottom($context, array $blocks = [])
    {
        // line 175
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 176
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://libraries/bootstrap_addons/popper.min.js", 1 => ["priority" => 99, "loading" => "defer"]], "method");
        // line 177
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://libraries/bootstrap/js/bootstrap.min.js", 1 => ["priority" => 99, "loading" => "defer"]], "method");
        echo " 
    ";
        // line 178
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://libraries/slick/slick/slick.js", 1 => ["priority" => 99, "loading" => "defer"]], "method");
        echo "  
    ";
        // line 179
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://libraries/jqueryvalidation/jquery.validate.min.js", 1 => ["priority" => 99, "loading" => "defer"]], "method");
        echo "  
    ";
        // line 180
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://libraries/pure-media/progressive-image-loading.js", 1 => ["priority" => 99, "loading" => "defer"]], "method");
        echo "  
    ";
        // line 181
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://libraries/lazysizes/lazysizes.min.js", 1 => ["priority" => 99, "loading" => "defer"]], "method");
        echo "  
    ";
        // line 182
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://libraries/jquery-match-height/jquery.matchHeight.js", 1 => ["priority" => 99, "loading" => "defer"]], "method");
        echo "  
    ";
        // line 183
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/script.js", 1 => ["priority" => 98, "loading" => "defer"]], "method");
        // line 184
        echo "    
     
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 184,  471 => 183,  467 => 182,  463 => 181,  459 => 180,  455 => 179,  451 => 178,  446 => 177,  443 => 176,  440 => 175,  437 => 174,  414 => 141,  411 => 140,  406 => 133,  400 => 134,  398 => 133,  395 => 132,  392 => 131,  383 => 124,  378 => 122,  367 => 113,  365 => 112,  360 => 109,  357 => 108,  352 => 93,  349 => 92,  346 => 91,  343 => 90,  339 => 72,  333 => 70,  330 => 69,  327 => 68,  324 => 67,  321 => 66,  316 => 64,  311 => 63,  308 => 62,  305 => 61,  302 => 60,  299 => 59,  296 => 58,  289 => 49,  286 => 48,  281 => 95,  279 => 90,  271 => 84,  265 => 82,  258 => 78,  251 => 75,  249 => 74,  245 => 72,  243 => 58,  240 => 57,  233 => 51,  230 => 48,  227 => 46,  224 => 45,  219 => 42,  214 => 39,  212 => 38,  206 => 34,  201 => 32,  197 => 31,  192 => 30,  187 => 28,  183 => 27,  178 => 26,  176 => 25,  173 => 24,  171 => 23,  168 => 22,  166 => 21,  162 => 19,  160 => 18,  149 => 14,  146 => 13,  143 => 12,  136 => 189,  132 => 186,  130 => 174,  125 => 171,  123 => 170,  120 => 169,  113 => 164,  111 => 163,  107 => 161,  105 => 140,  100 => 137,  98 => 131,  94 => 129,  92 => 108,  89 => 107,  82 => 102,  80 => 101,  70 => 98,  67 => 97,  65 => 12,  60 => 10,  53 => 6,  48 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}

{% set loadCSS = theme_var('loadCSS') ? '1' : '0' %} 
{% set preloader = theme_var('preloader') ? '1' : '0' %} 

{% set page_class = page_class %} 


<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}
     
    
    {% set favicon = theme_var(favicon ? 'favicon' : 'favicon') %}
    
    {% if favicon %}
    
    {% set favicon_file = (favicon|first).name %}
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ url('theme://favicon/' ~ favicon_file)  }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ url('theme://favicon/' ~ favicon_file)  }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ url('theme://favicon/' ~ favicon_file)  }}\">
    {% else %}
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ url('theme://apple-touch-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ url('theme://favicon-32x32.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ url('theme://favicon-16x16.png') }}\">
    {% endif %}
    
    
    
    <!-- PRELOADING FONTS -->
    {% include 'partials/misc/preload-fonts.html.twig' %}
    
    <!-- END PRELOADING FONTS -->
   
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    
    {# YOUR CRITICAL CSS HERE #}
    {% include 'partials/misc/global-critical.html.twig' %}
    
    {# YOUR ABOVE THE FOLD PER PAGE #}
    {% block aboveFold %}
        {{ aboveFold }}
    {% endblock %}


   
    
    
    {# EXECUTE CSS ASSETS HERE #}
    
    {% block stylesheets %}
        {% if loadCSS == '0' %}
            {% do assets.addCss('theme://libraries/bootstrap/css/bootstrap.min.css') %}
            {% do assets.addCss('theme://libraries/font-awesome/css/font-awesome.css') %}
            {% do assets.addCss('theme://libraries/slick/slick/slick.css' ) %}
            {% do assets.addCss('theme://libraries/pure-media/css/style.min.css') %}  
            {% do assets.addCss('theme://css/style.css') %} 
        {% else %}
            {% do assets.addCss('theme://libraries/bootstrap/css/bootstrap.min.css', {'group':'assets-css'}) %}
            {% do assets.addCss('theme://libraries/font-awesome/css/font-awesome.css', {'group':'assets-css'}) %}
            {% do assets.addCss('theme://libraries/slick/slick/slick.css', {'group':'assets-css'} ) %}
            {% do assets.addCss('theme://libraries/pure-media/css/style.min.css', {'group':'assets-css'} ) %}
            {% do assets.addCss('theme://css/style.css', {'group':'assets-css'}) %} 
        {% endif %}
    {% endblock %} 
    
    {% if loadCSS == '1' %}
        {{ assets.css('assets-css', {'rel':'preload', 'as':'style', 'onload':'this.rel=\"stylesheet\"'}) }} 
        <noscript>
    
        {{ assets.css('assets-css') }} 
        
        </noscript>
    {% else %}
        {{ assets.css() }}
    {% endif %}
    
    
    
    
    

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
{% endblock %}

{% endblock head%}
</head>
<body id=\"body\" class=\"body is-page-loading {{ page.url == \"/\" ? 'front' : 'not-front'  }} {{ page_class }} {{ page.header.body_classes }} \"> 


{% if preloader == '1' %}
<div class=\"preloader\">
    <span></span> 
</div>

{% endif %}

{% block header %}
    <header class=\"header navbar-light\">
        <nav class=\"navbar p0 py10-lg px30-lg navbar-expand-md flex-wrap justify-content-between\">
            <div class=\"navbar-header d-flex flex-wrap align-items-center py15 py0-lg justify-content-center justify-content-between justify-content-md-center\">
                {% include 'partials/misc/logo.html.twig' %}
            
                <button class=\"navbar-toggler x collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mainNavbar\" aria-controls=\"mainNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
             
            <div class=\"nav-right\"> 
                {% include 'social.html.twig' %} 
                
                {% include 'partials/navigation.html.twig' %} 
            </div>
        </nav>
    </header>
{% endblock %}


{% block body %}
    <main id=\"main-content\" class=\"main-content\">
        {% block content %}{% endblock %}
    </main>
     
{% endblock %}



{% block footer %}
    <footer class=\"footer text-center bgc-dark d-block text-white mt30\">
        <section class=\"block-quote bgc-orange py45\">
            <div class=\"container\">
                <div class=\"d-flex flex-wrap justify-content-center align-items-center\">
                    <h2 class=\"block__title fs20 fs34-md mb15 mb0-sm\">
                        Get a quote for your project
                    </h2>
                    <div class=\"block__rm text-uppercase pl20 pl100-md\">
                        <a class=\"btn-default d-inline-block text-white fs14 fw700 px29 py13\" href=\"/contact-us\">Contact Us Today</a>
                    </div>
                </div>
            </div>
        </section> 
        
        
        <div class=\"footer-credits py20\">
            &lt; code / &gt; with <i style=\"color:red;\" class=\"fa fa-heart fa-pulse\"></i> by <a class=\"fw700\" href=\"http://halcyonwebdesign.com.ph\" target=\"_blank\" style=\"color: #00ace8;\">Halcyon Web Design</a> 
        </div>
    </footer>
{% endblock %}


{% if loadCSS == '1' %}
<script>
    !function(t){\"use strict\";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement(\"link\").relList.supports(\"preload\")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){var e=t.media||\"all\";function a(){t.addEventListener?t.removeEventListener(\"load\",a):t.attachEvent&&t.detachEvent(\"onload\",a),t.setAttribute(\"onload\",null),t.media=e}t.addEventListener?t.addEventListener(\"load\",a):t.attachEvent&&t.attachEvent(\"onload\",a),setTimeout(function(){t.rel=\"stylesheet\",t.media=\"only x\"}),setTimeout(a,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName(\"link\"),n=0;n<a.length;n++){var o=a[n];\"preload\"!==o.rel||\"style\"!==o.getAttribute(\"as\")||o.getAttribute(\"data-loadcss\")||(o.setAttribute(\"data-loadcss\",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener(\"load\",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent(\"onload\",function(){e.poly(),t.clearInterval(a)})}\"undefined\"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}(\"undefined\"!=typeof global?global:this);
</script> 

{% endif %}

{% include 'partials/misc/backtop.html.twig' %}



{% block bottom %}
    {% do assets.addJs('jquery', 100) %}
    {% do assets.addJs('theme://libraries/bootstrap_addons/popper.min.js',{'priority':99, 'loading':'defer'}) %}
    {% do assets.addJs('theme://libraries/bootstrap/js/bootstrap.min.js',{'priority':99, 'loading':'defer'}) %} 
    {% do assets.addJs('theme://libraries/slick/slick/slick.js',{'priority':99, 'loading':'defer'}) %}  
    {% do assets.addJs('theme://libraries/jqueryvalidation/jquery.validate.min.js',{'priority':99, 'loading':'defer'}) %}  
    {% do assets.addJs('theme://libraries/pure-media/progressive-image-loading.js',{'priority':99, 'loading':'defer'}) %}  
    {% do assets.addJs('theme://libraries/lazysizes/lazysizes.min.js',{'priority':99, 'loading':'defer'}) %}  
    {% do assets.addJs('theme://libraries/jquery-match-height/jquery.matchHeight.js',{'priority':99, 'loading':'defer'}) %}  
    {% do assets.addJs('theme://js/script.js', {'priority':98, 'loading':'defer'}) %}
    
     
{% endblock %} 

{# EXECUTE JS HERE #}
{{ assets.js|raw }}

</body>", "partials/base.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/partials/base.html.twig");
    }
}
