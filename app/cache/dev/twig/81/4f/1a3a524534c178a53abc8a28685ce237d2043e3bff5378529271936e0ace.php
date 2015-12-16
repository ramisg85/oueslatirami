<?php

/* ROModeleBundle:modele:detail_modele.html.twig */
class __TwigTemplate_814f1a3a524534c178a53abc8a28685ce237d2043e3bff5378529271936e0ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate(":BackOffice:layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":BackOffice:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Détail modéle";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "denominationModele", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marque</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "marque", array()), "nomMarque", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descModele", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"col-sm-3\">";
        // line 22
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Retour listing modéle", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_modele_homepage"), "glyphicon" => "glyphicon glyphicon-arrow-left"));
        echo "</div>
    <div class=\"col-sm-3\">";
        // line 23
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Modifier infos modéle", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_modele_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "glyphicon" => "glyphicon glyphicon-pencil"));
        echo "</div>
    <div class=\"col-sm-3\">";
        // line 24
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Supprimer modéle", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_modele_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "glyphicon" => "glyphicon glyphicon-remove"));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ROModeleBundle:modele:detail_modele.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  77 => 23,  73 => 22,  66 => 18,  59 => 14,  52 => 10,  46 => 6,  43 => 5,  37 => 4,  11 => 1,);
    }
}
