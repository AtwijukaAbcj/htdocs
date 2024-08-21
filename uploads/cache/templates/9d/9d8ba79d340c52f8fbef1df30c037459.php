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

/* components/detailsTable.twig.html */
class __TwigTemplate_2288940d4e361acee44c78ba41d687a6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'table' => [$this, 'block_table'],
            'header' => [$this, 'block_header'],
            'blankslate' => [$this, 'block_blankslate'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "components/dataTable.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("components/dataTable.twig.html", "components/detailsTable.twig.html", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    
";
    }

    // line 17
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
    <header class=\"relative flex justify-between\">
        ";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 34
        echo "    </header>

    ";
        // line 36
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "

    ";
        // line 38
        if (twig_test_empty(($context["rows"] ?? null))) {
            // line 39
            echo "        <div class=\"h-48 rounded-sm border bg-gray-100 shadow-inner overflow-hidden\">
            ";
            // line 40
            $this->displayBlock('blankslate', $context, $blocks);
            // line 43
            echo "        </div>
    ";
        } else {
            // line 45
            echo "    
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["rowIndex"] => $context["rowData"]) {
                // line 47
                echo "        
            ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["heading"] => $context["headingColumns"]) {
                    // line 49
                    echo "                ";
                    if ($context["heading"]) {
                        // line 50
                        echo "                    <h4>";
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()($context["heading"]), "html", null, true);
                        echo "</h4>
                ";
                    }
                    // line 52
                    echo "
                <div class=\"grid ";
                    // line 53
                    echo twig_escape_filter($this->env, ((array_key_exists("gridClass", $context)) ? (_twig_default_filter(($context["gridClass"] ?? null), "grid-cols-1 md:grid-cols-3")) : ("grid-cols-1 md:grid-cols-3")), "html", null, true);
                    echo " rounded border bg-gray-100 text-xs text-gray-700\">
            
                ";
                    // line 55
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["headingColumns"]);
                    foreach ($context['_seq'] as $context["columnIndex"] => $context["column"]) {
                        // line 56
                        echo "
                    <div class=\"p-2 border-b -mb-px ";
                        // line 57
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getClass", [], "any", false, false, false, 57), "html", null, true);
                        echo "\" 
                        style=\"";
                        // line 58
                        (((twig_get_attribute($this->env, $this->source, $context["column"], "getWidth", [], "any", false, false, false, 58) != "auto")) ? (print (twig_escape_filter($this->env, ("width: " . twig_get_attribute($this->env, $this->source, $context["column"], "getWidth", [], "any", false, false, false, 58)), "html", null, true))) : (print ("")));
                        echo "\" >
                        <span class=\"block text-sm font-bold mb-1\">";
                        // line 59
                        echo twig_get_attribute($this->env, $this->source, $context["column"], "getLabel", [], "any", false, false, false, 59);
                        echo "</span>
                        <span class=\"block text-gray-700 \">";
                        // line 60
                        echo twig_get_attribute($this->env, $this->source, $context["column"], "getOutput", [$context["rowData"]], "method", false, false, false, 60);
                        echo "</span>
                    </div>

                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['columnIndex'], $context['column'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['heading'], $context['headingColumns'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['rowIndex'], $context['rowData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "
    ";
        }
        // line 71
        echo "
";
    }

    // line 20
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getTitle", [], "any", false, false, false, 21)) {
            // line 22
            echo "                <h2>";
            echo twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getTitle", [], "any", false, false, false, 22);
            echo "</h2>
            ";
        }
        // line 24
        echo "
            ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getHeader", [], "any", false, false, false, 25)) {
            // line 26
            echo "            <div class=\"linkTop flex-1\">
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getHeader", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 28
                echo "                    ";
                echo twig_get_attribute($this->env, $this->source, $context["action"], "getOutput", [], "any", false, false, false, 28);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            </div>
            ";
        }
        // line 32
        echo "            
        ";
    }

    // line 40
    public function block_blankslate($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "            ";
        echo twig_include($this->env, $context, "components/blankSlate.twig.html");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "components/detailsTable.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 41,  215 => 40,  210 => 32,  206 => 30,  197 => 28,  193 => 27,  190 => 26,  188 => 25,  185 => 24,  179 => 22,  176 => 21,  172 => 20,  167 => 71,  163 => 69,  155 => 66,  148 => 64,  138 => 60,  134 => 59,  130 => 58,  126 => 57,  123 => 56,  119 => 55,  114 => 53,  111 => 52,  105 => 50,  102 => 49,  98 => 48,  95 => 47,  91 => 46,  88 => 45,  84 => 43,  82 => 40,  79 => 39,  77 => 38,  72 => 36,  68 => 34,  66 => 20,  62 => 18,  58 => 17,  53 => 14,  49 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/detailsTable.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\components\\detailsTable.twig.html");
    }
}
