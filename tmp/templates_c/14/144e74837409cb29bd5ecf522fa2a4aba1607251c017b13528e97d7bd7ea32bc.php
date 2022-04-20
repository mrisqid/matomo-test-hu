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

/* @Login/confirmPassword.twig */
class __TwigTemplate_172b0e19f72987b11422b225c041bf309133dc9bcb939511e02a762efd53a743 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'loginContent' => [$this, 'block_loginContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Login/loginLayout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_ConfirmPasswordToContinue"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@Login/loginLayout.twig", "@Login/confirmPassword.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_loginContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"contentForm loginForm confirmPasswordForm\">
        ";
        // line 7
        $this->loadTemplate("@Login/confirmPassword.twig", "@Login/confirmPassword.twig", 7, "1881483464")->display(twig_array_merge($context, ["title" => call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_ConfirmPasswordToContinue"])]));
        // line 44
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "@Login/confirmPassword.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 44,  58 => 7,  55 => 6,  51 => 5,  46 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Login/loginLayout.twig' %}

{% set title %}{{ 'Login_ConfirmPasswordToContinue'|translate }}{% endset %}

{% block loginContent %}
    <div class=\"contentForm loginForm confirmPasswordForm\">
        {% embed 'contentBlock.twig' with {'title': ('Login_ConfirmPasswordToContinue'|translate)} %}
        {% block content %}

            {{ postEvent(\"Template.confirmPasswordContent\", \"top\") }}
            <div class=\"message_container\">
                {% if AccessErrorString %}
                    <div piwik-notification
                         noclear=\"true\"
                         context=\"error\">
                        <strong>{{ 'General_Error'|translate }}</strong>: {{ AccessErrorString|raw }}<br/>
                    </div>
                {% endif %}
            </div>

            <form action=\"{{ linkTo({'module': loginPlugin, 'action': 'confirmPassword'}) }}\" ng-non-bindable method=\"post\">
                <div class=\"row\">
                    <div class=\"col s12 input-field\">
                        <input type=\"hidden\" name=\"nonce\" id=\"login_form_nonce\" value=\"{{ nonce }}\"/>
                        <input type=\"password\" placeholder=\"\" name=\"password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                               autocorrect=\"off\" autocapitalize=\"none\"
                               tabindex=\"20\" />
                        <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> {{ 'General_Password'|translate }}</label>
                    </div>
                </div>

                <div class=\"row actions\">
                    <div class=\"col s12\">
                        <input class=\"submit btn\" id='login_form_submit' type=\"submit\" value=\"{{ 'General_Confirm'|translate }}\"
                               tabindex=\"100\"/>
                    </div>
                </div>

            </form>
            {{ postEvent(\"Template.confirmPasswordContent\", \"bottom\") }}

        {% endblock %}
        {% endembed %}
    </div>

{% endblock %}", "@Login/confirmPassword.twig", "C:\\xampp\\htdocs\\matomo\\plugins\\Login\\templates\\confirmPassword.twig");
    }
}


/* @Login/confirmPassword.twig */
class __TwigTemplate_172b0e19f72987b11422b225c041bf309133dc9bcb939511e02a762efd53a743___1881483464 extends Template
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
        // line 7
        return "contentBlock.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("contentBlock.twig", "@Login/confirmPassword.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
            ";
        // line 10
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.confirmPasswordContent", "top"]);
        echo "
            <div class=\"message_container\">
                ";
        // line 12
        if ((isset($context["AccessErrorString"]) || array_key_exists("AccessErrorString", $context) ? $context["AccessErrorString"] : (function () { throw new RuntimeError('Variable "AccessErrorString" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "                    <div piwik-notification
                         noclear=\"true\"
                         context=\"error\">
                        <strong>";
            // line 16
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Error"]), "html", null, true);
            echo "</strong>: ";
            echo (isset($context["AccessErrorString"]) || array_key_exists("AccessErrorString", $context) ? $context["AccessErrorString"] : (function () { throw new RuntimeError('Variable "AccessErrorString" does not exist.', 16, $this->source); })());
            echo "<br/>
                    </div>
                ";
        }
        // line 19
        echo "            </div>

            <form action=\"";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => (isset($context["loginPlugin"]) || array_key_exists("loginPlugin", $context) ? $context["loginPlugin"] : (function () { throw new RuntimeError('Variable "loginPlugin" does not exist.', 21, $this->source); })()), "action" => "confirmPassword"]]), "html", null, true);
        echo "\" ng-non-bindable method=\"post\">
                <div class=\"row\">
                    <div class=\"col s12 input-field\">
                        <input type=\"hidden\" name=\"nonce\" id=\"login_form_nonce\" value=\"";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["nonce"]) || array_key_exists("nonce", $context) ? $context["nonce"] : (function () { throw new RuntimeError('Variable "nonce" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\"/>
                        <input type=\"password\" placeholder=\"\" name=\"password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                               autocorrect=\"off\" autocapitalize=\"none\"
                               tabindex=\"20\" />
                        <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> ";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Password"]), "html", null, true);
        echo "</label>
                    </div>
                </div>

                <div class=\"row actions\">
                    <div class=\"col s12\">
                        <input class=\"submit btn\" id='login_form_submit' type=\"submit\" value=\"";
        // line 34
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Confirm"]), "html", null, true);
        echo "\"
                               tabindex=\"100\"/>
                    </div>
                </div>

            </form>
            ";
        // line 40
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.confirmPasswordContent", "bottom"]);
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@Login/confirmPassword.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 40,  216 => 34,  207 => 28,  200 => 24,  194 => 21,  190 => 19,  182 => 16,  177 => 13,  175 => 12,  170 => 10,  167 => 9,  163 => 8,  152 => 7,  60 => 44,  58 => 7,  55 => 6,  51 => 5,  46 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Login/loginLayout.twig' %}

{% set title %}{{ 'Login_ConfirmPasswordToContinue'|translate }}{% endset %}

{% block loginContent %}
    <div class=\"contentForm loginForm confirmPasswordForm\">
        {% embed 'contentBlock.twig' with {'title': ('Login_ConfirmPasswordToContinue'|translate)} %}
        {% block content %}

            {{ postEvent(\"Template.confirmPasswordContent\", \"top\") }}
            <div class=\"message_container\">
                {% if AccessErrorString %}
                    <div piwik-notification
                         noclear=\"true\"
                         context=\"error\">
                        <strong>{{ 'General_Error'|translate }}</strong>: {{ AccessErrorString|raw }}<br/>
                    </div>
                {% endif %}
            </div>

            <form action=\"{{ linkTo({'module': loginPlugin, 'action': 'confirmPassword'}) }}\" ng-non-bindable method=\"post\">
                <div class=\"row\">
                    <div class=\"col s12 input-field\">
                        <input type=\"hidden\" name=\"nonce\" id=\"login_form_nonce\" value=\"{{ nonce }}\"/>
                        <input type=\"password\" placeholder=\"\" name=\"password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                               autocorrect=\"off\" autocapitalize=\"none\"
                               tabindex=\"20\" />
                        <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> {{ 'General_Password'|translate }}</label>
                    </div>
                </div>

                <div class=\"row actions\">
                    <div class=\"col s12\">
                        <input class=\"submit btn\" id='login_form_submit' type=\"submit\" value=\"{{ 'General_Confirm'|translate }}\"
                               tabindex=\"100\"/>
                    </div>
                </div>

            </form>
            {{ postEvent(\"Template.confirmPasswordContent\", \"bottom\") }}

        {% endblock %}
        {% endembed %}
    </div>

{% endblock %}", "@Login/confirmPassword.twig", "C:\\xampp\\htdocs\\matomo\\plugins\\Login\\templates\\confirmPassword.twig");
    }
}
