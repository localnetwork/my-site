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

/* social.html.twig */
class __TwigTemplate_0a530f769d1840605977046e2bad15712043c191bcec68e0d16e47450883aee3 extends \Twig\Template
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
        $context["social"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/social"], "method");
        // line 2
        echo "

<ul class=\"media-links list-unstyled p0 m0 d-flex flex-wrap fs25 align-items-center justify-content-lg-end\">

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["social"], "header", []), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            echo " 
    <li>
        <a href=\"";
            // line 8
            echo $this->getAttribute($context["social"], "iconURL", []);
            echo "\" target=\"_blank\"><i class=\"";
            echo $this->getAttribute($context["social"], "icon", []);
            echo "\"></i></a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "

</ul>";
    }

    public function getTemplateName()
    {
        return "social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  45 => 8,  38 => 6,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set social = page.find('/social') %}


<ul class=\"media-links list-unstyled p0 m0 d-flex flex-wrap fs25 align-items-center justify-content-lg-end\">

{% for social in social.header.social %} 
    <li>
        <a href=\"{{ social.iconURL }}\" target=\"_blank\"><i class=\"{{ social.icon }}\"></i></a>
    </li>
{% endfor %}


</ul>", "social.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/social.html.twig");
    }
}
