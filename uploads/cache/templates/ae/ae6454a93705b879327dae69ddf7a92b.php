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

/* applicationEdit.twig.html */
class __TwigTemplate_21e94ce32de08647a3a1ffc72ff689f6 extends Template
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
        echo "<div id=\"tabs\" style=\"margin: 20px 0\">
    <ul>
        <li><a href='#tabs0'>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Overview"), "html", null, true);
        echo "</a></li>
        ";
        // line 4
        if (($context["milestonesForm"] ?? null)) {
            // line 5
            echo "            <li><a href='#tabs1'>";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Milestones"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 7
        echo "        <li><a href='#tabs2'>";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Application Form"), "html", null, true);
        echo "</a></li>
        ";
        // line 8
        if (($context["formsTable"] ?? null)) {
            // line 9
            echo "            <!-- <li><a href='#tabs3'>";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Other Forms"), "html", null, true);
            echo "</a></li> -->
        ";
        }
        // line 11
        echo "        ";
        if (($context["uploadsTable"] ?? null)) {
            // line 12
            echo "            <li><a href='#tabs4'>";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Documents"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 14
        echo "        ";
        if ((($context["accountForm"] ?? null) || ($context["familyTable"] ?? null))) {
            // line 15
            echo "            <li><a href='#tabs5'>";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Family"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 17
        echo "        ";
        if (($context["processForm"] ?? null)) {
            // line 18
            echo "            <li><a href='#tabs6'>";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Process"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 20
        echo "        ";
        if (($context["resultsForm"] ?? null)) {
            // line 21
            echo "            <li><a href='#tabs7'>";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Results"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 23
        echo "    </ul>

    <div id='tabs0'>
        ";
        // line 26
        if (($context["officeForm"] ?? null)) {
            // line 27
            echo "            ";
            echo twig_get_attribute($this->env, $this->source, ($context["officeForm"] ?? null), "getOutput", [], "any", false, false, false, 27);
            echo "
        ";
        }
        // line 29
        echo "    </div>

    ";
        // line 31
        if (($context["milestonesForm"] ?? null)) {
            // line 32
            echo "    <div id='tabs1'>
        ";
            // line 33
            echo twig_get_attribute($this->env, $this->source, ($context["milestonesForm"] ?? null), "getOutput", [], "any", false, false, false, 33);
            echo "
    </div>
    ";
        }
        // line 36
        echo "
    <div id='tabs2'>
        ";
        // line 38
        if (($context["editForm"] ?? null)) {
            // line 39
            echo "            ";
            echo twig_get_attribute($this->env, $this->source, ($context["editForm"] ?? null), "getOutput", [], "any", false, false, false, 39);
            echo "
        ";
        }
        // line 41
        echo "    </div>

    ";
        // line 43
        if (($context["uploadsTable"] ?? null)) {
            // line 44
            echo "    <div id='tabs4'>
        ";
            // line 45
            echo twig_get_attribute($this->env, $this->source, ($context["uploadsTable"] ?? null), "getOutput", [], "any", false, false, false, 45);
            echo "
    </div>
    ";
        }
        // line 48
        echo "    
    ";
        // line 49
        if ((($context["accountForm"] ?? null) || ($context["familyTable"] ?? null))) {
            // line 50
            echo "    <div id='tabs5'>
        ";
            // line 51
            echo twig_get_attribute($this->env, $this->source, ($context["accountForm"] ?? null), "getOutput", [], "any", false, false, false, 51);
            echo "
        ";
            // line 52
            echo twig_get_attribute($this->env, $this->source, ($context["familyTable"] ?? null), "getOutput", [], "any", false, false, false, 52);
            echo "
    </div>
    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if (($context["processForm"] ?? null)) {
            // line 57
            echo "    <div id='tabs6'>
        ";
            // line 58
            echo twig_get_attribute($this->env, $this->source, ($context["processForm"] ?? null), "getOutput", [], "any", false, false, false, 58);
            echo "
    </div>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if (($context["resultsForm"] ?? null)) {
            // line 63
            echo "    <div id='tabs7'>
        ";
            // line 64
            echo twig_get_attribute($this->env, $this->source, ($context["resultsForm"] ?? null), "getOutput", [], "any", false, false, false, 64);
            echo "
    </div>
    ";
        }
        // line 67
        echo "</div>

<script type=\"text/javascript\">
    \$('#tabs').tabs({
        active: ";
        // line 71
        echo twig_escape_filter($this->env, ($context["defaultTab"] ?? null), "html", null, true);
        echo ",
        ajaxOptions: {
            error: function( xhr, status, index, anchor ) {
                \$( anchor.hash ).html(\"Couldn't load this tab.\");
            }
        }
    });

    \$('input.milestoneInput').on('change', function(e) {
        var parent = \$(this).parentsUntil('.milestoneInput').parent();

        if (\$(this).is(':checked')) {
            \$(parent).removeClass('bg-red-100 text-red-700');
            \$(parent).addClass('bg-green-100 text-green-700');
            \$('.milestoneCheck', parent).removeClass('hidden');
            \$('.milestoneCross', parent).addClass('hidden');
        } else {
            \$(parent).addClass('bg-red-100 text-red-700');
            \$(parent).removeClass('bg-green-100 text-green-700');
            \$('.milestoneCheck', parent).addClass('hidden');
            \$('.milestoneCross', parent).removeClass('hidden');
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "applicationEdit.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 71,  203 => 67,  197 => 64,  194 => 63,  192 => 62,  189 => 61,  183 => 58,  180 => 57,  178 => 56,  175 => 55,  169 => 52,  165 => 51,  162 => 50,  160 => 49,  157 => 48,  151 => 45,  148 => 44,  146 => 43,  142 => 41,  136 => 39,  134 => 38,  130 => 36,  124 => 33,  121 => 32,  119 => 31,  115 => 29,  109 => 27,  107 => 26,  102 => 23,  96 => 21,  93 => 20,  87 => 18,  84 => 17,  78 => 15,  75 => 14,  69 => 12,  66 => 11,  60 => 9,  58 => 8,  53 => 7,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "applicationEdit.twig.html", "C:\\xampp\\htdocs\\modules\\Admissions\\templates\\applicationEdit.twig.html");
    }
}
