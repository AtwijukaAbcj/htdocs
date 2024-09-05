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

/* requiredDocuments.twig.html */
class __TwigTemplate_62e01a4444154109e8b5406be80683f1 extends Template
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
                // line 13
                echo "
        ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["document"], "path", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "        <a href=\"";
                    echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "path", [], "any", false, false, false, 15), "html", null, true);
                    echo "\" target=\"_blank\" class=\"flex flex-wrap justify-start items-center rounded bg-gray-100 hover:bg-blue-100 border hover:border-blue-500 text-gray-800 hover:text-blue-700 cursor-pointer font-sans my-2 p-4 \">
        ";
                } else {
                    // line 17
                    echo "        <a class=\"flex flex-wrap justify-start items-center rounded bg-gray-100 border text-gray-800 font-sans my-2 p-4 \">
        ";
                }
                // line 19
                echo "
            <div class=\"w-full sm:w-2/5 xl:w-1/3 flex mb-4 sm:mb-0 flex items-center\">
                ";
                // line 21
                echo twig_include($this->env, $context, "ui/icons.twig.html", ["icon" => "file"]);
                echo "

                <div class=\"ml-4\">
                    <div class=\"text-sm font-medium\">
                        ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 25)), "html", null, true);
                echo "
                    </div>
                </div>

            </div>

            <div class=\"flex-grow\"></div>

            ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["document"], "path", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "            <div class=\"text-xs font-medium\">
                <img alt=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("View"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("View"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["document"], "document", [], "any", false, false, false, 35)), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                    echo "/themes/";
                    echo twig_escape_filter($this->env, ($context["gibbonThemeName"] ?? null), "html", null, true);
                    echo "/img/zoom.png\" class=\"ml-1\" width=\"25\" height=\"25\">
            </div>
            ";
                }
                // line 38
                echo "
        </a>

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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "requiredDocuments.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 38,  104 => 35,  101 => 34,  99 => 33,  88 => 25,  81 => 21,  77 => 19,  73 => 17,  65 => 15,  63 => 14,  60 => 13,  42 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "requiredDocuments.twig.html", "C:\\xampp\\htdocs\\modules\\Admissions\\templates\\requiredDocuments.twig.html");
    }
}
