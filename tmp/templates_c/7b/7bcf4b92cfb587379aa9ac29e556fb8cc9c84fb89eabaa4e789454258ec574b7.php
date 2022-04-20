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

/* @UsersManager/addNewTokenSuccess.twig */
class __TwigTemplate_a528aea83e4caf04bce4b8d1a7c9f2fe9a6388e5f9ac68a23e9ebfae02d3448a extends Template
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
        $this->parent = $this->loadTemplate("admin.twig", "@UsersManager/addNewTokenSuccess.twig", 1);
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
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_TokenSuccessfullyGenerated"]), "html_attr");
        echo "\">
        <p>
            ";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_PleaseStoreToken"]), "html", null, true);
        echo "
            <br>";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_DoNotStoreToken"]), "html", null, true);
        echo "
        </p>
        <pre piwik-select-on-focus style=\"font-size: 40px;\" class=\"generatedTokenAuth\"><code>";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["generatedToken"]) || array_key_exists("generatedToken", $context) ? $context["generatedToken"] : (function () { throw new RuntimeError('Variable "generatedToken" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</code></pre>

        <a href=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "UsersManager", "action" => "userSecurity"]]), "html", null, true);
        echo "\" class=\"btn\" style=\"height:auto\"
        >";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_ConfirmTokenCopied"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_GoBackSecurityPage"]), "html", null, true);
        echo "</a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@UsersManager/addNewTokenSuccess.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  77 => 14,  72 => 12,  67 => 10,  63 => 9,  58 => 7,  55 => 6,  51 => 5,  46 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'General_Security'|translate }}{% endset %}

{% block content %}

    <div piwik-content-block content-title=\"{{ 'UsersManager_TokenSuccessfullyGenerated'|translate|e('html_attr') }}\">
        <p>
            {{ 'UsersManager_PleaseStoreToken'|translate }}
            <br>{{ 'UsersManager_DoNotStoreToken'|translate }}
        </p>
        <pre piwik-select-on-focus style=\"font-size: 40px;\" class=\"generatedTokenAuth\"><code>{{ generatedToken }}</code></pre>

        <a href=\"{{ linkTo({'module': 'UsersManager', 'action': 'userSecurity'}) }}\" class=\"btn\" style=\"height:auto\"
        >{{ 'UsersManager_ConfirmTokenCopied'|translate }} {{ 'UsersManager_GoBackSecurityPage'|translate }}</a>
    </div>

{% endblock %}
", "@UsersManager/addNewTokenSuccess.twig", "C:\\xampp\\htdocs\\matomo\\plugins\\UsersManager\\templates\\addNewTokenSuccess.twig");
    }
}
