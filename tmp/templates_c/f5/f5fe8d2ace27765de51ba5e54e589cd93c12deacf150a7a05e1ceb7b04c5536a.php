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

/* @GeoIp2/serverModule.twig */
class __TwigTemplate_67f06e2a6e7e81f7e62e393f26037d50befbfda7ffdc8445c834927da7106094 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<br />";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["GeoIp2_GeoIPVariablesConfigurationHere", (("<a href=\"" . \Piwik\piwik_escape_filter($this->env, (isset($context["configUrl"]) || array_key_exists("configUrl", $context) ? $context["configUrl"] : (function () { throw new RuntimeError('Variable "configUrl" does not exist.', 1, $this->source); })()), "html_attr")) . "\">"), "</a>"]);
    }

    public function getTemplateName()
    {
        return "@GeoIp2/serverModule.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<br />{{ 'GeoIp2_GeoIPVariablesConfigurationHere'|translate('<a href=\"' ~ configUrl|e('html_attr') ~ '\">', '</a>')|raw }}", "@GeoIp2/serverModule.twig", "C:\\xampp\\htdocs\\matomo\\plugins\\GeoIp2\\templates\\serverModule.twig");
    }
}
