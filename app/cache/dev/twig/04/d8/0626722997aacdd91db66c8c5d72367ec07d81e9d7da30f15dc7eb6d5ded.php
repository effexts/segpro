<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_04d80626722997aacdd91db66c8c5d72367ec07d81e9d7da30f15dc7eb6d5ded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 79,  161 => 70,  76 => 57,  194 => 87,  134 => 58,  129 => 56,  65 => 29,  318 => 122,  316 => 121,  299 => 112,  293 => 109,  288 => 107,  284 => 106,  281 => 105,  279 => 104,  275 => 103,  265 => 99,  250 => 93,  228 => 83,  222 => 81,  215 => 78,  210 => 75,  174 => 64,  165 => 71,  153 => 56,  150 => 64,  113 => 41,  110 => 47,  58 => 23,  124 => 31,  81 => 25,  399 => 158,  394 => 156,  377 => 147,  371 => 144,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 135,  342 => 133,  329 => 126,  325 => 125,  308 => 118,  289 => 109,  276 => 102,  270 => 100,  260 => 98,  237 => 86,  234 => 84,  218 => 77,  202 => 73,  188 => 68,  185 => 68,  170 => 73,  167 => 60,  148 => 63,  90 => 34,  84 => 38,  690 => 410,  681 => 404,  676 => 401,  674 => 397,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  613 => 366,  605 => 361,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 330,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 295,  486 => 292,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  396 => 157,  383 => 150,  366 => 142,  361 => 208,  346 => 196,  335 => 129,  331 => 187,  326 => 185,  321 => 123,  304 => 174,  291 => 169,  272 => 158,  267 => 98,  257 => 149,  253 => 95,  242 => 140,  232 => 84,  186 => 82,  127 => 55,  114 => 71,  104 => 67,  23 => 18,  263 => 104,  256 => 96,  249 => 89,  245 => 88,  239 => 86,  236 => 93,  225 => 89,  213 => 126,  207 => 83,  197 => 70,  191 => 69,  175 => 76,  160 => 69,  155 => 55,  152 => 92,  146 => 63,  137 => 58,  126 => 51,  100 => 36,  97 => 63,  77 => 27,  34 => 26,  20 => 11,  53 => 23,  480 => 162,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 242,  402 => 130,  398 => 129,  393 => 126,  387 => 152,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 89,  283 => 106,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 95,  229 => 73,  220 => 80,  214 => 75,  177 => 63,  169 => 73,  140 => 55,  132 => 57,  128 => 49,  107 => 36,  61 => 25,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 80,  224 => 71,  221 => 78,  219 => 129,  217 => 79,  208 => 74,  204 => 73,  179 => 66,  159 => 69,  143 => 56,  135 => 35,  119 => 28,  102 => 37,  71 => 19,  67 => 28,  63 => 50,  59 => 23,  94 => 38,  89 => 39,  85 => 30,  75 => 28,  68 => 30,  56 => 24,  28 => 13,  38 => 17,  26 => 20,  24 => 13,  201 => 72,  196 => 71,  183 => 74,  171 => 63,  166 => 100,  163 => 69,  158 => 67,  156 => 67,  151 => 63,  142 => 60,  138 => 36,  136 => 48,  121 => 52,  117 => 50,  105 => 46,  91 => 27,  62 => 24,  49 => 21,  87 => 25,  31 => 14,  25 => 12,  21 => 12,  19 => 11,  93 => 68,  88 => 60,  78 => 35,  46 => 35,  44 => 19,  27 => 13,  79 => 18,  72 => 56,  69 => 24,  47 => 21,  40 => 18,  37 => 17,  22 => 12,  246 => 90,  157 => 56,  145 => 52,  139 => 59,  131 => 48,  123 => 53,  120 => 40,  115 => 49,  111 => 45,  108 => 47,  101 => 73,  98 => 43,  96 => 31,  83 => 25,  74 => 33,  66 => 25,  55 => 22,  52 => 21,  50 => 20,  43 => 20,  41 => 18,  35 => 16,  32 => 15,  29 => 15,  209 => 82,  203 => 122,  199 => 80,  193 => 70,  189 => 71,  187 => 75,  182 => 79,  176 => 76,  173 => 62,  168 => 60,  164 => 71,  162 => 70,  154 => 66,  149 => 64,  147 => 90,  144 => 61,  141 => 61,  133 => 55,  130 => 56,  125 => 45,  122 => 44,  116 => 41,  112 => 48,  109 => 69,  106 => 40,  103 => 45,  99 => 26,  95 => 42,  92 => 61,  86 => 64,  82 => 33,  80 => 29,  73 => 29,  64 => 23,  60 => 22,  57 => 22,  54 => 18,  51 => 21,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 4,  30 => 15,);
    }
}
