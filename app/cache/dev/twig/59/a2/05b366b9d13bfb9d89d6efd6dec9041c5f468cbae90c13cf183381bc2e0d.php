<?php

/* ROMarqueBundle:marque:detail_marque.html.twig */
class __TwigTemplate_59a205b366b9d13bfb9d89d6efd6dec9041c5f468cbae90c13cf183381bc2e0d extends Twig_Template
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
        echo "Détail marque";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomMarque", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descMarque", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th valign=\"top\">Liste des modéles</th>
                <td>
                ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modeles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                    - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "denominationModele", array()), "html", null, true);
            echo "
                    <br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </td>
            </tr>
        </tbody>
    </table>
    <div class=\"col-sm-3\">";
        // line 27
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Retour listing marque", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_marque_homepage"), "glyphicon" => "glyphicon glyphicon-arrow-left"));
        echo "</div>
    <div class=\"col-sm-3\">";
        // line 28
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Modifier infos marque", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_marque_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "glyphicon" => "glyphicon glyphicon-pencil"));
        echo "</div>
    <div class=\"col-sm-3\">";
        // line 29
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Supprimer marque", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_marque_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "glyphicon" => "glyphicon glyphicon-remove"));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ROMarqueBundle:marque:detail_marque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  91 => 28,  87 => 27,  81 => 23,  71 => 20,  67 => 19,  59 => 14,  52 => 10,  46 => 6,  43 => 5,  37 => 4,  11 => 1,);
    }
}
