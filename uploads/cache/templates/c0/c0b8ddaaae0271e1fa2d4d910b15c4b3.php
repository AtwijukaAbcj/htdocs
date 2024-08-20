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

/* components/dataTable.twig.html */
class __TwigTemplate_fdd30db42ab8c5086834b47c0a153be9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'table' => [$this, 'block_table'],
            'header' => [$this, 'block_header'],
            'blankslate' => [$this, 'block_blankslate'],
            'tableInner' => [$this, 'block_tableInner'],
            'actions' => [$this, 'block_actions'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getTitle", [], "any", false, false, false, 11)) {
            // line 12
            echo "    ";
            $this->displayBlock('title', $context, $blocks);
        }
        // line 16
        echo "
";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getDescription", [], "any", false, false, false, 17)) {
            // line 18
            echo "    <p>";
            echo twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getDescription", [], "any", false, false, false, 18);
            echo "</p>
";
        }
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('table', $context, $blocks);
        // line 139
        echo "


";
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getTitle", [], "any", false, false, false, 13), "html", null, true);
        echo "</h2>
    ";
    }

    // line 21
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
    <header class=\"relative\">
        ";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "    </header>

    <div id=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getID", [], "any", false, false, false, 37), "html", null, true);
        echo "\" class=\"dataTable ";
        echo (( !($context["preventOverflow"] ?? null)) ? ("overflow-x-auto overflow-y-visible") : ("overflow-x-auto xl:overflow-x-unset"));
        echo "\">

   
    ";
        // line 40
        if ((( !($context["rows"] ?? null) &&  !($context["isFiltered"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getResultCount", [], "any", false, false, false, 40) == 0))) {
            // line 41
            echo "    <div class=\"h-48 rounded-sm border bg-gray-100 shadow-inner overflow-hidden\">
        ";
            // line 42
            $this->displayBlock('blankslate', $context, $blocks);
            // line 45
            echo "    </div>
    ";
        } else {
            // line 47
            echo "
    ";
            // line 48
            $this->displayBlock('tableInner', $context, $blocks);
            // line 129
            echo "    ";
        }
        // line 130
        echo "
    </div>

    <footer>
    ";
        // line 134
        $this->displayBlock('footer', $context, $blocks);
        // line 136
        echo "    </footer>

";
    }

    // line 24
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    
            ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getHeader", [], "any", false, false, false, 26)) {
            // line 27
            echo "            <div class=\"linkTop mt-0\">
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getHeader", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 29
                echo "                    ";
                echo twig_get_attribute($this->env, $this->source, $context["action"], "getOutput", [], "any", false, false, false, 29);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </div>
            ";
        }
        // line 33
        echo "            
        ";
    }

    // line 42
    public function block_blankslate($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "        ";
        echo twig_include($this->env, $context, "components/blankSlate.twig.html");
        echo "
        ";
    }

    // line 48
    public function block_tableInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    
        <table class=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " w-full mb-2\" cellspacing=0 ";
        if (($context["draggable"] ?? null)) {
            echo "data-drag-url=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["draggable"] ?? null), "url", [], "any", false, false, false, 50), "html", null, true);
            echo "\" data-drag-data=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["draggable"] ?? null), "data", [], "any", false, false, false, 50), "html", null, true);
            echo "\"";
        }
        echo ">
            <thead>
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
        foreach ($context['_seq'] as $context["rowIndex"] => $context["headerRow"]) {
            // line 53
            echo "
                <tr class=\"head text-xs\">
                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["columnIndex"] => $context["column"]) {
                // line 56
                echo "                    ";
                $context["th"] = (($__internal_compile_0 = $context["headerRow"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["columnIndex"]] ?? null) : null);
                // line 57
                echo "                    ";
                if (($context["th"] ?? null)) {
                    // line 58
                    echo "                    <th ";
                    echo twig_get_attribute($this->env, $this->source, ($context["th"] ?? null), "getAttributeString", [], "any", false, false, false, 58);
                    echo " style=\"width: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getWidth", [], "any", false, false, false, 58), "html", null, true);
                    echo "; ";
                    ((($context["rowIndex"] > 0)) ? (print (twig_escape_filter($this->env, (("top: " . (2.83 * $context["rowIndex"])) . "rem"), "html", null, true))) : (print ("")));
                    echo "\">
                        ";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, ($context["th"] ?? null), "getOutput", [], "any", false, false, false, 59);
                    echo "

                        ";
                    // line 61
                    if (twig_get_attribute($this->env, $this->source, ($context["th"] ?? null), "getData", ["description"], "method", false, false, false, 61)) {
                        // line 62
                        echo "                            <br/><small><i>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["th"] ?? null), "getData", ["description"], "method", false, false, false, 62), "html", null, true);
                        echo "</i></small>
                        ";
                    }
                    // line 64
                    echo "                    </th>
                    ";
                }
                // line 66
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['columnIndex'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowIndex'], $context['headerRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            </thead>

            <tbody>
            ";
        // line 72
        if (( !($context["rows"] ?? null) && ($context["isFiltered"] ?? null))) {
            // line 73
            echo "                <tr class=\"h-48 bg-gray-100 shadow-inner\">
                    <td class=\"p-0\" colspan=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["columns"] ?? null)), "html", null, true);
            echo "\">
                    ";
            // line 75
            $this->displayBlock("blankslate", $context, $blocks);
            echo "
                    </td>
                </tr>
            ";
        }
        // line 79
        echo "
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["rowIndex"] => $context["rowData"]) {
            // line 81
            echo "                ";
            $context["row"] = twig_get_attribute($this->env, $this->source, $context["rowData"], "row", [], "any", false, false, false, 81);
            // line 82
            echo "
                ";
            // line 83
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "getPrepended", [], "any", false, false, false, 83);
            echo "

                <tr ";
            // line 85
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "getAttributeString", [], "any", false, false, false, 85);
            echo ">

                    ";
            // line 87
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
                // line 88
                echo "                        ";
                $context["cell"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["rowData"], "cells", [], "any", false, false, false, 88)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["columnIndex"]] ?? null) : null);
                // line 89
                echo "                        
                        <td ";
                // line 90
                echo twig_get_attribute($this->env, $this->source, ($context["cell"] ?? null), "getAttributeString", [], "any", false, false, false, 90);
                echo " style=\"width: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getWidth", [], "any", false, false, false, 90), "html", null, true);
                echo "\">
                            ";
                // line 91
                echo twig_get_attribute($this->env, $this->source, ($context["cell"] ?? null), "getPrepended", [], "any", false, false, false, 91);
                echo "

                            ";
                // line 93
                if ((twig_get_attribute($this->env, $this->source, $context["column"], "getID", [], "any", false, false, false, 93) == "actions")) {
                    echo " 
                                ";
                    // line 94
                    $this->displayBlock('actions', $context, $blocks);
                    // line 114
                    echo "
                            ";
                } else {
                    // line 116
                    echo "                                ";
                    echo twig_get_attribute($this->env, $this->source, $context["column"], "getOutput", [twig_get_attribute($this->env, $this->source, $context["rowData"], "data", [], "any", false, false, false, 116)], "method", false, false, false, 116);
                    echo "
                            ";
                }
                // line 118
                echo "
                            ";
                // line 119
                echo twig_get_attribute($this->env, $this->source, ($context["cell"] ?? null), "getAppended", [], "any", false, false, false, 119);
                echo "
                        </td>
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
            // line 122
            echo "                </tr>

                ";
            // line 124
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "getAppended", [], "any", false, false, false, 124);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowIndex'], $context['rowData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "            </tbody>
        </table>
    ";
    }

    // line 94
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "                                <nav class=\"relative group\">
                                    ";
        // line 96
        twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "getOutput", [twig_get_attribute($this->env, $this->source, ($context["rowData"] ?? null), "data", [], "any", false, false, false, 96)], "method", false, false, false, 96);
        // line 97
        echo "                                    ";
        $context["actions"] = twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "getActions", [], "any", false, false, false, 97);
        // line 98
        echo "
                                    <div class=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "getClass", [], "method", false, false, false, 99), "html", null, true);
        echo " ";
        echo (((twig_length_filter($this->env, ($context["actions"] ?? null)) == 1)) ? ("flex -m-2 sm:m-0") : ("hidden group-hover:flex sm:flex absolute sm:static top-0 right-0 -mr-1 rounded shadow sm:shadow-none bg-white sm:bg-transparent px-1 -mt-3 sm:m-0 sm:p-0 z-10"));
        echo "\">
                                        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
        foreach ($context['_seq'] as $context["actionName"] => $context["action"]) {
            // line 101
            echo "                                            ";
            twig_get_attribute($this->env, $this->source, $context["action"], "addClass", ["p-3 sm:p-0"], "method", false, false, false, 101);
            // line 102
            echo "                                            ";
            echo twig_get_attribute($this->env, $this->source, $context["action"], "getOutput", [twig_get_attribute($this->env, $this->source, ($context["rowData"] ?? null), "data", [], "any", false, false, false, 102), twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "getParams", [], "any", false, false, false, 102)], "method", false, false, false, 102);
            echo "
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['actionName'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                                    </div>

                                    ";
        // line 106
        if ((twig_length_filter($this->env, ($context["actions"] ?? null)) > 1)) {
            // line 107
            echo "                                    <button class=\"block sm:hidden rounded mx-auto my-1 px-1 py-2 bg-gray-300 text-2xl text-gray-600 font-sans font-bold leading-none\" onClick=\"event.preventDefault();\" onTouchEnd=\"event.preventDefault();\">
                                        <span class=\"block -mt-3\">...</span>
                                    </button>
                                    ";
        }
        // line 111
        echo "                                </nav>

                                ";
    }

    // line 134
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "    ";
    }

    public function getTemplateName()
    {
        return "components/dataTable.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 135,  451 => 134,  445 => 111,  439 => 107,  437 => 106,  433 => 104,  424 => 102,  421 => 101,  417 => 100,  411 => 99,  408 => 98,  405 => 97,  403 => 96,  400 => 95,  396 => 94,  390 => 126,  382 => 124,  378 => 122,  361 => 119,  358 => 118,  352 => 116,  348 => 114,  346 => 94,  342 => 93,  337 => 91,  331 => 90,  328 => 89,  325 => 88,  308 => 87,  303 => 85,  298 => 83,  295 => 82,  292 => 81,  288 => 80,  285 => 79,  278 => 75,  274 => 74,  271 => 73,  269 => 72,  264 => 69,  257 => 67,  251 => 66,  247 => 64,  241 => 62,  239 => 61,  234 => 59,  225 => 58,  222 => 57,  219 => 56,  215 => 55,  211 => 53,  207 => 52,  194 => 50,  191 => 49,  187 => 48,  180 => 43,  176 => 42,  171 => 33,  167 => 31,  158 => 29,  154 => 28,  151 => 27,  149 => 26,  146 => 25,  142 => 24,  136 => 136,  134 => 134,  128 => 130,  125 => 129,  123 => 48,  120 => 47,  116 => 45,  114 => 42,  111 => 41,  109 => 40,  101 => 37,  97 => 35,  95 => 24,  91 => 22,  87 => 21,  80 => 13,  76 => 12,  69 => 139,  67 => 21,  64 => 20,  58 => 18,  56 => 17,  53 => 16,  49 => 12,  47 => 11,  44 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/dataTable.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\components\\dataTable.twig.html");
    }
}
