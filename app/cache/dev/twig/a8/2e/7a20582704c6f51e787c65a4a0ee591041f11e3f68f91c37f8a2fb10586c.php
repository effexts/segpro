<?php

/* UTASegProBundle::base2.html.twig */
class __TwigTemplate_a82e7a20582704c6f51e787c65a4a0ee591041f11e3f68f91c37f8a2fb10586c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'extrajs' => array($this, 'block_extrajs'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "
    <!-- <link rel=\"shortcut icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/images/favicon.ico"), "html", null, true);
        echo "\" /> -->
  </head>
  <body>
    <!-- Header and Nav -->
    <div class=\"row\">
    ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "    </div>
    <!-- End Header and Nav -->

    <div class=\"row\">
      <!-- Main Content Section -->
      <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
      <div class=\"large-9 push-3 columns\">
        ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "      </div>
      <!-- Nav Sidebar -->
      <!-- This is source ordered to be pulled to the left on larger screens -->
      <div class=\"large-3 pull-9 columns\">
        <ul class=\"side-nav\">
          <li><a href=\"#\">Avance Técnico</a></li>
           <li><a href=\"#\">Avance Financiero</a></li>
<!--          <li><a href=\"#\">Section 3</a></li>
          <li><a href=\"#\">Section 4</a></li>
          <li><a href=\"#\">Section 5</a></li>
          <li><a href=\"#\">Section 6</a></li> -->
        </ul>
        <p><img src=\"http://placehold.it/320x240&text=Enlaces\" /></p>
      </div>
    </div>

    <!-- Footer -->
    <footer class=\"row\">
      <div class=\"large-12 columns\">
        <hr />
        <div class=\"row\">
          <div class=\"large-6 columns\">
            <p>&copy; DDP - UTA</p>
          </div>
          <div class=\"large-6 columns\">
            <ul class=\"inline-list right\">
              <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("uta_seg_pro_homepage");
        echo "\">Sistema de Seguimiento de Proyectos</a></li>
              ";
        // line 92
        if (((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")) == true)) {
            // line 93
            echo "                <li>-</li>
                <li><a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
            echo "\">Administrador</a></li>
              ";
        }
        // line 96
        echo "              ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 97
            echo "                    <li>-</li>
                    <li><a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Cerrar Sesión</a></li>
              ";
        }
        // line 100
        echo "             <!--  <li><a href=\"#\">Section 4</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </footer>

    ";
        // line 107
        $this->displayBlock('extrajs', $context, $blocks);
        // line 109
        echo "  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "        Sistema de Seguimiento de Proyectos
      ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/css/normalize.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
      <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/css/foundation.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
      <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/css/jquery-ui-1.10.3.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
      <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "      <!-- <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/js/foundation.min.js"), "html", null, true);
        echo "\"></script> -->
      <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/js/jquery-ui-1.10.3.custom.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/js/main.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/utasegpro/js/jquery.horizontalNav.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        // line 31
        echo "      <div class=\"large-3 columns\">
          <h1><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("uta_seg_pro_homepage");
        echo "\"><img src=\"http://placehold.it/400x100&text=Logo\" /></a></h1>
      </div>
      <div class=\"large-9 columns\">
        <nav class=\"horizontal-nav full-width\">
            <ul>
                <li><a href=\"#\">Mis Proyectos</a></li>
                <li><a href=\"#\">Reportes</a></li>
                <li><a href=\"#\">Indicadores</a></li>
                <!-- <li><a href=\"#\">Contact</a></li> -->
            </ul>
        </nav>
