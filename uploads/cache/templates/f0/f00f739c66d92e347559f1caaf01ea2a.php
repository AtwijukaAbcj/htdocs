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

/* components/blankSlate.twig.html */
class __TwigTemplate_884a5b3d4f74967d9c293645671aaa0a extends Template
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
<div class=\"blankslate w-full h-full flex flex-col items-center justify-center text-gray-600 text-lg\">
    ";
        // line 14
        if (($context["isFiltered"] ?? null)) {
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("No results matched your search."), "html", null, true);
            echo "
    ";
        } elseif (        // line 16
($context["blankSlate"] ?? null)) {
            // line 17
            echo "        ";
            echo ($context["blankSlate"] ?? null);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("There are no records to display."), "html", null, true);
            echo "
    ";
        }
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "components/blankSlate.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  56 => 19,  50 => 17,  48 => 16,  43 => 15,  41 => 14,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/blankSlate.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\components\\blankSlate.twig.html");
    }
}
