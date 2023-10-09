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

/* modules/custom/premiership/templates/transfers-page.html.twig */
class __TwigTemplate_c15acca07d2013a1f77f02ecc093c435 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("PLAYER TRANSFERS");
        echo "

<ol>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transfers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["transfer"]) {
            // line 5
            echo "
    <p><img src= \"";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transfer"], "player", [], "any", false, false, true, 6), "image_path", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\"/></p>
    <p> FIRST NAME: ";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transfer"], "player", [], "any", false, false, true, 7), "firstname", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "</p>
    <p> LAST NAME: ";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transfer"], "player", [], "any", false, false, true, 8), "lastname", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</p>
    <p> DATE OF BIRTH: ";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transfer"], "player", [], "any", false, false, true, 9), "date_of_birth", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</p>
    <p> POSITION: ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transfer"], "position", [], "any", false, false, true, 10), "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</p>
    <p> AMOUNT: ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["transfer"], "amount", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</p>
    <p> DATE: ";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["transfer"], "date", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</p>
    <p> FROM TEAM: <img src= \"";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transfer"], "fromteam", [], "any", false, false, true, 13), "image_path", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\"/> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transfer"], "fromteam", [], "any", false, false, true, 13), "name", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</p>
    <p> TO TEAM: <img src= \"";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transfer"], "toteam", [], "any", false, false, true, 14), "image_path", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\"/> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transfer"], "toteam", [], "any", false, false, true, 14), "name", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</p>

   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transfer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/premiership/templates/transfers-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 17,  86 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  49 => 5,  45 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/premiership/templates/transfers-page.html.twig", "/app/proj/web/modules/custom/premiership/templates/transfers-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4);
        static $filters = array("escape" => 6);
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
