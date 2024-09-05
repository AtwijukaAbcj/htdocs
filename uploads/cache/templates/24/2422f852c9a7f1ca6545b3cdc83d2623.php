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

/* mail/message.twig.html */
class __TwigTemplate_afa422aacc09a908ddb245485e25711d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "mail/email.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("mail/email.twig.html", "mail/message.twig.html", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    ";
        // line 14
        echo ($context["body"] ?? null);
        echo "

    ";
        // line 16
        if ((twig_length_filter($this->env, ($context["details"] ?? null)) > 0)) {
            // line 17
            echo "        <hr style=\"border:none;border-bottom:1px solid #ececec;margin:1.5rem 0;width:100%;\">

        <ul>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["details"] ?? null));
            foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                // line 21
                echo "            <li style=\"padding: 3px 0px;\">
                <b>";
                // line 22
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</b>: ";
                echo $context["value"];
                echo "
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </ul>

        <hr style=\"border:none;border-bottom:1px solid #ececec;margin:1.5rem 0;width:100%;\">
    ";
        }
        // line 29
        echo "
";
    }

    public function getTemplateName()
    {
        return "mail/message.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  83 => 25,  72 => 22,  69 => 21,  65 => 20,  60 => 17,  58 => 16,  53 => 14,  50 => 13,  46 => 12,  35 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/message.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\mail\\message.twig.html");
    }
}