<!--         <ul class=\"inline-list right\">
          <li><a href=\"#\">Mis Proyectos</a></li>
          <li><a href=\"#\">Section 2</a></li>
          <li><a href=\"#\">Section 3</a></li>
          <li><a href=\"#\">Section 4</a></li> 
        </ul>-->
      </div>
    ";
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        // line 59
        echo "          <h3>Page Title <small>Page subtitle</small></h3>
          <p>Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin. Venison tail chuck pork chop, andouille ball tip beef ribs flank boudin bacon. Salami andouille pork belly short ribs flank cow. Salami sirloin turkey kielbasa. Sausage venison pork loin leberkas chuck short loin, cow ham prosciutto pastrami jowl. Ham hock jerky tri-tip, fatback hamburger shoulder swine pancetta ground round. Tri-tip prosciutto meatball turkey, brisket spare ribs shankle chuck cow chicken ham hock boudin meatloaf jowl.</p>
          <p>Ground round pastrami pork loin tenderloin jerky. Jerky spare ribs biltong, ham hock ham capicola pork. Jerky turducken pork, meatloaf sausage capicola swine corned beef turkey short loin. Tongue prosciutto pork loin, ground round spare ribs venison kielbasa strip steak.</p>
          <p>Hamburger bresaola turkey t-bone, leberkas salami pork chop ham hock beef ribs. Rump biltong meatball venison, short ribs pork loin shank shankle corned beef beef. Cow salami jowl short loin hamburger fatback. Short ribs pork belly shoulder pastrami drumstick salami corned beef ham hock bresaola. Swine filet mignon cow sausage ball tip. Cow ribeye ground round, sausage pork loin pig beef ball tip turkey boudin.</p>
          <p>Prosciutto ball tip filet mignon andouille frankfurter chicken rump sausage meatball. Filet mignon meatloaf ground round andouille ham hock pork. Bresaola short loin meatball chuck hamburger pig. Turkey venison chuck, tongue fatback tail swine jerky corned beef shank kielbasa prosciutto ribeye ham tri-tip. Rump bacon pork belly meatloaf shoulder short loin meatball kielbasa pork loin tongue bresaola brisket corned beef jowl prosciutto. Beef ribs shankle short ribs pork belly corned beef fatback pork chop tongue biltong boudin strip steak sirloin meatloaf pancetta.</p>
        ";
    }

    // line 107
    public function block_extrajs($context, array $blocks = array())
    {
        // line 108
        echo "    ";
    }

    public function getTemplateName()
    {
        return "UTASegProBundle::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 132,  244 => 119,  231 => 118,  195 => 31,  805 => 267,  802 => 266,  797 => 260,  790 => 256,  784 => 253,  780 => 251,  778 => 250,  775 => 249,  769 => 247,  767 => 246,  764 => 245,  758 => 243,  756 => 242,  753 => 241,  747 => 239,  745 => 238,  742 => 237,  736 => 235,  734 => 234,  731 => 233,  728 => 232,  724 => 187,  718 => 186,  709 => 183,  699 => 181,  691 => 179,  688 => 178,  684 => 282,  682 => 266,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  687 => 178,  683 => 281,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 217,  637 => 216,  632 => 213,  626 => 211,  620 => 209,  606 => 208,  600 => 206,  589 => 201,  579 => 198,  576 => 197,  555 => 195,  552 => 194,  546 => 191,  544 => 190,  537 => 178,  521 => 163,  515 => 161,  503 => 156,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 141,  448 => 139,  438 => 137,  432 => 135,  417 => 130,  401 => 127,  390 => 124,  375 => 168,  373 => 159,  363 => 123,  354 => 119,  198 => 32,  553 => 176,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  517 => 161,  513 => 160,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  463 => 133,  460 => 132,  449 => 123,  441 => 138,  426 => 134,  419 => 98,  410 => 129,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  369 => 157,  333 => 112,  226 => 36,  205 => 59,  172 => 112,  370 => 100,  367 => 131,  343 => 91,  330 => 87,  327 => 86,  320 => 75,  313 => 73,  310 => 81,  302 => 114,  296 => 111,  287 => 64,  271 => 58,  262 => 63,  180 => 104,  12 => 34,  713 => 214,  707 => 211,  704 => 182,  702 => 209,  696 => 180,  686 => 205,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  608 => 187,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 166,  516 => 161,  512 => 160,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 134,  465 => 147,  462 => 146,  451 => 140,  446 => 122,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 107,  358 => 106,  349 => 103,  347 => 115,  339 => 100,  336 => 113,  332 => 88,  324 => 116,  319 => 90,  311 => 89,  307 => 71,  297 => 84,  233 => 107,  223 => 66,  200 => 55,  306 => 140,  303 => 139,  300 => 68,  286 => 80,  274 => 77,  248 => 115,  216 => 25,  192 => 30,  70 => 27,  344 => 97,  340 => 90,  338 => 94,  315 => 83,  295 => 66,  292 => 134,  282 => 80,  280 => 79,  277 => 59,  259 => 55,  190 => 50,  184 => 47,  178 => 72,  118 => 12,  181 => 20,  161 => 38,  76 => 14,  194 => 87,  134 => 58,  129 => 42,  65 => 21,  318 => 144,  316 => 74,  299 => 112,  293 => 75,  288 => 108,  284 => 106,  281 => 61,  279 => 104,  275 => 77,  265 => 64,  250 => 67,  228 => 117,  222 => 81,  215 => 32,  210 => 30,  174 => 118,  165 => 16,  153 => 48,  150 => 58,  113 => 11,  110 => 10,  58 => 17,  124 => 52,  81 => 15,  399 => 158,  394 => 118,  377 => 82,  371 => 113,  359 => 140,  357 => 120,  352 => 121,  348 => 136,  345 => 135,  342 => 101,  329 => 95,  325 => 125,  308 => 118,  289 => 81,  276 => 102,  270 => 100,  260 => 62,  237 => 86,  234 => 119,  218 => 77,  202 => 73,  188 => 21,  185 => 21,  170 => 78,  167 => 60,  148 => 44,  90 => 34,  84 => 50,  690 => 179,  681 => 265,  676 => 262,  674 => 232,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 210,  613 => 188,  605 => 186,  595 => 203,  588 => 350,  581 => 199,  577 => 344,  575 => 341,  573 => 196,  567 => 337,  557 => 177,  550 => 193,  542 => 172,  538 => 319,  531 => 312,  526 => 164,  518 => 307,  514 => 306,  509 => 159,  504 => 158,  492 => 132,  486 => 130,  481 => 290,  466 => 280,  456 => 142,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 132,  415 => 97,  396 => 157,  383 => 150,  366 => 156,  361 => 122,  346 => 92,  335 => 93,  331 => 187,  326 => 76,  321 => 91,  304 => 79,  291 => 65,  272 => 76,  267 => 98,  257 => 61,  253 => 95,  242 => 112,  232 => 84,  186 => 54,  127 => 34,  114 => 98,  104 => 40,  23 => 13,  263 => 57,  256 => 54,  249 => 50,  245 => 49,  239 => 149,  236 => 108,  225 => 89,  213 => 126,  207 => 29,  197 => 56,  191 => 283,  175 => 43,  160 => 63,  155 => 13,  152 => 30,  146 => 11,  137 => 47,  126 => 37,  100 => 93,  97 => 60,  77 => 46,  34 => 9,  20 => 1,  53 => 30,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 136,  430 => 103,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 126,  393 => 125,  387 => 123,  384 => 116,  381 => 122,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 122,  341 => 114,  337 => 103,  322 => 101,  314 => 99,  312 => 142,  309 => 117,  305 => 70,  298 => 173,  294 => 111,  285 => 81,  283 => 70,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 131,  247 => 129,  241 => 47,  229 => 73,  220 => 65,  214 => 61,  177 => 19,  169 => 66,  140 => 18,  132 => 43,  128 => 107,  107 => 23,  61 => 151,  273 => 101,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 60,  224 => 59,  221 => 58,  219 => 33,  217 => 79,  208 => 97,  204 => 28,  179 => 171,  159 => 14,  143 => 10,  135 => 5,  119 => 100,  102 => 5,  71 => 78,  67 => 9,  63 => 27,  59 => 117,  94 => 91,  89 => 17,  85 => 16,  75 => 80,  68 => 31,  56 => 35,  28 => 14,  38 => 14,  26 => 14,  24 => 1,  201 => 57,  196 => 52,  183 => 74,  171 => 63,  166 => 65,  163 => 109,  158 => 62,  156 => 36,  151 => 12,  142 => 58,  138 => 6,  136 => 17,  121 => 34,  117 => 50,  105 => 6,  91 => 10,  62 => 38,  49 => 20,  87 => 38,  31 => 5,  25 => 1,  21 => 11,  19 => 11,  93 => 39,  88 => 85,  78 => 32,  46 => 12,  44 => 83,  27 => 16,  79 => 31,  72 => 25,  69 => 22,  47 => 9,  40 => 8,  37 => 10,  22 => 11,  246 => 69,  157 => 64,  145 => 57,  139 => 59,  131 => 16,  123 => 48,  120 => 47,  115 => 25,  111 => 97,  108 => 96,  101 => 16,  98 => 92,  96 => 19,  83 => 32,  74 => 29,  66 => 65,  55 => 51,  52 => 18,  50 => 20,  43 => 19,  41 => 13,  35 => 22,  32 => 5,  29 => 4,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 177,  187 => 86,  182 => 172,  176 => 102,  173 => 18,  168 => 17,  164 => 54,  162 => 37,  154 => 46,  149 => 62,  147 => 58,  144 => 19,  141 => 95,  133 => 51,  130 => 109,  125 => 40,  122 => 13,  116 => 43,  112 => 47,  109 => 45,  106 => 35,  103 => 94,  99 => 30,  95 => 19,  92 => 35,  86 => 37,  82 => 29,  80 => 82,  73 => 13,  64 => 58,  60 => 37,  57 => 27,  54 => 34,  51 => 88,  48 => 10,  45 => 25,  42 => 24,  39 => 16,  36 => 6,  33 => 8,  30 => 17,);
    }
}
