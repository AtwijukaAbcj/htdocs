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

/* mail/email.twig.html */
class __TwigTemplate_9d167f9fb89b3cc571b42774dc57809a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'preview' => [$this, 'block_preview'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'bodyBottom' => [$this, 'block_bodyBottom'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $context["fontFamily"] = "'Helvetica Neue',Helvetica,Arial,sans-serif!important";
        // line 36
        $context["linkStyle"] = "color:#439fe0;font-weight:bold;text-decoration:none;";
        // line 37
        $context["buttonColor"] = "#439fe0";
        // line 38
        $context["buttonHover"] = "#4e6d8c";
        // line 39
        echo "<!doctype html>
<html>
  <head>
    <meta name=\"viewport\" content=\"width=device-width\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title>";
        // line 44
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    <style>

    /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
    ------------------------------------- */
    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }
      table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
        font-size: 16px !important;
      }
      table[class=body] .wrapper,
            table[class=body] .article {
        padding: 20px 10px !important;
      }
      table[class=body] .content {
        padding: 0 !important;
      }
      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }
      table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }
      table[class=body] .btn table {
        width: 100% !important;
      }
      table[class=body] .btn a {
        width: 100% !important;
      }
      table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
      table[class=foot] .content-block,
      table[class=foot] .content-block a {
        font-size: 12px !important;
      }
      img, img[style] {
          max-width: 100%;
      }
    }

    /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
    ------------------------------------- */

    @media all {
      .ExternalClass {
        width: 100%;
      }
      .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
        line-height: 100%;
      }
      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
      .btn-primary table td:hover {
        color: #ffffff !important;
        background-color: ";
        // line 125
        echo twig_escape_filter($this->env, ($context["buttonHover"] ?? null), "html", null, true);
        echo " !important;
      }
      .btn-primary a:hover {
        color: #ffffff !important;
        background-color: ";
        // line 129
        echo twig_escape_filter($this->env, ($context["buttonHover"] ?? null), "html", null, true);
        echo " !important;
        border-color: ";
        // line 130
        echo twig_escape_filter($this->env, ($context["buttonHover"] ?? null), "html", null, true);
        echo " !important;
      }
    }
    </style>
  </head>
  <body class=\"\" style=\"background-color: #f6f6f6; font-family: ";
        // line 135
        echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
        echo "; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\">
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"body\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;\">
      <tr>
        <td style=\"font-family: ";
        // line 138
        echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
        echo "; font-size: 14px; vertical-align: top;\">&nbsp;</td>
        <td class=\"container\" style=\"font-family: ";
        // line 139
        echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
        echo "; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: ";
        echo twig_escape_filter($this->env, ((array_key_exists("maxWidth", $context)) ? (_twig_default_filter(($context["maxWidth"] ?? null), "780px")) : ("780px")), "html", null, true);
        echo "; padding: 10px 0px; width: 90%;\">
          <div class=\"header\" style=\"box-sizing: border-box; display: block; Margin: 0 auto; max-width: ";
        // line 140
        echo twig_escape_filter($this->env, ((array_key_exists("maxWidth", $context)) ? (_twig_default_filter(($context["maxWidth"] ?? null), "780px")) : ("780px")), "html", null, true);
        echo "; padding:20px 16px 12px;text-align:center;\">
            <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "\" style=\"";
        echo twig_escape_filter($this->env, ($context["linkStyle"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_replace_filter(($context["organisationLogo"] ?? null), ["svg" => "png"]), "/themes/Default/img/logo.png"), "html", null, true);
        echo "\" style=\"outline:none;text-decoration:none;border:none\" height=\"50\">
            </a>
          </div>
          <div class=\"content\" style=\"box-sizing: border-box; display: block; Margin: 0 auto; max-width: ";
        // line 145
        echo twig_escape_filter($this->env, ((array_key_exists("maxWidth", $context)) ? (_twig_default_filter(($context["maxWidth"] ?? null), "780px")) : ("780px")), "html", null, true);
        echo "; padding: 0px 0px 40px;\">

            <!-- START CENTERED WHITE CONTAINER -->
            <span class=\"preheader\" style=\"color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;\">
                ";
        // line 149
        $this->displayBlock('preview', $context, $blocks);
        // line 150
        echo "            </span>
            <table class=\"main\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 6px;\">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class=\"wrapper\" style=\"font-family: ";
        // line 155
        echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
        echo "; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 32px;\">
                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\">
                    <tr>
                      <td style=\"font-family: ";
        // line 158
        echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
        echo "; font-size: 14px; vertical-align: top;\">
                        <div style=\"font-family: ";
        // line 159
        echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
        echo "; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;color: #373737;\">
                            ";
        // line 160
        $this->displayBlock('title', $context, $blocks);
        // line 163
        echo "                        </div>
                        <div style=\"font-family: ";
        // line 164
        echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
        echo "; font-size: 16px; line-height: 22px; font-weight: normal; margin: 0; Margin-bottom: 15px; color: #555549;\">
                            ";
        // line 165
        $this->displayBlock('body', $context, $blocks);
        // line 166
        echo "                        </div>

                        ";
        // line 168
        if (($context["button"] ?? null)) {
            // line 169
            echo "                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"btn btn-primary\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt;  box-sizing: border-box;\">
                          <tbody>
                            <tr>
                              <td align=\"left\" style=\"font-family: ";
            // line 172
            echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
            echo "; font-size: 14px; vertical-align: top; padding: 15px 0px 25px;\">
                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;\">
                                  <tbody>
                                    <tr>
                                      <td style=\"font-family: ";
            // line 176
            echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
            echo "; font-size: 18px; vertical-align: top; background-color: ";
            echo twig_escape_filter($this->env, ($context["buttonColor"] ?? null), "html", null, true);
            echo "; border-radius: 5px; text-align: center;\"> 
                                        <a href=\"";
            // line 177
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "external", [], "any", false, false, false, 177) || twig_in_filter("http", twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "url", [], "any", false, false, false, 177)))) ? (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "url", [], "any", false, false, false, 177)) : (((($context["absoluteURL"] ?? null) . "/") . twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "url", [], "any", false, false, false, 177)))), "html", null, true);
            echo "\" target=\"_blank\" style=\"display: inline-block; color: #ffffff; background-color: ";
            echo twig_escape_filter($this->env, ($context["buttonColor"] ?? null), "html", null, true);
            echo "; border: solid 1px ";
            echo twig_escape_filter($this->env, ($context["buttonColor"] ?? null), "html", null, true);
            echo "; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 18px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: ";
            echo twig_escape_filter($this->env, ($context["buttonColor"] ?? null), "html", null, true);
            echo ";\">
                                            ";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "text", [], "any", false, false, false, 178), "html", null, true);
            echo "
                                        </a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>

                              ";
            // line 185
            if (($context["button2"] ?? null)) {
                // line 186
                echo "                                <td align=\"left\" style=\"font-family: ";
                echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
                echo "; font-size: 14px; vertical-align: top; padding: 15px 15px 25px;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;\">
                                    <tbody>
                                        <tr>
                                        <td style=\"font-family: ";
                // line 190
                echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
                echo "; font-size: 18px; vertical-align: top; background-color: ";
                echo twig_escape_filter($this->env, ($context["buttonColor"] ?? null), "html", null, true);
                echo "; border-radius: 5px; text-align: center;\"> 
                                            <a href=\"";
                // line 191
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["button2"] ?? null), "external", [], "any", false, false, false, 191) || twig_in_filter("http", twig_get_attribute($this->env, $this->source, ($context["button2"] ?? null), "url", [], "any", false, false, false, 191)))) ? (twig_get_attribute($this->env, $this->source, ($context["button2"] ?? null), "url", [], "any", false, false, false, 191)) : (((($context["absoluteURL"] ?? null) . "/") . twig_get_attribute($this->env, $this->source, ($context["button2"] ?? null), "url", [], "any", false, false, false, 191)))), "html", null, true);
                echo "\" target=\"_blank\" style=\"display: inline-block; color: ";
                echo twig_escape_filter($this->env, ($context["buttonColor"] ?? null), "html", null, true);
                echo "; background-color: #ffffff; border: solid 1px ";
                echo twig_escape_filter($this->env, ($context["buttonColor"] ?? null), "html", null, true);
                echo "; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 18px; font-weight: normal; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: ";
                echo twig_escape_filter($this->env, ($context["buttonColor"] ?? null), "html", null, true);
                echo ";\">
                                                ";
                // line 192
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["button2"] ?? null), "text", [], "any", false, false, false, 192), "html", null, true);
                echo "
                                            </a> </td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </td>
                              ";
            }
            // line 199
            echo "                            </tr>
                          </tbody>
                        </table>
                        ";
        }
        // line 203
        echo "
                        <p style=\"font-family: ";
        // line 204
        echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
        echo "; font-size: 16px; line-height: 22px; font-weight: normal; margin: 0; color: #555549;\">
                            ";
        // line 205
        $this->displayBlock('bodyBottom', $context, $blocks);
        // line 206
        echo "                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class=\"footer\" style=\"clear: both; Margin-top: 10px; text-align: center; width: 100%;\">
              <table class=\"foot\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\">
                <tr>
                  <td class=\"content-block\" style=\"font-family: ";
        // line 220
        echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
        echo "; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;\">
                    ";
        // line 221
        $this->displayBlock('footer', $context, $blocks);
        // line 224
        echo "                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td style=\"font-family: ";
        // line 233
        echo twig_escape_filter($this->env, ($context["fontFamily"] ?? null), "html", null, true);
        echo "; font-size: 14px; vertical-align: top;\">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
