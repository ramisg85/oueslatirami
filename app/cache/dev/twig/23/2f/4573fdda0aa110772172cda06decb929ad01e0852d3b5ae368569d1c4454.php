<?php

/* :BackOffice:layout.html.twig */
class __TwigTemplate_232f4573fdda0aa110772172cda06decb929ad01e0852d3b5ae368569d1c4454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'buttonAdd' => array($this, 'block_buttonAdd'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.\">
        <meta name=\"author\" content=\"Oueslati Rami\">

        <!-- The styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/css/charisma-app.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/bower_components/chosen/chosen.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/bower_components/responsive-tables/responsive-tables.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/css/elfinder.theme.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/css/jquery.iphone.toggle.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/css/animate.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/css/datepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/css/flags.css"), "html", null, true);
        echo "\" type=\"text/css\" />

        <!-- The fav icon -->
        <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/img/img/favicon.ico"), "html", null, true);
        echo "\">
    </head>

    <body>
        <!-- topbar starts -->
        <div class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"navbar-inner\">
                <button type=\"button\" class=\"navbar-toggle pull-left animated flip\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

                <!--<a class=\"navbar-brand\" href=\"index.html\"> <img alt=\"Charisma Logo\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/img/logoAkka.png"), "html", null, true);
        echo "\" class=\"hidden-xs\"/></a>-->

                <div class=\"pull-right\">
                    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/img/blank.gif"), "html", null, true);
        echo "\" class=\"flag flag-fr\" alt=\"Fr\" />
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/img/blank.gif"), "html", null, true);
        echo "\" class=\"flag flag-gb\" alt=\"En\" />
                </div>

                <!-- user dropdown starts -->
                <div class=\"btn-group pull-right\">
                    <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"glyphicon glyphicon-user\"></i><span class=\"hidden-sm hidden-xs\"> admin</span>
                        <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Mon profile</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("utilisateur_deconnexion");
        echo "\">Déconnexion</a></li>
                    </ul>
                </div>
                <!-- user dropdown ends -->

                <ul class=\"collapse navbar-collapse nav navbar-nav top-menu\">
                    <li><a href=\"#\"><i class=\"glyphicon glyphicon-globe\"></i> Bonjour ";
        // line 58
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "firstname", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "lastname", array(), "any", true, true))) {
            echo " ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array())), 20, true, "..."), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array())), 20, true, "..."), "html", null, true);
            echo " ";
        }
        echo "</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-star\"></i> Dropdown <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </li>
                    <li>
                        <form class=\"navbar-search pull-left\">
                            <input placeholder=\"Search\" class=\"search-query form-control col-md-10\" name=\"query\" type=\"text\">
                        </form>
                    </li>
                </ul>

            </div>
        </div>
        <!-- topbar ends -->
        <div class=\"ch-container\">
            <div class=\"row\">

                <!-- left menu starts -->
                <div class=\"col-sm-2 col-lg-2\">
                    <div class=\"sidebar-nav\">
                        <div class=\"nav-canvas\">
                            <div class=\"nav-sm nav nav-stacked\">

                            </div>
                            <ul class=\"nav nav-pills nav-stacked main-menu\">
                                <li class=\"nav-header\">Main</li>
                                <li><a class=\"ajax-link\" href=\"index.html\"><i class=\"glyphicon glyphicon-signal\"></i><span> Tableau de bord</span></a>
                                </li>
                                <li class=\"accordion\">
                                    <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("ro_utilisateur_homepage");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i><span> Utilisateurs</span></a>
                                    <ul class=\"nav nav-pills nav-stacked\">
                                        <li><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("ro_utilisateur_add");
        echo "\">Ajouter un utilisateur</a></li>
                                        <li><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("ro_utilisateur_homepage");
        echo "\">Listing utilisateur</a></li>
                                    </ul>
                                </li>
                                <li class=\"accordion\">
                                    <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("ro_agence_homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i><span> Agence</span></a>
                                    <ul class=\"nav nav-pills nav-stacked\">
                                        <li><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("ro_agence_add");
        echo "\">Ajouter une agence</a></li>
                                        <li><a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("ro_agence_homepage");
        echo "\">Listing agence</a></li>
                                    </ul>
                                </li>
                                <li class=\"accordion\">
                                    <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("ro_vehicule_homepage");
        echo "\"><i class=\"glyphicon glyphicon-road\"></i><span> Véhicule</span></a>
                                    <ul class=\"nav nav-pills nav-stacked\">
                                        <li><a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("ro_vehicule_add");
        echo "\">Ajouter un véhicule</a></li>
                                        <li><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("ro_vehicule_homepage");
        echo "\">Listing véhicule</a></li>
                                    </ul>
                                </li>
                                <li class=\"accordion\">
                                    <a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("ro_equipement_homepage");
        echo "\"><i class=\"glyphicon glyphicon-th\"></i><span> Equipement</span></a>
                                    <ul class=\"nav nav-pills nav-stacked\">
                                        <li><a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("ro_equipement_add");
        echo "\">Ajouter un équipement</a></li>
                                        <li><a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("ro_equipement_homepage");
        echo "\">Listing équipement</a></li>
                                    </ul>
                                </li>
                                <li class=\"accordion\">
                                    <a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("ro_categorie_homepage");
        echo "\"><i class=\"glyphicon glyphicon-th-list\"></i><span> Catégorie</span></a>
                                    <ul class=\"nav nav-pills nav-stacked\">
                                        <li><a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("ro_categorie_add");
        echo "\">Ajouter une catégorie</a></li>
                                        <li><a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("ro_categorie_homepage");
        echo "\">Listing catégorie</a></li>
                                    </ul>
                                </li>
                                <li class=\"accordion\">
                                    <a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("ro_marque_homepage");
        echo "\"><i class=\"glyphicon glyphicon-book\"></i><span> Marque</span></a>
                                    <ul class=\"nav nav-pills nav-stacked\">
                                        <li><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("ro_marque_add");
        echo "\">Ajouter une marque</a></li>
                                        <li><a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("ro_marque_homepage");
        echo "\">Listing marque</a></li>
                                    </ul>
                                </li>
                                <li class=\"accordion\">
                                    <a href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("ro_modele_homepage");
        echo "\"><i class=\"glyphicon glyphicon-asterisk\"></i><span> Modéle</span></a>
                                    <ul class=\"nav nav-pills nav-stacked\">
                                        <li><a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("ro_modele_add");
        echo "\">Ajouter un modéle</a></li>
                                        <li><a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("ro_modele_homepage");
        echo "\">Listing modéle</a></li>
                                    </ul>
                                </li>
                                <li class=\"accordion\">
                                    <a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("ro_reservation_homepage");
        echo "\"><i class=\"glyphicon glyphicon-check\"></i><span> Réservation</span></a>
                                    <ul class=\"nav nav-pills nav-stacked\">
                                        <li><a href=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("ro_reservation_add");
        echo "\">Ajouter une réservation</a></li>
                                        <li><a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("ro_reservation_homepage");
        echo "\">Listing Réservation</a></li>
                                    </ul>
                                </li>
                                <li class=\"accordion\">
                                    <a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("ro_contrat_homepage");
        echo "\"><i class=\"glyphicon glyphicon-briefcase\"></i><span> Contrat</span></a>
                                    <ul class=\"nav nav-pills nav-stacked\">
                                        <li><a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("ro_contrat_add");
        echo "\">Ajouter un contrat</a></li>
                                        <li><a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("ro_contrat_homepage");
        echo "\">Listing contrat</a></li>
                                    </ul>
                                </li>
                                <li class=\"accordion\">
                                    <a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("ro_entreprise_homepage");
        echo "\"><i class=\"glyphicon glyphicon-flag\"></i><span> Entreprise</span></a>
                                    <ul class=\"nav nav-pills nav-stacked\">
                                        <li><a href=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("ro_entreprise_add");
        echo "\">Ajouter une entreprise</a></li>
                                        <li><a href=\"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("ro_entreprise_homepage");
        echo "\">Listing entreprise</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/span-->
                <!-- left menu ends -->

                <noscript>
                <div class=\"alert alert-block col-md-12\">
                    <h4 class=\"alert-heading\">Attention!</h4>

                    <p>Vous devez avoir <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> activé sur votre navigateur.</p>
                </div>
                </noscript>

                <div id=\"content\" class=\"col-lg-10 col-sm-10\">
                    ";
        // line 181
        if ((array_key_exists("aff_dashboard", $context) && ((isset($context["aff_dashboard"]) ? $context["aff_dashboard"] : $this->getContext($context, "aff_dashboard")) == 1))) {
            // line 182
            echo "                        ";
            echo twig_include($this->env, $context, "::blocks_dashboard.html.twig");
            echo "
                    ";
        }
        // line 184
        echo "                    <div class=\"row\">
                        <div class=\"box col-md-12\">
                            <div class=\"box-inner\">
                                <div class=\"box-header well\">
                                    <h2><i class=\"glyphicon glyphicon-info-sign\"></i> ";
        // line 188
        $this->displayBlock("title", $context, $blocks);
        echo " </h2>


                                    <!-- content starts -->
                                    ";
        // line 192
        $this->displayBlock('buttonAdd', $context, $blocks);
        // line 194
        echo "
                                    <div class=\"box-icon\">
                                        <a href=\"#\" class=\"btn btn-setting btn-round btn-default\"><i
                                                class=\"glyphicon glyphicon-cog\"></i></a>
                                        <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
                                                class=\"glyphicon glyphicon-chevron-up\"></i></a>
                                        <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i
                                                class=\"glyphicon glyphicon-remove\"></i></a>
                                    </div>
                                </div>
                                <div class=\"box-content row\">
                                    <div class=\"col-lg-12 col-md-12\">
                                        ";
        // line 206
        $this->displayBlock('body', $context, $blocks);
        // line 208
        echo "                                    </div>
                                </div>         

                                <footer class=\"row\">
                                    <p class=\"col-md-9 col-sm-9 col-xs-12 copyright\">&copy; Oueslati Rami</p>
                                    <p class=\"col-md-3 col-sm-3 col-xs-12 powered-by\">Powered by: Oueslati Rami</p>
                                </footer>

                                <!-- jQuery -->
                                <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/bower_components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

                                <!-- javascript -->
                                <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                                <!-- library for cookie management -->
                                <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/js/jquery.cookie.js"), "html", null, true);
        echo "\">></script>
                                <!-- select or dropdown enhancer -->
                                <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
                                <!-- library for making tables responsive -->
                                <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>
                                <!-- for iOS style toggle switch -->
                                <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
                                <!-- autogrowing textarea plugin -->
                                <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
                                <!-- application script for Charisma demo -->
                                <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/js/charisma.js"), "html", null, true);
        echo "\"></script>

                                <!-- application script for bootstrap datepicker -->
                                <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/js_datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/js_datepicker/bootstrap-datepicker.en.js"), "html", null, true);
        echo "\" ></script>
                                <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backoffice/js_datepicker/conf_datepicker.js"), "html", null, true);
        echo "\"></script>

                                <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 240
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

                                ";
        // line 243
        echo "                            ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 244
        echo "                        </div><!--/.fluid-container-->
                        </body>
                        </html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " | Gestion de cv ";
    }

    // line 192
    public function block_buttonAdd($context, array $blocks = array())
    {
        // line 193
        echo "                                    ";
    }

    // line 206
    public function block_body($context, array $blocks = array())
    {
        // line 207
        echo "                                        ";
    }

    // line 243
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":BackOffice:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 243,  488 => 207,  485 => 206,  481 => 193,  478 => 192,  472 => 5,  466 => 244,  463 => 243,  458 => 240,  454 => 239,  449 => 237,  445 => 236,  441 => 235,  435 => 232,  430 => 230,  425 => 228,  420 => 226,  415 => 224,  410 => 222,  405 => 220,  399 => 217,  388 => 208,  386 => 206,  372 => 194,  370 => 192,  363 => 188,  357 => 184,  351 => 182,  349 => 181,  327 => 162,  323 => 161,  318 => 159,  311 => 155,  307 => 154,  302 => 152,  295 => 148,  291 => 147,  286 => 145,  279 => 141,  275 => 140,  270 => 138,  263 => 134,  259 => 133,  254 => 131,  247 => 127,  243 => 126,  238 => 124,  231 => 120,  227 => 119,  222 => 117,  215 => 113,  211 => 112,  206 => 110,  199 => 106,  195 => 105,  190 => 103,  183 => 99,  179 => 98,  174 => 96,  127 => 58,  118 => 52,  103 => 40,  99 => 39,  93 => 36,  76 => 22,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  29 => 5,  23 => 1,);
    }
}
