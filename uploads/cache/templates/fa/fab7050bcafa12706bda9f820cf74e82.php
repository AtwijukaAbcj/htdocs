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

/* ui/gettingStarted.twig.html */
class __TwigTemplate_e556320cbd5a7a97a1400033fd7fc04f extends Template
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
";
        // line 11
        $macros["page"] = $this->macros["page"] = $this;
        // line 12
        echo "
";
        // line 13
        if (($context["postInstall"] ?? null)) {
            // line 14
            echo "    <div class=\"mt-6 mb-2 py-6 px-6 bg-white shadow rounded font-sans\">
        <div class=\"text-lg text-gray-800 font-semibold leading-normal\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Post-Install & Server Config"), "html", null, true);
            echo "
        </div>

        <p class=\"mt-2 mb-0 text-gray-600\">
            ";
            // line 20
            echo twig_sprintf($this->env->getFunction('__')->getCallable()("To complete your installation, it is advisable to follow the %1\$sPost-Install and Server Config instructions%2\$s."), "<a target='_blank' href='https://gibbonedu.org/support/administrators/installing-gibbon/#post-install-server-config'>", "</a>");
            echo "
            <br/><br/>

            ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("After logging in, be sure to visit the System Check page to ensure all system requirements have been met. You can find additional information about your system in the Server Info page."), "html", null, true);
            echo "
        </p>
    </div>
";
        }
        // line 27
        echo "
<div class=\"mt-6 mb-2 bg-white shadow rounded font-sans\">

    <div class=\"py-6 px-6 border-b border-gray-300\">
        <div class=\"text-lg text-gray-800 font-semibold leading-normal\">
            ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Getting Started with Gibbon"), "html", null, true);
        echo "
        </div>

        <p class=\"mt-2 mb-0 text-gray-600\">";
        // line 35
        echo $this->env->getFunction('__')->getCallable()("Our community offers documentation and support forums to help get you up and running with Gibbon. If you need additional assistance, members of the Gibbon team can provide expert support. Visit {link} to learn more.", ["link" => "<a href=\"http://gibbonedu.com\" target=\"_blank\" class=\"text-red-700 underline\">gibbonedu.com</a>"]);
        echo "</p>
    </div>

    <div class=\"py-4 px-3 flex flex-wrap items-stretch\">

        ";
        // line 40
        echo twig_call_macro($macros["page"], "macro_card", [$this->env->getFunction('__')->getCallable()("Documentation"), $this->env->getFunction('__')->getCallable()("Our docs provide technical information as well as user guides for Administrators, Developers, Teachers, and Parents."), "docs", "https://docs.gibbonedu.org"], 40, $context, $this->getSourceContext());
        echo "

        ";
        // line 42
        echo twig_call_macro($macros["page"], "macro_card", [$this->env->getFunction('__')->getCallable()("Support Forums"), $this->env->getFunction('__')->getCallable()("If you need help try asking members of the Gibbon community. Similarly, issues and bugs can be reported to the forum as well."), "forums", "https://ask.gibbonedu.org"], 42, $context, $this->getSourceContext());
        echo "

        <div class=\"w-full text-base text-gray-600 font-light mt-6 mb-2 ml-3\">
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Extended Services"), "html", null, true);
        echo "
        </div>

        ";
        // line 48
        if (twig_test_empty(($context["gibboneduComOrganisationKey"] ?? null))) {
            // line 49
            echo "
            ";
            // line 50
            echo twig_call_macro($macros["page"], "macro_card", [$this->env->getFunction('__')->getCallable()("Expert Support"), $this->env->getFunction('__')->getCallable()("Members of the Gibbon team are available to help with your Gibbon needs through Ad Hoc support or a Support Contract."), "support", "http://gibbonedu.com"], 50, $context, $this->getSourceContext());
            echo "

            ";
            // line 52
            echo twig_call_macro($macros["page"], "macro_card", [$this->env->getFunction('__')->getCallable()("Value Added License"), $this->env->getFunction('__')->getCallable()("Gibbon Value Added License, which, via the Query Builder module, gives access to over 90 useful queries."), "license", "http://gibbonedu.com"], 52, $context, $this->getSourceContext());
            echo "

        ";
        } else {
            // line 55
            echo "
            ";
            // line 56
            echo twig_call_macro($macros["page"], "macro_card", [$this->env->getFunction('__')->getCallable()("Expert Support"), $this->env->getFunction('__')->getCallable()("Members of the Gibbon team are available to help with your Gibbon needs through Ad Hoc support or a Support Contract."), "support", (($context["absoluteURL"] ?? null) . "/index.php?q=/modules/System Admin/services_manage.php"), ""], 56, $context, $this->getSourceContext());
            echo "

            ";
            // line 58
            echo twig_call_macro($macros["page"], "macro_card", [$this->env->getFunction('__')->getCallable()("Value Added License"), $this->env->getFunction('__')->getCallable()("Gibbon Value Added License, which, via the Query Builder module, gives access to over 90 useful queries."), "license", (($context["absoluteURL"] ?? null) . "/index.php?q=/modules/System Admin/services_manage.php"), ""], 58, $context, $this->getSourceContext());
            echo "

        ";
        }
        // line 61
        echo "    </div>

    ";
        // line 63
        if ((twig_test_empty(($context["gibboneduComOrganisationKey"] ?? null)) &&  !twig_test_empty(($context["gibbonVersion"] ?? null)))) {
            // line 64
            echo "    <div class=\"px-6 pt-3 pb-3 text-gray-600 border-t border-gray-300\">
        <p class=\"m-0\">
        ";
            // line 66
            echo $this->env->getFunction('__')->getCallable()("Do you have a Service Key? View and configure your licenses on the {link} page.", ["link" => (((("<a href=\"" . ($context["absoluteURL"] ?? null)) . "/index.php?q=/modules/System Admin/services_manage.php\" class=\"text-red-700 underline\">") . $this->env->getFunction('__')->getCallable()("Manage Services")) . "</a>")]);
            echo "
        </p>
    </div>
    ";
        }
        // line 70
        echo "</div>

