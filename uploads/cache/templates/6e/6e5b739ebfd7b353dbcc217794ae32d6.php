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

/* report.twig.html */
class __TwigTemplate_87434a6bd1d6e7d1e8752f9e27b32c9d extends Template
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
        echo "<!DOCTYPE html>
<html ";
        // line 11
        echo ((($context["rightToLeft"] ?? null)) ? ("dir=\"rtl\"") : (""));
        echo ">
    <head>
        ";
        // line 13
        echo twig_include($this->env, $context, "head.twig.html");
        echo "
    </head>
    <body class=\"print\">
        <style>
            table, a, .subdued, .text-gray-100, .text-gray-200, .text-gray-300, .text-gray-400  {
                color: #000000 !important;
            }
        </style>
        <div id=\"wrap-report\" class=\"mx-auto ";
        // line 21
        echo (((($context["orientation"] ?? null) == "L")) ? ("max-w-6xl") : ("max-w-3xl"));
        echo "\">
            ";
        // line 22
        if ( !($context["hideHeader"] ?? null)) {
            // line 23
            echo "            <div id=\"header-report\" class=\"flex items-center w-full my-6\">
                
                <div id=\"header-logo\" class=\"leading-none\">
                    <img class=\"block max-w-full\" alt=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["organisationNameShort"] ?? null), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ((array_key_exists("organisationLogo", $context)) ? (_twig_default_filter(($context["organisationLogo"] ?? null), "/themes/Default/img/logo.png")) : ("/themes/Default/img/logo.png")), "html", null, true);
            echo "\" width=\"400\"/>
                </div>

                <div id=\"header-text\" class=\"w-3/4 text-xs leading-tight pl-10\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, twig_sprintf($this->env->getFunction('__')->getCallable()("This printout contains information that is the property of %1\$s. If you find this report, and do not have permission to read it, please return it to %2\$s (%3\$s). In the event that it cannot be returned, please destroy it."), ($context["organisationName"] ?? null), ($context["organisationAdministratorName"] ?? null), ($context["organisationAdministratorEmail"] ?? null)), "html", null, true);
            echo "
                </div>
            </div>
            ";
        } else {
            // line 34
            echo "                <br/>
            ";
        }
        // line 36
        echo "
            <div id=\"content-wrap-report\" class=\"w-full max-w-full\">

                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "alerts", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["type"] => $context["alerts"]) {
            // line 40
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["alerts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 41
                echo "                        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo $context["text"];
                echo "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['alerts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                ";
        // line 45
        if (($context["isLoggedIn"] ?? null)) {
            // line 46
            echo "                    ";
            echo twig_join_filter(($context["content"] ?? null), "
");
            echo "
                ";
        }
        // line 48
        echo "            </div>

            <div id=\"footer-report\" class=\"pt-8 text-xs text-right italic\">
                ";
        // line 51
        echo twig_escape_filter($this->env, twig_sprintf($this->env->getFunction('__')->getCallable()("Created by %1\$s (%2\$s) at %3\$s on %4\$s."), ($context["username"] ?? null), ($context["organisationNameShort"] ?? null), ($context["time"] ?? null), ($context["date"] ?? null)), "html", null, true);
        echo "
            </div>
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "report.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  132 => 48,  125 => 46,  123 => 45,  120 => 44,  114 => 43,  103 => 41,  98 => 40,  94 => 39,  89 => 36,  85 => 34,  78 => 30,  67 => 26,  62 => 23,  60 => 22,  56 => 21,  45 => 13,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "report.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\report.twig.html");
    }
}
