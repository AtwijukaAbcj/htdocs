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

/* ui/enrolmentOverview.twig.html */
class __TwigTemplate_fec5e565ce8772e4702a3923dd036b8a extends Template
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
        // line 10
        echo "
<div class=\"flex flex-col sm:flex-row w-full mt-4 mb-6 bg-white shadow rounded font-sans\">

    <div class=\"w-full sm:w-1/3 flex flex-wrap font-sans items-start content-end justify-between py-5 px-6 border-b sm:border-b-0 sm:border-r border-gray-300\">
        <div class=\"w-full text-sm font-light text-gray-600\">
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Current Enrolment"), "html", null, true);
        echo "
        </div>
        <div class=\"text-xl font-semibold text-gray-800 leading-normal\">
            ";
        // line 18
        echo twig_escape_filter($this->env, ($context["currentEnrolment"] ?? null), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"w-full sm:w-1/3 flex flex-wrap font-sans items-start content-end justify-between py-5 px-6 border-b sm:border-b-0 sm:border-r border-gray-300\">
        <div class=\"w-full text-sm font-light text-gray-600\">
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("60 Days Ago"), "html", null, true);
        echo "
        </div>
        <div class=\"text-xl font-semibold text-gray-800 leading-normal\">
            ";
        // line 27
        echo twig_escape_filter($this->env, ($context["lastEnrolment"] ?? null), "html", null, true);
        echo "
        </div>
        <div class=\"mt-1\">
            ";
        // line 30
        $context["change"] = (($context["currentEnrolment"] ?? null) - ($context["lastEnrolment"] ?? null));
        // line 31
        echo "            <span class=\"tag rounded-full ";
        echo (((($context["change"] ?? null) > 0)) ? ("success") : ((((($context["change"] ?? null) < 0)) ? ("error") : ("dull"))));
        echo "\">
                ";
        // line 32
        echo twig_escape_filter($this->env, (((($context["change"] ?? null) > 0)) ? (("+" . ($context["change"] ?? null))) : ((((($context["change"] ?? null) < 0)) ? (($context["change"] ?? null)) : ($this->env->getFunction('__')->getCallable()("No Change"))))), "html", null, true);
        echo "
            </span>
        </div>
    </div>

    <div class=\"w-full sm:w-1/3 flex flex-wrap font-sans items-start content-end justify-between py-5 px-6 border-gray-300\">
        <div class=\"w-full text-sm font-light text-gray-600\">
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("In 60 Days"), "html", null, true);
        echo "
        </div>
        <div class=\"text-xl font-semibold text-gray-800 leading-normal\">
            ";
        // line 42
        echo twig_escape_filter($this->env, ($context["nextEnrolment"] ?? null), "html", null, true);
        echo "
        </div>
        <div class=\"mt-1\">
            ";
        // line 45
        $context["change"] = (($context["nextEnrolment"] ?? null) - ($context["currentEnrolment"] ?? null));
        // line 46
        echo "            <span class=\"tag rounded-full ";
        echo (((($context["change"] ?? null) > 0)) ? ("success") : ((((($context["change"] ?? null) < 0)) ? ("error") : ("dull"))));
        echo "\">
                ";
        // line 47
        echo twig_escape_filter($this->env, (((($context["change"] ?? null) > 0)) ? (("+" . ($context["change"] ?? null))) : ((((($context["change"] ?? null) < 0)) ? (($context["change"] ?? null)) : ($this->env->getFunction('__')->getCallable()("No Change"))))), "html", null, true);
        echo "
            </span>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ui/enrolmentOverview.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 47,  102 => 46,  100 => 45,  94 => 42,  88 => 39,  78 => 32,  73 => 31,  71 => 30,  65 => 27,  59 => 24,  50 => 18,  44 => 15,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "ui/enrolmentOverview.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\ui\\enrolmentOverview.twig.html");
    }
}
