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

/* components/editor.twig.html */
class __TwigTemplate_8ad3d3d2f5f8feb95d406fad2705d014 extends Template
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
        $context["resourceAlphaSort"] = ((($context["resourceAlphaSort"] ?? null)) ? ("true") : ("false"));
        // line 14
        echo "
<a name=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "editor\"></a>

<div class=\"editor-toolbar flex flex-wrap sm:flex-no-wrap justify-between text-xs\">

    ";
        // line 19
        if (($context["showMedia"] ?? null)) {
            // line 20
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "mediaOuter\" class=\"h-6\">
        <div id=\"";
            // line 21
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "mediaInner\" class=\"flex items-center py-1\">
            <script type=\"text/javascript\">
            \$(document).ready(function(){
                \$(\".";
            // line 24
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceSlider, .";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceAddSlider, .";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceQuickSlider\").hide();
                \$(\".";
            // line 25
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "show_hide\").unbind('click').click(function(){
                    \$(\".";
            // line 26
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceSlider\").slideToggle();
                    \$(\".";
            // line 27
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceAddSlider, .";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceQuickSlider\").hide();
                    if (tinyMCE.get('";
            // line 28
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').selection.getRng().startOffset < 1) {
                        tinyMCE.get('";
            // line 29
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').focus();
                    }
                });
                \$(\".";
            // line 32
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "show_hideAdd\").unbind('click').click(function(){
                    \$(\".";
            // line 33
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceAddSlider\").slideToggle();
                    \$(\".";
            // line 34
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceSlider, .";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceQuickSlider\").hide();
                    if (tinyMCE.get('";
            // line 35
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').selection.getRng().startOffset < 1) {
                        tinyMCE.get('";
            // line 36
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').focus();
                    }
                });
                \$(\".";
            // line 39
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "show_hideQuickAdd\").unbind('click').click(function(){
                \$(\".";
            // line 40
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceQuickSlider\").slideToggle();
                \$(\".";
            // line 41
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceSlider, .";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceAddSlider\").hide();
                if (tinyMCE.get('";
            // line 42
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').selection.getRng().startOffset < 1) {
                    tinyMCE.get('";
            // line 43
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').focus();
                }
                });
            });
            </script>

            <div class=\"mr-2 flex items-center\">
                <span>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Shared Resources"), "html", null, true);
            echo ":</span> 
        
                <a title=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Insert Existing Resource"), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "show_hide mx-1\" onclick='\$(\".";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceSlider\").load(\"";
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/modules/Planner/resources_insert_ajax.php?alpha=";
            echo twig_escape_filter($this->env, ($context["resourceAlphaSort"] ?? null), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, ($context["initialFilter"] ?? null), "html", null, true);
            echo "\",\"id=";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "&allowUpload=";
            echo twig_escape_filter($this->env, ($context["allowUpload"] ?? null), "html", null, true);
            echo "\");'>
                    <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/themes/Default/img/search_mini.png\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Insert Existing Resource"), "html", null, true);
            echo "\" onclick=\"return false;\" />
                </a>
            
                ";
            // line 56
            if (($context["allowUpload"] ?? null)) {
                // line 57
                echo "                <a title=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Create & Insert New Resource"), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "show_hideAdd mx-1\" onclick='\$(\".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "resourceAddSlider\").load(\"";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/modules/Planner/resources_add_ajax.php?alpha=";
                echo twig_escape_filter($this->env, ($context["resourceAlphaSort"] ?? null), "html", null, true);
                echo "&";
                echo twig_escape_filter($this->env, ($context["initialFilter"] ?? null), "html", null, true);
                echo "\",\"id=";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "&allowUpload=";
                echo twig_escape_filter($this->env, ($context["allowUpload"] ?? null), "html", null, true);
                echo "\");'>
                    <img src=\"";
                // line 58
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/themes/Default/img/upload_mini.png\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Create & Insert New Resource"), "html", null, true);
                echo "\" onclick=\"return false;\" />
                </a>
                ";
            }
            // line 61
            echo "            </div>
            
            ";
            // line 63
            if (($context["allowUpload"] ?? null)) {
                // line 64
                echo "            <div class=\"mr-2 flex items-center\">
                <span>";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Quick File Upload"), "html", null, true);
                echo ":</span> 

                <a title=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Quick Add"), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "show_hideQuickAdd mx-1\" onclick='\$(\".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "resourceQuickSlider\").load(\"";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/modules/Planner/resources_addQuick_ajax.php?alpha=";
                echo twig_escape_filter($this->env, ($context["resourceAlphaSort"] ?? null), "html", null, true);
                echo "&";
                echo twig_escape_filter($this->env, ($context["initialFilter"] ?? null), "html", null, true);
                echo "\",\"id=";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "&allowUpload=";
                echo twig_escape_filter($this->env, ($context["allowUpload"] ?? null), "html", null, true);
                echo "\");'>
                    <img src=\"";
                // line 68
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/themes/Default/img/page_new_mini.png\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Quick Add"), "html", null, true);
                echo "\" onclick=\"return false;\" />
                </a>
            </div>
            ";
            }
            // line 72
            echo "        </div>
    </div>
    ";
        }
        // line 75
        echo "
    <div class=\"editor-tabs flex flex-grow justify-end items-end\">
        <a id=\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "edButtonPreview\" class=\"active hide-if-no-js block cursor-pointer bg-gray-100 text-gray-500 border border-b-0 rounded-t px-4 pt-2 pb-1 mx-1 font-bold z-10\">
            ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Visual"), "html", null, true);
        echo "
        </a>
        <a id=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "edButtonHTML\" class=\"hide-if-no-js block cursor-pointer bg-gray-100 text-gray-500 border border-b-0 rounded-t px-4 pt-2 pb-1 mx-1 font-bold z-10\">
            HTML
        </a>
    </div>
</div>


";
        // line 87
        if (($context["showMedia"] ?? null)) {
            // line 88
            echo "    ";
            // line 89
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceSlider hidden w-full\">
        <div class=\"w-full text-center h-20 p-6\">
            <img src=\"";
            // line 91
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/themes/Default/img/loading.gif\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Loading"), "html", null, true);
            echo "\" onclick=\"return false;\" /><br/>
            ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Loading"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 96
        echo "
";
        // line 97
        if ((($context["showMedia"] ?? null) && ($context["allowUpload"] ?? null))) {
            // line 98
            echo "    ";
            // line 99
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceQuickSlider hidden w-full\">
        <div class=\"w-full text-center h-20 p-6\">
            <img src=\"";
            // line 101
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/themes/Default/img/loading.gif\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Loading"), "html", null, true);
            echo "\" onclick=\"return false;\" /><br/>
            ";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Loading"), "html", null, true);
            echo "
        </div>
    </div>

    ";
            // line 107
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "resourceAddSlider hidden w-full\">
        <div class=\"w-full text-center h-20 p-6\">
            <img src=\"";
            // line 109
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/themes/Default/img/loading.gif\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Loading"), "html", null, true);
            echo "\" onclick=\"return false;\" /><br/>
            ";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Loading"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 114
        echo "

<div id=\"editorcontainer\" class=\"relative\">
    <textarea class=\"tinymce w-full ml-0 float-none focus:shadow-none focus:border-gray-500\" name=\"";
        // line 117
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" rows=\"";
        echo twig_escape_filter($this->env, ($context["rows"] ?? null), "html", null, true);
        echo "\" style=\"height: ";
        echo twig_escape_filter($this->env, (($context["rows"] ?? null) * 18), "html", null, true);
        echo "px;\">";
        // line 118
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        // line 119
        echo "</textarea>

    ";
        // line 121
        if (($context["required"] ?? null)) {
            // line 122
            echo "        <script type=\"text/javascript\">
        var ";
            // line 123
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " = new LiveValidation('";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "');
        ";
            // line 124
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".add(Validate.Presence, { tinymce: true, tinymceField: '";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "'});
        ";
            // line 125
            if (($context["initiallyHidden"] ?? null)) {
                // line 126
                echo "            ";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo ".disable();
        ";
            }
            // line 128
            echo "        </script>
    ";
        }
        // line 130
        echo "</div>

<script type=\"text/javascript\">
\$(document).ready(function(){
    ";
        // line 134
        if (($context["tinymceInit"] ?? null)) {
            // line 135
            echo "        tinyMCE.execCommand('mceAddControl', false, '";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "');
    ";
        }
        // line 137
        echo "
    ";
        // line 138
        if (($context["onKeyDownSubmitUrl"] ?? null)) {
            // line 139
            echo "    setTimeout(function() {
        tinyMCE.get('";
            // line 140
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').on('keydown', function (){
            tinyMCE.triggerSave();
            gibbonFormSubmitQuiet(\$('#";
            // line 142
            echo twig_escape_filter($this->env, ($context["onKeyDownSubmitFormId"] ?? null), "html", null, true);
            echo "'), '";
            echo twig_escape_filter($this->env, ($context["onKeyDownSubmitUrl"] ?? null), "html", null, true);
            echo "')
        })
    }, 100);
    ";
        }
        // line 146
        echo "
    \$('#";
        // line 147
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "edButtonPreview').addClass('active') ;
    \$('#";
        // line 148
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "edButtonHTML').click(function(){
        tinyMCE.execCommand('mceRemoveEditor', false, '";
        // line 149
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "');
        \$('#";
        // line 150
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "edButtonHTML').addClass('active') ;
        \$('#";
        // line 151
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "edButtonPreview').removeClass('active') ;
        \$(\".";
        // line 152
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "resourceSlider\").hide();
        \$(\"#";
        // line 153
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "mediaInner\").hide();
        ";
        // line 154
        if (($context["required"] ?? null)) {
            // line 155
            echo "            ";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".destroy();
            \$('.LV_validation_message').css('display','none');
            ";
            // line 157
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "=new LiveValidation('";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "');
            ";
            // line 158
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".add(Validate.Presence);
        ";
        }
        // line 160
        echo "    }) ;
    \$('#";
        // line 161
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "edButtonPreview').click(function(){
        tinyMCE.execCommand('mceAddEditor', false, '";
        // line 162
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "');
        \$('#";
        // line 163
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "edButtonPreview').addClass('active');
        \$('#";
        // line 164
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "edButtonHTML').removeClass('active'); 
        \$(\"#";
        // line 165
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "mediaInner\").show();
        ";
        // line 166
        if (($context["required"] ?? null)) {
            // line 167
            echo "            ";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".destroy();
            \$('.LV_validation_message').css('display','none');
            ";
            // line 169
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "=new LiveValidation('";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "');
            ";
            // line 170
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".add(Validate.Presence, { tinymce: true, tinymceField: '";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "'});
        ";
        }
        // line 172
        echo "    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/editor.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 172,  518 => 170,  512 => 169,  506 => 167,  504 => 166,  500 => 165,  496 => 164,  492 => 163,  488 => 162,  484 => 161,  481 => 160,  476 => 158,  470 => 157,  464 => 155,  462 => 154,  458 => 153,  454 => 152,  450 => 151,  446 => 150,  442 => 149,  438 => 148,  434 => 147,  431 => 146,  422 => 142,  417 => 140,  414 => 139,  412 => 138,  409 => 137,  403 => 135,  401 => 134,  395 => 130,  391 => 128,  385 => 126,  383 => 125,  377 => 124,  371 => 123,  368 => 122,  366 => 121,  362 => 119,  360 => 118,  351 => 117,  346 => 114,  339 => 110,  333 => 109,  327 => 107,  320 => 102,  314 => 101,  308 => 99,  306 => 98,  304 => 97,  301 => 96,  294 => 92,  288 => 91,  282 => 89,  280 => 88,  278 => 87,  268 => 80,  263 => 78,  259 => 77,  255 => 75,  250 => 72,  241 => 68,  223 => 67,  218 => 65,  215 => 64,  213 => 63,  209 => 61,  201 => 58,  182 => 57,  180 => 56,  172 => 53,  154 => 52,  149 => 50,  139 => 43,  135 => 42,  129 => 41,  125 => 40,  121 => 39,  115 => 36,  111 => 35,  105 => 34,  101 => 33,  97 => 32,  91 => 29,  87 => 28,  81 => 27,  77 => 26,  73 => 25,  65 => 24,  59 => 21,  54 => 20,  52 => 19,  45 => 15,  42 => 14,  40 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/editor.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\components\\editor.twig.html");
    }
}
