<?php

/* customer/customer_list.twig */
class __TwigTemplate_d939f6788b2f7b2919d297d9e3aa5c4cdf5638a104afe7ec796d297c6d1c446d extends Twig_Template
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

\t\t\t\t<style type=\"text/css\">
\t\t\t\t[data-toggle-id] i {
\t\t\t\t\tfont-size: 20px;
\t\t\t\t\tcursor: pointer;
\t\t\t\t}
\t\t\t\t[data-toggle-id] i.disabled::before {
\t\t\t\t\tdisplay: none;
\t\t\t\t}
\t\t\t\t[data-toggle-id] .fa-spinner {
\t\t\t\t\tcolor: #000;
\t\t\t\t}
\t\t\t\t[data-toggle-id] .fa-check-circle {
\t\t\t\t\tcolor: #4cb64c;
\t\t\t\t}
\t\t\t\t[data-toggle-id] .fa-times-circle {
\t\t\t\t\tcolor: #e3503e;
\t\t\t\t}
\t\t\t\t[data-toggle-id] .fa-exclamation-circle {
\t\t\t\t\tcolor: #f3a638;
\t\t\t\t}
\t\t\t\t</style>
\t\t\t
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 29
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-customer').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 30
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 31
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-customer').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 33
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 36
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 41
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 42
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 46
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 47
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 51
        echo "    <div class=\"row\">
      <div id=\"filter-customer\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i>";
        // line 55
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 59
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 60
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-email\">";
        // line 63
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_email\" value=\"";
        // line 64
        echo (isset($context["filter_email"]) ? $context["filter_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer-group\">";
        // line 67
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
              <select name=\"filter_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                <option value=\"\"></option>";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 71
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["filter_customer_group_id"]) ? $context["filter_customer_group_id"] : null))) {
                // line 72
                echo "                <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>";
            } else {
                // line 74
                echo "                <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 80
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>";
        // line 83
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            // line 84
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>";
        } else {
            // line 86
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>";
        }
        // line 88
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 89
            echo "                <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        } else {
            // line 91
            echo "                <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        }
        // line 93
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-ip\">";
        // line 96
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_ip\" value=\"";
        // line 97
        echo (isset($context["filter_ip"]) ? $context["filter_ip"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo "\" id=\"input-ip\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 100
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 102
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i>";
        // line 109
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i>";
        // line 117
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"table-responsive\">
              <form action=\"";
        // line 121
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 126
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            echo "<a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 127
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.email")) {
            echo "<a href=\"";
            echo (isset($context["sort_email"]) ? $context["sort_email"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_email"]) ? $context["column_email"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_email"]) ? $context["sort_email"] : null);
            echo "\">";
            echo (isset($context["column_email"]) ? $context["column_email"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 128
        if (((isset($context["sort"]) ? $context["sort"] : null) == "customer_group")) {
            echo "<a href=\"";
            echo (isset($context["sort_customer_group"]) ? $context["sort_customer_group"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_customer_group"]) ? $context["column_customer_group"] : null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_customer_group"]) ? $context["sort_customer_group"] : null);
            echo "\">";
            echo (isset($context["column_customer_group"]) ? $context["column_customer_group"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 129
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.status")) {
            echo "<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 130
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.ip")) {
            echo "<a href=\"";
            echo (isset($context["sort_ip"]) ? $context["sort_ip"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_ip"]) ? $context["column_ip"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_ip"]) ? $context["sort_ip"] : null);
            echo "\">";
            echo (isset($context["column_ip"]) ? $context["column_ip"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 131
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.date_added")) {
            echo "<a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 132
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 136
        if ((isset($context["customers"]) ? $context["customers"] : null)) {
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 138
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 139
                if (twig_in_filter($this->getAttribute($context["customer"], "customer_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 140
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["customer"], "customer_id", array());
                    echo "\" checked=\"checked\" />";
                } else {
                    // line 142
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["customer"], "customer_id", array());
                    echo "\" />";
                }
                // line 144
                echo "                    </td>
                      <td class=\"text-left\">";
                // line 145
                echo $this->getAttribute($context["customer"], "name", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 146
                echo $this->getAttribute($context["customer"], "email", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 147
                echo $this->getAttribute($context["customer"], "customer_group", array());
                echo "</td>
                    
\t\t\t\t<td class=\"text-center\"><a data-toggle-id=\"";
                // line 149
                echo $this->getAttribute($context["customer"], "customer_id", array());
                echo "\"><i data-loading-text=\"<i class='fa fa-spin fa-spinner'></i>\" class=\"fa fa-";
                if (($this->getAttribute($context["customer"], "status", array()) == (isset($context["text_enabled"]) ? $context["text_enabled"] : null))) {
                    echo "check";
                } else {
                    echo "times";
                }
                echo "-circle\"></i></a>
\t\t\t</td>
                    <td class=\"text-left\">";
                // line 151
                echo $this->getAttribute($context["customer"], "ip", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 152
                echo $this->getAttribute($context["customer"], "date_added", array());
                echo "</td>
                    <td class=\"text-right\">
                      <div class=\"btn-group\" style=\"min-width: 65px;\">
                        <a href=\"";
                // line 155
                echo $this->getAttribute($context["customer"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                          <li class=\"dropdown-header\">";
                // line 158
                echo (isset($context["text_option"]) ? $context["text_option"] : null);
                echo "</li>";
                // line 159
                if ($this->getAttribute($context["customer"], "unlock", array())) {
                    // line 160
                    echo "                          <li><a href=\"";
                    echo $this->getAttribute($context["customer"], "unlock", array());
                    echo "\"><i class=\"fa fa-unlock\"></i>";
                    echo (isset($context["text_unlock"]) ? $context["text_unlock"] : null);
                    echo "</a></li>";
                } else {
                    // line 162
                    echo "                          <li class=\"disabled\"><a><i class=\"fa fa-unlock\"></i>";
                    echo (isset($context["text_unlock"]) ? $context["text_unlock"] : null);
                    echo "</a></li>";
                }
                // line 164
                echo "                          <li role=\"separator\" class=\"divider\"></li>
                          <li class=\"dropdown-header\">";
                // line 165
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "</li>";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["customer"], "store", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 167
                    echo "                          <li><a href=\"";
                    echo $this->getAttribute($context["store"], "href", array());
                    echo "\" target=\"_blank\"><i class=\"fa fa-lock\"></i>";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</a></li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "                        </ul>
                      </div>
                    </td>
                  </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 175
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 176
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>";
        }
        // line 179
        echo "                    </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 184
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 185
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('.table-responsive').on('shown.bs.dropdown', function (e) {
    var t = \$(this),
      m = \$(e.target).find('.dropdown-menu'),
      tb = t.offset().top + t.height(),
      mb = m.offset().top + m.outerHeight(true),
      d = 20;
    if (t[0].scrollWidth > t.innerWidth()) {
      if (mb + d > tb) {
        t.css('padding-bottom', ((mb + d) - tb));
      }
    } else {
      t.css('overflow', 'visible');
    }
  }).on('hidden.bs.dropdown', function () {
    \$(this).css({'padding-bottom': '', 'overflow': ''});
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#button-filter').on('click', function() {
    url = 'index.php?route=customer/customer&user_token=";
        // line 212
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';
    var filter_name = \$('input[name=\\'filter_name\\']').val();
    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    }
    var filter_email = \$('input[name=\\'filter_email\\']').val();
    if (filter_email) {
      url += '&filter_email=' + encodeURIComponent(filter_email);
    }
    var filter_customer_group_id = \$('select[name=\\'filter_customer_group_id\\']').val();
    if (filter_customer_group_id !== '') {
      url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);
    }
    var filter_status = \$('select[name=\\'filter_status\\']').val();
    if (filter_status !== '') {
      url += '&filter_status=' + encodeURIComponent(filter_status); 
    }
    var filter_ip = \$('input[name=\\'filter_ip\\']').val();
    if (filter_ip) {
      url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }
    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }
    location = url;
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 244
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_name\\']').val(item['label']);
    }
  });
  \$('input[name=\\'filter_email\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 263
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_email=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['email'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_email\\']').val(item['label']);
    }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 282
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
  });
  //--></script>
</div>

\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\$('[data-toggle-id]').on('click', function() {
\t\t\t\t  var element = \$(this);
\t\t\t\t  var i = element.find('i');

\t\t\t\t  \$.ajax({
\t\t\t\t\turl: 'index.php?route=customer/customer/toggle_status&user_token=";
        // line 294
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdata: {
\t\t\t\t\t  customer_id: element.data('toggle-id')
\t\t\t\t\t},
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t  i.button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t  i.button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t  if (json['success']) {
\t\t\t\t\t\ti.toggleClass('fa-check-circle fa-times-circle');
\t\t\t\t\t  } else {
\t\t\t\t\t\ti.addClass('fa-exclamation-circle');
\t\t\t\t\t  }
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t  console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t  });
\t\t\t\t});
\t\t\t\t//--></script>";
        // line 320
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customer/customer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  666 => 320,  639 => 294,  624 => 282,  602 => 263,  580 => 244,  545 => 212,  515 => 185,  511 => 184,  504 => 179,  499 => 176,  496 => 175,  486 => 169,  476 => 167,  472 => 166,  469 => 165,  466 => 164,  461 => 162,  454 => 160,  452 => 159,  449 => 158,  441 => 155,  435 => 152,  431 => 151,  420 => 149,  415 => 147,  411 => 146,  407 => 145,  404 => 144,  399 => 142,  394 => 140,  392 => 139,  389 => 138,  385 => 137,  383 => 136,  377 => 132,  359 => 131,  341 => 130,  323 => 129,  305 => 128,  287 => 127,  269 => 126,  261 => 121,  254 => 117,  243 => 109,  231 => 102,  226 => 100,  218 => 97,  214 => 96,  209 => 93,  204 => 91,  199 => 89,  197 => 88,  192 => 86,  187 => 84,  185 => 83,  180 => 80,  175 => 77,  164 => 74,  157 => 72,  155 => 71,  151 => 70,  146 => 67,  138 => 64,  134 => 63,  126 => 60,  122 => 59,  115 => 55,  109 => 51,  102 => 47,  100 => 46,  93 => 42,  91 => 41,  86 => 38,  76 => 36,  72 => 35,  68 => 33,  61 => 31,  55 => 30,  51 => 29,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* */
/* 				<style type="text/css">*/
/* 				[data-toggle-id] i {*/
/* 					font-size: 20px;*/
/* 					cursor: pointer;*/
/* 				}*/
/* 				[data-toggle-id] i.disabled::before {*/
/* 					display: none;*/
/* 				}*/
/* 				[data-toggle-id] .fa-spinner {*/
/* 					color: #000;*/
/* 				}*/
/* 				[data-toggle-id] .fa-check-circle {*/
/* 					color: #4cb64c;*/
/* 				}*/
/* 				[data-toggle-id] .fa-times-circle {*/
/* 					color: #e3503e;*/
/* 				}*/
/* 				[data-toggle-id] .fa-exclamation-circle {*/
/* 					color: #f3a638;*/
/* 				}*/
/* 				</style>*/
/* 			*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-customer').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-customer').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">{% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*       <div id="filter-customer" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*               <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-email">{{ entry_email }}</label>*/
/*               <input type="text" name="filter_email" value="{{ filter_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-customer-group">{{ entry_customer_group }}</label>*/
/*               <select name="filter_customer_group_id" id="input-customer-group" class="form-control">*/
/*                 <option value=""></option>*/
/*                 {% for customer_group in customer_groups %}*/
/*                 {% if customer_group.customer_group_id == filter_customer_group_id %}*/
/*                 <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*               <select name="filter_status" id="input-status" class="form-control">*/
/*                 <option value=""></option>*/
/*                 {% if filter_status == '1' %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 {% endif %}*/
/*                 {% if filter_status == '0' %}*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-ip">{{ entry_ip }}</label>*/
/*               <input type="text" name="filter_ip" value="{{ filter_ip }}" placeholder="{{ entry_ip }}" id="input-ip" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-date-added">{{ entry_date_added }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="table-responsive">*/
/*               <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-customer">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                       <td class="text-left">{% if sort == 'name' %}<a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>{% else %}<a href="{{ sort_name }}">{{ column_name }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'c.email' %}<a href="{{ sort_email }}" class="{{ order|lower }}">{{ column_email }}</a>{% else %}<a href="{{ sort_email }}">{{ column_email }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'customer_group' %}<a href="{{ sort_customer_group }}" class="{{ order|lower }}">{{ column_customer_group }}</a> {% else %} <a href="{{ sort_customer_group }}">{{ column_customer_group }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'c.status' %}<a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>{% else %}<a href="{{ sort_status }}">{{ column_status }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'c.ip' %}<a href="{{ sort_ip }}" class="{{ order|lower }}">{{ column_ip }}</a>{% else %}<a href="{{ sort_ip }}">{{ column_ip }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'c.date_added' %}<a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a>{% else %}<a href="{{ sort_date_added }}">{{ column_date_added }}</a>{% endif %}</td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% if customers %}*/
/*                   {% for customer in customers %}*/
/*                   <tr>*/
/*                     <td class="text-center">{% if customer.customer_id in selected %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ customer.customer_id }}" checked="checked" />*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ customer.customer_id }}" />*/
/*                       {% endif %}*/
/*                     </td>*/
/*                       <td class="text-left">{{ customer.name }}</td>*/
/*                     <td class="text-left">{{ customer.email }}</td>*/
/*                     <td class="text-left">{{ customer.customer_group }}</td>*/
/*                     */
/* 				<td class="text-center"><a data-toggle-id="{{ customer.customer_id }}"><i data-loading-text="<i class='fa fa-spin fa-spinner'></i>" class="fa fa-{% if customer.status == text_enabled %}check{% else %}times{% endif %}-circle"></i></a>*/
/* 			</td>*/
/*                     <td class="text-left">{{ customer.ip }}</td>*/
/*                     <td class="text-left">{{ customer.date_added }}</td>*/
/*                     <td class="text-right">*/
/*                       <div class="btn-group" style="min-width: 65px;">*/
/*                         <a href="{{ customer.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                         <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>*/
/*                         <ul class="dropdown-menu dropdown-menu-right">*/
/*                           <li class="dropdown-header">{{ text_option }}</li>*/
/*                           {% if customer.unlock %}*/
/*                           <li><a href="{{ customer.unlock }}"><i class="fa fa-unlock"></i> {{ text_unlock }}</a></li>*/
/*                           {% else %}*/
/*                           <li class="disabled"><a><i class="fa fa-unlock"></i> {{ text_unlock }}</a></li>*/
/*                           {% endif %}*/
/*                           <li role="separator" class="divider"></li>*/
/*                           <li class="dropdown-header">{{ text_login }}</li>*/
/*                           {% for store in customer.store %}*/
/*                           <li><a href="{{ store.href }}" target="_blank"><i class="fa fa-lock"></i> {{ store.name }}</a></li>*/
/*                           {% endfor %}*/
/*                         </ul>*/
/*                       </div>*/
/*                     </td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                     </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/*   $('.table-responsive').on('shown.bs.dropdown', function (e) {*/
/*     var t = $(this),*/
/*       m = $(e.target).find('.dropdown-menu'),*/
/*       tb = t.offset().top + t.height(),*/
/*       mb = m.offset().top + m.outerHeight(true),*/
/*       d = 20;*/
/*     if (t[0].scrollWidth > t.innerWidth()) {*/
/*       if (mb + d > tb) {*/
/*         t.css('padding-bottom', ((mb + d) - tb));*/
/*       }*/
/*     } else {*/
/*       t.css('overflow', 'visible');*/
/*     }*/
/*   }).on('hidden.bs.dropdown', function () {*/
/*     $(this).css({'padding-bottom': '', 'overflow': ''});*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   $('#button-filter').on('click', function() {*/
/*     url = 'index.php?route=customer/customer&user_token={{ user_token }}';*/
/*     var filter_name = $('input[name=\'filter_name\']').val();*/
/*     if (filter_name) {*/
/*       url += '&filter_name=' + encodeURIComponent(filter_name);*/
/*     }*/
/*     var filter_email = $('input[name=\'filter_email\']').val();*/
/*     if (filter_email) {*/
/*       url += '&filter_email=' + encodeURIComponent(filter_email);*/
/*     }*/
/*     var filter_customer_group_id = $('select[name=\'filter_customer_group_id\']').val();*/
/*     if (filter_customer_group_id !== '') {*/
/*       url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);*/
/*     }*/
/*     var filter_status = $('select[name=\'filter_status\']').val();*/
/*     if (filter_status !== '') {*/
/*       url += '&filter_status=' + encodeURIComponent(filter_status); */
/*     }*/
/*     var filter_ip = $('input[name=\'filter_ip\']').val();*/
/*     if (filter_ip) {*/
/*       url += '&filter_ip=' + encodeURIComponent(filter_ip);*/
/*     }*/
/*     var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/*     if (filter_date_added) {*/
/*       url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/*     }*/
/*     location = url;*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   $('input[name=\'filter_name\']').autocomplete({*/
/*     'source': function(request, response) {*/
/*       $.ajax({*/
/*         url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*         dataType: 'json',*/
/*         success: function(json) {*/
/*           response($.map(json, function(item) {*/
/*             return {*/
/*               label: item['name'],*/
/*               value: item['customer_id']*/
/*             }*/
/*           }));*/
/*         }*/
/*       });*/
/*     },*/
/*     'select': function(item) {*/
/*       $('input[name=\'filter_name\']').val(item['label']);*/
/*     }*/
/*   });*/
/*   $('input[name=\'filter_email\']').autocomplete({*/
/*     'source': function(request, response) {*/
/*       $.ajax({*/
/*         url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_email=' +  encodeURIComponent(request),*/
/*         dataType: 'json',*/
/*         success: function(json) {*/
/*           response($.map(json, function(item) {*/
/*             return {*/
/*               label: item['email'],*/
/*               value: item['customer_id']*/
/*             }*/
/*           }));*/
/*         }*/
/*       });*/
/*     },*/
/*     'select': function(item) {*/
/*       $('input[name=\'filter_email\']').val(item['label']);*/
/*     }*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   $('.date').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickTime: false*/
/*   });*/
/*   //--></script>*/
/* </div>*/
/* */
/* 				<script type="text/javascript"><!--*/
/* 				$('[data-toggle-id]').on('click', function() {*/
/* 				  var element = $(this);*/
/* 				  var i = element.find('i');*/
/* */
/* 				  $.ajax({*/
/* 					url: 'index.php?route=customer/customer/toggle_status&user_token={{ user_token }}',*/
/* 					type: 'post',*/
/* 					data: {*/
/* 					  customer_id: element.data('toggle-id')*/
/* 					},*/
/* 					dataType: 'json',*/
/* 					beforeSend: function() {*/
/* 					  i.button('loading');*/
/* 					},*/
/* 					complete: function() {*/
/* 					  i.button('reset');*/
/* 					},*/
/* 					success: function(json) {*/
/* 					  if (json['success']) {*/
/* 						i.toggleClass('fa-check-circle fa-times-circle');*/
/* 					  } else {*/
/* 						i.addClass('fa-exclamation-circle');*/
/* 					  }*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 					  console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				  });*/
/* 				});*/
/* 				//--></script>*/
/* 			*/
/* {{ footer }}*/
/* */
