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

/* foot.twig.html */
class __TwigTemplate_c5d0342df62e0e8021525e9e42c33350 extends Template
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
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "extraFoot", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 15
            echo "    ";
            echo $context["code"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "scriptsFoot", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 19
            echo "    ";
            $context["assetVersion"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 19))) ? (twig_get_attribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 19)) : (($context["version"] ?? null)));
            // line 20
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["asset"], "type", [], "any", false, false, false, 20) == "inline")) {
                // line 21
                echo "        <script type=\"text/javascript\">";
                echo twig_get_attribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 21);
                echo "</script>
    ";
            } else {
                // line 23
                echo "        <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 23), "html", null, true);
                echo "?v=";
                echo twig_escape_filter($this->env, ($context["assetVersion"] ?? null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, ($context["cacheString"] ?? null), "html", null, true);
                echo "\"></script>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "foot.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  66 => 21,  63 => 20,  60 => 19,  56 => 18,  53 => 17,  44 => 15,  40 => 14,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "foot.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\foot.twig.html");
    }
}
