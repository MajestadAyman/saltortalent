<?php

/* journal3/template/journal3/blog/post.twig */
class __TwigTemplate_a98b13911b2474cbcb334125ef844c97e5712adbbeca495e8bc2f709da7cf36e extends Twig_Template
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
        echo "
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "  <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "top")) {
            // line 8
            echo "  <h1 class=\"title page-title\"><span>";
            echo (isset($context["post_name"]) ? $context["post_name"] : null);
            echo "</span></h1>
";
        }
        // line 10
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "top"), "method");
        echo "
<div class=\"container blog-post\">
  <div class=\"row\">";
        // line 12
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    <div id=\"content\">
      ";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
            // line 15
            echo "        <h1 class=\"title page-title\">";
            echo (isset($context["post_name"]) ? $context["post_name"] : null);
            echo "</h1>
      ";
        }
        // line 17
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"post-details\">
        <div class=\"post-image\">
          ";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "datePosition"), "method") == "image")) {
            // line 21
            echo "            <span class=\"p-date p-date-image\">";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "blog_date", array(0 => (isset($context["post_date"]) ? $context["post_date"] : null)), "method");
            echo "</span>
          ";
        }
        // line 23
        echo "          <img src=\"";
        echo (isset($context["post_image"]) ? $context["post_image"] : null);
        echo "\" ";
        if ((isset($context["post_image2x"]) ? $context["post_image2x"] : null)) {
            echo " srcset=\"";
            echo (isset($context["post_image"]) ? $context["post_image"] : null);
            echo " 1x, ";
            echo (isset($context["post_image2x"]) ? $context["post_image2x"] : null);
            echo " 2x\" ";
        }
        echo " width=\"";
        echo (isset($context["image_width"]) ? $context["image_width"] : null);
        echo "\" height=\"";
        echo (isset($context["image_height"]) ? $context["image_height"] : null);
        echo "\" alt=\"";
        echo (isset($context["post_name"]) ? $context["post_name"] : null);
        echo "\" title=\"";
        echo (isset($context["post_name"]) ? $context["post_name"] : null);
        echo "\"/>
        </div>
        <div class=\"post-stats\">
          ";
        // line 26
        if ((isset($context["post_author"]) ? $context["post_author"] : null)) {
            // line 27
            echo "            <span class=\"p-posted\">";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "blogPostedByText"), "method");
            echo "</span>
            <span class=\"p-author\">";
            // line 28
            echo (isset($context["post_author"]) ? $context["post_author"] : null);
            echo "</span>
          ";
        }
        // line 30
        echo "          ";
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "datePosition"), "method") == "default")) {
            // line 31
            echo "            <span class=\"p-date p-date-default\">";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "blog_date", array(0 => (isset($context["post_date"]) ? $context["post_date"] : null)), "method");
            echo "</span>
          ";
        }
        // line 33
        echo "          <span class=\"p-comment\">";
        echo twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null));
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "blogCommentsText"), "method");
        echo "</span>
          <span class=\"p-view\">";
        // line 34
        echo (isset($context["post_views"]) ? $context["post_views"] : null);
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "blogViewsText"), "method");
        echo "</span>
          ";
        // line 35
        if ((isset($context["post_categories"]) ? $context["post_categories"] : null)) {
            // line 36
            echo "            <span class=\"p-category\">
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["post_categories"]) ? $context["post_categories"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 38
                echo "            <a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
            ";
                // line 39
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    // line 40
                    echo "            <span>, </span>
          ";
                }
                // line 42
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "          </span>
          ";
        }
        // line 45
        echo "        </div>
        <div class=\"post-content\">
          ";
        // line 47
        echo (isset($context["post_content"]) ? $context["post_content"] : null);
        echo "
        </div>
        ";
        // line 49
        if ((isset($context["post_tags"]) ? $context["post_tags"] : null)) {
            // line 50
            echo "          <div class=\"tags\">
            <span class=\"tags-title\">";
            // line 51
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</span>
            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["post_tags"]) ? $context["post_tags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 53
                echo "              <a href=\"";
                echo $this->getAttribute($context["tag"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "name", array());
                echo "</a><b>,</b>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "          </div>
        ";
        }
        // line 57
        echo "      </div>

      ";
        // line 59
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "

      ";
        // line 61
        if ((isset($context["allow_comments"]) ? $context["allow_comments"] : null)) {
            // line 62
            echo "        <div class=\"post-comments\">
          ";
            // line 63
            if ((twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null)) > 0)) {
                // line 64
                echo "            <h3 class=\"title\">";
                echo twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null));
                echo " ";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "blogCommentsText"), "method");
                echo "</h3>
          ";
            }
            // line 66
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 67
                echo "            <div class=\"post-comment\" data-comment-id=\"";
                echo $this->getAttribute($context["comment"], "comment_id", array());
                echo "\" data-has-form=\"false\">
              <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/";
                // line 68
                echo $this->getAttribute($context["comment"], "avatar", array());
                echo "?s=";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "postCommentImageSize"), "method");
                echo "\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "postCommentImageSize"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "postCommentImageSize"), "method");
                echo "\" alt=\"\">
              <div class=\"comment\">
                <div class=\"user-name\">";
                // line 70
                echo $this->getAttribute($context["comment"], "name", array());
                echo ":</div>
                <div class=\"user-data\">
                  <div>
                    <span class=\"user-date p-date\">";
                // line 73
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "blog_date", array(0 => $this->getAttribute($context["comment"], "date", array())), "method");
                echo "</span>
                    <span class=\"user-time p-time\">";
                // line 74
                echo twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), (isset($context["time_format"]) ? $context["time_format"] : null));
                echo "</span>
                  </div>
                  ";
                // line 76
                if ($this->getAttribute($context["comment"], "website", array())) {
                    // line 77
                    echo "                    <span class=\"user-site p-site\"><a href=\"";
                    echo $this->getAttribute($context["comment"], "website", array());
                    echo "\" target=\"_blank\">";
                    echo $this->getAttribute($context["comment"], "website", array());
                    echo "</a></span>
                  ";
                }
                // line 79
                echo "                </div>
                <a class=\"btn reply-btn\">";
                // line 80
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "blogReplyText"), "method");
                echo "</a>
                <p>";
                // line 81
                echo $this->getAttribute($context["comment"], "comment", array());
                echo "</p>
                ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["comment"], "replies", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                    // line 83
                    echo "                  <div class=\"post-reply\">
                    <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/";
                    // line 84
                    echo $this->getAttribute($context["comment"], "avatar", array());
                    echo "?s=";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "postCommentImageSize"), "method");
                    echo "\" width=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "postCommentImageSize"), "method");
                    echo "\" height=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "postCommentImageSize"), "method");
                    echo "\" alt=\"\">
                    <div class=\"comment\">
                      <div class=\"user-name\">";
                    // line 86
                    echo $this->getAttribute($context["reply"], "name", array());
                    echo ":</div>
                      <div class=\"user-data\">
                        <div>
                          <span class=\"user-date p-date\">";
                    // line 89
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "blog_date", array(0 => $this->getAttribute($context["reply"], "date", array())), "method");
                    echo "</span>
                          <span class=\"user-time p-time\">";
                    // line 90
                    echo twig_date_format_filter($this->env, $this->getAttribute($context["reply"], "date", array()), (isset($context["time_format"]) ? $context["time_format"] : null));
                    echo "</span>
                        </div>
                        ";
                    // line 92
                    if ($this->getAttribute($context["reply"], "website", array())) {
                        // line 93
                        echo "                          <span class=\"user-site p-site\"><a href=\"";
                        echo $this->getAttribute($context["reply"], "website", array());
                        echo "\" target=\"_blank\">";
                        echo $this->getAttribute($context["reply"], "website", array());
                        echo "</a></span>
                        ";
                    }
                    // line 95
                    echo "                      </div>
                      <p>";
                    // line 96
                    echo $this->getAttribute($context["reply"], "comment", array());
                    echo "</p>
                    </div>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "          <div class=\"comment-form\">
            <h3 class=\"title\">";
            // line 104
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "blogLeaveCommentText"), "method");
            echo "</h3>
            <form method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
              <fieldset>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 108
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"name\" value=\"";
            // line 110
            echo (isset($context["default_name"]) ? $context["default_name"] : null);
            echo "\" id=\"input-name\" class=\"form-control\"/>
                  </div>
                </div>

                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-email\">";
            // line 115
            echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"";
            // line 117
            echo (isset($context["default_email"]) ? $context["default_email"] : null);
            echo "\" id=\"input-email\" class=\"form-control\"/>

                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-website\">";
            // line 123
            echo (isset($context["entry_website"]) ? $context["entry_website"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"website\" value=\"";
            // line 125
            echo (isset($context["default_website"]) ? $context["default_website"] : null);
            echo "\" id=\"input-website\" class=\"form-control\"/>
                  </div>
                </div>

                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
            // line 130
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"10\" id=\"input-comment\" class=\"form-control\">";
            // line 132
            echo (isset($context["default_comment"]) ? $context["default_comment"] : null);
            echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <div class=\"buttons\">
                <div class=\"pull-right\">
                  <button type=\"button\" class=\"btn comment-submit\">";
            // line 138
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      ";
        }
        // line 145
        echo "
    </div>
    ";
        // line 147
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
  </div>
  ";
        // line 149
        if ((isset($context["allow_comments"]) ? $context["allow_comments"] : null)) {
            // line 150
            echo "    <script type=\"text/javascript\">
      function generateComment(\$form, cls, \$appendTo, callback) {
        \$form.find('.has-error').removeClass('has-error');

        \$.post('index.php?route=journal3/blog/comment&post_id=";
            // line 154
            echo (isset($context["post_id"]) ? $context["post_id"] : null);
            echo "', \$form.serializeArray(), function (response) {
          if (response.status === 'success') {
            if (response.response.data) {
              var html = '';

              html += '<div class=\"' + cls + '\" data-comment-id=\"' + response.response.data.comment_id + '\" data-has-form=\"false\">';
              html += ' <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/' + response.response.data.avatar + '?s=";
            // line 160
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "postCommentImageSize"), "method");
            echo "\" width=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "postCommentImageSize"), "method");
            echo "\" height=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "postCommentImageSize"), "method");
            echo "\" alt=\"\">';
              html += ' <div class=\"comment\">';
              html += '   <div class=\"user-name\">' + response.response.data.name + ':</div>';
              html += '   <div class=\"user-data\">';
              html += '     <div>';
              html += '       <span class=\"user-date p-date\">' + response.response.data.date + '</span>';
              html += '       <span class=\"user-time p-time\">' + response.response.data.time + '</span>';
              html += '     </div>';
              html += '     <span class=\"user-site p-site\"><a href=\"' + response.response.data.website + '\" target=\"_blank\">' + response.response.data.website + '</a></span>';
              html += '   </div>';

              if (cls === 'post-comment') {
                html += ' <a class=\"btn reply-btn\">";
            // line 172
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "blogReplyText"), "method");
            echo "</a>';
              }

              html += ' <p>' + response.response.data.comment + '</p>';
              html += '</div>';

              \$appendTo.before(html);
            }

            callback && callback(response.response.message);
          }

          if (response.status === 'error') {
            \$.each(response.response.errors, function (field) {
              \$form.find('[name=\"' + field + '\"]').closest('.form-group').addClass('has-error');
            });
          }
        }, 'json');
      }

      \$(document).delegate('.reply-btn', 'click', function () {
        var \$comment = \$(this).closest('.post-comment');

        if (\$comment.attr('data-has-form') === 'false') {
          var \$form = \$('.post-comments form').clone();
          \$form.find('.has-error').removeClass('has-error');
          \$form.append('<input type=\"hidden\" name=\"parent_id\" value=\"' + \$comment.attr('data-comment-id') + '\" />');
          \$form.find('button').removeClass('comment-submit').addClass('reply-submit');
          \$comment.find('> .comment').append('<div class=\"reply-form\"><h3 class=\"title\">' + '";
            // line 200
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "blogLeaveReplyText"), "method");
            echo "' + '</h3><div class=\"comment-form\"><div><form class=\"form-horizontal\">' + \$form.html() + '</form></div></div></div>');
          \$comment.attr('data-has-form', 'true');
        } else {
          \$comment.find('.reply-form').remove();
          \$comment.attr('data-has-form', 'false');
        }
      });

      \$(document).delegate('form .comment-submit', 'click', function () {
        var \$form = \$(this).closest('form');
        var \$comment_form = \$('.comment-form');

        generateComment(\$form, 'post-comment', \$comment_form, function (message) {
          \$comment_form.before('<div class=\"success\">' + message + '</div>');
          setTimeout(function () {
            \$('.post-comments .success').slideUp(400, function () {
              \$(this).remove();
            });
          }, 1500);
          \$form[0].reset();
        });
      });

      \$(document).delegate('form .reply-submit', 'click', function () {
        var \$form = \$(this).closest('form');
        var \$reply_form = \$(this).closest('.post-comment').find('.reply-form');

        generateComment(\$form, 'post-reply', \$reply_form, function (message) {
          \$reply_form.before('<div class=\"success\">' + message + '</div>');
          setTimeout(function () {
            \$('.post-comments .success').slideUp(400, function () {
              \$(this).remove();
            });
          }, 1500);
          \$form.closest('.post-comment').attr('data-has-form', 'false');
          \$reply_form.remove();
        });
      });
    </script>
  ";
        }
        // line 240
        echo "</div>
