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

/* @UsersManager/userSecurity.twig */
class __TwigTemplate_3e23940f108f6b3b87d68b3338574d5fae24ec35e0bf41e78d7e5635f4b6fbcc extends Template
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
        $this->parent = $this->loadTemplate("admin.twig", "@UsersManager/userSecurity.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if ((isset($context["isUsersAdminEnabled"]) || array_key_exists("isUsersAdminEnabled", $context) ? $context["isUsersAdminEnabled"] : (function () { throw new RuntimeError('Variable "isUsersAdminEnabled" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "    <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ChangePassword"]), "html_attr");
            echo "\" feature=\"true\">
        <form id=\"userSettingsTable\" method=\"post\" action=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "UsersManager", "action" => "recordPasswordChange"]]), "html", null, true);
            echo "\">

            <input type=\"hidden\" value=\"";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["changePasswordNonce"]) || array_key_exists("changePasswordNonce", $context) ? $context["changePasswordNonce"] : (function () { throw new RuntimeError('Variable "changePasswordNonce" does not exist.', 10, $this->source); })()), "html_attr");
            echo "\" name=\"nonce\">

            ";
            // line 12
            if ((array_key_exists("isValidHost", $context) && (isset($context["isValidHost"]) || array_key_exists("isValidHost", $context) ? $context["isValidHost"] : (function () { throw new RuntimeError('Variable "isValidHost" does not exist.', 12, $this->source); })()))) {
                // line 13
                echo "
                <div piwik-field uicontrol=\"password\" name=\"password\" autocomplete=\"off\"
                     ng-model=\"personalSettings.password\"
                     ng-change=\"personalSettings.requirePasswordConfirmation()\"
                     data-title=\"";
                // line 17
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_NewPassword"]), "html_attr");
                echo "\"
                     value=\"\" inline-help=\"";
                // line 18
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_IfYouWouldLikeToChangeThePasswordTypeANewOne"]), "html_attr");
                echo "\">
                </div>

                <div piwik-field uicontrol=\"password\" name=\"passwordBis\" autocomplete=\"off\"
                     ng-model=\"personalSettings.passwordBis\"
                     ng-change=\"personalSettings.requirePasswordConfirmation()\"
                     data-title=\"";
                // line 24
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_NewPasswordRepeat"]), "html_attr");
                echo "\"
                     value=\"\" inline-help=\"";
                // line 25
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_TypeYourPasswordAgain"]), "html_attr");
                echo "\">
                </div>

                <div piwik-field uicontrol=\"password\" name=\"passwordConfirmation\" autocomplete=\"off\"
                     ng-model=\"personalSettings.current_password\"
                     data-title=\"";
                // line 30
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_YourCurrentPassword"]), "html_attr");
                echo "\"
                     value=\"\" inline-help=\"";
                // line 31
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_TypeYourCurrentPassword"]), "html_attr");
                echo "\">
                </div>

                <input type=\"submit\"
                       value=\"";
                // line 35
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Save"]), "html_attr");
                echo "\"
                       class=\"btn\"/>
            ";
            }
            // line 38
            echo "
            ";
            // line 39
            if (( !array_key_exists("isValidHost", $context) ||  !(isset($context["isValidHost"]) || array_key_exists("isValidHost", $context) ? $context["isValidHost"] : (function () { throw new RuntimeError('Variable "isValidHost" does not exist.', 39, $this->source); })()))) {
                // line 40
                echo "                <div class=\"alert alert-danger\">
                    ";
                // line 41
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_InjectedHostCannotChangePwd", (isset($context["invalidHost"]) || array_key_exists("invalidHost", $context) ? $context["invalidHost"] : (function () { throw new RuntimeError('Variable "invalidHost" does not exist.', 41, $this->source); })())]), "html", null, true);
                echo "
                    ";
                // line 42
                if ( !(isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 42, $this->source); })())) {
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_EmailYourAdministrator", (isset($context["invalidHostMailLinkStart"]) || array_key_exists("invalidHostMailLinkStart", $context) ? $context["invalidHostMailLinkStart"] : (function () { throw new RuntimeError('Variable "invalidHostMailLinkStart" does not exist.', 42, $this->source); })()), "</a>"]);
                }
                // line 43
                echo "                </div>
            ";
            }
            // line 45
            echo "
        </form>
    </div>

    ";
            // line 49
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.userSecurity.afterPassword"]);
            echo "
