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

/* finder.twig.html */
class __TwigTemplate_d6729f69765248ce232760ca2eb3bb58 extends Template
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
        // line 12
        echo "
<style>
    #fastFinder .token-input-list-facebook {
        background-color: rgba(255,255,255,0.2) !important;
        border: 1px transparent !important;
        border-radius: .25rem 0 0 .25rem !important;
        height: 34px !important;
        position: absolute;
        top: -17px;
    }

    #fastFinder #token-input-fastFinderSearch {
        color: #ffffff !important;
    }

    #fastFinder .token-input-list-facebook:focus-within {
        border: 1px solid rgba(255,255,255,0.5) !important;
        border-radius: .25rem 0 0 0 !important;
    }

    #fastFinder .token-input-token-facebook {
        margin: 0.25rem !important;
    }

    #fastFinderSearch {
        background-color: rgba(255,255,255,0.2) !important;
        border: 1px transparent !important;
    }

    #fastFinder input[type=\"submit\"] {
        background-color: rgba(255,255,255,0.2) !important;
        border: 1px transparent !important;
        border-radius: 0 .25rem .25rem 0 !important;
        margin-left: 1px !important;
    }

    .token-input-dropdown-facebook li {
        padding: 0.4rem 0.75rem !important;
    }
</style>

<button data-toggle=\"#fastFinder\" class=\"flex sm:hidden items-center rounded bg-gray-300 mr-2 px-4 py-3 text-base\">
    <span class=\"hidden sm:inline text-gray-600 text-xs font-bold uppercase pr-2\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Fast Finder"), "html", null, true);
        echo "</span>
    <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ($context["gibbonThemeName"] ?? null), "html", null, true);
        echo "/img/search.png\" width=\"20\" height=\"20\">
</button>

<div id=\"fastFinder\" class=\"hidden sm:block absolute sm:static left-0 z-50 w-full sm:max-w-md -mt-16 sm:mt-0 pb-10 sm:pb-0\">

    <div class=\"absolute top-0 block sm:hidden w-full h-24 shadow\" style=\"background:#794d95\">
        <a data-toggle=\"#fastFinder\" class=\"p-2 pr-4 float-right text-xs link-white underline sm:hidden\" href=\"#\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("close"), "html", null, true);
        echo "</a>
    </div>

    <div class=\"w-full px-4 sm:px-2 mt-8 sm:mt-0\">
    ";
        // line 65
        echo ($context["form"] ?? null);
        echo "
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "finder.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 65,  96 => 61,  85 => 55,  81 => 54,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "finder.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\finder.twig.html");
    }
}
