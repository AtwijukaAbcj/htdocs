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

/* components/formTable.twig.html */
class __TwigTemplate_c16bb923cd00f1800d201be7b4a9b0b7 extends Template
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
        twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addClass", ["formTable"], "method", false, false, false, 11);
        // line 12
        echo "
<form ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getAttributeString", [], "any", false, false, false, 13);
        echo " onsubmit=\"gibbonFormSubmitted(this)\">

    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getTitle", [], "any", false, false, false, 15)) {
            // line 16
            echo "        <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getTitle", [], "any", false, false, false, 16), "html", null, true);
            echo "</h2>
    ";
        }
        // line 18
        echo "    
    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getDescription", [], "any", false, false, false, 19)) {
            // line 20
            echo "        <p>";
            echo twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getDescription", [], "any", false, false, false, 20);
            echo "</p>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getHiddenValues", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["values"]) {
            // line 24
            echo "        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["values"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["values"], "value", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    ";
        // line 27
        $context["renderStyle"] = ((!twig_in_filter("blank", twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClass", [], "any", false, false, false, 27))) ? ("blank") : ("table"));
        // line 28
        echo "
    <table class=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClass", [], "any", false, false, false, 29), "html", null, true);
        echo " font-sans text-xs text-gray-700 relative overflow-hidden ";
        echo ((!twig_in_filter("blank", twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClass", [], "any", false, false, false, 29))) ? ("bg-gray-100 rounded border mt-3") : (""));
        echo "\" cellspacing=\"0\">
        
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getRows", [], "any", false, false, false, 31));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 32
            echo "        ";
            $context["rowLoop"] = $context["loop"];
            // line 33
            echo "
        <tr id=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "getID", [], "any", false, false, false, 34), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["row"], "getClass", [], "any", false, false, false, 34), ["standardWidth" => ""]), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["rowClass"] ?? null), "html", null, true);
            echo " ";
            echo (((!twig_in_filter("noIntBorder", twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "getClass", [], "any", false, false, false, 34)) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 34))) ? ("border-b") : (""));
            echo " \">

        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "getElements", [], "any", false, false, false, 36));
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
                // line 37
                echo "            ";
                $context["colspan"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 37) && (twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 37) < ($context["totalColumns"] ?? null)))) ? (((($context["totalColumns"] ?? null) + 1) - twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 37))) : (0));
                // line 38
                echo "            
            ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["element"], "isInstanceOf", ["Gibbon\\Forms\\Layout\\Heading"], "method", false, false, false, 39)) {
                    // line 40
                    echo "                ";
                    $context["class"] = " bg-gray-300";
                    // line 41
                    echo "            ";
                } elseif (twig_get_attribute($this->env, $this->source, $context["element"], "isInstanceOf", ["Gibbon\\Forms\\Layout\\Label"], "method", false, false, false, 41)) {
                    // line 42
                    echo "                ";
                    $context["class"] = "-mb-1 sm:mb-0";
                    // line 43
                    echo "            ";
                }
                // line 44
                echo "
            <td class=\"";
                // line 45
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["element"], "getClass", [], "any", false, false, false, 45), ["standardWidth" => ""]), "html", null, true);
                echo "\" ";
                echo ((($context["colspan"] ?? null)) ? (twig_sprintf("colspan=\"%s\"", ($context["colspan"] ?? null))) : (""));
                echo ">
                ";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["element"], "getOutput", [], "any", false, false, false, 46);
                echo "

                ";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["element"], "instanceOf", ["Gibbon\\Forms\\ValidatableInterface"], "method", false, false, false, 48)) {
                    // line 49
                    echo "                <script type=\"text/javascript\">
                    ";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["element"], "getValidationOutput", [], "any", false, false, false, 50);
                    echo "
                </script>
                ";
                }
                // line 53
                echo "            </td>
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
            // line 55
            echo "
        </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </table>

    <script type=\"text/javascript\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["javascript"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 62
            echo "            ";
            echo $context["code"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </script>
</form>
";
    }

    public function getTemplateName()
    {
        return "components/formTable.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 64,  240 => 62,  236 => 61,  231 => 58,  215 => 55,  200 => 53,  194 => 50,  191 => 49,  189 => 48,  184 => 46,  176 => 45,  173 => 44,  170 => 43,  167 => 42,  164 => 41,  161 => 40,  159 => 39,  156 => 38,  153 => 37,  136 => 36,  125 => 34,  122 => 33,  119 => 32,  102 => 31,  95 => 29,  92 => 28,  90 => 27,  87 => 26,  76 => 24,  72 => 23,  69 => 22,  63 => 20,  61 => 19,  58 => 18,  52 => 16,  50 => 15,  45 => 13,  42 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/formTable.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\components\\formTable.twig.html");
    }
}
