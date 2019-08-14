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

/* error.html.twig */
class __TwigTemplate_71f7993f997377be9b620c151ba465c21232ed34eb23776e80f9079bd2606eff extends \Twig\Template
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
        // line 17
        echo "

<!DOCTYPE html>
<html>
<head>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Page not found!</title>
  <style>
    * { box-sizing: border-box; }
  body { font: 20px Helvetica, sans-serif; color: #333; text-align: center; padding: 30px; display: flex; align-items: center; justify-content: center; flex-flow: column; min-height: 100vh; margin: 0;}
  h1 { margin: 0 0 30px; font-size: 40px; }
  article { display: block; text-align: left; max-width: 650px; width: 100%; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
</style>
  ";
        // line 32
        $context["favicon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc(((($context["favicon"] ?? null)) ? ("favicon") : ("favicon")));
        echo " 
    
    ";
        // line 34
        if (($context["favicon"] ?? null)) {
            // line 35
            echo "    
    ";
            // line 36
            $context["favicon_file"] = $this->getAttribute(twig_first($this->env, ($context["favicon"] ?? null)), "name", []);
            // line 37
            echo "    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://favicon/" . ($context["favicon_file"] ?? null)));
            echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
            // line 38
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://favicon/" . ($context["favicon_file"] ?? null)));
            echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
            // line 39
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://favicon/" . ($context["favicon_file"] ?? null)));
            echo "\">
    ";
        } else {
            // line 41
            echo "    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://apple-touch-icon.png");
            echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
            // line 42
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://favicon-32x32.png");
            echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
            // line 43
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://favicon-16x16.png");
            echo "\">
    ";
        }
        // line 45
        echo "</head>
<body>
<article>
  <h1>Page not found!</h1>
  <div>
    <p>The page you're looking for could not be found.</p>
    <a href=\"/\">← Back to homepage</a>
  </div>
</article>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 45,  82 => 43,  78 => 42,  73 => 41,  68 => 39,  64 => 38,  59 => 37,  57 => 36,  54 => 35,  52 => 34,  47 => 32,  30 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'partials/base.html.twig' %}#}
{#{% block aboveFold %}#}
{#    {% do assets.addInlineCss('h1{color: red;}') %}#}
{#{% endblock %}#}
{#{% block content %}#}
{#\t<div class=\"container\">#}
{#    <article class=\"text-center\">#}
{#\t\t<h1>{{ page.header.title }} </h1>#}
{#\t\t<div class=\"field-body\">#}
{#\t\t    <p>#}
{#    \t\t\t{{ page.content|raw }}#}
{#\t\t    </p>#}
{#\t\t</div>#}
{#\t</article>#}
{#\t</div>#}
{#{% endblock %}#}


<!DOCTYPE html>
<html>
<head>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Page not found!</title>
  <style>
    * { box-sizing: border-box; }
  body { font: 20px Helvetica, sans-serif; color: #333; text-align: center; padding: 30px; display: flex; align-items: center; justify-content: center; flex-flow: column; min-height: 100vh; margin: 0;}
  h1 { margin: 0 0 30px; font-size: 40px; }
  article { display: block; text-align: left; max-width: 650px; width: 100%; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
</style>
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
</head>
<body>
<article>
  <h1>Page not found!</h1>
  <div>
    <p>The page you're looking for could not be found.</p>
    <a href=\"/\">← Back to homepage</a>
  </div>
</article>

</body>
</html>", "error.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/error.html.twig");
    }
}
