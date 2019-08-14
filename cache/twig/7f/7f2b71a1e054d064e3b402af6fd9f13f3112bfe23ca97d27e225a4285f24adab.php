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

/* partials/misc/logo.html.twig */
class __TwigTemplate_ce3212368431b8b5b31e66b04f581e2d16658259c1bfd9ef52a50d07168b89b3 extends \Twig\Template
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
        // line 6
        echo "

";
        // line 8
        $context["logo"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc(((($context["mobile"] ?? null)) ? ("logo_mobile") : ("logo")));
        // line 9
        echo "
<a href=\"";
        // line 10
        echo ($context["home_url"] ?? null);
        echo "\" class=\"navbar-brand mr-10\">
";
        // line 11
        if (($context["logo"] ?? null)) {
            // line 12
            echo "  ";
            $context["logo_file"] = $this->getAttribute(twig_first($this->env, ($context["logo"] ?? null)), "name", []);
            // line 13
            echo "  <img src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://logos/" . ($context["logo_file"] ?? null)));
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
            echo "\" />
";
        } else {
            // line 15
            echo "  ";
            // line 16
            echo "  <img src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://logo.png");
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
            echo "\" />
";
        }
        // line 18
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "partials/misc/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  58 => 16,  56 => 15,  48 => 13,  45 => 12,  43 => 11,  39 => 10,  36 => 9,  34 => 8,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#<div class=\"navbar-header\">#}
{#    <a class=\"navbar-brand site-name d-flex flex-column flex-wrap\" href=\"{{ base_url == '' ? '/' : base_url }}\">#}
{#            <img class=\"lazyload\" src=\"{{ url('theme://misc/logo.png') }}\" title=\"{{ config.site.title }}\" />#}
{#    </a>#}
{#</div>#}


{% set logo = theme_var(mobile ? 'logo_mobile' : 'logo') %}

<a href=\"{{ home_url }}\" class=\"navbar-brand mr-10\">
{% if logo %}
  {% set logo_file = (logo|first).name %}
  <img src=\"{{ url('theme://logos/' ~ logo_file)  }}\" alt=\"{{ config.site.title }}\" />
{% else %}
  {#{% include('@images/grav-logo.svg') %}#}
  <img src=\"{{ url('theme://logo.png') }}\" alt=\"{{ config.site.title }}\" />
{% endif %}
</a>", "partials/misc/logo.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/partials/misc/logo.html.twig");
    }
}
