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

/* casques.twig */
class __TwigTemplate_7e342bff42c03dd7377a3b6403014aa1b57f344d78a7d8a2eb59144f099b0b8b extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"casques\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["casques"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["casque"]) {
            // line 3
            echo "    <article>
      <img src=\"../images/casques/";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "libelle", [], "any", false, false, false, 4), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "image", [], "any", false, false, false, 4), "html", null, true);
            echo "\" 
           alt=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "modele", [], "any", false, false, false, 5), "html", null, true);
            echo "\">
      ";
            // line 6
            if ((twig_get_attribute($this->env, $this->source, $context["casque"], "stock", [], "any", false, false, false, 6) ==  -1)) {
                // line 7
                echo "        ";
                // line 8
                echo "        <p class=\"stockko\">
          <abbr data-tip=\"Sur commande uniquement\">stock</abbr>
        </p>
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 11
$context["casque"], "stock", [], "any", false, false, false, 11) >= 10)) {
                // line 12
                echo "        ";
                // line 13
                echo "        <p class=\"stockok\">
          <abbr data-tip=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "stock", [], "any", false, false, false, 14), "html", null, true);
                echo " casques en stock\">stock</abbr>
        </p>
      ";
            } else {
                // line 17
                echo "        ";
                // line 18
                echo "        <p class=\"stockok\">
          <abbr data-tip=\"Plus que ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "stock", [], "any", false, false, false, 19), "html", null, true);
                echo " casques en stock...\">stock</abbr>
        </p>
      ";
            }
            // line 22
            echo "      <p class=\"prix\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "prix", [], "any", false, false, false, 22), "html", null, true);
            echo "€</p>
      <p class=\"marque\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
      <p class=\"modele\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "modele", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
      ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["casque"], "classement", [], "any", false, false, false, 25) == 5)) {
                // line 26
                echo "        ";
                // line 27
                echo "        <img class=\"classement classement0";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "classement", [], "any", false, false, false, 27), "html", null, true);
                echo "\" 
             src=\"../images/casques/etoiles.gif\"
             alt=\"Classement ";
                // line 29
                echo twig_escape_filter($this->env, twig_replace_filter((twig_get_attribute($this->env, $this->source, $context["casque"], "classement", [], "any", false, false, false, 29) / 10), ["." => ","]), "html", null, true);
                echo " sur 5\">
      ";
            } else {
                // line 31
                echo "        <img class=\"classement classement";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "classement", [], "any", false, false, false, 31), "html", null, true);
                echo "\" 
             src=\"../images/casques/etoiles.gif\"
             alt=\"Classement ";
                // line 33
                echo twig_escape_filter($this->env, twig_replace_filter((twig_get_attribute($this->env, $this->source, $context["casque"], "classement", [], "any", false, false, false, 33) / 10), ["." => ","]), "html", null, true);
                echo " sur 5\">
      ";
            }
            // line 35
            echo "    </article>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "casques.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 37,  129 => 35,  124 => 33,  118 => 31,  113 => 29,  107 => 27,  105 => 26,  103 => 25,  99 => 24,  95 => 23,  90 => 22,  84 => 19,  81 => 18,  79 => 17,  73 => 14,  70 => 13,  68 => 12,  66 => 11,  61 => 8,  59 => 7,  57 => 6,  53 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "casques.twig", "D:\\wamp64\\www\\Nolark\\tpl\\casques.twig");
    }
}