";
    }

    // line 72
    public function macro_card($__name__ = null, $__content__ = null, $__icon__ = "", $__url__ = "", $__target__ = "_blank", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "content" => $__content__,
            "icon" => $__icon__,
            "url" => $__url__,
            "target" => $__target__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 73
            echo "    <div class=\"w-full sm:w-1/2 pr-4\">
        <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "\" class=\"flex bg-white rounded h-full text-gray-800 hover:bg-";
            echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
            echo "-100 hover:text-";
            echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
            echo "-700\">
            <div class=\"pl-4 pr-2 py-4\">
                ";
            // line 76
            echo twig_include($this->env, $context, "ui/icons.twig.html", ["iconClass" => "w-10 h-10 opacity-75"]);
            echo "
            </div>
            <div class=\"flex-1 p-4\">
                <p class=\"m-0 text-base font-semibold font-sans\">
                    ";
            // line 80
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "
                </p>
                <p class=\"m-0 pt-3 text-gray-600 leading-tight\">
                    ";
            // line 83
            echo ($context["content"] ?? null);
            echo "
                </p>
            </div>
        </a>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "ui/gettingStarted.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 83,  200 => 80,  193 => 76,  182 => 74,  179 => 73,  162 => 72,  156 => 70,  149 => 66,  145 => 64,  143 => 63,  139 => 61,  133 => 58,  128 => 56,  125 => 55,  119 => 52,  114 => 50,  111 => 49,  109 => 48,  103 => 45,  97 => 42,  92 => 40,  84 => 35,  78 => 32,  71 => 27,  64 => 23,  58 => 20,  51 => 16,  47 => 14,  45 => 13,  42 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "ui/gettingStarted.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\ui\\gettingStarted.twig.html");
    }
}
