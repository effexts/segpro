<?php

/* UTASegProBundle::layout.html.twig */
class __TwigTemplate_eb8bc4d7eac17404d6e912a831fc37e1a8ca3acb13c824aef67686583be28683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UTASegProBundle::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'proy' => array($this, 'block_proy'),
            'proyectos' => array($this, 'block_proyectos'),
            'algo' => array($this, 'block_algo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UTASegProBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
    <div class=\"large-12 columns\">
        <!-- Navigation -->
        <div class=\"row\">
        ";
        // line 10
        $this->displayBlock('navbar', $context, $blocks);
        // line 83
        echo "        </div>
        <!-- End Navigation -->

        <div class=\"row\">
            <!-- Side Bar -->
        ";
        // line 88
        $this->displayBlock('sidebar', $context, $blocks);
        // line 113
        echo "            <!-- End Side Bar -->


            <!-- Thumbnails -->
";
        // line 117
        $this->displayBlock('proy', $context, $blocks);
        // line 151
        echo "        </div>

        <!-- Footer -->
        <footer class=\"row\">
            <div class=\"large-12 columns\">
                <hr>
                <div class=\"row\">
                    <div class=\"large-5 columns\">
                        <p>&copy; Sistema de Seguimiento de Proyectos.</p>
                    </div>
                    <div class=\"large-7 columns\">
                        <ul class=\"inline-list right\">
                            <li>
                                <a href=\"http://www.uta.cl\">Universidad de Tarapacá</a>
                            </li>
                            <li>-</li>
                            <li>
                                <a href=\"http://diplan.uta.cl/ddp/\">Departamento de Diseño de Proyectos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
";
    }

    // line 10
    public function block_navbar($context, array $blocks = array())
    {
        // line 11
        echo "            <div class=\"large-12 columns\">
                <nav class=\"top-bar\">
                    <ul class=\"title-area\">
                        <!-- Title Area -->
                        <li class=\"name\">
                            <h1><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("uta_seg_pro_homepage");
        echo "\">Seguimiento de Proyectos</a></h1>
                        </li>
                        <li class=\"toggle-topbar menu-icon\">
                            <a href=\"#\"><span>menu</span></a>
                        </li>
                    </ul>


                    <section class=\"top-bar-section\">
                        <!-- Right Nav Section -->
                        <ul class=\"right\">
                            <li class=\"divider\"></li>
                            <li class=\"has-dropdown\">
                                <a href=\"#\">Mis Proyectos</a>
                                <ul class=\"dropdown\">
                                    <li>
                                        <label>Consultas</label>
                                    </li>
                                    <li>
                                        <a href=\"#\">Por Fuente de Financiamiento</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Por a&ntilde;o</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">Ver todos →</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">Indicadores</a>
                            </li>
                            <li class=\"has-dropdown\">
                                <a href=\"#\">Consultas</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"#\">Por Fuente de Financiamiento</a></li>
                                    <li><a href=\"#\">Por Año</a></li>
                                </ul>
                            </li>
                  ";
        // line 57
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 58
            echo "                            <li class=\"divider\"></li>
                            <li class=\"has-dropdown\">
                                <a href=\"#\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre"), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "apellido"), "html", null, true);
            echo "</a>
                                <ul class=\"dropdown\">
                                    ";
            // line 62
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 63
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
                echo "\">Administración</a></li>
                                    ";
            }
            // line 65
            echo "                                    <li>
                                        <a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Cerrar Sesi&oacute;n</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                </ul>
                            </li>
                  ";
        }
        // line 72
        echo "                        </ul>
                    </section>
                </nav>
                <div class=\"row\">
                    <div class=\"columns large-12\">
                        ";
        // line 77
        echo $this->env->getExtension('knp_menu')->render("breadcrumb", array("currentAsLink" => false));
        echo "
                    </div>
                </div>
                <!-- End Top Bar -->
            </div>
        ";
    }

    // line 88
    public function block_sidebar($context, array $blocks = array())
    {
        // line 89
        echo "            <div class=\"large-4 small-12 columns\">
            
                <div class=\"panel\">
                    <h3>Header</h3>
                    <h5 class=\"subheader\">Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis.</h5>
                </div>
                <ul class=\"side-nav\">
                    <li class=\"active\">
                        <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("uta_seg_pro_homepage");
        echo "\">Visualizaci&oacute;n General</a>
                    </li>
                    <li>
                        <a href=\"#\">Proyectos Cr&iacute;ticos</a>
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

    // line 117
    public function block_proy($context, array $blocks = array())
    {
        // line 118
        echo "            <div class=\"large-8 columns\">
            ";
        // line 119
        $this->displayBlock('proyectos', $context, $blocks);
        // line 131
        echo "            ";
        $this->displayBlock('algo', $context, $blocks);
        // line 149
        echo "            </div>
";
    }

    // line 119
    public function block_proyectos($context, array $blocks = array())
    {
        // line 129
        echo "                <!-- End Thumbnails -->
            ";
    }

    // line 131
    public function block_algo($context, array $blocks = array())
    {
        // line 132
        echo "                <!-- Managed By -->
                <div class=\"row\">
                    <div class=\"large-12 columns\">
                        <div class=\"panel radius\">
                            <div class=\"row\">
                                <div class=\"columns large-2 small-6\">
                                    <img src=\"http://placehold.it/300x300&text=Site Owner\">
                                </div>
                                <div class=\"columns large-10 small-6\">
                                    <strong>This Site Is Managed By<hr></strong>Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Managed By -->
            ";
    }

    public function getTemplateName()
    {
        return "UTASegProBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 132,  252 => 131,  247 => 129,  244 => 119,  239 => 149,  236 => 131,  234 => 119,  231 => 118,  228 => 117,  208 => 97,  198 => 89,  195 => 88,  185 => 77,  178 => 72,  169 => 66,  166 => 65,  160 => 63,  158 => 62,  151 => 60,  147 => 58,  145 => 57,  101 => 16,  91 => 10,  59 => 117,  53 => 113,  42 => 10,  36 => 6,  33 => 5,  172 => 77,  164 => 75,  161 => 74,  157 => 73,  140 => 58,  137 => 57,  131 => 25,  113 => 21,  109 => 20,  103 => 19,  97 => 17,  94 => 11,  77 => 14,  74 => 13,  71 => 12,  66 => 28,  64 => 12,  61 => 151,  58 => 10,  54 => 9,  51 => 88,  44 => 83,  40 => 4,  35 => 3,  32 => 2,);
    }
}
