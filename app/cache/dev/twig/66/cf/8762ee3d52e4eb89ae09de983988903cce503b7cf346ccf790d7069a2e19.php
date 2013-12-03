<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_66cf8762ee3d52e4eb89ae09de983988903cce503b7cf346ccf790d7069a2e19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br />
        ";
    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  608 => 187,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  451 => 141,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 117,  358 => 106,  349 => 103,  347 => 102,  339 => 100,  336 => 99,  332 => 97,  324 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  233 => 62,  223 => 58,  200 => 55,  306 => 140,  303 => 139,  300 => 138,  286 => 80,  274 => 77,  248 => 115,  216 => 99,  192 => 87,  70 => 33,  344 => 97,  340 => 95,  338 => 94,  315 => 90,  295 => 88,  292 => 134,  282 => 79,  280 => 130,  277 => 78,  259 => 70,  190 => 50,  184 => 47,  178 => 45,  118 => 28,  181 => 47,  161 => 38,  76 => 13,  194 => 87,  134 => 58,  129 => 24,  65 => 5,  318 => 144,  316 => 121,  299 => 112,  293 => 109,  288 => 85,  284 => 106,  281 => 105,  279 => 104,  275 => 103,  265 => 125,  250 => 67,  228 => 59,  222 => 81,  215 => 54,  210 => 75,  174 => 64,  165 => 76,  153 => 71,  150 => 64,  113 => 41,  110 => 25,  58 => 23,  124 => 23,  81 => 15,  399 => 158,  394 => 118,  377 => 115,  371 => 113,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 135,  342 => 101,  329 => 95,  325 => 125,  308 => 118,  289 => 81,  276 => 102,  270 => 100,  260 => 123,  237 => 86,  234 => 84,  218 => 77,  202 => 73,  188 => 68,  185 => 85,  170 => 78,  167 => 60,  148 => 63,  90 => 18,  84 => 16,  690 => 410,  681 => 203,  676 => 401,  674 => 397,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  613 => 188,  605 => 186,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 330,  550 => 326,  542 => 172,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 132,  486 => 130,  481 => 290,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  396 => 157,  383 => 150,  366 => 142,  361 => 107,  346 => 196,  335 => 93,  331 => 187,  326 => 93,  321 => 91,  304 => 174,  291 => 82,  272 => 76,  267 => 98,  257 => 149,  253 => 95,  242 => 112,  232 => 84,  186 => 82,  127 => 55,  114 => 71,  104 => 23,  23 => 18,  263 => 71,  256 => 120,  249 => 67,  245 => 88,  239 => 86,  236 => 63,  225 => 89,  213 => 126,  207 => 83,  197 => 54,  191 => 50,  175 => 43,  160 => 75,  155 => 55,  152 => 38,  146 => 34,  137 => 27,  126 => 51,  100 => 36,  97 => 63,  77 => 8,  34 => 15,  20 => 11,  53 => 24,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 119,  393 => 126,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 142,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 84,  283 => 106,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 95,  229 => 73,  220 => 56,  214 => 98,  177 => 63,  169 => 73,  140 => 28,  132 => 59,  128 => 58,  107 => 24,  61 => 25,  273 => 101,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 60,  224 => 102,  221 => 78,  219 => 100,  217 => 79,  208 => 57,  204 => 73,  179 => 66,  159 => 69,  143 => 29,  135 => 35,  119 => 28,  102 => 17,  71 => 19,  67 => 185,  63 => 17,  59 => 165,  94 => 38,  89 => 39,  85 => 30,  75 => 21,  68 => 6,  56 => 81,  28 => 14,  38 => 19,  26 => 13,  24 => 2,  201 => 72,  196 => 52,  183 => 74,  171 => 63,  166 => 100,  163 => 69,  158 => 74,  156 => 36,  151 => 63,  142 => 60,  138 => 61,  136 => 60,  121 => 29,  117 => 50,  105 => 46,  91 => 27,  62 => 166,  49 => 112,  87 => 17,  31 => 15,  25 => 12,  21 => 12,  19 => 11,  93 => 68,  88 => 12,  78 => 40,  46 => 21,  44 => 21,  27 => 3,  79 => 14,  72 => 199,  69 => 19,  47 => 22,  40 => 44,  37 => 23,  22 => 11,  246 => 90,  157 => 41,  145 => 52,  139 => 31,  131 => 25,  123 => 30,  120 => 56,  115 => 27,  111 => 45,  108 => 47,  101 => 22,  98 => 21,  96 => 31,  83 => 25,  74 => 33,  66 => 25,  55 => 22,  52 => 113,  50 => 23,  43 => 26,  41 => 25,  35 => 16,  32 => 14,  29 => 14,  209 => 95,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 86,  182 => 84,  176 => 81,  173 => 42,  168 => 60,  164 => 71,  162 => 70,  154 => 66,  149 => 36,  147 => 68,  144 => 33,  141 => 66,  133 => 55,  130 => 56,  125 => 45,  122 => 44,  116 => 41,  112 => 26,  109 => 69,  106 => 40,  103 => 45,  99 => 26,  95 => 20,  92 => 19,  86 => 43,  82 => 10,  80 => 25,  73 => 7,  64 => 184,  60 => 16,  57 => 15,  54 => 154,  51 => 14,  48 => 23,  45 => 22,  42 => 21,  39 => 20,  36 => 19,  33 => 16,  30 => 15,);
    }
}
