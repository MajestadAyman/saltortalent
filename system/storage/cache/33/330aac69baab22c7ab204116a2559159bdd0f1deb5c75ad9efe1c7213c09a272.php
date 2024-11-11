<?php

/* journal3/template/common/header.twig */
class __TwigTemplate_a076ec6833afe9da5da5048a20df98dc22ce367551d38a3ea88d60c859faf67b extends Twig_Template
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
        if ( !array_key_exists("j3", $context)) {
            // line 2
            echo "  <style>
    body {
      display: none !important;
    }
  </style>
  <script>
    window.location = 'index.php?route=journal3/startup/error';
  </script>
";
        }
        // line 11
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 12
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"";
        echo twig_join_filter($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getClasses", array(), "method"), " ");
        echo "\" data-jb=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "constant", array(0 => "JOURNAL3_BUILD"), "method");
        echo "\" data-jv=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "constant", array(0 => "JOURNAL3_VERSION"), "method");
        echo "\" data-ov=\"";
        echo twig_constant("VERSION");
        echo "\">
<head typeof=\"og:website\">
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 17
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 18
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
<link rel=\"preload\" href=\"";
        // line 19
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "staticUrl", array(0 => "catalog/view/theme/journal3/icons/fonts/icomoon.woff2?v1"), "method");
        echo "\" as=\"font\" crossorigin>
";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasFonts", array(), "method")) {
            // line 21
            echo "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\" crossorigin>
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
";
        }
        // line 24
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 25
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 27
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 28
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 30
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/seo/meta_tags"), "method"));
            foreach ($context['_seq'] as $context["key"] => $context["tag"]) {
                // line 32
                echo "<meta ";
                echo $this->getAttribute($context["tag"], "type", array());
                echo "=\"";
                echo $context["key"];
                echo "\" content=\"";
                echo $this->getAttribute($context["tag"], "content", array());
                echo "\"/>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 35
        if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "constant", array(0 => "SENTRY_JS_DSN"), "method")) {
            // line 36
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "constant", array(0 => "SENTRY_JS_DSN"), "method");
            echo "
";
        }
        // line 38
        echo "<script>window['Journal'] = ";
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getJs", array(), "method"));
        echo ";</script>
";
        // line 39
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 40
            echo "<script>";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/mql"), "method");
            echo "</script>
";
        }
        // line 42
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasFonts", array(), "method")) {
            // line 43
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceAsyncFontsStatus"), "method")) {
                // line 44
                echo "<script>WebFontConfig = { google: { families: ";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getFonts", array(0 => true), "method");
                echo " } };</script>
<script src=\"https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js\" async></script>
";
            } else {
                // line 47
                echo "<link href=\"https://fonts.googleapis.com/css?family=";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getFonts", array(0 => false), "method");
                echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
            }
        }
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getStyles", array(0 => (isset($context["styles"]) ? $context["styles"] : null)), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 51
            if ($this->getAttribute($context["style"], "content", array())) {
                // line 52
                echo "<style>";
                echo $this->getAttribute($context["style"], "content", array());
                echo "</style>
";
            } else {
                // line 54
                echo "<link href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "staticUrl", array(0 => $this->getAttribute($context["style"], "href", array()), 1 => false), "method");
                echo "\" type=\"text/css\" rel=\"";
                echo $this->getAttribute($context["style"], "rel", array());
                echo "\" media=\"all\" />
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
        
      
";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 61
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 64
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "<style>
";
        // line 67
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getCss", array(), "method");
        echo "
</style>
";
        // line 69
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "customCSS"), "method")) {
            // line 70
            echo "<style>";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "customCSS"), "method");
            echo "</style>
";
        }
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getScripts", array(0 => "header", 1 => (isset($context["scripts"]) ? $context["scripts"] : null)), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 73
            echo "<script src=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "staticUrl", array(0 => $context["script"], 1 => false), "method");
            echo "\" ";
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceJSDefer"), "method")) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "customCodeHeader"), "method")) {
            // line 76
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "customCodeHeader"), "method");
            echo "
";
        }
        // line 78
        echo "
        ";
        // line 79
        echo (isset($context["mlseo_meta"]) ? $context["mlseo_meta"] : null);
        echo "
      
</head>
<body class=\"";
        // line 82
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">

