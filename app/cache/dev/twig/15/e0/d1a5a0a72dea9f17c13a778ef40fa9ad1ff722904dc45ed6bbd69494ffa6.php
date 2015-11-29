<?php

/* :BackOffice:buttom.html.twig */
class __TwigTemplate_15e0d1a5a0a72dea9f17c13a778ef40fa9ad1ff722904dc45ed6bbd69494ffa6 extends Twig_Template
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
        // line 2
        if ((array_key_exists("routeButtom", $context) && array_key_exists("nomButtom", $context))) {
            // line 3
            echo "    <div class=\"row\">
        <div class=\"col-xs-12 col-md-12\" ";
            // line 4
            if (array_key_exists("align", $context)) {
                echo " align=\"";
                echo twig_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : $this->getContext($context, "align")), "html", null, true);
                echo "\" ";
            }
            echo " ><br />
            <a class=\"btn btn-primary\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["routeButtom"]) ? $context["routeButtom"] : $this->getContext($context, "routeButtom")), "html", null, true);
            echo "\">
                <i ";
            // line 6
            if (array_key_exists("glyphicon", $context)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, (isset($context["glyphicon"]) ? $context["glyphicon"] : $this->getContext($context, "glyphicon")), "html", null, true);
                echo "\" ";
            }
            echo " ></i>
                ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["nomButtom"]) ? $context["nomButtom"] : $this->getContext($context, "nomButtom")), "html", null, true);
            echo "
            </a>
        </div>
    </div>
    <br />
";
        }
    }

    public function getTemplateName()
    {
        return ":BackOffice:buttom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  36 => 6,  32 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }
}
