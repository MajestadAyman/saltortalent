<?php

/* journal3/template/journal3/module/blog_side_posts.twig */
class __TwigTemplate_9567c53b504c9e67c456255c37946edfb190e14555e1c43603106b3431bd8888 extends Twig_Template
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
        // line 23
        $context["self"] = $this;
        // line 24
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  <div class=\"module-body\">
    ";
        // line 27
        echo "    ";
        if (((isset($context["sectionsDisplay"]) ? $context["sectionsDisplay"] : null) == "blocks")) {
            // line 28
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "        <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
          ";
                // line 30
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 31
                    echo "            <h3 class=\"title module-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h3>
          ";
                }
                // line 33
                echo "          ";
                echo $context["self"]->getrenderPostsItem($context["item"], $context);
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        // line 38
        echo "    ";
        if (((isset($context["sectionsDisplay"]) ? $context["sectionsDisplay"] : null) == "tabs")) {
            // line 39
            echo "      <ul class=\"nav nav-tabs\">
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "          <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "tab_classes", array())), "method");
                echo "\">
            <a href=\"#";
                // line 42
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-tab-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" data-toggle=\"tab\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      </ul>
      <div class=\"tab-content\">
        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "          <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-tab-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
            ";
                // line 49
                echo $context["self"]->getrenderPostsItem($context["item"], $context);
                echo "
          </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "      </div>
    ";
        }
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        if (((isset($context["sectionsDisplay"]) ? $context["sectionsDisplay"] : null) == "accordion")) {
            // line 56
            echo "      <div class=\"panel-group\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "-collapse\">
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 58
                echo "          <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a href=\"#";
                // line 61
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse\" aria-expanded=\"false\">
                  ";
                // line 62
                echo $this->getAttribute($context["item"], "title", array());
                echo "
                  <i class=\"fa fa-caret-down\"></i>
                </a>
              </h4>
            </div>
            <div class=\"";
                // line 67
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "panel_classes", array())), "method");
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
              <div class=\"panel-body\">
                ";
                // line 69
                echo $context["self"]->getrenderPostsItem($context["item"], $context);
                echo "
              </div>
            </div>
          </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "      </div>
    ";
        }
        // line 76
        echo "  </div>
</div>
";
    }

    // line 1
    public function getrenderPostsItem($__item__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            $context["self"] = $this;
            // line 3
            echo "  ";
            $context["posts"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "posts", array());
            // line 4
            echo "  ";
            if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "carousel", array())) {
                // line 5
                echo "    <div class=\"swiper\" data-items-per-row='";
                echo twig_jsonencode_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "itemsPerRow", array()), twig_constant("JSON_FORCE_OBJECT"));
                echo "' data-options='";
                echo twig_jsonencode_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "carouselOptions", array()), twig_constant("JSON_FORCE_OBJECT"));
                echo "'>
      <div class=\"swiper-container\" ";
                // line 6
                if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                    echo "dir=\"rtl\"";
                }
                echo ">
        <div class=\"swiper-wrapper side-posts\">
          ";
                // line 8
                $this->loadTemplate("journal3/template/journal3/side_posts.twig", "journal3/template/journal3/module/blog_side_posts.twig", 8)->display(array_merge($context, (isset($context["context"]) ? $context["context"] : null)));
                // line 9
                echo "        </div>
      </div>
      <div class=\"swiper-buttons\">
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
      <div class=\"swiper-pagination\"></div>
    </div>
  ";
            } else {
                // line 18
                echo "    <div class=\"side-posts\">
      ";
                // line 19
                $this->loadTemplate("journal3/template/journal3/side_posts.twig", "journal3/template/journal3/module/blog_side_posts.twig", 19)->display(array_merge($context, (isset($context["context"]) ? $context["context"] : null)));
                // line 20
                echo "    </div>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/blog_side_posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 20,  303 => 19,  300 => 18,  289 => 9,  287 => 8,  280 => 6,  273 => 5,  270 => 4,  267 => 3,  264 => 2,  251 => 1,  245 => 76,  241 => 74,  222 => 69,  213 => 67,  205 => 62,  197 => 61,  190 => 58,  173 => 57,  168 => 56,  165 => 55,  163 => 54,  159 => 52,  142 => 49,  133 => 48,  116 => 47,  112 => 45,  91 => 42,  86 => 41,  69 => 40,  66 => 39,  63 => 38,  61 => 37,  58 => 36,  48 => 33,  42 => 31,  40 => 30,  35 => 29,  30 => 28,  27 => 27,  21 => 24,  19 => 23,);
    }
}
/* {% macro renderPostsItem(item, context) %}*/
/*   {% import _self as self %}*/
/*   {% set posts = item.posts %}*/
/*   {% if context.carousel %}*/
/*     <div class="swiper" data-items-per-row='{{ context.itemsPerRow|json_encode(constant('JSON_FORCE_OBJECT')) }}' data-options='{{ context.carouselOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}'>*/
/*       <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*         <div class="swiper-wrapper side-posts">*/
/*           {% include "journal3/template/journal3/side_posts.twig" with context %}*/
/*         </div>*/
/*       </div>*/
/*       <div class="swiper-buttons">*/
/*         <div class="swiper-button-prev"></div>*/
/*         <div class="swiper-button-next"></div>*/
/*       </div>*/
/*       <div class="swiper-pagination"></div>*/
/*     </div>*/
/*   {% else %}*/
/*     <div class="side-posts">*/
/*       {% include "journal3/template/journal3/side_posts.twig" with context %}*/
/*     </div>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* <div class="{{ j3.classes(classes) }}">*/
/*   <div class="module-body">*/
/*     {# grid #}*/
/*     {% if sectionsDisplay == 'blocks' %}*/
/*       {% for item in items %}*/
/*         <div class="{{ j3.classes(item.classes) }}">*/
/*           {% if item.title %}*/
/*             <h3 class="title module-title">{{ item.title }}</h3>*/
/*           {% endif %}*/
/*           {{ self.renderPostsItem(item, _context) }}*/
/*         </div>*/
/*       {% endfor %}*/
/*     {% endif %}*/
/*     {# tabs #}*/
/*     {% if sectionsDisplay == 'tabs' %}*/
/*       <ul class="nav nav-tabs">*/
/*         {% for item in items %}*/
/*           <li class="{{ j3.classes(item.tab_classes) }}">*/
/*             <a href="#{{ id }}-tab-{{ loop.index }}" data-toggle="tab">{{ item.title }}</a>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*       <div class="tab-content">*/
/*         {% for item in items %}*/
/*           <div class="{{ j3.classes(item.classes) }}" id="{{ id }}-tab-{{ loop.index }}">*/
/*             {{ self.renderPostsItem(item, _context) }}*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endif %}*/
/*     {# accordion #}*/
/*     {% if sectionsDisplay == 'accordion' %}*/
/*       <div class="panel-group" id="{{ id }}-collapse">*/
/*         {% for item in items %}*/
/*           <div class="{{ j3.classes(item.classes) }}">*/
/*             <div class="panel-heading">*/
/*               <h4 class="panel-title">*/
/*                 <a href="#{{ id }}-collapse-{{ loop.index }}" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#{{ id }}-collapse" aria-expanded="false">*/
/*                   {{ item.title }}*/
/*                   <i class="fa fa-caret-down"></i>*/
/*                 </a>*/
/*               </h4>*/
/*             </div>*/
/*             <div class="{{ j3.classes(item.panel_classes) }}" id="{{ id }}-collapse-{{ loop.index }}">*/
/*               <div class="panel-body">*/
/*                 {{ self.renderPostsItem(item, _context) }}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
