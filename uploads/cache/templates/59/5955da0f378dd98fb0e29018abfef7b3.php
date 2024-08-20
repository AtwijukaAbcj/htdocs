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

/* welcome.twig.html */
class __TwigTemplate_c442aac4a794edad74bf6323f89042f5 extends Template
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
        $macros["homepage"] = $this->macros["homepage"] = $this;
        // line 11
        echo "
<div class=\"flex flex-wrap mb-4 -mx-2 items-stretch \">
    <div class=\"w-full mx-2 my-2\">
        <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Welcome"), "html", null, true);
        echo "</h2>
        <p>
        ";
        // line 16
        echo ($context["indexText"] ?? null);
        echo "
        </p>
    </div>

    ";
        // line 20
        if (($context["admissionsEnabled"] ?? null)) {
            // line 21
            echo "        ";
            echo twig_call_macro($macros["homepage"], "macro_card", [$this->env->getFunction('__')->getCallable()(            // line 22
($context["admissionsLinkName"] ?? null)), $this->env->getFunction('__')->getCallable()(            // line 23
($context["admissionsLinkText"] ?? null)), "/?q=/modules/Admissions/applicationFormSelect.php",             // line 25
($context["organisationName"] ?? null), "first"], 21, $context, $this->getSourceContext());
            // line 27
            echo "

    ";
        } elseif (        // line 29
($context["publicStudentApplications"] ?? null)) {
            // line 30
            echo "        ";
            echo twig_call_macro($macros["homepage"], "macro_card", [$this->env->getFunction('__')->getCallable()("Student Applications"), $this->env->getFunction('__')->getCallable()("Parents of students interested in study at %1\$s may use our %2\$s online form%3\$s to initiate the application process."), "/?q=/modules/Students/applicationForm.php",             // line 34
($context["organisationName"] ?? null), "first"], 30, $context, $this->getSourceContext());
            // line 36
            echo "
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (($context["publicStaffApplications"] ?? null)) {
            // line 40
            echo "        ";
            echo twig_call_macro($macros["homepage"], "macro_card", [$this->env->getFunction('__')->getCallable()("Staff Applications"), $this->env->getFunction('__')->getCallable()("Individuals interested in working at %1\$s may use our %2\$s online form%3\$s to view job openings and begin the recruitment process."), "/?q=/modules/Staff/applicationForm_jobOpenings_view.php",             // line 44
($context["organisationName"] ?? null), "first"], 40, $context, $this->getSourceContext());
            // line 46
            echo "
    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if (($context["publicRegistration"] ?? null)) {
            // line 50
            echo "        ";
            echo twig_call_macro($macros["homepage"], "macro_card", [$this->env->getFunction('__')->getCallable()("Register"), (($this->env->getFunction('__')->getCallable()("Join our learning community.") . " ") . $this->env->getFunction('__')->getCallable()("It's free!")), "/?q=/publicRegistration.php"], 50, $context, $this->getSourceContext());
            // line 54
            echo "

    ";
        }
        // line 57
        echo "
    ";
        // line 58
        if (($context["makeDepartmentsPublic"] ?? null)) {
            // line 59
            echo "        ";
            echo twig_call_macro($macros["homepage"], "macro_card", [$this->env->getFunction('__')->getCallable()("Departments"), $this->env->getFunction('__')->getCallable()("Please feel free to %1\$sbrowse our departmental information%2\$s, to learn more about %3\$s."), "/?q=/modules/Departments/departments.php",             // line 63
($context["organisationName"] ?? null), "second"], 59, $context, $this->getSourceContext());
            // line 65
            echo "
    ";
        }
        // line 67
        echo "
    ";
        // line 68
        if (($context["makeUnitsPublic"] ?? null)) {
            // line 69
            echo "        ";
            echo twig_call_macro($macros["homepage"], "macro_card", [$this->env->getFunction('__')->getCallable()("Learn With Us"), $this->env->getFunction('__')->getCallable()("We are sharing some of our units of study with members of the public, so you can learn with us. Feel free to %1\$sbrowse our public units%2\$s."), "/?q=/modules/Planner/units_public.php&sidebar=false",             // line 73
($context["organisationName"] ?? null), "second"], 69, $context, $this->getSourceContext());
            // line 75
            echo "
    ";
        }
        // line 77
        echo "
    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["indexHooks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hook"]) {
            // line 79
            echo "        ";
            echo twig_call_macro($macros["homepage"], "macro_card", [twig_get_attribute($this->env, $this->source, $context["hook"], "title", [], "any", false, false, false, 79), twig_get_attribute($this->env, $this->source, $context["hook"], "text", [], "any", false, false, false, 79), twig_get_attribute($this->env, $this->source, $context["hook"], "url", [], "any", false, false, false, 79), ($context["organisationName"] ?? null)], 79, $context, $this->getSourceContext());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hook'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
    ";
        // line 82
        if (($context["privacyPolicy"] ?? null)) {
            // line 83
            echo "        ";
            echo twig_call_macro($macros["homepage"], "macro_card", [$this->env->getFunction('__')->getCallable()("Privacy Policy"), $this->env->getFunction('__')->getCallable()("Read more about how personal data is used, stored and retained at %1\$s."), "/?q=privacyPolicy.php",             // line 87
($context["organisationName"] ?? null), "first"], 83, $context, $this->getSourceContext());
            // line 89
            echo "
    ";
        }
        // line 91
        echo "</div>
";
    }

    // line 92
    public function macro_card($__name__ = null, $__content__ = null, $__url__ = "", $__organisationName__ = null, $__orgNamePos__ = "first", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "content" => $__content__,
            "url" => $__url__,
            "organisationName" => $__organisationName__,
            "orgNamePos" => $__orgNamePos__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 93
            echo "

    <div class=\"w-full sm:w-1/2 px-2 pb-4\">
        <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, (($context["absoluteURL"] ?? null) . ($context["url"] ?? null)), "html", null, true);
            echo "\" class=\"block border shadow-sm rounded bg-white h-full text-gray-800 hover:shadow-md hover:text-";
            echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
            echo "-700 hover:border-";
            echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
            echo "-600\">
            <div class=\"block m-0 pt-4 px-4 text-base uppercase font-bold font-sans tracking-tight\">
                ";
            // line 98
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "

                <svg class=\"w-5 h-5 float-right -mt-px fill-current\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-double-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" class=\"svg-inline--fa fa-angle-double-right fa-w-14 fa-7x\"><path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z\" class=\"\"></path></svg>
            </div>
            <p class=\"mb-1 p-4 text-gray-700 leading-tight\">
                ";
            // line 103
            if ((($context["orgNamePos"] ?? null) == "first")) {
                // line 104
                echo "                    ";
                echo twig_sprintf(($context["content"] ?? null), ($context["organisationName"] ?? null), "", "");
                echo "
                ";
            } elseif ((            // line 105
($context["orgNamePos"] ?? null) == "second")) {
                // line 106
                echo "                    ";
                echo twig_sprintf(($context["content"] ?? null), "", "", ($context["organisationName"] ?? null));
                echo "
                ";
            } else {
                // line 108
                echo "                    ";
                echo ($context["content"] ?? null);
                echo "
                ";
            }
            // line 110
            echo "            </p>
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
        return "welcome.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 110,  218 => 108,  212 => 106,  210 => 105,  205 => 104,  203 => 103,  195 => 98,  186 => 96,  181 => 93,  164 => 92,  159 => 91,  155 => 89,  153 => 87,  151 => 83,  149 => 82,  146 => 81,  137 => 79,  133 => 78,  130 => 77,  126 => 75,  124 => 73,  122 => 69,  120 => 68,  117 => 67,  113 => 65,  111 => 63,  109 => 59,  107 => 58,  104 => 57,  99 => 54,  96 => 50,  94 => 49,  91 => 48,  87 => 46,  85 => 44,  83 => 40,  81 => 39,  78 => 38,  74 => 36,  72 => 34,  70 => 30,  68 => 29,  64 => 27,  62 => 25,  61 => 23,  60 => 22,  58 => 21,  56 => 20,  49 => 16,  44 => 14,  39 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\welcome.twig.html");
    }
}
