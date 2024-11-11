<?php

/* journal3/template/journal3/blog/feed.twig */
class __TwigTemplate_e507631d6b758e05753afa1aca3b34a2a6a07c9b7ac708a8122880b1749dd515 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">
  <channel>
    <atom:link href=\"";
        // line 4
        echo (isset($context["feed_link"]) ? $context["feed_link"] : null);
        echo "\" rel=\"self\" type=\"application/rss+xml\"/>
    <title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
    <link>";
        // line 6
        echo (isset($context["blog_link"]) ? $context["blog_link"] : null);
        echo "</link>
    <description>";
        // line 7
        echo (isset($context["meta_description"]) ? $context["meta_description"] : null);
        echo "</description>";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "      <item>
        <title>";
            // line 11
            echo $this->getAttribute($context["post"], "name", array());
            echo "</title>";
            // line 12
            if ($this->getAttribute($context["post"], "author", array())) {
                // line 13
                echo "          <author>";
                echo $this->getAttribute($context["post"], "author", array());
                echo "</author>";
            }
            // line 15
            echo "        <pubDate>";
            echo $this->getAttribute($context["post"], "date", array());
            echo "</pubDate>
        <link>";
            // line 16
            echo $this->getAttribute($context["post"], "href", array());
            echo "</link>
        <guid>";
            // line 17
            echo $this->getAttribute($context["post"], "href", array());
            echo "</guid>
        <description>
          <![CDATA[";
            // line 20
            if ($this->getAttribute($context["post"], "thumb", array())) {
                // line 21
                echo "            <p><img src=\"";
                echo $this->getAttribute($context["post"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["post"], "name", array());
                echo "\"/></p>";
            }
            // line 23
            echo $this->getAttribute($context["post"], "description", array());
            echo "
          <a href=\"";
            // line 24
            echo $this->getAttribute($context["post"], "href", array());
            echo "\">Read More</a>
          ]]>
        </description>
      </item>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
  </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/blog/feed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  83 => 24,  79 => 23,  72 => 21,  70 => 20,  65 => 17,  61 => 16,  56 => 15,  51 => 13,  49 => 12,  46 => 11,  43 => 10,  39 => 9,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <?xml version="1.0" encoding="UTF-8" ?>*/
/* <rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">*/
/*   <channel>*/
/*     <atom:link href="{{ feed_link }}" rel="self" type="application/rss+xml"/>*/
/*     <title>{{ title }}</title>*/
/*     <link>{{ blog_link }}</link>*/
/*     <description>{{ meta_description }}</description>*/
/* */
/*     {% for post in posts %}*/
/*       <item>*/
/*         <title>{{ post.name }}</title>*/
/*         {% if post.author %}*/
/*           <author>{{ post.author }}</author>*/
/*         {% endif %}*/
/*         <pubDate>{{ post.date }}</pubDate>*/
/*         <link>{{ post.href }}</link>*/
/*         <guid>{{ post.href }}</guid>*/
/*         <description>*/
/*           <![CDATA[*/
/*           {% if post.thumb %}*/
/*             <p><img src="{{ post.thumb }}" alt="{{ post.name }}"/></p>*/
/*           {% endif %}*/
/*           {{ post.description }}*/
/*           <a href="{{ post.href }}">Read More</a>*/
/*           ]]>*/
/*         </description>*/
/*       </item>*/
/*     {% endfor %}*/
/* */
/*   </channel>*/
/* </rss>*/
/* */
