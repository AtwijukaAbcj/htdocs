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

/* profile/sidebar.twig.html */
class __TwigTemplate_772d4cb1f037fc5471ad4aa0145e7b9a extends Template
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
        echo ($context["userPhoto"] ?? null);
        echo "

<div class=\"column-no-break\">
    <h4>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Personal"), "html", null, true);
        echo "</h4>

    <ul class='moduleMenu'>
        <li>
            <a class=\"";
        // line 18
        echo (((($context["subpage"] ?? null) == "Overview")) ? ("font-bold") : (""));
        echo " underline\" href=\"";
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/index.php?q=";
        echo twig_escape_filter($this->env, ($context["q"] ?? null), "html", null, true);
        echo "&gibbonPersonID=";
        echo twig_escape_filter($this->env, ($context["gibbonPersonID"] ?? null), "html", null, true);
        echo "&search=";
        echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
        echo "&allStaff=";
        echo twig_escape_filter($this->env, ($context["allStaff"] ?? null), "html", null, true);
        echo "&subpage=Overview\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Overview"), "html", null, true);
        echo "</a>
        </li>

        <li>
            <a class=\"";
        // line 22
        echo (((($context["subpage"] ?? null) == "Personal")) ? ("font-bold") : (""));
        echo " underline\" href=\"";
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/index.php?q=";
        echo twig_escape_filter($this->env, ($context["q"] ?? null), "html", null, true);
        echo "&gibbonPersonID=";
        echo twig_escape_filter($this->env, ($context["gibbonPersonID"] ?? null), "html", null, true);
        echo "&search=";
        echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
        echo "&allStaff=";
        echo twig_escape_filter($this->env, ($context["allStaff"] ?? null), "html", null, true);
        echo "&subpage=Personal\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Personal"), "html", null, true);
        echo "</a>
        </li>

        <li>
            <a class=\"";
        // line 26
        echo (((($context["subpage"] ?? null) == "Family")) ? ("font-bold") : (""));
        echo " underline\" href=\"";
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/index.php?q=";
        echo twig_escape_filter($this->env, ($context["q"] ?? null), "html", null, true);
        echo "&gibbonPersonID=";
        echo twig_escape_filter($this->env, ($context["gibbonPersonID"] ?? null), "html", null, true);
        echo "&search=";
        echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
        echo "&allStaff=";
        echo twig_escape_filter($this->env, ($context["allStaff"] ?? null), "html", null, true);
        echo "&subpage=Family\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Family"), "html", null, true);
        echo "</a>
        </li>

        ";
        // line 29
        if (($context["canViewEmergency"] ?? null)) {
            // line 30
            echo "            <li>
                <a class=\"";
            // line 31
            echo (((($context["subpage"] ?? null) == "Emergency Contacts")) ? ("font-bold") : (""));
            echo " underline\" href=\"";
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/index.php?q=";
            echo twig_escape_filter($this->env, ($context["q"] ?? null), "html", null, true);
            echo "&gibbonPersonID=";
            echo twig_escape_filter($this->env, ($context["gibbonPersonID"] ?? null), "html", null, true);
            echo "&search=";
            echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
            echo "&allStaff=";
            echo twig_escape_filter($this->env, ($context["allStaff"] ?? null), "html", null, true);
            echo "&subpage=Emergency Contacts\">";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Emergency Contacts"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        // line 34
        echo "    </ul>

    <h4>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("School"), "html", null, true);
        echo "</h4>

    <ul class='moduleMenu'>
        <li>
            <a class=\"";
        // line 40
        echo (((($context["subpage"] ?? null) == "Activities")) ? ("font-bold") : (""));
        echo " underline\" href=\"";
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/index.php?q=";
        echo twig_escape_filter($this->env, ($context["q"] ?? null), "html", null, true);
        echo "&gibbonPersonID=";
        echo twig_escape_filter($this->env, ($context["gibbonPersonID"] ?? null), "html", null, true);
        echo "&search=";
        echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
        echo "&allStaff=";
        echo twig_escape_filter($this->env, ($context["allStaff"] ?? null), "html", null, true);
        echo "&subpage=Activities\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Activities"), "html", null, true);
        echo "</a>
        </li>

        <li>
            <a class=\"";
        // line 44
        echo (((($context["subpage"] ?? null) == "Facilities")) ? ("font-bold") : (""));
        echo " underline\" href=\"";
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/index.php?q=";
        echo twig_escape_filter($this->env, ($context["q"] ?? null), "html", null, true);
        echo "&gibbonPersonID=";
        echo twig_escape_filter($this->env, ($context["gibbonPersonID"] ?? null), "html", null, true);
        echo "&search=";
        echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
        echo "&allStaff=";
        echo twig_escape_filter($this->env, ($context["allStaff"] ?? null), "html", null, true);
        echo "&subpage=Facilities\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Facilities"), "html", null, true);
        echo "</a>
        </li>

        ";
        // line 47
        if (($context["canViewTimetable"] ?? null)) {
            // line 48
            echo "            <li>
                <a class=\"";
            // line 49
            echo (((($context["subpage"] ?? null) == "Timetable")) ? ("font-bold") : (""));
            echo " underline\" href=\"";
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/index.php?q=";
            echo twig_escape_filter($this->env, ($context["q"] ?? null), "html", null, true);
            echo "&gibbonPersonID=";
            echo twig_escape_filter($this->env, ($context["gibbonPersonID"] ?? null), "html", null, true);
            echo "&search=";
            echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
            echo "&allStaff=";
            echo twig_escape_filter($this->env, ($context["allStaff"] ?? null), "html", null, true);
            echo "&subpage=Timetable\">";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Timetable"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        // line 52
        echo "    </ul>

    ";
        // line 54
        if (($context["hooks"] ?? null)) {
            // line 55
            echo "    <h4>";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Modules"), "html", null, true);
            echo "</h4>

    <ul class='moduleMenu'>
        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["hook"]) {
                // line 59
                echo "        <li>
            <a class=\"";
                // line 60
                echo (((($context["currentHook"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hook"], "options", [], "any", false, false, false, 60), "sourceModuleName", [], "any", false, false, false, 60))) ? ("font-bold") : (""));
                echo " underline\" href=\"";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/index.php?q=";
                echo twig_escape_filter($this->env, ($context["q"] ?? null), "html", null, true);
                echo "&gibbonPersonID=";
                echo twig_escape_filter($this->env, ($context["gibbonPersonID"] ?? null), "html", null, true);
                echo "&search=";
                echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
                echo "&allStaff=";
                echo twig_escape_filter($this->env, ($context["allStaff"] ?? null), "html", null, true);
                echo "&subpage=&hook=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hook"], "options", [], "any", false, false, false, 60), "sourceModuleName", [], "any", false, false, false, 60), "html", null, true);
                echo "&gibbonHookID=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hook"], "gibbonHookID", [], "any", false, false, false, 60), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["hook"], "name", [], "any", true, true, false, 60) &&  !(null === twig_get_attribute($this->env, $this->source, $context["hook"], "name", [], "any", false, false, false, 60)))) ? (twig_get_attribute($this->env, $this->source, $context["hook"], "name", [], "any", false, false, false, 60)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hook"], "options", [], "any", false, false, false, 60), "sourceModuleName", [], "any", false, false, false, 60))), "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hook'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "    </ul>
    ";
        }
        // line 65
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "profile/sidebar.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 65,  248 => 63,  223 => 60,  220 => 59,  216 => 58,  209 => 55,  207 => 54,  203 => 52,  185 => 49,  182 => 48,  180 => 47,  162 => 44,  143 => 40,  136 => 36,  132 => 34,  114 => 31,  111 => 30,  109 => 29,  91 => 26,  72 => 22,  53 => 18,  46 => 14,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/sidebar.twig.html", "C:\\xampp\\htdocs\\modules\\Staff\\templates\\profile\\sidebar.twig.html");
    }
}
