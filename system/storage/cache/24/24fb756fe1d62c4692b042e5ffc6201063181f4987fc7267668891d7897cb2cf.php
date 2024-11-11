<?php

/* setting/setting.twig */
class __TwigTemplate_deca1852d8135891e25da7399ef0e2ce4e3110bd7ec60069dd1799355d04c42a extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 21
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 28
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_store"]) ? $context["tab_store"] : null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_local"]) ? $context["tab_local"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_mail"]) ? $context["tab_mail"] : null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_server"]) ? $context["tab_server"] : null);
        echo "</a></li>

\t\t\t\t<li><a href=\"#tab-admin-logo-footer\" data-toggle=\"tab\">";
        // line 41
        echo (isset($context["text_admin_extras"]) ? $context["text_admin_extras"] : null);
        echo "</a></li>
\t\t\t\t
\t\t\t
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 48
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 50
        echo (isset($context["config_meta_title"]) ? $context["config_meta_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />";
        // line 51
        if ((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null)) {
            // line 52
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_meta_title"]) ? $context["error_meta_title"] : null);
            echo "</div>";
        }
        // line 53
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 56
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 58
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo (isset($context["config_meta_description"]) ? $context["config_meta_description"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 62
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 64
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo (isset($context["config_meta_keyword"]) ? $context["config_meta_keyword"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 68
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 73
            if (($this->getAttribute($context["theme"], "value", array()) == (isset($context["config_theme"]) ? $context["config_theme"] : null))) {
                // line 74
                echo "                    
                    <option value=\"";
                // line 75
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>";
            } else {
                // line 78
                echo "                    
                    <option value=\"";
                // line 79
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 89
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 94
            if (($this->getAttribute($context["layout"], "layout_id", array()) == (isset($context["config_layout_id"]) ? $context["config_layout_id"] : null))) {
                // line 95
                echo "                    
                    <option value=\"";
                // line 96
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>";
            } else {
                // line 99
                echo "                    
                    <option value=\"";
                // line 100
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 111
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 113
        echo (isset($context["config_name"]) ? $context["config_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />";
        // line 114
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 115
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>";
        }
        // line 116
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 119
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 121
        echo (isset($context["config_owner"]) ? $context["config_owner"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "\" id=\"input-owner\" class=\"form-control\" />";
        // line 122
        if ((isset($context["error_owner"]) ? $context["error_owner"] : null)) {
            // line 123
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_owner"]) ? $context["error_owner"] : null);
            echo "</div>";
        }
        // line 124
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 127
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 129
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo (isset($context["config_address"]) ? $context["config_address"] : null);
        echo "</textarea>";
        // line 130
        if ((isset($context["error_address"]) ? $context["error_address"] : null)) {
            // line 131
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_address"]) ? $context["error_address"] : null);
            echo "</div>";
        }
        // line 132
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 135
        echo (isset($context["help_geocode"]) ? $context["help_geocode"] : null);
        echo "\">";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 137
        echo (isset($context["config_geocode"]) ? $context["config_geocode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 141
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 143
        echo (isset($context["config_email"]) ? $context["config_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />";
        // line 144
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 145
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>";
        }
        // line 146
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 149
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 151
        echo (isset($context["config_telephone"]) ? $context["config_telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />";
        // line 152
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 153
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>";
        }
        // line 154
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 157
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 159
        echo (isset($context["config_fax"]) ? $context["config_fax"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 163
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 164
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 165
        echo (isset($context["config_image"]) ? $context["config_image"] : null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 169
        echo (isset($context["help_open"]) ? $context["help_open"] : null);
        echo "\">";
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 171
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo (isset($context["config_open"]) ? $context["config_open"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 175
        echo (isset($context["help_comment"]) ? $context["help_comment"] : null);
        echo "\">";
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 177
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo (isset($context["config_comment"]) ? $context["config_comment"] : null);
        echo "</textarea>
                </div>
              </div>";
        // line 180
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 181
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 182
            echo (isset($context["help_location"]) ? $context["help_location"] : null);
            echo "\">";
            echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 184
                echo "                  <div class=\"checkbox\">
                    <label>";
                // line 185
                if (twig_in_filter($this->getAttribute($context["location"], "location_id", array()), (isset($context["config_location"]) ? $context["config_location"] : null))) {
                    // line 186
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" checked=\"checked\" />";
                    // line 187
                    echo $this->getAttribute($context["location"], "name", array());
                } else {
                    // line 189
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" />";
                    // line 190
                    echo $this->getAttribute($context["location"], "name", array());
                }
                // line 191
                echo " </label>
                  </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo " </div>
              </div>";
        }
        // line 195
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">

            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 199
        echo (isset($context["entry_timezone"]) ? $context["entry_timezone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timezones"]) ? $context["timezones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 203
            if (($context["timezone"] == (isset($context["config_timezone"]) ? $context["config_timezone"] : null))) {
                // line 204
                echo "                    
                    <option value=\"";
                // line 205
                echo $context["timezone"];
                echo "\" selected=\"selected\">";
                echo $context["timezone"];
                echo "</option>";
            } else {
                // line 208
                echo "                    
                    <option value=\"";
                // line 209
                echo $context["timezone"];
                echo "\">";
                echo $context["timezone"];
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "                  </select>
                </div>
              </div>
            
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 218
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 223
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["config_country_id"]) ? $context["config_country_id"] : null))) {
                // line 224
                echo "                    
                    <option value=\"";
                // line 225
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>";
            } else {
                // line 228
                echo "                    
                    <option value=\"";
                // line 229
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 238
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 245
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 250
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_language"]) ? $context["config_language"] : null))) {
                // line 251
                echo "                    
                    <option value=\"";
                // line 252
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>";
            } else {
                // line 255
                echo "                    
                    <option value=\"";
                // line 256
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 265
        echo (isset($context["entry_admin_language"]) ? $context["entry_admin_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 270
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_admin_language"]) ? $context["config_admin_language"] : null))) {
                // line 271
                echo "                    
                    <option value=\"";
                // line 272
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>";
            } else {
                // line 275
                echo "                    
                    <option value=\"";
                // line 276
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 285
        echo (isset($context["help_currency"]) ? $context["help_currency"] : null);
        echo "\">";
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 290
            if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["config_currency"]) ? $context["config_currency"] : null))) {
                // line 291
                echo "                    
                    <option value=\"";
                // line 292
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>";
            } else {
                // line 295
                echo "                    
                    <option value=\"";
                // line 296
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 305
        echo (isset($context["help_currency_auto"]) ? $context["help_currency_auto"] : null);
        echo "\">";
        echo (isset($context["entry_currency_auto"]) ? $context["entry_currency_auto"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">";
        // line 307
        if ((isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 308
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />";
            // line 309
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 311
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />";
            // line 312
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 313
        echo " </label>
                  <label class=\"radio-inline\">";
        // line 314
        if ( !(isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 315
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />";
            // line 316
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 318
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />";
            // line 319
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 320
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 324
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 329
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["config_length_class_id"]) ? $context["config_length_class_id"] : null))) {
                // line 330
                echo "                    
                    <option value=\"";
                // line 331
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>";
            } else {
                // line 334
                echo "                    
                    <option value=\"";
                // line 335
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 344
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 349
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["config_weight_class_id"]) ? $context["config_weight_class_id"] : null))) {
                // line 350
                echo "                    
                    <option value=\"";
                // line 351
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>";
            } else {
                // line 354
                echo "                    
                    <option value=\"";
                // line 355
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 359
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 366
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 368
        echo (isset($context["help_product_count"]) ? $context["help_product_count"] : null);
        echo "\">";
        echo (isset($context["entry_product_count"]) ? $context["entry_product_count"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 370
        if ((isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 371
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />";
            // line 372
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 374
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />";
            // line 375
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 376
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 377
        if ( !(isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 378
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />";
            // line 379
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 381
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />";
            // line 382
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 383
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 387
        echo (isset($context["help_limit_admin"]) ? $context["help_limit_admin"] : null);
        echo "\">";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 389
        echo (isset($context["config_limit_admin"]) ? $context["config_limit_admin"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />";
        // line 390
        if ((isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null)) {
            // line 391
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null);
            echo "</div>";
        }
        // line 392
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 396
        echo (isset($context["text_review"]) ? $context["text_review"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 398
        echo (isset($context["help_review"]) ? $context["help_review"] : null);
        echo "\">";
        echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 400
        if ((isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 401
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />";
            // line 402
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 404
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />";
            // line 405
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 406
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 407
        if ( !(isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 408
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />";
            // line 409
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 411
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />";
            // line 412
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 413
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 417
        echo (isset($context["help_review_guest"]) ? $context["help_review_guest"] : null);
        echo "\">";
        echo (isset($context["entry_review_guest"]) ? $context["entry_review_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 419
        if ((isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 420
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />";
            // line 421
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 423
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />";
            // line 424
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 425
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 426
        if ( !(isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 427
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />";
            // line 428
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 430
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />";
            // line 431
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 432
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 437
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 439
        echo (isset($context["help_voucher_min"]) ? $context["help_voucher_min"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 441
        echo (isset($context["config_voucher_min"]) ? $context["config_voucher_min"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />";
        // line 442
        if ((isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null)) {
            // line 443
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null);
            echo "</div>";
        }
        // line 444
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 447
        echo (isset($context["help_voucher_max"]) ? $context["help_voucher_max"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 449
        echo (isset($context["config_voucher_max"]) ? $context["config_voucher_max"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />";
        // line 450
        if ((isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null)) {
            // line 451
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null);
            echo "</div>";
        }
        // line 452
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 456
        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 458
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 460
        if ((isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 461
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />";
            // line 462
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 464
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />";
            // line 465
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 466
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 467
        if ( !(isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 468
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />";
            // line 469
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 471
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />";
            // line 472
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 473
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 477
        echo (isset($context["help_tax_default"]) ? $context["help_tax_default"] : null);
        echo "\">";
        echo (isset($context["entry_tax_default"]) ? $context["entry_tax_default"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 480
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 482
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "shipping")) {
            // line 483
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 484
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>";
        } else {
            // line 487
            echo "                      
                      <option value=\"shipping\">";
            // line 488
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>";
        }
        // line 491
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "payment")) {
            // line 492
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 493
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>";
        } else {
            // line 496
            echo "                      
                      <option value=\"payment\">";
            // line 497
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>";
        }
        // line 500
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 505
        echo (isset($context["help_tax_customer"]) ? $context["help_tax_customer"] : null);
        echo "\">";
        echo (isset($context["entry_tax_customer"]) ? $context["entry_tax_customer"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 508
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 510
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "shipping")) {
            // line 511
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 512
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>";
        } else {
            // line 515
            echo "                      
                      <option value=\"shipping\">";
            // line 516
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>";
        }
        // line 519
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "payment")) {
            // line 520
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 521
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>";
        } else {
            // line 524
            echo "                      
                      <option value=\"payment\">";
            // line 525
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>";
        }
        // line 528
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 534
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 536
        echo (isset($context["help_customer_online"]) ? $context["help_customer_online"] : null);
        echo "\">";
        echo (isset($context["entry_customer_online"]) ? $context["entry_customer_online"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 538
        if ((isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 539
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />";
            // line 540
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 542
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />";
            // line 543
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 544
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 545
        if ( !(isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 546
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />";
            // line 547
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 549
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />";
            // line 550
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 551
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 555
        echo (isset($context["help_customer_activity"]) ? $context["help_customer_activity"] : null);
        echo "\">";
        echo (isset($context["entry_customer_activity"]) ? $context["entry_customer_activity"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 557
        if ((isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 558
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />";
            // line 559
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 561
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />";
            // line 562
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 563
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 564
        if ( !(isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 565
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />";
            // line 566
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 568
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />";
            // line 569
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 570
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 574
        echo (isset($context["entry_customer_search"]) ? $context["entry_customer_search"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 576
        if ((isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 577
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />";
            // line 578
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 580
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />";
            // line 581
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 582
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 583
        if ( !(isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 584
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />";
            // line 585
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 587
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />";
            // line 588
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 589
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 593
        echo (isset($context["help_customer_group"]) ? $context["help_customer_group"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">";
        // line 597
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 598
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_customer_group_id"]) ? $context["config_customer_group_id"] : null))) {
                // line 599
                echo "                      
                      <option value=\"";
                // line 600
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>";
            } else {
                // line 603
                echo "                      
                      <option value=\"";
                // line 604
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 608
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 613
        echo (isset($context["help_customer_group_display"]) ? $context["help_customer_group_display"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group_display"]) ? $context["entry_customer_group_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">";
        // line 614
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 615
            echo "                    <div class=\"checkbox\">
                      <label>";
            // line 616
            if (twig_in_filter($this->getAttribute($context["customer_group"], "customer_group_id", array()), (isset($context["config_customer_group_display"]) ? $context["config_customer_group_display"] : null))) {
                // line 617
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />";
                // line 618
                echo $this->getAttribute($context["customer_group"], "name", array());
            } else {
                // line 620
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />";
                // line 621
                echo $this->getAttribute($context["customer_group"], "name", array());
            }
            // line 622
            echo " </label>
                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 625
        if ((isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null)) {
            // line 626
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null);
            echo "</div>";
        }
        // line 627
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 630
        echo (isset($context["help_customer_price"]) ? $context["help_customer_price"] : null);
        echo "\">";
        echo (isset($context["entry_customer_price"]) ? $context["entry_customer_price"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 632
        if ((isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 633
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />";
            // line 634
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 636
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />";
            // line 637
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 638
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 639
        if ( !(isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 640
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />";
            // line 641
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 643
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />";
            // line 644
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 645
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 649
        echo (isset($context["help_login_attempts"]) ? $context["help_login_attempts"] : null);
        echo "\">";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 651
        echo (isset($context["config_login_attempts"]) ? $context["config_login_attempts"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />";
        // line 652
        if ((isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null)) {
            // line 653
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null);
            echo "</div>";
        }
        // line 654
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 657
        echo (isset($context["help_account"]) ? $context["help_account"] : null);
        echo "\">";
        echo (isset($context["entry_account"]) ? $context["entry_account"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 660
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 662
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 663
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_account_id"]) ? $context["config_account_id"] : null))) {
                // line 664
                echo "                      
                      <option value=\"";
                // line 665
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            } else {
                // line 668
                echo "                      
                      <option value=\"";
                // line 669
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 673
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 679
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 681
        echo (isset($context["help_invoice_prefix"]) ? $context["help_invoice_prefix"] : null);
        echo "\">";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 683
        echo (isset($context["config_invoice_prefix"]) ? $context["config_invoice_prefix"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 687
        echo (isset($context["help_cart_weight"]) ? $context["help_cart_weight"] : null);
        echo "\">";
        echo (isset($context["entry_cart_weight"]) ? $context["entry_cart_weight"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 689
        if ((isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 690
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />";
            // line 691
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 693
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />";
            // line 694
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 695
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 696
        if ( !(isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 697
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />";
            // line 698
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 700
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />";
            // line 701
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 702
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 706
        echo (isset($context["help_checkout_guest"]) ? $context["help_checkout_guest"] : null);
        echo "\">";
        echo (isset($context["entry_checkout_guest"]) ? $context["entry_checkout_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 708
        if ((isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 709
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />";
            // line 710
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 712
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />";
            // line 713
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 714
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 715
        if ( !(isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 716
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />";
            // line 717
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 719
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />";
            // line 720
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 721
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 725
        echo (isset($context["help_checkout"]) ? $context["help_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_checkout"]) ? $context["entry_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 728
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 730
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 731
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_checkout_id"]) ? $context["config_checkout_id"] : null))) {
                // line 732
                echo "                      
                      <option value=\"";
                // line 733
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            } else {
                // line 736
                echo "                      
                      <option value=\"";
                // line 737
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 741
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 746
        echo (isset($context["help_order_status"]) ? $context["help_order_status"] : null);
        echo "\">";
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">";
        // line 750
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 751
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_order_status_id"]) ? $context["config_order_status_id"] : null))) {
                // line 752
                echo "                      
                      <option value=\"";
                // line 753
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 756
                echo "                      
                      <option value=\"";
                // line 757
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 761
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 766
        echo (isset($context["help_processing_status"]) ? $context["help_processing_status"] : null);
        echo "\">";
        echo (isset($context["entry_processing_status"]) ? $context["entry_processing_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 768
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 769
            echo "                      <div class=\"checkbox\">
                        <label>";
            // line 770
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_processing_status"]) ? $context["config_processing_status"] : null))) {
                // line 771
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />";
                // line 772
                echo $this->getAttribute($context["order_status"], "name", array());
            } else {
                // line 774
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />";
                // line 775
                echo $this->getAttribute($context["order_status"], "name", array());
            }
            // line 776
            echo " </label>
                      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 778
        echo " </div>";
        // line 779
        if ((isset($context["error_processing_status"]) ? $context["error_processing_status"] : null)) {
            // line 780
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_processing_status"]) ? $context["error_processing_status"] : null);
            echo "</div>";
        }
        // line 781
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 784
        echo (isset($context["help_complete_status"]) ? $context["help_complete_status"] : null);
        echo "\">";
        echo (isset($context["entry_complete_status"]) ? $context["entry_complete_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 786
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 787
            echo "                      <div class=\"checkbox\">
                        <label>";
            // line 788
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_complete_status"]) ? $context["config_complete_status"] : null))) {
                // line 789
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />";
                // line 790
                echo $this->getAttribute($context["order_status"], "name", array());
            } else {
                // line 792
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />";
                // line 793
                echo $this->getAttribute($context["order_status"], "name", array());
            }
            // line 794
            echo " </label>
                      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 796
        echo " </div>";
        // line 797
        if ((isset($context["error_complete_status"]) ? $context["error_complete_status"] : null)) {
            // line 798
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_complete_status"]) ? $context["error_complete_status"] : null);
            echo "</div>";
        }
        // line 799
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 802
        echo (isset($context["help_fraud_status"]) ? $context["help_fraud_status"] : null);
        echo "\">";
        echo (isset($context["entry_fraud_status"]) ? $context["entry_fraud_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">";
        // line 806
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 807
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_fraud_status_id"]) ? $context["config_fraud_status_id"] : null))) {
                // line 808
                echo "                      
                      <option value=\"";
                // line 809
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            } else {
                // line 812
                echo "                      
                      <option value=\"";
                // line 813
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 817
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 822
        echo (isset($context["help_api"]) ? $context["help_api"] : null);
        echo "\">";
        echo (isset($context["entry_api"]) ? $context["entry_api"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 825
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 827
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apis"]) ? $context["apis"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 828
            if (($this->getAttribute($context["api"], "api_id", array()) == (isset($context["config_api_id"]) ? $context["config_api_id"] : null))) {
                // line 829
                echo "                      
                      <option value=\"";
                // line 830
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>";
            } else {
                // line 833
                echo "                      
                      <option value=\"";
                // line 834
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 838
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 844
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 846
        echo (isset($context["help_stock_display"]) ? $context["help_stock_display"] : null);
        echo "\">";
        echo (isset($context["entry_stock_display"]) ? $context["entry_stock_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 848
        if ((isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 849
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />";
            // line 850
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 852
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />";
            // line 853
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 854
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 855
        if ( !(isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 856
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />";
            // line 857
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 859
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />";
            // line 860
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 861
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 865
        echo (isset($context["help_stock_warning"]) ? $context["help_stock_warning"] : null);
        echo "\">";
        echo (isset($context["entry_stock_warning"]) ? $context["entry_stock_warning"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 867
        if ((isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 868
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />";
            // line 869
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 871
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />";
            // line 872
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 873
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 874
        if ( !(isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 875
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />";
            // line 876
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 878
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />";
            // line 879
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 880
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 884
        echo (isset($context["help_stock_checkout"]) ? $context["help_stock_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_stock_checkout"]) ? $context["entry_stock_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 886
        if ((isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 887
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />";
            // line 888
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 890
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />";
            // line 891
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 892
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 893
        if ( !(isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 894
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />";
            // line 895
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 897
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />";
            // line 898
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 899
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 904
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 906
        echo (isset($context["entry_affiliate_group"]) ? $context["entry_affiliate_group"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">";
        // line 910
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 911
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_affiliate_group_id"]) ? $context["config_affiliate_group_id"] : null))) {
                // line 912
                echo "                      
                      <option value=\"";
                // line 913
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>";
            } else {
                // line 916
                echo "                      
                      <option value=\"";
                // line 917
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 921
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 926
        echo (isset($context["help_affiliate_approval"]) ? $context["help_affiliate_approval"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_approval"]) ? $context["entry_affiliate_approval"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 928
        if ((isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 929
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />";
            // line 930
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 932
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />";
            // line 933
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 934
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 935
        if ( !(isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 936
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />";
            // line 937
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 939
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />";
            // line 940
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 941
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 945
        echo (isset($context["help_affiliate_auto"]) ? $context["help_affiliate_auto"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_auto"]) ? $context["entry_affiliate_auto"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 947
        if ((isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 948
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />";
            // line 949
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 951
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />";
            // line 952
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 953
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 954
        if ( !(isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 955
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />";
            // line 956
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 958
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />";
            // line 959
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 960
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 964
        echo (isset($context["help_affiliate_commission"]) ? $context["help_affiliate_commission"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 966
        echo (isset($context["config_affiliate_commission"]) ? $context["config_affiliate_commission"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 970
        echo (isset($context["help_affiliate"]) ? $context["help_affiliate"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 973
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 975
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 976
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_affiliate_id"]) ? $context["config_affiliate_id"] : null))) {
                // line 977
                echo "                      
                      <option value=\"";
                // line 978
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            } else {
                // line 981
                echo "                      
                      <option value=\"";
                // line 982
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 986
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 992
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 994
        echo (isset($context["help_return"]) ? $context["help_return"] : null);
        echo "\">";
        echo (isset($context["entry_return"]) ? $context["entry_return"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 997
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 999
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1000
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_return_id"]) ? $context["config_return_id"] : null))) {
                // line 1001
                echo "                      
                      <option value=\"";
                // line 1002
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            } else {
                // line 1005
                echo "                      
                      <option value=\"";
                // line 1006
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1010
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1015
        echo (isset($context["help_return_status"]) ? $context["help_return_status"] : null);
        echo "\">";
        echo (isset($context["entry_return_status"]) ? $context["entry_return_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">";
        // line 1019
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_statuses"]) ? $context["return_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1020
            if (($this->getAttribute($context["return_status"], "return_status_id", array()) == (isset($context["config_return_status_id"]) ? $context["config_return_status_id"] : null))) {
                // line 1021
                echo "                      
                      <option value=\"";
                // line 1022
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>";
            } else {
                // line 1025
                echo "                      
                      <option value=\"";
                // line 1026
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1030
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1036
        echo (isset($context["text_captcha"]) ? $context["text_captcha"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1038
        echo (isset($context["help_captcha"]) ? $context["help_captcha"] : null);
        echo "\">";
        echo (isset($context["entry_captcha"]) ? $context["entry_captcha"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1041
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 1043
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captchas"]) ? $context["captchas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1044
            if (($this->getAttribute($context["captcha"], "value", array()) == (isset($context["config_captcha"]) ? $context["config_captcha"] : null))) {
                // line 1045
                echo "                      
                      <option value=\"";
                // line 1046
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>";
            } else {
                // line 1049
                echo "                      
                      <option value=\"";
                // line 1050
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1054
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1059
        echo (isset($context["entry_captcha_page"]) ? $context["entry_captcha_page"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 1061
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captcha_pages"]) ? $context["captcha_pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1062
            echo "                      <div class=\"checkbox\">
                        <label>";
            // line 1063
            if (twig_in_filter($this->getAttribute($context["captcha_page"], "value", array()), (isset($context["config_captcha_page"]) ? $context["config_captcha_page"] : null))) {
                // line 1064
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" checked=\"checked\" />";
                // line 1065
                echo $this->getAttribute($context["captcha_page"], "text", array());
            } else {
                // line 1067
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" />";
                // line 1068
                echo $this->getAttribute($context["captcha_page"], "text", array());
            }
            // line 1069
            echo " </label>
                      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1071
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1078
        echo (isset($context["entry_logo"]) ? $context["entry_logo"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1079
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1080
        echo (isset($context["config_logo"]) ? $context["config_logo"] : null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1084
        echo (isset($context["help_icon"]) ? $context["help_icon"] : null);
        echo "\">";
        echo (isset($context["entry_icon"]) ? $context["entry_icon"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1085
        echo (isset($context["icon"]) ? $context["icon"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1086
        echo (isset($context["config_icon"]) ? $context["config_icon"] : null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1092
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1094
        echo (isset($context["help_mail_engine"]) ? $context["help_mail_engine"] : null);
        echo "\">";
        echo (isset($context["entry_mail_engine"]) ? $context["entry_mail_engine"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">";
        // line 1098
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "mail")) {
            // line 1099
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1100
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>";
        } else {
            // line 1103
            echo "                      
                      <option value=\"mail\">";
            // line 1104
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>";
        }
        // line 1107
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "smtp")) {
            // line 1108
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1109
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>";
        } else {
            // line 1112
            echo "                      
                      <option value=\"smtp\">";
            // line 1113
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>";
        }
        // line 1116
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1121
        echo (isset($context["help_mail_parameter"]) ? $context["help_mail_parameter"] : null);
        echo "\">";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1123
        echo (isset($context["config_mail_parameter"]) ? $context["config_mail_parameter"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1127
        echo (isset($context["help_mail_smtp_hostname"]) ? $context["help_mail_smtp_hostname"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1129
        echo (isset($context["config_mail_smtp_hostname"]) ? $context["config_mail_smtp_hostname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1133
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1135
        echo (isset($context["config_mail_smtp_username"]) ? $context["config_mail_smtp_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1139
        echo (isset($context["help_mail_smtp_password"]) ? $context["help_mail_smtp_password"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1141
        echo (isset($context["config_mail_smtp_password"]) ? $context["config_mail_smtp_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1145
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1147
        echo (isset($context["config_mail_smtp_port"]) ? $context["config_mail_smtp_port"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1151
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1153
        echo (isset($context["config_mail_smtp_timeout"]) ? $context["config_mail_smtp_timeout"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1158
        echo (isset($context["text_mail_alert"]) ? $context["text_mail_alert"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1160
        echo (isset($context["help_mail_alert"]) ? $context["help_mail_alert"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert"]) ? $context["entry_mail_alert"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 1162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mail_alerts"]) ? $context["mail_alerts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1163
            echo "                      <div class=\"checkbox\">
                        <label>";
            // line 1164
            if (twig_in_filter($this->getAttribute($context["mail_alert"], "value", array()), (isset($context["config_mail_alert"]) ? $context["config_mail_alert"] : null))) {
                // line 1165
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" checked=\"checked\" />";
                // line 1166
                echo $this->getAttribute($context["mail_alert"], "text", array());
            } else {
                // line 1168
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" />";
                // line 1169
                echo $this->getAttribute($context["mail_alert"], "text", array());
            }
            // line 1170
            echo " </label>
                      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1172
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1176
        echo (isset($context["help_mail_alert_email"]) ? $context["help_mail_alert_email"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1178
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo (isset($context["config_mail_alert_email"]) ? $context["config_mail_alert_email"] : null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>

            <div class=\"tab-pane\" id=\"tab-admin-logo-footer\">
                <fieldset>
                <legend>";
        // line 1186
        echo (isset($context["text_admin_legend_logo"]) ? $context["text_admin_legend_logo"] : null);
        echo "</legend>
\t\t\t    <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"logo-input-image\">";
        // line 1188
        echo (isset($context["text_logo_img"]) ? $context["text_logo_img"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
\t\t\t\t        <a href=\"\" id=\"logo-thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1190
        echo (isset($context["logo_thumb"]) ? $context["logo_thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["logo_placeholder"]) ? $context["logo_placeholder"] : null);
        echo "\" /></a>
                        <input type=\"hidden\" name=\"config_logo_image\" value=\"";
        // line 1191
        echo (isset($context["config_logo_image"]) ? $context["config_logo_image"] : null);
        echo "\" id=\"logo-input-image\" />
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"logo-input-favicon\">";
        // line 1195
        echo (isset($context["text_logo_favicon"]) ? $context["text_logo_favicon"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
\t\t\t\t        <a href=\"\" id=\"logo-thumb-favicon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1197
        echo (isset($context["logo_thumb_favicon"]) ? $context["logo_thumb_favicon"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["logo_placeholder_favicon"]) ? $context["logo_placeholder_favicon"] : null);
        echo "\" /></a>
                        <input type=\"hidden\" name=\"config_logo_favicon\" value=\"";
        // line 1198
        echo (isset($context["config_logo_favicon"]) ? $context["config_logo_favicon"] : null);
        echo "\" id=\"logo-input-favicon\" />
                    </div>
                </div>
\t\t\t\t<div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-footer-text\">";
        // line 1202
        echo (isset($context["text_footer_text"]) ? $context["text_footer_text"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">\t\t
                      <input type=\"text\" name=\"config_footer_text\" value=\"";
        // line 1204
        echo (isset($context["config_footer_text"]) ? $context["config_footer_text"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_footer_text"]) ? $context["text_footer_text"] : null);
        echo "\" id=\"input-text-footer\" class=\"form-control\" />
\t\t\t        </div>
                </div>
                </fieldset>
                <fieldset>
                <legend>";
        // line 1209
        echo (isset($context["text_admin_legend_timezone"]) ? $context["text_admin_legend_timezone"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 1211
        echo (isset($context["text_admin_timezone"]) ? $context["text_admin_timezone"] : null);
        echo " <small>(";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "date", array()), "H:i:s");
        echo ")</small></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">";
        // line 1214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timezones"]) ? $context["timezones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 1215
            if (($context["timezone"] == (isset($context["config_timezone"]) ? $context["config_timezone"] : null))) {
                // line 1216
                echo "                            <option value=\"";
                echo $context["timezone"];
                echo "\" selected=\"selected\">";
                echo $context["timezone"];
                echo "</option>";
            } else {
                // line 1218
                echo "                            <option value=\"";
                echo $context["timezone"];
                echo "\">";
                echo $context["timezone"];
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1221
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1225
        echo (isset($context["help_admin_date_auth"]) ? $context["help_admin_date_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_date_auth"]) ? $context["text_admin_date_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1227
        if ((isset($context["config_admin_date_auth"]) ? $context["config_admin_date_auth"] : null)) {
            // line 1228
            echo "                      <input type=\"radio\" name=\"config_admin_date_auth\" value=\"1\" checked=\"checked\" />";
            // line 1229
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1231
            echo "                      <input type=\"radio\" name=\"config_admin_date_auth\" value=\"1\" />";
            // line 1232
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1233
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1234
        if ( !(isset($context["config_admin_date_auth"]) ? $context["config_admin_date_auth"] : null)) {
            // line 1235
            echo "                      <input type=\"radio\" name=\"config_admin_date_auth\" value=\"0\" checked=\"checked\" />";
            // line 1236
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1238
            echo "                      <input type=\"radio\" name=\"config_admin_date_auth\" value=\"0\" />";
            // line 1239
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1240
        echo " </label>
                  </div>
                </div>
                </fieldset>
\t\t\t\t<fieldset>
                <legend>";
        // line 1245
        echo (isset($context["text_admin_legend_columnleft"]) ? $context["text_admin_legend_columnleft"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1247
        echo (isset($context["help_admin_columnleft_stats_auth"]) ? $context["help_admin_columnleft_stats_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_columnleft_stats_auth"]) ? $context["text_admin_columnleft_stats_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1249
        if ((isset($context["config_admin_columnleft_stats_auth"]) ? $context["config_admin_columnleft_stats_auth"] : null)) {
            // line 1250
            echo "                      <input type=\"radio\" name=\"config_admin_columnleft_stats_auth\" value=\"1\" checked=\"checked\" />";
            // line 1251
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1253
            echo "                      <input type=\"radio\" name=\"config_admin_columnleft_stats_auth\" value=\"1\" />";
            // line 1254
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1255
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1256
        if ( !(isset($context["config_admin_columnleft_stats_auth"]) ? $context["config_admin_columnleft_stats_auth"] : null)) {
            // line 1257
            echo "                      <input type=\"radio\" name=\"config_admin_columnleft_stats_auth\" value=\"0\" checked=\"checked\" />";
            // line 1258
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1260
            echo "                      <input type=\"radio\" name=\"config_admin_columnleft_stats_auth\" value=\"0\" />";
            // line 1261
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1262
        echo " </label>
                  </div>
                </div>
                </fieldset> 
\t\t\t\t<fieldset>
                <legend>";
        // line 1267
        echo (isset($context["text_admin_legend_translation"]) ? $context["text_admin_legend_translation"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1269
        echo (isset($context["help_admin_translation_auth"]) ? $context["help_admin_translation_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_translation_auth"]) ? $context["text_admin_translation_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1271
        if ((isset($context["config_admin_translation_auth"]) ? $context["config_admin_translation_auth"] : null)) {
            // line 1272
            echo "                      <input type=\"radio\" name=\"config_admin_translation_auth\" value=\"1\" checked=\"checked\" />";
            // line 1273
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1275
            echo "                      <input type=\"radio\" name=\"config_admin_translation_auth\" value=\"1\" />";
            // line 1276
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1277
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1278
        if ( !(isset($context["config_admin_translation_auth"]) ? $context["config_admin_translation_auth"] : null)) {
            // line 1279
            echo "                      <input type=\"radio\" name=\"config_admin_translation_auth\" value=\"0\" checked=\"checked\" />";
            // line 1280
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1282
            echo "                      <input type=\"radio\" name=\"config_admin_translation_auth\" value=\"0\" />";
            // line 1283
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1284
        echo " </label>
                  </div>
                </div>
                </fieldset> 
                <fieldset>
                <legend>";
        // line 1289
        echo (isset($context["text_admin_legend_language"]) ? $context["text_admin_legend_language"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1291
        echo (isset($context["help_admin_language_auth"]) ? $context["help_admin_language_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_language_auth"]) ? $context["text_admin_language_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1293
        if ((isset($context["config_admin_language_auth"]) ? $context["config_admin_language_auth"] : null)) {
            // line 1294
            echo "                      <input type=\"radio\" name=\"config_admin_language_auth\" value=\"1\" checked=\"checked\" />";
            // line 1295
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1297
            echo "                      <input type=\"radio\" name=\"config_admin_language_auth\" value=\"1\" />";
            // line 1298
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1299
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1300
        if ( !(isset($context["config_admin_language_auth"]) ? $context["config_admin_language_auth"] : null)) {
            // line 1301
            echo "                      <input type=\"radio\" name=\"config_admin_language_auth\" value=\"0\" checked=\"checked\" />";
            // line 1302
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1304
            echo "                      <input type=\"radio\" name=\"config_admin_language_auth\" value=\"0\" />";
            // line 1305
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1306
        echo " </label>
                  </div>
                </div>
                </fieldset> 
                <fieldset>
                <legend>";
        // line 1311
        echo (isset($context["text_admin_legend_recaptcha"]) ? $context["text_admin_legend_recaptcha"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1313
        echo (isset($context["help_admin_recaptcha_auth"]) ? $context["help_admin_recaptcha_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_recaptcha_auth"]) ? $context["text_admin_recaptcha_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1315
        if ((isset($context["config_admin_recaptcha_auth"]) ? $context["config_admin_recaptcha_auth"] : null)) {
            // line 1316
            echo "                      <input type=\"radio\" name=\"config_admin_recaptcha_auth\" value=\"1\" checked=\"checked\" />";
            // line 1317
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1319
            echo "                      <input type=\"radio\" name=\"config_admin_recaptcha_auth\" value=\"1\" />";
            // line 1320
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1321
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1322
        if ( !(isset($context["config_admin_recaptcha_auth"]) ? $context["config_admin_recaptcha_auth"] : null)) {
            // line 1323
            echo "                      <input type=\"radio\" name=\"config_admin_recaptcha_auth\" value=\"0\" checked=\"checked\" />";
            // line 1324
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1326
            echo "                      <input type=\"radio\" name=\"config_admin_recaptcha_auth\" value=\"0\" />";
            // line 1327
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1328
        echo " </label>
                  </div>
                </div>
                </fieldset> 
                <fieldset>
                <legend>";
        // line 1333
        echo (isset($context["text_admin_legend_title"]) ? $context["text_admin_legend_title"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1335
        echo (isset($context["help_admin_header_title_auth"]) ? $context["help_admin_header_title_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_header_title_auth"]) ? $context["text_admin_header_title_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1337
        if ((isset($context["config_admin_header_title_auth"]) ? $context["config_admin_header_title_auth"] : null)) {
            // line 1338
            echo "                      <input type=\"radio\" name=\"config_admin_header_title_auth\" value=\"1\" checked=\"checked\" />";
            // line 1339
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1341
            echo "                      <input type=\"radio\" name=\"config_admin_header_title_auth\" value=\"1\" />";
            // line 1342
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1343
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1344
        if ( !(isset($context["config_admin_header_title_auth"]) ? $context["config_admin_header_title_auth"] : null)) {
            // line 1345
            echo "                      <input type=\"radio\" name=\"config_admin_header_title_auth\" value=\"0\" checked=\"checked\" />";
            // line 1346
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1348
            echo "                      <input type=\"radio\" name=\"config_admin_header_title_auth\" value=\"0\" />";
            // line 1349
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1350
        echo " </label>
                  </div>
                </div>
\t\t\t    <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-admin-header-title\"><span data-toggle=\"tooltip\" title=\"";
        // line 1354
        echo (isset($context["help_admin_header_title"]) ? $context["help_admin_header_title"] : null);
        echo "\">";
        echo (isset($context["text_admin_header_title"]) ? $context["text_admin_header_title"] : null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"config_admin_header_title\" value=\"";
        // line 1356
        echo (isset($context["config_admin_header_title"]) ? $context["config_admin_header_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_admin_header_title"]) ? $context["text_admin_header_title"] : null);
        echo "\" id=\"input-admin-header-title\" class=\"form-control\" />
                    </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1360
        echo (isset($context["help_catalog_header_title_auth"]) ? $context["help_catalog_header_title_auth"] : null);
        echo "\">";
        echo (isset($context["text_catalog_header_title_auth"]) ? $context["text_catalog_header_title_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1362
        if ((isset($context["config_catalog_header_title_auth"]) ? $context["config_catalog_header_title_auth"] : null)) {
            // line 1363
            echo "                      <input type=\"radio\" name=\"config_catalog_header_title_auth\" value=\"1\" checked=\"checked\" />";
            // line 1364
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1366
            echo "                      <input type=\"radio\" name=\"config_catalog_header_title_auth\" value=\"1\" />";
            // line 1367
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1368
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1369
        if ( !(isset($context["config_catalog_header_title_auth"]) ? $context["config_catalog_header_title_auth"] : null)) {
            // line 1370
            echo "                      <input type=\"radio\" name=\"config_catalog_header_title_auth\" value=\"0\" checked=\"checked\" />";
            // line 1371
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1373
            echo "                      <input type=\"radio\" name=\"config_catalog_header_title_auth\" value=\"0\" />";
            // line 1374
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1375
        echo " </label>
                  </div>
                </div>
\t\t\t\t<div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-catalog-header-title\"><span data-toggle=\"tooltip\" title=\"";
        // line 1379
        echo (isset($context["help_catalog_header_title"]) ? $context["help_catalog_header_title"] : null);
        echo "\">";
        echo (isset($context["text_catalog_header_title"]) ? $context["text_catalog_header_title"] : null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"config_catalog_header_title\" value=\"";
        // line 1381
        echo (isset($context["config_catalog_header_title"]) ? $context["config_catalog_header_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_catalog_header_title"]) ? $context["text_catalog_header_title"] : null);
        echo "\" id=\"input-catalog-header-title\" class=\"form-control\" />
                    </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1385
        echo (isset($context["help_catalog_header_title_cat_auth"]) ? $context["help_catalog_header_title_cat_auth"] : null);
        echo "\">";
        echo (isset($context["text_catalog_header_title_cat_auth"]) ? $context["text_catalog_header_title_cat_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1387
        if ((isset($context["config_catalog_header_title_cat_auth"]) ? $context["config_catalog_header_title_cat_auth"] : null)) {
            // line 1388
            echo "                      <input type=\"radio\" name=\"config_catalog_header_title_cat_auth\" value=\"1\" checked=\"checked\" />";
            // line 1389
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1391
            echo "                      <input type=\"radio\" name=\"config_catalog_header_title_cat_auth\" value=\"1\" />";
            // line 1392
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1393
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1394
        if ( !(isset($context["config_catalog_header_title_cat_auth"]) ? $context["config_catalog_header_title_cat_auth"] : null)) {
            // line 1395
            echo "                      <input type=\"radio\" name=\"config_catalog_header_title_cat_auth\" value=\"0\" checked=\"checked\" />";
            // line 1396
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1398
            echo "                      <input type=\"radio\" name=\"config_catalog_header_title_cat_auth\" value=\"0\" />";
            // line 1399
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1400
        echo " </label>
                  </div>
                </div>
                </fieldset>

                <!--copypaste disabled-->
                <fieldset>
                <legend>";
        // line 1407
        echo (isset($context["text_admin_legend_copypaste"]) ? $context["text_admin_legend_copypaste"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1409
        echo (isset($context["help_admin_copypaste_auth"]) ? $context["help_admin_copypaste_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_copypaste_auth"]) ? $context["text_admin_copypaste_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1411
        if ((isset($context["config_admin_copypaste_auth"]) ? $context["config_admin_copypaste_auth"] : null)) {
            // line 1412
            echo "                      <input type=\"radio\" name=\"config_admin_copypaste_auth\" value=\"1\" checked=\"checked\" />";
            // line 1413
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1415
            echo "                      <input type=\"radio\" name=\"config_admin_copypaste_auth\" value=\"1\" />";
            // line 1416
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1417
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1418
        if ( !(isset($context["config_admin_copypaste_auth"]) ? $context["config_admin_copypaste_auth"] : null)) {
            // line 1419
            echo "                      <input type=\"radio\" name=\"config_admin_copypaste_auth\" value=\"0\" checked=\"checked\" />";
            // line 1420
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1422
            echo "                      <input type=\"radio\" name=\"config_admin_copypaste_auth\" value=\"0\" />";
            // line 1423
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1424
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1428
        echo (isset($context["help_admin_rightbutton_auth"]) ? $context["help_admin_rightbutton_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_rightbutton_auth"]) ? $context["text_admin_rightbutton_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1430
        if ((isset($context["config_admin_rightbutton_auth"]) ? $context["config_admin_rightbutton_auth"] : null)) {
            // line 1431
            echo "                      <input type=\"radio\" name=\"config_admin_rightbutton_auth\" value=\"1\" checked=\"checked\" />";
            // line 1432
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1434
            echo "                      <input type=\"radio\" name=\"config_admin_rightbutton_auth\" value=\"1\" />";
            // line 1435
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1436
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1437
        if ( !(isset($context["config_admin_rightbutton_auth"]) ? $context["config_admin_rightbutton_auth"] : null)) {
            // line 1438
            echo "                      <input type=\"radio\" name=\"config_admin_rightbutton_auth\" value=\"0\" checked=\"checked\" />";
            // line 1439
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1441
            echo "                      <input type=\"radio\" name=\"config_admin_rightbutton_auth\" value=\"0\" />";
            // line 1442
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1443
        echo " </label>
                  </div>
                </div>
                </fieldset>
                
                <fieldset>
                <legend>";
        // line 1449
        echo (isset($context["text_admin_legend_filemanager"]) ? $context["text_admin_legend_filemanager"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1451
        echo (isset($context["help_admin_filemanager_auth"]) ? $context["help_admin_filemanager_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_filemanager_auth"]) ? $context["text_admin_filemanager_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1453
        if ((isset($context["config_admin_filemanager_auth"]) ? $context["config_admin_filemanager_auth"] : null)) {
            // line 1454
            echo "                      <input type=\"radio\" name=\"config_admin_filemanager_auth\" value=\"1\" checked=\"checked\" />";
            // line 1455
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1457
            echo "                      <input type=\"radio\" name=\"config_admin_filemanager_auth\" value=\"1\" />";
            // line 1458
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1459
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1460
        if ( !(isset($context["config_admin_filemanager_auth"]) ? $context["config_admin_filemanager_auth"] : null)) {
            // line 1461
            echo "                      <input type=\"radio\" name=\"config_admin_filemanager_auth\" value=\"0\" checked=\"checked\" />";
            // line 1462
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1464
            echo "                      <input type=\"radio\" name=\"config_admin_filemanager_auth\" value=\"0\" />";
            // line 1465
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1466
        echo " </label>
                  </div>
                </div>";
        // line 1469
        $context["rpag"] = array();
        // line 1470
        $context["rpag"] = twig_array_merge((isset($context["rpag"]) ? $context["rpag"] : null), array(0 => "default", 1 => "12", 2 => "13", 3 => "14", 4 => "15", 5 => "16", 6 => "17", 7 => "18", 8 => "19", 9 => "20", 10 => "21", 11 => "22", 12 => "23", 13 => "24", 14 => "25", 15 => "26", 16 => "27", 17 => "28", 18 => "29", 19 => "30", 20 => "31", 21 => "32", 22 => "33", 23 => "34", 24 => "35", 25 => "36", 26 => "all"));
        // line 1471
        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1472
        echo (isset($context["help_admin_fmrp_auth"]) ? $context["help_admin_fmrp_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_fmrp_auth"]) ? $context["text_admin_fmrp_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-2\">
                    <select name=\"config_admin_fmrp_auth\" id=\"config_admin_fmrp_auth\" class=\"form-control\">";
        // line 1475
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rpag"]) ? $context["rpag"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1476
            if (((isset($context["config_admin_fmrp_auth"]) ? $context["config_admin_fmrp_auth"] : null) == $context["item"])) {
                // line 1477
                echo "                            <option value=\"";
                echo $context["item"];
                echo "\" selected=\"selected\">";
                echo $context["item"];
                echo "</option>";
            } else {
                // line 1479
                echo "                            <option value=\"";
                echo $context["item"];
                echo "\">";
                echo $context["item"];
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1482
        echo "                    </select>
                  </div>
                </div>";
        // line 1485
        $context["rlinea"] = array();
        // line 1486
        $context["rlinea"] = twig_array_merge((isset($context["rlinea"]) ? $context["rlinea"] : null), array(0 => "default", 1 => "3", 2 => "4", 3 => "6", 4 => "12"));
        // line 1487
        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1488
        echo (isset($context["help_admin_fmrl_auth"]) ? $context["help_admin_fmrl_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_fmrl_auth"]) ? $context["text_admin_fmrl_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-2\">
                    <select name=\"config_admin_fmrl_auth\" id=\"config_admin_fmrl_auth\" class=\"form-control\">";
        // line 1491
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rlinea"]) ? $context["rlinea"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1492
            if (((isset($context["config_admin_fmrl_auth"]) ? $context["config_admin_fmrl_auth"] : null) == $context["item"])) {
                // line 1493
                echo "                            <option value=\"";
                echo $context["item"];
                echo "\" selected=\"selected\">";
                echo $context["item"];
                echo "</option>";
            } else {
                // line 1495
                echo "                            <option value=\"";
                echo $context["item"];
                echo "\">";
                echo $context["item"];
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1498
        echo "                    </select>
                  </div>
                </div>";
        // line 1501
        $context["orderr"] = array();
        // line 1502
        $context["orderr"] = twig_array_merge((isset($context["orderr"]) ? $context["orderr"] : null), array(0 => "default", 1 => "Name Asc", 2 => "Name Desc", 3 => "Date Asc", 4 => "Date Desc"));
        // line 1503
        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1504
        echo (isset($context["help_admin_fmor_auth"]) ? $context["help_admin_fmor_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_fmor_auth"]) ? $context["text_admin_fmor_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-2\">
                    <select name=\"config_admin_fmor_auth\" id=\"config_admin_fmor_auth\" class=\"form-control\">";
        // line 1507
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderr"]) ? $context["orderr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1508
            if (((isset($context["config_admin_fmor_auth"]) ? $context["config_admin_fmor_auth"] : null) == $context["item"])) {
                // line 1509
                echo "                            <option value=\"";
                echo $context["item"];
                echo "\" selected=\"selected\">";
                echo $context["item"];
                echo "</option>";
            } else {
                // line 1511
                echo "                            <option value=\"";
                echo $context["item"];
                echo "\">";
                echo $context["item"];
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1514
        echo "                    </select>
                  </div>
                </div>";
        // line 1517
        $context["ticon"] = array();
        // line 1518
        $context["ticon"] = twig_array_merge((isset($context["ticon"]) ? $context["ticon"] : null), array(0 => "default", 1 => "5em", 2 => "5.5em", 3 => "6em", 4 => "6.5em", 5 => "7em", 6 => "7.5em", 7 => "8em", 8 => "8.5em", 9 => "9em", 10 => "9.5em", 11 => "10em", 12 => "10.5em", 13 => "11em"));
        // line 1519
        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1520
        echo (isset($context["help_admin_ticon_auth"]) ? $context["help_admin_ticon_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_ticon_auth"]) ? $context["text_admin_ticon_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-2\">
                    <select name=\"config_admin_ticon_auth\" id=\"config_admin_ticon_auth\" class=\"form-control\">";
        // line 1523
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ticon"]) ? $context["ticon"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1524
            if (((isset($context["config_admin_ticon_auth"]) ? $context["config_admin_ticon_auth"] : null) == $context["item"])) {
                // line 1525
                echo "                            <option value=\"";
                echo $context["item"];
                echo "\" selected=\"selected\">";
                echo $context["item"];
                echo "</option>";
            } else {
                // line 1527
                echo "                            <option value=\"";
                echo $context["item"];
                echo "\">";
                echo $context["item"];
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1530
        echo "                    </select>
                  </div>
                </div>";
        // line 1533
        $context["tmod"] = array();
        // line 1534
        $context["tmod"] = twig_array_merge((isset($context["tmod"]) ? $context["tmod"] : null), array(0 => "default", 1 => "50%", 2 => "55%", 3 => "60%", 4 => "65%", 5 => "70%", 6 => "75%", 7 => "80%", 8 => "85%", 9 => "90%", 10 => "95%", 11 => "100%"));
        // line 1535
        echo "                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1536
        echo (isset($context["help_admin_tmod_auth"]) ? $context["help_admin_tmod_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_tmod_auth"]) ? $context["text_admin_tmod_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-2\">
                    <select name=\"config_admin_tmod_auth\" id=\"config_admin_tmod_auth\" class=\"form-control\">";
        // line 1539
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tmod"]) ? $context["tmod"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1540
            if (((isset($context["config_admin_tmod_auth"]) ? $context["config_admin_tmod_auth"] : null) == $context["item"])) {
                // line 1541
                echo "                            <option value=\"";
                echo $context["item"];
                echo "\" selected=\"selected\">";
                echo $context["item"];
                echo "</option>";
            } else {
                // line 1543
                echo "                            <option value=\"";
                echo $context["item"];
                echo "\">";
                echo $context["item"];
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1546
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1550
        echo (isset($context["help_admin_fmsn_auth"]) ? $context["help_admin_fmsn_auth"] : null);
        echo "\">";
        echo (isset($context["text_admin_fmsn_auth"]) ? $context["text_admin_fmsn_auth"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1552
        if ((isset($context["config_admin_fmsn_auth"]) ? $context["config_admin_fmsn_auth"] : null)) {
            // line 1553
            echo "                      <input type=\"radio\" name=\"config_admin_fmsn_auth\" value=\"1\" checked=\"checked\" />";
            // line 1554
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1556
            echo "                      <input type=\"radio\" name=\"config_admin_fmsn_auth\" value=\"1\" />";
            // line 1557
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1558
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1559
        if ( !(isset($context["config_admin_fmsn_auth"]) ? $context["config_admin_fmsn_auth"] : null)) {
            // line 1560
            echo "                      <input type=\"radio\" name=\"config_admin_fmsn_auth\" value=\"0\" checked=\"checked\" />";
            // line 1561
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1563
            echo "                      <input type=\"radio\" name=\"config_admin_fmsn_auth\" value=\"0\" />";
            // line 1564
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1565
        echo " </label>
                  </div>
                </div>
                </fieldset>
                
\t\t\t
\t\t\t</div>
\t\t\t
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1575
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1577
        echo (isset($context["help_maintenance"]) ? $context["help_maintenance"] : null);
        echo "\">";
        echo (isset($context["entry_maintenance"]) ? $context["entry_maintenance"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1579
        if ((isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1580
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />";
            // line 1581
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1583
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />";
            // line 1584
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1585
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1586
        if ( !(isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1587
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />";
            // line 1588
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1590
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />";
            // line 1591
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1592
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1596
        echo (isset($context["help_seo_url"]) ? $context["help_seo_url"] : null);
        echo "\">";
        echo (isset($context["entry_seo_url"]) ? $context["entry_seo_url"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1598
        if ((isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1599
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />";
            // line 1600
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1602
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />";
            // line 1603
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1604
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1605
        if ( !(isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1606
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />";
            // line 1607
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1609
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />";
            // line 1610
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1611
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1615
        echo (isset($context["help_robots"]) ? $context["help_robots"] : null);
        echo "\">";
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1617
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo (isset($context["config_robots"]) ? $context["config_robots"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1621
        echo (isset($context["help_compression"]) ? $context["help_compression"] : null);
        echo "\">";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1623
        echo (isset($context["config_compression"]) ? $context["config_compression"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1628
        echo (isset($context["text_security"]) ? $context["text_security"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1630
        echo (isset($context["help_secure"]) ? $context["help_secure"] : null);
        echo "\">";
        echo (isset($context["entry_secure"]) ? $context["entry_secure"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1632
        if ((isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1633
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />";
            // line 1634
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1636
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />";
            // line 1637
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1638
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1639
        if ( !(isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1640
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />";
            // line 1641
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1643
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />";
            // line 1644
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1645
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1649
        echo (isset($context["help_password"]) ? $context["help_password"] : null);
        echo "\">";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1651
        if ((isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1652
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />";
            // line 1653
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1655
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />";
            // line 1656
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1657
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1658
        if ( !(isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1659
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />";
            // line 1660
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1662
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />";
            // line 1663
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1664
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1668
        echo (isset($context["help_shared"]) ? $context["help_shared"] : null);
        echo "\">";
        echo (isset($context["entry_shared"]) ? $context["entry_shared"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1670
        if ((isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1671
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />";
            // line 1672
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1674
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />";
            // line 1675
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1676
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1677
        if ( !(isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1678
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />";
            // line 1679
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1681
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />";
            // line 1682
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1683
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1687
        echo (isset($context["help_encryption"]) ? $context["help_encryption"] : null);
        echo "\">";
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1689
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo (isset($context["config_encryption"]) ? $context["config_encryption"] : null);
        echo "</textarea>";
        // line 1690
        if ((isset($context["error_encryption"]) ? $context["error_encryption"] : null)) {
            // line 1691
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_encryption"]) ? $context["error_encryption"] : null);
            echo "</div>";
        }
        // line 1692
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1696
        echo (isset($context["text_upload"]) ? $context["text_upload"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1698
        echo (isset($context["help_file_max_size"]) ? $context["help_file_max_size"] : null);
        echo "\">";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1700
        echo (isset($context["config_file_max_size"]) ? $context["config_file_max_size"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1704
        echo (isset($context["help_file_ext_allowed"]) ? $context["help_file_ext_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1706
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_ext_allowed"]) ? $context["config_file_ext_allowed"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1710
        echo (isset($context["help_file_mime_allowed"]) ? $context["help_file_mime_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1712
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_mime_allowed"]) ? $context["config_file_mime_allowed"] : null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1717
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1719
        echo (isset($context["entry_error_display"]) ? $context["entry_error_display"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1721
        if ((isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1722
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />";
            // line 1723
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1725
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />";
            // line 1726
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1727
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1728
        if ( !(isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1729
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />";
            // line 1730
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1732
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />";
            // line 1733
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1734
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1738
        echo (isset($context["entry_error_log"]) ? $context["entry_error_log"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">";
        // line 1740
        if ((isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1741
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />";
            // line 1742
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 1744
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />";
            // line 1745
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 1746
        echo " </label>
                    <label class=\"radio-inline\">";
        // line 1747
        if ( !(isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1748
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />";
            // line 1749
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 1751
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />";
            // line 1752
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 1753
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1757
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1759
        echo (isset($context["config_error_filename"]) ? $context["config_error_filename"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />";
        // line 1760
        if ((isset($context["error_log"]) ? $context["error_log"] : null)) {
            // line 1761
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_log"]) ? $context["error_log"] : null);
            echo "</div>";
        }
        // line 1762
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1774
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1796
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1805
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1811
        echo (isset($context["config_zone_id"]) ? $context["config_zone_id"] : null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1818
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>";
        // line 1833
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4025 => 1833,  4008 => 1818,  3998 => 1811,  3989 => 1805,  3977 => 1796,  3952 => 1774,  3938 => 1762,  3933 => 1761,  3931 => 1760,  3926 => 1759,  3921 => 1757,  3915 => 1753,  3912 => 1752,  3910 => 1751,  3907 => 1749,  3905 => 1748,  3903 => 1747,  3900 => 1746,  3897 => 1745,  3895 => 1744,  3892 => 1742,  3890 => 1741,  3888 => 1740,  3883 => 1738,  3877 => 1734,  3874 => 1733,  3872 => 1732,  3869 => 1730,  3867 => 1729,  3865 => 1728,  3862 => 1727,  3859 => 1726,  3857 => 1725,  3854 => 1723,  3852 => 1722,  3850 => 1721,  3845 => 1719,  3840 => 1717,  3830 => 1712,  3823 => 1710,  3814 => 1706,  3807 => 1704,  3798 => 1700,  3791 => 1698,  3786 => 1696,  3780 => 1692,  3775 => 1691,  3773 => 1690,  3768 => 1689,  3761 => 1687,  3755 => 1683,  3752 => 1682,  3750 => 1681,  3747 => 1679,  3745 => 1678,  3743 => 1677,  3740 => 1676,  3737 => 1675,  3735 => 1674,  3732 => 1672,  3730 => 1671,  3728 => 1670,  3721 => 1668,  3715 => 1664,  3712 => 1663,  3710 => 1662,  3707 => 1660,  3705 => 1659,  3703 => 1658,  3700 => 1657,  3697 => 1656,  3695 => 1655,  3692 => 1653,  3690 => 1652,  3688 => 1651,  3681 => 1649,  3675 => 1645,  3672 => 1644,  3670 => 1643,  3667 => 1641,  3665 => 1640,  3663 => 1639,  3660 => 1638,  3657 => 1637,  3655 => 1636,  3652 => 1634,  3650 => 1633,  3648 => 1632,  3641 => 1630,  3636 => 1628,  3626 => 1623,  3619 => 1621,  3610 => 1617,  3603 => 1615,  3597 => 1611,  3594 => 1610,  3592 => 1609,  3589 => 1607,  3587 => 1606,  3585 => 1605,  3582 => 1604,  3579 => 1603,  3577 => 1602,  3574 => 1600,  3572 => 1599,  3570 => 1598,  3563 => 1596,  3557 => 1592,  3554 => 1591,  3552 => 1590,  3549 => 1588,  3547 => 1587,  3545 => 1586,  3542 => 1585,  3539 => 1584,  3537 => 1583,  3534 => 1581,  3532 => 1580,  3530 => 1579,  3523 => 1577,  3518 => 1575,  3506 => 1565,  3503 => 1564,  3501 => 1563,  3498 => 1561,  3496 => 1560,  3494 => 1559,  3491 => 1558,  3488 => 1557,  3486 => 1556,  3483 => 1554,  3481 => 1553,  3479 => 1552,  3472 => 1550,  3466 => 1546,  3455 => 1543,  3448 => 1541,  3446 => 1540,  3442 => 1539,  3435 => 1536,  3432 => 1535,  3430 => 1534,  3428 => 1533,  3424 => 1530,  3413 => 1527,  3406 => 1525,  3404 => 1524,  3400 => 1523,  3393 => 1520,  3390 => 1519,  3388 => 1518,  3386 => 1517,  3382 => 1514,  3371 => 1511,  3364 => 1509,  3362 => 1508,  3358 => 1507,  3351 => 1504,  3348 => 1503,  3346 => 1502,  3344 => 1501,  3340 => 1498,  3329 => 1495,  3322 => 1493,  3320 => 1492,  3316 => 1491,  3309 => 1488,  3306 => 1487,  3304 => 1486,  3302 => 1485,  3298 => 1482,  3287 => 1479,  3280 => 1477,  3278 => 1476,  3274 => 1475,  3267 => 1472,  3264 => 1471,  3262 => 1470,  3260 => 1469,  3256 => 1466,  3253 => 1465,  3251 => 1464,  3248 => 1462,  3246 => 1461,  3244 => 1460,  3241 => 1459,  3238 => 1458,  3236 => 1457,  3233 => 1455,  3231 => 1454,  3229 => 1453,  3222 => 1451,  3217 => 1449,  3209 => 1443,  3206 => 1442,  3204 => 1441,  3201 => 1439,  3199 => 1438,  3197 => 1437,  3194 => 1436,  3191 => 1435,  3189 => 1434,  3186 => 1432,  3184 => 1431,  3182 => 1430,  3175 => 1428,  3169 => 1424,  3166 => 1423,  3164 => 1422,  3161 => 1420,  3159 => 1419,  3157 => 1418,  3154 => 1417,  3151 => 1416,  3149 => 1415,  3146 => 1413,  3144 => 1412,  3142 => 1411,  3135 => 1409,  3130 => 1407,  3121 => 1400,  3118 => 1399,  3116 => 1398,  3113 => 1396,  3111 => 1395,  3109 => 1394,  3106 => 1393,  3103 => 1392,  3101 => 1391,  3098 => 1389,  3096 => 1388,  3094 => 1387,  3087 => 1385,  3078 => 1381,  3071 => 1379,  3065 => 1375,  3062 => 1374,  3060 => 1373,  3057 => 1371,  3055 => 1370,  3053 => 1369,  3050 => 1368,  3047 => 1367,  3045 => 1366,  3042 => 1364,  3040 => 1363,  3038 => 1362,  3031 => 1360,  3022 => 1356,  3015 => 1354,  3009 => 1350,  3006 => 1349,  3004 => 1348,  3001 => 1346,  2999 => 1345,  2997 => 1344,  2994 => 1343,  2991 => 1342,  2989 => 1341,  2986 => 1339,  2984 => 1338,  2982 => 1337,  2975 => 1335,  2970 => 1333,  2963 => 1328,  2960 => 1327,  2958 => 1326,  2955 => 1324,  2953 => 1323,  2951 => 1322,  2948 => 1321,  2945 => 1320,  2943 => 1319,  2940 => 1317,  2938 => 1316,  2936 => 1315,  2929 => 1313,  2924 => 1311,  2917 => 1306,  2914 => 1305,  2912 => 1304,  2909 => 1302,  2907 => 1301,  2905 => 1300,  2902 => 1299,  2899 => 1298,  2897 => 1297,  2894 => 1295,  2892 => 1294,  2890 => 1293,  2883 => 1291,  2878 => 1289,  2871 => 1284,  2868 => 1283,  2866 => 1282,  2863 => 1280,  2861 => 1279,  2859 => 1278,  2856 => 1277,  2853 => 1276,  2851 => 1275,  2848 => 1273,  2846 => 1272,  2844 => 1271,  2837 => 1269,  2832 => 1267,  2825 => 1262,  2822 => 1261,  2820 => 1260,  2817 => 1258,  2815 => 1257,  2813 => 1256,  2810 => 1255,  2807 => 1254,  2805 => 1253,  2802 => 1251,  2800 => 1250,  2798 => 1249,  2791 => 1247,  2786 => 1245,  2779 => 1240,  2776 => 1239,  2774 => 1238,  2771 => 1236,  2769 => 1235,  2767 => 1234,  2764 => 1233,  2761 => 1232,  2759 => 1231,  2756 => 1229,  2754 => 1228,  2752 => 1227,  2745 => 1225,  2739 => 1221,  2728 => 1218,  2721 => 1216,  2719 => 1215,  2715 => 1214,  2708 => 1211,  2703 => 1209,  2693 => 1204,  2688 => 1202,  2681 => 1198,  2675 => 1197,  2670 => 1195,  2663 => 1191,  2657 => 1190,  2652 => 1188,  2647 => 1186,  2634 => 1178,  2627 => 1176,  2621 => 1172,  2614 => 1170,  2611 => 1169,  2607 => 1168,  2604 => 1166,  2600 => 1165,  2598 => 1164,  2595 => 1163,  2591 => 1162,  2584 => 1160,  2579 => 1158,  2569 => 1153,  2564 => 1151,  2555 => 1147,  2550 => 1145,  2541 => 1141,  2534 => 1139,  2525 => 1135,  2520 => 1133,  2511 => 1129,  2504 => 1127,  2495 => 1123,  2488 => 1121,  2481 => 1116,  2477 => 1113,  2474 => 1112,  2470 => 1109,  2467 => 1108,  2465 => 1107,  2461 => 1104,  2458 => 1103,  2454 => 1100,  2451 => 1099,  2449 => 1098,  2442 => 1094,  2437 => 1092,  2428 => 1086,  2422 => 1085,  2416 => 1084,  2409 => 1080,  2403 => 1079,  2399 => 1078,  2390 => 1071,  2383 => 1069,  2380 => 1068,  2376 => 1067,  2373 => 1065,  2369 => 1064,  2367 => 1063,  2364 => 1062,  2360 => 1061,  2355 => 1059,  2348 => 1054,  2338 => 1050,  2335 => 1049,  2329 => 1046,  2326 => 1045,  2324 => 1044,  2320 => 1043,  2317 => 1041,  2309 => 1038,  2304 => 1036,  2296 => 1030,  2286 => 1026,  2283 => 1025,  2277 => 1022,  2274 => 1021,  2272 => 1020,  2268 => 1019,  2261 => 1015,  2254 => 1010,  2244 => 1006,  2241 => 1005,  2235 => 1002,  2232 => 1001,  2230 => 1000,  2226 => 999,  2223 => 997,  2215 => 994,  2210 => 992,  2202 => 986,  2192 => 982,  2189 => 981,  2183 => 978,  2180 => 977,  2178 => 976,  2174 => 975,  2171 => 973,  2163 => 970,  2154 => 966,  2147 => 964,  2141 => 960,  2138 => 959,  2136 => 958,  2133 => 956,  2131 => 955,  2129 => 954,  2126 => 953,  2123 => 952,  2121 => 951,  2118 => 949,  2116 => 948,  2114 => 947,  2107 => 945,  2101 => 941,  2098 => 940,  2096 => 939,  2093 => 937,  2091 => 936,  2089 => 935,  2086 => 934,  2083 => 933,  2081 => 932,  2078 => 930,  2076 => 929,  2074 => 928,  2067 => 926,  2060 => 921,  2050 => 917,  2047 => 916,  2041 => 913,  2038 => 912,  2036 => 911,  2032 => 910,  2027 => 906,  2022 => 904,  2015 => 899,  2012 => 898,  2010 => 897,  2007 => 895,  2005 => 894,  2003 => 893,  2000 => 892,  1997 => 891,  1995 => 890,  1992 => 888,  1990 => 887,  1988 => 886,  1981 => 884,  1975 => 880,  1972 => 879,  1970 => 878,  1967 => 876,  1965 => 875,  1963 => 874,  1960 => 873,  1957 => 872,  1955 => 871,  1952 => 869,  1950 => 868,  1948 => 867,  1941 => 865,  1935 => 861,  1932 => 860,  1930 => 859,  1927 => 857,  1925 => 856,  1923 => 855,  1920 => 854,  1917 => 853,  1915 => 852,  1912 => 850,  1910 => 849,  1908 => 848,  1901 => 846,  1896 => 844,  1888 => 838,  1878 => 834,  1875 => 833,  1869 => 830,  1866 => 829,  1864 => 828,  1860 => 827,  1857 => 825,  1849 => 822,  1842 => 817,  1832 => 813,  1829 => 812,  1823 => 809,  1820 => 808,  1818 => 807,  1814 => 806,  1807 => 802,  1802 => 799,  1797 => 798,  1795 => 797,  1793 => 796,  1786 => 794,  1783 => 793,  1779 => 792,  1776 => 790,  1772 => 789,  1770 => 788,  1767 => 787,  1763 => 786,  1756 => 784,  1751 => 781,  1746 => 780,  1744 => 779,  1742 => 778,  1735 => 776,  1732 => 775,  1728 => 774,  1725 => 772,  1721 => 771,  1719 => 770,  1716 => 769,  1712 => 768,  1705 => 766,  1698 => 761,  1688 => 757,  1685 => 756,  1679 => 753,  1676 => 752,  1674 => 751,  1670 => 750,  1663 => 746,  1656 => 741,  1646 => 737,  1643 => 736,  1637 => 733,  1634 => 732,  1632 => 731,  1628 => 730,  1625 => 728,  1617 => 725,  1611 => 721,  1608 => 720,  1606 => 719,  1603 => 717,  1601 => 716,  1599 => 715,  1596 => 714,  1593 => 713,  1591 => 712,  1588 => 710,  1586 => 709,  1584 => 708,  1577 => 706,  1571 => 702,  1568 => 701,  1566 => 700,  1563 => 698,  1561 => 697,  1559 => 696,  1556 => 695,  1553 => 694,  1551 => 693,  1548 => 691,  1546 => 690,  1544 => 689,  1537 => 687,  1528 => 683,  1521 => 681,  1516 => 679,  1508 => 673,  1498 => 669,  1495 => 668,  1489 => 665,  1486 => 664,  1484 => 663,  1480 => 662,  1477 => 660,  1469 => 657,  1464 => 654,  1459 => 653,  1457 => 652,  1452 => 651,  1445 => 649,  1439 => 645,  1436 => 644,  1434 => 643,  1431 => 641,  1429 => 640,  1427 => 639,  1424 => 638,  1421 => 637,  1419 => 636,  1416 => 634,  1414 => 633,  1412 => 632,  1405 => 630,  1400 => 627,  1395 => 626,  1393 => 625,  1386 => 622,  1383 => 621,  1379 => 620,  1376 => 618,  1372 => 617,  1370 => 616,  1367 => 615,  1363 => 614,  1357 => 613,  1350 => 608,  1340 => 604,  1337 => 603,  1331 => 600,  1328 => 599,  1326 => 598,  1322 => 597,  1315 => 593,  1309 => 589,  1306 => 588,  1304 => 587,  1301 => 585,  1299 => 584,  1297 => 583,  1294 => 582,  1291 => 581,  1289 => 580,  1286 => 578,  1284 => 577,  1282 => 576,  1277 => 574,  1271 => 570,  1268 => 569,  1266 => 568,  1263 => 566,  1261 => 565,  1259 => 564,  1256 => 563,  1253 => 562,  1251 => 561,  1248 => 559,  1246 => 558,  1244 => 557,  1237 => 555,  1231 => 551,  1228 => 550,  1226 => 549,  1223 => 547,  1221 => 546,  1219 => 545,  1216 => 544,  1213 => 543,  1211 => 542,  1208 => 540,  1206 => 539,  1204 => 538,  1197 => 536,  1192 => 534,  1184 => 528,  1180 => 525,  1177 => 524,  1173 => 521,  1170 => 520,  1168 => 519,  1164 => 516,  1161 => 515,  1157 => 512,  1154 => 511,  1152 => 510,  1149 => 508,  1141 => 505,  1134 => 500,  1130 => 497,  1127 => 496,  1123 => 493,  1120 => 492,  1118 => 491,  1114 => 488,  1111 => 487,  1107 => 484,  1104 => 483,  1102 => 482,  1099 => 480,  1091 => 477,  1085 => 473,  1082 => 472,  1080 => 471,  1077 => 469,  1075 => 468,  1073 => 467,  1070 => 466,  1067 => 465,  1065 => 464,  1062 => 462,  1060 => 461,  1058 => 460,  1053 => 458,  1048 => 456,  1042 => 452,  1037 => 451,  1035 => 450,  1030 => 449,  1023 => 447,  1018 => 444,  1013 => 443,  1011 => 442,  1006 => 441,  999 => 439,  994 => 437,  987 => 432,  984 => 431,  982 => 430,  979 => 428,  977 => 427,  975 => 426,  972 => 425,  969 => 424,  967 => 423,  964 => 421,  962 => 420,  960 => 419,  953 => 417,  947 => 413,  944 => 412,  942 => 411,  939 => 409,  937 => 408,  935 => 407,  932 => 406,  929 => 405,  927 => 404,  924 => 402,  922 => 401,  920 => 400,  913 => 398,  908 => 396,  902 => 392,  897 => 391,  895 => 390,  890 => 389,  883 => 387,  877 => 383,  874 => 382,  872 => 381,  869 => 379,  867 => 378,  865 => 377,  862 => 376,  859 => 375,  857 => 374,  854 => 372,  852 => 371,  850 => 370,  843 => 368,  838 => 366,  829 => 359,  819 => 355,  816 => 354,  810 => 351,  807 => 350,  805 => 349,  801 => 348,  796 => 344,  789 => 339,  779 => 335,  776 => 334,  770 => 331,  767 => 330,  765 => 329,  761 => 328,  756 => 324,  750 => 320,  747 => 319,  745 => 318,  742 => 316,  740 => 315,  738 => 314,  735 => 313,  732 => 312,  730 => 311,  727 => 309,  725 => 308,  723 => 307,  716 => 305,  709 => 300,  699 => 296,  696 => 295,  690 => 292,  687 => 291,  685 => 290,  681 => 289,  674 => 285,  667 => 280,  657 => 276,  654 => 275,  648 => 272,  645 => 271,  643 => 270,  639 => 269,  634 => 265,  627 => 260,  617 => 256,  614 => 255,  608 => 252,  605 => 251,  603 => 250,  599 => 249,  594 => 245,  584 => 238,  577 => 233,  567 => 229,  564 => 228,  558 => 225,  555 => 224,  553 => 223,  549 => 222,  544 => 218,  537 => 213,  527 => 209,  524 => 208,  518 => 205,  515 => 204,  513 => 203,  509 => 202,  504 => 199,  498 => 195,  494 => 193,  487 => 191,  484 => 190,  480 => 189,  477 => 187,  473 => 186,  471 => 185,  468 => 184,  464 => 183,  458 => 182,  455 => 181,  453 => 180,  446 => 177,  439 => 175,  430 => 171,  423 => 169,  416 => 165,  410 => 164,  406 => 163,  397 => 159,  392 => 157,  387 => 154,  382 => 153,  380 => 152,  375 => 151,  370 => 149,  365 => 146,  360 => 145,  358 => 144,  353 => 143,  348 => 141,  339 => 137,  332 => 135,  327 => 132,  322 => 131,  320 => 130,  315 => 129,  310 => 127,  305 => 124,  300 => 123,  298 => 122,  293 => 121,  288 => 119,  283 => 116,  278 => 115,  276 => 114,  271 => 113,  266 => 111,  257 => 104,  247 => 100,  244 => 99,  238 => 96,  235 => 95,  233 => 94,  229 => 93,  224 => 89,  216 => 83,  206 => 79,  203 => 78,  197 => 75,  194 => 74,  192 => 73,  188 => 72,  183 => 68,  174 => 64,  169 => 62,  160 => 58,  155 => 56,  150 => 53,  145 => 52,  143 => 51,  138 => 50,  133 => 48,  123 => 41,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  102 => 35,  98 => 34,  94 => 33,  89 => 31,  83 => 28,  79 => 26,  72 => 22,  70 => 21,  63 => 17,  61 => 16,  56 => 13,  46 => 11,  42 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" id="button-save" form="form-setting" data-toggle="tooltip" title="{{ button_save }}" disabled="disabled" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-setting" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-store" data-toggle="tab">{{ tab_store }}</a></li>*/
/*             <li><a href="#tab-local" data-toggle="tab">{{ tab_local }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-mail" data-toggle="tab">{{ tab_mail }}</a></li>*/
/*             <li><a href="#tab-server" data-toggle="tab">{{ tab_server }}</a></li>*/
/* */
/* 				<li><a href="#tab-admin-logo-footer" data-toggle="tab">{{ text_admin_extras }}</a></li>*/
/* 				*/
/* 			*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_meta_title }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_meta_title" value="{{ config_meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title" class="form-control" />*/
/*                   {% if error_meta_title %}*/
/*                   <div class="text-danger">{{ error_meta_title }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-description">{{ entry_meta_description }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_description" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description" class="form-control">{{ config_meta_description }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-keyword">{{ entry_meta_keyword }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_keyword" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword" class="form-control">{{ config_meta_keyword }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-theme">{{ entry_theme }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_theme" id="input-theme" class="form-control">*/
/*                     */
/*                     {% for theme in themes %}*/
/*                     {% if theme.value == config_theme %}*/
/*                     */
/*                     <option value="{{ theme.value }}" selected="selected">{{ theme.text }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ theme.value }}">{{ theme.text }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                   <br />*/
/*                   <img src="" alt="" id="theme" class="img-thumbnail" /></div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-layout">{{ entry_layout }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_layout_id" id="input-layout" class="form-control">*/
/*                     */
/*                     {% for layout in layouts %}*/
/*                     {% if layout.layout_id == config_layout_id %}*/
/*                     */
/*                     <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-store">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_name" value="{{ config_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                   {% if error_name %}*/
/*                   <div class="text-danger">{{ error_name }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-owner">{{ entry_owner }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_owner" value="{{ config_owner }}" placeholder="{{ entry_owner }}" id="input-owner" class="form-control" />*/
/*                   {% if error_owner %}*/
/*                   <div class="text-danger">{{ error_owner }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-address">{{ entry_address }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_address" placeholder="{{ entry_address }}" rows="5" id="input-address" class="form-control">{{ config_address }}</textarea>*/
/*                   {% if error_address %}*/
/*                   <div class="text-danger">{{ error_address }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-geocode"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_geocode }}">{{ entry_geocode }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_geocode" value="{{ config_geocode }}" placeholder="{{ entry_geocode }}" id="input-geocode" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_email" value="{{ config_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                   {% if error_email %}*/
/*                   <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_telephone" value="{{ config_telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                   {% if error_telephone %}*/
/*                   <div class="text-danger">{{ error_telephone }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-fax">{{ entry_fax }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_fax" value="{{ config_fax }}" placeholder="{{ entry_fax }}" id="input-fax" class="form-control" />*/
/*                 </div>*/
/*               </div>              */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-image">{{ entry_image }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_image" value="{{ config_image }}" id="input-image" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-open"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_open }}">{{ entry_open }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_open" rows="5" placeholder="{{ entry_open }}" id="input-open" class="form-control">{{ config_open }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-comment"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_comment }}">{{ entry_comment }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_comment" rows="5" placeholder="{{ entry_comment }}" id="input-comment" class="form-control">{{ config_comment }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               {% if locations %}*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_location }}">{{ entry_location }}</span></label>*/
/*                 <div class="col-sm-10"> {% for location in locations %}*/
/*                   <div class="checkbox">*/
/*                     <label> {% if location.location_id in config_location %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" checked="checked" />*/
/*                       {{ location.name }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" />*/
/*                       {{ location.name }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                   {% endfor %} </div>*/
/*               </div>*/
/*               {% endif %} </div>*/
/*             <div class="tab-pane" id="tab-local">*/
/* */
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-timezone">{{ entry_timezone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_timezone" id="input-timezone" class="form-control">*/
/*                     {% for timezone in timezones %}*/
/*                     {% if timezone  == config_timezone %}*/
/*                     */
/*                     <option value="{{ timezone }}" selected="selected">{{ timezone }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ timezone }}">{{ timezone }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-country">{{ entry_country }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_country_id" id="input-country" class="form-control">*/
/*                     */
/*                     {% for country in countries %}*/
/*                     {% if country.country_id == config_country_id %}*/
/*                     */
/*                     <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-zone">{{ entry_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_zone_id" id="input-zone" class="form-control">*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-language">{{ entry_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_language" id="input-language" class="form-control">*/
/*                     */
/*                     {% for language in languages %}*/
/*                     {% if language.code == config_language %}*/
/*                     */
/*                     <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-admin-language">{{ entry_admin_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_admin_language" id="input-admin-language" class="form-control">*/
/*                     */
/*                     {% for language in languages %}*/
/*                     {% if language.code == config_admin_language %}*/
/*                     */
/*                     <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-currency"><span data-toggle="tooltip" title="{{ help_currency }}">{{ entry_currency }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_currency" id="input-currency" class="form-control">*/
/*                     */
/*                     {% for currency in currencies %}*/
/*                     {% if currency.code == config_currency %}*/
/*                     */
/*                     <option value="{{ currency.code }}" selected="selected">{{ currency.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ currency.code }}">{{ currency.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_currency_auto }}">{{ entry_currency_auto }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline"> {% if config_currency_auto %}*/
/*                     <input type="radio" name="config_currency_auto" value="1" checked="checked" />*/
/*                     {{ text_yes }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_currency_auto" value="1" />*/
/*                     {{ text_yes }}*/
/*                     {% endif %} </label>*/
/*                   <label class="radio-inline"> {% if not config_currency_auto %}*/
/*                     <input type="radio" name="config_currency_auto" value="0" checked="checked" />*/
/*                     {{ text_no }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_currency_auto" value="0" />*/
/*                     {{ text_no }}*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_length_class_id" id="input-length-class" class="form-control">*/
/*                     */
/*                     {% for length_class in length_classes %}*/
/*                     {% if length_class.length_class_id == config_length_class_id %}*/
/*                     */
/*                     <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_weight_class_id" id="input-weight-class" class="form-control">*/
/*                     */
/*                     {% for weight_class in weight_classes %}*/
/*                     {% if weight_class.weight_class_id == config_weight_class_id %}*/
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <fieldset>*/
/*                 <legend>{{ text_product }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_product_count }}">{{ entry_product_count }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_product_count %}*/
/*                       <input type="radio" name="config_product_count" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_product_count" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_product_count %}*/
/*                       <input type="radio" name="config_product_count" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_product_count" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-admin-limit"><span data-toggle="tooltip" title="{{ help_limit_admin }}">{{ entry_limit_admin }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_limit_admin" value="{{ config_limit_admin }}" placeholder="{{ entry_limit_admin }}" id="input-admin-limit" class="form-control" />*/
/*                     {% if error_limit_admin %}*/
/*                     <div class="text-danger">{{ error_limit_admin }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_review }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review }}">{{ entry_review }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_review_status %}*/
/*                       <input type="radio" name="config_review_status" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_status" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_review_status %}*/
/*                       <input type="radio" name="config_review_status" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_status" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review_guest }}">{{ entry_review_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_review_guest %}*/
/*                       <input type="radio" name="config_review_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_review_guest %}*/
/*                       <input type="radio" name="config_review_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_voucher }}</legend>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-min"><span data-toggle="tooltip" title="{{ help_voucher_min }}">{{ entry_voucher_min }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_min" value="{{ config_voucher_min }}" placeholder="{{ entry_voucher_min }}" id="input-voucher-min" class="form-control" />*/
/*                     {% if error_voucher_min %}*/
/*                     <div class="text-danger">{{ error_voucher_min }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-max"><span data-toggle="tooltip" title="{{ help_voucher_max }}">{{ entry_voucher_max }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_max" value="{{ config_voucher_max }}" placeholder="{{ entry_voucher_max }}" id="input-voucher-max" class="form-control" />*/
/*                     {% if error_voucher_max %}*/
/*                     <div class="text-danger">{{ error_voucher_max }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_tax }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_tax }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_tax %}*/
/*                       <input type="radio" name="config_tax" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_tax %}*/
/*                       <input type="radio" name="config_tax" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-default"><span data-toggle="tooltip" title="{{ help_tax_default }}">{{ entry_tax_default }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_default" id="input-tax-default" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% if config_tax_default == 'shipping' %}*/
/*                       */
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_tax_default == 'payment' %}*/
/*                       */
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-customer"><span data-toggle="tooltip" title="{{ help_tax_customer }}">{{ entry_tax_customer }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_customer" id="input-tax-customer" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% if config_tax_customer == 'shipping' %}*/
/*                       */
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_tax_customer == 'payment' %}*/
/*                       */
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_account }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_online }}">{{ entry_customer_online }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_online %}*/
/*                       <input type="radio" name="config_customer_online" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_online" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_online %}*/
/*                       <input type="radio" name="config_customer_online" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_online" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_activity }}">{{ entry_customer_activity }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_activity %}*/
/*                       <input type="radio" name="config_customer_activity" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_activity" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_activity %}*/
/*                       <input type="radio" name="config_customer_activity" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_activity" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_customer_search }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_search %}*/
/*                       <input type="radio" name="config_customer_search" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_search" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_search %}*/
/*                       <input type="radio" name="config_customer_search" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_search" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-customer-group"><span data-toggle="tooltip" title="{{ help_customer_group }}">{{ entry_customer_group }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_customer_group_id" id="input-customer-group" class="form-control">*/
/*                       */
/*                       {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == config_customer_group_id %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_group_display }}">{{ entry_customer_group_display }}</span></label>*/
/*                   <div class="col-sm-10"> {% for customer_group in customer_groups %}*/
/*                     <div class="checkbox">*/
/*                       <label> {% if customer_group.customer_group_id in config_customer_group_display %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*                         {{ customer_group.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" />*/
/*                         {{ customer_group.name }}*/
/*                         {% endif %} </label>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     {% if error_customer_group_display %}*/
/*                     <div class="text-danger">{{ error_customer_group_display }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_price }}">{{ entry_customer_price }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-login-attempts"><span data-toggle="tooltip" title="{{ help_login_attempts }}">{{ entry_login_attempts }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_login_attempts" value="{{ config_login_attempts }}" placeholder="{{ entry_login_attempts }}" id="input-login-attempts" class="form-control" />*/
/*                     {% if error_login_attempts %}*/
/*                     <div class="text-danger">{{ error_login_attempts }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-account"><span data-toggle="tooltip" title="{{ help_account }}">{{ entry_account }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_account_id" id="input-account" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_account_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_checkout }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-invoice-prefix"><span data-toggle="tooltip" title="{{ help_invoice_prefix }}">{{ entry_invoice_prefix }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_invoice_prefix" value="{{ config_invoice_prefix }}" placeholder="{{ entry_invoice_prefix }}" id="input-invoice-prefix" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_cart_weight }}">{{ entry_cart_weight }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_checkout_guest }}">{{ entry_checkout_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-checkout"><span data-toggle="tooltip" title="{{ help_checkout }}">{{ entry_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_checkout_id" id="input-checkout" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_checkout_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-order-status"><span data-toggle="tooltip" title="{{ help_order_status }}">{{ entry_order_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_order_status_id" id="input-order-status" class="form-control">*/
/*                       */
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == config_order_status_id %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-process-status"><span data-toggle="tooltip" title="{{ help_processing_status }}">{{ entry_processing_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if order_status.order_status_id in config_processing_status %}*/
/*                           <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/*                           {{ order_status.name }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" />*/
/*                           {{ order_status.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_processing_status %}*/
/*                     <div class="text-danger">{{ error_processing_status }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-complete-status"><span data-toggle="tooltip" title="{{ help_complete_status }}">{{ entry_complete_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if order_status.order_status_id in config_complete_status %}*/
/*                           <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/*                           {{ order_status.name }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" />*/
/*                           {{ order_status.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_complete_status %}*/
/*                     <div class="text-danger">{{ error_complete_status }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-fraud-status"><span data-toggle="tooltip" title="{{ help_fraud_status }}">{{ entry_fraud_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_fraud_status_id" id="input-fraud-status" class="form-control">*/
/*                       */
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == config_fraud_status_id %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-api"><span data-toggle="tooltip" title="{{ help_api }}">{{ entry_api }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_api_id" id="input-api" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for api in apis %}*/
/*                       {% if api.api_id == config_api_id %}*/
/*                       */
/*                       <option value="{{ api.api_id }}" selected="selected">{{ api.username }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ api.api_id }}">{{ api.username }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_stock }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_display }}">{{ entry_stock_display }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_warning }}">{{ entry_stock_warning }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_warning %}*/
/*                       <input type="radio" name="config_stock_warning" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_warning" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_warning %}*/
/*                       <input type="radio" name="config_stock_warning" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_warning" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_checkout }}">{{ entry_stock_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_affiliate }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-group">{{ entry_affiliate_group }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_group_id" id="input-affiliate-group" class="form-control">*/
/*                       */
/*                       {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == config_affiliate_group_id %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_approval }}">{{ entry_affiliate_approval }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_affiliate_approval %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_affiliate_approval %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_auto }}">{{ entry_affiliate_auto }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_affiliate_auto %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_affiliate_auto %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-commission"><span data-toggle="tooltip" title="{{ help_affiliate_commission }}">{{ entry_affiliate_commission }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_affiliate_commission" value="{{ config_affiliate_commission }}" placeholder="{{ entry_affiliate_commission }}" id="input-affiliate-commission" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate"><span data-toggle="tooltip" title="{{ help_affiliate }}">{{ entry_affiliate }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_id" id="input-affiliate" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_affiliate_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_return }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return"><span data-toggle="tooltip" title="{{ help_return }}">{{ entry_return }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_id" id="input-return" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_return_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return-status"><span data-toggle="tooltip" title="{{ help_return_status }}">{{ entry_return_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_status_id" id="input-return-status" class="form-control">*/
/*                       */
/*                       {% for return_status in return_statuses %}*/
/*                       {% if return_status.return_status_id == config_return_status_id %}*/
/*                       */
/*                       <option value="{{ return_status.return_status_id }}" selected="selected">{{ return_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ return_status.return_status_id }}">{{ return_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_captcha }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_captcha }}">{{ entry_captcha }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_captcha" id="input-captcha" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% for captcha in captchas %}*/
/*                       {% if captcha.value == config_captcha %}*/
/*                       */
/*                       <option value="{{ captcha.value }}" selected="selected">{{ captcha.text }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ captcha.value }}">{{ captcha.text }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_captcha_page }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for captcha_page in captcha_pages %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if captcha_page.value in config_captcha_page %}*/
/*                           <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" checked="checked" />*/
/*                           {{ captcha_page.text }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" />*/
/*                           {{ captcha_page.text }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-logo">{{ entry_logo }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-logo" data-toggle="image" class="img-thumbnail"><img src="{{ logo }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_logo" value="{{ config_logo }}" id="input-logo" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-icon"><span data-toggle="tooltip" title="{{ help_icon }}">{{ entry_icon }}</span></label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-icon" data-toggle="image" class="img-thumbnail"><img src="{{ icon }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_icon" value="{{ config_icon }}" id="input-icon" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-mail">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-engine"><span data-toggle="tooltip" title="{{ help_mail_engine }}">{{ entry_mail_engine }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_mail_engine" id="input-mail-engine" class="form-control">*/
/*                       */
/*                       {% if config_mail_engine == 'mail' %}*/
/*                       */
/*                       <option value="mail" selected="selected">{{ text_mail }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="mail">{{ text_mail }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_mail_engine == 'smtp' %}*/
/*                       */
/*                       <option value="smtp" selected="selected">{{ text_smtp }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="smtp">{{ text_smtp }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-parameter"><span data-toggle="tooltip" title="{{ help_mail_parameter }}">{{ entry_mail_parameter }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_parameter" value="{{ config_mail_parameter }}" placeholder="{{ entry_mail_parameter }}" id="input-mail-parameter" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-hostname"><span data-toggle="tooltip" title="{{ help_mail_smtp_hostname }}">{{ entry_mail_smtp_hostname }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_hostname" value="{{ config_mail_smtp_hostname }}" placeholder="{{ entry_mail_smtp_hostname }}" id="input-mail-smtp-hostname" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-username">{{ entry_mail_smtp_username }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_username" value="{{ config_mail_smtp_username }}" placeholder="{{ entry_mail_smtp_username }}" id="input-mail-smtp-username" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-password"><span data-toggle="tooltip" title="{{ help_mail_smtp_password }}">{{ entry_mail_smtp_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_password" value="{{ config_mail_smtp_password }}" placeholder="{{ entry_mail_smtp_password }}" id="input-mail-smtp-password" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-port">{{ entry_mail_smtp_port }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_port" value="{{ config_mail_smtp_port }}" placeholder="{{ entry_mail_smtp_port }}" id="input-mail-smtp-port" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-timeout">{{ entry_mail_smtp_timeout }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_timeout" value="{{ config_mail_smtp_timeout }}" placeholder="{{ entry_mail_smtp_timeout }}" id="input-mail-smtp-timeout" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_mail_alert }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_mail_alert }}">{{ entry_mail_alert }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for mail_alert in mail_alerts %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if mail_alert.value in config_mail_alert %}*/
/*                           <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" checked="checked" />*/
/*                           {{ mail_alert.text }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" />*/
/*                           {{ mail_alert.text }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-alert-email"><span data-toggle="tooltip" title="{{ help_mail_alert_email }}">{{ entry_mail_alert_email }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_mail_alert_email" rows="5" placeholder="{{ entry_mail_alert_email }}" id="input-alert-email" class="form-control">{{ config_mail_alert_email }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/* */
/*             <div class="tab-pane" id="tab-admin-logo-footer">*/
/*                 <fieldset>*/
/*                 <legend>{{ text_admin_legend_logo }}</legend>*/
/* 			    <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="logo-input-image">{{ text_logo_img }}</label>*/
/*                     <div class="col-sm-10">*/
/* 				        <a href="" id="logo-thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ logo_thumb }}" alt="" title="" data-placeholder="{{ logo_placeholder }}" /></a>*/
/*                         <input type="hidden" name="config_logo_image" value="{{ config_logo_image }}" id="logo-input-image" />*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="logo-input-favicon">{{ text_logo_favicon }}</label>*/
/*                     <div class="col-sm-10">*/
/* 				        <a href="" id="logo-thumb-favicon" data-toggle="image" class="img-thumbnail"><img src="{{ logo_thumb_favicon }}" alt="" title="" data-placeholder="{{ logo_placeholder_favicon }}" /></a>*/
/*                         <input type="hidden" name="config_logo_favicon" value="{{ config_logo_favicon }}" id="logo-input-favicon" />*/
/*                     </div>*/
/*                 </div>*/
/* 				<div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-footer-text">{{ text_footer_text }}</label>*/
/*                     <div class="col-sm-10">		*/
/*                       <input type="text" name="config_footer_text" value="{{ config_footer_text }}" placeholder="{{ text_footer_text }}" id="input-text-footer" class="form-control" />*/
/* 			        </div>*/
/*                 </div>*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                 <legend>{{ text_admin_legend_timezone }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-timezone">{{ text_admin_timezone }} <small>({{ object.date|date('H:i:s') }})</small></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_timezone" id="input-timezone" class="form-control">*/
/*                     {% for timezone in timezones %}*/
/*                         {% if timezone  == config_timezone %}*/
/*                             <option value="{{ timezone }}" selected="selected">{{ timezone }}</option>*/
/*                         {% else %}*/
/*                             <option value="{{ timezone }}">{{ timezone }}</option>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_date_auth }}">{{ text_admin_date_auth }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_admin_date_auth %}*/
/*                       <input type="radio" name="config_admin_date_auth" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_date_auth" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_admin_date_auth %}*/
/*                       <input type="radio" name="config_admin_date_auth" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_date_auth" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 </fieldset>*/
/* 				<fieldset>*/
/*                 <legend>{{ text_admin_legend_columnleft }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_columnleft_stats_auth }}">{{ text_admin_columnleft_stats_auth }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_admin_columnleft_stats_auth %}*/
/*                       <input type="radio" name="config_admin_columnleft_stats_auth" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_columnleft_stats_auth" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_admin_columnleft_stats_auth %}*/
/*                       <input type="radio" name="config_admin_columnleft_stats_auth" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_columnleft_stats_auth" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 </fieldset> */
/* 				<fieldset>*/
/*                 <legend>{{ text_admin_legend_translation }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_translation_auth }}">{{ text_admin_translation_auth }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_admin_translation_auth %}*/
/*                       <input type="radio" name="config_admin_translation_auth" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_translation_auth" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_admin_translation_auth %}*/
/*                       <input type="radio" name="config_admin_translation_auth" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_translation_auth" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 </fieldset> */
/*                 <fieldset>*/
/*                 <legend>{{ text_admin_legend_language }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_language_auth }}">{{ text_admin_language_auth }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_admin_language_auth %}*/
/*                       <input type="radio" name="config_admin_language_auth" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_language_auth" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_admin_language_auth %}*/
/*                       <input type="radio" name="config_admin_language_auth" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_language_auth" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 </fieldset> */
/*                 <fieldset>*/
/*                 <legend>{{ text_admin_legend_recaptcha }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_recaptcha_auth }}">{{ text_admin_recaptcha_auth }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_admin_recaptcha_auth %}*/
/*                       <input type="radio" name="config_admin_recaptcha_auth" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_recaptcha_auth" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_admin_recaptcha_auth %}*/
/*                       <input type="radio" name="config_admin_recaptcha_auth" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_recaptcha_auth" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 </fieldset> */
/*                 <fieldset>*/
/*                 <legend>{{ text_admin_legend_title }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_header_title_auth }}">{{ text_admin_header_title_auth }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_admin_header_title_auth %}*/
/*                       <input type="radio" name="config_admin_header_title_auth" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_header_title_auth" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_admin_header_title_auth %}*/
/*                       <input type="radio" name="config_admin_header_title_auth" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_header_title_auth" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/* 			    <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-admin-header-title"><span data-toggle="tooltip" title="{{ help_admin_header_title }}">{{ text_admin_header_title }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="text" name="config_admin_header_title" value="{{ config_admin_header_title }}" placeholder="{{ text_admin_header_title }}" id="input-admin-header-title" class="form-control" />*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_catalog_header_title_auth }}">{{ text_catalog_header_title_auth }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_catalog_header_title_auth %}*/
/*                       <input type="radio" name="config_catalog_header_title_auth" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_catalog_header_title_auth" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_catalog_header_title_auth %}*/
/*                       <input type="radio" name="config_catalog_header_title_auth" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_catalog_header_title_auth" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/* 				<div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-catalog-header-title"><span data-toggle="tooltip" title="{{ help_catalog_header_title }}">{{ text_catalog_header_title }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="text" name="config_catalog_header_title" value="{{ config_catalog_header_title }}" placeholder="{{ text_catalog_header_title }}" id="input-catalog-header-title" class="form-control" />*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_catalog_header_title_cat_auth }}">{{ text_catalog_header_title_cat_auth }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_catalog_header_title_cat_auth %}*/
/*                       <input type="radio" name="config_catalog_header_title_cat_auth" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_catalog_header_title_cat_auth" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_catalog_header_title_cat_auth %}*/
/*                       <input type="radio" name="config_catalog_header_title_cat_auth" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_catalog_header_title_cat_auth" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 </fieldset>*/
/* */
/*                 <!--copypaste disabled-->*/
/*                 <fieldset>*/
/*                 <legend>{{ text_admin_legend_copypaste }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_copypaste_auth }}">{{ text_admin_copypaste_auth }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_admin_copypaste_auth %}*/
/*                       <input type="radio" name="config_admin_copypaste_auth" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_copypaste_auth" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_admin_copypaste_auth %}*/
/*                       <input type="radio" name="config_admin_copypaste_auth" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_copypaste_auth" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_rightbutton_auth }}">{{ text_admin_rightbutton_auth }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_admin_rightbutton_auth %}*/
/*                       <input type="radio" name="config_admin_rightbutton_auth" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_rightbutton_auth" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_admin_rightbutton_auth %}*/
/*                       <input type="radio" name="config_admin_rightbutton_auth" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_rightbutton_auth" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 </fieldset>*/
/*                 */
/*                 <fieldset>*/
/*                 <legend>{{ text_admin_legend_filemanager }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_filemanager_auth }}">{{ text_admin_filemanager_auth }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_admin_filemanager_auth %}*/
/*                       <input type="radio" name="config_admin_filemanager_auth" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_filemanager_auth" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_admin_filemanager_auth %}*/
/*                       <input type="radio" name="config_admin_filemanager_auth" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_filemanager_auth" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% set rpag = [] %}*/
/*                 {% set rpag = rpag|merge(["default","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","all"]) %}*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_fmrp_auth }}">{{ text_admin_fmrp_auth }}</span></label>*/
/*                   <div class="col-sm-2">*/
/*                     <select name="config_admin_fmrp_auth" id="config_admin_fmrp_auth" class="form-control">*/
/*                         {% for item in rpag %}*/
/*                             {% if config_admin_fmrp_auth == item %}*/
/*                             <option value="{{ item }}" selected="selected">{{ item }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ item }}">{{ item }}</option>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% set rlinea = [] %}*/
/*                 {% set rlinea = rlinea|merge(["default","3","4","6","12"]) %}*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_fmrl_auth }}">{{ text_admin_fmrl_auth }}</span></label>*/
/*                   <div class="col-sm-2">*/
/*                     <select name="config_admin_fmrl_auth" id="config_admin_fmrl_auth" class="form-control">*/
/*                         {% for item in rlinea %}*/
/*                             {% if config_admin_fmrl_auth == item %}*/
/*                             <option value="{{ item }}" selected="selected">{{ item }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ item }}">{{ item }}</option>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% set orderr = [] %}*/
/*                 {% set orderr = orderr|merge(["default","Name Asc","Name Desc","Date Asc","Date Desc"]) %}*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_fmor_auth }}">{{ text_admin_fmor_auth }}</span></label>*/
/*                   <div class="col-sm-2">*/
/*                     <select name="config_admin_fmor_auth" id="config_admin_fmor_auth" class="form-control">*/
/*                         {% for item in orderr %}*/
/*                             {% if config_admin_fmor_auth == item %}*/
/*                             <option value="{{ item }}" selected="selected">{{ item }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ item }}">{{ item }}</option>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% set ticon = [] %}*/
/*                 {% set ticon = ticon|merge(["default","5em","5.5em","6em","6.5em","7em","7.5em","8em","8.5em","9em","9.5em","10em","10.5em","11em"]) %}*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_ticon_auth }}">{{ text_admin_ticon_auth }}</span></label>*/
/*                   <div class="col-sm-2">*/
/*                     <select name="config_admin_ticon_auth" id="config_admin_ticon_auth" class="form-control">*/
/*                         {% for item in ticon %}*/
/*                             {% if config_admin_ticon_auth == item %}*/
/*                             <option value="{{ item }}" selected="selected">{{ item }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ item }}">{{ item }}</option>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% set tmod = [] %}*/
/*                 {% set tmod = tmod|merge(["default","50%","55%","60%","65%","70%","75%","80%","85%","90%","95%","100%"]) %}*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_tmod_auth }}">{{ text_admin_tmod_auth }}</span></label>*/
/*                   <div class="col-sm-2">*/
/*                     <select name="config_admin_tmod_auth" id="config_admin_tmod_auth" class="form-control">*/
/*                         {% for item in tmod %}*/
/*                             {% if config_admin_tmod_auth == item %}*/
/*                             <option value="{{ item }}" selected="selected">{{ item }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ item }}">{{ item }}</option>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_admin_fmsn_auth }}">{{ text_admin_fmsn_auth }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_admin_fmsn_auth %}*/
/*                       <input type="radio" name="config_admin_fmsn_auth" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_fmsn_auth" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_admin_fmsn_auth %}*/
/*                       <input type="radio" name="config_admin_fmsn_auth" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_admin_fmsn_auth" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 </fieldset>*/
/*                 */
/* 			*/
/* 			</div>*/
/* 			*/
/*             <div class="tab-pane" id="tab-server">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_maintenance }}">{{ entry_maintenance }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_maintenance %}*/
/*                       <input type="radio" name="config_maintenance" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_maintenance" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_maintenance %}*/
/*                       <input type="radio" name="config_maintenance" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_maintenance" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_seo_url }}">{{ entry_seo_url }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_seo_url %}*/
/*                       <input type="radio" name="config_seo_url" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_seo_url" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_seo_url %}*/
/*                       <input type="radio" name="config_seo_url" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_seo_url" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-robots"><span data-toggle="tooltip" title="{{ help_robots }}">{{ entry_robots }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_robots" rows="5" placeholder="{{ entry_robots }}" id="input-robots" class="form-control">{{ config_robots }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-compression"><span data-toggle="tooltip" title="{{ help_compression }}">{{ entry_compression }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_compression" value="{{ config_compression }}" placeholder="{{ entry_compression }}" id="input-compression" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_security }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_secure }}">{{ entry_secure }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_secure %}*/
/*                       <input type="radio" name="config_secure" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_secure" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_secure %}*/
/*                       <input type="radio" name="config_secure" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_secure" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_password }}">{{ entry_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_password %}*/
/*                       <input type="radio" name="config_password" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_password" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_password %}*/
/*                       <input type="radio" name="config_password" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_password" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_shared }}">{{ entry_shared }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_shared %}*/
/*                       <input type="radio" name="config_shared" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_shared" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_shared %}*/
/*                       <input type="radio" name="config_shared" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_shared" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-encryption"><span data-toggle="tooltip" title="{{ help_encryption }}">{{ entry_encryption }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_encryption" rows="5" placeholder="{{ entry_encryption }}" id="input-encryption" class="form-control">{{ config_encryption }}</textarea>*/
/*                     {% if error_encryption %}*/
/*                     <div class="text-danger">{{ error_encryption }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_upload }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-max-size"><span data-toggle="tooltip" title="{{ help_file_max_size }}">{{ entry_file_max_size }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_file_max_size" value="{{ config_file_max_size }}" placeholder="{{ entry_file_max_size }}" id="input-file-max-size" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-ext-allowed"><span data-toggle="tooltip" title="{{ help_file_ext_allowed }}">{{ entry_file_ext_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_ext_allowed" rows="5" placeholder="{{ entry_file_ext_allowed }}" id="input-file-ext-allowed" class="form-control">{{ config_file_ext_allowed }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-mime-allowed"><span data-toggle="tooltip" title="{{ help_file_mime_allowed }}">{{ entry_file_mime_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_mime_allowed" rows="5" placeholder="{{ entry_file_mime_allowed }}" id="input-file-mime-allowed" class="form-control">{{ config_file_mime_allowed }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_error }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_display }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_error_display %}*/
/*                       <input type="radio" name="config_error_display" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_display" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_error_display %}*/
/*                       <input type="radio" name="config_error_display" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_display" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_log }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_error_log %}*/
/*                       <input type="radio" name="config_error_log" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_log" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_error_log %}*/
/*                       <input type="radio" name="config_error_log" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_log" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}</label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-error-filename">{{ entry_error_filename }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_error_filename" value="{{ config_error_filename }}" placeholder="{{ entry_error_filename }}" id="input-error-filename" class="form-control" />*/
/*                     {% if error_log %}*/
/*                     <div class="text-danger">{{ error_log }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'config_theme\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=setting/setting/theme&user_token={{ user_token }}&theme=' + this.value,*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('#theme').attr('src', html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_theme\']').trigger('change');*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'config_country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/*           			html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {*/
/*             			html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'config_zone_id\']').html(html);*/
/* 			*/
/* 			$('#button-save').prop('disabled', false);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_country_id\']').trigger('change');*/
/* //--></script></div>*/
/* {{ footer }} */
