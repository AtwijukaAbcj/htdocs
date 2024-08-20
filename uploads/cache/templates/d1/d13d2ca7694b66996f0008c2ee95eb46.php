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

/* tray.twig.html */
class __TwigTemplate_b53904ab354d277af15127ad61abf0b2 extends Template
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
        // line 12
        echo "
";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["statusTray"] ?? null), "messageWall", [], "any", false, false, false, 13)) {
            // line 14
            echo "
    <a id=\"messageWall\" class=\"inline-block relative mr-5\" title=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Message Wall"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusTray"] ?? null), "messageWall", [], "any", false, false, false, 15), "url", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
        ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusTray"] ?? null), "messageWall", [], "any", false, false, false, 16), "messages", [], "any", false, false, false, 16)) {
                // line 17
                echo "            <span class='badge ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "messengerRead", [], "any", false, false, false, 17)) ? ("bg-{{ themeColour }}-400") : ("bg-red-500"));
                echo " -mr-2 right-0'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusTray"] ?? null), "messageWall", [], "any", false, false, false, 17), "messages", [], "any", false, false, false, 17), "html", null, true);
                echo "</span>
        ";
            }
            // line 19
            echo "
        <svg class=\"minorLinkIcon h-10 w-10 -my-1 fill-current text-white ";
            // line 20
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusTray"] ?? null), "messageWall", [], "any", false, false, false, 20), "messages", [], "any", false, false, false, 20)) ? ("opacity-75") : ("opacity-25"));
            echo "\" style=\"max-width: 2.5rem;\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 100\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\"><g><path d=\"M85,20H61.962l-13.218-9.441c-0.914-0.653-2.117-0.74-3.116-0.226C44.628,10.847,44,11.876,44,13v7h-8    c-1.656,0-3,1.343-3,3v9.27H15c-1.656,0-3,1.343-3,3v40.235c0,1.656,1.344,3,3,3h26.628L56.94,89.442    C57.459,89.812,58.069,90,58.685,90c0.469,0,0.939-0.11,1.372-0.332c1-0.515,1.628-1.544,1.628-2.668v-8.495H74    c1.657,0,3-1.344,3-3V61h8c1.657,0,3-1.343,3-3V23C88,21.343,86.657,20,85,20z M71,72.505H58.685c-1.657,0-3,1.343-3,3v5.666    l-11.351-8.107c-0.509-0.363-1.118-0.559-1.744-0.559H18V38.27h53V72.505z M82,55h-5V35.27c0-1.657-1.343-3-3-3H39V26h8    c1.657,0,3-1.343,3-3v-4.17l9.256,6.612C59.765,25.805,60.374,26,61,26h21V55z\"/><path d=\"M30,57.81c0.79,0,1.561-0.318,2.12-0.88C32.68,56.37,33,55.6,33,54.81s-0.32-1.56-0.88-2.12c-1.12-1.12-3.131-1.12-4.24,0    C27.319,53.25,27,54.02,27,54.81s0.319,1.561,0.88,2.12C28.44,57.491,29.21,57.81,30,57.81z\"/><path d=\"M44.94,57.81c0.79,0,1.569-0.318,2.12-0.88c0.56-0.56,0.88-1.33,0.88-2.12s-0.32-1.56-0.88-2.12    c-1.11-1.12-3.12-1.12-4.241,0c-0.549,0.561-0.879,1.33-0.879,2.12s0.319,1.561,0.879,2.12C43.38,57.491,44.16,57.81,44.94,57.81z    \"/><path d=\"M59.89,57.81c0.79,0,1.561-0.318,2.12-0.88c0.56-0.56,0.88-1.33,0.88-2.12s-0.32-1.56-0.88-2.12    c-1.12-1.12-3.13-1.109-4.239,0c-0.561,0.561-0.881,1.33-0.881,2.12s0.32,1.57,0.881,2.12C58.33,57.491,59.101,57.81,59.89,57.81z    \"/></g></svg>
    </a>
";
        }
        // line 23
        echo "
