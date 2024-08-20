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

/* index.twig.html */
class __TwigTemplate_71753d26f31dc9afa15cbceaeecfb84d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'beforePage' => [$this, 'block_beforePage'],
            'sidebar' => [$this, 'block_sidebar'],
            'page' => [$this, 'block_page'],
            'afterPage' => [$this, 'block_afterPage'],
            'footer' => [$this, 'block_footer'],
            'privacy' => [$this, 'block_privacy'],
            'foot' => [$this, 'block_foot'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\" dir=\"";
        echo ((($context["rightToLeft"] ?? null)) ? ("rtl") : ("ltr"));
        echo "\">
    <head>
        ";
        // line 16
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "    </head>
    <body class=\"h-full flex flex-col font-sans ";
        // line 20
        ((($context["bodyBackground"] ?? null)) ? (print ("")) : (print (twig_escape_filter($this->env, ("body-gradient-" . twig_lower_filter($this->env, ($context["themeColour"] ?? null))), "html", null, true))));
        echo "\" style=\"";
        ((($context["bodyBackground"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["bodyBackground"] ?? null), "html", null, true))) : (print ("")));
        echo " ";
        echo ((twig_test_empty(($context["themeColour"] ?? null))) ? ("background: radial-gradient(80% 1000px at 20% 500px, #ef99c7 0%, #794d95 100%) no-repeat fixed ;") : (""));
        echo "\">
        <a id=\"top\"></a>
        ";
        // line 22
        $context["sidebarPos"] = ((($context["isLoggedIn"] ?? null)) ? ("left") : ("right"));
        // line 23
        echo "
        <div class=\"px-4 sm:px-6 lg:px-12 pb-24\">

            ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 84
        echo "        </div>
        <div id=\"wrapOuter\" class=\"flex-1 pt-24 bg-transparent-100\">
            <div id=\"wrap\" class=\"px-0 sm:px-6 lg:px-12 -mt-48\">
                ";
        // line 87
        $this->displayBlock('beforePage', $context, $blocks);
        // line 89
        echo "
                <div id=\"content-wrap\" class=\"relative w-full min-h-1/2 flex content-start ";
        // line 90
        echo ((($context["sidebar"] ?? null)) ? ("flex-wrap lg:flex-no-wrap") : ("flex-col"));
        echo " ";
        echo (((($context["sidebarPos"] ?? null) == "left")) ? ("lg:flex-row") : ("lg:flex-row-reverse"));
        echo " clearfix\">

                    <div class=\"block lg:hidden w-full shadow bg-white rounded px-4 mx-4 sm:mx-0 mb-4\">
                        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "alerts", [], "any", false, false, false, 93));
        foreach ($context['_seq'] as $context["type"] => $context["alerts"]) {
            // line 94
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["alerts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 95
                echo "                                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo $context["text"];
                echo "</div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['alerts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                        </div>

                    ";
        // line 100
        if ((($context["sidebar"] ?? null) && (($context["sidebarContents"] ?? null) || ($context["menuModule"] ?? null)))) {
            // line 101
            echo "                        <div id=\"sidebar\" class=\"w-full lg:w-sidebar lg:max-w-xs ";
            echo ((((($context["sidebarPos"] ?? null) == "left") &&  !($context["rightToLeft"] ?? null))) ? ("lg:mr-6") : ("lg:ml-6"));
            echo "\">
                            ";
            // line 102
            $this->displayBlock('sidebar', $context, $blocks);
            // line 105
            echo "                        </div>

                        <br style=\"clear: both\">
                    ";
        } else {
            // line 109
            echo "                        ";
            echo twig_include($this->env, $context, "navigation.twig.html");
            echo "
                    ";
        }
        // line 111
        echo "
                    <div id=\"content\" class=\"";
        // line 112
        ((($context["contentClass"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["contentClass"] ?? null), "html", null, true))) : (print ("max-w-full")));
        echo " w-full shadow bg-white sm:rounded lg:flex-1 px-8 ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, false, 112)) ? ("py-6") : ("pb-6"));
        echo " \">

                        ";
        // line 114
        $this->displayBlock('page', $context, $blocks);
        // line 121
        echo "                    </div>

                </div>

                ";
        // line 125
        if (($context["isLoggedIn"] ?? null)) {
            // line 126
            echo "                    <div class=\"text-right mt-2 text-xs pr-1\">
                        <a class='text-";
            // line 127
            echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
            echo "-800' href='#top'>";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Return to top"), "html", null, true);
            echo "</a>
                    </div>
                ";
        }
        // line 130
        echo "
                ";
        // line 131
        $this->displayBlock('afterPage', $context, $blocks);
        // line 133
        echo "            </div>

            

            ";
        // line 137
        $this->displayBlock('footer', $context, $blocks);
        // line 144
        echo "
        </div>

        ";
        // line 147
        $this->displayBlock('privacy', $context, $blocks);
        // line 150
        echo "
        ";
        // line 151
        $this->displayBlock('foot', $context, $blocks);
        // line 154
        echo "    </body>
</html>
";
    }

    // line 16
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "        ";
        echo twig_include($this->env, $context, "head.twig.html");
        echo "
        ";
    }

    // line 26
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                <div id=\"header\" class=\"relative flex justify-between items-center\">

                    <a id=\"header-logo\" class=\"block my-4 max-w-xs sm:max-w-full leading-none\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "\">
                        <img class=\"block max-w-full ";
        // line 30
        echo ((($context["isLoggedIn"] ?? null)) ? ("h-12") : ("h-20 mt-4 mb-4"));
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["organisationName"] ?? null), "html", null, true);
        echo " Logo\" src=\"";
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_trim_filter(((array_key_exists("organisationLogo", $context)) ? (_twig_default_filter(($context["organisationLogo"] ?? null), "themes/Default/img/logo.png")) : ("themes/Default/img/logo.png")), "/", "left"), "html", null, true);
        echo "\" style=\"max-height:100px;\" />
                    </a>

                    <div class=\"flex-grow flex items-center justify-end text-right text-sm text-";
        // line 33
        echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
        echo "-200\">
                        ";
        // line 34
        if ((($context["isLoggedIn"] ?? null) && ($context["currentUser"] ?? null))) {
            // line 35
            echo "
                        <a href=\"";
            // line 36
            (((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "url", [], "any", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "url", [], "any", false, false, false, 36)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "url", [], "any", false, false, false, 36), "html", null, true))) : (print ("./index.php?q=/preferences.php")));
            echo "\" class=\"hidden sm:block text-";
            echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
            echo "-200 hover:text-white\">
                            ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "
                        </a>

                        <div class=\"group relative px-4 py-4 ";
            // line 40
            echo ((($context["rightToLeft"] ?? null)) ? ("-ml-3") : ("-mr-3"));
            echo "\">

                            <a href=\"";
            // line 42
            (((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "url", [], "any", true, true, false, 42) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "url", [], "any", false, false, false, 42)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "url", [], "any", false, false, false, 42), "html", null, true))) : (print ("#")));
            echo "\" class=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "image_240", [], "any", false, false, false, 42)) ? ("flex-none") : ("flex items-center justify-center"));
            echo " block overflow-hidden w-10 h-10 rounded-full bg-gray-200 border-2 border-";
            echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
            echo "-600 cursor-pointer\">
                            ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "image_240", [], "any", false, false, false, 43)) {
                // line 44
                echo "                                <img class=\"w-full -mt-1\" src=\"";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "image_240", [], "any", false, false, false, 44), "html", null, true);
                echo "\" />
                            ";
            } else {
                // line 46
                echo "                                <img class=\"w-full\" src=\"";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/themes/";
                echo twig_escape_filter($this->env, ($context["gibbonThemeName"] ?? null), "html", null, true);
                echo "/img/anonymous_75.jpg\" />
                            ";
            }
            // line 48
            echo "                            </a>

                            <ul class=\"list-none m-0 bg-gray-800 hidden group-hover:block absolute w-48 mt-1 p-1 z-50 cursor-pointer ";
            // line 50
            echo ((($context["rightToLeft"] ?? null)) ? ("left-0") : ("right-0"));
            echo "\">
                                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["minorLinks"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 52
                echo "                                <li class=\"hover:bg-";
                echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
                echo "-700\">
                                    <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 53), "html", null, true);
                echo "\" class=\"block text-sm text-white focus:text-";
                echo twig_escape_filter($this->env, ($context["themeColour"] ?? null), "html", null, true);
                echo "-200 no-underline px-1 py-2 md:py-1 leading-normal ";
                echo ((($context["rightToLeft"] ?? null)) ? ("text-right") : ("text-left"));
                echo "\" target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "target", [], "any", false, false, false, 53), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->source, $context["link"], "target", [], "any", false, false, false, 53) == "_blank")) ? ("rel=\"noopener noreferrer\"") : (""));
                echo ">";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 54);
                // line 55
                echo "</a>
                                </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                            </ul>

                        </div>
                        ";
        } else {
            // line 62
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["minorLinks"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 63
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "prepend", [], "any", false, false, false, 63), "html", null, true);
                echo "&nbsp;
                                <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 64), "html", null, true);
                echo "\" class=\"link-white ";
                echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "count", [], "any", false, false, false, 64) > 3)) ? ("hidden sm:block") : (""));
                echo "\" target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "target", [], "any", false, false, false, 64), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->source, $context["link"], "target", [], "any", false, false, false, 64) == "_blank")) ? ("rel=\"noopener noreferrer\"") : (""));
                echo ">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 65);
                // line 66
                echo "</a>
                                ";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "append", [], "any", false, false, false, 67), "html", null, true);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                        ";
        }
        // line 70
        echo "
                        ";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "houseName", [], "any", false, false, false, 71) && twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "houseLogo", [], "any", false, false, false, 71))) {
            // line 72
            echo "                            <img class=\"ml-3 -mt-2 w-12 h-12\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "houseName", [], "any", false, false, false, 72), "html", null, true);
            echo "\" style=\"vertical-align: -75%;\" src=\"";
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "houseLogo", [], "any", false, false, false, 72), "html", null, true);
            echo "\"/>
                        ";
        }
        // line 74
        echo "                    </div>
                </div>

                ";
        // line 77
        if (($context["isLoggedIn"] ?? null)) {
            // line 78
            echo "                <nav id=\"header-menu\" class=\"flex-1 justify-between\">
                    ";
            // line 79
            echo twig_include($this->env, $context, "menu.twig.html");
            echo "
                </nav>
                ";
        }
        // line 82
        echo "
            ";
    }

    // line 87
    public function block_beforePage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                ";
    }

    // line 102
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "                            ";
        echo twig_include($this->env, $context, "navigation.twig.html");
        echo "
                            ";
    }

    // line 114
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "
                            ";
        // line 116
        echo twig_include($this->env, $context, "page.twig.html");
        echo "

                            ";
        // line 118
        echo twig_join_filter(($context["content"] ?? null), "
");
        echo "
                            
                        ";
    }

    // line 131
    public function block_afterPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "                ";
    }

    // line 137
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "                <div class=\"relative text-sm text-gray-700 px-6 lg:px-12 mt-4 pt-2 pb-6 leading-normal border-t border-gray-300 ";
        echo ((($context["rightToLeft"] ?? null)) ? ("text-right") : ("text-left"));
        echo "\">
                    ";
        // line 139
        echo twig_include($this->env, $context, "footer.twig.html");
        echo "

                    <img class=\"absolute top-0 -mt-1 hidden sm:block w-32 ";
        // line 141
        echo ((($context["rightToLeft"] ?? null)) ? ("left-0 sm:ml-0 md:ml-16") : ("right-0 sm:mr-0 md:mr-16"));
        echo "\" alt=\"Logo Small\" src=\"";
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/themes/";
        echo twig_escape_filter($this->env, ((array_key_exists("gibbonThemeName", $context)) ? (_twig_default_filter(($context["gibbonThemeName"] ?? null), "Default")) : ("Default")), "html", null, true);
        echo "/img/gibbon-white.svg\"/>
                </div>
            ";
    }

    // line 147
    public function block_privacy($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "        ";
        echo twig_include($this->env, $context, "privacy.twig.html");
        echo "
        ";
    }

    // line 151
    public function block_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "        ";
        echo twig_include($this->env, $context, "foot.twig.html");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "index.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 152,  517 => 151,  510 => 148,  506 => 147,  495 => 141,  490 => 139,  485 => 138,  481 => 137,  477 => 132,  473 => 131,  465 => 118,  460 => 116,  457 => 115,  453 => 114,  446 => 103,  442 => 102,  438 => 88,  434 => 87,  429 => 82,  423 => 79,  420 => 78,  418 => 77,  413 => 74,  403 => 72,  401 => 71,  398 => 70,  395 => 69,  379 => 67,  376 => 66,  374 => 65,  365 => 64,  360 => 63,  342 => 62,  336 => 58,  328 => 55,  326 => 54,  315 => 53,  310 => 52,  306 => 51,  302 => 50,  298 => 48,  290 => 46,  282 => 44,  280 => 43,  272 => 42,  267 => 40,  261 => 37,  255 => 36,  252 => 35,  250 => 34,  246 => 33,  234 => 30,  230 => 29,  226 => 27,  222 => 26,  215 => 17,  211 => 16,  205 => 154,  203 => 151,  200 => 150,  198 => 147,  193 => 144,  191 => 137,  185 => 133,  183 => 131,  180 => 130,  172 => 127,  169 => 126,  167 => 125,  161 => 121,  159 => 114,  152 => 112,  149 => 111,  143 => 109,  137 => 105,  135 => 102,  130 => 101,  128 => 100,  124 => 98,  118 => 97,  107 => 95,  102 => 94,  98 => 93,  90 => 90,  87 => 89,  85 => 87,  80 => 84,  78 => 26,  73 => 23,  71 => 22,  62 => 20,  59 => 19,  57 => 16,  50 => 14,  46 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\index.twig.html");
    }
}
