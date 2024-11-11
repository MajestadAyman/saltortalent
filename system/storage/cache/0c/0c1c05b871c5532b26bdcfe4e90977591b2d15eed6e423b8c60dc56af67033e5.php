<?php

/* common/footer.twig */
class __TwigTemplate_30114c6b7c260e1ed24d8ba130c1cbad8539c508a61a142d21937aa295de1e75 extends Twig_Template
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
        echo "
\t\t\t\t<footer id=\"footer\">";
        // line 2
        echo (isset($context["config_footer_text"]) ? $context["config_footer_text"] : null);
        echo "</footer>";
        // line 3
        if (((isset($context["config_admin_columnleft_stats_auth"]) ? $context["config_admin_columnleft_stats_auth"] : null) == 1)) {
            // line 4
            echo "\t\t\t\t<script>
\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\$(\"#stats\").css('display', 'none');
\t\t\t\t});
\t   \t\t\t</script>";
        }
        // line 10
        echo "\t\t\t\t
\t\t\t</div>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  27 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* 				<footer id="footer">{{ config_footer_text }}</footer>*/
/* 				{% if config_admin_columnleft_stats_auth  == 1 %}*/
/* 				<script>*/
/* 				$(document).ready(function() {*/
/* 					$("#stats").css('display', 'none');*/
/* 				});*/
/* 	   			</script>*/
/* 				{% endif %}*/
/* 				*/
/* 			</div>*/
/* </body></html>*/
/* */
