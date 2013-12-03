<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig */
class __TwigTemplate_b7fd2883af8cb3b7484695899bee067a915cea301d1cc3923bfd4bfb32165a9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT", 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  124 => 31,  81 => 25,  399 => 158,  394 => 156,  377 => 147,  371 => 144,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 135,  342 => 133,  329 => 126,  325 => 125,  308 => 118,  289 => 109,  276 => 102,  270 => 100,  260 => 94,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  188 => 68,  185 => 65,  170 => 61,  167 => 60,  148 => 53,  90 => 34,  84 => 33,  690 => 410,  681 => 404,  676 => 401,  674 => 397,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  613 => 366,  605 => 361,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 330,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 295,  486 => 292,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  396 => 157,  383 => 150,  366 => 142,  361 => 208,  346 => 196,  335 => 129,  331 => 187,  326 => 185,  321 => 124,  304 => 174,  291 => 169,  272 => 158,  267 => 98,  257 => 149,  253 => 148,  242 => 140,  232 => 83,  186 => 111,  127 => 32,  114 => 71,  104 => 67,  23 => 18,  263 => 104,  256 => 102,  249 => 89,  245 => 88,  239 => 86,  236 => 93,  225 => 89,  213 => 126,  207 => 83,  197 => 119,  191 => 69,  175 => 72,  160 => 68,  155 => 55,  152 => 92,  146 => 63,  137 => 60,  126 => 51,  100 => 40,  97 => 63,  77 => 28,  34 => 16,  20 => 11,  53 => 23,  480 => 162,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 242,  402 => 130,  398 => 129,  393 => 126,  387 => 152,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 97,  305 => 95,  298 => 173,  294 => 111,  285 => 89,  283 => 106,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 95,  229 => 73,  220 => 70,  214 => 75,  177 => 63,  169 => 71,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 18,  273 => 101,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 80,  224 => 71,  221 => 78,  219 => 129,  217 => 87,  208 => 74,  204 => 72,  179 => 107,  159 => 61,  143 => 56,  135 => 35,  119 => 28,  102 => 39,  71 => 19,  67 => 27,  63 => 24,  59 => 14,  94 => 38,  89 => 20,  85 => 25,  75 => 28,  68 => 22,  56 => 40,  28 => 14,  38 => 32,  26 => 14,  24 => 12,  201 => 92,  196 => 71,  183 => 74,  171 => 102,  166 => 100,  163 => 69,  158 => 67,  156 => 93,  151 => 63,  142 => 50,  138 => 36,  136 => 48,  121 => 75,  117 => 41,  105 => 27,  91 => 27,  62 => 23,  49 => 20,  87 => 25,  31 => 15,  25 => 12,  21 => 11,  19 => 11,  93 => 28,  88 => 60,  78 => 29,  46 => 7,  44 => 19,  27 => 13,  79 => 18,  72 => 16,  69 => 50,  47 => 19,  40 => 18,  37 => 17,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 49,  131 => 52,  123 => 50,  120 => 40,  115 => 43,  111 => 45,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 52,  66 => 25,  55 => 22,  52 => 17,  50 => 22,  43 => 18,  41 => 18,  35 => 5,  32 => 16,  29 => 15,  209 => 82,  203 => 122,  199 => 80,  193 => 70,  189 => 71,  187 => 75,  182 => 64,  176 => 64,  173 => 62,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 64,  147 => 90,  144 => 62,  141 => 61,  133 => 55,  130 => 46,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 69,  106 => 40,  103 => 32,  99 => 26,  95 => 37,  92 => 61,  86 => 33,  82 => 22,  80 => 29,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 21,  48 => 13,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 4,  30 => 7,);
    }
}
