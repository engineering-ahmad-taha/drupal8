<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/nexus/templates/layout/page.html.twig */
class __TwigTemplate_f0eabaf0b0dd8e050894db229422048d30bab34825e1b31a030e224052b953b1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 54, "set" => 158];
        $filters = ["escape" => 56, "striptags" => 80, "t" => 84];
        $functions = ["attach_library" => 72];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'striptags', 't'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 51
        echo "<div id=\"page\">
  <header id=\"masthead\" class=\"site-header container\" role=\"banner\">
    <div class=\"row\">
      ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 55
            echo "        <div id=\"logo\" class=\"site-branding col-sm-6\">
          ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 59
        echo "      <div class=\"col-sm-6 mainmenu\">
        <div class=\"mobilenavi\"></div>
        <nav id=\"navigation\" role=\"navigation\">
          <div id=\"main-menu\">
            ";
        // line 63
        if ($this->getAttribute(($context["page"] ?? null), "main_navigation", [])) {
            // line 64
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_navigation", [])), "html", null, true);
            echo "
            ";
        }
        // line 66
        echo "          </div>
        </nav>
      </div>
    </div>
  </header>
  ";
        // line 71
        if (($context["is_front"] ?? null)) {
            // line 72
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("nexus/slider-js"), "html", null, true);
            echo "
    ";
            // line 73
            if (($context["slideshow_display"] ?? null)) {
                // line 74
                echo "      <div id=\"slidebox\" class=\"flexslider\">
        <ul class=\"slides\">
          <li>
            <img src=\"";
                // line 77
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide1_image"] ?? null)), "html", null, true);
                echo "\"/>
            ";
                // line 78
                if ((($context["slide1_head"] ?? null) || ($context["slide1_desc"] ?? null))) {
                    // line 79
                    echo "              ";
                    if (($context["slide1_head"] ?? null)) {
                        // line 80
                        echo "                ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide1_head"] ?? null))), "html", null, true);
                        echo "
              ";
                    }
                    // line 82
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 83
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide1_head"] ?? null))), "html", null, true);
                    echo "</h2>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide1_desc"] ?? null))), "html", null, true);
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 84
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide1_url"] ?? null))), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More"));
                    echo "</a>
              </div>
            ";
                }
                // line 87
                echo "          </li>
          <li>
            <img src=\"";
                // line 89
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide2_image"] ?? null)), "html", null, true);
                echo "\"/>
            ";
                // line 90
                if ((($context["slide2_head"] ?? null) || ($context["slide2_desc"] ?? null))) {
                    // line 91
                    echo "              ";
                    if (($context["slide2_head"] ?? null)) {
                        // line 92
                        echo "                ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide2_head"] ?? null))), "html", null, true);
                        echo "
              ";
                    }
                    // line 94
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 95
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide2_head"] ?? null))), "html", null, true);
                    echo "</h2>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide2_desc"] ?? null))), "html", null, true);
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 96
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide2_url"] ?? null))), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More"));
                    echo "</a>
              </div>
            ";
                }
                // line 99
                echo "          </li>
          <li>
            <img src=\"";
                // line 101
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide3_image"] ?? null)), "html", null, true);
                echo "\"/>
            ";
                // line 102
                if ((($context["slide3_head"] ?? null) || ($context["slide3_desc"] ?? null))) {
                    // line 103
                    echo "              ";
                    if (($context["slide3_head"] ?? null)) {
                        // line 104
                        echo "                ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide3_head"] ?? null))), "html", null, true);
                        echo "
              ";
                    }
                    // line 106
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 107
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide3_head"] ?? null))), "html", null, true);
                    echo "</h2>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide3_desc"] ?? null))), "html", null, true);
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 108
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide3_url"] ?? null))), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More"));
                    echo "</a>
              </div>
            ";
                }
                // line 111
                echo "          </li>
        </ul><!-- /slides -->
        <div class=\"doverlay\"></div>
      </div>
    ";
            }
            // line 116
            echo "  ";
        }
        // line 117
        echo "
  ";
        // line 118
        if ((($this->getAttribute(($context["page"] ?? null), "preface_first", []) || $this->getAttribute(($context["page"] ?? null), "preface_second", [])) || $this->getAttribute(($context["page"] ?? null), "preface_third", []))) {
            // line 119
            echo "    <div id=\"preface-area\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 122
            if ($this->getAttribute(($context["page"] ?? null), "preface_first", [])) {
                // line 123
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("preface-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["preface_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 124
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 127
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "preface_second", [])) {
                // line 128
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("preface-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["preface_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 129
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 132
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "preface_third", [])) {
                // line 133
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("preface-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["preface_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 134
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 137
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 141
        echo "
  ";
        // line 142
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 143
            echo "    <div id=\"highlighted-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            ";
            // line 147
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 153
        echo "
  <div id=\"main-content\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 157
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 158
            echo "          ";
            $context["primary_col"] = 8;
            // line 159
            echo "        ";
        } else {
            // line 160
            echo "          ";
            $context["primary_col"] = 12;
            // line 161
            echo "        ";
        }
        // line 162
        echo "        <div id=\"primary\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("content-area col-sm-" . $this->sandbox->ensureToStringAllowed(($context["primary_col"] ?? null))), "html", null, true);
        echo "\">
          <section id=\"content\" role=\"main\" class=\"clearfix\">
            ";
        // line 164
        if (($context["show_breadcrumbs"] ?? null)) {
            // line 165
            echo "              ";
            if (($context["breadcrumb"] ?? null)) {
                // line 166
                echo "                <div id=\"breadcrumbs\">
                  ";
                // line 167
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 170
            echo "            ";
        }
        // line 171
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
        echo "
            ";
        // line 172
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 173
            echo "              <div id=\"content_top\">
                ";
            // line 174
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
              </div>
            ";
        }
        // line 177
        echo "            <div id=\"content-wrap\">
              ";
        // line 178
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
              ";
        // line 179
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
            </div>
          </section>
        </div>
        ";
        // line 183
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 184
            echo "          <aside id=\"sidebar\" class=\"col-sm-4\" role=\"complementary\">
           ";
            // line 185
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 188
        echo "      </div>
    </div>
  </div>

  ";
        // line 192
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 193
            echo "    <div id=\"footer-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            ";
            // line 197
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 203
        echo "
  ";
        // line 204
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 205
            echo "    <div id=\"bottom\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 208
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 209
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 210
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 213
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 214
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 215
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 218
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 219
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 220
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 223
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 224
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 225
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 228
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 232
        echo "
  <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"fcred col-sm-12\">
          ";
        // line 237
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Copyright"));
        echo " &copy; ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["this_year"] ?? null)), "html", null, true);
        echo ", <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo "</a>. ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Theme by"));
        echo " <a href=\"http://www.devsaran.com\" target=\"_blank\">Devsaran</a>.
        </div>
      </div>
    </div>
  </footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/nexus/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 237,  475 => 232,  469 => 228,  463 => 225,  458 => 224,  455 => 223,  449 => 220,  444 => 219,  441 => 218,  435 => 215,  430 => 214,  427 => 213,  421 => 210,  416 => 209,  414 => 208,  409 => 205,  407 => 204,  404 => 203,  395 => 197,  389 => 193,  387 => 192,  381 => 188,  375 => 185,  372 => 184,  370 => 183,  363 => 179,  359 => 178,  356 => 177,  350 => 174,  347 => 173,  345 => 172,  340 => 171,  337 => 170,  331 => 167,  328 => 166,  325 => 165,  323 => 164,  317 => 162,  314 => 161,  311 => 160,  308 => 159,  305 => 158,  303 => 157,  297 => 153,  288 => 147,  282 => 143,  280 => 142,  277 => 141,  271 => 137,  265 => 134,  260 => 133,  257 => 132,  251 => 129,  246 => 128,  243 => 127,  237 => 124,  232 => 123,  230 => 122,  225 => 119,  223 => 118,  220 => 117,  217 => 116,  210 => 111,  202 => 108,  196 => 107,  193 => 106,  187 => 104,  184 => 103,  182 => 102,  178 => 101,  174 => 99,  166 => 96,  160 => 95,  157 => 94,  151 => 92,  148 => 91,  146 => 90,  142 => 89,  138 => 87,  130 => 84,  124 => 83,  121 => 82,  115 => 80,  112 => 79,  110 => 78,  106 => 77,  101 => 74,  99 => 73,  94 => 72,  92 => 71,  85 => 66,  79 => 64,  77 => 63,  71 => 59,  65 => 56,  62 => 55,  60 => 54,  55 => 51,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/nexus/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupal-8.7.7\\themes\\nexus\\templates\\layout\\page.html.twig");
    }
}
