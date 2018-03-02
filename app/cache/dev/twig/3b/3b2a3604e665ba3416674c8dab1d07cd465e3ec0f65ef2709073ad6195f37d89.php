<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig */
class __TwigTemplate_d92255f72a74c9988e9debe5df226226f88794d76596719627f2006f67c0d4f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
                'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
                'translatefields_widget' => array($this, 'block_translatefields_widget'),
                'translate_fields_widget' => array($this, 'block_translate_fields_widget'),
                'date_picker_widget' => array($this, 'block_date_picker_widget'),
                '_form_step6_attachments_widget' => array($this, 'block__form_step6_attachments_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c699ea9353e88506e35da2e32ff74201cb85e8b1698d78e60cb08723a11f334a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c699ea9353e88506e35da2e32ff74201cb85e8b1698d78e60cb08723a11f334a->enter($__internal_c699ea9353e88506e35da2e32ff74201cb85e8b1698d78e60cb08723a11f334a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig"));

        // line 27
        echo "
";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('button_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('money_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('date_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('time_widget', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 258
        echo "
";
        // line 259
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 288
        echo "
";
        // line 290
        echo "
";
        // line 291
        $this->displayBlock('form_label', $context, $blocks);
        // line 295
        echo "
";
        // line 296
        $this->displayBlock('choice_label', $context, $blocks);
        // line 301
        echo "
";
        // line 302
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 305
        echo "
";
        // line 306
        $this->displayBlock('radio_label', $context, $blocks);
        // line 309
        echo "
";
        // line 310
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 328
        echo "
";
        // line 330
        echo "
";
        // line 331
        $this->displayBlock('form_row', $context, $blocks);
        // line 338
        echo "
";
        // line 339
        $this->displayBlock('button_row', $context, $blocks);
        // line 344
        echo "
";
        // line 345
        $this->displayBlock('choice_row', $context, $blocks);
        // line 349
        echo "
";
        // line 350
        $this->displayBlock('date_row', $context, $blocks);
        // line 354
        echo "
";
        // line 355
        $this->displayBlock('time_row', $context, $blocks);
        // line 359
        echo "
";
        // line 360
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 371
        echo "
";
        // line 372
        $this->displayBlock('radio_row', $context, $blocks);
        // line 378
        echo "
";
        // line 380
        echo "
";
        // line 381
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_c699ea9353e88506e35da2e32ff74201cb85e8b1698d78e60cb08723a11f334a->leave($__internal_c699ea9353e88506e35da2e32ff74201cb85e8b1698d78e60cb08723a11f334a_prof);

    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_12d6d0f3c16f3710a2d7fbe0382ccac0760bf900515f4ac86f2f1756684b9e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d6d0f3c16f3710a2d7fbe0382ccac0760bf900515f4ac86f2f1756684b9e80->enter($__internal_12d6d0f3c16f3710a2d7fbe0382ccac0760bf900515f4ac86f2f1756684b9e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 31
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 34
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_12d6d0f3c16f3710a2d7fbe0382ccac0760bf900515f4ac86f2f1756684b9e80->leave($__internal_12d6d0f3c16f3710a2d7fbe0382ccac0760bf900515f4ac86f2f1756684b9e80_prof);

    }

    // line 37
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b280ce05e7fcb61b83acfd9b3f226654294306fc94f918641b794cd0eaee2ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b280ce05e7fcb61b83acfd9b3f226654294306fc94f918641b794cd0eaee2ce5->enter($__internal_b280ce05e7fcb61b83acfd9b3f226654294306fc94f918641b794cd0eaee2ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 38
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 39
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_b280ce05e7fcb61b83acfd9b3f226654294306fc94f918641b794cd0eaee2ce5->leave($__internal_b280ce05e7fcb61b83acfd9b3f226654294306fc94f918641b794cd0eaee2ce5_prof);

    }

    // line 42
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a771b401dbc1bf658b3f649790c0f66a4a11bc681b9b0e85eb7aa8c624636056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a771b401dbc1bf658b3f649790c0f66a4a11bc681b9b0e85eb7aa8c624636056->enter($__internal_a771b401dbc1bf658b3f649790c0f66a4a11bc681b9b0e85eb7aa8c624636056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 43
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 44
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_a771b401dbc1bf658b3f649790c0f66a4a11bc681b9b0e85eb7aa8c624636056->leave($__internal_a771b401dbc1bf658b3f649790c0f66a4a11bc681b9b0e85eb7aa8c624636056_prof);

    }

    // line 47
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9f20346a7ae64086927464b55c7f91a8e41fe145b5b09a8a9ef0a8302f6dba06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f20346a7ae64086927464b55c7f91a8e41fe145b5b09a8a9ef0a8302f6dba06->enter($__internal_9f20346a7ae64086927464b55c7f91a8e41fe145b5b09a8a9ef0a8302f6dba06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 48
        echo "<div class=\"input-group money-type\">
        ";
        // line 49
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 50
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 51
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 53
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 54
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 55
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 57
        echo "    </div>";
        
        $__internal_9f20346a7ae64086927464b55c7f91a8e41fe145b5b09a8a9ef0a8302f6dba06->leave($__internal_9f20346a7ae64086927464b55c7f91a8e41fe145b5b09a8a9ef0a8302f6dba06_prof);

    }

    // line 60
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6e842c75cb59f18d933bb8aad2500e8b2525fe2375e9c1f18308caa1ae08a1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e842c75cb59f18d933bb8aad2500e8b2525fe2375e9c1f18308caa1ae08a1ab->enter($__internal_6e842c75cb59f18d933bb8aad2500e8b2525fe2375e9c1f18308caa1ae08a1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 61
        echo "<div class=\"input-group\">";
        // line 62
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 63
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_6e842c75cb59f18d933bb8aad2500e8b2525fe2375e9c1f18308caa1ae08a1ab->leave($__internal_6e842c75cb59f18d933bb8aad2500e8b2525fe2375e9c1f18308caa1ae08a1ab_prof);

    }

    // line 67
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_82366fdd131646e2172162b2878f5968525b5faaafe08ed957374e01188dbe5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82366fdd131646e2172162b2878f5968525b5faaafe08ed957374e01188dbe5f->enter($__internal_82366fdd131646e2172162b2878f5968525b5faaafe08ed957374e01188dbe5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 68
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 69
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 71
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 72
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 77
            echo "</div>";
        }
        
        $__internal_82366fdd131646e2172162b2878f5968525b5faaafe08ed957374e01188dbe5f->leave($__internal_82366fdd131646e2172162b2878f5968525b5faaafe08ed957374e01188dbe5f_prof);

    }

    // line 81
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_fa6c3c96019c075a1bfbad7de66bdc72b526436244c436a68c73fd73696761f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6c3c96019c075a1bfbad7de66bdc72b526436244c436a68c73fd73696761f7->enter($__internal_fa6c3c96019c075a1bfbad7de66bdc72b526436244c436a68c73fd73696761f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 82
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 83
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 85
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 86
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 87
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 89
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 90
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 91
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 92
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 94
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 95
                echo "</div>";
            }
        }
        
        $__internal_fa6c3c96019c075a1bfbad7de66bdc72b526436244c436a68c73fd73696761f7->leave($__internal_fa6c3c96019c075a1bfbad7de66bdc72b526436244c436a68c73fd73696761f7_prof);

    }

    // line 100
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_51d40dbc444f4c658952f122f9f6fdec7094bf8c74b83d8ceb2be956ea0ce2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d40dbc444f4c658952f122f9f6fdec7094bf8c74b83d8ceb2be956ea0ce2fe->enter($__internal_51d40dbc444f4c658952f122f9f6fdec7094bf8c74b83d8ceb2be956ea0ce2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 101
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 102
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 104
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 105
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 106
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 109
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 110
                echo "</div>";
            }
        }
        
        $__internal_51d40dbc444f4c658952f122f9f6fdec7094bf8c74b83d8ceb2be956ea0ce2fe->leave($__internal_51d40dbc444f4c658952f122f9f6fdec7094bf8c74b83d8ceb2be956ea0ce2fe_prof);

    }

    // line 115
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_087a3d0b403bb14dfea01f3efdf538a79df80ef3a3d96b2d728c069d2678566d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087a3d0b403bb14dfea01f3efdf538a79df80ef3a3d96b2d728c069d2678566d->enter($__internal_087a3d0b403bb14dfea01f3efdf538a79df80ef3a3d96b2d728c069d2678566d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 116
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 117
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_087a3d0b403bb14dfea01f3efdf538a79df80ef3a3d96b2d728c069d2678566d->leave($__internal_087a3d0b403bb14dfea01f3efdf538a79df80ef3a3d96b2d728c069d2678566d_prof);

    }

    // line 120
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a73c2a389448ce2e7715e4a51f45f7d12f65457553196e8d3804e96ef3fc82db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73c2a389448ce2e7715e4a51f45f7d12f65457553196e8d3804e96ef3fc82db->enter($__internal_a73c2a389448ce2e7715e4a51f45f7d12f65457553196e8d3804e96ef3fc82db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 121
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 122
            echo "<div class=\"control-group\">";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 124
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 125
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 126
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "</div>";
        } else {
            // line 131
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 133
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 134
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 135
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "</div>";
        }
        
        $__internal_a73c2a389448ce2e7715e4a51f45f7d12f65457553196e8d3804e96ef3fc82db->leave($__internal_a73c2a389448ce2e7715e4a51f45f7d12f65457553196e8d3804e96ef3fc82db_prof);

    }

    // line 142
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a62e5a78d45ebf5bee4682659cd6ed8cd4be3ee9f4618a926e3c39afbdca38aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62e5a78d45ebf5bee4682659cd6ed8cd4be3ee9f4618a926e3c39afbdca38aa->enter($__internal_a62e5a78d45ebf5bee4682659cd6ed8cd4be3ee9f4618a926e3c39afbdca38aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 143
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 144
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 147
            echo "<div class=\"checkbox\">";
            // line 148
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 149
            echo "</div>";
        }
        
        $__internal_a62e5a78d45ebf5bee4682659cd6ed8cd4be3ee9f4618a926e3c39afbdca38aa->leave($__internal_a62e5a78d45ebf5bee4682659cd6ed8cd4be3ee9f4618a926e3c39afbdca38aa_prof);

    }

    // line 153
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_8329c4aa42b285b82323f10f5aceaaefd7fac31aa880e130f86dde081667fa9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8329c4aa42b285b82323f10f5aceaaefd7fac31aa880e130f86dde081667fa9e->enter($__internal_8329c4aa42b285b82323f10f5aceaaefd7fac31aa880e130f86dde081667fa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 155
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"radio\">";
            // line 159
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_8329c4aa42b285b82323f10f5aceaaefd7fac31aa880e130f86dde081667fa9e->leave($__internal_8329c4aa42b285b82323f10f5aceaaefd7fac31aa880e130f86dde081667fa9e_prof);

    }

    // line 164
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        $__internal_f0756374859699e1befca1d948034a7ea19b881d6041a144529fc359cdc77ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0756374859699e1befca1d948034a7ea19b881d6041a144529fc359cdc77ba9->enter($__internal_f0756374859699e1befca1d948034a7ea19b881d6041a144529fc359cdc77ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 165
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <ul class=\"category-tree\">";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 168
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "</ul>
    </div>";
        
        $__internal_f0756374859699e1befca1d948034a7ea19b881d6041a144529fc359cdc77ba9->leave($__internal_f0756374859699e1befca1d948034a7ea19b881d6041a144529fc359cdc77ba9_prof);

    }

    // line 174
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        $__internal_ee87e6e1df54460758011b2daf548078f61f68bed0ddf98ac71bb957a0fd13a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee87e6e1df54460758011b2daf548078f61f68bed0ddf98ac71bb957a0fd13a4->enter($__internal_ee87e6e1df54460758011b2daf548078f61f68bed0ddf98ac71bb957a0fd13a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 175
        echo "<li>
        ";
        // line 176
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 177
        echo "        ";
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 178
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
            echo ">
                    ";
            // line 181
            if (($this->getAttribute(($context["child"] ?? null), "active", array(), "any", true, true) && ($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "active", array()) == 0))) {
                // line 182
                echo "                        <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
                echo "</i>";
            } else {
                // line 184
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
                echo "
                    ";
            }
            // line 186
            echo "                </label>
                ";
            // line 187
            if (array_key_exists("defaultCategory", $context)) {
                // line 188
                echo "                <div class=\"radio pull-right\">
                    <input type=\"radio\" value=\"";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                </div>
                ";
            }
            // line 192
            echo "            </div>";
        } else {
            // line 194
            echo "<div class=\"radio\">
                <label><input type=\"radio\" name=\"form[";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
            echo " class=\"category\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
            echo "</label>
                ";
            // line 196
            if (array_key_exists("defaultCategory", $context)) {
                // line 197
                echo "                <div class=\"radio pull-right\">
                    <input type=\"radio\" value=\"";
                // line 198
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                </div>
                ";
            }
            // line 201
            echo "            </div>";
        }
        // line 203
        echo "        ";
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 204
            echo "            <ul>
                ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 206
                echo "                    ";
                $context["child"] = $context["item"];
                // line 207
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "</ul>
        ";
        }
        // line 211
        echo "    </li>";
        
        $__internal_ee87e6e1df54460758011b2daf548078f61f68bed0ddf98ac71bb957a0fd13a4->leave($__internal_ee87e6e1df54460758011b2daf548078f61f68bed0ddf98ac71bb957a0fd13a4_prof);

    }

    // line 214
    public function block_translatefields_widget($context, array $blocks = array())
    {
        $__internal_9fc37e217d6a49da2cf268e92852ab3624bd89059c3a9a3e55f000bcee58c987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc37e217d6a49da2cf268e92852ab3624bd89059c3a9a3e55f000bcee58c987->enter($__internal_9fc37e217d6a49da2cf268e92852ab3624bd89059c3a9a3e55f000bcee58c987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translatefields_widget"));

        // line 215
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
        ";
        // line 217
        if (((($context["hideTabs"] ?? $this->getContext($context, "hideTabs")) == false) && (twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 1))) {
            // line 218
            echo "        <ul class=\"translationsLocales nav nav-tabs\">
            ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 220
                echo "                <li class=\"";
                if (($this->getAttribute(($context["defaultLocale"] ?? $this->getContext($context, "defaultLocale")), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                    echo "active";
                }
                echo " nav-link\">
                    <a href=\"#\" class=\"nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 222
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array())), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "        </ul>
        ";
        }
        // line 228
        echo "
        <div class=\"translationsFields tab-content \">
            ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 231
            echo "                <div class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo " tab-pane ";
            if (((($context["hideTabs"] ?? $this->getContext($context, "hideTabs")) == false) && (twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["defaultLocale"] ?? $this->getContext($context, "defaultLocale")), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                echo "active";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array()), "html", null, true);
            echo "\">
                    ";
            // line 232
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 233
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "        </div>
    </div>
";
        
        $__internal_9fc37e217d6a49da2cf268e92852ab3624bd89059c3a9a3e55f000bcee58c987->leave($__internal_9fc37e217d6a49da2cf268e92852ab3624bd89059c3a9a3e55f000bcee58c987_prof);

    }

    // line 240
    public function block_translate_fields_widget($context, array $blocks = array())
    {
        $__internal_f55df1afec05c59898fa7e0b71a00f960b7f8e44b158acd7fece92e173a35b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55df1afec05c59898fa7e0b71a00f960b7f8e44b158acd7fece92e173a35b26->enter($__internal_f55df1afec05c59898fa7e0b71a00f960b7f8e44b158acd7fece92e173a35b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        // line 241
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 242
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 244
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
        
        $__internal_f55df1afec05c59898fa7e0b71a00f960b7f8e44b158acd7fece92e173a35b26->leave($__internal_f55df1afec05c59898fa7e0b71a00f960b7f8e44b158acd7fece92e173a35b26_prof);

    }

    // line 247
    public function block_date_picker_widget($context, array $blocks = array())
    {
        $__internal_9e8e8bcf489aa65855d1880b3d065558d75ff865fb139c3996bbf93b35734065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8e8bcf489aa65855d1880b3d065558d75ff865fb139c3996bbf93b35734065->enter($__internal_9e8e8bcf489aa65855d1880b3d065558d75ff865fb139c3996bbf93b35734065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_picker_widget"));

        // line 248
        echo "    ";
        ob_start();
        // line 249
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " datepicker"))));
        // line 250
        echo "        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" ";
        // line 251
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
            <div class=\"input-group-addon\">
                <i class=\"material-icons\">date_range</i>
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9e8e8bcf489aa65855d1880b3d065558d75ff865fb139c3996bbf93b35734065->leave($__internal_9e8e8bcf489aa65855d1880b3d065558d75ff865fb139c3996bbf93b35734065_prof);

    }

    // line 259
    public function block__form_step6_attachments_widget($context, array $blocks = array())
    {
        $__internal_e940c039a5a4575da3a8f78c59add7b7d7ca1301463aa02e763a5aa9c30f1ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e940c039a5a4575da3a8f78c59add7b7d7ca1301463aa02e763a5aa9c30f1ca4->enter($__internal_e940c039a5a4575da3a8f78c59add7b7d7ca1301463aa02e763a5aa9c30f1ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        // line 260
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 1)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 264
        echo (((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table table-striped\">
            <thead class=\"text-uppercase\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\"> ";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 276
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 277
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6\"><span>";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "file_name", array(), "array"), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "mime", array(), "array"), "html", null, true);
            echo "</td>
              </tr>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
        
        $__internal_e940c039a5a4575da3a8f78c59add7b7d7ca1301463aa02e763a5aa9c30f1ca4->leave($__internal_e940c039a5a4575da3a8f78c59add7b7d7ca1301463aa02e763a5aa9c30f1ca4_prof);

    }

    // line 291
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a3ee46f88c48adc0b8419f1365ad64c5b23dc6b475784fdb497e8e4f77766563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ee46f88c48adc0b8419f1365ad64c5b23dc6b475784fdb497e8e4f77766563->enter($__internal_a3ee46f88c48adc0b8419f1365ad64c5b23dc6b475784fdb497e8e4f77766563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 292
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 293
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a3ee46f88c48adc0b8419f1365ad64c5b23dc6b475784fdb497e8e4f77766563->leave($__internal_a3ee46f88c48adc0b8419f1365ad64c5b23dc6b475784fdb497e8e4f77766563_prof);

    }

    // line 296
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_fba5b3950882c5928a08ca77a1742f287a40efd022bcdc7864696a553bbfdb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba5b3950882c5928a08ca77a1742f287a40efd022bcdc7864696a553bbfdb43->enter($__internal_fba5b3950882c5928a08ca77a1742f287a40efd022bcdc7864696a553bbfdb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 298
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 299
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_fba5b3950882c5928a08ca77a1742f287a40efd022bcdc7864696a553bbfdb43->leave($__internal_fba5b3950882c5928a08ca77a1742f287a40efd022bcdc7864696a553bbfdb43_prof);

    }

    // line 302
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_19197530070326f4dcf7d740e142511cad75a8a0fd39f8864051619dbceb675f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19197530070326f4dcf7d740e142511cad75a8a0fd39f8864051619dbceb675f->enter($__internal_19197530070326f4dcf7d740e142511cad75a8a0fd39f8864051619dbceb675f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 303
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_19197530070326f4dcf7d740e142511cad75a8a0fd39f8864051619dbceb675f->leave($__internal_19197530070326f4dcf7d740e142511cad75a8a0fd39f8864051619dbceb675f_prof);

    }

    // line 306
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_8d191b1f86bb4ad4b3e724b6060aca285bdcbab454f34ef941998046108189fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d191b1f86bb4ad4b3e724b6060aca285bdcbab454f34ef941998046108189fe->enter($__internal_8d191b1f86bb4ad4b3e724b6060aca285bdcbab454f34ef941998046108189fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 307
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8d191b1f86bb4ad4b3e724b6060aca285bdcbab454f34ef941998046108189fe->leave($__internal_8d191b1f86bb4ad4b3e724b6060aca285bdcbab454f34ef941998046108189fe_prof);

    }

    // line 310
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ad8395aa8d82a7ba59891fede9976c94b866daed7537876871fce1380469db6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8395aa8d82a7ba59891fede9976c94b866daed7537876871fce1380469db6c->enter($__internal_ad8395aa8d82a7ba59891fede9976c94b866daed7537876871fce1380469db6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 311
        echo "    ";
        // line 312
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 313
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 314
                echo "    ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 316
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 317
                echo "    ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 319
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 320
                echo "    ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
            // line 322
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 323
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            // line 324
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : (($context["label"] ?? $this->getContext($context, "label"))))) : ("")), "html", null, true);
            // line 325
            echo "</label>
    ";
        }
        
        $__internal_ad8395aa8d82a7ba59891fede9976c94b866daed7537876871fce1380469db6c->leave($__internal_ad8395aa8d82a7ba59891fede9976c94b866daed7537876871fce1380469db6c_prof);

    }

    // line 331
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6e71d4952900f81baa22c6d30106d45baeb623eff3a77f6ff7ff57aef9e46db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e71d4952900f81baa22c6d30106d45baeb623eff3a77f6ff7ff57aef9e46db4->enter($__internal_6e71d4952900f81baa22c6d30106d45baeb623eff3a77f6ff7ff57aef9e46db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 332
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 333
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 334
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 335
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 336
        echo "</div>";
        
        $__internal_6e71d4952900f81baa22c6d30106d45baeb623eff3a77f6ff7ff57aef9e46db4->leave($__internal_6e71d4952900f81baa22c6d30106d45baeb623eff3a77f6ff7ff57aef9e46db4_prof);

    }

    // line 339
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3742af93d93ff2cc9bc41ea11f71574a594643dc45566bd3920184ce75ebc3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3742af93d93ff2cc9bc41ea11f71574a594643dc45566bd3920184ce75ebc3cc->enter($__internal_3742af93d93ff2cc9bc41ea11f71574a594643dc45566bd3920184ce75ebc3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 340
        echo "<div class=\"form-group\">";
        // line 341
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 342
        echo "</div>";
        
        $__internal_3742af93d93ff2cc9bc41ea11f71574a594643dc45566bd3920184ce75ebc3cc->leave($__internal_3742af93d93ff2cc9bc41ea11f71574a594643dc45566bd3920184ce75ebc3cc_prof);

    }

    // line 345
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_97da3c62ec16fe05f2cf6615a95bdf692a41b43ff38fb8dbac201e313feb149f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97da3c62ec16fe05f2cf6615a95bdf692a41b43ff38fb8dbac201e313feb149f->enter($__internal_97da3c62ec16fe05f2cf6615a95bdf692a41b43ff38fb8dbac201e313feb149f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 346
        $context["force_error"] = true;
        // line 347
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_97da3c62ec16fe05f2cf6615a95bdf692a41b43ff38fb8dbac201e313feb149f->leave($__internal_97da3c62ec16fe05f2cf6615a95bdf692a41b43ff38fb8dbac201e313feb149f_prof);

    }

    // line 350
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_c0cdc1ebc3a984205b968332345b7f4c9e79d5c7027974bebbf4458cf3eda439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cdc1ebc3a984205b968332345b7f4c9e79d5c7027974bebbf4458cf3eda439->enter($__internal_c0cdc1ebc3a984205b968332345b7f4c9e79d5c7027974bebbf4458cf3eda439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 351
        $context["force_error"] = true;
        // line 352
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c0cdc1ebc3a984205b968332345b7f4c9e79d5c7027974bebbf4458cf3eda439->leave($__internal_c0cdc1ebc3a984205b968332345b7f4c9e79d5c7027974bebbf4458cf3eda439_prof);

    }

    // line 355
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_dd110e38d79c0f6b3ff9ef7f0d8caac3e8ec9ade2e31b0c2c5aaf8b36fb5ffdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd110e38d79c0f6b3ff9ef7f0d8caac3e8ec9ade2e31b0c2c5aaf8b36fb5ffdb->enter($__internal_dd110e38d79c0f6b3ff9ef7f0d8caac3e8ec9ade2e31b0c2c5aaf8b36fb5ffdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 356
        $context["force_error"] = true;
        // line 357
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dd110e38d79c0f6b3ff9ef7f0d8caac3e8ec9ade2e31b0c2c5aaf8b36fb5ffdb->leave($__internal_dd110e38d79c0f6b3ff9ef7f0d8caac3e8ec9ade2e31b0c2c5aaf8b36fb5ffdb_prof);

    }

    // line 360
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_65a1727c1526efc4efc24811276d1072440b12322fdc62c5b510eac35d527240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a1727c1526efc4efc24811276d1072440b12322fdc62c5b510eac35d527240->enter($__internal_65a1727c1526efc4efc24811276d1072440b12322fdc62c5b510eac35d527240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 361
        $context["force_error"] = true;
        // line 362
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_65a1727c1526efc4efc24811276d1072440b12322fdc62c5b510eac35d527240->leave($__internal_65a1727c1526efc4efc24811276d1072440b12322fdc62c5b510eac35d527240_prof);

    }

    // line 365
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c77621a934a53e596b0ecfddb7c6992dfa4a6e9896260d69ecbd6329b3b04c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77621a934a53e596b0ecfddb7c6992dfa4a6e9896260d69ecbd6329b3b04c84->enter($__internal_c77621a934a53e596b0ecfddb7c6992dfa4a6e9896260d69ecbd6329b3b04c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 366
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 367
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 368
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 369
        echo "</div>";
        
        $__internal_c77621a934a53e596b0ecfddb7c6992dfa4a6e9896260d69ecbd6329b3b04c84->leave($__internal_c77621a934a53e596b0ecfddb7c6992dfa4a6e9896260d69ecbd6329b3b04c84_prof);

    }

    // line 372
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_15e02f3ecb9a1fae4b2d33764462c069b2d82af9795b2e1a41e2ff8f4144918c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e02f3ecb9a1fae4b2d33764462c069b2d82af9795b2e1a41e2ff8f4144918c->enter($__internal_15e02f3ecb9a1fae4b2d33764462c069b2d82af9795b2e1a41e2ff8f4144918c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 373
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 374
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 375
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 376
        echo "</div>";
        
        $__internal_15e02f3ecb9a1fae4b2d33764462c069b2d82af9795b2e1a41e2ff8f4144918c->leave($__internal_15e02f3ecb9a1fae4b2d33764462c069b2d82af9795b2e1a41e2ff8f4144918c_prof);

    }

    // line 381
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c100140bcde5818886254a94d57346cc21f76c784dd9fc39b6edd7f271b64d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c100140bcde5818886254a94d57346cc21f76c784dd9fc39b6edd7f271b64d69->enter($__internal_c100140bcde5818886254a94d57346cc21f76c784dd9fc39b6edd7f271b64d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 382
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 383
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 384
            echo "    <ul class=\"list-unstyled\">";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 386
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute(                // line 387
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                // line 388
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                // line 389
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                // line 390
                echo "
    </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 393
            echo "</ul>
    ";
            // line 394
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_c100140bcde5818886254a94d57346cc21f76c784dd9fc39b6edd7f271b64d69->leave($__internal_c100140bcde5818886254a94d57346cc21f76c784dd9fc39b6edd7f271b64d69_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1315 => 394,  1312 => 393,  1305 => 390,  1303 => 389,  1302 => 388,  1301 => 387,  1299 => 386,  1295 => 385,  1293 => 384,  1287 => 383,  1285 => 382,  1279 => 381,  1272 => 376,  1270 => 375,  1268 => 374,  1262 => 373,  1256 => 372,  1249 => 369,  1247 => 368,  1245 => 367,  1239 => 366,  1233 => 365,  1226 => 362,  1224 => 361,  1218 => 360,  1211 => 357,  1209 => 356,  1203 => 355,  1196 => 352,  1194 => 351,  1188 => 350,  1181 => 347,  1179 => 346,  1173 => 345,  1166 => 342,  1164 => 341,  1162 => 340,  1156 => 339,  1149 => 336,  1147 => 335,  1145 => 334,  1143 => 333,  1137 => 332,  1131 => 331,  1122 => 325,  1120 => 324,  1118 => 323,  1103 => 322,  1099 => 320,  1096 => 319,  1092 => 317,  1089 => 316,  1085 => 314,  1082 => 313,  1079 => 312,  1077 => 311,  1071 => 310,  1064 => 307,  1058 => 306,  1051 => 303,  1045 => 302,  1038 => 299,  1036 => 298,  1030 => 296,  1023 => 293,  1021 => 292,  1015 => 291,  1003 => 282,  986 => 279,  982 => 278,  978 => 277,  975 => 276,  958 => 275,  952 => 271,  948 => 270,  944 => 269,  936 => 264,  930 => 261,  925 => 260,  919 => 259,  899 => 251,  896 => 250,  893 => 249,  890 => 248,  884 => 247,  877 => 244,  874 => 242,  872 => 241,  866 => 240,  857 => 236,  848 => 233,  844 => 232,  825 => 231,  821 => 230,  817 => 228,  813 => 226,  803 => 222,  799 => 221,  792 => 220,  788 => 219,  785 => 218,  783 => 217,  779 => 216,  774 => 215,  768 => 214,  761 => 211,  757 => 209,  740 => 207,  737 => 206,  720 => 205,  717 => 204,  714 => 203,  711 => 201,  705 => 198,  702 => 197,  700 => 196,  690 => 195,  687 => 194,  684 => 192,  678 => 189,  675 => 188,  673 => 187,  670 => 186,  665 => 184,  660 => 182,  658 => 181,  650 => 180,  646 => 178,  643 => 177,  641 => 176,  638 => 175,  632 => 174,  624 => 170,  607 => 168,  590 => 167,  585 => 165,  579 => 164,  571 => 160,  569 => 159,  567 => 158,  564 => 156,  562 => 155,  560 => 154,  554 => 153,  546 => 149,  544 => 148,  542 => 147,  539 => 145,  537 => 144,  535 => 143,  529 => 142,  521 => 138,  515 => 135,  514 => 134,  513 => 133,  509 => 132,  505 => 131,  502 => 129,  496 => 126,  495 => 125,  494 => 124,  490 => 123,  488 => 122,  486 => 121,  480 => 120,  473 => 117,  471 => 116,  465 => 115,  456 => 110,  453 => 109,  445 => 108,  440 => 106,  438 => 105,  436 => 104,  433 => 102,  431 => 101,  425 => 100,  416 => 95,  414 => 94,  412 => 92,  411 => 91,  410 => 90,  409 => 89,  404 => 87,  402 => 86,  400 => 85,  397 => 83,  395 => 82,  389 => 81,  381 => 77,  379 => 76,  377 => 75,  375 => 74,  373 => 73,  369 => 72,  367 => 71,  364 => 69,  362 => 68,  356 => 67,  348 => 63,  346 => 62,  344 => 61,  338 => 60,  331 => 57,  325 => 55,  323 => 54,  321 => 53,  315 => 51,  312 => 50,  310 => 49,  307 => 48,  301 => 47,  294 => 44,  292 => 43,  286 => 42,  279 => 39,  277 => 38,  271 => 37,  264 => 34,  261 => 32,  259 => 31,  253 => 30,  246 => 381,  243 => 380,  240 => 378,  238 => 372,  235 => 371,  233 => 365,  230 => 364,  228 => 360,  225 => 359,  223 => 355,  220 => 354,  218 => 350,  215 => 349,  213 => 345,  210 => 344,  208 => 339,  205 => 338,  203 => 331,  200 => 330,  197 => 328,  195 => 310,  192 => 309,  190 => 306,  187 => 305,  185 => 302,  182 => 301,  180 => 296,  177 => 295,  175 => 291,  172 => 290,  169 => 288,  167 => 259,  164 => 258,  162 => 247,  159 => 246,  157 => 240,  154 => 239,  152 => 214,  149 => 213,  147 => 174,  144 => 173,  142 => 164,  139 => 163,  137 => 153,  134 => 152,  132 => 142,  129 => 141,  127 => 120,  124 => 119,  122 => 115,  119 => 114,  117 => 100,  114 => 99,  112 => 81,  109 => 80,  107 => 67,  104 => 66,  102 => 60,  99 => 59,  97 => 47,  94 => 46,  92 => 42,  89 => 41,  87 => 37,  84 => 36,  82 => 30,  79 => 29,  76 => 27,  21 => 26,  14 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% use \"PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig\" %}
{% use 'PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig' %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group money-type\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
        {{- date_pattern|replace({
            '{{ year }}': form_widget(form.year),
            '{{ month }}': form_widget(form.month),
            '{{ day }}': form_widget(form.day),
        })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}
        {% if multiple -%}
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"{{ form.vars.full_name }}[tree][]\" value=\"{{ child.id_category }}\" class=\"category\" {{ checked }}>
                    {% if child.active is defined and child.active == 0 %}
                        <i>{{ child.name }}</i>
                    {%- else -%}
                        {{ child.name }}
                    {% endif %}
                </label>
                {% if defaultCategory is defined %}
                <div class=\"radio pull-right\">
                    <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                </div>
                {% endif %}
            </div>
        {%- else -%}
            <div class=\"radio\">
                <label><input type=\"radio\" name=\"form[{{ form.vars.id }}][tree]\" value=\"{{ child.id_category }}\" {{ checked }} class=\"category\">{{ child.name }}</label>
                {% if defaultCategory is defined %}
                <div class=\"radio pull-right\">
                    <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                </div>
                {% endif %}
            </div>
        {%- endif %}
        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block translatefields_widget %}
    {{ form_errors(form) }}
    <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\">
        {% if hideTabs == false and form|length > 1 %}
        <ul class=\"translationsLocales nav nav-tabs\">
            {% for translationsFields in form %}
                <li class=\"{% if defaultLocale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\">
                    <a href=\"#\" class=\"nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
                        {{ translationsFields.vars.label|capitalize }}
                    </a>
                </li>
            {% endfor %}
        </ul>
        {% endif %}

        <div class=\"translationsFields tab-content \">
            {% for translationsFields in form %}
                <div class=\"translationsFields-{{ translationsFields.vars.id }} tab-pane {% if hideTabs == false and form|length > 1 %}panel panel-default{% endif %} {% if defaultLocale.id_lang == translationsFields.vars.name %}active{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
                    {{ form_errors(translationsFields) }}
                    {{ form_widget(translationsFields) }}
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block translate_fields_widget -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock translate_fields_widget %}

{% block date_picker_widget %}
    {% spaceless %}
        {%  set attr = attr|merge({'class': ((attr.class|default('') ~ ' datepicker')|trim)}) %}
        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
            <div class=\"input-group-addon\">
                <i class=\"material-icons\">date_range</i>
            </div>
        </div>
    {% endspaceless %}
{% endblock date_picker_widget %}

{% block _form_step6_attachments_widget %}
    <div class=\"js-options-no-attachments {{ form|length >1 ? 'hide' : '' }}\">
        <small>{{ 'There is no attachment yet.'|trans({}, 'Admin.Catalog.Notification') }}</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments {{ form|length == 0 ? 'hide' : '' }}\">
        <div>
          <table id=\"product-attachment-file\" class=\"table table-striped\">
            <thead class=\"text-uppercase\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\"> {{ 'Title'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-6\">{{ 'File name'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-2\">{{ 'Type'|trans({}, 'Admin.Catalog.Feature') }}</th>
              </tr>
            </thead>
            <tbody>
            {%- for child in form %}
              <tr>
                <td class=\"col-md-3\">{{ form_widget(child) }}</td>
                <td class=\"col-md-6\"><span>{{ form.vars.attr.data[loop.index0]['file_name'] }}</span></td>
                <td class=\"col-md-2\">{{ form.vars.attr.data[loop.index0]['mime'] }}</td>
              </tr>
            {% endfor -%}
            </tbody>
          </table>
        </div>
      </div>
    </div>
{% endblock %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
    {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
{% endif %}
        {% if parent_label_class is defined %}
    {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
{% endif %}
        {% if label is not same as(false) and label is empty %}
    {% set label = name|humanize %}
{% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? (translation_domain is same as(false) ? label : label) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
    <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{
        error.messagePluralization is null
        ? error.messageTemplate|trans(error.messageParameters, 'form_error')
        : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
        }}
    </li>
{%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_3_layout.html.twig");
    }
}
