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

/* __string_template__4b7a27c9d1b979dd1fcb89c1f7f7395d */
class __TwigTemplate_e93a2242879140488107d26ad005b70e extends Template
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
        // line 2
        echo "<div class=\"gbnc-team-grid\">
\t<div class=\"gbnc-team-card\">
\t\t<div class=\"gbnc-card-content\">
\t\t\t<div class=\"gbnc-card-info\">
\t\t\t\t<div class=\"gbnc-blue-box\"></div>
\t\t\t\t<h2 class=\"gbnc-person-name\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 7, $this->source), "html", null, true);
        echo "</h2>
\t\t\t\t<div class=\"gbnc-divider-short\"></div>
\t\t\t\t<div class=\"gbnc-divider-long\"></div>
\t\t\t\t<div class=\"gbnc-person-profile\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_member_profile"] ?? null), 10, $this->source), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"gbnc-card-image\">
\t\t\t\t<img src=";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null), 13, $this->source), "html", null, true);
        echo ">
\t\t\t\t<div class=\"gbnc-image-overlay\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__4b7a27c9d1b979dd1fcb89c1f7f7395d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  52 => 10,  46 => 7,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4b7a27c9d1b979dd1fcb89c1f7f7395d", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
