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

/* @gavias_meipaly/page/footer.html.twig */
class __TwigTemplate_9642edeee4638abe48e6df967041c8bd extends Template
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
        echo "
<footer id=\"footer\" class=\"footer\">
  <div class=\"footer-inner\">
    
    ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_footer", [], "any", false, false, true, 5)) {
            // line 6
            echo "     <div class=\"footer-top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <div class=\"before-footer clearfix area\">
                  ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_footer", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>     
        </div>   
      </div> 
     ";
        }
        // line 18
        echo "     
     <div class=\"footer-center\">
        <div class=\"container\">      
           <div class=\"row\">
              ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 22)) {
            // line 23
            echo "                <div class=\"footer-first col-xl-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null), 23, $this->source), "html", null, true);
            echo " col-lg-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null), 23, $this->source), "html", null, true);
            echo " col-md-12 col-sm-12 col-xs-12 footer-column\">
                  ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
                </div> 
              ";
        }
        // line 27
        echo "
              ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 28)) {
            // line 29
            echo "               <div class=\"footer-second col-xl-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null), 29, $this->source), "html", null, true);
            echo " col-lg-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_size"] ?? null), 29, $this->source), "html", null, true);
            echo " col-md-12 col-sm-12 col-xs-12 footer-column\">
                  ";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "
                </div> 
              ";
        }
        // line 33
        echo "
              ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 34)) {
            // line 35
            echo "                <div class=\"footer-third col-xl-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null), 35, $this->source), "html", null, true);
            echo " col-lg-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_size"] ?? null), 35, $this->source), "html", null, true);
            echo " col-md-12 col-sm-12 col-xs-12 footer-column\">
                  ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
                </div> 
              ";
        }
        // line 39
        echo "
              ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 40)) {
            // line 41
            echo "                 <div class=\"footer-four col-xl-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null), 41, $this->source), "html", null, true);
            echo " col-lg-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_four_size"] ?? null), 41, $this->source), "html", null, true);
            echo " col-md-12 col-sm-12 col-xs-12 footer-column\">
                  ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
                </div> 
              ";
        }
        // line 45
        echo "           </div>   
        </div>
    </div>  
  </div>   

  ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 50)) {
            // line 51
            echo "    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
            ";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "
        </div>   
      </div>   
    </div>
  ";
        }
        // line 59
        echo "
</footer>
";
    }

    public function getTemplateName()
    {
        return "@gavias_meipaly/page/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 59,  153 => 54,  148 => 51,  146 => 50,  139 => 45,  133 => 42,  126 => 41,  124 => 40,  121 => 39,  115 => 36,  108 => 35,  106 => 34,  103 => 33,  97 => 30,  90 => 29,  88 => 28,  85 => 27,  79 => 24,  72 => 23,  70 => 22,  64 => 18,  54 => 11,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gavias_meipaly/page/footer.html.twig", "/var/www/html/themes/gavias_meipaly/templates/page/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
