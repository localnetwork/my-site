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

/* forms/fields/tinymce/tinymce.html.twig */
class __TwigTemplate_8b53a2f8d7d37adfa6f6af56b68d9e375570d0fdfa2732e67d937e4cf4de2b86 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('label', $context, $blocks);
        // line 7
        $this->displayBlock('field', $context, $blocks);
    }

    // line 1
    public function block_label($context, array $blocks = [])
    {
        // line 2
        echo "\t";
        if ($this->getAttribute(($context["field"] ?? null), "label", [])) {
            // line 3
            echo "\t\t";
            $context["hint"] = (($this->getAttribute(($context["field"] ?? null), "help", [])) ? ((("data-hint=\"" . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "help", []))) . "\"")) : (""));
            // line 4
            echo "\t\t<div class=\"form-label form-field hint--bottom\" ";
            echo twig_escape_filter($this->env, ($context["hint"] ?? null), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", []));
            echo "</div>
\t";
        }
    }

    // line 7
    public function block_field($context, array $blocks = [])
    {
        // line 8
        echo "\t<div class=\"form-field ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "classes", []), "")) : ("")), "html", null, true);
        echo "\">
\t\t<div class=\"form-data\">
\t\t\t<textarea
\t\t\t\tclass=\"tinymce\"
\t\t\t\tname=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
\t\t\t\t";
        // line 13
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 14
        echo "\t\t\t\t";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html", null, true);
            echo "\"";
        }
        // line 15
        echo "\t\t\t\t";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 16
        echo "\t\t\t\t";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 17
        echo "\t\t\t\t";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 18
        echo "\t\t\t\t";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 19
        echo "\t\t\t>";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), "
"), "html");
        echo "</textarea>
\t\t</div>
\t</div>
\t<script>
\t\ttinymce.init({
\t\t\tselector:\"textarea.tinymce\",
\t\t\tconvert_urls:false,
\t\t\tdocument_base_url:\$(\"[id=grav-dropzone]\").attr(\"data-media-local\")+\"/../\"+(\"\"";
        // line 26
        if ($this->getAttribute(($context["context"] ?? null), "modular", [])) {
            echo "+\"../\"";
        }
        echo "),
\t\t\tlanguage_url:\"";
        // line 27
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc((("user://data/tinymce-editor/js/tinymce/langs/" . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "language", [])) . ".js")), _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc((((("user://data/tinymce-editor/js/tinymce/langs/" . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "language", [])) . "_") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "language", []))) . ".js")), _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc((("plugins://tinymce-editor/js/tinymce/langs/" . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "language", [])) . ".js")), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc((((("plugins://tinymce-editor/js/tinymce/langs/" . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "language", [])) . "_") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "language", []))) . ".js"))))), "html", null, true);
        echo "\",
\t\t\tplugins:\"";
        // line 28
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tinymce-editor", [], "array"), "plugins", []), " "), "js"), "html", null, true);
        echo "\",
\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tinymce-editor", [], "array"), "parameters", [])));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 30
            echo "\t\t\t\t\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tinymce-editor", [], "array"), "parameters", []), $context["key"], [], "array"), "name", []), "js"), "html", null, true);
            echo "\":function(x) {
\t\t\t\t\ttry{return JSON.parse(x)}catch(e){return x}
\t\t\t\t}(\"";
            // line 32
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tinymce-editor", [], "array"), "parameters", []), $context["key"], [], "array"), "value", []), "js"), "html", null, true);
            echo "\"),
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\tmenubar:";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tinymce-editor", [], "array"), "menubar", [])) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
\t\t\tmenu:{
\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tinymce-editor", [], "array"), "menu", [])));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 37
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ":{
\t\t\t\t\t\ttitle:\"";
            // line 38
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tinymce-editor", [], "array"), "menu", []), $context["key"], [], "array"), "title", []), "js"), "html", null, true);
            echo "\",
\t\t\t\t\t\titems:\"";
            // line 39
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tinymce-editor", [], "array"), "menu", []), $context["key"], [], "array"), "items", []), "js"), "html", null, true);
            echo "\"
\t\t\t\t\t},
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t},
\t\t\ttoolbar:[
\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tinymce-editor", [], "array"), "toolbar", []));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 45
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["fields"]);
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 46
                echo "\t\t\t\t\t\t'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["row"], "js"), "html", null, true);
                echo "',
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t],
\t\t\tbranding:";
        // line 50
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tinymce-editor", [], "array"), "branding", [])) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
\t\t\tstatusbar:";
        // line 51
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tinymce-editor", [], "array"), "statusbar", [])) {
            echo "true";
        } else {
            echo "false";
        }
        // line 52
        echo "\t\t});
