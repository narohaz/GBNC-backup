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

/* themes/gavias_meipaly/templates/page/header-2.html.twig */
class __TwigTemplate_18944a74acb93397d12602bd112af9f2 extends Template
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
        echo "<header id=\"header\" class=\"header-v2\">

  ";
        // line 3
        $context["class_sticky"] = "";
        // line 4
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 5
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 6
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null), 8, $this->source), "html", null, true);
        echo "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12 content-inner\">
                <div class=\"branding\">
                  ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 14)) {
            // line 15
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "
                  ";
        }
        // line 16
        echo "  
                </div>
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                          <div class=\"gva-offcanvas-mobile\">
                            <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                            <div class=\"main-menu-inner\">
                              ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 25)) {
            // line 26
            echo "                                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "
                              ";
        }
        // line 28
        echo "                            </div>

                            ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "quick_menu", [], "any", false, false, true, 30)) {
            // line 31
            echo "                              <div class=\"quick-menu\">
                                <div class=\"icon\"><a><span class=\"fas fa-grip-horizontal\"></span></a></div>
                                <div class=\"content-inner\">
                                  ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "quick_menu", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
                                </div>  
                              </div>
                            ";
        }
        // line 38
        echo "
                            ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 39)) {
            // line 40
            echo "                              <div class=\"after-offcanvas hidden\">
                                ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
                              </div>
                           ";
        }
        // line 44
        echo "                          </div> 
                          <div id=\"menu-bar\" class=\"menu-bar d-lg-none d-xl-none\">
                            <span class=\"one\"></span>
                            <span class=\"two\"></span>
                            <span class=\"three\"></span>
                          </div>
                        
                          ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "quick_side", [], "any", false, false, true, 51)) {
            // line 52
            echo "                            <div class=\"quick-side-icon d-none d-lg-block d-xl-block\">
                              <div class=\"icon\"><a href=\"#\"><span class=\"qicon gv-icon-103\"></span></a></div>
                            </div>
                          ";
        }
        // line 56
        echo "
                          ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 57)) {
            // line 58
            echo "                            <div class=\"gva-search-region search-region\">
                              <span class=\"icon\"><i class=\"gv-icon-52\"></i></span>
                              <div class=\"search-content\">  
                                ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "
                              </div>  
                            </div>
                          ";
        }
        // line 65
        echo "
                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_meipaly/templates/page/header-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 65,  152 => 61,  147 => 58,  145 => 57,  142 => 56,  136 => 52,  134 => 51,  125 => 44,  119 => 41,  116 => 40,  114 => 39,  111 => 38,  104 => 34,  99 => 31,  97 => 30,  93 => 28,  87 => 26,  85 => 25,  74 => 16,  68 => 15,  66 => 14,  57 => 8,  51 => 6,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_meipaly/templates/page/header-2.html.twig", "/var/www/html/themes/gavias_meipaly/templates/page/header-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 4);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
