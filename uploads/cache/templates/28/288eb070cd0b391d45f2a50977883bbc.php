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

/* components/paginatedTable.twig.html */
class __TwigTemplate_ced3aad207fc7ca5ba3c791ca97d3a2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'table' => [$this, 'block_table'],
            'header' => [$this, 'block_header'],
            'footer' => [$this, 'block_footer'],
            'filters' => [$this, 'block_filters'],
            'pageCount' => [$this, 'block_pageCount'],
            'pagination' => [$this, 'block_pagination'],
            'bulkActions' => [$this, 'block_bulkActions'],
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
        $this->parent = $this->loadTemplate("components/dataTable.twig.html", "components/paginatedTable.twig.html", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"relative\">
        <div id=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getID", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
            <div class=\"dataTable\" data-results=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getResultCount", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
                ";
        // line 17
        $this->displayParentBlock("table", $context, $blocks);
        echo "
            </div>
        </div>

        ";
        // line 21
        $this->displayBlock("bulkActions", $context, $blocks);
        echo "
    </div>

    <script>
    \$(function(){
        \$('#";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "getID", [], "any", false, false, false, 26), "html", null, true);
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

    // line 32
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    <div class=\"flex items-end justify-between\" style=\"min-height:50px;\">
        <div class=\"flex items-end pb-2 ";
        // line 34
        echo (((twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getTotalCount", [], "any", false, false, false, 34) > 0)) ? ("h-10") : (""));
        echo "\">
            ";
        // line 35
        $this->displayBlock("pageCount", $context, $blocks);
        echo "
        </div>

        ";
        // line 38
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    </div>

    ";
        // line 41
        if (((twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getTotalCount", [], "any", false, false, false, 41) > 0) &&  !($context["hidePagination"] ?? null))) {
            // line 42
            echo "    <div class=\"flex flex-wrap sm:flex-no-wrap items-stretch justify-between\">
        <div class=\"flex items-stretch h-full\">
            ";
            // line 44
            if (($context["pageSize"] ?? null)) {
                // line 45
                echo "            <div class=\"relative -mr-1 mb-2\">
                <div class=\"absolute caret z-10 mt-3 right-0 mr-5 pointer-events-none\"></div>
                ";
                // line 47
                echo ($context["pageSize"] ?? null);
                echo "
            </div>
            ";
            }
            // line 50
            echo "
            ";
            // line 51
            if (($context["filterOptions"] ?? null)) {
                // line 52
                echo "            <div class=\"relative mb-2\">
                <div class=\"absolute caret z-10 mt-3 right-0 mr-5 pointer-events-none\"></div>
                ";
                // line 54
                echo ($context["filterOptions"] ?? null);
                echo "
            </div>
            ";
            }
            // line 57
            echo "            
            ";
            // line 58
            if ((($context["filterCriteria"] ?? null) && ($context["filterOptions"] ?? null))) {
                // line 59
                echo "            <nav class=\"flex cursor-default mb-2\">
                ";
                // line 60
                $this->displayBlock("filters", $context, $blocks);
                echo "
            </nav>
            ";
            }
            // line 63
            echo "        </div>

        ";
            // line 65
            if (($context["listOptions"] ?? null)) {
                // line 66
                echo "            ";
                echo twig_include($this->env, $context, "components/listOptions.twig.html");
                echo "
        ";
            }
            // line 68
            echo "
        ";
            // line 69
            $this->displayBlock("pagination", $context, $blocks);
            echo "
    </div>
    ";
        }
    }

    // line 75
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getResultCount", [], "any", false, false, false, 76) > twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getPageSize", [], "any", false, false, false, 76))) {
            // line 77
            echo "    <div class=\"flex flex-col sm:flex-row sm:items-end justify-end mt-2\">
        ";
            // line 78
            $this->displayBlock("pagination", $context, $blocks);
            echo "
    </div>
    ";
        }
    }

    // line 84
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filterCriteria"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["label"]) {
            // line 86
            echo "        <button type=\"button\" class=\"filter -mx-px py-2 px-3 text-xxs border border-blue-700 bg-blue-500 hover:bg-blue-700 z-10 text-white font-bold\" data-filter=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">
            ";
            // line 87
            echo $context["label"];
            echo "
        </button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    
    <button type=\"button\" class=\"filter p-2 rounded-r text-xxs border border-gray-500 text-gray-600 bg-gray-200 font-bold hover:bg-gray-400 clear\">
        ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Clear"), "html", null, true);
        echo "
    </button>

";
    }

    // line 98
    public function block_pageCount($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getTotalCount", [], "any", false, false, false, 99) > 0)) {
            // line 100
            echo "    <div class=\"text-xs\">
        ";
            // line 101
            ((($context["searchText"] ?? null)) ? (print (twig_escape_filter($this->env, ($this->env->getFunction('__')->getCallable()("Search") . " "), "html", null, true))) : (print ("")));
            echo "

        ";
            // line 103
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "isSubset", [], "any", false, false, false, 103)) ? ($this->env->getFunction('__')->getCallable()("Results")) : ($this->env->getFunction('__')->getCallable()("Records"))), "html", null, true);
            echo "

        ";
            // line 105
            if ((twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "count", [], "any", false, false, false, 105) > 0)) {
                // line 106
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getPageFrom", [], "any", false, false, false, 106), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getPageTo", [], "any", false, false, false, 106), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("of"), "html", null, true);
                echo "
        ";
            }
            // line 107
            echo " 
        
        ";
            // line 109
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getResultCount", [], "any", false, false, false, 109)), "html", null, true);
            echo "
    </div>
    ";
        }
    }

    // line 115
    public function block_pagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "    
    ";
        // line 117
        $context["buttonStyle"] = "border -ml-px px-2 py-1 font-bold leading-loose text-xxs";
        // line 118
        echo "    
    ";
        // line 119
        if (((twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getResultCount", [], "any", false, false, false, 119) > twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getPageSize", [], "any", false, false, false, 119)) || ($context["filterOptions"] ?? null))) {
            // line 120
            echo "    <div class=\"pagination mb-2 ml-2\">
        <button type=\"button\" class=\"paginate rounded-l text-gray-600 bg-gray-200 border-gray-500 ";
            // line 121
            echo (( !twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "isFirstPage", [], "any", false, false, false, 121)) ? ("hover:bg-gray-400") : (""));
            echo " ";
            echo twig_escape_filter($this->env, ($context["buttonStyle"] ?? null), "html", null, true);
            echo "\" data-page=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getPrevPageNumber", [], "any", false, false, false, 121), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "isFirstPage", [], "any", false, false, false, 121)) ? ("disabled") : (""));
            echo ">
            ";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Prev"), "html", null, true);
            echo "
        </button>";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getPaginatedRange", [], "any", false, false, false, 125));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 126
                if (($context["page"] == "...")) {
                    // line 127
                    echo "<button type=\"button\" class=\" ";
                    echo twig_escape_filter($this->env, ($context["buttonStyle"] ?? null), "html", null, true);
                    echo "\" disabled>...</button>";
                } else {
                    // line 129
                    echo "<button type=\"button\" class=\"paginate ";
                    echo twig_escape_filter($this->env, ($context["buttonStyle"] ?? null), "html", null, true);
                    echo " ";
                    echo ((($context["page"] == twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getPage", [], "any", false, false, false, 129))) ? ("bg-blue-500 border-blue-700 text-white relative z-10") : ("text-gray-600 hover:bg-gray-400 border-gray-500"));
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</button>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "<button type=\"button\" class=\"paginate rounded-r text-gray-600 border-gray-500 ";
            echo (( !twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "isLastPage", [], "any", false, false, false, 133)) ? ("hover:bg-gray-400") : (""));
            echo " ";
            echo twig_escape_filter($this->env, ($context["buttonStyle"] ?? null), "html", null, true);
            echo "\" data-page=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "getNextPageNumber", [], "any", false, false, false, 133), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["dataSet"] ?? null), "isLastPage", [], "any", false, false, false, 133)) ? ("disabled") : (""));
            echo ">
        ";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Next"), "html", null, true);
            echo "
        </button>
    </div>
    ";
        }
        // line 138
        echo "    
