<?php

/* common/header.twig */
class __TwigTemplate_34650dc8453974fc4e1f4b13c6c41e24284a5aa947f67d4e7a11d9a7b5a8cef5 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 6
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />";
        // line 7
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 8
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />";
        }
        // line 10
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 11
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />";
        }
        // line 13
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<script src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 24
            echo "<link type=\"text/css\" href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 27
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        if (((isset($context["config_admin_date_auth"]) ? $context["config_admin_date_auth"] : null) == 1)) {
            echo "    
\t\t\t<script language=\"JavaScript\" type=\"text/javascript\">
function clock() {
var d = new Date();
var month = d.getMonth()
var day = d.getDate();
var hours = d.getHours();
var minutes = d.getMinutes();
var seconds = d.getSeconds();

if (month == 0) month = \"";
            // line 44
            echo (isset($context["text_january"]) ? $context["text_january"] : null);
            echo "\"
 else if (month == 1) month = \"";
            // line 45
            echo (isset($context["text_february"]) ? $context["text_february"] : null);
            echo "\"
 else if (month == 2) month = \"";
            // line 46
            echo (isset($context["text_march"]) ? $context["text_march"] : null);
            echo "\"
 else if (month == 3) month = \"";
            // line 47
            echo (isset($context["text_april"]) ? $context["text_april"] : null);
            echo "\"
 else if (month == 4) month = \"";
            // line 48
            echo (isset($context["text_may"]) ? $context["text_may"] : null);
            echo "\"
 else if (month == 5) month = \"";
            // line 49
            echo (isset($context["text_june"]) ? $context["text_june"] : null);
            echo "\"
 else if (month == 6) month = \"";
            // line 50
            echo (isset($context["text_july"]) ? $context["text_july"] : null);
            echo "\"
 else if (month == 7) month = \"";
            // line 51
            echo (isset($context["text_august"]) ? $context["text_august"] : null);
            echo "\"
 else if (month == 8) month = \"";
            // line 52
            echo (isset($context["text_september"]) ? $context["text_september"] : null);
            echo "\"
 else if (month == 9) month = \"";
            // line 53
            echo (isset($context["text_october"]) ? $context["text_october"] : null);
            echo "\"
 else if (month == 10) month = \"";
            // line 54
            echo (isset($context["text_november"]) ? $context["text_november"] : null);
            echo "\"
 else if (month == 11) month = \"";
            // line 55
            echo (isset($context["text_december"]) ? $context["text_december"] : null);
            echo "\";

if (day <= 9) day = \"0\" + day;
if (hours <= 9) hours = \"0\" + hours;
if (minutes <= 9) minutes = \"0\" + minutes;
if (seconds <= 9) seconds = \"0\" + seconds;

date_time =+ day + \" \" + month + \" \" + d.getFullYear() +
\"";
            // line 63
            echo (isset($context["text_year"]) ? $context["text_year"] : null);
            echo "<br />\"+ hours + \":\" + minutes + \":\" + seconds;
if (document.layers) {
 document.layers.doc_time.document.write(date_time);
 document.layers.doc_time.document.close();
}
else document.getElementById(\"doc_time\").innerHTML = date_time;
 setTimeout(\"clock()\", 1000);
}
</script>";
        }
        // line 72
        echo "\t\t\t
</head>
<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">

  
    
\t\t\t\t<div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 81
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\" class=\"navbar-brand\" style=\"padding: 7px 15px;\"><img src=\"";
        echo (isset($context["logo_thumb"]) ? $context["logo_thumb"] : null);
        echo "\" alt=\"";
        echo (isset($context["config_footer_text"]) ? $context["config_footer_text"] : null);
        echo "\" title=\"";
        echo (isset($context["config_footer_text"]) ? $context["config_footer_text"] : null);
        echo "\" /></a></div>
\t\t\t\t
\t\t\t
    <a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>";
        // line 84
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 90
            if (((isset($context["config_admin_date_auth"]) ? $context["config_admin_date_auth"] : null) == 1)) {
                // line 91
                echo "            <style>@media screen and (max-width: 600px) {
  #doc_time {
    display: none;
  }
}</style>
\t\t\t<div id=\"doc_time\" style=\"float:left;top:10px;left:16px;min-height:45px;padding:7px 20px;\">
                <script language=\"JavaScript\" type=\"text/javascript\">clock();</script>
            </div>";
            }
            // line 100
            echo "\t\t\t
    <ul class=\"nav navbar-nav navbar-right\">
      <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            // line 102
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo "\" title=\"";
            echo (isset($context["username"]) ? $context["username"] : null);
            echo "\" id=\"user-profile\" class=\"img-circle\" />";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo " <i class=\"fa fa-caret-down fa-fw\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li><a href=\"";
            // line 104
            echo (isset($context["profile"]) ? $context["profile"] : null);
            echo "\"><i class=\"fa fa-user-circle-o fa-fw\"></i>";
            echo (isset($context["text_profile"]) ? $context["text_profile"] : null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 106
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</li>";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 108
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["store"], "href", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 111
            echo (isset($context["text_help"]) ? $context["text_help"] : null);
            echo "</li>
          <li><a href=\"http://www.opencart.com\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i>";
            // line 112
            echo (isset($context["text_homepage"]) ? $context["text_homepage"] : null);
            echo "</a></li>
          <li><a href=\"http://docs.opencart.com\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i>";
            // line 113
            echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
            echo "</a></li>
          <li><a href=\"http://forum.opencart.com\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i>";
            // line 114
            echo (isset($context["text_support"]) ? $context["text_support"] : null);
            echo "</a></li>
        </ul>
      </li>
      <li><a href=\"";
            // line 117
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</span></a></li>
    </ul>";
        }
        // line 119
        echo " </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 119,  285 => 117,  279 => 114,  275 => 113,  271 => 112,  267 => 111,  264 => 110,  254 => 108,  250 => 107,  247 => 106,  240 => 104,  227 => 102,  223 => 100,  213 => 91,  211 => 90,  209 => 84,  197 => 81,  186 => 72,  174 => 63,  163 => 55,  159 => 54,  155 => 53,  151 => 52,  147 => 51,  143 => 50,  139 => 49,  135 => 48,  131 => 47,  127 => 46,  123 => 45,  119 => 44,  106 => 34,  98 => 31,  94 => 30,  92 => 29,  82 => 27,  78 => 26,  66 => 24,  62 => 23,  51 => 13,  46 => 11,  44 => 10,  39 => 8,  37 => 7,  34 => 6,  30 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />*/
