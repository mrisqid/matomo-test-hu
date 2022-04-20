<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @UsersManager/addNewToken.twig */
class __TwigTemplate_f3bc38863c91163b40f4387d5e4292b9251af30b6f377a777aa93690ab67f0d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Security"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UsersManager/addNewToken.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div piwik-content-block content-title=\"";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_AuthTokens"]), "html_attr");
        echo "\">
        <p>
            ";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_TokenAuthIntro"]), "html", null, true);
        echo "
        </p>

        ";
        // line 12
        if ((isset($context["noDescription"]) || array_key_exists("noDescription", $context) ? $context["noDescription"] : (function () { throw new RuntimeError('Variable "noDescription" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "            <br>
            <div class=\"alert alert-danger\">
                ";
            // line 15
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Description"]), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ValidatorErrorEmptyValue"]), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 18
        echo "
        <form  action=\"";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "UsersManager", "action" => "addNewToken"]]), "html", null, true);
        echo "\" method=\"post\" class=\"addTokenForm\">
            <div piwik-field uicontrol=\"text\" name=\"description\"
                 data-title=\"";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Description"]), "html_attr");
        echo "\"
                 maxlength=\"100\" required
                 inline-help=\"";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_AuthTokenPurpose"]), "html_attr");
        echo "\">
            </div>

            <input type=\"hidden\" value=\"";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["nonce"]) || array_key_exists("nonce", $context) ? $context["nonce"] : (function () { throw new RuntimeError('Variable "nonce" does not exist.', 26, $this->source); })()), "html_attr");
        echo "\" name=\"nonce\">

            <input type=\"submit\"
                   value=\"";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_CreateNewToken"]), "html_attr");
        echo "\"
                   class=\"btn\"/>
            ";
        // line 31
        $context["backlink"] = call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "UsersManager", "action" => "userSecurity"]]);
        // line 32
        echo "            ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_OrCancel", (("<a class='entityCancelLink' href='" . (isset($context["backlink"]) || array_key_exists("backlink", $context) ? $context["backlink"] : (function () { throw new RuntimeError('Variable "backlink" does not exist.', 32, $this->source); })())) . "'>"), "</a>"]);
        echo "

        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@UsersManager/addNewToken.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  113 => 31,  108 => 29,  102 => 26,  96 => 23,  91 => 21,  86 => 19,  83 => 18,  75 => 15,  71 => 13,  69 => 12,  63 => 9,  58 => 7,  55 => 6,  51 => 5,  46 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'General_Security'|translate }}{% endset %}

{% block content %}

    <div piwik-content-block content-title=\"{{ 'UsersManager_AuthTokens'|translate|e('html_attr') }}\">
        <p>
            {{ 'UsersManager_TokenAuthIntro'|translate }}
        </p>

        {% if noDescription %}
            <br>
            <div class=\"alert alert-danger\">
                {{ 'General_Description'|translate }}: {{ 'General_ValidatorErrorEmptyValue'|translate }}
            </div>
        {% endif %}

        <form  action=\"{{ linkTo({'module': 'UsersManager', 'action': 'addNewToken'}) }}\" method=\"post\" class=\"addTokenForm\">
            <div piwik-field uicontrol=\"text\" name=\"description\"
                 data-title=\"{{ 'General_Description'|translate|e('html_attr') }}\"
                 maxlength=\"100\" required
                 inline-help=\"{{ 'UsersManager_AuthTokenPurpose'|translate|e('html_attr') }}\">
            </div>

            <input type=\"hidden\" value=\"{{ nonce|e('html_attr') }}\" name=\"nonce\">

            <input type=\"submit\"
                   value=\"{{ 'UsersManager_CreateNewToken'|translate|e('html_attr') }}\"
                   class=\"btn\"/>
            {% set backlink = linkTo({'module': 'UsersManager', 'action': 'userSecurity'}) %}
            {{ 'General_OrCancel'|translate(\"<a class='entityCancelLink' href='\" ~ backlink ~ \"'>\",\"</a>\")|raw }}

        </form>
    </div>

{% endblock %}
", "@UsersManager/addNewToken.twig", "C:\\xampp\\htdocs\\matomo\\plugins\\UsersManager\\templates\\addNewToken.twig");
    }
}
