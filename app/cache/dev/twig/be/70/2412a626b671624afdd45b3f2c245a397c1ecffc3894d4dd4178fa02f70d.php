<?php

/* ROUtilisateurBundle:utilisateur:connexion_utilisateur.html.twig */
class __TwigTemplate_be702412a626b671624afdd45b3f2c245a397c1ecffc3894d4dd4178fa02f70d extends Twig_Template
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
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <title>Administration gestion de ekri.net</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"ekri.net sit de location de véhicule en ligne pour particuliers et professionels\">
        <meta name=\"author\" content=\"Muhammad Usman\">

        <!-- The styles -->
        <link id=\"bs-css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/css/charisma-app.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        
        <!-- The fav icon -->
        <link rel=\"shortcut icon\" href=\"img/favicon.ico\">
    </head>

    <body>
        <div class=\"ch-container\">
            <div class=\"row\">

                <div class=\"row\">
                    <div class=\"col-md-12 center login-header\">
                        <h2>Bienvenue dans l'administration ekri.net</h2>
                    </div>
                    <!--/span-->
                </div><!--/row-->

                <div class=\"row\">
                    <div class=\"well col-md-5 center login-box\">
                        
                            ";
        // line 32
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 33
            echo "                                <div class=\"alert alert-danger\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "<br /></div>
                            ";
        } else {
            // line 35
            echo "                                <div  class=\"alert alert-info\">Veillez saisir votre login et mot de passe<br /></div>
                            ";
        }
        // line 37
        echo "                        
                        <form action=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("utilisateur_connexion_check");
        echo "\" method=\"post\">
                            <fieldset>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user red\"></i></span>
                                    <input type=\"text\" class=\"form-control\" name=\"_username\" id=\"username\" placeholder=\"Login\">
                                </div>
                                <div class=\"clearfix\"></div><br>

                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock red\"></i></span>
                                    <input type=\"password\" class=\"form-control\" name=\"_password\" id=\"password\" placeholder=\"Mot de passe\">
                                </div>
                                <div class=\"clearfix\"></div>

                                <p class=\"center col-md-5\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Connexion</button>
                                </p>
                            </fieldset>
                        </form>
                    </div>
                    <!--/span-->
                </div><!--/row-->
            </div><!--/fluid-row-->

        </div><!--/.fluid-container-->

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ROUtilisateurBundle:utilisateur:connexion_utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 38,  70 => 37,  66 => 35,  60 => 33,  58 => 32,  35 => 12,  31 => 11,  19 => 1,);
    }
}