";
        // line 241
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/blog/post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 241,  568 => 240,  525 => 200,  494 => 172,  475 => 160,  466 => 154,  460 => 150,  458 => 149,  453 => 147,  449 => 145,  439 => 138,  430 => 132,  425 => 130,  417 => 125,  412 => 123,  403 => 117,  398 => 115,  390 => 110,  385 => 108,  378 => 104,  375 => 103,  367 => 100,  357 => 96,  354 => 95,  346 => 93,  344 => 92,  339 => 90,  335 => 89,  329 => 86,  318 => 84,  315 => 83,  311 => 82,  307 => 81,  303 => 80,  300 => 79,  292 => 77,  290 => 76,  285 => 74,  281 => 73,  275 => 70,  264 => 68,  259 => 67,  254 => 66,  246 => 64,  244 => 63,  241 => 62,  239 => 61,  234 => 59,  230 => 57,  226 => 55,  215 => 53,  211 => 52,  207 => 51,  204 => 50,  202 => 49,  197 => 47,  193 => 45,  189 => 43,  175 => 42,  171 => 40,  169 => 39,  162 => 38,  145 => 37,  142 => 36,  140 => 35,  134 => 34,  127 => 33,  121 => 31,  118 => 30,  113 => 28,  108 => 27,  106 => 26,  83 => 23,  77 => 21,  75 => 20,  68 => 17,  62 => 15,  60 => 14,  55 => 12,  50 => 10,  44 => 8,  42 => 7,  39 => 6,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <ul class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %}*/
/*   <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% if j3.settings.get('pageTitlePosition') == 'top' %}*/
/*   <h1 class="title page-title"><span>{{ post_name }}</span></h1>*/
/* {% endif %}*/
/* {{ j3.loadController('journal3/layout', 'top') }}*/
/* <div class="container blog-post">*/
/*   <div class="row">{{ column_left }}*/
/*     <div id="content">*/
/*       {% if j3.settings.get('pageTitlePosition') == 'default' %}*/
/*         <h1 class="title page-title">{{ post_name }}</h1>*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       <div class="post-details">*/
/*         <div class="post-image">*/
/*           {% if j3.settings.get('datePosition') == 'image' %}*/
/*             <span class="p-date p-date-image">{{ j3.blog_date(post_date) }}</span>*/
/*           {% endif %}*/
/*           <img src="{{ post_image }}" {% if post_image2x %} srcset="{{ post_image }} 1x, {{ post_image2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ post_name }}" title="{{ post_name }}"/>*/
/*         </div>*/
/*         <div class="post-stats">*/
/*           {% if post_author %}*/
/*             <span class="p-posted">{{ j3.settings.get('blogPostedByText') }}</span>*/
/*             <span class="p-author">{{ post_author }}</span>*/
/*           {% endif %}*/
/*           {% if j3.settings.get('datePosition') == 'default' %}*/
/*             <span class="p-date p-date-default">{{ j3.blog_date(post_date) }}</span>*/
/*           {% endif %}*/
/*           <span class="p-comment">{{ comments|length }} {{ j3.settings.get('blogCommentsText') }}</span>*/
/*           <span class="p-view">{{ post_views }} {{ j3.settings.get('blogViewsText') }}</span>*/
/*           {% if post_categories %}*/
/*             <span class="p-category">*/
/*           {% for category in post_categories %}*/
/*             <a href="{{ category.href }}">{{ category.name }}</a>*/
/*             {% if not loop.last %}*/
/*             <span>, </span>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*           </span>*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="post-content">*/
/*           {{ post_content }}*/
/*         </div>*/
/*         {% if post_tags %}*/
/*           <div class="tags">*/
/*             <span class="tags-title">{{ text_tags }}</span>*/
/*             {% for tag in post_tags %}*/
/*               <a href="{{ tag.href }}">{{ tag.name }}</a><b>,</b>*/
/*             {% endfor %}*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       {{ content_bottom }}*/
/* */
/*       {% if allow_comments %}*/
/*         <div class="post-comments">*/
/*           {% if comments | length > 0 %}*/
/*             <h3 class="title">{{ comments | length }} {{ j3.settings.get('blogCommentsText') }}</h3>*/
/*           {% endif %}*/
/*           {% for comment in comments %}*/
/*             <div class="post-comment" data-comment-id="{{ comment.comment_id }}" data-has-form="false">*/
/*               <img class="user-avatar" src="https://s.gravatar.com/avatar/{{ comment.avatar }}?s={{ j3.settings.get('postCommentImageSize') }}" width="{{ j3.settings.get('postCommentImageSize') }}" height="{{ j3.settings.get('postCommentImageSize') }}" alt="">*/
/*               <div class="comment">*/
/*                 <div class="user-name">{{ comment.name }}:</div>*/
/*                 <div class="user-data">*/
/*                   <div>*/
/*                     <span class="user-date p-date">{{ j3.blog_date(comment.date) }}</span>*/
/*                     <span class="user-time p-time">{{ comment.date | date(time_format) }}</span>*/
/*                   </div>*/
/*                   {% if comment.website %}*/
/*                     <span class="user-site p-site"><a href="{{ comment.website }}" target="_blank">{{ comment.website }}</a></span>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <a class="btn reply-btn">{{ j3.settings.get('blogReplyText') }}</a>*/
/*                 <p>{{ comment.comment }}</p>*/
/*                 {% for reply in comment.replies %}*/
/*                   <div class="post-reply">*/
/*                     <img class="user-avatar" src="https://s.gravatar.com/avatar/{{ comment.avatar }}?s={{ j3.settings.get('postCommentImageSize') }}" width="{{ j3.settings.get('postCommentImageSize') }}" height="{{ j3.settings.get('postCommentImageSize') }}" alt="">*/
/*                     <div class="comment">*/
/*                       <div class="user-name">{{ reply.name }}:</div>*/
/*                       <div class="user-data">*/
/*                         <div>*/
/*                           <span class="user-date p-date">{{ j3.blog_date(reply.date) }}</span>*/
/*                           <span class="user-time p-time">{{ reply.date | date(time_format) }}</span>*/
/*                         </div>*/
/*                         {% if reply.website %}*/
/*                           <span class="user-site p-site"><a href="{{ reply.website }}" target="_blank">{{ reply.website }}</a></span>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                       <p>{{ reply.comment }}</p>*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*           {% endfor %}*/
/*           <div class="comment-form">*/
/*             <h3 class="title">{{ j3.settings.get('blogLeaveCommentText') }}</h3>*/
/*             <form method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*               <fieldset>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="name" value="{{ default_name }}" id="input-name" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="email" value="{{ default_email }}" id="input-email" class="form-control"/>*/
/* */
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-website">{{ entry_website }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="website" value="{{ default_website }}" id="input-website" class="form-control"/>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-comment">{{ text_comment }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="comment" rows="10" id="input-comment" class="form-control">{{ default_comment }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <div class="buttons">*/
/*                 <div class="pull-right">*/
/*                   <button type="button" class="btn comment-submit">{{ button_submit }}</button>*/
/*                 </div>*/
/*               </div>*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*     {{ column_right }}*/
/*   </div>*/
/*   {% if allow_comments %}*/
/*     <script type="text/javascript">*/
/*       function generateComment($form, cls, $appendTo, callback) {*/
/*         $form.find('.has-error').removeClass('has-error');*/
/* */
/*         $.post('index.php?route=journal3/blog/comment&post_id={{ post_id }}', $form.serializeArray(), function (response) {*/
/*           if (response.status === 'success') {*/
/*             if (response.response.data) {*/
/*               var html = '';*/
/* */
/*               html += '<div class="' + cls + '" data-comment-id="' + response.response.data.comment_id + '" data-has-form="false">';*/
/*               html += ' <img class="user-avatar" src="https://s.gravatar.com/avatar/' + response.response.data.avatar + '?s={{ j3.settings.get('postCommentImageSize') }}" width="{{ j3.settings.get('postCommentImageSize') }}" height="{{ j3.settings.get('postCommentImageSize') }}" alt="">';*/
/*               html += ' <div class="comment">';*/
/*               html += '   <div class="user-name">' + response.response.data.name + ':</div>';*/
/*               html += '   <div class="user-data">';*/
/*               html += '     <div>';*/
/*               html += '       <span class="user-date p-date">' + response.response.data.date + '</span>';*/
/*               html += '       <span class="user-time p-time">' + response.response.data.time + '</span>';*/
/*               html += '     </div>';*/
/*               html += '     <span class="user-site p-site"><a href="' + response.response.data.website + '" target="_blank">' + response.response.data.website + '</a></span>';*/
/*               html += '   </div>';*/
/* */
/*               if (cls === 'post-comment') {*/
/*                 html += ' <a class="btn reply-btn">{{ j3.settings.get('blogReplyText') }}</a>';*/
/*               }*/
/* */
/*               html += ' <p>' + response.response.data.comment + '</p>';*/
/*               html += '</div>';*/
/* */
/*               $appendTo.before(html);*/
/*             }*/
/* */
/*             callback && callback(response.response.message);*/
/*           }*/
/* */
/*           if (response.status === 'error') {*/
/*             $.each(response.response.errors, function (field) {*/
/*               $form.find('[name="' + field + '"]').closest('.form-group').addClass('has-error');*/
/*             });*/
/*           }*/
/*         }, 'json');*/
/*       }*/
/* */
/*       $(document).delegate('.reply-btn', 'click', function () {*/
/*         var $comment = $(this).closest('.post-comment');*/
/* */
/*         if ($comment.attr('data-has-form') === 'false') {*/
/*           var $form = $('.post-comments form').clone();*/
/*           $form.find('.has-error').removeClass('has-error');*/
/*           $form.append('<input type="hidden" name="parent_id" value="' + $comment.attr('data-comment-id') + '" />');*/
/*           $form.find('button').removeClass('comment-submit').addClass('reply-submit');*/
/*           $comment.find('> .comment').append('<div class="reply-form"><h3 class="title">' + '{{ j3.settings.get('blogLeaveReplyText') }}' + '</h3><div class="comment-form"><div><form class="form-horizontal">' + $form.html() + '</form></div></div></div>');*/
/*           $comment.attr('data-has-form', 'true');*/
/*         } else {*/
/*           $comment.find('.reply-form').remove();*/
/*           $comment.attr('data-has-form', 'false');*/
/*         }*/
/*       });*/
/* */
/*       $(document).delegate('form .comment-submit', 'click', function () {*/
/*         var $form = $(this).closest('form');*/
/*         var $comment_form = $('.comment-form');*/
/* */
/*         generateComment($form, 'post-comment', $comment_form, function (message) {*/
/*           $comment_form.before('<div class="success">' + message + '</div>');*/
/*           setTimeout(function () {*/
/*             $('.post-comments .success').slideUp(400, function () {*/
/*               $(this).remove();*/
/*             });*/
/*           }, 1500);*/
/*           $form[0].reset();*/
/*         });*/
/*       });*/
/* */
/*       $(document).delegate('form .reply-submit', 'click', function () {*/
/*         var $form = $(this).closest('form');*/
/*         var $reply_form = $(this).closest('.post-comment').find('.reply-form');*/
/* */
/*         generateComment($form, 'post-reply', $reply_form, function (message) {*/
/*           $reply_form.before('<div class="success">' + message + '</div>');*/
/*           setTimeout(function () {*/
/*             $('.post-comments .success').slideUp(400, function () {*/
/*               $(this).remove();*/
/*             });*/
/*           }, 1500);*/
/*           $form.closest('.post-comment').attr('data-has-form', 'false');*/
/*           $reply_form.remove();*/
/*         });*/
/*       });*/
/*     </script>*/
/*   {% endif %}*/
/* </div>*/
/* {{ footer }}*/
/* */