";
    }

    // line 142
    public function block_bulkActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "    ";
        if (($context["bulkActions"] ?? null)) {
            // line 144
            echo "    <div class=\"bulkActionPanel hidden absolute top-0 right-0 w-full flex items-center justify-between p-1 pt-2 bg-";
            echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
            echo "-600 rounded-t z-20\">
        <div class=\"bulkActionCount flex-grow text-white text-sm text-right pr-3\">
            <span>0</span> ";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Selected"), "html", null, true);
            echo "
        </div>
        
        ";
            // line 149
            echo twig_get_attribute($this->env, $this->source, ($context["bulkActions"] ?? null), "getOutput", [], "any", false, false, false, 149);
            echo "

        <script>
            ";
            // line 152
            echo twig_get_attribute($this->env, $this->source, ($context["bulkActions"] ?? null), "getValidationOutput", [], "any", false, false, false, 152);
            echo "
        </script>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "components/paginatedTable.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 152,  385 => 149,  379 => 146,  373 => 144,  370 => 143,  366 => 142,  361 => 138,  354 => 134,  343 => 133,  328 => 129,  323 => 127,  321 => 126,  317 => 125,  313 => 122,  303 => 121,  300 => 120,  298 => 119,  295 => 118,  293 => 117,  290 => 116,  286 => 115,  278 => 109,  274 => 107,  264 => 106,  262 => 105,  257 => 103,  252 => 101,  249 => 100,  246 => 99,  242 => 98,  234 => 92,  230 => 90,  221 => 87,  216 => 86,  211 => 85,  207 => 84,  199 => 78,  196 => 77,  193 => 76,  189 => 75,  181 => 69,  178 => 68,  172 => 66,  170 => 65,  166 => 63,  160 => 60,  157 => 59,  155 => 58,  152 => 57,  146 => 54,  142 => 52,  140 => 51,  137 => 50,  131 => 47,  127 => 45,  125 => 44,  121 => 42,  119 => 41,  113 => 38,  107 => 35,  103 => 34,  100 => 33,  96 => 32,  82 => 26,  74 => 21,  67 => 17,  63 => 16,  59 => 15,  56 => 14,  52 => 13,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/paginatedTable.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\components\\paginatedTable.twig.html");
    }
}
