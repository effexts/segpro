<?php

/* UTASegProBundle::base.html.twig */
class __TwigTemplate_b1171183da7f8efd4db721a7d0554cd322cf6215841995d630bf5c13e9a49458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'extrajs' => array($this, 'block_extrajs'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]> <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]> <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"http://www.uta.cl/web/general/favicon.ico\" />
";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "
    </head>
    <body>
        <!--[if lt IE 7]>
<p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "

        ";
        // line 37
        $this->displayBlock('extrajs', $context, $blocks);
        // line 38
        echo "    </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Sistema de Seguimiento de Proyectos";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/css/normalize.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/css/foundation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/css/jquery-ui-1.10.3.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/css/styles.css"), "html", null, true);
        echo "\">
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/js/vendor/zepto.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/js/foundation.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/js/jquery-ui-1.10.3.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    // line 37
    public function block_extrajs($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UTASegProBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  121 => 34,  111 => 24,  107 => 23,  103 => 22,  95 => 19,  89 => 17,  85 => 16,  81 => 15,  60 => 37,  54 => 34,  45 => 27,  34 => 9,  24 => 1,  242 => 129,  239 => 128,  234 => 126,  231 => 116,  213 => 96,  205 => 90,  202 => 89,  192 => 77,  185 => 72,  176 => 66,  173 => 65,  167 => 63,  165 => 62,  158 => 60,  154 => 58,  152 => 57,  108 => 16,  101 => 11,  98 => 21,  67 => 9,  64 => 128,  62 => 38,  53 => 109,  51 => 89,  43 => 19,  41 => 13,  35 => 6,  32 => 5,  147 => 72,  139 => 70,  136 => 69,  132 => 68,  115 => 25,  112 => 52,  106 => 21,  88 => 17,  82 => 16,  76 => 14,  73 => 13,  56 => 35,  52 => 9,  49 => 8,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}
