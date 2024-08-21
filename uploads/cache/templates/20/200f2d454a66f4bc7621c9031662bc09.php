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

/* components/gridTable.twig.html */
class __TwigTemplate_8fb164d4b5e4d7fb9b440a9ca9ad35e2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'table' => [$this, 'block_table'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "components/paginatedTable.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("components/paginatedTable.twig.html", "components/gridTable.twig.html", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    
<div id=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getID", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
    <div class=\"dataTable\" data-results=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getResultCount", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
        
    ";
        // line 18
        if ( !($context["hidePagination"] ?? null)) {
            // line 19
            echo "    ";
            $this->displayBlock("header", $context, $blocks);
            echo "
    ";
        }
        // line 21
        echo "                    
    ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getResultCount", [], "any", false, false, false, 22) == 0)) {
            // line 23
            echo "        <div class=\"h-24 rounded-sm border bg-gray-100 shadow-inner overflow-hidden\">
        ";
            // line 24
            $this->displayBlock("blankslate", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 27
            echo "
        <div class=\"flex flex-wrap ";
            // line 28
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getMetaData", ["gridClass"], "method", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getMetaData", ["gridClass"], "method", false, false, false, 28), "py-2")) : ("py-2")), "html", null, true);
            echo "\">
            <div class=\"w-full\">
                ";
            // line 30
            echo ($context["gridHeader"] ?? null);
            echo "
            </div>

            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["rowIndex"] => $context["rowData"]) {
                // line 34
                echo "                ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rowData"], "row", [], "any", false, false, false, 34), "getPrepended", [], "any", false, false, false, 34);
                echo "

                <div class=\"flex-col ";
                // line 36
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getMetaData", ["gridItemClass"], "method", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getMetaData", ["gridItemClass"], "method", false, false, false, 36), "w-1/2 sm:w-1/3 text-center")) : ("w-1/2 sm:w-1/3 text-center")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rowData"], "row", [], "any", false, false, false, 36), "getClass", [], "any", false, false, false, 36), ["odd" => "", "even" => ""]), "html", null, true);
                echo "\">
                ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
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
                foreach ($context['_seq'] as $context["columnIndex"] => $context["column"]) {
                    // line 38
                    echo "                    
                    ";
                    // line 39
                    $context["cell"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["rowData"], "cells", [], "any", false, false, false, 39)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["columnIndex"]] ?? null) : null);
                    // line 40
                    echo "
                    <div class=\"";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getClass", [], "any", false, false, false, 41), "html", null, true);
                    echo "\">
                        ";
                    // line 42
                    if ((twig_get_attribute($this->env, $this->source, $context["column"], "getID", [], "any", false, false, false, 42) == "actions")) {
                        echo " 
                            ";
                        // line 43
                        $this->displayBlock("actions", $context, $blocks);
                        echo "
                        ";
                    } else {
                        // line 45
                        echo "                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["column"], "getOutput", [twig_get_attribute($this->env, $this->source, $context["rowData"], "data", [], "any", false, false, false, 45)], "method", false, false, false, 45);
                        echo "
                        ";
                    }
                    // line 47
                    echo "                    </div>

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
                unset($context['_seq'], $context['_iterated'], $context['columnIndex'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                </div>

                ";
                // line 52
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rowData"], "row", [], "any", false, false, false, 52), "getAppended", [], "any", false, false, false, 52);
                echo "

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['rowIndex'], $context['rowData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
            <div class=\"w-full\">
                ";
            // line 57
            echo ($context["gridFooter"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock("footer", $context, $blocks);
        echo "
        
    </div>
</div>

";
        // line 67
        if ((($context["path"] ?? null) && ($context["identifier"] ?? null))) {
            // line 68
            echo "<script>
\$(function(){
    \$('#";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getID", [], "any", false, false, false, 70), "html", null, true);
            echo "').gibbonDataTable( '";
            echo ($context["path"] ?? null);
            echo "', ";
            echo ($context["jsonData"] ?? null);
            echo ", '";
            echo twig_escape_filter($this->env, ($context["identifier"] ?? null), "html", null, true);
            echo "');
});
</script>
";
        }
        // line 74
        echo "
";
    }

    public function getTemplateName()
    {
        return "components/gridTable.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 74,  215 => 70,  211 => 68,  209 => 67,  201 => 62,  198 => 61,  191 => 57,  187 => 55,  178 => 52,  174 => 50,  158 => 47,  152 => 45,  147 => 43,  143 => 42,  139 => 41,  136 => 40,  134 => 39,  131 => 38,  114 => 37,  108 => 36,  102 => 34,  98 => 33,  92 => 30,  87 => 28,  84 => 27,  78 => 24,  75 => 23,  73 => 22,  70 => 21,  64 => 19,  62 => 18,  57 => 16,  53 => 15,  50 => 14,  46 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/gridTable.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\components\\gridTable.twig.html");
    }
}
