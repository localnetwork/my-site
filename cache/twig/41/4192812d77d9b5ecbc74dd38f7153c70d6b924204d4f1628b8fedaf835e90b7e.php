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

/* move-modal.twig.html */
class __TwigTemplate_8be5744bda5ae2a1c863e337a8ab279816e7292f9671e46f638147ecc648a0f1 extends \Twig\Template
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
        echo "<div class=\"remodal\" data-remodal-id=\"modal-admin-media-move\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='return false;'>
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 4
            echo "        ";
            if ($this->getAttribute($context["field"], "type", [])) {
                // line 5
                echo "        ";
                $context["value"] = $this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                // line 6
                echo "        <div class=\"block block-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", []), "html", null, true);
                echo "\">
            ";
                // line 7
                $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "move-modal.twig.html", 7)->display($context);
                // line 8
                echo "        </div>
        ";
            }
            // line 10
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
        <div class=\"form-field grid\">Select a destination page or enter the destination page route.</div>

        <div class=\"button-bar\">
            <div class=\"loading\">
                ";
        // line 16
        echo "Moving";
        echo "... <i class=\"fa fa-spinner fa-spin\"></i>
            </div>

            <button class=\"button primary\" style=\"visibility: hidden\" name=\"move\">";
        // line 19
        echo "Move";
        echo "</button>
            <button class=\"button\" style=\"visibility: hidden\" name=\"move_and_go\">";
        // line 20
        echo "Move And Go";
        echo "</button>
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "move-modal.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  95 => 19,  89 => 16,  82 => 11,  68 => 10,  64 => 8,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"remodal\" data-remodal-id=\"modal-admin-media-move\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='return false;'>
        {% for field in fields %}
        {% if field.type %}
        {% set value = data.value(field.name) %}
        <div class=\"block block-{{field.type}}\">
            {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
        </div>
        {% endif %}
        {% endfor %}

        <div class=\"form-field grid\">Select a destination page or enter the destination page route.</div>

        <div class=\"button-bar\">
            <div class=\"loading\">
                {{ \"Moving\" }}... <i class=\"fa fa-spinner fa-spin\"></i>
            </div>

            <button class=\"button primary\" style=\"visibility: hidden\" name=\"move\">{{ \"Move\" }}</button>
            <button class=\"button\" style=\"visibility: hidden\" name=\"move_and_go\">{{ \"Move And Go\" }}</button>
        </div>
    </form>
</div>", "move-modal.twig.html", "/home/prestigelabelsco/public_html/user/plugins/admin-media-move/templates/move-modal.twig.html");
    }
}
