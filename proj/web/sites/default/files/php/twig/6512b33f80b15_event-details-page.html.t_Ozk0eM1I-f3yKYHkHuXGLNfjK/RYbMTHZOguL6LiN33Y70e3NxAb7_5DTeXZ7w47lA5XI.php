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

/* modules/custom/premiership/templates/event-details-page.html.twig */
class __TwigTemplate_5fa2c88ae5a62b642e15ab4e24dae944 extends Template
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
        echo "<ol>
   
        <p>";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event_details"] ?? null), "data", [], "any", false, false, true, 3), "name", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</p>
        <p>DATE: ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event_details"] ?? null), "data", [], "any", false, false, true, 4), "starting_at", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</p>
        <p>RESULT: ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event_details"] ?? null), "data", [], "any", false, false, true, 5), "result_info", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</p>


  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["odds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["odd"]) {
            // line 9
            echo "       <p>LABEL: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["odd"], "label", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</p>
       <p>MARKET DESCRIPTION: ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["odd"], "market_description", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</p>
       <p>PROBABILITY: ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["odd"], "probability", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['odd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
 <p> VENUE NAME:  ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event_details"] ?? null), "data", [], "any", false, false, true, 14), "venue", [], "any", false, false, true, 14), "name", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo " </p>
 <p>ADDRESS: ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event_details"] ?? null), "data", [], "any", false, false, true, 15), "venue", [], "any", false, false, true, 15), "address", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</p>


  
       <p>TEMPERATURE: ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["weatherreport"] ?? null), "temperature", [], "any", false, false, true, 19), "day", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</p>
       <p>WIND: ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["weatherreport"] ?? null), "wind", [], "any", false, false, true, 20), "speed", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</p>
      <p>HUMIDITY: ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["weatherreport"] ?? null), "humidity", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "</p>
<img src=\"";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["weatherreport"] ?? null), "icon", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["weatherreport"] ?? null), "description", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "\" />


 
</ol>

";
    }

    public function getTemplateName()
    {
        return "modules/custom/premiership/templates/event-details-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 22,  100 => 21,  96 => 20,  92 => 19,  85 => 15,  81 => 14,  78 => 13,  70 => 11,  66 => 10,  61 => 9,  57 => 8,  51 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/premiership/templates/event-details-page.html.twig", "/app/proj/web/modules/custom/premiership/templates/event-details-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 8);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
