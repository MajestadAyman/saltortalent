<?php

/* journal3/template/journal3/module/blog_search.twig */
class __TwigTemplate_fa82d2aa252e9988a2c741ce3a075d4164bee62d138321d8c23e7ca742fdacc1 extends Twig_Template
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
        echo "\" data-url=\"";
        echo (isset($context["url"]) ? $context["url"] : null);
        echo "\">
  ";
        // line 2
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 3
            echo "    <h3 class=\"title module-title\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h3>
  ";
        }
        // line 5
        echo "  <div class=\"module-body\">
    <div class=\"box-search\">
      <input type=\"text\" class=\"form-control blog-search\" value=\"";
        // line 7
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\"/>
      <button class=\"btn search-btn\">
        <i class=\"fa fa-search\"></i>
      </button>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/blog_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="{{ j3.classes(classes) }}" data-url="{{ url }}">*/
/*   {% if title %}*/
/*     <h3 class="title module-title">{{ title }}</h3>*/
/*   {% endif %}*/
/*   <div class="module-body">*/
/*     <div class="box-search">*/
/*       <input type="text" class="form-control blog-search" value="{{ search }}" placeholder="{{ placeholder }}"/>*/
/*       <button class="btn search-btn">*/
/*         <i class="fa fa-search"></i>*/
/*       </button>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
