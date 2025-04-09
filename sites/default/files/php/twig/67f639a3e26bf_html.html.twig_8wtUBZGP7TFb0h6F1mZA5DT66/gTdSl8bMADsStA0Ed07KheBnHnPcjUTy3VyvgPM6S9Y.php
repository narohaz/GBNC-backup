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

/* themes/gavias_meipaly/templates/page/html.html.twig */
class __TwigTemplate_444e25882b09fb50576d1fb0e817e92d extends Template
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
        // line 26
        echo "<!DOCTYPE html>
<html";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 27, $this->source), "html", null, true);
        echo ">
  <head> 
    <head-placeholder token=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 29, $this->source));
        echo "\">
    <title>";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 30, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 31, $this->source));
        echo "\">

    <js-placeholder token=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 33, $this->source));
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 35, $this->source), "html", null, true);
        echo "/css/custom.css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 36, $this->source), "html", null, true);
        echo "/css/update.css\" media=\"screen\" />

    ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["links_google_fonts"] ?? null), 38, $this->source));
        echo "

    ";
        // line 40
        if (($context["customize_css"] ?? null)) {
            // line 41
            echo "      <style type=\"text/css\">
        ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_css"] ?? null), 42, $this->source));
            echo "
      </style>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if (($context["customize_styles"] ?? null)) {
            // line 47
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_styles"] ?? null), 47, $this->source));
            echo "
    ";
        }
        // line 49
        echo "
  </head>

  ";
        // line 52
        $context["body_classes"] = [0 => ((        // line 53
($context["logged_in"] ?? null)) ? ("logged-in") : ("")), 1 => (( !        // line 54
($context["root_path"] ?? null)) ? ("frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 54, $this->source))))), 2 => ((        // line 55
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 55, $this->source)))) : ("")), 3 => ((        // line 56
($context["node_id"] ?? null)) ? (("node-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_id"] ?? null), 56, $this->source)))) : (""))];
        // line 59
        echo "
  <body";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "html", null, true);
        echo ">

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>

    ";
        // line 66
        if (($context["preloader"] ?? null)) {
            echo " 
      <div id=\"gva-preloader\" >
        <div id=\"preloader-inner\" class=\"cssload-container\">
          <div class=\"wait-text\">";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Please wait..."));
            echo " </div> 
          <div class=\"cssload-item cssload-moon\"></div>
        </div>
      </div>
    ";
        }
        // line 73
        echo "  

    ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 75, $this->source), "html", null, true);
        echo "
    ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 76, $this->source), "html", null, true);
        echo "
    ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 77, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 78, $this->source));
        echo "\">
    
    ";
        // line 80
        if (($context["addon_template"] ?? null)) {
            // line 81
            echo "      <div class=\"permission-save-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["save_customize_permission"] ?? null), 81, $this->source), "html", null, true);
            echo "\">
         ";
            // line 82
            $this->loadTemplate(($context["addon_template"] ?? null), "themes/gavias_meipaly/templates/page/html.html.twig", 82)->display($context);
            // line 83
            echo "      </div>  
    ";
        }
        // line 85
        echo "    <div id=\"gva-overlay\"></div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_meipaly/templates/page/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 85,  171 => 83,  169 => 82,  164 => 81,  162 => 80,  157 => 78,  153 => 77,  149 => 76,  145 => 75,  141 => 73,  133 => 69,  127 => 66,  121 => 63,  115 => 60,  112 => 59,  110 => 56,  109 => 55,  108 => 54,  107 => 53,  106 => 52,  101 => 49,  95 => 47,  93 => 46,  90 => 45,  84 => 42,  81 => 41,  79 => 40,  74 => 38,  69 => 36,  65 => 35,  60 => 33,  55 => 31,  51 => 30,  47 => 29,  42 => 27,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_meipaly/templates/page/html.html.twig", "/var/www/html/themes/gavias_meipaly/templates/page/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 40, "set" => 52, "include" => 82);
        static $filters = array("escape" => 27, "raw" => 29, "safe_join" => 30, "clean_class" => 54, "t" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 'raw', 'safe_join', 'clean_class', 't'],
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
