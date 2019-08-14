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

/* partials/misc/preload-fonts.html.twig */
class __TwigTemplate_575506f439cc6bd7e94f4be72e50738ea041d01f3e734ad958047f97fd2d9edd extends \Twig\Template
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
        echo "<link rel=\"preload\" href=\"/user/themes/sub/fonts/source-sans-pro-v12-latin-regular.woff2\" as=\"font\" type=\"font/woff\" crossorigin=\"anonymous\">

<link rel=\"preload\" href=\"/user/themes/sub/fonts/source-sans-pro-v12-latin-700.woff2\" as=\"font\" type=\"font/woff\" crossorigin=\"anonymous\">


<link rel=\"preload\" href=\"/user/themes/sub/libraries/font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0\" as=\"font\" type=\"font/woff\" crossorigin=\"anonymous\">";
    }

    public function getTemplateName()
    {
        return "partials/misc/preload-fonts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"preload\" href=\"/user/themes/sub/fonts/source-sans-pro-v12-latin-regular.woff2\" as=\"font\" type=\"font/woff\" crossorigin=\"anonymous\">

<link rel=\"preload\" href=\"/user/themes/sub/fonts/source-sans-pro-v12-latin-700.woff2\" as=\"font\" type=\"font/woff\" crossorigin=\"anonymous\">


<link rel=\"preload\" href=\"/user/themes/sub/libraries/font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0\" as=\"font\" type=\"font/woff\" crossorigin=\"anonymous\">", "partials/misc/preload-fonts.html.twig", "/home/prestigelabelsco/public_html/user/themes/sub/templates/partials/misc/preload-fonts.html.twig");
    }
}
