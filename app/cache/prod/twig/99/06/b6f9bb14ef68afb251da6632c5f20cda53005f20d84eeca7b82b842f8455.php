<?php

/* UTASegProBundle:Proyecto:statsPorProyecto.html.twig */
class __TwigTemplate_9906b6f9bb14ef68afb251da6632c5f20cda53005f20d84eeca7b82b842f8455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UTASegProBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'sidebar' => array($this, 'block_sidebar'),
            'proyectos' => array($this, 'block_proyectos'),
            'algo' => array($this, 'block_algo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UTASegProBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/highcharts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/modules/exporting.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\t\$(function(){
\t\tHighcharts.setOptions({
\t\t    lang: {
\t\t        decimalPoint: ',',
\t\t        thousandsSep: '.',
\t\t        downloadJPEG: 'Descargar como JPEG',
\t\t        downloadPDF: 'Descargar como PDF',
\t\t        downloadPNG: 'Descargar como PNG',
\t\t        downloadSVG: 'Descargar como SVG',
\t\t        printChart: 'Imprimir gráfico'
\t\t    }
\t\t});
\t    ";
        // line 20
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")), false);
        echo "
\t
\t})

</script>
";
    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"large-4 small-12 columns\">

        <div class=\"panel\">
            <h3>Nombre:</h3>
            <h5 class=\"subheader\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "ficha"), "nombre"), "html", null, true);
        echo "</h5>
            <h5 class=\"subheader\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "fuente"), "nombre"), "html", null, true);
        echo "</h5>
        </div>
        <ul class=\"side-nav\">
            <li>
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uta_segpro_resumen_proyecto", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
        echo "\">Visualizaci&oacute;n General</a>
            </li>
            <li class=\"active\">
                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uta_segpro_statsporproyecto", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
        echo "\">Estad&iacute;sticas</a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a href=\"#\">An&aacute;lisis Financiero</a>
            </li>
            <li>
                <a href=\"#\">An&aacute;lisis de Actividades</a>
            </li>
        </ul>

    </div>
";
    }

    // line 54
    public function block_proyectos($context, array $blocks = array())
    {
        // line 55
        echo "\t<div id=\"grafico\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
";
    }

    // line 57
    public function block_algo($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UTASegProBundle:Proyecto:statsPorProyecto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 57,  115 => 55,  112 => 54,  95 => 40,  89 => 37,  82 => 33,  78 => 32,  72 => 28,  69 => 27,  59 => 20,  42 => 6,  38 => 5,  34 => 4,  31 => 3,);
    }
}
