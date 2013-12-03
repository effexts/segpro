<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_98f508024f51b11b6b5a597798eaae70a858abdbd921df5e9b0eb7e909aee95c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please e-mail us at [email] and let us know
            what you were doing when this error occurred. We will fix it as soon
            as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,  126 => 37,  121 => 34,  111 => 24,  107 => 23,  103 => 22,  95 => 19,  89 => 17,  85 => 16,  81 => 15,  60 => 37,  54 => 34,  45 => 27,  34 => 9,  24 => 1,  242 => 129,  239 => 128,  234 => 126,  231 => 116,  213 => 96,  205 => 90,  202 => 89,  192 => 77,  185 => 72,  176 => 66,  173 => 65,  167 => 63,  165 => 62,  158 => 60,  154 => 58,  152 => 57,  108 => 16,  101 => 11,  98 => 21,  67 => 9,  64 => 128,  62 => 38,  53 => 109,  51 => 89,  43 => 19,  41 => 13,  35 => 6,  32 => 9,  147 => 72,  139 => 70,  136 => 69,  132 => 68,  115 => 25,  112 => 52,  106 => 21,  88 => 17,  82 => 16,  76 => 14,  73 => 13,  56 => 35,  52 => 9,  49 => 8,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}