";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["statusTray"] ?? null), "notifications", [], "any", false, false, false, 24)) {
            // line 25
            echo "        <a id=\"notifications\" class=\"inline-block relative mr-5\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Notifications"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusTray"] ?? null), "notifications", [], "any", false, false, false, 25), "url", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
            <span class=\"notificationCounter badge bg-red-500 -mr-2 right-0 ";
            // line 26
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusTray"] ?? null), "notifications", [], "any", false, false, false, 26), "count", [], "any", false, false, false, 26) == 0)) ? ("hidden") : (""));
            echo "\">
                ";
            // line 27
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusTray"] ?? null), "notifications", [], "any", false, false, false, 27), "count", [], "any", false, false, false, 27) > 0)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusTray"] ?? null), "notifications", [], "any", false, false, false, 27), "count", [], "any", false, false, false, 27), "html", null, true))) : (print ("")));
            echo "
            </span>

            <svg class=\"notificationIcon h-8 w-8 fill-current text-white ";
            // line 30
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusTray"] ?? null), "notifications", [], "any", false, false, false, 30), "count", [], "any", false, false, false, 30)) ? ("opacity-75") : ("opacity-25"));
            echo "\" style=\"max-width: 2.5rem;\" xmlns:x=\"http://ns.adobe.com/Extensibility/1.0/\" xmlns:i=\"http://ns.adobe.com/AdobeIllustrator/10.0/\" xmlns:graph=\"http://ns.adobe.com/Graphs/1.0/\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 100 100\" style=\"enable-background:new 0 0 100 100;\" xml:space=\"preserve\"><g i:extraneous=\"self\"><path d=\"M87.5,67.2L83,61.8c-2.8-3.4-4.3-7.7-4.3-12.1V39.6c0-14.6-11-26.7-25.1-28.5v-5c0-2-1.6-3.6-3.6-3.6    c-2,0-3.6,1.6-3.6,3.6v5C32.3,12.9,21.3,25,21.3,39.6v10.1c0,4.4-1.5,8.7-4.3,12.1l-4.4,5.4c-2.3,2.8-2.8,6.7-1.2,10    c1.6,3.3,4.8,5.4,8.5,5.4h13.8c0.8,8.4,7.8,14.9,16.4,14.9s15.6-6.6,16.4-14.9h13.8c3.7,0,6.9-2.1,8.5-5.4    C90.2,73.9,89.8,70.1,87.5,67.2z M50,90.3c-4.6,0-8.4-3.4-9.1-7.8h18.2C58.4,86.9,54.6,90.3,50,90.3z M82.2,74.1    c-0.2,0.4-0.7,1.3-2,1.3H19.8c-1.3,0-1.8-0.9-2-1.3s-0.5-1.4,0.3-2.4l4.4-5.4c3.8-4.7,5.9-10.6,5.9-16.7V39.6    C28.5,27.7,38.1,18,50,18s21.5,9.7,21.5,21.5v10.1c0,6.1,2.1,12,5.9,16.7l4.4,5.4C82.7,72.7,82.4,73.7,82.2,74.1z\"/></g></svg>
        </a>

        <script type=\"text/javascript\">
            \$(document).ready(function() {
                setInterval(function() {
                    refreshNotifications();
                }, ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusTray"] ?? null), "notifications", [], "any", false, false, false, 37), "interval", [], "any", false, false, false, 37), "html", null, true);
            echo ");
            });
        </script>
    </div>
";
        }
        // line 42
        echo "
";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["statusTray"] ?? null), "alarm", [], "any", false, false, false, 43)) {
            // line 44
            echo "    <script>
        \$(document).ready(function() {
            refreshNotifications();
        });
    </script>
";
        }
        // line 50
        echo "
<div id=\"dialog-timeout\" title=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Session Timeout"), "html", null, true);
        echo "\" style=\"display: none\">
    <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Your session is about to expire: you will be logged out shortly."), "html", null, true);
        echo "</p>
</div>

<script>
    function refreshNotifications() {
        \$.ajax({
            url: \"index_notification_ajax.php\",
            dataType: \"json\",
            success: function(data) {
                // Update notification count
                if (data.count > 0) {
                    \$(\"#notifications .notificationCounter\").removeClass('hidden').html(data.count);
                    \$(\"#notifications .notificationIcon\").removeClass('opacity-25').addClass('opacity-75');
                } else {
                    \$(\"#notifications .notificationCounter\").html('').addClass('hidden');
                    \$(\"#notifications .notificationIcon\").removeClass('opacity-75').addClass('opacity-25');
                }

                // Handle alarm display / cancel
                if (data.alarm != false) {
                    if (\$('#TB_window').is(':visible') == true && \$('#TB_window').hasClass('alarm') == false) {
                        \$(\"#TB_window\").remove();
                        \$(\"body\").append(\"<div id='TB_window'></div>\");
                    }
                    if (\$('#TB_window').is(':visible') == false) {
                        var url = '";
        // line 77
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/index_notification_ajax_alarm.php?type='+ data.alarm +'&KeepThis=true&TB_iframe=true&width=1000&height=500';
                        tb_show('', url);
                        \$('#TB_window').addClass('alarm') ;
                    }
                } else {
                    if (\$('#TB_window').is(':visible')==true && \$('#TB_window').hasClass('alarm') ) {
                        tb_remove();
                    }
                }

                // Handle session timeout dialog
                \$(\"#dialog-timeout\").dialog({
                    resizable: false,
                    height: \"auto\",
                    width: 400,
                    modal: true,
                    autoOpen: false,
                    buttons: {
                        \"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Stay Connected"), "html", null, true);
        echo "\": function() {
                            const req = new XMLHttpRequest();
                            req.open(\"POST\", \"";
        // line 97
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/keepAlive.php\");
                            req.send();
                            \$(\"#dialog-timeout\").dialog(\"close\");
                        },
                        \"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Log Out Now"), "html", null, true);
        echo " \": function() {
                            window.location = \"";
        // line 102
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/logout.php?timeout=true\";
                        },
                    }
                });

                if (data.timeout == 'force') {
                    window.location = \"";
        // line 108
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/logout.php?timeout=force\";
                } else if (data.timeout == 'expire') {
                    window.location = \"";
        // line 110
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/logout.php?timeout=true\";
                } else if (data.timeout == 'warn') {
                    \$(\"#dialog-timeout\").dialog(\"open\");
                } else if (!data.timeout && \$(\"#dialog-timeout\").dialog(\"isOpen\")) {
                    \$(\"#dialog-timeout\").dialog(\"close\");
                }
            }
        });
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "tray.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 110,  204 => 108,  195 => 102,  191 => 101,  184 => 97,  179 => 95,  158 => 77,  130 => 52,  126 => 51,  123 => 50,  115 => 44,  113 => 43,  110 => 42,  102 => 37,  92 => 30,  86 => 27,  82 => 26,  75 => 25,  73 => 24,  70 => 23,  64 => 20,  61 => 19,  53 => 17,  51 => 16,  45 => 15,  42 => 14,  40 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "tray.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\tray.twig.html");
    }
}
