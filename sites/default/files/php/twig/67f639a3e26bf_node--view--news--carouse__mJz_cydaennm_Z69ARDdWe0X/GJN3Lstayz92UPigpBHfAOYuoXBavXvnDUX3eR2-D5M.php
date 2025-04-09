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

/* themes/gavias_meipaly/templates/node/customnode/node--view--news--carousel-news.html.twig */
class __TwigTemplate_6fcb2774b8898d5dac5ffe49f4e8a2b5 extends Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_news_video", [], "any", false, false, true, 1), "entity", [], "any", false, false, true, 1), "field_media_video_file", [], "any", false, false, true, 1), "entity", [], "any", false, false, true, 1), "fileUri", [], "any", false, false, true, 1)) {
            // line 2
            echo "\t<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 2, $this->source), "html", null, true);
            echo "\">
\t\t<div class=\"blog-post-item\">
\t\t\t<div class=\"mypost-thumbnail\">
\t\t\t\t<div class=\"new-view-video\">
\t\t\t\t\t<video class=\"new-video\" src=\"";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_news_video", [], "any", false, false, true, 6), "entity", [], "any", false, false, true, 6), "field_media_video_file", [], "any", false, false, true, 6), "entity", [], "any", false, false, true, 6), "fileUri", [], "any", false, false, true, 6), 6, $this->source)), "html", null, true);
            echo "\" loop autoplay muted playsinline></video>
\t\t\t\t</div>
\t\t\t\t<a href=\"";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 8, $this->source), "html", null, true);
            echo "\" class=\"blog-date\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_created_at", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</a>
\t\t\t</div>
\t\t\t<div class=\"entry-content\">
\t\t\t\t";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_news_content", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t</a>
";
        } else {
            // line 16
            echo "\t<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 16, $this->source), "html", null, true);
            echo "\">
\t\t<div class=\"blog-post-item\">
\t\t\t<div class=\"mypost-thumbnail\">
\t\t\t\t<div class=\"new-view-img\">
\t\t\t\t\t<img src=\"";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 20), "entity", [], "any", false, false, true, 20), "uri", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20), 20, $this->source)), "html", null, true);
            echo "\" alt=\"Blog-preview\">
\t\t\t\t</div>
\t\t\t\t<a href=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 22, $this->source), "html", null, true);
            echo "\" class=\"blog-date\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_created_at", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</a>
\t\t\t</div>
\t\t\t<div class=\"entry-content\">
\t\t\t\t";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_news_content", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t</a>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_meipaly/templates/node/customnode/node--view--news--carousel-news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  83 => 22,  78 => 20,  70 => 16,  62 => 11,  54 => 8,  49 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_meipaly/templates/node/customnode/node--view--news--carousel-news.html.twig", "/var/www/html/themes/gavias_meipaly/templates/node/customnode/node--view--news--carousel-news.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 2);
        static $functions = array("file_url" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['file_url']
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
