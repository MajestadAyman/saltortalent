<?php

/* journal3/template/journal3/side_posts.twig */
class __TwigTemplate_355bb092fb8ab1b3176ff542cc6b583c5769245f8914b68f9765491e94edf44a extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "  <div class=\"post-layout ";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["post"], "classes", array())), "method");
            echo "\">
    <div class=\"post-thumb\">
      <div class=\"image\">
        <a href=\"";
            // line 5
            echo $this->getAttribute($context["post"], "href", array());
            echo "\">
          ";
            // line 6
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceLazyLoadImagesStatus"), "method")) {
                // line 7
                echo "            <img src=\"";
                echo (isset($context["dummy_image"]) ? $context["dummy_image"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["post"], "thumb", array());
                echo "\" ";
                if ($this->getAttribute($context["post"], "thumb2x", array())) {
                    echo "data-srcset=\"";
                    echo $this->getAttribute($context["post"], "thumb", array());
                    echo " 1x, ";
                    echo $this->getAttribute($context["post"], "thumb2x", array());
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" alt=\"";
                echo $this->getAttribute($context["post"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["post"], "name", array());
                echo "\" class=\"img-responsive lazyload\"/>
          ";
            } else {
                // line 9
                echo "            <img src=\"";
                echo $this->getAttribute($context["post"], "thumb", array());
                echo "\" ";
                if ($this->getAttribute($context["post"], "thumb2x", array())) {
                    echo "data-srcset=\"";
                    echo $this->getAttribute($context["post"], "thumb", array());
                    echo " 1x, ";
                    echo $this->getAttribute($context["post"], "thumb2x", array());
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" alt=\"";
                echo $this->getAttribute($context["post"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["post"], "name", array());
                echo "\" class=\"img-responsive\"/>
          ";
            }
            // line 11
            echo "        </a>
      </div>

      <div class=\"caption\">

        <div class=\"name\"><a href=\"";
            // line 16
            echo $this->getAttribute($context["post"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["post"], "name", array());
            echo "</a></div>

        <div class=\"post-stats\">
          <span class=\"p-date\">";
            // line 19
            echo $this->getAttribute($context["post"], "date", array());
            echo "</span>
          <span class=\"p-comment\">";
            // line 20
            echo $this->getAttribute($context["post"], "comments", array());
            echo "</span>
        </div>

      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/side_posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  97 => 19,  89 => 16,  82 => 11,  60 => 9,  36 => 7,  34 => 6,  30 => 5,  23 => 2,  19 => 1,);
    }
}
/* {% for post in posts %}*/
/*   <div class="post-layout {{ j3.classes(post.classes) }}">*/
/*     <div class="post-thumb">*/
/*       <div class="image">*/
/*         <a href="{{ post.href }}">*/
/*           {% if j3.settings.get('performanceLazyLoadImagesStatus') %}*/
/*             <img src="{{ dummy_image }}" data-src="{{ post.thumb }}" {% if post.thumb2x %}data-srcset="{{ post.thumb }} 1x, {{ post.thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ post.name }}" title="{{ post.name }}" class="img-responsive lazyload"/>*/
/*           {% else %}*/
/*             <img src="{{ post.thumb }}" {% if post.thumb2x %}data-srcset="{{ post.thumb }} 1x, {{ post.thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ post.name }}" title="{{ post.name }}" class="img-responsive"/>*/
/*           {% endif %}*/
/*         </a>*/
/*       </div>*/
/* */
/*       <div class="caption">*/
/* */
/*         <div class="name"><a href="{{ post.href }}">{{ post.name }}</a></div>*/
/* */
/*         <div class="post-stats">*/
/*           <span class="p-date">{{ post.date }}</span>*/
/*           <span class="p-comment">{{ post.comments }}</span>*/
/*         </div>*/
/* */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endfor %}*/
/* */