";
        }
        // line 51
        echo "
    <a name=\"authtokens\" id=\"authtokens\"></a>
    <div piwik-content-block content-title=\"";
        // line 53
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_AuthTokens"]), "html_attr");
        echo "\">
        <p>
            ";
        // line 55
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_TokenAuthIntro"]), "html", null, true);
        echo "
            ";
        // line 56
        if ((isset($context["hasTokensWithExpireDate"]) || array_key_exists("hasTokensWithExpireDate", $context) ? $context["hasTokensWithExpireDate"] : (function () { throw new RuntimeError('Variable "hasTokensWithExpireDate" does not exist.', 56, $this->source); })())) {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_ExpiredTokensDeleteAutomatically"]), "html", null, true);
        }
        // line 57
        echo "        </p>
        <table piwik-content-table class=\"listAuthTokens\">
            <thead>
            <tr>
                <th>";
        // line 61
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_CreationDate"]), "html", null, true);
        echo "</th>
                <th>";
        // line 62
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Description"]), "html", null, true);
        echo "</th>
                <th>";
        // line 63
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_LastUsed"]), "html", null, true);
        echo "</th>
                ";
        // line 64
        if ((isset($context["hasTokensWithExpireDate"]) || array_key_exists("hasTokensWithExpireDate", $context) ? $context["hasTokensWithExpireDate"] : (function () { throw new RuntimeError('Variable "hasTokensWithExpireDate" does not exist.', 64, $this->source); })())) {
            echo "<th title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_TokensWithExpireDateCreationBySystem"]), "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_ExpireDate"]), "html", null, true);
            echo "</th>";
        }
        // line 65
        echo "                <th>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Actions"]), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 69
        if (twig_test_empty((isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new RuntimeError('Variable "tokens" does not exist.', 69, $this->source); })()))) {
            // line 70
            echo "            <tr>
                <td colspan=\"";
            // line 71
            if ((isset($context["hasTokensWithExpireDate"]) || array_key_exists("hasTokensWithExpireDate", $context) ? $context["hasTokensWithExpireDate"] : (function () { throw new RuntimeError('Variable "hasTokensWithExpireDate" does not exist.', 71, $this->source); })())) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">
                    ";
            // line 72
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_NoTokenCreatedYetCreateNow", (("<a href=\"" . \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "UsersManager", "action" => "addNewToken"]]), "html_attr")) . "\">"), "</a>"]);
            echo "
                </td></tr>
            ";
        } else {
            // line 75
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new RuntimeError('Variable "tokens" does not exist.', 75, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["theToken"]) {
                // line 76
                echo "                    <tr>
                        <td><span class=\"creationDate\">";
                // line 77
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theToken"], "date_created", [], "any", false, false, false, 77), "html", null, true);
                echo "</span></td>
                        <td>";
                // line 78
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theToken"], "description", [], "any", false, false, false, 78), "html", null, true);
                echo "</td>
                        <td>";
                // line 79
                if (twig_get_attribute($this->env, $this->source, $context["theToken"], "last_used", [], "any", false, false, false, 79)) {
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theToken"], "last_used", [], "any", false, false, false, 79), "html", null, true);
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Never"]), "html", null, true);
                }
                echo "</td>
                        ";
                // line 80
                if ((isset($context["hasTokensWithExpireDate"]) || array_key_exists("hasTokensWithExpireDate", $context) ? $context["hasTokensWithExpireDate"] : (function () { throw new RuntimeError('Variable "hasTokensWithExpireDate" does not exist.', 80, $this->source); })())) {
                    // line 81
                    echo "                            <td title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_TokensWithExpireDateCreationBySystem"]), "html_attr");
                    echo "\">
                            ";
                    // line 82
                    if (twig_get_attribute($this->env, $this->source, $context["theToken"], "date_expired", [], "any", false, false, false, 82)) {
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theToken"], "date_expired", [], "any", false, false, false, 82), "html", null, true);
                    } else {
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Never"]), "html", null, true);
                    }
                    // line 83
                    echo "                            </td>
                        ";
                }
                // line 85
                echo "                        <td>
                            <form method=\"post\" action=\"";
                // line 86
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "UsersManager", "action" => "deleteToken"]]), "html", null, true);
                echo "\" style=\"display: inline\">
                                <input name=\"nonce\" type=\"hidden\" value=\"";
                // line 87
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["deleteTokenNonce"]) || array_key_exists("deleteTokenNonce", $context) ? $context["deleteTokenNonce"] : (function () { throw new RuntimeError('Variable "deleteTokenNonce" does not exist.', 87, $this->source); })()), "html_attr");
                echo "\">
                                <input name=\"idtokenauth\" type=\"hidden\" value=\"";
                // line 88
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theToken"], "idusertokenauth", [], "any", false, false, false, 88), "html_attr");
                echo "\">
                                <button type=\"submit\" class=\"table-action\"
                                        title=\"";
                // line 90
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Delete"]), "html_attr");
                echo "\">
                                    <span class=\"icon-delete\"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theToken'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "            ";
        }
        // line 98
        echo "            </tbody>
        </table>

        <div class=\"tableActionBar\">
            <a href=\"";
        // line 102
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "UsersManager", "action" => "addNewToken"]]), "html_attr");
        echo "\" class=\"addNewToken\">
                <span class=\"icon-add\"></span>
               ";
        // line 104
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_CreateNewToken"]), "html", null, true);
        echo "
            </a>

            ";
        // line 107
        if ( !twig_test_empty((isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new RuntimeError('Variable "tokens" does not exist.', 107, $this->source); })()))) {
            // line 108
            echo "            <form method=\"post\" action=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "UsersManager", "action" => "deleteToken"]]), "html", null, true);
            echo "\" style=\"display: inline\">
                <input name=\"nonce\" type=\"hidden\" value=\"";
            // line 109
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["deleteTokenNonce"]) || array_key_exists("deleteTokenNonce", $context) ? $context["deleteTokenNonce"] : (function () { throw new RuntimeError('Variable "deleteTokenNonce" does not exist.', 109, $this->source); })()), "html_attr");
            echo "\">
                <input name=\"idtokenauth\" type=\"hidden\" value=\"all\">
                <button type=\"submit\" class=\"table-action\">
                    <span class=\"icon-delete\"></span> ";
            // line 112
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_DeleteAllTokens"]), "html", null, true);
            echo "
                </button>
            </form>
            ";
        }
        // line 116
        echo "        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "@UsersManager/userSecurity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 116,  326 => 112,  320 => 109,  315 => 108,  313 => 107,  307 => 104,  302 => 102,  296 => 98,  293 => 97,  280 => 90,  275 => 88,  271 => 87,  267 => 86,  264 => 85,  260 => 83,  254 => 82,  249 => 81,  247 => 80,  239 => 79,  235 => 78,  231 => 77,  228 => 76,  223 => 75,  217 => 72,  209 => 71,  206 => 70,  204 => 69,  196 => 65,  188 => 64,  184 => 63,  180 => 62,  176 => 61,  170 => 57,  166 => 56,  162 => 55,  157 => 53,  153 => 51,  148 => 49,  142 => 45,  138 => 43,  134 => 42,  130 => 41,  127 => 40,  125 => 39,  122 => 38,  116 => 35,  109 => 31,  105 => 30,  97 => 25,  93 => 24,  84 => 18,  80 => 17,  74 => 13,  72 => 12,  67 => 10,  62 => 8,  57 => 7,  55 => 6,  51 => 5,  46 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'General_Security'|translate }}{% endset %}

