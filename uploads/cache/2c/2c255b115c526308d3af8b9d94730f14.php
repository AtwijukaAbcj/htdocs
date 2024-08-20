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

/* navigation.twig.html */
class __TwigTemplate_ff28c305c840f6fbbf6a02c6a9b8ea0d extends Template
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
        // line 14
        echo "
";
        // line 15
        $context["sidebarClass"] = "shadow bg-white rounded px-8 mb-6";
        // line 16
        echo "
<div class=\"mx-4 sm:mx-0 relative sm:static\">

    ";
        // line 19
        if (($context["menuModule"] ?? null)) {
            // line 20
            echo "    <button data-toggle=\"#navigation\" class=\"relative w-full flex rounded justify-center items-center sm:w-48 bg-white sm:border border-grey-600 border-solid p-2 mb-4 sm:mt-4 sm:absolute sm:top-0 sm:right-0 sm:mr-6 z-40 ";
            echo ((($context["sidebar"] ?? null)) ? ("lg:hidden") : (""));
            echo "\">
        <span class=\"text-gray-600 text-sm sm:text-xs font-bold uppercase \">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Module Menu"), "html", null, true);
            echo "</span>
        <svg class=\"fill-current h-4 w-4 sm:h-3 sm:w-3 text-gray-600 ml-2\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><title>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Module Menu"), "html", null, true);
            echo "</title><path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\"/></svg>
    </button>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ((($context["sidebar"] ?? null) && (($context["sidebarPosition"] ?? null) != "bottom"))) {
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "extraSidebar", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 28
                echo "            ";
                if ( !twig_test_empty($context["code"])) {
                    // line 29
                    echo "            <div class=\"";
                    echo twig_escape_filter($this->env, ($context["sidebarClass"] ?? null), "html", null, true);
                    echo " md:column-2 lg:column-1 pb-6 pt-2 lg:pb-8\">
                ";
                    // line 30
                    echo $context["code"];
                    echo "
            </div>
            ";
                }
                // line 33
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    ";
        }
        // line 35
        echo "    
    ";
        // line 36
        if ((($context["sidebar"] ?? null) && twig_test_iterable(($context["sidebarContents"] ?? null)))) {
            // line 37
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sidebarContents"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sidebarContent"]) {
                // line 38
                echo "            ";
                if ($context["sidebarContent"]) {
                    // line 39
                    echo "            <div class=\"";
                    echo twig_escape_filter($this->env, ($context["sidebarClass"] ?? null), "html", null, true);
                    echo " md:column-2 lg:column-1 ";
                    echo ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, false, 39)) ? ("pt-10 lg:pt-0") : (""));
                    echo " pb-6 lg:pb-8\">
                ";
                    // line 40
                    echo $context["sidebarContent"];
                    echo "
            </div>
            ";
                }
                // line 43
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sidebarContent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    ";
        } elseif ((($context["sidebar"] ?? null) && ($context["sidebarContents"] ?? null))) {
            // line 45
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, ($context["sidebarClass"] ?? null), "html", null, true);
            echo " md:column-2 lg:column-1 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, false, 45)) ? ("pt-10 lg:pt-0") : (""));
            echo " pb-6 lg:pb-8\">
            ";
            // line 46
            echo ($context["sidebarContents"] ?? null);
            echo "
        </div>
    ";
        }
        // line 49
        echo "    
    ";
        // line 50
        if (($context["menuModule"] ?? null)) {
            // line 51
            echo "    <nav id=\"navigation\" class=\"";
            echo twig_escape_filter($this->env, ($context["sidebarClass"] ?? null), "html", null, true);
            echo " w-full font-sans hidden absolute top-0 z-30 sm:mt-16 pt-6 pt-12 sm:pt-6
        ";
            // line 52
            echo ((($context["sidebar"] ?? null)) ? ("lg:block lg:static lg:p-0 lg:py-6 lg:mx-0 lg:mt-0") : (""));
            echo "\">

        <ul class=\"w-full  list-none column-1 sm:column-2 md:column-3 m-0 px-0  
            ";
            // line 55
            echo ((($context["sidebar"] ?? null)) ? ("lg:bg-transparent lg:border-0 lg:column-1 lg:shadow-none lg:px-8") : (""));
            echo "\">

            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menuModule"] ?? null));
            foreach ($context['_seq'] as $context["categoryName"] => $context["items"]) {
                // line 58
                echo "                <li class=\"w-full column-no-break p-0\">
                    <h5 class=\"m-0 mb-1 text-sm px-1 pt-2 pb-1 text-";
                // line 59
                echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
                echo "-600 border-b-0\">
                        ";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()($context["categoryName"], twig_get_attribute($this->env, $this->source, twig_first($this->env, $context["items"]), "textDomain", [], "any", false, false, false, 60)), "html", null, true);
                echo "
                    </h5>

                    <ul class=\"list-none m-0 mb-6\">
                    ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["items"]);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 65
                    echo "                        <li class=\"p-0 text-sm leading-normal lg:leading-normal\">
                            <a href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 66), "html", null, true);
                    echo "\" class=\"block -mx-2 px-3 py-1 -my-1 text-gray-700 hover:underline ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 66)) ? ("text-gray-800 bg-transparent-300 font-semibold rounded-sm") : (""));
                    echo "\">
                                ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, $context["item"], "textDomain", [], "any", false, false, false, 67)), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                    </ul>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['categoryName'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        </ul>
    </nav>
    ";
        }
        // line 77
        echo "    
    ";
        // line 78
        if ((($context["sidebar"] ?? null) && (($context["sidebarPosition"] ?? null) == "bottom"))) {
            // line 79
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "extraSidebar", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 80
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, ($context["sidebarClass"] ?? null), "html", null, true);
                echo " md:column-2 lg:column-1 pb-6 lg:pb-8\">
            ";
                // line 81
                echo $context["code"];
                echo "
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    ";
        }
        // line 85
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "navigation.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 85,  244 => 84,  235 => 81,  230 => 80,  225 => 79,  223 => 78,  220 => 77,  215 => 74,  207 => 71,  197 => 67,  191 => 66,  188 => 65,  184 => 64,  177 => 60,  173 => 59,  170 => 58,  166 => 57,  161 => 55,  155 => 52,  150 => 51,  148 => 50,  145 => 49,  139 => 46,  132 => 45,  129 => 44,  123 => 43,  117 => 40,  110 => 39,  107 => 38,  102 => 37,  100 => 36,  97 => 35,  94 => 34,  88 => 33,  82 => 30,  77 => 29,  74 => 28,  69 => 27,  67 => 26,  64 => 25,  58 => 22,  54 => 21,  49 => 20,  47 => 19,  42 => 16,  40 => 15,  37 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#<!--
Gibbon: the flexible, open school platform
Founded by Ross Parker at ICHK Secondary. Built by Ross Parker, Sandra Kuipers and the Gibbon community (https://gibbonedu.org/about/)
Copyright © 2010, Gibbon Foundation
Gibbon™, Gibbon Education Ltd. (Hong Kong)

This is a Gibbon template file, written in HTML and Twig syntax.
For info about editing, see: https://twig.symfony.com/doc/2.x/

Module Menu: Displays a list of module actions available for the 
current user. Outputs the sidebar in 'full' view-mode and as a 
collapsed drop-down list in 'mini' view-mode.
-->#}

{% set sidebarClass = 'shadow bg-white rounded px-8 mb-6' %}

<div class=\"mx-4 sm:mx-0 relative sm:static\">

    {% if menuModule %}
    <button data-toggle=\"#navigation\" class=\"relative w-full flex rounded justify-center items-center sm:w-48 bg-white sm:border border-grey-600 border-solid p-2 mb-4 sm:mt-4 sm:absolute sm:top-0 sm:right-0 sm:mr-6 z-40 {{ sidebar ? 'lg:hidden' }}\">
        <span class=\"text-gray-600 text-sm sm:text-xs font-bold uppercase \">{{ __('Module Menu') }}</span>
        <svg class=\"fill-current h-4 w-4 sm:h-3 sm:w-3 text-gray-600 ml-2\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><title>{{ __('Module Menu') }}</title><path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\"/></svg>
    </button>
    {% endif %}

    {% if sidebar and sidebarPosition != 'bottom' %}
        {% for code in page.extraSidebar  %}
            {% if code is not empty %}
            <div class=\"{{ sidebarClass }} md:column-2 lg:column-1 pb-6 pt-2 lg:pb-8\">
                {{ code|raw }}
            </div>
            {% endif %}
        {% endfor %}
    {% endif %}
    
    {% if sidebar and sidebarContents is iterable %}
        {% for sidebarContent in sidebarContents %}
            {% if sidebarContent %}
            <div class=\"{{ sidebarClass }} md:column-2 lg:column-1 {{ page.breadcrumbs ? 'pt-10 lg:pt-0' }} pb-6 lg:pb-8\">
                {{ sidebarContent|raw }}
            </div>
            {% endif %}
        {% endfor %}
    {% elseif sidebar and sidebarContents %}
        <div class=\"{{ sidebarClass }} md:column-2 lg:column-1 {{ page.breadcrumbs ? 'pt-10 lg:pt-0' }} pb-6 lg:pb-8\">
            {{ sidebarContents|raw }}
        </div>
    {% endif %}
    
    {% if menuModule %}
    <nav id=\"navigation\" class=\"{{ sidebarClass }} w-full font-sans hidden absolute top-0 z-30 sm:mt-16 pt-6 pt-12 sm:pt-6
        {{ sidebar ? 'lg:block lg:static lg:p-0 lg:py-6 lg:mx-0 lg:mt-0' : '' }}\">

        <ul class=\"w-full  list-none column-1 sm:column-2 md:column-3 m-0 px-0  
            {{ sidebar ? 'lg:bg-transparent lg:border-0 lg:column-1 lg:shadow-none lg:px-8' : '' }}\">

            {% for categoryName, items in menuModule %}
                <li class=\"w-full column-no-break p-0\">
                    <h5 class=\"m-0 mb-1 text-sm px-1 pt-2 pb-1 text-{{ themeColour }}-600 border-b-0\">
                        {{ __(categoryName, (items|first).textDomain) }}
                    </h5>

                    <ul class=\"list-none m-0 mb-6\">
                    {% for item in items %}
                        <li class=\"p-0 text-sm leading-normal lg:leading-normal\">
                            <a href=\"{{ item.url }}\" class=\"block -mx-2 px-3 py-1 -my-1 text-gray-700 hover:underline {{ item.active ? 'text-gray-800 bg-transparent-300 font-semibold rounded-sm' : '' }}\">
                                {{ __(item.name, item.textDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                    </ul>
                </li>
            {% endfor %}
        </ul>
    </nav>
    {% endif %}
    
    {% if sidebar and sidebarPosition == 'bottom' %}
        {% for code in page.extraSidebar %}
        <div class=\"{{ sidebarClass }} md:column-2 lg:column-1 pb-6 lg:pb-8\">
            {{ code|raw }}
        </div>
        {% endfor %}
    {% endif %}
</div>

", "navigation.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\navigation.twig.html");
    }
}
