<?php

/* UTASegProBundle:Proyecto:resumen.html.twig */
class __TwigTemplate_5b61d40cdc7ce1e36498f36220d619e9bdfae6a83abf54a1ba892411582d3c0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UTASegProBundle::layout.html.twig");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'proyectos' => array($this, 'block_proyectos'),
            '_user_addresses_addresses_entry_row' => array($this, 'block__user_addresses_addresses_entry_row'),
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
    public function block_sidebar($context, array $blocks = array())
    {
        // line 4
        echo "            <div class=\"large-4 small-12 columns\">
            
                <div class=\"panel\">
                    <h3>Nombre:</h3>
                    <h5 class=\"subheader\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "ficha"), "nombre"), "html", null, true);
        echo "</h5>
                </div>
                <ul class=\"side-nav\">
                    <li class=\"active\">
                        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uta_segpro_resumen_proyecto", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
        echo "\">Visualizaci&oacute;n General</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 15
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

    // line 29
    public function block_proyectos($context, array $blocks = array())
    {
        // line 30
        echo "

  <table>
      <tr>
        <th colspan=\"2\">Identificador</th>
        <td colspan=\"2\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "identificador"), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <th>Monto</th>
        <td>\$";
        // line 39
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "ficha"), "montoadjudicado"), 0, ",", "."), "html", null, true);
        echo "</td>
        <th>Fecha Postulación</th>
        <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "ficha"), "fechapostulacion"), "d-m-Y", "America/Santiago"), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <th>Fecha de Inicio</th>
        <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "ficha"), "fechainicio"), "d-m-Y", "America/Santiago"), "html", null, true);
        echo "</td>
        <th>Fecha de Término</th>
        <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "ficha"), "fechatermino"), "d-m-Y", "America/Santiago"), "html", null, true);
        echo "</td>          
      </tr>

  </table>

<h5>Actividades</h5>
  <table id=\"agregar-actividades\">
  ";
        // line 54
        if (twig_test_empty($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "actividades"))) {
            // line 55
            echo "    <thead id=\"acts_empty\">
      <th>No existen actividades de este proyecto aún.</th>
    </thead>
  ";
        }
        // line 59
        echo "
  ";
        // line 60
        if ((!twig_test_empty($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "actividades")))) {
            // line 61
            echo "   
    <thead>
      <th>N° Actividad</th>
      <th>Identificador</th>
      <th>Monto</th>
      <th>Fecha Comprometida</th>
      <th>Fecha Término</th>
      <th>Estado</th>
    </thead>
    
    ";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "actividades"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
                // line 72
                echo "    <tr>
      <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "</td>
      <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "identificador"), "html", null, true);
                echo "</td>
      <td>\$";
                // line 75
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "monto"), 0, ",", "."), "html", null, true);
                echo "</td>
      <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "fechacomprometidatermino"), "d/m/Y", "America/Santiago"), "html", null, true);
                echo "</td>
      <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "fechatermino"), "d/m/Y", "America/Santiago"), "html", null, true);
                echo "</td>
      <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "estado"), "html", null, true);
                echo "</td>
    </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "  ";
        }
        // line 82
        echo "    </table>
    
    <div class=\"btn-add-actividad\">
      <a href=\"#\" class=\"button btn-mini btn-info add_actividad_link\"><i class=\"icon-plus icon-white\">Agregar una Actividad</i></a>
    </div>
    
  ";
        // line 88
        $this->displayBlock('_user_addresses_addresses_entry_row', $context, $blocks);
        // line 104
        echo "

      <script>
      \$('.enviarform').click(function(event) {
          
            \$('form').unbind('submit');
            var \$url = \$('form').attr('action');
            var \$data = \$('form').serialize();

            \$.ajax({
                type: \"POST\",
                url: \$url,
                data: \$data
            }).done(function( result ) {
                    if(result.success) {
                      if(\$('#acts_empty').length)
                          \$('#acts_empty').replaceWith('<thead><th>N° Actividad</th><th>Identificador</th><th>Monto</th><th>Fecha Comprometida</th><th>Fecha Término</th><th>Estado</th></thead>');
                      \$('#agregar-actividades').append('<tr><td>'+ result.id +'</td><td>'+ result.identificador +'</td><td>'+ format1(result.monto, \"\$\")+'</td><td>'+ result.fechacomprometidatermino +'</td><td>'+ result.fechatermino +'</td><td>'+ result.estado +'</td></tr>');
                     }
                });
            \$('#dialog').dialog('close');
    });
      </script>



";
    }

    // line 88
    public function block__user_addresses_addresses_entry_row($context, array $blocks = array())
    {
        // line 89
        echo "    ";
        ob_start();
        // line 90
        echo "          <div id=\"dialog\" class=\"row\">
              <form action=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uta_segpro_resumen_proyecto", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
        echo "\" >
                  ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "


                  <div class=\"form-actions\">
                      <a href=\"#\" class=\"enviarform button success\">
                          Enviar
                      </a>
                  </div>
              </form>
          </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 103
        echo "  ";
    }

    // line 132
    public function block_algo($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UTASegProBundle:Proyecto:resumen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 132,  266 => 103,  252 => 92,  248 => 91,  245 => 90,  242 => 89,  239 => 88,  209 => 104,  207 => 88,  199 => 82,  196 => 81,  179 => 78,  175 => 77,  171 => 76,  167 => 75,  163 => 74,  159 => 73,  156 => 72,  139 => 71,  127 => 61,  125 => 60,  122 => 59,  116 => 55,  114 => 54,  104 => 47,  99 => 45,  92 => 41,  87 => 39,  80 => 35,  73 => 30,  70 => 29,  53 => 15,  47 => 12,  40 => 8,  34 => 4,  31 => 3,);
    }
}