";
        // line 84
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserStatus"), "method")) {
            // line 85
            echo "<div class=\"old-browser\">
  <div class=\"ob-content\">
    <h2 class=\"ob-title\">";
            // line 87
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserTitle"), "method");
            echo "</h2>
    <span class=\"ob-text\">";
            // line 88
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserText"), "method");
            echo "</span>
    <div class=\"ob-links\">
      <a href=\"https://www.google.com/chrome/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 91
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserChrome"), "method");
            echo "\" alt=\"Chrome\" />
        <span class=\"ob-name\">Chrome</span>
      </a>
      <a href=\"https://www.mozilla.org/firefox/new/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 95
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserFirefox"), "method");
            echo "\" alt=\"Firefox\" />
        <span class=\"ob-name\">Firefox</span>
      </a>
      <a href=\"https://www.microsoft.com/en-us/windows/microsoft-edge\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 99
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserEdge"), "method");
            echo "\" alt=\"edge\" />
        <span class=\"ob-name\">Microsoft Edge</span>
      </a>
      <a href=\"https://www.opera.com/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 103
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserOpera"), "method");
            echo "\" alt=\"opera\" />
        <span class=\"ob-name\">Opera</span>
      </a>
      <a href=\"https://www.apple.com/lae/safari/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 107
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "oldBrowserSafari"), "method");
            echo "\" alt=\"safari\" />
        <span class=\"ob-name\">Safari on Mac</span>
      </a>
    </div>
  </div>
</div>
";
        }
        // line 114
        echo "
";
        // line 115
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 116
            echo "<div class=\"mobile-container mobile-main-menu-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 118
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "headerMobileMenuTitle"), "method");
            echo "</span>
    ";
            // line 119
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileLangPosition"), "method") == "menu")) {
                // line 120
                echo "      <div class=\"language-currency top-menu\">
        <div class=\"mobile-currency-wrapper\">
            ";
                // line 122
                echo (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method")) ? ((isset($context["currency"]) ? $context["currency"] : null)) : (""));
                echo "
        </div>
        <div class=\"mobile-language-wrapper\">
            ";
                // line 125
                echo (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method")) ? ((isset($context["language"]) ? $context["language"] : null)) : (""));
                echo "
        </div>
      </div>
    ";
            }
            // line 129
            echo "    <a class=\"x\"></a>
  </div>
  <div class=\"mobile-main-menu-wrapper\">
    ";
            // line 132
            echo ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPhone", array(), "method") || ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isTablet", array(), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileHeaderOn"), "method") == "tablet")))) ? ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobile_main_menu"), "method")) : (""));
            echo "
  </div>
</div>

<div class=\"mobile-container mobile-filter-container\">
  <div class=\"mobile-wrapper-header\"></div>
  <div class=\"mobile-filter-wrapper\"></div>
</div>

<div class=\"mobile-container mobile-cart-content-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 143
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "headerMobileCartTitle"), "method");
            echo "</span>
    <a class=\"x\"></a>
  </div>
  <div class=\"mobile-cart-content-wrapper cart-content\"></div>
</div>
";
        }
        // line 149
        echo "
";
        // line 150
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "popup"), "method");
        echo "

