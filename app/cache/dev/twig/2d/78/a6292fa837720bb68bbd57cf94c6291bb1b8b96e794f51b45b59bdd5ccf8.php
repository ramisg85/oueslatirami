<?php

/* ROCategorieBundle:categorie:lister_categorie.html.twig */
class __TwigTemplate_2d78a6292fa837720bb68bbd57cf94c6291bb1b8b96e794f51b45b59bdd5ccf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("APYDataGridBundle::blocks.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'grid_no_data' => array($this, 'block_grid_no_data'),
            'grid_no_result' => array($this, 'block_grid_no_result'),
            'grid_exports' => array($this, 'block_grid_exports'),
            'grid_pager' => array($this, 'block_grid_pager'),
            'grid_search' => array($this, 'block_grid_search'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "APYDataGridBundle::blocks.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Liste des catégories";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        echo twig_include($this->env, $context, ":BackOffice:buttom.html.twig", array("nomButtom" => "Ajouter une catégorie", "routeButtom" => $this->env->getExtension('routing')->getPath("ro_categorie_add"), "glyphicon" => "glyphicon glyphicon-plus", "align" => "right"));
        echo "
    ";
        // line 10
        echo twig_include($this->env, $context, ":BackOffice:flach_message.html.twig");
        echo "
    ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), $this);
        echo "
    ";
    }

    // line 18
    public function block_grid_no_data($context, array $blocks = array())
    {
        echo "<p class=\"alert alert-info\">";
        echo $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noDataMessage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noDataMessage", array()), "No data")) : ("No data")));
        echo "</p>";
    }

    // line 21
    public function block_grid_no_result($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        ob_start();
        // line 23
        echo "        ";
        $context["nbColumns"] = 0;
        // line 24
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "columns", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 25
            echo "            ";
            if ($this->getAttribute($context["column"], "visible", array(0 => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isReadyForExport", array())), "method")) {
                // line 26
                echo "                ";
                $context["nbColumns"] = ((isset($context["nbColumns"]) ? $context["nbColumns"] : $this->getContext($context, "nbColumns")) + 1);
                // line 27
                echo "            ";
            }
            // line 28
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        <tr class=\"grid-row-cells\">
            <td class=\"last-column last-row\" colspan=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["nbColumns"]) ? $context["nbColumns"] : $this->getContext($context, "nbColumns")), "html", null, true);
        echo "\" style=\"text-align: center;\"><div class=\"alert alert-info\">";
        echo $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noResultMessage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noResultMessage", array()), "No result")) : ("No result")));
        echo "</div></td>
        </tr>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 36
    public function block_grid_exports($context, array $blocks = array())
    {
        // line 37
        echo "    <div class=\".col-xs-6 .col-lg-4\" style=\"float:right\">
        ";
        // line 38
        ob_start();
        // line 39
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Export"), "html", null, true);
        echo "
            <select class=\"form-control\" name=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_EXPORT"), "html", null, true);
        echo "]\">
                <option value=\"-1\"></option>
                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "exports", array()));
        foreach ($context['_seq'] as $context["key"] => $context["export"]) {
            // line 43
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["export"], "title", array())), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['export'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </select>

            <button class=\"btn btn-default btn-sm\" type=\"submit\" >
                <i class=\"glyphicon glyphicon-file\"></i>
                ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Export"), "html", null, true);
        echo "
            </button>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 52
        echo "    </div>
";
    }

    // line 57
    public function block_grid_pager($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        if ((isset($context["pagerfanta"]) ? $context["pagerfanta"] : $this->getContext($context, "pagerfanta"))) {
            // line 59
            echo "        <div class=\".col-xs-12 .col-md-8\" >
            ";
            // line 60
            echo $this->env->getExtension('datagrid_twig_extension')->getPagerfanta((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), $this);
            echo "
        </div>
    ";
        } else {
            // line 63
            echo "        <div class=\"pager\" style=\"float:left\">
            ";
            // line 64
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("pager_totalcount", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), $this);
            echo "
            ";
            // line 65
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("pager_selectpage", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), $this);
            echo "
            ";
            // line 66
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("pager_results_perpage", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), $this);
            echo "
        </div>
    ";
        }
    }

    // line 73
    public function block_grid_search($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isFilterSectionVisible", array())) {
            // line 75
            echo "        <div class=\"grid-search\">
            <form id=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "_search\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "routeUrl", array()), "html", null, true);
            echo "\" method=\"post\">
                ";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "columns", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 78
                echo "                    ";
                if (($this->getAttribute($context["column"], "isFilterable", array()) && !twig_in_filter($this->getAttribute($context["column"], "type", array()), array(0 => "actions", 1 => "massaction")))) {
                    // line 79
                    echo "                        ";
                    if (($this->getAttribute($context["column"], "usePrefixTitle", array()) == true)) {
                        // line 80
                        echo "                            ";
                        $context["columnTitle"] = ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "prefixTitle", array()) . $this->getAttribute($context["column"], "title", array()));
                        // line 81
                        echo "                        ";
                    } else {
                        // line 82
                        echo "                            ";
                        $context["columnTitle"] = $this->getAttribute($context["column"], "title", array());
                        // line 83
                        echo "                        ";
                    }
                    // line 84
                    echo "                        <div class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                    echo "\"><label>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : $this->getContext($context, "columnTitle"))), "html", null, true);
                    echo "</label>";
                    echo $this->env->getExtension('datagrid_twig_extension')->getGridFilter($context["column"], (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), false);
                    echo "</div>
                            ";
                }
                // line 86
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                <div class=\"grid-search-action\"><input type=\"submit\" class=\"grid-search-submit\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search"), "html", null, true);
            echo "\"/><input type=\"button\" class=\"grid-search-reset\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset"), "html", null, true);
            echo "\" onclick=\"return ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "_reset();\"/></div>
            </form>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "ROCategorieBundle:categorie:lister_categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 87,  272 => 86,  262 => 84,  259 => 83,  256 => 82,  253 => 81,  250 => 80,  247 => 79,  244 => 78,  227 => 77,  221 => 76,  218 => 75,  215 => 74,  212 => 73,  204 => 66,  200 => 65,  196 => 64,  193 => 63,  187 => 60,  184 => 59,  181 => 58,  178 => 57,  173 => 52,  167 => 49,  161 => 45,  150 => 43,  146 => 42,  139 => 40,  134 => 39,  132 => 38,  129 => 37,  126 => 36,  116 => 30,  113 => 29,  107 => 28,  104 => 27,  101 => 26,  98 => 25,  93 => 24,  90 => 23,  87 => 22,  84 => 21,  76 => 18,  69 => 12,  63 => 11,  59 => 10,  54 => 9,  52 => 8,  49 => 7,  43 => 4,  11 => 1,);
    }
}
