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

/* @CoreHome/_singleWidget.twig */
class __TwigTemplate_435d2bb1a85f8fe3f7f3f96dffdc0712d3480238506165d178cd3be74e5724e5 extends Template
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
        echo "<div piwik-content-block content-title=\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), [(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1, $this->source); })())]), "html_attr");
        echo "\">
    ";
        // line 2
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 2, $this->source); })());
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_singleWidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div piwik-content-block content-title=\"{{ title|translate|e('html_attr') }}\">
    {{ content|raw }}
</div>", "@CoreHome/_singleWidget.twig", "C:\\xampp\\htdocs\\matomo\\plugins\\CoreHome\\templates\\_singleWidget.twig");
    }
}