<div class=\"site-wrapper\">

  ";
        // line 154
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "header_notice"), "method");
        echo "

  ";
        // line 156
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 157
            echo "  <header class=\"header-";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "headerType"), "method");
            echo "\">
    ";
            // line 158
            if (( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "headerType"), "method"))) {
                // line 159
                echo "      ";
                $this->loadTemplate((("journal3/template/journal3/headers/desktop/" . $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "headerType"), "method")) . ".twig"), "journal3/template/common/header.twig", 159)->display($context);
                // line 160
                echo "    ";
            }
            // line 161
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileHeaderType"), "method")) {
                // line 162
                echo "      ";
                $this->loadTemplate((("journal3/template/journal3/headers/mobile/header_mobile_" . $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "mobileHeaderType"), "method")) . ".twig"), "journal3/template/common/header.twig", 162)->display($context);
                // line 163
                echo "    ";
            }
            // line 164
            echo "  </header>
  ";
        }
        // line 166
        echo "
  ";
        // line 167
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "fullscreen_slider"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 167,  413 => 166,  409 => 164,  406 => 163,  403 => 162,  400 => 161,  397 => 160,  394 => 159,  392 => 158,  387 => 157,  385 => 156,  380 => 154,  373 => 150,  370 => 149,  361 => 143,  347 => 132,  342 => 129,  335 => 125,  329 => 122,  325 => 120,  323 => 119,  319 => 118,  315 => 116,  313 => 115,  310 => 114,  300 => 107,  293 => 103,  286 => 99,  279 => 95,  272 => 91,  266 => 88,  262 => 87,  258 => 85,  256 => 84,  251 => 82,  245 => 79,  242 => 78,  237 => 76,  235 => 75,  222 => 73,  218 => 72,  212 => 70,  210 => 69,  205 => 67,  202 => 66,  194 => 64,  190 => 63,  179 => 61,  175 => 60,  170 => 57,  158 => 54,  152 => 52,  150 => 51,  146 => 50,  139 => 47,  132 => 44,  130 => 43,  128 => 42,  122 => 40,  120 => 39,  115 => 38,  110 => 36,  108 => 35,  94 => 32,  90 => 31,  88 => 30,  82 => 28,  80 => 27,  74 => 25,  72 => 24,  67 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  35 => 12,  32 => 11,  21 => 2,  19 => 1,);
    }
}
/* {% if j3 is not defined %}*/
/*   <style>*/
/*     body {*/
/*       display: none !important;*/
/*     }*/
/*   </style>*/
/*   <script>*/
/*     window.location = 'index.php?route=journal3/startup/error';*/
/*   </script>*/
/* {% endif %}*/
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}" class="{{ j3.document.getClasses() | join(' ') }}" data-jb="{{ j3.constant('JOURNAL3_BUILD') }}" data-jv="{{ j3.constant('JOURNAL3_VERSION') }}" data-ov="{{ constant('VERSION') }}">*/
/* <head typeof="og:website">*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* <link rel="preload" href="{{ j3.document.staticUrl('catalog/view/theme/journal3/icons/fonts/icomoon.woff2?v1') }}" as="font" crossorigin>*/
/* {% if j3.document.hasFonts() %}*/
/* <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>*/
/* <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>*/
/* {% endif %}*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* {% if not j3.document.isPopup() %}*/
/* {% for key, tag in j3.loadController('journal3/seo/meta_tags') %}*/
/* <meta {{ tag.type }}="{{ key }}" content="{{ tag.content }}"/>*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% if j3.constant('SENTRY_JS_DSN') %}*/
/* {{ j3.constant('SENTRY_JS_DSN') }}*/
/* {% endif %}*/
/* <script>window['Journal'] = {{ j3.document.getJs() | json_encode }};</script>*/
/* {% if not j3.document.isPopup() %}*/
/* <script>{{ j3.loadController('journal3/mql') }}</script>*/
/* {% endif %}*/
/* {% if j3.document.hasFonts() %}*/
/* {% if j3.settings.get('performanceAsyncFontsStatus') %}*/
/* <script>WebFontConfig = { google: { families: {{ j3.document.getFonts(true) }} } };</script>*/
/* <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" async></script>*/
/* {% else %}*/
/* <link href="https://fonts.googleapis.com/css?family={{ j3.document.getFonts(false) }}" type="text/css" rel="stylesheet"/>*/
/* {% endif %}*/
/* {% endif %}*/
/* {% for style in j3.document.getStyles(styles) %}*/
/* {% if style.content %}*/
/* <style>{{ style.content }}</style>*/
/* {% else %}*/
/* <link href="{{ j3.document.staticUrl(style.href, false) }}" type="text/css" rel="{{ style.rel }}" media="all" />*/
/* {% endif %}*/
/* {% endfor %}*/
/* */
/*         */
/*       */
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* <style>*/
/* {{ j3.document.getCss() }}*/
/* </style>*/
/* {% if j3.settings.get('customCSS') %}*/
/* <style>{{ j3.settings.get('customCSS') }}</style>*/
/* {% endif %}*/
/* {% for script in j3.document.getScripts('header', scripts) %}*/
/* <script src="{{ j3.document.staticUrl(script, false) }}" {% if j3.settings.get('performanceJSDefer') %} defer {% endif %}></script>*/
/* {% endfor %}*/
/* {% if j3.settings.get('customCodeHeader') %}*/
/* {{ j3.settings.get('customCodeHeader') }}*/
/* {% endif %}*/
/* */
/*         {{mlseo_meta}}*/
/*       */
/* </head>*/
/* <body class="{{ class }}">*/
/* */
/* {% if j3.settings.get('oldBrowserStatus') %}*/
/* <div class="old-browser">*/
/*   <div class="ob-content">*/
/*     <h2 class="ob-title">{{ j3.settings.get('oldBrowserTitle') }}</h2>*/
/*     <span class="ob-text">{{ j3.settings.get('oldBrowserText') }}</span>*/
/*     <div class="ob-links">*/
/*       <a href="https://www.google.com/chrome/" target="_blank" rel="nofollow">*/
/*         <img src="{{ j3.settings.get('oldBrowserChrome') }}" alt="Chrome" />*/
/*         <span class="ob-name">Chrome</span>*/
/*       </a>*/
/*       <a href="https://www.mozilla.org/firefox/new/" target="_blank" rel="nofollow">*/
/*         <img src="{{ j3.settings.get('oldBrowserFirefox') }}" alt="Firefox" />*/
/*         <span class="ob-name">Firefox</span>*/
/*       </a>*/
/*       <a href="https://www.microsoft.com/en-us/windows/microsoft-edge" target="_blank" rel="nofollow">*/
/*         <img src="{{ j3.settings.get('oldBrowserEdge') }}" alt="edge" />*/
/*         <span class="ob-name">Microsoft Edge</span>*/
/*       </a>*/
/*       <a href="https://www.opera.com/" target="_blank" rel="nofollow">*/
/*         <img src="{{ j3.settings.get('oldBrowserOpera') }}" alt="opera" />*/
/*         <span class="ob-name">Opera</span>*/
/*       </a>*/
/*       <a href="https://www.apple.com/lae/safari/" target="_blank" rel="nofollow">*/
/*         <img src="{{ j3.settings.get('oldBrowserSafari') }}" alt="safari" />*/
/*         <span class="ob-name">Safari on Mac</span>*/
/*       </a>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if not j3.document.isPopup() %}*/
/* <div class="mobile-container mobile-main-menu-container">*/
/*   <div class="mobile-wrapper-header">*/
/*     <span>{{ j3.settings.get('headerMobileMenuTitle') }}</span>*/
/*     {% if j3.settings.get('mobileLangPosition') == 'menu' %}*/
/*       <div class="language-currency top-menu">*/
/*         <div class="mobile-currency-wrapper">*/
/*             {{ j3.document.hasClass('mobile-header-active') ? currency : '' }}*/
/*         </div>*/
/*         <div class="mobile-language-wrapper">*/
/*             {{ j3.document.hasClass('mobile-header-active') ? language : '' }}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     <a class="x"></a>*/
/*   </div>*/
/*   <div class="mobile-main-menu-wrapper">*/
/*     {{ j3.document.isPhone() or (j3.document.isTablet() and j3.settings.get('mobileHeaderOn') == 'tablet') ? j3.settings.get('mobile_main_menu') : '' }}*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="mobile-container mobile-filter-container">*/
/*   <div class="mobile-wrapper-header"></div>*/
/*   <div class="mobile-filter-wrapper"></div>*/
/* </div>*/
/* */
/* <div class="mobile-container mobile-cart-content-container">*/
/*   <div class="mobile-wrapper-header">*/
/*     <span>{{ j3.settings.get('headerMobileCartTitle') }}</span>*/
/*     <a class="x"></a>*/
/*   </div>*/
/*   <div class="mobile-cart-content-wrapper cart-content"></div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {{ j3.loadController('journal3/layout', 'popup') }}*/
/* */
/* <div class="site-wrapper">*/
/* */
/*   {{ j3.loadController('journal3/layout', 'header_notice') }}*/
/* */
/*   {% if not j3.document.isPopup() %}*/
/*   <header class="header-{{ j3.settings.get('headerType') }}">*/
/*     {% if not j3.document.hasClass('mobile-header-active') and j3.settings.get('headerType') %}*/
/*       {% include 'journal3/template/journal3/headers/desktop/' ~ j3.settings.get('headerType') ~ '.twig' %}*/
/*     {% endif %}*/
/*     {% if j3.settings.get('mobileHeaderType') %}*/
/*       {% include 'journal3/template/journal3/headers/mobile/header_mobile_' ~ j3.settings.get('mobileHeaderType') ~ '.twig' %}*/
/*     {% endif %}*/
/*   </header>*/
/*   {% endif %}*/
/* */
/*   {{ j3.loadController('journal3/layout', 'fullscreen_slider') }}*/
/* */