";
    }

    // line 149
    public function block_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["preview"] ?? null), "html", null, true);
    }

    // line 160
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        echo "                                <h2 style=\"margin-top: 0px;\">";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>
                            ";
    }

    // line 165
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ($context["body"] ?? null);
    }

    // line 205
    public function block_bodyBottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["bodyBottom"] ?? null), "html", null, true);
    }

    // line 221
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 222
        echo "                        ";
        echo twig_escape_filter($this->env, twig_sprintf($this->env->getFunction('__')->getCallable()("Email sent via %1\$s at %2\$s."), ($context["systemName"] ?? null), ($context["organisationName"] ?? null)), "html", null, true);
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "mail/email.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 222,  405 => 221,  398 => 205,  391 => 165,  384 => 161,  380 => 160,  373 => 149,  363 => 233,  352 => 224,  350 => 221,  346 => 220,  330 => 206,  328 => 205,  324 => 204,  321 => 203,  315 => 199,  305 => 192,  295 => 191,  289 => 190,  281 => 186,  279 => 185,  269 => 178,  259 => 177,  253 => 176,  246 => 172,  241 => 169,  239 => 168,  235 => 166,  233 => 165,  229 => 164,  226 => 163,  224 => 160,  220 => 159,  216 => 158,  210 => 155,  203 => 150,  201 => 149,  194 => 145,  186 => 142,  180 => 141,  176 => 140,  170 => 139,  166 => 138,  160 => 135,  152 => 130,  148 => 129,  141 => 125,  57 => 44,  50 => 39,  48 => 38,  46 => 37,  44 => 36,  42 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "mail/email.twig.html", "C:\\xampp\\htdocs\\resources\\templates\\mail\\email.twig.html");
    }
}
