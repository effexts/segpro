<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_a8537b39bef014452da3851165c7cc58e54a0e8a853ae3f338a49fbc04d49a5f extends Twig_Template
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
        // line 1
        echo "<div class=\"search clearfix\" id=\"searchBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle;\" width=\"16\" height=\"16\" alt=\"Search\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC2ElEQVR42u3XvUtbYRQG8JcggSxSiqlQoXUQUfEDnDoIEkK30ulKh0REFEOkitaIaBUU4gchQ8BBGyKGIC79B7rVxaGlm+JooYtQCq2U0oq9OX0eOBeCRXrf69DFwI9z73nPeTlJbrxXIyL/1e0AfyWueTVAEgrwGt5qLGge675e1gPUQaqxsfEgmUyerq6uft3e3v61v78vjDxnnuusYz3WTI0bDXAnHA6/Gh0d/bS7u+vu7e3JdbjOOtazDzmjAg9QF41Gy+vr6+eVSkX8Yj372I9zA8EGiEQi6bW1tfNyuSyK7/II0YEmMBodzYuHfezXmkADNAwNDX3c2dkRKpVKl4hZCIO5SvNZ1LleD/uxzz0c2w/Q0tLyAheYWywWRT0H4wPrhNjf1taWYd56gOHh4XdbW1tC+Xz+CNH4pfVCuo/9AAsLC182NzeFVlZWUojGL60X0n3sB8BFdFEoFISWlpYeIhq/tF5I97EfIJfLufgohZqbm+8jGr+0Xkj3sR9geXn5x8bGhlBHR8czROOX1gvpPvYDzM3NnWSzWaFYLPYG0fil9UK6j/0As7OzWVxMQul0+ht6nuDY/AvrWO/16j7WA/BCerC4uHiJKNTX13eid7wQzs1VzHOddV4P+n9zHwj0l5BfQ35+fl4Ix248Hj8NhUIlLPXDXeQNI8+Z5zrrvJ6BgYEzrMVxHGgAfg3hmZmZD4jiwd3ue3d393F9ff0hnwcYec4812tlMplqb2/vMepigW/H09PTUXgPEsTU1FS1p6dHhwj4QDI5ORmBHFyAXEfXK+DW5icmJqpdXV21Q9g/ko2Pj1MTvIQDOAPReKD5Jq1zwAVR/CVVOzs7OUR/oAFSqZQtB1wQz9jYWLW9vf0I2z2yHgAXWRAOuCCekZGRamtr66HtALw9B+WAC+JJJBI/rQfA081NOOCCEJ6gP1sPMDg4eFNP4Uw9vv3X7HaAq/4AszA5PJFqlwgAAAAASUVORK5CYII=\">
        Search
    </h3>
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_profiler_search");
        echo "\" method=\"get\">
        <label for=\"ip\">IP</label>
        <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"method\">Method</label>
        <select name=\"method\" id=\"method\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "", 1 => "DELETE", 2 => "GET", 3 => "HEAD", 4 => "PATCH", 5 => "POST", 6 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                <option";
            echo ((((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")) == (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </select>
        <div class=\"clear-fix\"></div>
        <label for=\"url\">URL</label>
        <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"token\">Token</label>
        <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"start\">From</label>
        <input type=\"text\" name=\"start\" id=\"start\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"end\">Until</label>
        <input type=\"text\" name=\"end\" id=\"end\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : $this->getContext($context, "end")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"limit\">Limit</label>
        <select name=\"limit\" id=\"limit\">
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 32
            echo "                <option";
            echo ((((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")) == (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </select>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">SEARCH</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 68,  255 => 132,  244 => 119,  231 => 118,  195 => 31,  805 => 267,  802 => 266,  797 => 260,  790 => 256,  784 => 253,  780 => 251,  778 => 250,  775 => 249,  769 => 247,  767 => 246,  764 => 245,  758 => 243,  756 => 242,  753 => 241,  747 => 239,  745 => 238,  742 => 237,  736 => 235,  734 => 234,  731 => 233,  728 => 232,  724 => 187,  718 => 186,  709 => 183,  699 => 181,  691 => 179,  688 => 178,  684 => 282,  682 => 266,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  687 => 178,  683 => 281,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 217,  637 => 216,  632 => 213,  626 => 211,  620 => 209,  606 => 208,  600 => 206,  589 => 201,  579 => 198,  576 => 197,  555 => 195,  552 => 194,  546 => 191,  544 => 190,  537 => 178,  521 => 163,  515 => 161,  503 => 156,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 141,  448 => 139,  438 => 137,  432 => 135,  417 => 130,  401 => 127,  390 => 124,  375 => 168,  373 => 159,  363 => 123,  354 => 119,  198 => 32,  553 => 176,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  517 => 161,  513 => 160,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  463 => 133,  460 => 132,  449 => 123,  441 => 138,  426 => 134,  419 => 98,  410 => 129,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  369 => 157,  333 => 112,  226 => 36,  205 => 59,  172 => 112,  370 => 100,  367 => 131,  343 => 91,  330 => 87,  327 => 86,  320 => 75,  313 => 73,  310 => 81,  302 => 114,  296 => 111,  287 => 64,  271 => 58,  262 => 63,  180 => 104,  12 => 34,  713 => 214,  707 => 211,  704 => 182,  702 => 209,  696 => 180,  686 => 205,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  608 => 187,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 166,  516 => 161,  512 => 160,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 134,  465 => 147,  462 => 146,  451 => 140,  446 => 122,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 107,  358 => 106,  349 => 103,  347 => 115,  339 => 100,  336 => 113,  332 => 88,  324 => 116,  319 => 90,  311 => 89,  307 => 71,  297 => 84,  233 => 107,  223 => 66,  200 => 55,  306 => 140,  303 => 139,  300 => 68,  286 => 80,  274 => 77,  248 => 115,  216 => 25,  192 => 30,  70 => 24,  344 => 97,  340 => 90,  338 => 94,  315 => 83,  295 => 66,  292 => 134,  282 => 80,  280 => 79,  277 => 59,  259 => 55,  190 => 50,  184 => 47,  178 => 72,  118 => 12,  181 => 20,  161 => 38,  76 => 27,  194 => 87,  134 => 58,  129 => 52,  65 => 22,  318 => 144,  316 => 74,  299 => 112,  293 => 75,  288 => 108,  284 => 106,  281 => 61,  279 => 104,  275 => 77,  265 => 64,  250 => 67,  228 => 117,  222 => 71,  215 => 69,  210 => 30,  174 => 118,  165 => 16,  153 => 48,  150 => 58,  113 => 40,  110 => 10,  58 => 18,  124 => 52,  81 => 32,  399 => 158,  394 => 118,  377 => 82,  371 => 113,  359 => 140,  357 => 120,  352 => 121,  348 => 136,  345 => 135,  342 => 101,  329 => 95,  325 => 125,  308 => 118,  289 => 81,  276 => 102,  270 => 100,  260 => 62,  237 => 86,  234 => 119,  218 => 70,  202 => 73,  188 => 21,  185 => 21,  170 => 78,  167 => 60,  148 => 44,  90 => 58,  84 => 27,  690 => 179,  681 => 265,  676 => 262,  674 => 232,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 210,  613 => 188,  605 => 186,  595 => 203,  588 => 350,  581 => 199,  577 => 344,  575 => 341,  573 => 196,  567 => 337,  557 => 177,  550 => 193,  542 => 172,  538 => 319,  531 => 312,  526 => 164,  518 => 307,  514 => 306,  509 => 159,  504 => 158,  492 => 132,  486 => 130,  481 => 290,  466 => 280,  456 => 142,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 132,  415 => 97,  396 => 157,  383 => 150,  366 => 156,  361 => 122,  346 => 92,  335 => 93,  331 => 187,  326 => 76,  321 => 91,  304 => 79,  291 => 65,  272 => 76,  267 => 98,  257 => 61,  253 => 95,  242 => 112,  232 => 84,  186 => 54,  127 => 34,  114 => 39,  104 => 37,  23 => 13,  263 => 57,  256 => 54,  249 => 50,  245 => 49,  239 => 149,  236 => 82,  225 => 89,  213 => 126,  207 => 29,  197 => 56,  191 => 283,  175 => 43,  160 => 63,  155 => 13,  152 => 30,  146 => 11,  137 => 54,  126 => 51,  100 => 36,  97 => 40,  77 => 25,  34 => 9,  20 => 1,  53 => 15,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 136,  430 => 103,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 126,  393 => 125,  387 => 123,  384 => 116,  381 => 122,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 122,  341 => 114,  337 => 103,  322 => 101,  314 => 99,  312 => 142,  309 => 117,  305 => 70,  298 => 173,  294 => 111,  285 => 81,  283 => 70,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 131,  247 => 129,  241 => 47,  229 => 73,  220 => 65,  214 => 61,  177 => 67,  169 => 61,  140 => 18,  132 => 68,  128 => 62,  107 => 35,  61 => 22,  273 => 101,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 60,  224 => 59,  221 => 58,  219 => 33,  217 => 79,  208 => 97,  204 => 28,  179 => 83,  159 => 14,  143 => 10,  135 => 11,  119 => 100,  102 => 45,  71 => 23,  67 => 22,  63 => 21,  59 => 19,  94 => 36,  89 => 30,  85 => 36,  75 => 28,  68 => 23,  56 => 17,  28 => 3,  38 => 12,  26 => 6,  24 => 3,  201 => 57,  196 => 52,  183 => 74,  171 => 63,  166 => 60,  163 => 109,  158 => 62,  156 => 36,  151 => 12,  142 => 58,  138 => 6,  136 => 69,  121 => 34,  117 => 50,  105 => 37,  91 => 35,  62 => 24,  49 => 8,  87 => 32,  31 => 8,  25 => 1,  21 => 2,  19 => 1,  93 => 38,  88 => 17,  78 => 26,  46 => 14,  44 => 11,  27 => 5,  79 => 29,  72 => 26,  69 => 23,  47 => 15,  40 => 8,  37 => 7,  22 => 11,  246 => 69,  157 => 64,  145 => 56,  139 => 70,  131 => 10,  123 => 8,  120 => 57,  115 => 53,  111 => 97,  108 => 96,  101 => 34,  98 => 34,  96 => 35,  83 => 31,  74 => 29,  66 => 25,  55 => 18,  52 => 9,  50 => 15,  43 => 10,  41 => 7,  35 => 6,  32 => 6,  29 => 3,  209 => 67,  203 => 56,  199 => 53,  193 => 51,  189 => 177,  187 => 86,  182 => 172,  176 => 102,  173 => 18,  168 => 17,  164 => 54,  162 => 37,  154 => 46,  149 => 57,  147 => 72,  144 => 19,  141 => 55,  133 => 53,  130 => 109,  125 => 50,  122 => 49,  116 => 6,  112 => 52,  109 => 50,  106 => 21,  103 => 35,  99 => 37,  95 => 34,  92 => 38,  86 => 34,  82 => 16,  80 => 82,  73 => 23,  64 => 21,  60 => 20,  57 => 20,  54 => 19,  51 => 15,  48 => 16,  45 => 14,  42 => 13,  39 => 9,  36 => 7,  33 => 6,  30 => 5,);
    }
}
