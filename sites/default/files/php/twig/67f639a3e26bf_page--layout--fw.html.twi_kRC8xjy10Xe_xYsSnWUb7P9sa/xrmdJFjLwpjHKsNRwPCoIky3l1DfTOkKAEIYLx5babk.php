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

/* themes/gavias_meipaly/templates/page/page-layout/page--layout--fw.html.twig */
class __TwigTemplate_178ab18e8ad12eb60734b9f285aa75b2 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $context["has_breadcrumb"] = "";
        // line 8
        echo "<div class=\"gva-body-wrapper\">
\t<div class=\"body-page gva-body-page\">
\t   ";
        // line 10
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_meipaly/templates/page/page-layout/page--layout--fw.html.twig", 10)->display($context);
        // line 11
        echo "\t\t
\t\t";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 12)) {
            // line 13
            echo "\t\t\t";
            $context["has_breadcrumb"] = " has-breadcrumb";
            // line 14
            echo "\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 18
        echo "
\t\t<div role=\"main\" class=\"main main-page";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["has_breadcrumb"] ?? null), 19, $this->source), "html", null, true);
        echo "\">
\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 22)) {
            // line 23
            echo "\t\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t\t";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 26
        echo "\t

\t\t\t";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 28)) {
            // line 29
            echo "\t\t\t\t<div class=\"help gav-help-region\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 37
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 39)) {
            // line 40
            echo "\t\t\t\t<div class=\"before_content area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 50
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t
\t\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t\t<div class=\"container-full container-bg\">
\t\t\t\t\t";
        // line 55
        $this->loadTemplate("@gavias_meipaly/page/main-no-sidebar.html.twig", "themes/gavias_meipaly/templates/page/page-layout/page--layout--fw.html.twig", 55)->display($context);
        // line 56
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 59)) {
            // line 60
            echo "\t\t\t\t<div class=\"highlighted area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 66
        echo "
\t\t\t";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_content", [], "any", false, false, true, 67)) {
            // line 68
            echo "\t\t\t\t<div class=\"area after-content\">
\t\t\t\t\t<div class=\"container\">
\t\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t\t ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_content", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
\t\t          \t</div>
\t        \t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 76
        echo "\t\t\t
\t\t</div>
\t</div>

\t";
        // line 80
        $this->loadTemplate("@gavias_meipaly/page/footer.html.twig", "themes/gavias_meipaly/templates/page/page-layout/page--layout--fw.html.twig", 80)->display($context);
        // line 81
        echo "</div>

";
        // line 83
        $this->loadTemplate("@gavias_meipaly/page/parts/quick-side.html.twig", "themes/gavias_meipaly/templates/page/page-layout/page--layout--fw.html.twig", 83)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/gavias_meipaly/templates/page/page-layout/page--layout--fw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 83,  177 => 81,  175 => 80,  169 => 76,  161 => 71,  156 => 68,  154 => 67,  151 => 66,  144 => 62,  140 => 60,  138 => 59,  133 => 56,  131 => 55,  124 => 50,  115 => 44,  109 => 40,  107 => 39,  103 => 37,  95 => 32,  90 => 29,  88 => 28,  84 => 26,  78 => 24,  75 => 23,  73 => 22,  67 => 19,  64 => 18,  58 => 15,  55 => 14,  52 => 13,  50 => 12,  47 => 11,  45 => 10,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_meipaly/templates/page/page-layout/page--layout--fw.html.twig", "/var/www/html/themes/gavias_meipaly/templates/page/page-layout/page--layout--fw.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "include" => 10, "if" => 12);
        static $filters = array("escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
