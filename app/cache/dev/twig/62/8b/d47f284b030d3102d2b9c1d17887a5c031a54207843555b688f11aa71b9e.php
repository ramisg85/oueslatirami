<?php

/* ROCategorieBundle:categorie:detail_categorie.html.twig */
class __TwigTemplate_628bd47f284b030d3102d2b9c1d17887a5c031a54207843555b688f11aa71b9e extends Twig_Template
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
        echo "Détail catégorie";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom_equipement", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"col-sm-3\">";
        // line 14
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Retour listing catégorie", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_categorie_homepage"), "glyphicon" => "glyphicon glyphicon-arrow-left"));
        echo "</div>
    <div class=\"col-sm-3\">";
        // line 15
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Modifier infos catégorie", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_categorie_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "glyphicon" => "glyphicon glyphicon-pencil"));
        echo "</div>
    <div class=\"col-sm-3\">";
        // line 16
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Supprimer catégorie", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_categorie_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "glyphicon" => "glyphicon glyphicon-remove"));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ROCategorieBundle:categorie:detail_categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  63 => 15,  59 => 14,  52 => 10,  46 => 6,  43 => 5,  37 => 4,  11 => 1,);
    }
}
