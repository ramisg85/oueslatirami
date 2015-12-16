<?php

/* ROEquipementBundle:equipement:detail_equipement.html.twig */
class __TwigTemplate_e663dfefa03e0dbb35805891676e648496313600d7730577f233718aeced7727 extends Twig_Template
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
        echo "Détail équipement";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Equipement</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomEquipement", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descEquipement", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"col-sm-3\">";
        // line 18
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Retour listing équipement", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_equipement_homepage"), "glyphicon" => "glyphicon glyphicon-arrow-left"));
        echo "</div>
    <div class=\"col-sm-3\">";
        // line 19
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Modifier infos équipement", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_equipement_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "glyphicon" => "glyphicon glyphicon-pencil"));
        echo "</div>
    <div class=\"col-sm-3\">";
        // line 20
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Supprimer équipement", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_equipement_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "glyphicon" => "glyphicon glyphicon-remove"));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ROEquipementBundle:equipement:detail_equipement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  70 => 19,  66 => 18,  59 => 14,  52 => 10,  46 => 6,  43 => 5,  37 => 4,  11 => 1,);
    }
}
