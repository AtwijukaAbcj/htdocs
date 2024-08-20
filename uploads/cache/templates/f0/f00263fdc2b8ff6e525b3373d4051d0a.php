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

/* components/form.twig.html */
class __TwigTemplate_3da5a268a763a6141ce387a0284a44cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getAction", [], "any", false, false, false, 11) != "ajax")) {
            // line 12
            echo "<form ";
            echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getAttributeString", [], "any", false, false, false, 12);
            echo " onsubmit=\"gibbonFormSubmitted(this)\">
";
        }
        // line 14
        echo "
    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hasPages", [], "any", false, false, false, 15)) {
            // line 16
            echo "        <ul class=\"multiPartForm my-6\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getPages", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "            <li class=\"step ";
                echo (((twig_get_attribute($this->env, $this->source, $context["page"], "number", [], "any", false, false, false, 18) <= twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getCurrentPage", [], "any", false, false, false, 18))) ? ("active") : (""));
                echo "\">
                ";
                // line 19
                if (((twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 19) && (twig_get_attribute($this->env, $this->source, $context["page"], "number", [], "any", false, false, false, 19) <= twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getMaxPage", [], "any", false, false, false, 19))) && (twig_get_attribute($this->env, $this->source, $context["page"], "number", [], "any", false, false, false, 19) != twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getCurrentPage", [], "any", false, false, false, 19)))) {
                    // line 20
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 20), "html", null, true);
                    echo "\" class=\"-mt-10 pt-10 text-gray-800 hover:text-purple-600 hover:underline\">
                ";
                }
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 22), "html", null, true);
                // line 23
                if (((twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 23) && (twig_get_attribute($this->env, $this->source, $context["page"], "number", [], "any", false, false, false, 23) <= twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getMaxPage", [], "any", false, false, false, 23))) && (twig_get_attribute($this->env, $this->source, $context["page"], "number", [], "any", false, false, false, 23) != twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getCurrentPage", [], "any", false, false, false, 23)))) {
                    // line 24
                    echo "                    </a>
                ";
                }
                // line 26
                echo "            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </ul>
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getTitle", [], "any", false, false, false, 31) &&  !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getHeader", [], "any", false, false, false, 31))) {
            // line 32
            echo "        <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getTitle", [], "any", false, false, false, 32), "html", null, true);
            echo "</h2>
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getDescription", [], "any", false, false, false, 35)) {
            // line 36
            echo "        <p>";
            echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getDescription", [], "any", false, false, false, 36);
            echo "</p>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (($context["introduction"] ?? null)) {
            // line 40
            echo "        <p>";
            echo ($context["introduction"] ?? null);
            echo "</p>
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getHiddenValues", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["values"]) {
            // line 57
            echo "        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["values"], "name", [], "any", false, false, false, 57), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["values"], "value", [], "any", false, false, false, 57), "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
    ";
        // line 60
        $context["renderStyle"] = (((twig_in_filter("standardForm", twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClass", [], "any", false, false, false, 60)) || (twig_in_filter("noIntBorder", twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClass", [], "any", false, false, false, 60)) && !twig_in_filter("blank", twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClass", [], "any", false, false, false, 60))))) ? ("flex") : ("table"));
        // line 61
        echo "
    ";
        // line 62
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getRows", [], "any", false, false, false, 62)) > 0)) {
            // line 63
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClass", [], "any", false, false, false, 63), "html", null, true);
            echo " font-sans text-xs text-gray-700 relative ";
            echo ((!twig_in_filter("blank", twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClass", [], "any", false, false, false, 63))) ? ("bg-gray-100 rounded border mt-3") : (""));
            echo "\" style=\"";
            echo ((twig_in_filter("noIntBorder", twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClass", [], "any", false, false, false, 63))) ? ("background:#edf7ff") : (""));
            echo "\" cellspacing=\"0\">

        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getRowsByHeading", [], "any", false, false, false, 65));
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
            foreach ($context['_seq'] as $context["section"] => $context["rows"]) {
                // line 66
                echo "            ";
                $context["sectionLoop"] = $context["loop"];
                // line 67
                echo "
            ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["rows"]);
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
                foreach ($context['_seq'] as $context["num"] => $context["row"]) {
                    // line 69
                    echo "
                ";
                    // line 70
                    $context["rowLoop"] = $context["loop"];
                    // line 71
                    echo "                ";
                    if ((true || (($context["renderStyle"] ?? null) == "flex"))) {
                        // line 72
                        echo "                    ";
                        $context["rowClass"] = "flex flex-col sm:flex-row justify-between sm:items-center content-center p-0";
                        // line 73
                        echo "                ";
                    }
                    // line 74
                    echo "
                ";
                    // line 75
                    $context["firstElement"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "getElements", [], "any", false, false, false, 75));
                    // line 76
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["firstElement"] ?? null), "isInstanceOf", ["Gibbon\\Forms\\Layout\\Heading"], "method", false, false, false, 76) && (twig_get_attribute($this->env, $this->source, ($context["firstElement"] ?? null), "getTag", [], "any", false, false, false, 76) == "h3"))) {
                        // line 77
                        echo "                    ";
                        $context["rowClass"] = ((!twig_in_filter("blank", twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClass", [], "any", false, false, false, 77))) ? ((($context["rowClass"] ?? null) . " bg-gray-300")) : ((($context["rowClass"] ?? null) . " my-2")));
                        // line 78
                        echo "                ";
                    }
                    // line 79
                    echo "

                <div id=\"";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "getID", [], "any", false, false, false, 81), "html", null, true);
                    echo "\" class=\"formRow ";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["row"], "getClass", [], "any", false, false, false, 81), ["standardWidth" => ""]), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["rowClass"] ?? null), "html", null, true);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "getAttributeString", ["data-drag-id"], "method", false, false, false, 81);
                    echo ">

                ";
                    // line 83
                    if (twig_in_filter("draggableRow", twig_get_attribute($this->env, $this->source, $context["row"], "getClass", [], "any", false, false, false, 83))) {
                        // line 84
                        echo "                    <div class=\"drag-handle w-2 h-6 ml-2 px-px border-4 border-dotted cursor-move\"></div>
                ";
                    }
                    // line 86
                    echo "        
                ";
                    // line 87
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "getElements", [], "any", false, false, false, 87));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                        // line 88
                        echo "                    ";
                        $context["colspan"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 88) && (twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 88) < ($context["totalColumns"] ?? null)))) ? (((($context["totalColumns"] ?? null) + 1) - twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 88))) : (0));
                        // line 89
                        echo "
                    ";
                        // line 90
                        if (twig_get_attribute($this->env, $this->source, $context["element"], "isInstanceOf", ["Gibbon\\Forms\\Layout\\Heading"], "method", false, false, false, 90)) {
                            // line 91
                            echo "                        ";
                            $context["class"] = "flex-grow justify-center";
                            // line 92
                            echo "                    ";
                        } elseif (twig_get_attribute($this->env, $this->source, $context["element"], "isInstanceOf", ["Gibbon\\Forms\\Layout\\Label"], "method", false, false, false, 92)) {
                            // line 93
                            echo "                        ";
                            $context["class"] = "flex flex-col flex-grow justify-center -mb-1 sm:mb-0";
                            // line 94
                            echo "                    ";
                        } elseif (twig_get_attribute($this->env, $this->source, $context["element"], "isInstanceOf", ["Gibbon\\Forms\\Layout\\Column"], "method", false, false, false, 94)) {
                            // line 95
                            echo "                        ";
                            $context["class"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 95) && (twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 95) == 2))) ? ("w-full max-w-full sm:max-w-sm flex justify-end") : ("w-full "));
                            // line 96
                            echo "                    ";
                        } elseif (((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 96) && (twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 96) == 2)) && (($context["renderStyle"] ?? null) == "flex"))) {
                            // line 97
                            echo "                        ";
                            $context["class"] = "w-full max-w-full sm:max-w-sm flex justify-end items-center";
                            // line 98
                            echo "                    ";
                        } else {
                            // line 99
                            echo "                        ";
                            $context["class"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 99) && (twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 99) > 2))) ? ("") : ("flex-1"));
                            // line 100
                            echo "                    ";
                        }
                        // line 101
                        echo "
                    ";
                        // line 102
                        if (((($context["renderStyle"] ?? null) == "table") && twig_get_attribute($this->env, $this->source, $context["element"], "isInstanceOf", ["Gibbon\\Forms\\Layout\\Label"], "method", false, false, false, 102))) {
                            // line 103
                            echo "                        ";
                            $context["class"] = (($context["class"] ?? null) . " lg:w-2/5");
                            // line 104
                            echo "                    ";
                        }
                        // line 105
                        echo "
                    ";
                        // line 106
                        if (twig_in_filter("standardForm", twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClass", [], "any", false, false, false, 106))) {
                            // line 107
                            echo "                        ";
                            $context["class"] = (($context["class"] ?? null) . " px-4 py-4");
                            // line 108
                            echo "                    ";
                        } elseif (!twig_in_filter("blank", twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClass", [], "any", false, false, false, 108))) {
                            // line 109
                            echo "                    ";
                            $context["class"] = (($context["class"] ?? null) . " px-3 py-2");
                            // line 110
                            echo "                    ";
                        }
                        // line 111
                        echo "
                    ";
                        // line 112
                        $context["hasClass"] = (twig_get_attribute($this->env, $this->source, $context["element"], "instanceOf", ["Gibbon\\Forms\\Layout\\Element"], "method", false, false, false, 112) || twig_get_attribute($this->env, $this->source, $context["element"], "instanceOf", ["Gibbon\\Forms\\Layout\\Row"], "method", false, false, false, 112));
                        // line 113
                        echo "                    <div class=\"";
                        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                        echo " ";
                        ((($context["hasClass"] ?? null)) ? (print (twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["element"], "getClass", [], "any", false, false, false, 113), ["standardWidth" => ""]), "html", null, true))) : (print ("")));
                        echo "\" ";
                        echo ((($context["colspan"] ?? null)) ? (twig_sprintf("colspan=\"%s\"", ($context["colspan"] ?? null))) : (""));
                        echo ">
                        ";
                        // line 114
                        echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["element"], "getOutput", [], "any", false, false, false, 114), ["standardWidth" => (((($context["renderStyle"] ?? null) == "flex")) ? ("w-full") : (""))]);
                        echo "

                        ";
                        // line 116
                        if (twig_get_attribute($this->env, $this->source, $context["element"], "instanceOf", ["Gibbon\\Forms\\ValidatableInterface"], "method", false, false, false, 116)) {
                            // line 117
                            echo "                        <script type=\"text/javascript\">
                            ";
                            // line 118
                            echo twig_get_attribute($this->env, $this->source, $context["element"], "getValidationOutput", [], "any", false, false, false, 118);
                            echo "
                        </script>
                        ";
                        }
                        // line 121
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "
                </div>
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
                unset($context['_seq'], $context['_iterated'], $context['num'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['section'], $context['rows'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "    </div>
    ";
        }
        // line 129
        echo "
    ";
        // line 130
        if (($context["postScript"] ?? null)) {
            // line 131
            echo "        <p>";
            echo ($context["postScript"] ?? null);
            echo "</p>
    ";
        }
        // line 133
        echo "
    <script type=\"text/javascript\">
        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["javascript"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 136
            echo "            ";
            echo $context["code"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "    </script>

";
        // line 140
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getAction", [], "any", false, false, false, 140)) {
            // line 141
            echo "</form>
";
        }
    }

    // line 43
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "        <header class=\"relative flex justify-between\">
            ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getHeader", [], "any", false, false, false, 45)) {
            // line 46
            echo "                <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getTitle", [], "any", false, false, false, 46), "html", null, true);
            echo "</h2>
                <div class=\"linkTop\">
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getHeader", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 49
                echo "                        ";
                echo twig_get_attribute($this->env, $this->source, $context["action"], "getOutput", [], "any", false, false, false, 49);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </div>
            ";
        }
        // line 53
        echo "        </header>
    ";
    }

    public function getTemplateName()
    {
        return "components/form.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 53,  491 => 51,  482 => 49,  478 => 48,  472 => 46,  470 => 45,  467 => 44,  463 => 43,  457 => 141,  455 => 140,  451 => 138,  442 => 136,  438 => 135,  434 => 133,  428 => 131,  426 => 130,  423 => 129,  419 => 127,  405 => 126,  389 => 123,  374 => 121,  368 => 118,  365 => 117,  363 => 116,  358 => 114,  349 => 113,  347 => 112,  344 => 111,  341 => 110,  338 => 109,  335 => 108,  332 => 107,  330 => 106,  327 => 105,  324 => 104,  321 => 103,  319 => 102,  316 => 101,  313 => 100,  310 => 99,  307 => 98,  304 => 97,  301 => 96,  298 => 95,  295 => 94,  292 => 93,  289 => 92,  286 => 91,  284 => 90,  281 => 89,  278 => 88,  261 => 87,  258 => 86,  254 => 84,  252 => 83,  241 => 81,  237 => 79,  234 => 78,  231 => 77,  228 => 76,  226 => 75,  223 => 74,  220 => 73,  217 => 72,  214 => 71,  212 => 70,  209 => 69,  192 => 68,  189 => 67,  186 => 66,  169 => 65,  159 => 63,  157 => 62,  154 => 61,  152 => 60,  149 => 59,  138 => 57,  134 => 56,  131 => 55,  129 => 43,  126 => 42,  120 => 40,  118 => 39,  115 => 38,  109 => 36,  107 => 35,  104 => 34,  98 => 32,  96 => 31,  93 => 30,  89 => 28,  82 => 26,  78 => 24,  76 => 23,  74 => 22,  68 => 20,  66 => 19,  61 => 18,  57 => 17,  54 => 16,  52 => 15,  49 => 14,  43 => 12,  41 => 11,  38 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\components\\form.twig.html");
    }
}
