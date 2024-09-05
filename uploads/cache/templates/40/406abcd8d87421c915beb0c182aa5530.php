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

/* ui/personalDocuments.twig.html */
class __TwigTemplate_2a2ecd9f3b79d274330676378e7512bd extends Template
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
        if (($context["documents"] ?? null)) {
            // line 12
            echo "    ";
            if ( !($context["noTitle"] ?? null)) {
                // line 13
                echo "    <h4>
        ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Personal Documents"), "html", null, true);
                echo "
    </h4>
    ";
            }
            // line 17
            echo "
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["documents"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 19
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["document"], "documentNumber", [], "any", false, false, false, 19) != "N/A")) {
                    // line 20
                    echo "
        ";
                    // line 21
                    if (twig_get_attribute($this->env, $this->source, $context["document"], "filePath", [], "any", false, false, false, 21)) {
                        // line 22
                        echo "        <a href=\"";
                        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "filePath", [], "any", false, false, false, 22), "html", null, true);
                        echo "\" target=\"_blank\" class=\"flex flex-wrap justify-start items-center rounded bg-gray-100 hover:bg-blue-100 border hover:border-blue-500 text-gray-800 hover:text-blue-700 cursor-pointer font-sans my-2 p-4 \">
        ";
                    } else {
                        // line 24
                        echo "        <a class=\"flex flex-wrap justify-start items-center rounded bg-gray-100 border text-gray-800 font-sans my-2 p-4 \">
        ";
                    }
                    // line 26
                    echo "
            <div class=\"w-full sm:w-2/5 xl:w-1/3 flex mb-4 sm:mb-0 flex items-center\">
                ";
                    // line 28
                    echo twig_include($this->env, $context, "ui/icons.twig.html", ["icon" => twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "document", [], "any", false, false, false, 28))]);
                    echo "

                <div class=\"ml-4\">
                    <div class=\"text-sm font-medium\">
                        ";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 32)), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 34
                    if ((twig_get_attribute($this->env, $this->source, $context["document"], "documentNumber", [], "any", false, false, false, 34) || twig_get_attribute($this->env, $this->source, $context["document"], "documentName", [], "any", false, false, false, 34))) {
                        // line 35
                        echo "                    <span class=\"text-xs text-gray-600\">
                        ";
                        // line 36
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "documentNumber", [], "any", false, false, false, 36), "html", null, true);
                        echo " ";
                        ((twig_get_attribute($this->env, $this->source, $context["document"], "documentName", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, (" | " . twig_get_attribute($this->env, $this->source, $context["document"], "documentName", [], "any", false, false, false, 36)), "html", null, true))) : (print ("")));
                        echo "
                    </span>
                    ";
                    }
                    // line 39
                    echo "                </div>

            </div>

            ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(json_decode(twig_get_attribute($this->env, $this->source, $context["document"], "fields", [], "any", false, false, false, 43)));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 44
                        echo "                ";
                        if (((($context["field"] != "documentNumber") && ($context["field"] != "documentName")) && ($context["field"] != "filePath"))) {
                            // line 45
                            echo "                <div class=\"w-1/4 sm:w-1/6 xl:w-1/5 text-gray-700\">
                    <div class=\"text-xs font-medium\">
                        ";
                            // line 47
                            if (($context["field"] == "dateIssue")) {
                                // line 48
                                echo "                            ";
                                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Issued"), "html", null, true);
                                echo "
                        ";
                            } elseif ((                            // line 49
$context["field"] == "dateExpiry")) {
                                // line 50
                                echo "                            ";
                                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Expiry"), "html", null, true);
                                echo "
                        ";
                            } elseif ((                            // line 51
$context["field"] == "country")) {
                                // line 52
                                echo "                            ";
                                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Country"), "html", null, true);
                                echo "
                        ";
                            } elseif ((                            // line 53
$context["field"] == "documentType")) {
                                // line 54
                                echo "                            ";
                                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Type"), "html", null, true);
                                echo "
                        ";
                            }
                            // line 56
                            echo "                    </div>
                    <span class=\"text-xs text-gray-600\">
                        ";
                            // line 58
                            if ((($context["field"] == "dateIssue") || ($context["field"] == "dateExpiry"))) {
                                // line 59
                                echo "                            ";
                                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getFunction('formatUsing')->getCallable()("date", (($__internal_compile_0 = $context["document"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["field"]] ?? null) : null)), $this->env->getFunction('__')->getCallable()("N/A")), "html", null, true);
                                echo "
                        ";
                            } else {
                                // line 61
                                echo "                            ";
                                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["document"], $context["field"], [], "array", true, true, false, 61)) ? (_twig_default_filter((($__internal_compile_1 = $context["document"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["field"]] ?? null) : null), $this->env->getFunction('__')->getCallable()("N/A"))) : ($this->env->getFunction('__')->getCallable()("N/A"))), "html", null, true);
                                echo "
                        ";
                            }
                            // line 63
                            echo "                    </span>
                </div>
                ";
                        }
                        // line 66
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 67
                    echo "            <div class=\"flex-grow\"></div>

            ";
                    // line 69
                    if (twig_get_attribute($this->env, $this->source, $context["document"], "filePath", [], "any", false, false, false, 69)) {
                        // line 70
                        echo "            <div class=\"text-xs font-medium\">
                <img alt=\"";
                        // line 71
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Scanned Copy"), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("View"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["document"], "document", [], "any", false, false, false, 71)), "html", null, true);
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                        echo "/themes/";
                        echo twig_escape_filter($this->env, ($context["gibbonThemeName"] ?? null), "html", null, true);
                        echo "/img/zoom.png\" class=\"ml-1\" width=\"25\" height=\"25\">
            </div>
            ";
                    }
                    // line 74
                    echo "
        </a>

        ";
                }
                // line 78
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "ui/personalDocuments.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 78,  221 => 74,  207 => 71,  204 => 70,  202 => 69,  198 => 67,  192 => 66,  187 => 63,  181 => 61,  175 => 59,  173 => 58,  169 => 56,  163 => 54,  161 => 53,  156 => 52,  154 => 51,  149 => 50,  147 => 49,  142 => 48,  140 => 47,  136 => 45,  133 => 44,  129 => 43,  123 => 39,  115 => 36,  112 => 35,  110 => 34,  105 => 32,  98 => 28,  94 => 26,  90 => 24,  82 => 22,  80 => 21,  77 => 20,  74 => 19,  57 => 18,  54 => 17,  48 => 14,  45 => 13,  42 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "ui/personalDocuments.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\ui\\personalDocuments.twig.html");
    }
}
