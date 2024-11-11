<?php

/* journal3/template/common/bottom.twig */
class __TwigTemplate_65f7c74527e1bd75b4fdd0b2dd9d459b562f8267bf2a111a8606ebde57a8fd87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 2
            echo "  <div id=\"bottom\" class=\"bottom top-row\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 4
                echo "      ";
                echo $context["module"];
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/common/bottom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if modules %}*/
/*   <div id="bottom" class="bottom top-row">*/
/*     {% for module in modules %}*/
/*       {{ module }}*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endif %}*/
/* */
