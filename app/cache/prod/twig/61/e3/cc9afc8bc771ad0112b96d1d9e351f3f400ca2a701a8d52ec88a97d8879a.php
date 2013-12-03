<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_61e3cc9afc8bc771ad0112b96d1d9e351f3f400ca2a701a8d52ec88a97d8879a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 27,  54 => 26,  38 => 18,  33 => 16,  344 => 97,  340 => 95,  338 => 94,  335 => 93,  321 => 92,  315 => 90,  312 => 89,  295 => 88,  292 => 87,  277 => 81,  268 => 73,  259 => 70,  254 => 69,  252 => 68,  227 => 60,  215 => 54,  199 => 53,  196 => 52,  193 => 51,  190 => 50,  187 => 49,  184 => 48,  181 => 47,  178 => 46,  176 => 45,  173 => 44,  161 => 38,  158 => 37,  156 => 36,  153 => 35,  143 => 29,  137 => 27,  131 => 25,  129 => 24,  124 => 23,  121 => 22,  118 => 21,  112 => 19,  110 => 18,  82 => 10,  80 => 9,  60 => 3,  53 => 80,  48 => 67,  24 => 13,  99 => 30,  90 => 27,  77 => 8,  66 => 23,  63 => 4,  58 => 19,  55 => 18,  42 => 64,  39 => 12,  32 => 35,  30 => 17,  27 => 14,  25 => 12,  52 => 17,  47 => 25,  41 => 23,  35 => 22,  23 => 12,  20 => 11,  34 => 41,  31 => 19,  29 => 34,  26 => 14,  22 => 12,  19 => 11,  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  480 => 151,  477 => 150,  474 => 149,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  457 => 131,  453 => 124,  449 => 123,  446 => 122,  441 => 105,  430 => 103,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  374 => 81,  369 => 136,  367 => 131,  361 => 127,  357 => 125,  355 => 122,  352 => 121,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  302 => 114,  300 => 113,  296 => 111,  291 => 109,  288 => 85,  285 => 84,  282 => 83,  280 => 82,  275 => 77,  272 => 76,  269 => 75,  264 => 72,  249 => 67,  246 => 69,  243 => 68,  226 => 67,  223 => 66,  220 => 56,  214 => 61,  208 => 60,  205 => 59,  201 => 57,  197 => 56,  192 => 55,  186 => 54,  174 => 53,  172 => 52,  169 => 51,  166 => 50,  163 => 49,  160 => 48,  157 => 47,  154 => 46,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  140 => 28,  136 => 39,  130 => 35,  127 => 34,  123 => 33,  119 => 31,  116 => 30,  108 => 144,  105 => 143,  102 => 17,  98 => 15,  96 => 139,  93 => 138,  91 => 75,  88 => 12,  86 => 65,  83 => 64,  81 => 26,  78 => 29,  73 => 7,  68 => 30,  65 => 5,  62 => 24,  59 => 23,  56 => 81,  50 => 25,  45 => 66,  43 => 21,  40 => 44,  37 => 43,);
    }
}
