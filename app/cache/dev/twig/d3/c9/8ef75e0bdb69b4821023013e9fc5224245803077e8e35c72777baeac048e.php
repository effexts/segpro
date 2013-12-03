<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_d3c98ef75e0bdb69b4821023013e9fc5224245803077e8e35c72777baeac048e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"control-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "var"), "errors")) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "id"), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help")) {
            // line 26
            echo "            <span class=\"help-inline\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        echo $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help");
    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 100,  367 => 99,  343 => 91,  330 => 87,  327 => 86,  320 => 84,  313 => 82,  310 => 81,  302 => 78,  296 => 76,  287 => 72,  271 => 66,  262 => 63,  180 => 104,  12 => 34,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  608 => 187,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  451 => 141,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 117,  358 => 106,  349 => 103,  347 => 102,  339 => 100,  336 => 99,  332 => 88,  324 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  233 => 62,  223 => 27,  200 => 55,  306 => 140,  303 => 139,  300 => 138,  286 => 80,  274 => 77,  248 => 115,  216 => 25,  192 => 23,  70 => 33,  344 => 97,  340 => 90,  338 => 94,  315 => 83,  295 => 88,  292 => 134,  282 => 79,  280 => 69,  277 => 68,  259 => 70,  190 => 50,  184 => 47,  178 => 45,  118 => 28,  181 => 47,  161 => 38,  76 => 35,  194 => 87,  134 => 58,  129 => 56,  65 => 29,  318 => 144,  316 => 121,  299 => 112,  293 => 75,  288 => 85,  284 => 106,  281 => 105,  279 => 104,  275 => 103,  265 => 64,  250 => 67,  228 => 59,  222 => 81,  215 => 54,  210 => 75,  174 => 60,  165 => 76,  153 => 71,  150 => 64,  113 => 39,  110 => 25,  58 => 23,  124 => 43,  81 => 36,  399 => 158,  394 => 118,  377 => 115,  371 => 113,  359 => 140,  357 => 139,  352 => 94,  348 => 136,  345 => 135,  342 => 101,  329 => 95,  325 => 125,  308 => 118,  289 => 81,  276 => 102,  270 => 100,  260 => 62,  237 => 86,  234 => 84,  218 => 77,  202 => 73,  188 => 21,  185 => 20,  170 => 78,  167 => 60,  148 => 63,  90 => 18,  84 => 16,  690 => 410,  681 => 203,  676 => 401,  674 => 397,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  613 => 188,  605 => 186,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 330,  550 => 326,  542 => 172,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 132,  486 => 130,  481 => 290,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  396 => 157,  383 => 150,  366 => 142,  361 => 97,  346 => 92,  335 => 93,  331 => 187,  326 => 93,  321 => 91,  304 => 79,  291 => 82,  272 => 76,  267 => 98,  257 => 61,  253 => 95,  242 => 112,  232 => 84,  186 => 82,  127 => 55,  114 => 50,  104 => 23,  23 => 11,  263 => 71,  256 => 120,  249 => 55,  245 => 88,  239 => 86,  236 => 63,  225 => 89,  213 => 126,  207 => 83,  197 => 54,  191 => 50,  175 => 43,  160 => 52,  155 => 55,  152 => 38,  146 => 34,  137 => 47,  126 => 55,  100 => 42,  97 => 37,  77 => 13,  34 => 13,  20 => 11,  53 => 24,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 119,  393 => 126,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 142,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 84,  283 => 70,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 98,  177 => 63,  169 => 58,  140 => 28,  132 => 57,  128 => 44,  107 => 48,  61 => 25,  273 => 101,  269 => 75,  254 => 60,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 60,  224 => 102,  221 => 78,  219 => 100,  217 => 79,  208 => 57,  204 => 73,  179 => 66,  159 => 69,  143 => 48,  135 => 35,  119 => 28,  102 => 17,  71 => 30,  67 => 30,  63 => 28,  59 => 26,  94 => 40,  89 => 17,  85 => 37,  75 => 32,  68 => 16,  56 => 27,  28 => 14,  38 => 14,  26 => 12,  24 => 13,  201 => 72,  196 => 52,  183 => 74,  171 => 63,  166 => 57,  163 => 69,  158 => 74,  156 => 36,  151 => 63,  142 => 60,  138 => 61,  136 => 60,  121 => 52,  117 => 50,  105 => 26,  91 => 27,  62 => 27,  49 => 23,  87 => 38,  31 => 15,  25 => 12,  21 => 12,  19 => 11,  93 => 40,  88 => 32,  78 => 36,  46 => 9,  44 => 21,  27 => 3,  79 => 33,  72 => 19,  69 => 31,  47 => 25,  40 => 24,  37 => 17,  22 => 12,  246 => 54,  157 => 41,  145 => 52,  139 => 31,  131 => 45,  123 => 30,  120 => 56,  115 => 40,  111 => 30,  108 => 47,  101 => 46,  98 => 42,  96 => 44,  83 => 15,  74 => 19,  66 => 32,  55 => 25,  52 => 24,  50 => 23,  43 => 25,  41 => 23,  35 => 20,  32 => 15,  29 => 13,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 86,  182 => 84,  176 => 102,  173 => 42,  168 => 60,  164 => 54,  162 => 70,  154 => 66,  149 => 36,  147 => 68,  144 => 33,  141 => 66,  133 => 55,  130 => 56,  125 => 45,  122 => 44,  116 => 41,  112 => 26,  109 => 69,  106 => 40,  103 => 44,  99 => 23,  95 => 19,  92 => 43,  86 => 25,  82 => 38,  80 => 14,  73 => 34,  64 => 184,  60 => 27,  57 => 26,  54 => 154,  51 => 29,  48 => 23,  45 => 21,  42 => 20,  39 => 21,  36 => 20,  33 => 16,  30 => 15,);
    }
}
