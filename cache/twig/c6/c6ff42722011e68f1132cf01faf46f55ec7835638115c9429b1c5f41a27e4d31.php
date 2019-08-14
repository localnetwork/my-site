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

/* call-to-action.html.twig */
class __TwigTemplate_bf5ae8b722d364611152252aa358ef7bd7f467c4e95c56c42bed8a719b5c1c98 extends \Twig\Template
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
        echo "<section class=\"block-cta\">

";
        // line 3
        $context["page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/get-quote"], "method");
        // line 4
        echo "
<h2 class=\"block__title text-center fs25 tc-orange text-uppercase fw700\">
    ";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "
</h2>

<div class=\"block__description\">
    ";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
</div>

<div class=\"block__rm text-center\">
    <a class=\"bgc-orange text-white text-uppercase fw700 fs14 py15 px23 btn-default d-inline-block\" href=\"/contact-us\">Get a quote</a>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "call-to-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  40 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"block-cta\">

{% set page = page.find('/get-quote') %}

<h2 class=\"block__title text-center fs25 tc-orange text-uppercase fw700\">
    {{ page.title }}
</h2>

<div class=\"block__description\">
    {{ page.content }}
</div>

<div class=\"block__rm text-center\">
    <a class=\"bgc-orange text-white text-uppercase fw700 fs14 py15 px23 btn-default d-inline-block\" href=\"/contact-us\">Get a quote</a>
</div>
</section>", "call-to-action.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/call-to-action.html.twig");
    }
}
