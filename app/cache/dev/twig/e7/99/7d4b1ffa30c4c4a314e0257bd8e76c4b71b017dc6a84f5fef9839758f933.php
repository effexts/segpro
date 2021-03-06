<?php

/* UTASegProBundle:Admin:index.html.twig */
class __TwigTemplate_e7997d4b1ffa30c4c4a314e0257bd8e76c4b71b017dc6a84f5fef9839758f933 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UTASegProBundle::admin.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UTASegProBundle::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "        <h1>Administrador</h1>
    ";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<ul>
\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_actividad");
        echo "\">Actividad</a></li>
\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_cargo");
        echo "\">Cargo</a></li>
\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_estadoactividad");
        echo "\">Estado Actividad</a></li>
\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_estadoproyecto");
        echo "\">Estado Proyecto</a></li>
\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_fichaproyecto");
        echo "\">Ficha Proyecto</a></li>
\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_fuentedefinanciamiento");
        echo "\">Fuentes de Financiamiento</a></li>
\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("admin_objetivos");
        echo "\">Objetivos</a></li>
\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("admin_segpro");
        echo "\">Seg Pro</a></li>
\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_usuario");
        echo "\">Usuarios</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "UTASegProBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 132,  244 => 119,  231 => 118,  195 => 31,  805 => 267,  802 => 266,  797 => 260,  790 => 256,  784 => 253,  780 => 251,  778 => 250,  775 => 249,  769 => 247,  767 => 246,  764 => 245,  758 => 243,  756 => 242,  753 => 241,  747 => 239,  745 => 238,  742 => 237,  736 => 235,  734 => 234,  731 => 233,  728 => 232,  724 => 187,  718 => 186,  709 => 183,  699 => 181,  691 => 179,  688 => 178,  684 => 282,  682 => 266,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  687 => 178,  683 => 281,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 217,  637 => 216,  632 => 213,  626 => 211,  620 => 209,  606 => 208,  600 => 206,  589 => 201,  579 => 198,  576 => 197,  555 => 195,  552 => 194,  546 => 191,  544 => 190,  537 => 178,  521 => 163,  515 => 161,  503 => 156,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 141,  448 => 139,  438 => 137,  432 => 135,  417 => 130,  401 => 127,  390 => 124,  375 => 168,  373 => 159,  363 => 123,  354 => 119,  198 => 32,  553 => 176,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  517 => 161,  513 => 160,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  463 => 133,  460 => 132,  449 => 123,  441 => 138,  426 => 134,  419 => 98,  410 => 129,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  369 => 157,  333 => 112,  226 => 36,  205 => 59,  172 => 112,  370 => 100,  367 => 131,  343 => 91,  330 => 87,  327 => 86,  320 => 75,  313 => 73,  310 => 81,  302 => 114,  296 => 111,  287 => 64,  271 => 58,  262 => 63,  180 => 104,  12 => 34,  713 => 214,  707 => 211,  704 => 182,  702 => 209,  696 => 180,  686 => 205,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  608 => 187,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 166,  516 => 161,  512 => 160,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 134,  465 => 147,  462 => 146,  451 => 140,  446 => 122,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 107,  358 => 106,  349 => 103,  347 => 115,  339 => 100,  336 => 113,  332 => 88,  324 => 116,  319 => 90,  311 => 89,  307 => 71,  297 => 84,  233 => 107,  223 => 66,  200 => 55,  306 => 140,  303 => 139,  300 => 68,  286 => 80,  274 => 77,  248 => 115,  216 => 25,  192 => 30,  70 => 28,  344 => 97,  340 => 90,  338 => 94,  315 => 83,  295 => 66,  292 => 134,  282 => 80,  280 => 79,  277 => 59,  259 => 55,  190 => 50,  184 => 47,  178 => 72,  118 => 12,  181 => 20,  161 => 38,  76 => 27,  194 => 87,  134 => 58,  129 => 42,  65 => 22,  318 => 144,  316 => 74,  299 => 112,  293 => 75,  288 => 108,  284 => 106,  281 => 61,  279 => 104,  275 => 77,  265 => 64,  250 => 67,  228 => 117,  222 => 81,  215 => 32,  210 => 30,  174 => 118,  165 => 16,  153 => 48,  150 => 58,  113 => 5,  110 => 10,  58 => 17,  124 => 52,  81 => 15,  399 => 158,  394 => 118,  377 => 82,  371 => 113,  359 => 140,  357 => 120,  352 => 121,  348 => 136,  345 => 135,  342 => 101,  329 => 95,  325 => 125,  308 => 118,  289 => 81,  276 => 102,  270 => 100,  260 => 62,  237 => 86,  234 => 119,  218 => 77,  202 => 73,  188 => 21,  185 => 21,  170 => 78,  167 => 60,  148 => 44,  90 => 58,  84 => 50,  690 => 179,  681 => 265,  676 => 262,  674 => 232,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 210,  613 => 188,  605 => 186,  595 => 203,  588 => 350,  581 => 199,  577 => 344,  575 => 341,  573 => 196,  567 => 337,  557 => 177,  550 => 193,  542 => 172,  538 => 319,  531 => 312,  526 => 164,  518 => 307,  514 => 306,  509 => 159,  504 => 158,  492 => 132,  486 => 130,  481 => 290,  466 => 280,  456 => 142,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 132,  415 => 97,  396 => 157,  383 => 150,  366 => 156,  361 => 122,  346 => 92,  335 => 93,  331 => 187,  326 => 76,  321 => 91,  304 => 79,  291 => 65,  272 => 76,  267 => 98,  257 => 61,  253 => 95,  242 => 112,  232 => 84,  186 => 54,  127 => 34,  114 => 98,  104 => 40,  23 => 13,  263 => 57,  256 => 54,  249 => 50,  245 => 49,  239 => 149,  236 => 108,  225 => 89,  213 => 126,  207 => 29,  197 => 56,  191 => 283,  175 => 43,  160 => 63,  155 => 13,  152 => 30,  146 => 11,  137 => 47,  126 => 9,  100 => 93,  97 => 60,  77 => 31,  34 => 9,  20 => 1,  53 => 17,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 136,  430 => 103,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 126,  393 => 125,  387 => 123,  384 => 116,  381 => 122,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 122,  341 => 114,  337 => 103,  322 => 101,  314 => 99,  312 => 142,  309 => 117,  305 => 70,  298 => 173,  294 => 111,  285 => 81,  283 => 70,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 131,  247 => 129,  241 => 47,  229 => 73,  220 => 65,  214 => 61,  177 => 19,  169 => 66,  140 => 18,  132 => 43,  128 => 107,  107 => 23,  61 => 151,  273 => 101,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 60,  224 => 59,  221 => 58,  219 => 33,  217 => 79,  208 => 97,  204 => 28,  179 => 171,  159 => 14,  143 => 10,  135 => 11,  119 => 100,  102 => 5,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  94 => 36,  89 => 17,  85 => 36,  75 => 18,  68 => 31,  56 => 20,  28 => 3,  38 => 9,  26 => 14,  24 => 1,  201 => 57,  196 => 52,  183 => 74,  171 => 63,  166 => 65,  163 => 109,  158 => 62,  156 => 36,  151 => 12,  142 => 58,  138 => 6,  136 => 17,  121 => 34,  117 => 50,  105 => 37,  91 => 40,  62 => 20,  49 => 20,  87 => 28,  31 => 4,  25 => 1,  21 => 1,  19 => 1,  93 => 41,  88 => 85,  78 => 33,  46 => 13,  44 => 11,  27 => 5,  79 => 31,  72 => 26,  69 => 23,  47 => 11,  40 => 9,  37 => 8,  22 => 11,  246 => 69,  157 => 64,  145 => 57,  139 => 59,  131 => 10,  123 => 8,  120 => 47,  115 => 25,  111 => 97,  108 => 96,  101 => 41,  98 => 43,  96 => 19,  83 => 32,  74 => 29,  66 => 22,  55 => 13,  52 => 15,  50 => 28,  43 => 10,  41 => 7,  35 => 6,  32 => 5,  29 => 4,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 177,  187 => 86,  182 => 172,  176 => 102,  173 => 18,  168 => 17,  164 => 54,  162 => 37,  154 => 46,  149 => 62,  147 => 58,  144 => 19,  141 => 95,  133 => 51,  130 => 109,  125 => 40,  122 => 13,  116 => 6,  112 => 42,  109 => 45,  106 => 35,  103 => 94,  99 => 30,  95 => 19,  92 => 35,  86 => 38,  82 => 30,  80 => 82,  73 => 13,  64 => 41,  60 => 21,  57 => 20,  54 => 34,  51 => 12,  48 => 11,  45 => 25,  42 => 24,  39 => 16,  36 => 6,  33 => 5,  30 => 4,);
    }
}
