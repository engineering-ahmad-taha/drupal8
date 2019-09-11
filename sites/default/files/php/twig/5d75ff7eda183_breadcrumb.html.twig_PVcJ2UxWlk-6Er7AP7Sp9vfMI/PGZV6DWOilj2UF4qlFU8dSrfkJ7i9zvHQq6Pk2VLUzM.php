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

/* themes/nexus/templates/breadcrumb.html.twig */
class __TwigTemplate_8c2e52da402c80535b724877740a60f7a37a5a0307f7ecf6e8a787fe3a23e831 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 12, "for" => 16];
        $filters = ["t" => 15, "escape" => 19];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t', 'escape'],
                []
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
        // line 12
        if (($context["breadcrumb"] ?? null)) {
            // line 13
            echo "  <div id=\"breadcrumbs\">
    <nav class =\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
      <h2 class=\"visually-hidden\">";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Breadcrumb"));
            echo "</h2>
      ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "        <li>
          ";
                // line 18
                if ($this->getAttribute($context["item"], "url", [])) {
                    // line 19
                    echo "            <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                    echo "</a>
          ";
                } else {
                    // line 21
                    echo "            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                    echo "
          ";
                }
                // line 23
                echo "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </nav>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/nexus/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  88 => 23,  82 => 21,  74 => 19,  72 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 13,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/nexus/templates/breadcrumb.html.twig", "C:\\xampp\\htdocs\\drupal-8.7.7\\themes\\nexus\\templates\\breadcrumb.html.twig");
    }
}
