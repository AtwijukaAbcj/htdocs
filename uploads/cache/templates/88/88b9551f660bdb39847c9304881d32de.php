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

/* error.twig.html */
class __TwigTemplate_b8a36ea9b07c5c4368e6815cd0e58fa0 extends Template
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
        echo "<h1 class=\"mt-6 pt-1\">
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Oh no!"), "html", null, true);
        echo "
</h1>
<p>
    ";
        // line 14
        echo twig_escape_filter($this->env, ((($context["error"] ?? null)) ? (($context["error"] ?? null)) : ($this->env->getFunction('__')->getCallable()("Something has gone wrong: the Gibbons have escaped!"))), "html", null, true);
        echo "<br/>
    <br/>
    ";
        // line 16
        echo twig_escape_filter($this->env, ((($context["message"] ?? null)) ? (($context["message"] ?? null)) : ($this->env->getFunction('__')->getCallable()("An error has occurred. This could mean a number of different things, but generally indicates that you have a misspelt address, or are trying to access a page that you are not permitted to access."))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("If you cannot solve this problem by retyping the address, or through other means, please contact your system administrator."), "html", null, true);
        echo "<br/>
</p>
";
    }

    public function getTemplateName()
    {
        return "error.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  46 => 14,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "error.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\error.twig.html");
    }
}
