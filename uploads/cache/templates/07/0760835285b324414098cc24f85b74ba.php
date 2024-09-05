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

/* ui/alarmOverlay.twig.html */
class __TwigTemplate_49aaa628b208339ffd9ded33aab0f760 extends Template
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
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/lib/jquery/jquery.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/lib/jquery/jquery-migrate.min.js\"></script>

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/resources/assets/css/theme.min.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/resources/assets/css/core.min.css\" />

<style>
html, body {
    height: 100%;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
}
</style>

<div class=\"w-full text-white m-0\" style=\"min-height: 492px; background-color: #f00;\">
    <div class=\"pt-3 font-bold font-sans text-center\">

        <div class=\"h-8 pr-4 mb-24 w-full text-right text-base\">
        ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["alarm"] ?? null), "gibbonPersonID", [], "any", false, false, false, 29) == ($context["gibbonPersonID"] ?? null))) {
            // line 30
            echo "            <a class=\"text-white\" target='_parent' href='";
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/modules/System Admin/alarm_cancelProcess.php?gibbonAlarmID=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["alarm"] ?? null), "gibbonAlarmID", [], "any", false, false, false, 30), "html", null, true);
            echo "'>
            ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Turn Alarm Off"), "html", null, true);
            echo "
            </a>
            ";
        }
        // line 34
        echo "        </div>

        ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["alarm"] ?? null), "type", [], "any", false, false, false, 36) == "General")) {
            // line 37
            echo "            <div style=\"font-size: 12vw\">
                ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("General Alarm!"), "html", null, true);
            echo "
            </div>
            <audio loop autoplay volume=3 onloadeddata=\"var audioPlayer = this; setTimeout(function() { audioPlayer.pause(); }, 10000)\">
                <source src=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/resources/assets/audio/alarm_general.mp3\" type=\"audio/mpeg\">
            </audio>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 43
