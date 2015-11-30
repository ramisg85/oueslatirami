<?php

/* APYDataGridBundle::blocks.html.twig */
class __TwigTemplate_823445872c1fbf92afcc28dc04c866c344959aba5a557477c863b88ce5dd1bcd extends Twig_Template
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
            'grid' => array($this, 'block_grid'),
            'grid_no_data' => array($this, 'block_grid_no_data'),
            'grid_no_result' => array($this, 'block_grid_no_result'),
            'grid_titles' => array($this, 'block_grid_titles'),
            'grid_filters' => array($this, 'block_grid_filters'),
            'grid_search' => array($this, 'block_grid_search'),
            'grid_rows' => array($this, 'block_grid_rows'),
            'grid_pager' => array($this, 'block_grid_pager'),
            'grid_pager_totalcount' => array($this, 'block_grid_pager_totalcount'),
            'grid_pager_selectpage' => array($this, 'block_grid_pager_selectpage'),
            'grid_pager_results_perpage' => array($this, 'block_grid_pager_results_perpage'),
            'grid_actions' => array($this, 'block_grid_actions'),
            'grid_exports' => array($this, 'block_grid_exports'),
            'grid_tweaks' => array($this, 'block_grid_tweaks'),
            'grid_column_actions_cell' => array($this, 'block_grid_column_actions_cell'),
            'grid_column_massaction_cell' => array($this, 'block_grid_column_massaction_cell'),
            'grid_column_boolean_cell' => array($this, 'block_grid_column_boolean_cell'),
            'grid_column_type_boolean_cell' => array($this, 'block_grid_column_type_boolean_cell'),
            'grid_column_rank_cell' => array($this, 'block_grid_column_rank_cell'),
            'grid_column_type_rank_cell' => array($this, 'block_grid_column_type_rank_cell'),
            'grid_column_array_cell' => array($this, 'block_grid_column_array_cell'),
            'grid_column_type_array_cell' => array($this, 'block_grid_column_type_array_cell'),
            'grid_column_join_cell' => array($this, 'block_grid_column_join_cell'),
            'grid_column_type_join_cell' => array($this, 'block_grid_column_type_join_cell'),
            'grid_column_cell' => array($this, 'block_grid_column_cell'),
            'grid_column_operator' => array($this, 'block_grid_column_operator'),
            'grid_column_filter_type_input' => array($this, 'block_grid_column_filter_type_input'),
            'grid_column_filter_type_select' => array($this, 'block_grid_column_filter_type_select'),
            'grid_column_filter_type_massaction' => array($this, 'block_grid_column_filter_type_massaction'),
            'grid_column_filter_type_actions' => array($this, 'block_grid_column_filter_type_actions'),
            'grid_scripts' => array($this, 'block_grid_scripts'),
            'grid_scripts_goto' => array($this, 'block_grid_scripts_goto'),
            'grid_scripts_reset' => array($this, 'block_grid_scripts_reset'),
            'grid_scripts_previous_page' => array($this, 'block_grid_scripts_previous_page'),
            'grid_scripts_next_page' => array($this, 'block_grid_scripts_next_page'),
            'grid_scripts_enter_page' => array($this, 'block_grid_scripts_enter_page'),
            'grid_scripts_results_per_page' => array($this, 'block_grid_scripts_results_per_page'),
            'grid_scripts_mark_visible' => array($this, 'block_grid_scripts_mark_visible'),
            'grid_scripts_mark_all' => array($this, 'block_grid_scripts_mark_all'),
            'grid_scripts_switch_operator' => array($this, 'block_grid_scripts_switch_operator'),
            'grid_scripts_submit_form' => array($this, 'block_grid_scripts_submit_form'),
            'grid_scripts_ajax' => array($this, 'block_grid_scripts_ajax'),
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

    // line 3
    public function block_grid($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"table table-striped table-bordered bootstrap-datatable datatable responsive dataTable\">
        ";
        // line 5
        if (((($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "totalCount", array()) > 0) || $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isFiltered", array())) || ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "noDataMessage", array()) === false))) {
            // line 6
            echo "            <form id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "routeUrl", array()), "html", null, true);
            echo "\" method=\"post\">
                <div class=\"grid_header\">
                    ";
            // line 8
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "massActions", array())) > 0)) {
                // line 9
                echo "                        ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("actions", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
                    ";
            }
            // line 11
            echo "                </div>
                <div class=\"grid_body\">
                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable responsive dataTable\" aria-describedby=\"DataTables_Table_0_info\">
                        ";
            // line 14
            if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isTitleSectionVisible", array())) {
                // line 15
                echo "                            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("titles", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
                        ";
            }
            // line 17
            echo "                        ";
            if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isFilterSectionVisible", array())) {
                // line 18
                echo "                            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("filters", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
                        ";
            }
            // line 20
            echo "                        ";
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("rows", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
                    </table>
                </div>
                ";
            // line 23
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "exports", array())) > 0)) {
                // line 24
                echo "                    ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("exports", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
                ";
            }
            // line 26
            echo "                ";
            if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isPagerSectionVisible", array())) {
                // line 27
                echo "                    ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGridPager((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
                ";
            }
            // line 29
            echo "                ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "tweaks", array())) > 0)) {
                // line 30
                echo "                    ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("tweaks", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
                ";
            }
            // line 32
            echo "                ";
            if ((isset($context["withjs"]) ? $context["withjs"] : $this->getContext($context, "withjs"))) {
                // line 33
                echo "                    ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
                ";
            }
            // line 35
            echo "            </form>
        ";
        } else {
            // line 37
            echo "            ";
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("no_data", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
        ";
        }
        // line 39
        echo "    </div>
";
    }

    // line 42
    public function block_grid_no_data($context, array $blocks = array())
    {
        echo "<p class=\"no_data\">";
        echo $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noDataMessage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noDataMessage", array()), "No data")) : ("No data")));
        echo "</p>";
    }

    // line 44
    public function block_grid_no_result($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        ob_start();
        // line 46
        echo "        ";
        $context["nbColumns"] = 0;
        // line 47
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "columns", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 48
            echo "            ";
            if ($this->getAttribute($context["column"], "visible", array(0 => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isReadyForExport", array())), "method")) {
                // line 49
                echo "                ";
                $context["nbColumns"] = ((isset($context["nbColumns"]) ? $context["nbColumns"] : $this->getContext($context, "nbColumns")) + 1);
                // line 50
                echo "            ";
            }
            // line 51
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        <tr class=\"grid-row-cells\">
            <td class=\"last-column last-row\" colspan=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["nbColumns"]) ? $context["nbColumns"] : $this->getContext($context, "nbColumns")), "html", null, true);
        echo "\" style=\"text-align: center;\">";
        echo $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noResultMessage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noResultMessage", array()), "No result")) : ("No result")));
        echo "</td>
        </tr>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 58
    public function block_grid_titles($context, array $blocks = array())
    {
        // line 59
        echo "    <tr class=\"grid-row-titles\">
        ";
        // line 60
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
            // line 61
            echo "            ";
            if ($this->getAttribute($context["column"], "visible", array(0 => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isReadyForExport", array())), "method")) {
                // line 62
                echo "                <th class=\"";
                if (($this->getAttribute($context["column"], "align", array()) != "left")) {
                    echo "align-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "align", array()), "html", null, true);
                }
                if ($this->getAttribute($context["column"], "class", array())) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "class", array()), "html", null, true);
                }
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo " last-column";
                }
                echo "\"";
                if (($this->getAttribute($context["column"], "size", array()) >  -1)) {
                    echo " style=\"width:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "size", array()), "html", null, true);
                    echo "px;\"";
                }
                echo ">";
                // line 63
                ob_start();
                // line 64
                echo "                    ";
                if (($this->getAttribute($context["column"], "type", array()) == "massaction")) {
                    // line 65
                    echo "                        <input type=\"checkbox\" class=\"grid-mass-selector\" onclick=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                    echo "_markVisible(this.checked);\"/>
                    ";
                } else {
                    // line 66
                    echo " 
                        ";
                    // line 67
                    if (($this->getAttribute($context["column"], "usePrefixTitle", array()) == true)) {
                        // line 68
                        echo "                            ";
                        $context["columnTitle"] = (($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "prefixTitle", array()) . $this->getAttribute($context["column"], "title", array())) . "__abbr");
                        // line 69
                        echo "                            ";
                        if (($this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : $this->getContext($context, "columnTitle"))) == (isset($context["columnTitle"]) ? $context["columnTitle"] : $this->getContext($context, "columnTitle")))) {
                            // line 70
                            echo "                                ";
                            $context["columnTitle"] = ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "prefixTitle", array()) . $this->getAttribute($context["column"], "title", array()));
                            // line 71
                            echo "                            ";
                        }
                        // line 72
                        echo "                        ";
                    } else {
                        // line 73
                        echo "                            ";
                        $context["columnTitle"] = $this->getAttribute($context["column"], "title", array());
                        // line 74
                        echo "                        ";
                    }
                    // line 75
                    echo "                        ";
                    if ($this->getAttribute($context["column"], "sortable", array())) {
                        // line 76
                        echo "                            <a class=\"order\" href=\"";
                        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("order", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), $context["column"]);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Order by"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : $this->getContext($context, "columnTitle"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : $this->getContext($context, "columnTitle"))), "html", null, true);
                        echo "</a>
                            ";
                        // line 77
                        if (($this->getAttribute($context["column"], "order", array()) == "asc")) {
                            // line 78
                            echo "                        <div class=\"sort_up\"></div>
                    ";
                        } elseif (($this->getAttribute(                        // line 79
$context["column"], "order", array()) == "desc")) {
                            // line 80
                            echo "                        <div class=\"sort_down\"></div>
                    ";
                        }
                        // line 82
                        echo "                ";
                    } else {
                        // line 83
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : $this->getContext($context, "columnTitle"))), "html", null, true);
                        echo "
                ";
                    }
                    // line 85
                    echo "            ";
                }
                // line 86
                echo "            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 87
                echo "</th>
            ";
            }
            // line 89
            echo "                ";
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
        // line 90
        echo "                </tr>
                ";
    }

    // line 93
    public function block_grid_filters($context, array $blocks = array())
    {
        // line 94
        echo "                        <tr class=\"grid-row-filters\">
                            ";
        // line 95
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
            // line 96
            echo "                                ";
            if ($this->getAttribute($context["column"], "visible", array(0 => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isReadyForExport", array())), "method")) {
                // line 97
                echo "                                    <th class=\"";
                if ($this->getAttribute($context["column"], "class", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "class", array()), "html", null, true);
                }
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo " last-column";
                }
                echo "\"";
                if (($this->getAttribute($context["column"], "size", array()) >  -1)) {
                    echo " style=\"width:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "size", array()), "html", null, true);
                    echo "px;\"";
                }
                echo ">";
                if ($this->getAttribute($context["column"], "filterable", array())) {
                    echo $this->env->getExtension('datagrid_twig_extension')->getGridFilter($context["column"], (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                }
                echo "</th>
                                    ";
            }
            // line 99
            echo "                                ";
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
        // line 100
        echo "                        </tr>
                    ";
    }

    // line 103
    public function block_grid_search($context, array $blocks = array())
    {
        // line 104
        echo "                        ";
        if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isFilterSectionVisible", array())) {
            // line 105
            echo "                            <div class=\"grid-search\">
                                <form id=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "_search\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "routeUrl", array()), "html", null, true);
            echo "\" method=\"post\">
                                    ";
            // line 107
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
                // line 108
                echo "                                        ";
                if (($this->getAttribute($context["column"], "isFilterable", array()) && !twig_in_filter($this->getAttribute($context["column"], "type", array()), array(0 => "actions", 1 => "massaction")))) {
                    // line 109
                    echo "                                            ";
                    if (($this->getAttribute($context["column"], "usePrefixTitle", array()) == true)) {
                        // line 110
                        echo "                                                ";
                        $context["columnTitle"] = ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "prefixTitle", array()) . $this->getAttribute($context["column"], "title", array()));
                        // line 111
                        echo "                                            ";
                    } else {
                        // line 112
                        echo "                                                ";
                        $context["columnTitle"] = $this->getAttribute($context["column"], "title", array());
                        // line 113
                        echo "                                            ";
                    }
                    // line 114
                    echo "                                            <div class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                    echo "\"><label>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : $this->getContext($context, "columnTitle"))), "html", null, true);
                    echo "</label>";
                    echo $this->env->getExtension('datagrid_twig_extension')->getGridFilter($context["column"], (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), false);
                    echo "</div>
                                                ";
                }
                // line 116
                echo "                                            ";
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
            // line 117
            echo "                                    <div class=\"grid-search-action\"><input type=\"submit\" class=\"grid-search-submit\" value=\"";
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
        // line 121
        echo "                    ";
    }

    // line 123
    public function block_grid_rows($context, array $blocks = array())
    {
        // line 124
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "rows", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 125
            echo "                            ";
            $context["last_row"] = $this->getAttribute($context["loop"], "last", array());
            // line 126
            echo "                            ";
            ob_start();
            // line 127
            echo "                                ";
            ob_start();
            // line 128
            echo "                                    ";
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
                // line 129
                echo "                                        ";
                if ($this->getAttribute($context["column"], "visible", array(0 => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isReadyForExport", array())), "method")) {
                    // line 130
                    echo "                                            <td class=\"grid-column-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "renderBlockId", array()), "html", null, true);
                    if ($this->getAttribute($context["column"], "class", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "class", array()), "html", null, true);
                    }
                    if (($this->getAttribute($context["column"], "align", array()) != "left")) {
                        echo " align-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "align", array()), "html", null, true);
                    }
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        echo " last-column";
                    }
                    if ((isset($context["last_row"]) ? $context["last_row"] : $this->getContext($context, "last_row"))) {
                        echo " last-row";
                    }
                    echo "\">
                                                ";
                    // line 131
                    if ((twig_in_filter("checkbox", $this->env->getExtension('datagrid_twig_extension')->getGridCell($context["column"], $context["row"], (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")))) || twig_in_filter("btn", $this->env->getExtension('datagrid_twig_extension')->getGridCell($context["column"], $context["row"], (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")))))) {
                        echo " ";
                        echo $this->env->getExtension('datagrid_twig_extension')->getGridCell($context["column"], $context["row"], (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                        echo " ";
                    } else {
                        echo " ";
                        echo twig_escape_filter($this->env, twig_wordwrap_filter($this->env, $this->env->getExtension('datagrid_twig_extension')->getGridCell($context["column"], $context["row"], (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid"))), 30, "
"), "html", null, true);
                        echo " ";
                    }
                    echo " 
                                            </td>
                                        ";
                }
                // line 134
                echo "                                    ";
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
            // line 135
            echo "                                ";
            $context["gridColumns"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 136
            echo "                                <tr";
            if (($this->getAttribute($context["row"], "color", array()) != "")) {
                echo " style=\"background-color:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "color", array()), "html", null, true);
                echo ";\"";
            }
            echo " class=\"grid-row-cells ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            if (($this->getAttribute($context["row"], "class", array()) != "")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "class", array()), "html", null, true);
            }
            echo "\">
                                    ";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["gridColumns"]) ? $context["gridColumns"] : $this->getContext($context, "gridColumns")), "html", null, true);
            echo "
                                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 139
            echo "                            </tr>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 141
            echo "                            ";
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("no_result", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                    ";
    }

    // line 145
    public function block_grid_pager($context, array $blocks = array())
    {
        // line 146
        echo "                        ";
        if ((isset($context["pagerfanta"]) ? $context["pagerfanta"] : $this->getContext($context, "pagerfanta"))) {
            // line 147
            echo "                            ";
            echo $this->env->getExtension('datagrid_twig_extension')->getPagerfanta((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
                        ";
        } else {
            // line 149
            echo "                            <div class=\"pager\" style=\"float:left\">
                                ";
            // line 150
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("pager_totalcount", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
                                ";
            // line 151
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("pager_selectpage", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
                                ";
            // line 152
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("pager_results_perpage", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
                            </div>
                        ";
        }
        // line 155
        echo "                    ";
    }

    // line 157
    public function block_grid_pager_totalcount($context, array $blocks = array())
    {
        // line 158
        echo "                        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("%count% Results, ", $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "totalCount", array()), array("%count%" => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "totalCount", array()))), "html", null, true);
        echo "
                    ";
    }

    // line 161
    public function block_grid_pager_selectpage($context, array $blocks = array())
    {
        // line 162
        echo "                        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page"), "html", null, true);
        echo "
                        ";
        // line 163
        ob_start();
        // line 164
        echo "                            <input type=\"button\" class=\"prev\" ";
        if (($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "page", array()) <= 0)) {
            echo "disabled=\"disabled\"";
        }
        echo " value=\"<\" onclick=\"return ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_previousPage();\"/>
                            <input type=\"text\" class=\"current\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "page", array()) + 1), "html", null, true);
        echo "\" size=\"2\" onkeypress=\"return ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_enterPage(event, parseInt(this.value) - 1);\"/>
                            <input type=\"button\" value=\">\" class=\"next\" ";
        // line 166
        if (($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "page", array()) >= ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "pageCount", array()) - 1))) {
            echo "disabled=\"disabled\"";
        }
        echo " onclick=\"return ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_nextPage();\"/> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("of %count%", array("%count%" => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "pageCount", array()))), "html", null, true);
        echo "
                        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 168
        echo "                    ";
    }

    // line 170
    public function block_grid_pager_results_perpage($context, array $blocks = array())
    {
        // line 171
        echo "                        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(", Display"), "html", null, true);
        echo "
                        <select onchange=\"return ";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_resultsPerPage(this.value);\">
                            ";
        // line 173
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "limits", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 174
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            if (($context["key"] == $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "limit", array()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                        </select> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Items per page"), "html", null, true);
        echo "
                    ";
    }

    // line 179
    public function block_grid_actions($context, array $blocks = array())
    {
        // line 180
        echo "                        <div class=\"row\">
                            <div class=\"col-xs-12 col-md-8\" >
                                <span class=\"grid_massactions_helper\">

                                    <button class=\"btn btn-link\" type=\"button\" onclick=\"return ";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_markVisible(true);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select visible"), "html", null, true);
        echo "</button>
                                    |
                                    <button class=\"btn btn-link\" type=\"button\" onclick=\"return ";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_markVisible(false);\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Deselect visible"), "html", null, true);
        echo "</button>
                                    |
                                    <button class=\"btn btn-link\" type=\"button\" onclick=\"return ";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_markAll(true);\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select all"), "html", null, true);
        echo "</button>
                                    |
                                    <button class=\"btn btn-link\" type=\"button\" onclick=\"return ";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_markAll(false);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Deselect all"), "html", null, true);
        echo "</button>
                                    <span class=\"mass-actions-selected\" id=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_selected\"></span>
                                </span>
                            </div>
                            ";
        // line 194
        ob_start();
        // line 195
        echo "                                <div style=\"text-align: right;\" class=\"col-xs-10 col-md-4\">
                                    ";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action"), "html", null, true);
        echo "
                                    <input type=\"hidden\" id=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_all\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_MASS_ACTION_ALL_KEYS_SELECTED"), "html", null, true);
        echo "]\" value=\"0\"/>
                                    <select name=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_MASS_ACTION"), "html", null, true);
        echo "]\" class=\"form-control\" >
                                        <option value=\"-1\"></option>
                                        ";
        // line 200
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "massActions", array()));
        foreach ($context['_seq'] as $context["key"] => $context["massAction"]) {
            // line 201
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["massAction"], "title", array())), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['massAction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                                    </select>

                                    <button class=\"btn btn-default btn-sm\" type=\"submit\">
                                        <i class=\"glyphicon glyphicon-ok\"></i>
                                        ";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Submit Action"), "html", null, true);
        echo "
                                    </button>
                                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 210
        echo "                            </div>
                        </div>
                    ";
    }

    // line 214
    public function block_grid_exports($context, array $blocks = array())
    {
        // line 215
        echo "                        <div class=\"exports\" style=\"float:right\">
                            ";
        // line 216
        ob_start();
        // line 217
        echo "                                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Export"), "html", null, true);
        echo "
                                <select name=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_EXPORT"), "html", null, true);
        echo "]\">
                                    <option value=\"-1\"></option>
                                    ";
        // line 220
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "exports", array()));
        foreach ($context['_seq'] as $context["key"] => $context["export"]) {
            // line 221
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["export"], "title", array())), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['export'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "                                </select>
                                <input type=\"submit\" value=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Export"), "html", null, true);
        echo "\"/>
                            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 226
        echo "                        </div>
                    ";
    }

    // line 229
    public function block_grid_tweaks($context, array $blocks = array())
    {
        // line 230
        echo "                        <div class=\"tweaks\" style=\"float:right\">
                            ";
        // line 231
        ob_start();
        // line 232
        echo "                                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tweaks"), "html", null, true);
        echo "
                                <select name=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_TWEAK"), "html", null, true);
        echo "]\">
                                    <option value=\"\"></option>
                                    ";
        // line 235
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "tweaks", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tweak"]) {
            // line 236
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["tweak"], "title", array())), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tweak'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                                </select>
                                <input type=\"submit\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tweak"), "html", null, true);
        echo "\"/>
                            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 241
        echo "                        </div>
                    ";
    }

    // line 244
    public function block_grid_column_actions_cell($context, array $blocks = array())
    {
        // line 245
        echo "                        ";
        $context["actions"] = $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "getActionsToRender", array(0 => (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row"))), "method");
        // line 246
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 247
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($context["action"], "route", array()), $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "routeParameters", array(0 => (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), 1 => $context["action"]), "method"), false), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "target", array()), "html", null, true);
            echo "\"";
            if ($this->getAttribute($context["action"], "confirm", array())) {
                echo " onclick=\"return confirm('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "confirmMessage", array()), "html", null, true);
                echo "')\"";
            }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "attributes", array()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "><i ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "attributes2", array()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["action"], "title", array())), "html", null, true);
            echo "</i></a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "                        ";
    }

    // line 251
    public function block_grid_column_massaction_cell($context, array $blocks = array())
    {
        // line 252
        echo "                        <input type=\"checkbox\" class=\"action\" value=\"1\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "primaryFieldValue", array()), "html", null, true);
        echo "]\"/>
                    ";
    }

    // line 255
    public function block_grid_column_boolean_cell($context, array $blocks = array())
    {
        // line 256
        echo "                        <span class=\"grid_boolean_";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        $this->displayBlock("grid_column_cell", $context, $blocks);
        echo "</span>
                    ";
    }

    // line 258
    public function block_grid_column_type_boolean_cell($context, array $blocks = array())
    {
        // line 259
        echo "                        ";
        $this->displayBlock("grid_column_boolean_cell", $context, $blocks);
        echo "
                    ";
    }

    // line 262
    public function block_grid_column_rank_cell($context, array $blocks = array())
    {
        // line 263
        echo "                        ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "page", array()) * $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "limit", array())) + (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "
                    ";
    }

    // line 265
    public function block_grid_column_type_rank_cell($context, array $blocks = array())
    {
        // line 266
        echo "                        ";
        $this->displayBlock("grid_column_rank_cell", $context, $blocks);
        echo "
                    ";
    }

    // line 269
    public function block_grid_column_array_cell($context, array $blocks = array())
    {
        // line 270
        echo "                        ";
        $context["sourceValues"] = $this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "field", array(0 => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array())), "method");
        // line 271
        echo "                        ";
        $context["values"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        // line 272
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")));
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
        foreach ($context['_seq'] as $context["key"] => $context["index"]) {
            // line 273
            $context["value"] = $context["index"];
            // line 274
            echo "                            ";
            $context["sourceValue"] = $this->getAttribute((isset($context["sourceValues"]) ? $context["sourceValues"] : $this->getContext($context, "sourceValues")), $context["key"], array(), "array");
            // line 275
            echo "                            ";
            $this->displayBlock("grid_column_cell", $context, $blocks);
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "separator", array());
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                            ";
    }

    // line 278
    public function block_grid_column_type_array_cell($context, array $blocks = array())
    {
        // line 279
        echo "                                    ";
        $this->displayBlock("grid_column_array_cell", $context, $blocks);
        echo "
                                ";
    }

    // line 282
    public function block_grid_column_join_cell($context, array $blocks = array())
    {
        // line 283
        echo "                                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "joinColumns", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["index"]) {
            // line 284
            $context["value"] = $this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "field", array(0 => $context["index"]), "method");
            // line 285
            echo "                                        ";
            $context["sourceValue"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            // line 286
            echo "                                        ";
            $this->displayBlock("grid_column_cell", $context, $blocks);
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "separator", array());
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "                                        ";
    }

    // line 289
    public function block_grid_column_type_join_cell($context, array $blocks = array())
    {
        // line 290
        echo "                                                ";
        $this->displayBlock("grid_column_join_cell", $context, $blocks);
        echo "
                                            ";
    }

    // line 293
    public function block_grid_column_cell($context, array $blocks = array())
    {
        // line 294
        ob_start();
        // line 295
        echo "                                                ";
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filterable", array()) && $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "searchOnClick", array()))) {
            // line 296
            echo "                                                    ";
            $context["sourceValue"] = ((array_key_exists("sourceValue", $context)) ? ((isset($context["sourceValue"]) ? $context["sourceValue"] : $this->getContext($context, "sourceValue"))) : ($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "field", array(0 => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array())), "method")));
            // line 297
            echo "                                                    <a href=\"?";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "][from]=";
            echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["sourceValue"]) ? $context["sourceValue"] : $this->getContext($context, "sourceValue"))), "html", null, true);
            echo "\" class=\"searchOnClick\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
                                                ";
        } elseif (($this->getAttribute(        // line 298
(isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "safe", array()) === false)) {
            // line 299
            echo "                                                    ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
                                                ";
        } else {
            // line 301
            echo "                                                    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "safe", array()));
            echo "
                                                ";
        }
        // line 303
        echo "                                                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 306
    public function block_grid_column_operator($context, array $blocks = array())
    {
        // line 307
        echo "                                                            ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "operatorsVisible", array())) {
            // line 308
            echo "                                                                <span class=\"grid-filter-operator\">
                                                                    <select name=\"";
            // line 309
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "][operator]\" onchange=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "_switchOperator(this, '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "__query__'";
            if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === false)) {
                echo ", false";
            }
            echo ");\">
                                                                        ";
            // line 310
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "operators", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["operator"]) {
                // line 311
                echo "                                                                            <option value=\"";
                echo twig_escape_filter($this->env, $context["operator"], "html", null, true);
                echo "\"";
                if (((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == $context["operator"])) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["operator"]), "html", null, true);
                echo "</option>
                                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "                                                                    </select>
                                                                </span>
                                                            ";
        }
        // line 316
        echo "                                                        ";
    }

    // line 318
    public function block_grid_column_filter_type_input($context, array $blocks = array())
    {
        // line 319
        echo "                                                            ";
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 320
        echo "                                                            ";
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 321
        echo "                                                            ";
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 322
        echo "                                                            ";
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 323
        echo "                                                            ";
        $context["op"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "operator", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "operator", array())) : ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "defaultOperator", array())));
        // line 324
        echo "                                                            ";
        $context["from"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "from", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "from", array())) : (null));
        // line 325
        echo "                                                            ";
        $context["to"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "to", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "to", array())) : (null));
        // line 326
        echo "                                                            <span class=\"grid-filter-input\">
                                                                ";
        // line 327
        echo $this->env->getExtension('datagrid_twig_extension')->getGridColumnOperator((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), (isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), (isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")));
        echo "
                                                                <span class=\"grid-filter-input-query\">
                                                                    <input type=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "inputType", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")), "html", null, true);
        echo "\" class=\"form-control\" size=\"10\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
        echo "][from]\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "__";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
        echo "__query__from\" ";
        if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === true)) {
            echo "onkeypress=\"return ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "_submitForm(event, this.form);\"";
        }
        echo " ";
        echo (((((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["isNullOperator"]) ? $context["isNullOperator"] : $this->getContext($context, "isNullOperator"))) || ((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["isNotNullOperator"]) ? $context["isNotNullOperator"] : $this->getContext($context, "isNotNullOperator"))))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
        echo " />
                                                                    <input type=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "inputType", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")), "html", null, true);
        echo "\" class=\"grid-filter-input-query-to\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
        echo "][to]\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "__";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
        echo "__query__to\" ";
        if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === true)) {
            echo "onkeypress=\"return ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "_submitForm(event, this.form);\"";
        }
        echo " ";
        echo (((((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["btwOperator"]) ? $context["btwOperator"] : $this->getContext($context, "btwOperator"))) || ((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["btweOperator"]) ? $context["btweOperator"] : $this->getContext($context, "btweOperator"))))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
        echo " />
                                                                </span>
                                                            </span>
                                                        ";
    }

    // line 335
    public function block_grid_column_filter_type_select($context, array $blocks = array())
    {
        // line 336
        echo "                                                            ";
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 337
        echo "                                                            ";
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 338
        echo "                                                            ";
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 339
        echo "                                                            ";
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 340
        echo "                                                            ";
        $context["op"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "operator", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "operator", array())) : ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "defaultOperator", array())));
        // line 341
        echo "                                                            ";
        $context["from"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "from", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "from", array())) : (null));
        // line 342
        echo "                                                            ";
        $context["to"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "to", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "to", array())) : (null));
        // line 343
        echo "                                                            ";
        $context["multiple"] = $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "selectMulti", array());
        // line 344
        echo "                                                            ";
        $context["expanded"] = $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "selectExpanded", array());
        // line 345
        echo "                                                            <span class=\"grid-filter-select\">
                                                                ";
        // line 346
        echo $this->env->getExtension('datagrid_twig_extension')->getGridColumnOperator((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), (isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), (isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")));
        echo "
                                                                <span class=\"grid-filter-select-query\">
                                                                    ";
        // line 348
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 349
            echo "                                                                        <span class=\"grid-filter-select-query-from\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "__query__from\" ";
            echo (((((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["isNullOperator"]) ? $context["isNullOperator"] : $this->getContext($context, "isNullOperator"))) || ((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["isNotNullOperator"]) ? $context["isNotNullOperator"] : $this->getContext($context, "isNotNullOperator"))))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
            echo ">
                                                                            ";
            // line 350
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 351
                echo "                                                                                <span><input type=\"";
                if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                    echo "checkbox";
                } else {
                    echo "radio";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
                echo "][from][]\" value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["key"], (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")))) {
                    echo " checked=\"checked\"";
                }
                echo " ";
                if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === true)) {
                    echo "onclick=\"return ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                    echo "_submitForm(event, this.form);\"";
                }
                echo "/><label>";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</label></span>
                                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 353
            echo "                                                                        </span>
                                                                        <span class=\"grid-filter-select-query-to\" id=\"";
            // line 354
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "__query__to\" ";
            echo (((((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["btwOperator"]) ? $context["btwOperator"] : $this->getContext($context, "btwOperator"))) || ((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["btweOperator"]) ? $context["btweOperator"] : $this->getContext($context, "btweOperator"))))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
            echo ">
                                                                            ";
            // line 355
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 356
                echo "                                                                                <span><input type=\"";
                if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                    echo "checkbox";
                } else {
                    echo "radio";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
                echo "][to]\" value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (( !(null === (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to"))) && ((isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")) == $context["key"]))) {
                    echo " checked=\"checked\"";
                }
                echo " ";
                if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === true)) {
                    echo "onclick=\"return ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                    echo "_submitForm(event, this.form);\"";
                }
                echo "/><label>";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</label></span>
                                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 358
            echo "                                                                        </span>
                                                                        ";
            // line 359
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo "<input type=\"submit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Go"), "html", null, true);
                echo "\" />";
            }
            // line 360
            echo "                                                                    ";
        } else {
            // line 361
            echo "                                                                        <select";
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo " name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "][from][]\" class=\"grid-filter-select-query-from\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "__query__from\" ";
            if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === true)) {
                echo "onchange=\"return ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                echo "_submitForm(event, this.form);\"";
            }
            echo " ";
            echo (((((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["isNullOperator"]) ? $context["isNullOperator"] : $this->getContext($context, "isNullOperator"))) || ((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["isNotNullOperator"]) ? $context["isNotNullOperator"] : $this->getContext($context, "isNotNullOperator"))))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
            echo ">
                                                                            <option value=\"\">&nbsp;</option>
                                                                            ";
            // line 363
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 364
                echo "                                                                                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if (twig_in_filter($context["key"], (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</option>
                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 366
            echo "                                                                        </select>
                                                                        <select name=\"";
            // line 367
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "][to]\" class=\"grid-filter-select-query-to\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "__query__to\" ";
            if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === true)) {
                echo "onchange=\"return ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                echo "_submitForm(event, this.form);\"";
            }
            echo " ";
            echo (((((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["btwOperator"]) ? $context["btwOperator"] : $this->getContext($context, "btwOperator"))) || ((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["btweOperator"]) ? $context["btweOperator"] : $this->getContext($context, "btweOperator"))))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
            echo ">
                                                                            <option value=\"\">&nbsp;</option>
                                                                            ";
            // line 369
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 370
                echo "                                                                                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if (( !(null === (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to"))) && ((isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")) == $context["key"]))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</option>
                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "                                                                        </select>
                                                                        ";
            // line 373
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo "<input type=\"submit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Go"), "html", null, true);
                echo "\" />";
            }
            // line 374
            echo "                                                                    ";
        }
        // line 375
        echo "                                                                </span>
                                                            </span>
                                                        ";
    }

    // line 379
    public function block_grid_column_filter_type_massaction($context, array $blocks = array())
    {
        // line 380
        echo "                                                            <button class=\"btn btn-primary\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset"), "html", null, true);
        echo "\" onclick=\"return ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_reset();\" >
                                                                <i class=\"glyphicon glyphicon-remove glyphicon-white\"></i>
                                                            </button>
                                                        ";
    }

    // line 385
    public function block_grid_column_filter_type_actions($context, array $blocks = array())
    {
        // line 386
        echo "                                                            <button class=\"btn btn-default\" href=\"";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("reset", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "\">
                                                                <i class=\"glyphicon glyphicon-refresh\"></i>
                                                                ";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset"), "html", null, true);
        echo "
                                                            </button>
                                                        ";
    }

    // line 395
    public function block_grid_scripts($context, array $blocks = array())
    {
        // line 396
        echo "                                                            <script type=\"text/javascript\">
                                                                ";
        // line 397
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_goto", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
                                                                ";
        // line 398
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_reset", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
                                                                ";
        // line 399
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_previous_page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
                                                                ";
        // line 400
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_next_page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
                                                                ";
        // line 401
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_enter_page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
                                                                ";
        // line 402
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_results_per_page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
                                                                ";
        // line 403
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_mark_visible", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
                                                                ";
        // line 404
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_mark_all", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
                                                                ";
        // line 405
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_switch_operator", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
                                                                ";
        // line 406
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_submit_form", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
                                                                ";
        // line 407
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_ajax", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
                                                            </script>
                                                        ";
    }

    // line 411
    public function block_grid_scripts_goto($context, array $blocks = array())
    {
        // line 412
        echo "                                                            function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto(url)
                                                            {
                                                            window.location.href = url;

                                                            return false;
                                                            }
                                                        ";
    }

    // line 420
    public function block_grid_scripts_reset($context, array $blocks = array())
    {
        // line 421
        echo "                                                            function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_reset()
                                                            {
                                                            ";
        // line 423
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("reset", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "');

                                                            return false;
                                                            }
                                                        ";
    }

    // line 429
    public function block_grid_scripts_previous_page($context, array $blocks = array())
    {
        // line 430
        echo "                                                            function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_previousPage()
                                                            {
                                                            ";
        // line 432
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "page", array()) - 1));
        echo "');

                                                            return false;
                                                            }
                                                        ";
    }

    // line 438
    public function block_grid_scripts_next_page($context, array $blocks = array())
    {
        // line 439
        echo "                                                            function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_nextPage()
                                                            {
                                                            ";
        // line 441
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "page", array()) + 1));
        echo "');

                                                            return false;
                                                            }
                                                        ";
    }

    // line 447
    public function block_grid_scripts_enter_page($context, array $blocks = array())
    {
        // line 448
        echo "                                                            function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_enterPage(event, page)
                                                            {
                                                            key = event.which;

                                                            if (window.event) {
                                                            key = window.event.keyCode; //IE
                                                            }

                                                            if (key == 13) {
                                                            ";
        // line 457
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "' + page);

                                                            return false;
                                                            }
                                                            }
                                                        ";
    }

    // line 464
    public function block_grid_scripts_results_per_page($context, array $blocks = array())
    {
        // line 465
        echo "                                                            function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_resultsPerPage(limit)
                                                            {
                                                            ";
        // line 467
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("limit", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "' + limit);

                                                            return true;
                                                            }
                                                        ";
    }

    // line 473
    public function block_grid_scripts_mark_visible($context, array $blocks = array())
    {
        // line 474
        echo "                                                            function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_markVisible(select)
                                                            {
                                                            var form = document.getElementById('";
        // line 476
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "');

                                                            var counter = 0;

                                                            for (var i=0; i < form.elements.length; i++ ) {
                                                            if (form.elements[i].type == 'checkbox') {
                                                            form.elements[i].checked = select;

                                                            if (form.elements[i].checked){
                                                            counter++;
                                                            }
                                                            }
                                                            }

                                                            ";
        // line 490
        if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isFilterSectionVisible", array())) {
            // line 491
            echo "                                                                counter--;
                                                            ";
        }
        // line 493
        echo "
                                                            var selected = document.getElementById('";
        // line 494
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_selected');

                                                            if(counter > 0)
                                                            {
                                                            selected.innerHTML = '";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Selected"), "html", null, true);
        echo " '+ '";
        echo " _s_ ";
        echo "'.replace('_s_', counter)+' ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rows"), "html", null, true);
        echo "'; }
                                                            else
                                                            {
                                                            selected.innerHTML = '';
                                                            }

                                                            document.getElementById('";
        // line 504
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_all').value = '0';

                                                            return false;
                                                            }
                                                        ";
    }

    // line 510
    public function block_grid_scripts_mark_all($context, array $blocks = array())
    {
        // line 511
        echo "                                                            function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_markAll(select)
                                                            {
                                                            var form = document.getElementById('";
        // line 513
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "');

                                                            for (var i=0; i < form.elements.length; i++ ) {
                                                            if (form.elements[i].type == 'checkbox') {
                                                            form.elements[i].checked = select;
                                                            }
                                                            }

                                                            var selected = document.getElementById('";
        // line 521
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_selected');

                                                            if (select) {
                                                            document.getElementById('";
        // line 524
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_all').value = '1';
                                                            selected.innerHTML = '";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Selected"), "html", null, true);
        echo " '+ '";
        echo " _s_ ";
        echo "'.replace('_s_', '";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "totalCount", array()), "html", null, true);
        echo "')+' ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rows"), "html", null, true);
        echo "';
                                                            } else {
                                                            document.getElementById('";
        // line 527
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_all').value = '0';
                                                            selected.innerHTML = '';
                                                            }

                                                            return false;
                                                            }
                                                        ";
    }

    // line 535
    public function block_grid_scripts_switch_operator($context, array $blocks = array())
    {
        // line 536
        echo "                                                            ";
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 537
        echo "                                                            ";
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 538
        echo "                                                            ";
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 539
        echo "                                                            ";
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 540
        echo "                                                            function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_switchOperator(elt, query_, submitOnChange)
                                                            {
                                                            submitOnChange = (typeof submitOnChange == 'undefined') ? true : submitOnChange;
                                                            var inputFrom = document.getElementById(query_+'from');
                                                            var inputTo = document.getElementById(query_+'to');
                                                            if ((elt.options[elt.selectedIndex].value == '";
        // line 545
        echo twig_escape_filter($this->env, (isset($context["btwOperator"]) ? $context["btwOperator"] : $this->getContext($context, "btwOperator")), "html", null, true);
        echo "') || (elt.options[elt.selectedIndex].value == '";
        echo twig_escape_filter($this->env, (isset($context["btweOperator"]) ? $context["btweOperator"] : $this->getContext($context, "btweOperator")), "html", null, true);
        echo "')) {
                                                            inputFrom.style.display = '';
                                                            inputFrom.disabled=false;
                                                            inputTo.style.display = '';
                                                            inputTo.disabled=false;
                                                            } else if ((elt.options[elt.selectedIndex].value == '";
        // line 550
        echo twig_escape_filter($this->env, (isset($context["isNullOperator"]) ? $context["isNullOperator"] : $this->getContext($context, "isNullOperator")), "html", null, true);
        echo "') || (elt.options[elt.selectedIndex].value == '";
        echo twig_escape_filter($this->env, (isset($context["isNotNullOperator"]) ? $context["isNotNullOperator"] : $this->getContext($context, "isNotNullOperator")), "html", null, true);
        echo "')) {
                                                            inputFrom.style.display = 'none';
                                                            inputFrom.disabled=true;
                                                            inputTo.style.display = 'none';
                                                            inputTo.disabled=true;
                                                            if (submitOnChange) {
                                                            elt.form.submit();
                                                            }
                                                            } else {
                                                            inputFrom.style.display = '';
                                                            inputFrom.disabled=false;
                                                            inputTo.style.display = 'none';
                                                            inputTo.disabled=true;
                                                            }
                                                            }
                                                        ";
    }

    // line 567
    public function block_grid_scripts_submit_form($context, array $blocks = array())
    {
        // line 568
        echo "                                                            function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_submitForm(event, form)
                                                            {
                                                            key = event.which;

                                                            if (window.event) {
                                                            key = window.event.keyCode; //IE
                                                            }

                                                            if (event.type != 'keypress' || key == 13) {
                                                            form.submit();
                                                            }

                                                            return true;
                                                            }
                                                        ";
    }

    // line 584
    public function block_grid_scripts_ajax($context, array $blocks = array())
    {
        // line 585
        echo "                                                        ";
    }

    public function getTemplateName()
    {
        return "APYDataGridBundle::blocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2055 => 585,  2052 => 584,  2032 => 568,  2029 => 567,  2007 => 550,  1997 => 545,  1988 => 540,  1985 => 539,  1982 => 538,  1979 => 537,  1976 => 536,  1973 => 535,  1962 => 527,  1951 => 525,  1947 => 524,  1941 => 521,  1930 => 513,  1924 => 511,  1921 => 510,  1912 => 504,  1899 => 498,  1892 => 494,  1889 => 493,  1885 => 491,  1883 => 490,  1866 => 476,  1860 => 474,  1857 => 473,  1846 => 467,  1840 => 465,  1837 => 464,  1825 => 457,  1812 => 448,  1809 => 447,  1798 => 441,  1792 => 439,  1789 => 438,  1778 => 432,  1772 => 430,  1769 => 429,  1758 => 423,  1752 => 421,  1749 => 420,  1737 => 412,  1734 => 411,  1727 => 407,  1723 => 406,  1719 => 405,  1715 => 404,  1711 => 403,  1707 => 402,  1703 => 401,  1699 => 400,  1695 => 399,  1691 => 398,  1687 => 397,  1684 => 396,  1681 => 395,  1674 => 388,  1668 => 386,  1665 => 385,  1654 => 380,  1651 => 379,  1645 => 375,  1642 => 374,  1636 => 373,  1633 => 372,  1618 => 370,  1614 => 369,  1595 => 367,  1592 => 366,  1577 => 364,  1573 => 363,  1549 => 361,  1546 => 360,  1540 => 359,  1537 => 358,  1506 => 356,  1502 => 355,  1494 => 354,  1491 => 353,  1460 => 351,  1456 => 350,  1447 => 349,  1445 => 348,  1440 => 346,  1437 => 345,  1434 => 344,  1431 => 343,  1428 => 342,  1425 => 341,  1422 => 340,  1419 => 339,  1416 => 338,  1413 => 337,  1410 => 336,  1407 => 335,  1381 => 330,  1359 => 329,  1354 => 327,  1351 => 326,  1348 => 325,  1345 => 324,  1342 => 323,  1339 => 322,  1336 => 321,  1333 => 320,  1330 => 319,  1327 => 318,  1323 => 316,  1318 => 313,  1303 => 311,  1299 => 310,  1283 => 309,  1280 => 308,  1277 => 307,  1274 => 306,  1269 => 303,  1263 => 301,  1257 => 299,  1255 => 298,  1244 => 297,  1241 => 296,  1238 => 295,  1236 => 294,  1233 => 293,  1226 => 290,  1223 => 289,  1219 => 288,  1203 => 286,  1200 => 285,  1198 => 284,  1180 => 283,  1177 => 282,  1170 => 279,  1167 => 278,  1163 => 277,  1147 => 275,  1144 => 274,  1142 => 273,  1124 => 272,  1121 => 271,  1118 => 270,  1115 => 269,  1108 => 266,  1105 => 265,  1098 => 263,  1095 => 262,  1088 => 259,  1085 => 258,  1074 => 256,  1071 => 255,  1060 => 252,  1057 => 251,  1053 => 249,  1009 => 247,  1004 => 246,  1001 => 245,  998 => 244,  993 => 241,  988 => 239,  985 => 238,  974 => 236,  970 => 235,  963 => 233,  958 => 232,  956 => 231,  953 => 230,  950 => 229,  945 => 226,  940 => 224,  937 => 223,  926 => 221,  922 => 220,  915 => 218,  910 => 217,  908 => 216,  905 => 215,  902 => 214,  896 => 210,  890 => 207,  884 => 203,  873 => 201,  869 => 200,  862 => 198,  854 => 197,  850 => 196,  847 => 195,  845 => 194,  839 => 191,  833 => 190,  826 => 188,  819 => 186,  812 => 184,  806 => 180,  803 => 179,  796 => 176,  781 => 174,  777 => 173,  773 => 172,  768 => 171,  765 => 170,  761 => 168,  750 => 166,  744 => 165,  735 => 164,  733 => 163,  728 => 162,  725 => 161,  718 => 158,  715 => 157,  711 => 155,  705 => 152,  701 => 151,  697 => 150,  694 => 149,  688 => 147,  685 => 146,  682 => 145,  678 => 143,  669 => 141,  655 => 139,  650 => 137,  635 => 136,  632 => 135,  618 => 134,  603 => 131,  584 => 130,  581 => 129,  563 => 128,  560 => 127,  557 => 126,  554 => 125,  535 => 124,  532 => 123,  528 => 121,  516 => 117,  502 => 116,  492 => 114,  489 => 113,  486 => 112,  483 => 111,  480 => 110,  477 => 109,  474 => 108,  457 => 107,  451 => 106,  448 => 105,  445 => 104,  442 => 103,  437 => 100,  423 => 99,  402 => 97,  399 => 96,  382 => 95,  379 => 94,  376 => 93,  371 => 90,  357 => 89,  353 => 87,  350 => 86,  347 => 85,  341 => 83,  338 => 82,  334 => 80,  332 => 79,  329 => 78,  327 => 77,  316 => 76,  313 => 75,  310 => 74,  307 => 73,  304 => 72,  301 => 71,  298 => 70,  295 => 69,  292 => 68,  290 => 67,  287 => 66,  281 => 65,  278 => 64,  276 => 63,  256 => 62,  253 => 61,  236 => 60,  233 => 59,  230 => 58,  220 => 53,  217 => 52,  211 => 51,  208 => 50,  205 => 49,  202 => 48,  197 => 47,  194 => 46,  191 => 45,  188 => 44,  180 => 42,  175 => 39,  169 => 37,  165 => 35,  159 => 33,  156 => 32,  150 => 30,  147 => 29,  141 => 27,  138 => 26,  132 => 24,  130 => 23,  123 => 20,  117 => 18,  114 => 17,  108 => 15,  106 => 14,  101 => 11,  95 => 9,  93 => 8,  85 => 6,  83 => 5,  80 => 4,  77 => 3,  11 => 1,);
    }
}
