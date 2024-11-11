<?php

/* journal3/template/journal3/module/title.twig */
class __TwigTemplate_495a3d3c50329ef69454d0eebb7f83c510eb22545cf86e81c38ce0178fb42e17 extends Twig_Template
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
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  <div class=\"title-wrapper\">
    ";
        // line 3
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 4
            echo "    <h3>";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h3>
    ";
        }
        // line 6
        echo "    <div class=\"title-divider\"></div>
    <div class=\"subtitle\">";
        // line 7
        echo (isset($context["subtitle"]) ? $context["subtitle"] : null);
        echo "</div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  33 => 6,  27 => 4,  25 => 3,  19 => 1,);
    }
}
/* <div class="{{ j3.classes(classes) }}">*/
/*   <div class="title-wrapper">*/
/*     {% if title %}*/
/*     <h3>{{ title }}</h3>*/
/*     {% endif %}*/
/*     <div class="title-divider"></div>*/
/*     <div class="subtitle">{{ subtitle }}</div>*/
/*   </div>*/
/* </div>*/
/* */
