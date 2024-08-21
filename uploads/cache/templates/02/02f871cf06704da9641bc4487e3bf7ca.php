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

/* footer.twig.html */
class __TwigTemplate_bda18041074c4e258d0f3c91f2337f1b extends Template
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
        // line 25
        echo "
<span class=\"inline-block font-bold\">
    ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Powered by"), "html", null, true);
        echo " <a class=\"text-";
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-800\" target='_blank' href='https://su.ac.ug'>Seeta Schools</a> ";
        echo twig_escape_filter($this->env, ($context["versionName"] ?? null), "html", null, true);
        echo "<br/>
</span> 
<br/>
<span class=\"text-xs\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(""), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(""), "html", null, true);
        echo "<br/>
    Copyright © <a class=\"text-";
        // line 32
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-800\" target='_blank' href='http://su.ac.ug'>Seeta University</a> 2010-";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " | Seeta Schools<br/>
    ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(""), "html", null, true);
        echo " <a class=\"text-";
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-800\" target='_blank' href=''></a>
    <a class=\"text-";
        // line 34
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-800\" target='_blank' href='https://su.ac.ug/'>";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(""), "html", null, true);
        echo "</a>  
    <a class=\"text-";
        // line 35
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-800\" target='_blank' href='https://su.ac.ug/about/#translators'>";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(""), "html", null, true);
        echo "</a> 
    <a class=\"text-";
        // line 36
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-800\" target='_blank' href='https://su.ac.ug/support/'>";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(""), "html", null, true);
        echo "</a>
    <br/>
    ";
        // line 38
        echo twig_escape_filter($this->env, ($context["footerThemeAuthor"] ?? null), "html", null, true);
        echo "<br/>
</span>
";
    }

    public function getTemplateName()
    {
        return "footer.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  82 => 36,  76 => 35,  70 => 34,  64 => 33,  58 => 32,  52 => 31,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\footer.twig.html");
    }
}