{% block content %}
{% if isUsersAdminEnabled %}
    <div piwik-content-block content-title=\"{{ 'General_ChangePassword'|translate|e('html_attr') }}\" feature=\"true\">
        <form id=\"userSettingsTable\" method=\"post\" action=\"{{ linkTo({'module': 'UsersManager', 'action': 'recordPasswordChange'}) }}\">

            <input type=\"hidden\" value=\"{{ changePasswordNonce|e('html_attr') }}\" name=\"nonce\">

            {% if isValidHost is defined and isValidHost %}

                <div piwik-field uicontrol=\"password\" name=\"password\" autocomplete=\"off\"
                     ng-model=\"personalSettings.password\"
                     ng-change=\"personalSettings.requirePasswordConfirmation()\"
                     data-title=\"{{ 'Login_NewPassword'|translate|e('html_attr') }}\"
                     value=\"\" inline-help=\"{{ 'UsersManager_IfYouWouldLikeToChangeThePasswordTypeANewOne'|translate|e('html_attr') }}\">
                </div>

                <div piwik-field uicontrol=\"password\" name=\"passwordBis\" autocomplete=\"off\"
                     ng-model=\"personalSettings.passwordBis\"
                     ng-change=\"personalSettings.requirePasswordConfirmation()\"
                     data-title=\"{{ 'Login_NewPasswordRepeat'|translate|e('html_attr') }}\"
                     value=\"\" inline-help=\"{{ 'UsersManager_TypeYourPasswordAgain'|translate|e('html_attr') }}\">
                </div>

                <div piwik-field uicontrol=\"password\" name=\"passwordConfirmation\" autocomplete=\"off\"
                     ng-model=\"personalSettings.current_password\"
                     data-title=\"{{ 'UsersManager_YourCurrentPassword'|translate|e('html_attr') }}\"
                     value=\"\" inline-help=\"{{ 'UsersManager_TypeYourCurrentPassword'|translate|e('html_attr') }}\">
                </div>

                <input type=\"submit\"
                       value=\"{{ 'General_Save'|translate|e('html_attr') }}\"
                       class=\"btn\"/>
            {% endif %}

            {% if isValidHost is not defined or not isValidHost %}
                <div class=\"alert alert-danger\">
                    {{ 'UsersManager_InjectedHostCannotChangePwd'|translate(invalidHost) }}
                    {% if not isSuperUser %}{{ 'UsersManager_EmailYourAdministrator'|translate(invalidHostMailLinkStart,'</a>')|raw }}{% endif %}
                </div>
            {% endif %}

        </form>
    </div>

    {{ postEvent('Template.userSecurity.afterPassword') }}
{% endif %}

    <a name=\"authtokens\" id=\"authtokens\"></a>
    <div piwik-content-block content-title=\"{{ 'UsersManager_AuthTokens'|translate|e('html_attr') }}\">
        <p>
            {{ 'UsersManager_TokenAuthIntro'|translate }}
            {% if hasTokensWithExpireDate %}{{ 'UsersManager_ExpiredTokensDeleteAutomatically'|translate }}{% endif %}
        </p>
        <table piwik-content-table class=\"listAuthTokens\">
            <thead>
            <tr>
                <th>{{ 'General_CreationDate'|translate }}</th>
                <th>{{ 'General_Description'|translate }}</th>
                <th>{{ 'UsersManager_LastUsed'|translate }}</th>
                {% if hasTokensWithExpireDate %}<th title=\"{{ 'UsersManager_TokensWithExpireDateCreationBySystem'|translate|e('html_attr') }}\">{{ 'UsersManager_ExpireDate'|translate }}</th>{% endif %}
                <th>{{ 'General_Actions'|translate }}</th>
            </tr>
            </thead>
            <tbody>
            {% if tokens is empty %}
            <tr>
                <td colspan=\"{% if hasTokensWithExpireDate %}5{% else %}4{% endif %}\">
                    {{ 'UsersManager_NoTokenCreatedYetCreateNow'|translate('<a href=\"' ~ (linkTo({'module': 'UsersManager', 'action': 'addNewToken'})|e('html_attr'))~ '\">', '</a>')|raw }}
                </td></tr>
            {% else %}
                {% for theToken in tokens %}
                    <tr>
                        <td><span class=\"creationDate\">{{ theToken.date_created }}</span></td>
                        <td>{{ theToken.description }}</td>
                        <td>{% if theToken.last_used %}{{ theToken.last_used }}{% else %}{{ 'General_Never'|translate }}{% endif %}</td>
                        {% if hasTokensWithExpireDate %}
                            <td title=\"{{ 'UsersManager_TokensWithExpireDateCreationBySystem'|translate|e('html_attr') }}\">
                            {% if theToken.date_expired %}{{ theToken.date_expired }}{% else %}{{ 'General_Never'|translate }}{% endif %}
                            </td>
                        {% endif %}
                        <td>
                            <form method=\"post\" action=\"{{ linkTo({'module': 'UsersManager', 'action': 'deleteToken'}) }}\" style=\"display: inline\">
                                <input name=\"nonce\" type=\"hidden\" value=\"{{ deleteTokenNonce|e('html_attr')  }}\">
                                <input name=\"idtokenauth\" type=\"hidden\" value=\"{{ theToken.idusertokenauth|e('html_attr') }}\">
                                <button type=\"submit\" class=\"table-action\"
                                        title=\"{{ 'General_Delete'|translate|e('html_attr') }}\">
                                    <span class=\"icon-delete\"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                {% endfor %}
            {% endif %}
            </tbody>
        </table>

        <div class=\"tableActionBar\">
            <a href=\"{{ linkTo({'module': 'UsersManager', 'action': 'addNewToken'})|e('html_attr') }}\" class=\"addNewToken\">
                <span class=\"icon-add\"></span>
               {{ 'UsersManager_CreateNewToken'|translate }}
            </a>

            {% if tokens is not empty %}
            <form method=\"post\" action=\"{{ linkTo({'module': 'UsersManager', 'action': 'deleteToken'}) }}\" style=\"display: inline\">
                <input name=\"nonce\" type=\"hidden\" value=\"{{ deleteTokenNonce|e('html_attr')  }}\">
                <input name=\"idtokenauth\" type=\"hidden\" value=\"all\">
                <button type=\"submit\" class=\"table-action\">
                    <span class=\"icon-delete\"></span> {{ 'UsersManager_DeleteAllTokens'|translate }}
                </button>
            </form>
            {% endif %}
        </div>

    </div>


{% endblock %}
", "@UsersManager/userSecurity.twig", "C:\\xampp\\htdocs\\matomo\\plugins\\UsersManager\\templates\\userSecurity.twig");
    }
}
