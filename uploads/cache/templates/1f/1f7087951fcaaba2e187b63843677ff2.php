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

/* page.twig.html */
class __TwigTemplate_c86f0cb3daad3b2b6d0e9adebbc40844 extends Template
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
        // line 13
        echo "
<div class=\"w-full flex flex-between mb-4\">
    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, false, 15)) {
            // line 16
            echo "    <nav aria-label=\"breadcrumb\" class=\"flex-1\">
        <ol class=\"mb-0 mx-0 text-xs text-blue-700\">
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, false, 18));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["title"] => $context["src"]) {
                // line 19
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                    <li aria-current=\"page\" class=\"list-none inline ml-0 trailEnd\">";
                    echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                    echo "</li>
                ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 21
$context["loop"], "revindex", [], "any", false, false, false, 21) > 5) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21) != 1))) {
                    // line 22
                    echo "                    <li class=\"list-none inline ml-0 \"><a class=\"text-blue-700 underline\" href=\"";
                    echo twig_escape_filter($this->env, $context["src"], "html", null, true);
                    echo "\">...</a> > </li>
                ";
                } else {
                    // line 24
                    echo "                    <li class=\"list-none inline ml-0 \"><a class=\"text-blue-700 underline\" href=\"";
                    echo twig_escape_filter($this->env, $context["src"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                    echo "</a> > </li>
                ";
                }
                // line 26
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['title'], $context['src'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </ol>
    </nav>
    ";
        }
        // line 30
        echo "

    ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "helpLink", [], "any", false, false, false, 32) && ($context["isLoggedIn"] ?? null))) {
            // line 33
            echo "    <a class=\"text-gray-500 hover:text-blue-600\" href=\"https://docs.gibbonedu.org/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "helpLink", [], "any", false, false, false, 33), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Help"), "html", null, true);
            echo "\" target=\"_blank\">
        <svg class=\"w-5 h-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" data-name=\"Layer 1\" viewBox=\"0 0 100 100\" x=\"0px\" y=\"0px\"><path d=\"M50,8A42,42,0,1,1,8,50,42,42,0,0,1,50,8m0-8a50,50,0,1,0,50,50A50,50,0,0,0,50,0Z\"/><path d=\"M50.46,23.5l1.08.1a21,21,0,0,1,7.71,2,12.84,12.84,0,0,1,5.32,4.55,11.75,11.75,0,0,1,1.81,5.18A11.46,11.46,0,0,1,66,40.09,12.36,12.36,0,0,1,63.1,45a33.11,33.11,0,0,1-5,4.11c-1,.69-1.89,1.41-2.83,2.13a6,6,0,0,0-1.85,2.67c-.2.54-.43,1.08-.64,1.62A3.73,3.73,0,0,1,49.3,58a4.87,4.87,0,0,1-2.53-.4,4.13,4.13,0,0,1-2.27-3.09,7.1,7.1,0,0,1,1.2-5.3,14.56,14.56,0,0,1,3.14-3.32c1.31-1.07,2.66-2.09,4-3.16a10.55,10.55,0,0,0,2.74-3.13,5.87,5.87,0,0,0-.7-6.5,5.4,5.4,0,0,0-3-1.66,9.55,9.55,0,0,0-4.66.08,5.67,5.67,0,0,0-3.61,3c-.47.88-.88,1.78-1.32,2.67A6.49,6.49,0,0,1,41,39a4.47,4.47,0,0,1-3.39,1.09,4.69,4.69,0,0,1-2.14-.58,3.7,3.7,0,0,1-2-3.3,9.68,9.68,0,0,1,2-6.12,15.42,15.42,0,0,1,6-4.86,18.3,18.3,0,0,1,5.69-1.64l1.12-.11Z\"/><path d=\"M48.47,76.5c-.3-.06-.6-.11-.89-.19a5.54,5.54,0,1,1,2.4.09l-.49.1Z\"/></svg>
    </a>
    ";
        }
        // line 37
        echo "</div>

