<?php

/* UTASegProBundle:Home:index.html.twig */
class __TwigTemplate_8bade3fc29c8bea626f591ebbac2a2fd32457c6e9ca93390c7c431cd34157c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UTASegProBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'sidebar' => array($this, 'block_sidebar'),
            'proy' => array($this, 'block_proy'),
            'proyectos' => array($this, 'block_proyectos'),
            'extrajs' => array($this, 'block_extrajs'),
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

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/highcharts.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/modules/exporting.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        // line 9
        echo "  ";
    }

    // line 10
    public function block_proy($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"large-12 columns\">
    ";
        // line 12
        $this->displayBlock('proyectos', $context, $blocks);
        // line 28
        echo "</div>
";
    }

    // line 12
    public function block_proyectos($context, array $blocks = array())
    {
        // line 13
        echo "        <div class=\"row\">
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segpros"]) ? $context["segpros"] : $this->getContext($context, "segpros")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["segpro"]) {
            // line 15
            echo "            <div class=\"large-4 small-6 left columns\">
                ";
            // line 17
            echo "                <div id=\"grafico";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), "html", null, true);
            echo "\" class=\"border\"></div>
                <div class=\"panel\">
                    <h5><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uta_segpro_resumen_proyecto", array("id" => $this->getAttribute((isset($context["segpro"]) ? $context["segpro"] : $this->getContext($context, "segpro")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["segpro"]) ? $context["segpro"] : $this->getContext($context, "segpro")), "nombre"), "html", null, true);
            echo "</a></h5>
                    <h6 class=\"subheader\">\$";
            // line 20
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["segpro"]) ? $context["segpro"] : $this->getContext($context, "segpro")), "ficha"), "montoadjudicado"), 0, ",", "."), "html", null, true);
            echo "</h6>
                    <h7 class=\"subheader\">Año de Postulación: ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["segpro"]) ? $context["segpro"] : $this->getContext($context, "segpro")), "ficha"), "fechapostulacion"), "Y"), "html", null, true);
            echo "</h7>
                </div>
            </div>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segpro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
        <!-- End Thumbnails -->
    ";
    }

    // line 57
    public function block_extrajs($context, array $blocks = array())
    {
        // line 58
        echo "    <script type=\"text/javascript\">
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
                

        ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charts"]) ? $context["charts"] : $this->getContext($context, "charts")));
        foreach ($context['_seq'] as $context["key"] => $context["chart"]) {
            // line 74
            echo "
\t    ";
            // line 75
            echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")), false);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['chart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t
\t});

</script>
";
    }

    public function getTemplateName()
    {
        return "UTASegProBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 77,  164 => 75,  161 => 74,  157 => 73,  140 => 58,  137 => 57,  131 => 25,  113 => 21,  109 => 20,  103 => 19,  97 => 17,  94 => 15,  77 => 14,  74 => 13,  71 => 12,  66 => 28,  64 => 12,  61 => 11,  58 => 10,  54 => 9,  51 => 8,  44 => 5,  40 => 4,  35 => 3,  32 => 2,);
    }
}