\t\t\$(window).on(\"load\", function() {
\t\t\t\$(\"div.dropzone\").on(\"click\", \"a.dz-insert\", function() {
\t\t\t\tvar dir = \$(\"[id=grav-dropzone]\").attr(\"data-media-local\")+\"/\";
\t\t\t\tvar safedir = \$(\"[id=grav-dropzone]\").attr(\"data-media-path\")+\"/\";
\t\t\t\tvar src = \$(this).parent().find(\"[data-dz-name]\").text();
\t\t\t\tvar file = new Image();
\t\t\t\tfile.onload = function() {
\t\t\t\t\t\$(\"[aria-label='Insert/edit image'] button\").click();
\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:first\").val(dir+src);
\t\t\t\t};
\t\t\t\tfile.onerror = function() {
\t\t\t\t\tfile = new Audio();
\t\t\t\t\tfile.onload = function() {
\t\t\t\t\t\ttinyMCE.activeEditor.plugins.media.showDialog();
\t\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:first\").val(dir+src);
\t\t\t\t\t};
\t\t\t\t\tfile.onerror = function() {
\t\t\t\t\t\t\$(\"[aria-label='Insert/edit link'] button\").click();
\t\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:eq(1)\").val(src);
\t\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:first\").val(dir+src);
\t\t\t\t\t};
\t\t\t\t\tfile.src = safedir+src;
\t\t\t\t};
\t\t\t\tfile.src = safedir+src;
\t\t\t});
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/tinymce/tinymce.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  224 => 52,  218 => 51,  210 => 50,  207 => 49,  201 => 48,  192 => 46,  187 => 45,  183 => 44,  179 => 42,  170 => 39,  166 => 38,  161 => 37,  157 => 36,  147 => 34,  139 => 32,  133 => 30,  129 => 29,  125 => 28,  121 => 27,  115 => 26,  103 => 19,  98 => 18,  93 => 17,  88 => 16,  83 => 15,  76 => 14,  72 => 13,  68 => 12,  60 => 8,  57 => 7,  47 => 4,  44 => 3,  41 => 2,  38 => 1,  34 => 7,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block label %}
\t{% if field.label %}
\t\t{% set hint = field.help ? 'data-hint=\"' ~ field.help|tu|raw ~ '\"': '' %}
\t\t<div class=\"form-label form-field hint--bottom\" {{ hint }}>{{ field.label|tu|raw }}</div>
\t{% endif %}
{% endblock %}
{% block field %}
\t<div class=\"form-field {{ field.classes|default('') }}\">
\t\t<div class=\"form-data\">
\t\t\t<textarea
\t\t\t\tclass=\"tinymce\"
\t\t\t\tname=\"{{ (scope ~ field.name)|fieldName }}\"
\t\t\t\t{% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
\t\t\t\t{% if field.placeholder %}placeholder=\"{{ field.placeholder|tu }}\"{% endif %}
\t\t\t\t{% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
\t\t\t\t{% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
\t\t\t\t{% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
\t\t\t\t{% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
\t\t\t>{{ value|join(\"\\n\")|e(\"html\") }}</textarea>
\t\t</div>
\t</div>
\t<script>
\t\ttinymce.init({
\t\t\tselector:\"textarea.tinymce\",
\t\t\tconvert_urls:false,
\t\t\tdocument_base_url:\$(\"[id=grav-dropzone]\").attr(\"data-media-local\")+\"/../\"+(\"\"{% if context.modular %}+\"../\"{% endif %}),
\t\t\tlanguage_url:\"{{ url('user://data/tinymce-editor/js/tinymce/langs/' ~ grav.user.language ~ '.js')|default(url('user://data/tinymce-editor/js/tinymce/langs/' ~ grav.user.language ~ '_' ~ (grav.user.language|upper) ~ '.js')|default(url('plugins://tinymce-editor/js/tinymce/langs/' ~ grav.user.language ~ '.js')|default(url('plugins://tinymce-editor/js/tinymce/langs/' ~ grav.user.language ~ '_' ~ (grav.user.language|upper) ~ '.js')))) }}\",
\t\t\tplugins:\"{{ config.plugins[\"tinymce-editor\"].plugins|join(\" \")|e(\"js\") }}\",
\t\t\t{% for key in config.plugins[\"tinymce-editor\"].parameters|keys %}
\t\t\t\t\"{{ config.plugins[\"tinymce-editor\"].parameters[key].name|e(\"js\") }}\":function(x) {
\t\t\t\t\ttry{return JSON.parse(x)}catch(e){return x}
\t\t\t\t}(\"{{ config.plugins[\"tinymce-editor\"].parameters[key].value|e(\"js\") }}\"),
\t\t\t{% endfor %}
\t\t\tmenubar:{% if config.plugins[\"tinymce-editor\"].menubar %}true{% else %}false{% endif %},
\t\t\tmenu:{
\t\t\t\t{% for key in config.plugins[\"tinymce-editor\"].menu|keys %}
\t\t\t\t\t{{ key }}:{
\t\t\t\t\t\ttitle:\"{{ config.plugins[\"tinymce-editor\"].menu[key].title|e(\"js\") }}\",
\t\t\t\t\t\titems:\"{{ config.plugins[\"tinymce-editor\"].menu[key].items|e(\"js\") }}\"
\t\t\t\t\t},
\t\t\t\t{% endfor %}
\t\t\t},
\t\t\ttoolbar:[
\t\t\t\t{% for fields in config.plugins[\"tinymce-editor\"].toolbar %}
\t\t\t\t\t{% for row in fields %}
\t\t\t\t\t\t'{{ row|e(\"js\") }}',
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t],
\t\t\tbranding:{% if config.plugins[\"tinymce-editor\"].branding %}true{% else %}false{% endif %},
\t\t\tstatusbar:{% if config.plugins[\"tinymce-editor\"].statusbar %}true{% else %}false{% endif %}
\t\t});
\t\t\$(window).on(\"load\", function() {
\t\t\t\$(\"div.dropzone\").on(\"click\", \"a.dz-insert\", function() {
\t\t\t\tvar dir = \$(\"[id=grav-dropzone]\").attr(\"data-media-local\")+\"/\";
\t\t\t\tvar safedir = \$(\"[id=grav-dropzone]\").attr(\"data-media-path\")+\"/\";
\t\t\t\tvar src = \$(this).parent().find(\"[data-dz-name]\").text();
\t\t\t\tvar file = new Image();
\t\t\t\tfile.onload = function() {
\t\t\t\t\t\$(\"[aria-label='Insert/edit image'] button\").click();
\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:first\").val(dir+src);
\t\t\t\t};
\t\t\t\tfile.onerror = function() {
\t\t\t\t\tfile = new Audio();
\t\t\t\t\tfile.onload = function() {
\t\t\t\t\t\ttinyMCE.activeEditor.plugins.media.showDialog();
\t\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:first\").val(dir+src);
\t\t\t\t\t};
\t\t\t\t\tfile.onerror = function() {
\t\t\t\t\t\t\$(\"[aria-label='Insert/edit link'] button\").click();
\t\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:eq(1)\").val(src);
\t\t\t\t\t\t\$(\"div.mce-window input.mce-textbox:first\").val(dir+src);
\t\t\t\t\t};
\t\t\t\t\tfile.src = safedir+src;
\t\t\t\t};
\t\t\t\tfile.src = safedir+src;
\t\t\t});
\t\t});
\t</script>
{% endblock %}
", "forms/fields/tinymce/tinymce.html.twig", "/home/prestigelabelsco/public_html/user/plugins/tinymce-editor/templates/forms/fields/tinymce/tinymce.html.twig");
    }
}
