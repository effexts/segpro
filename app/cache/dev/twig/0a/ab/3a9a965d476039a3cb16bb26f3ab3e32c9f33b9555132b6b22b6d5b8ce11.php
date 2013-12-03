<?php

/* UTASegProBundle:Login:login.html.twig */
class __TwigTemplate_0aab3a9a965d476039a3cb16bb26f3ab3e32c9f33b9555132b6b22b6d5b8ce11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$(\"#submit1\").hover(
                        function() {
                            \$(this).animate({\"opacity\": \"0\"}, \"slow\");
                        },
                        function() {
                            \$(this).animate({\"opacity\": \"1\"}, \"slow\");
                        }
                );
            });
        </script>
    </head>
    <body>
    ";
        // line 27
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 28
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
        <br>
    ";
        }
        // line 36
        echo "  
        <div id=\"wrapper\">
            <div id=\"wrappertop\"></div>
            <div id=\"wrappermiddle\">
                <h2>Ingreso Sistema de Seguimiento de Proyectos</h2>
                <form action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\">
                    <div id=\"username_input\">
                        <div id=\"username_inputleft\"></div>
                        <div id=\"username_inputmiddle\">

                            <input type=\"text\" class=\"url\" name=\"_username\" id=\"username\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" onclick=\"this.value = '';\">
                            <img id=\"url_user\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/images/mailicon.png"), "html", null, true);
        echo "\" alt=\"\">

                        </div>
                        <div id=\"username_inputright\"></div>

                    </div>
                    <div id=\"password_input\">
                        <div id=\"password_inputleft\"></div>
                        <div id=\"password_inputmiddle\">

                            <input type=\"password\" class=\"url\" name=\"_password\" id=\"password\" value=\"Password\" onclick=\"this.value = '';\">
                            <img id=\"url_password\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/images/passicon.png"), "html", null, true);
        echo "\" alt=\"\">

                        </div>
                        <div id=\"password_inputright\"></div>
                    </div>

                    <div id=\"submit\">

                        <input type=\"submit\" id=\"submit1\" value=\"Ingresar\" name=\"login\">
                        <!--<input type=\"image\" src=\"./images/submit.png\" id=\"submit2\" value=\"Sign In\">-->
                    </div>
                </form>
";
        // line 72
        echo "            </div>
            <div id=\"wrapperbottom\"></div>
        </div>
    </body>
</html>";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "        <link property=\"\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/css/stylelogin.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/js/jquery.query-2.1.7.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/js/rainbows.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "UTASegProBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 11,  131 => 10,  126 => 9,  123 => 8,  116 => 6,  113 => 5,  105 => 72,  90 => 58,  76 => 47,  72 => 46,  64 => 41,  57 => 36,  50 => 28,  48 => 27,  32 => 13,  29 => 8,  27 => 5,  21 => 1,);
    }
}
