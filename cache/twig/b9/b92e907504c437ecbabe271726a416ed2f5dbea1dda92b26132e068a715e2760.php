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

/* partials/misc/global-critical.html.twig */
class __TwigTemplate_61cb362a964ec564cbada447e1518374f3066d9cc827f6b546d915e5c80e693c extends \Twig\Template
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
        $context["preloader"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("preloader")) ? ("1") : ("0"));
        echo " 

<style>
";
        // line 4
        if ((($context["preloader"] ?? null) == "1")) {
            // line 5
            echo "/* PRELOADER OPTION */
.preloader {
    position: fixed;
    display: flex;
    align-items: center;
    top: 0;
    left: 0;
    z-index: 9999;
    background-color: #ffffff;
    height: 100%; 
    width: 100%;
    justify-content: center; 
    transition: all ease .7s; 
}
.preloader span {
    border: 5px solid #d0d0d0;
      animation: spin 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
      border-top: 5px solid #2474A9;
      border-radius: 50%;
      width: 50px;
      height: 50px;
}
.is-page-loaded .preloader {
    opacity: 0;
    visibility: hidden;
    transition: all ease .7s;
}
/* END PRELOADER */

";
        }
        // line 35
        echo "

/* INSERT YOUR GLOBAL CRITICAL CSS HERE */
*, ::after, ::before {
    box-sizing: border-box;
}
img {
    max-width: 100%; 
    height: auto;
}

/* END GLOBAL CRITICAL */ 


/* BLOCKS */ 


/* ANIMATIONS */
@keyframes spin {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>";
    }

    public function getTemplateName()
    {
        return "partials/misc/global-critical.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 35,  38 => 5,  36 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set preloader = theme_var('preloader') ? '1' : '0' %} 

<style>
{% if preloader == '1' %}
/* PRELOADER OPTION */
.preloader {
    position: fixed;
    display: flex;
    align-items: center;
    top: 0;
    left: 0;
    z-index: 9999;
    background-color: #ffffff;
    height: 100%; 
    width: 100%;
    justify-content: center; 
    transition: all ease .7s; 
}
.preloader span {
    border: 5px solid #d0d0d0;
      animation: spin 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
      border-top: 5px solid #2474A9;
      border-radius: 50%;
      width: 50px;
      height: 50px;
}
.is-page-loaded .preloader {
    opacity: 0;
    visibility: hidden;
    transition: all ease .7s;
}
/* END PRELOADER */

{% endif %}


/* INSERT YOUR GLOBAL CRITICAL CSS HERE */
*, ::after, ::before {
    box-sizing: border-box;
}
img {
    max-width: 100%; 
    height: auto;
}

/* END GLOBAL CRITICAL */ 


/* BLOCKS */ 


/* ANIMATIONS */
@keyframes spin {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>", "partials/misc/global-critical.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/partials/misc/global-critical.html.twig");
    }
}
