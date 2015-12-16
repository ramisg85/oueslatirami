<?php

/* ROAgenceBundle:agence:detail_agence.html.twig */
class __TwigTemplate_72d5d0950d87442aeed132ec6813749c630df5cc38ef52d9a43c2a8c42997a2f extends Twig_Template
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
        echo "Détail agence";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Nom agence</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomAgence", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse agencel1</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresseAgenceL1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse agencel2</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresseAgenceL2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cp agence</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cpAgence", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville agence</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "villeAgence", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pays agence</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paysAgence", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Logo agence</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logoAgence", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date d'expiration</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expireAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crée le</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Derniére MAJ</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"col-sm-3\">";
        // line 51
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Retour listing agence", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_agence_homepage"), "glyphicon" => "glyphicon glyphicon-arrow-left"));
        echo "</div>
    <div class=\"col-sm-3\">";
        // line 52
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Modifier infos agence", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_agence_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "glyphicon" => "glyphicon glyphicon-pencil"));
        echo "</div>
    <div class=\"col-sm-3\">";
        // line 53
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Supprimer agence", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_agence_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "glyphicon" => "glyphicon glyphicon-remove"));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ROAgenceBundle:agence:detail_agence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  126 => 52,  122 => 51,  115 => 47,  108 => 43,  101 => 39,  94 => 35,  87 => 31,  80 => 27,  73 => 23,  66 => 19,  59 => 15,  52 => 11,  46 => 7,  43 => 6,  37 => 4,  11 => 1,);
    }
}
