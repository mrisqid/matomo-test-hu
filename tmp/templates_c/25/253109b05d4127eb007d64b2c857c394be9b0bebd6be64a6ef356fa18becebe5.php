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

/* @CoreHome/_applePinnedTabIcon.twig */
class __TwigTemplate_b4c09df31fa68414e7c3645d9a023043db05d23f2502f72231022f4155b5b132 extends Template
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
        if ((((isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 1, $this->source); })()) && array_key_exists("customFavicon", $context)) && (isset($context["customFavicon"]) || array_key_exists("customFavicon", $context) ? $context["customFavicon"] : (function () { throw new RuntimeError('Variable "customFavicon" does not exist.', 1, $this->source); })()))) {
        } else {
            // line 3
            echo "\t<link rel=\"mask-icon\" href=\"plugins/CoreHome/images/applePinnedTab.svg\" color=\"#3450A3\">
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_applePinnedTabIcon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if isCustomLogo and customFavicon is defined and customFavicon %}
{% else %}
\t<link rel=\"mask-icon\" href=\"plugins/CoreHome/images/applePinnedTab.svg\" color=\"#3450A3\">
{% endif %}
", "@CoreHome/_applePinnedTabIcon.twig", "C:\\xampp\\htdocs\\matomo\\plugins\\CoreHome\\templates\\_applePinnedTabIcon.twig");
    }
}
