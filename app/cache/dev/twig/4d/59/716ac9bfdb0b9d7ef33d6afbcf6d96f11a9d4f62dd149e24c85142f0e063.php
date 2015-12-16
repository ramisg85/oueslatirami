<?php

/* ROUtilisateurBundle:utilisateur:detail_utilisateur.html.twig */
class __TwigTemplate_4d59716ac9bfdb0b9d7ef33d6afbcf6d96f11a9d4f62dd149e24c85142f0e063 extends Twig_Template
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
        echo "Détail utilisateur";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomutilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenomutilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emailutilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agence</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agence", array()), "nomAgence", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "loginutilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dtnaissanceutilisateur", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"col-sm-3\">";
        // line 34
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Retour listing utilisateur", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_utilisateur_homepage"), "glyphicon" => "glyphicon glyphicon-arrow-left"));
        echo "</div>
    <div class=\"col-sm-3\">";
        // line 35
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Modifier infos utilisateur", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_utilisateur_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "glyphicon" => "glyphicon glyphicon-pencil"));
        echo "</div>
    <div class=\"col-sm-3\">";
        // line 36
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Supprimer utilisateur", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_utilisateur_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "glyphicon" => "glyphicon glyphicon-remove"));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ROUtilisateurBundle:utilisateur:detail_utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 36,  98 => 35,  94 => 34,  87 => 30,  80 => 26,  73 => 22,  66 => 18,  59 => 14,  52 => 10,  46 => 6,  43 => 5,  37 => 4,  11 => 1,);
    }
}
