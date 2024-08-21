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

/* installer/install.twig.html */
class __TwigTemplate_c3fc1f129237a16f04655cc673224ed2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'beforePage' => [$this, 'block_beforePage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "index.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.twig.html", "installer/install.twig.html", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        $this->loadTemplate("head.twig.html", "installer/install.twig.html", 14)->displayBlock("meta", $context);
        echo "

    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../favicon.ico\"/>
    <link rel='stylesheet' type='text/css' href='../resources/assets/css/theme.min.css' />
    <link rel='stylesheet' type='text/css' href='../resources/assets/css/core.min.css' />
    <link rel='stylesheet' type='text/css' href='../themes/Default/css/main.css' />
    <script type=\"text/javascript\" src=\"../lib/LiveValidation/livevalidation_standalone.compressed.js\"></script>
    <script type=\"text/javascript\" src=\"../lib/jquery/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"../lib/jquery/jquery-migrate.min.js\"></script>
    <script type='text/javascript' src='../resources/assets/js/core.js'></script>
    <script type=\"text/javascript\" src=\"../resources/assets/js/installer.js\"></script>
";
    }

    // line 27
    public function block_beforePage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "
    ";
        // line 29
        if ((($context["step"] ?? null) <= 1)) {
            // line 30
            echo "    <div class=\"shadow bg-white rounded max-w-4xl mx-auto pt-4 pb-6 px-8 mb-6\">
        <h2>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Welcome To iums"), "html", null, true);
            echo "</h2>

        <p style='padding-top: 7px'>
            ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Created by teachers, Gibbon is the school platform which solves real problems faced by educators every day."), "html", null, true);
            echo "
            <br/><br/>
            ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Free, open source and flexible, Gibbon can morph to meet the needs of a huge range of schools."), "html", null, true);
            echo "
            <br/><br/>
            ";
            // line 38
            echo twig_replace_filter($this->env->getFunction('__')->getCallable()("For support, please visit %1\$sgibbonedu.org%2\$s."), ["%1\$s" => "<a target='_blank' href='https://gibbonedu.org/support'>", "%2\$s" => "</a>"]);
            echo "
        </p>
    </div>
    ";
        }
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "installer/install.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 42,  96 => 38,  91 => 36,  86 => 34,  80 => 31,  77 => 30,  75 => 29,  72 => 28,  68 => 27,  51 => 14,  47 => 13,  36 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "installer/install.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\installer\\install.twig.html");
    }
}
