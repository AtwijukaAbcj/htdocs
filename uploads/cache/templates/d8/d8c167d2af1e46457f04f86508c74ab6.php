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

/* menu.twig.html */
class __TwigTemplate_6d7d1a92141052facdfa039f099ce75f extends Template
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
<hr class=\"opacity-25 border-";
        // line 13
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-300 border-b-0 mx-0 -my-px\">
<ul class=\"list-none flex flex-wrap items-center my-3 -mx-4\">
    <li class=\"mx-0 px-0\">
        <a class=\"block uppercase font-bold text-sm text-gray-100 hover:text-gray-800 no-underline ml-1 px-4 py-3\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/index.php\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Home"), "html", null, true);
        echo "</a>
    </li>

    ";
        // line 19
        if (($context["isLoggedIn"] ?? null)) {
            // line 20
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menuMain"] ?? null));
            foreach ($context['_seq'] as $context["categoryName"] => $context["items"]) {
                // line 21
                echo "        <li class=\"sm:relative group mx-0 px-0 \">
            <a class=\"block uppercase font-bold text-sm text-gray-100 hover:text-gray-800 no-underline px-4 py-3\" href=\"#\">";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()($context["categoryName"]), "html", null, true);
                echo "</a>

            <ul class=\"list-none bg-gray-800 absolute hidden group-hover:block w-full sm:w-48 left-0 m-0 py-1 sm:p-1 z-50 ";
                // line 24
                echo ((($context["rightToLeft"] ?? null)) ? ("right-0") : ("left-0"));
                echo "\">
                ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["items"]);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 26
                    echo "                <li class=\"hover:bg-";
                    echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
                    echo "-700\">
                    <a class=\"block text-sm text-white focus:text-";
                    // line 27
                    echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
                    echo "-200 no-underline px-1 py-2 md:py-1 leading-normal ";
                    echo ((($context["rightToLeft"] ?? null)) ? ("text-right") : ("text-left"));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 27), "html", null, true);
                    echo "\">
                        ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, $context["item"], "textDomain", [], "any", false, false, false, 28)), "html", null, true);
                    echo "
                    </a>
                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </ul>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['categoryName'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    ";
        }
        // line 36
        echo "
    <li class=\" notificationTray flex-grow\">
        <div class=\"flex flex-row-reverse items-center\">

            <div id=\"finderTray\" class=\"mr-2 w-auto sm:w-full max-w-sm\" style=\"min-width: 240px;\">
                ";
        // line 41
        echo ($context["fastFinder"] ?? null);
        echo "
            </div>

            ";
        // line 44
        echo twig_include($this->env, $context, "tray.twig.html");
        echo "
        </div>
    </li>
</ul>


";
    }

    public function getTemplateName()
    {
        return "menu.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  118 => 41,  111 => 36,  108 => 35,  100 => 32,  90 => 28,  82 => 27,  77 => 26,  73 => 25,  69 => 24,  64 => 22,  61 => 21,  56 => 20,  54 => 19,  46 => 16,  40 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "menu.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\menu.twig.html");
    }
}