($context["alarm"] ?? null), "type", [], "any", false, false, false, 43) == "Lockdown")) {
            // line 44
            echo "            <div style=\"font-size: 15vw\">
                ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Lockdown!"), "html", null, true);
            echo "
            </div>
            <audio loop autoplay volume=3 onloadeddata=\"var audioPlayer = this; setTimeout(function() { audioPlayer.pause(); }, 10000)\">
                <source src=\"";
            // line 48
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/resources/assets/audio/alarm_lockdown.mp3\" type=\"audio/mpeg\">
            </audio>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 50
($context["alarm"] ?? null), "type", [], "any", false, false, false, 50) == "Custom")) {
            // line 51
            echo "            <div style=\"font-size: 15vw\">
                ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Alarm!"), "html", null, true);
            echo "
            </div>
            <audio loop autoplay volume=3 onloadeddata=\"var audioPlayer = this; setTimeout(function() { audioPlayer.pause(); }, 10000)\">
                <source src=\"";
            // line 55
            echo twig_escape_filter($this->env, ($context["customAlarmSound"] ?? null), "html", null, true);
            echo "\" type=\"audio/mpeg\">
            </audio>
        ";
        }
        // line 58
        echo "
        <div class=\"text-center px-4\">
            ";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["alarm"] ?? null), "gibbonPersonID", [], "any", false, false, false, 60) != ($context["gibbonPersonID"] ?? null))) {
            // line 61
            echo "            <p>
                ";
            // line 62
            if (($context["confirmed"] ?? null)) {
                // line 63
                echo "                    <i>";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("You have successfully confirmed receipt of this alarm, which will continue to be displayed until an administrator has cancelled the alarm."), "html", null, true);
                echo "</i>
                ";
            } else {
                // line 65
                echo "                    <a target=\"_parent\" class=\"block text-white text-4xl sm:text-5xl font-bold p-6\" href=\"";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/index_notification_ajax_alarmProcess.php?gibbonAlarmID=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["alarm"] ?? null), "gibbonAlarmID", [], "any", false, false, false, 65), "html", null, true);
                echo "\">
                        ";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Click here to confirm that you have received this alarm."), "html", null, true);
                echo "
                    </a>
                    <i>";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("After confirming receipt, the alarm will continue to be displayed until an administrator has cancelled the alarm."), "html", null, true);
                echo "</i>
                ";
            }
            // line 70
            echo "            </p>
            ";
        }
        // line 72
        echo "
            ";
        // line 73
        if (($context["canViewReport"] ?? null)) {
            // line 74
            echo "                <h3 class=\"text-base sm:text-lg mt-12 mb-4\">
                    ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Receipt Confirmation Report"), "html", null, true);
            echo "
                </h3>

                ";
            // line 78
            if (twig_test_empty(($context["confirmationReport"] ?? null))) {
                // line 79
                echo "                    ";
                echo $this->env->getFunction('formatUsing')->getCallable()("alert", $this->env->getFunction('__')->getCallable()("There are no records to display."));
                echo "
                ";
            } else {
                // line 81
                echo "
                <script type=\"text/javascript\">
                \$(document).ready(function(){
                    setInterval(function() {
                        \$.ajax({
                            url: \"";
                // line 86
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/index_notification_ajax_alarm_tickUpdate.php\",
                            data: {
                                gibbonAlarmID: \"";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["alarm"] ?? null), "gibbonAlarmID", [], "any", false, false, false, 88), "html", null, true);
                echo "\",
                            },
                            type: \"POST\",
                            dataType: \"json\",
                            success: function(data) {
                                for (var index in data) {
                                    if (data[index].gibbonAlarmConfirmID != null) {
                                        \$(\"#staff\"+data[index].gibbonPersonID+\" .alarm-confirm\").removeClass(\"hidden\");
                                        \$(\"#staff\"+data[index].gibbonPersonID+\" .alarm-action\").remove();
                                    }
                                }
                            }
                        });
                    }, 7500);
                });
                </script>

                <div id=\"confirmWrapper\">
                    <table cellspacing='0' class='w-full sm:max-w-lg mx-auto'>
                    <tr class='head'>
                        <th class='text-white text-left text-xs sm:text-base pl-2'>
                        ";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Name"), "html", null, true);
                echo "<br/>
                        </th>
                        <th class='text-white text-center sm:text-left text-xs sm:text-base'>
                        ";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Confirmed"), "html", null, true);
                echo "
                        </th>
                        <th class='text-white text-center sm:text-left text-xs sm:text-base'>
                        ";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Actions"), "html", null, true);
                echo "
                        </th>
                    </tr>

                    ";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["confirmationReport"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                    // line 120
                    echo "                        <tr id=\"staff";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "gibbonPersonID", [], "any", false, false, false, 120), "html", null, true);
                    echo "\" class=\"hover:bg-red-700\">
                            <td class=\"text-white text-xs sm:text-base pl-2\">
                                ";
                    // line 122
                    echo $this->env->getFunction('formatUsing')->getCallable()("name", "", twig_get_attribute($this->env, $this->source, $context["person"], "preferredName", [], "any", false, false, false, 122), twig_get_attribute($this->env, $this->source, $context["person"], "surname", [], "any", false, false, false, 122), "Staff", true, true);
                    echo "
                            </td>
                            <td class=\"text-white text-center sm:text-left h-8\">
                                ";
                    // line 125
                    if ((twig_get_attribute($this->env, $this->source, $context["person"], "gibbonPersonID", [], "any", false, false, false, 125) == twig_get_attribute($this->env, $this->source, ($context["alarm"] ?? null), "gibbonPersonID", [], "any", false, false, false, 125))) {
                        // line 126
                        echo "                                    <i class=\"text-xs sm:text-base\">";
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Sounded Alarm"), "html", null, true);
                        echo "</i>
                                ";
                    } else {
                        // line 128
                        echo "                                    <img src=\"";
                        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                        echo "/themes/";
                        echo twig_escape_filter($this->env, ($context["gibbonThemeName"] ?? null), "html", null, true);
                        echo "/img/iconTick.png\" class=\"alarm-confirm ";
                        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["person"], "gibbonAlarmConfirmID", [], "any", false, false, false, 128))) ? ("hidden") : (""));
                        echo "\"/> 
                                ";
                    }
                    // line 130
                    echo "                            </td>
                            <td class=\"text-white text-center sm:text-left h-8\">
                                ";
                    // line 132
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["person"], "gibbonPersonID", [], "any", false, false, false, 132), ($context["staffAbsences"] ?? null))) {
                        // line 133
                        echo "                                    <span class=\"text-xs italic\">";
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Absent"), "html", null, true);
                        echo "</span>
                                ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 134
$context["person"], "gibbonPersonID", [], "any", false, false, false, 134) != twig_get_attribute($this->env, $this->source, ($context["alarm"] ?? null), "gibbonPersonID", [], "any", false, false, false, 134)) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["person"], "gibbonAlarmConfirmID", [], "any", false, false, false, 134)))) {
                        // line 135
                        echo "                                    <a target=\"_parent\" class=\"alarm-action\" href=\"";
                        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                        echo "/index_notification_ajax_alarmConfirmProcess.php?gibbonPersonID=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "gibbonPersonID", [], "any", false, false, false, 135), "html", null, true);
                        echo "&gibbonAlarmID=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["alarm"] ?? null), "gibbonAlarmID", [], "any", false, false, false, 135), "html", null, true);
                        echo "\">
                                        <img title=\"";
                        // line 136
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Confirm"), "html", null, true);
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                        echo "/themes/";
                        echo twig_escape_filter($this->env, ($context["gibbonThemeName"] ?? null), "html", null, true);
                        echo "/img/iconTick_light.png\"/>
                                    </a>
                                ";
                    }
                    // line 139
                    echo "                            </td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "                    </table>
                </div>
                ";
            }
            // line 145
            echo "            ";
        }
        // line 146
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ui/alarmOverlay.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 146,  332 => 145,  327 => 142,  319 => 139,  309 => 136,  300 => 135,  298 => 134,  293 => 133,  291 => 132,  287 => 130,  277 => 128,  271 => 126,  269 => 125,  263 => 122,  257 => 120,  253 => 119,  246 => 115,  240 => 112,  234 => 109,  210 => 88,  205 => 86,  198 => 81,  192 => 79,  190 => 78,  184 => 75,  181 => 74,  179 => 73,  176 => 72,  172 => 70,  167 => 68,  162 => 66,  155 => 65,  149 => 63,  147 => 62,  144 => 61,  142 => 60,  138 => 58,  132 => 55,  126 => 52,  123 => 51,  121 => 50,  116 => 48,  110 => 45,  107 => 44,  105 => 43,  100 => 41,  94 => 38,  91 => 37,  89 => 36,  85 => 34,  79 => 31,  72 => 30,  70 => 29,  53 => 15,  49 => 14,  44 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "ui/alarmOverlay.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\ui\\alarmOverlay.twig.html");
    }
}