/* <script type="text/javascript" src="view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/* <script type="text/javascript" src="view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/* <link href="view/stylesheet/bootstrap.css" type="text/css" rel="stylesheet" />*/
/* <link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />*/
/* <script src="view/javascript/jquery/datetimepicker/moment/moment.min.js" type="text/javascript"></script>*/
/* <script src="view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js" type="text/javascript"></script>*/
/* <script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>*/
/* <link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />*/
/* <link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />*/
/* {% for style in styles %}*/
/* <link type="text/css" href="{{ style.href }}" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* <script src="view/javascript/common.js" type="text/javascript"></script>*/
/* {% for script in scripts %}*/
/* <script type="text/javascript" src="{{ script }}"></script>*/
/* {% endfor %}*/
/* */
/*             {% if config_admin_date_auth == 1 %}    */
/* 			<script language="JavaScript" type="text/javascript">*/
/* function clock() {*/
/* var d = new Date();*/
/* var month = d.getMonth()*/
/* var day = d.getDate();*/
/* var hours = d.getHours();*/
/* var minutes = d.getMinutes();*/
/* var seconds = d.getSeconds();*/
/* */
/* if (month == 0) month = "{{ text_january }}"*/
/*  else if (month == 1) month = "{{ text_february }}"*/
/*  else if (month == 2) month = "{{ text_march }}"*/
/*  else if (month == 3) month = "{{ text_april }}"*/
/*  else if (month == 4) month = "{{ text_may }}"*/
/*  else if (month == 5) month = "{{ text_june }}"*/
/*  else if (month == 6) month = "{{ text_july }}"*/
/*  else if (month == 7) month = "{{ text_august }}"*/
/*  else if (month == 8) month = "{{ text_september }}"*/
/*  else if (month == 9) month = "{{ text_october }}"*/
/*  else if (month == 10) month = "{{ text_november }}"*/
/*  else if (month == 11) month = "{{ text_december }}";*/
/* */
/* if (day <= 9) day = "0" + day;*/
/* if (hours <= 9) hours = "0" + hours;*/
/* if (minutes <= 9) minutes = "0" + minutes;*/
/* if (seconds <= 9) seconds = "0" + seconds;*/
/* */
/* date_time =+ day + " " + month + " " + d.getFullYear() +*/
/* "{{ text_year }}<br />"+ hours + ":" + minutes + ":" + seconds;*/
/* if (document.layers) {*/
/*  document.layers.doc_time.document.write(date_time);*/
/*  document.layers.doc_time.document.close();*/
/* }*/
/* else document.getElementById("doc_time").innerHTML = date_time;*/
/*  setTimeout("clock()", 1000);*/
/* }*/
/* </script>{% endif %}*/
/* 			*/
/* </head>*/
/* <body>*/
/* <div id="container">*/
/* <header id="header" class="navbar navbar-static-top">*/
/*   <div class="container-fluid">*/
/* */
/*   */
/*     */
/* 				<div id="header-logo" class="navbar-header"><a href="{{ home }}" class="navbar-brand" style="padding: 7px 15px;"><img src="{{ logo_thumb }}" alt="{{ config_footer_text }}" title="{{ config_footer_text }}" /></a></div>*/
/* 				*/
/* 			*/
/*     <a href="#" id="button-menu" class="hidden-md hidden-lg"><span class="fa fa-bars"></span></a>{% if logged %}*/
/*     */
/*     */
/* */
/*     */
/* */
/*             {% if config_admin_date_auth == 1 %}*/
/*             <style>@media screen and (max-width: 600px) {*/
/*   #doc_time {*/
/*     display: none;*/
/*   }*/
/* }</style>*/
/* 			<div id="doc_time" style="float:left;top:10px;left:16px;min-height:45px;padding:7px 20px;">*/
/*                 <script language="JavaScript" type="text/javascript">clock();</script>*/
/*             </div>*/
/*             {% endif %}*/
/* 			*/
/*     <ul class="nav navbar-nav navbar-right">*/
/*       <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ image }}" alt="{{ firstname }} {{ lastname }}" title="{{ username }}" id="user-profile" class="img-circle" />{{ firstname }} {{ lastname }} <i class="fa fa-caret-down fa-fw"></i></a>*/
/*         <ul class="dropdown-menu dropdown-menu-right">*/
/*           <li><a href="{{ profile }}"><i class="fa fa-user-circle-o fa-fw"></i> {{ text_profile }}</a></li>*/
/*           <li role="separator" class="divider"></li>*/
/*           <li class="dropdown-header">{{ text_store }}</li>*/
/*           {% for store in stores %}*/
/*           <li><a href="{{ store.href }}" target="_blank">{{ store.name }}</a></li>*/
/*           {% endfor %}*/
/*           <li role="separator" class="divider"></li>*/
/*           <li class="dropdown-header">{{ text_help }}</li>*/
/*           <li><a href="http://www.opencart.com" target="_blank"><i class="fa fa-opencart fa-fw"></i> {{ text_homepage }}</a></li>*/
/*           <li><a href="http://docs.opencart.com" target="_blank"><i class="fa fa-file-text-o fa-fw"></i> {{ text_documentation }}</a></li>*/
/*           <li><a href="http://forum.opencart.com" target="_blank"><i class="fa fa-comments-o fa-fw"></i> {{ text_support }}</a></li>*/
/*         </ul>*/
/*       </li>*/
/*       <li><a href="{{ logout }}"><i class="fa fa-sign-out"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_logout }}</span></a></li>*/
/*     </ul>*/
/*     {% endif %} </div>*/
/* </header>*/
/* */
