<?php

/* journal3/template/journal3/module/blog_categories.twig */
class __TwigTemplate_4be793fa374852e0f777e2034d7f7af5a5cf93c17f3f4bc5216c95bed0ebacb1 extends Twig_Template
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
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 2
            echo "  <div class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">
    ";
            // line 3
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 4
                echo "      <h3 class=\"title module-title\">";
                echo (isset($context["title"]) ? $context["title"] : null);
                echo "</h3>
    ";
            }
            // line 6
            echo "    <div class=\"module-body\">
      ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "        <a href=\"";
                echo $this->getAttribute($context["item"], "href", array());
                echo "\" class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\"><span>";
                echo $this->getAttribute($context["item"], "name", array());
                echo "</span></a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/blog_categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  41 => 8,  37 => 7,  34 => 6,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if items %}*/
/*   <div class="{{ j3.classes(classes) }}">*/
/*     {% if title %}*/
/*       <h3 class="title module-title">{{ title }}</h3>*/
/*     {% endif %}*/
/*     <div class="module-body">*/
/*       {% for item in items %}*/
/*         <a href="{{ item.href }}" class="{{ j3.classes(item.classes) }}"><span>{{ item.name }}</span></a>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