<div class=\"hidden lg:block\">
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "alerts", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["type"] => $context["alerts"]) {
            // line 41
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["alerts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 42
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo $context["text"];
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['alerts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</div>

";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigator", [], "any", false, false, false, 47)) {
            // line 48
            echo "<div class=\"w-full flex justify-end align-center mb-4\">

    ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigator", [], "any", false, false, false, 50), "schoolYears", [], "any", false, false, false, 50)) {
                // line 51
                echo "    
    ";
                // line 52
                $context["buttonStyle"] = "border -ml-px px-2 py-1 font-bold leading-loose text-xxs";
                // line 53
                echo "    ";
                $context["schoolYears"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigator", [], "any", false, false, false, 53), "schoolYears", [], "any", false, false, false, 53);
                // line 54
                echo "
    <div class=\"flex-1\">
        <h2 class=\"m-0 p-0 pt-1\">
            ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["schoolYears"] ?? null), "current", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
                echo "
        </h2>
    </div>
    
    <div class=\"flex\">

        <div class=\"linkTop mt-0\">
            ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getHeader", [], "any", false, false, false, 64));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 65
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["action"], "getOutput", [], "any", false, false, false, 65);
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "        </div>

        <button type=\"button\" class=\"rounded-l text-gray-600 bg-gray-200 border-gray-500 ";
                // line 69
                echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["schoolYears"] ?? null), "previous", [], "any", false, false, false, 69))) ? ("hover:bg-gray-400") : (""));
                echo " ";
                echo twig_escape_filter($this->env, ($context["buttonStyle"] ?? null), "html", null, true);
                echo "\" onclick=\"window.location = '";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/index.php?q=";
                echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
                echo "&gibbonSchoolYearID=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["schoolYears"] ?? null), "previous", [], "any", false, false, false, 69), "gibbonSchoolYearID", [], "any", false, false, false, 69), "html", null, true);
                echo "&";
                echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, ($context["schoolYears"] ?? null), "params", [], "any", false, false, false, 69)), "html", null, true);
                echo "'\" ";
                echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["schoolYears"] ?? null), "previous", [], "any", false, false, false, 69))) ? ("disabled") : (""));
                echo ">
            ";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Prev"), "html", null, true);
                echo "
        </button>

        <form action=\"";
                // line 73
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/index.php?q=";
                echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
                echo "\" method=\"get\">
            <input type=\"hidden\" name=\"q\" value=\"";
                // line 74
                echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
                echo "\">
            ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["schoolYears"] ?? null), "params", [], "any", false, false, false, 75));
                foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                    // line 76
                    echo "                <input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "            <select name=\"gibbonSchoolYearID\" class=\"auto-submit bg-gray-200 border-gray-500 border-r-0 ";
                echo twig_escape_filter($this->env, ($context["buttonStyle"] ?? null), "html", null, true);
                echo "\">";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["schoolYears"] ?? null), "years", [], "any", false, false, false, 79));
                foreach ($context['_seq'] as $context["value"] => $context["name"]) {
                    // line 80
                    echo "<option value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["schoolYears"] ?? null), "current", [], "any", false, false, false, 80), "gibbonSchoolYearID", [], "any", false, false, false, 80) == $context["value"])) ? ("selected") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "</select>
        </form>

        <button type=\"button\" class=\"rounded-r text-gray-600 border-gray-500 ";
                // line 85
                echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["schoolYears"] ?? null), "next", [], "any", false, false, false, 85))) ? ("hover:bg-gray-400") : (""));
                echo " ";
                echo twig_escape_filter($this->env, ($context["buttonStyle"] ?? null), "html", null, true);
                echo "\" onclick=\"window.location = '";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/index.php?q=";
                echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
                echo "&gibbonSchoolYearID=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["schoolYears"] ?? null), "next", [], "any", false, false, false, 85), "gibbonSchoolYearID", [], "any", false, false, false, 85), "html", null, true);
                echo "&";
                echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, ($context["schoolYears"] ?? null), "params", [], "any", false, false, false, 85)), "html", null, true);
                echo "'\" ";
                echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["schoolYears"] ?? null), "next", [], "any", false, false, false, 85))) ? ("disabled") : (""));
                echo ">
        ";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Next"), "html", null, true);
                echo "
        </button>
    </div>
    ";
            }
            // line 90
            echo "    

    ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigator", [], "any", false, false, false, 92), "actions", [], "any", false, false, false, 92)) {
                // line 93
                echo "
    <div class=\"linkTop mt-0\">
        ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigator", [], "any", false, false, false, 95), "actions", [], "any", false, false, false, 95));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 96
                    echo "            ";
                    echo twig_get_attribute($this->env, $this->source, $context["action"], "getOutput", [], "any", false, false, false, 96);
                    echo "

            ";
                    // line 98
                    echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 98)) ? ("&nbsp;|&nbsp;") : (""));
                    echo "
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "    </div>

    ";
            }
            // line 103
            echo "</div>
";
        }
        // line 105
        echo "

";
    }

    public function getTemplateName()
    {
        return "page.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 105,  355 => 103,  350 => 100,  334 => 98,  328 => 96,  311 => 95,  307 => 93,  305 => 92,  301 => 90,  294 => 86,  278 => 85,  273 => 82,  261 => 80,  257 => 79,  253 => 78,  242 => 76,  238 => 75,  234 => 74,  228 => 73,  222 => 70,  206 => 69,  202 => 67,  193 => 65,  189 => 64,  179 => 57,  174 => 54,  171 => 53,  169 => 52,  166 => 51,  164 => 50,  160 => 48,  158 => 47,  154 => 45,  148 => 44,  137 => 42,  132 => 41,  128 => 40,  123 => 37,  113 => 33,  111 => 32,  107 => 30,  102 => 27,  88 => 26,  80 => 24,  74 => 22,  72 => 21,  67 => 20,  64 => 19,  47 => 18,  43 => 16,  41 => 15,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "page.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\page.twig.html");
    }
}
