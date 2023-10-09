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

/* modules/custom/premiership/templates/team-details-page.html.twig */
class __TwigTemplate_89c8161228fe37730772b444eaedc381 extends Template
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
        // line 5
        echo "

";
        // line 8
        echo "<ol>
         <p>ID: ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["team_details"] ?? null), "id", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</p>
        <p>Sport ID: ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["team_details"] ?? null), "sport_id", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</p>
        <p>Country ID: ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["team_details"] ?? null), "country_id", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</p>
        <p>Venue ID: ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["team_details"] ?? null), "venue_id", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</p>
        <p>Gender: ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["team_details"] ?? null), "gender", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</p>
        <p>Name: ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["team_details"] ?? null), "name", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</p>
        <p>Short Code: ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["team_details"] ?? null), "short_code", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</p>
        <p>Logo: <img src=\"";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["team_details"] ?? null), "image_path", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["team_details"] ?? null), "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "\" /></p>
        <p>Founded: ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["team_details"] ?? null), "founded", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</p>
        <p>Type: ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["team_details"] ?? null), "type", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</p>
        <p>Last Played At: ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["team_details"] ?? null), "last_played_at", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</p>
 </ol>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/premiership/templates/team-details-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  84 => 18,  80 => 17,  74 => 16,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  43 => 8,  39 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/premiership/templates/team-details-page.html.twig", "/app/proj/web/modules/custom/premiership/templates/team-details-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 9);
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
