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

/* head.twig.html */
class __TwigTemplate_59b5da6a1a2a5fc7ab89fb867d78e11c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'styles' => [$this, 'block_styles'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('meta', $context, $blocks);
        // line 25
        echo "

";
        // line 27
        $this->displayBlock('styles', $context, $blocks);
        // line 37
        echo "

";
        // line 39
        $this->displayBlock('scripts', $context, $blocks);
    }

    // line 14
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <meta http-equiv=\"content-language\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "\"/>
    <meta name=\"author\" content=\"Ross Parker, International College Hong Kong\"/>
    <meta name=\"robots\" content=\"noindex\"/>
    <meta name=\"Referrer‐Policy\" value=\"no‐referrer | same‐origin\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./favicon.ico\"/>
";
    }

    // line 27
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "stylesheets", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 29
            echo "        ";
            $context["assetVersion"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 29))) ? (twig_get_attribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 29)) : (($context["version"] ?? null)));
            // line 30
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["asset"], "type", [], "any", false, false, false, 30) == "inline")) {
                // line 31
                echo "            <style type=\"text/css\">";
                echo twig_get_attribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 31);
                echo "</style>
        ";
            } else {
                // line 33
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 33), "html", null, true);
                echo "?v=";
                echo twig_escape_filter($this->env, ($context["assetVersion"] ?? null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, ($context["cacheString"] ?? null), "html", null, true);
                echo "\" type=\"text/css\" media=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["asset"], "media", [], "any", false, false, false, 33), "html", null, true);
                echo "\" />
        ";
            }
            // line 35
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 39
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "scriptsHead", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 41
            echo "        ";
            $context["assetVersion"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 41))) ? (twig_get_attribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 41)) : (($context["version"] ?? null)));
            // line 42
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["asset"], "type", [], "any", false, false, false, 42) == "inline")) {
                // line 43
                echo "            <script type=\"text/javascript\">";
                echo twig_get_attribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 43);
                echo "</script>
        ";
            } else {
                // line 45
                echo "            <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 45), "html", null, true);
                echo "?v=";
                echo twig_escape_filter($this->env, ($context["assetVersion"] ?? null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, ($context["cacheString"] ?? null), "html", null, true);
                echo "\"></script>
        ";
            }
            // line 47
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "extraHead", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 50
            echo "        ";
            echo $context["code"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "head.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  170 => 50,  166 => 49,  163 => 48,  157 => 47,  145 => 45,  139 => 43,  136 => 42,  133 => 41,  128 => 40,  124 => 39,  116 => 35,  102 => 33,  96 => 31,  93 => 30,  90 => 29,  85 => 28,  81 => 27,  71 => 19,  63 => 15,  59 => 14,  55 => 39,  51 => 37,  49 => 27,  45 => 25,  43 => 14,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "head.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\head.twig.html");
    }
}
