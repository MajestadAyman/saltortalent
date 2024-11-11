<?php

/* journal3/template/journal3/module/form_email.twig */
class __TwigTemplate_0d35d27502ee1c52ad2cbd35a247d5a7aa5788157fd004a6b0fde56fdba5978b extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
  <title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
</head>
<body style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;\">
<div style=\"width: 680px;\">";
        // line 9
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 10
            echo "  <a href=\"";
            echo (isset($context["store_url"]) ? $context["store_url"] : null);
            echo "\" title=\"";
            echo (isset($context["store_name"]) ? $context["store_name"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" alt=\"";
            echo (isset($context["store_name"]) ? $context["store_name"] : null);
            echo "\" style=\"margin-bottom: 20px; border: none;\"/></a>";
        }
        // line 12
        echo "  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sentEmailTitle", array());
        echo "</p>
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
    <tr>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 16
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sentEmailField", array());
        echo "</td>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 17
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sentEmailValue", array());
        echo "</td>
    </tr>
    </thead>
    <tbody>";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\"><b>";
            // line 23
            echo $this->getAttribute($context["item"], "label", array());
            echo ":</b></td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 25
            if (($this->getAttribute($context["item"], "type", array()) == "file")) {
                // line 26
                echo "            <a href=\"";
                echo $this->getAttribute($context["item"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "value", array());
                echo "</a>";
            } else {
                // line 28
                echo ((twig_test_iterable($this->getAttribute($context["item"], "value", array()))) ? (twig_join_filter($this->getAttribute($context["item"], "value", array()), ", ")) : ($this->getAttribute($context["item"], "value", array())));
            }
            // line 30
            echo "        </td>
      </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>
  </table>";
        // line 35
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array())) {
            // line 36
            echo "  <p style=\"margin-top: 10px; margin-bottom: 20px;\">";
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sentEmailUsingModule", array());
            echo " <b>";
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array());
            echo "</b></p>";
        }
        // line 38
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "url", array())) {
            // line 39
            echo "  <p style=\"margin-top: 10px; margin-bottom: 20px;\">";
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sentEmailFrom", array());
            echo " <a href=\"";
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "url", array());
            echo "</a></p>";
        }
        // line 41
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ip", array())) {
            // line 42
            echo "    <p style=\"margin-top: 10px; margin-bottom: 20px;\">";
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sentEmailIPAddress", array());
            echo " <b>";
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ip", array());
            echo "</b></p>";
        }
        // line 44
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/form_email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  117 => 42,  115 => 41,  106 => 39,  104 => 38,  97 => 36,  95 => 35,  92 => 33,  85 => 30,  82 => 28,  75 => 26,  73 => 25,  69 => 23,  66 => 22,  62 => 21,  56 => 17,  52 => 16,  44 => 12,  33 => 10,  31 => 9,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">*/
/* <html>*/
/* <head>*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/*   <title>{{ title }}</title>*/
/* </head>*/
/* <body style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;">*/
/* <div style="width: 680px;">*/
/*   {% if logo %}*/
/*   <a href="{{ store_url }}" title="{{ store_name }}"><img src="{{ logo }}" alt="{{ store_name }}" style="margin-bottom: 20px; border: none;"/></a>*/
/*   {% endif %}*/
/*   <p style="margin-top: 0px; margin-bottom: 20px;">{{ data.sentEmailTitle }}</p>*/
/*   <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <thead>*/
/*     <tr>*/
/*       <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ data.sentEmailField }}</td>*/
/*       <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ data.sentEmailValue }}</td>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for item in data.items %}*/
/*       <tr>*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;"><b>{{ item.label }}:</b></td>*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">*/
/*           {% if item.type == 'file' %}*/
/*             <a href="{{ item.url }}">{{ item.value }}</a>*/
/*           {% else %}*/
/*             {{ item.value is iterable ? item.value|join(', ') : item.value }}*/
/*           {% endif %}*/
/*         </td>*/
/*       </tr>*/
/*     {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/*   {% if data.title %}*/
/*   <p style="margin-top: 10px; margin-bottom: 20px;">{{ data.sentEmailUsingModule }} <b>{{ data.title }}</b></p>*/
/*   {% endif %}*/
/*   {% if data.url %}*/
/*   <p style="margin-top: 10px; margin-bottom: 20px;">{{ data.sentEmailFrom }} <a href="{{ data.url }}">{{ data.url }}</a></p>*/
/*   {% endif %}*/
/*   {% if data.ip %}*/
/*     <p style="margin-top: 10px; margin-bottom: 20px;">{{ data.sentEmailIPAddress }} <b>{{ data.ip }}</b></p>*/
/*   {% endif %}*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
