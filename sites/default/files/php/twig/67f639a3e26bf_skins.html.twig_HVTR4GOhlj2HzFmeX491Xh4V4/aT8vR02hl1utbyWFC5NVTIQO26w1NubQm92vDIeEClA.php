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

/* themes/gavias_meipaly/templates/addon/skins.html.twig */
class __TwigTemplate_bbd7bda62265d7e068b461f904a26ad5 extends Template
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
        // line 1
        echo "<div class=\"gavias-skins-panel hidden-xs hidden-sm\">
\t<div class=\"control-panel\"><i class=\"fas fa-eye-dropper\"></i></div>
\t<div class=\"gavias-skins-panel-inner\">
\t   ";
        // line 4
        $this->loadTemplate("/themes/gavias_meipaly/customize/customize_form.html.twig", "themes/gavias_meipaly/templates/addon/skins.html.twig", 4)->display($context);
        // line 5
        echo "\t</div>   
</div>

<div class=\"gavias-skins-panel gavias-skin-demo hidden-xs hidden-sm\">
\t<div class=\"control-panel\"><i class=\"fa fa-cogs\"></i></div>
\t<div class=\"panel-skins-content\">
\t\t<div class=\"title\">Color skins</div>
\t\t<div class=\"text-center\">
\t\t\t<a class=\"item-color default\" href=\"//";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 13, $this->source), "html", null, true);
        echo "gvas\"></a>
\t\t\t<a class=\"item-color blue\" href=\"//";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 14, $this->source), "html", null, true);
        echo "gvas=blue\"></a>
\t\t\t<a class=\"item-color brown\" href=\"//";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 15, $this->source), "html", null, true);
        echo "gvas=brown\"></a>
\t\t\t<a class=\"item-color green\" href=\"//";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 16, $this->source), "html", null, true);
        echo "gvas=green\"></a>
\t\t\t<a class=\"item-color lilac\" href=\"//";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 17, $this->source), "html", null, true);
        echo "gvas=lilac\"></a>
\t\t\t<a class=\"item-color lime_green\" href=\"//";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 18, $this->source), "html", null, true);
        echo "gvas=lime_green\"></a>
\t\t\t<a class=\"item-color orange\" href=\"//";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 19, $this->source), "html", null, true);
        echo "gvas=orange\"></a>
\t\t\t<a class=\"item-color pink\" href=\"//";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 20, $this->source), "html", null, true);
        echo "gvas=pink\"></a>
\t\t\t<a class=\"item-color purple\" href=\"//";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 21, $this->source), "html", null, true);
        echo "gvas=purple\"></a>
\t\t\t<a class=\"item-color red\" href=\"//";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 22, $this->source), "html", null, true);
        echo "gvas=red\"></a>
\t\t\t<a class=\"item-color turquoise\" href=\"//";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 23, $this->source), "html", null, true);
        echo "gvas=turquoise\"></a>
\t\t\t<a class=\"item-color turquoise2\" href=\"//";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 24, $this->source), "html", null, true);
        echo "gvas=turquoise2\"></a>
\t\t\t<a class=\"item-color violet_red\" href=\"//";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 25, $this->source), "html", null, true);
        echo "gvas=violet_red\"></a>
\t\t\t<a class=\"item-color violet_red2\" href=\"//";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 26, $this->source), "html", null, true);
        echo "gvas=violet_red2\"></a>
\t\t\t<a class=\"item-color yellow\" href=\"//";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_url"] ?? null), 27, $this->source), "html", null, true);
        echo "gvas=yellow\"></a>
\t\t</div>
\t</div>

\t<div class=\"clearfix\"></div>

\t<div class=\"panel-skins-content\">
\t\t<div class=\"title\">Body layout</div>
\t\t<div class=\"text-center\">
\t\t\t<a class=\"layout\" data-layout=\"boxed\">Boxed</a>
\t\t\t<a class=\"layout\" data-layout=\"wide\">Wide</a>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_meipaly/templates/addon/skins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 27,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_meipaly/templates/addon/skins.html.twig", "/var/www/html/themes/gavias_meipaly/templates/addon/skins.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 4);
        static $filters = array("escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
