<?php

/* PrestaShopBundle:Admin:Product/Include/form-specific-price.html.twig */
class __TwigTemplate_27ab1ab65140e2be22e1ec19affe4721bead0abb12a9d11457194ad764d7119e extends Twig_Template
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
        $__internal_b8ec2fb229b2ca15317c9aff3ee510891540c9c835f733d1b844bf35193acb9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ec2fb229b2ca15317c9aff3ee510891540c9c835f733d1b844bf35193acb9f->enter($__internal_b8ec2fb229b2ca15317c9aff3ee510891540c9c835f733d1b844bf35193acb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:Product/Include/form-specific-price.html.twig"));

        // line 25
        echo "<div class=\"card card-block\">
  <h4><b>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific price conditions", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>
  ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sp_id_shop", array(), "any", false, true), "vars", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 30
            echo "  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", array(), "Admin.Global"), "html", null, true);
            echo "</label>
        ";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_shop", array()), 'errors');
            echo "
        ";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_shop", array()), 'widget');
            echo "
      </fieldset>
    </div>
  </div>
  ";
        } else {
            // line 40
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_shop", array()), 'widget');
            echo "
  ";
        }
        // line 42
        echo "
  <div class=\"row\">
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For", array(), "Admin.Global"), "html", null, true);
        echo "</label>
        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_currency", array()), 'errors');
        echo "
        ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_currency", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_country", array()), 'errors');
        echo "
        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_country", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_group", array()), 'errors');
        echo "
        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_group", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-6\">
      <fieldset class=\"form-group autocomplete-search\">
        <label>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", array(), "Admin.Global"), "html", null, true);
        echo "</label>
        ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_customer", array()), 'errors');
        echo "
        ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_customer", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div id=\"specific-price-combination-selector\" class=\"col-md-6 ";
        // line 74
        echo ((($context["has_combinations"] ?? $this->getContext($context, "has_combinations"))) ? ("") : ("hide"));
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_product_attribute", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_product_attribute", array()), 'errors');
        echo "
        ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_id_product_attribute", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_from", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_from", array()), 'errors');
        echo "
        ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_from", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("to", array(), "Admin.Global");
        echo "</label>
        ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_to", array()), 'errors');
        echo "
        ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_to", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-2\">
      <fieldset class=\"form-group\">
        <label>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_from_quantity", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_from_quantity", array()), 'errors');
        echo "
        <div class=\"input-group\">
          ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_from_quantity", array()), 'widget');
        echo "
          <span class=\"input-group-addon\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unit(s)", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
        </div>
      </fieldset>
    </div>
  </div>
  <br>

  <h4><b>";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact on price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>
  <div class=\"row\">
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_price", array()), 'errors');
        echo "
        ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_price", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "leave_bprice", array()), 'errors');
        echo "
        ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "leave_bprice", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-xl-2 col-lg-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply a discount of", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
        ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_reduction", array()), 'errors');
        echo "
        ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_reduction", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-xl-2 col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_reduction_type", array()), 'errors');
        echo "
        ";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_reduction_type", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-xl-2 col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_reduction_tax", array()), 'errors');
        echo "
        ";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sp_reduction_tax", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"col-md-12 text-xs-right\">
    ";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cancel", array()), 'widget');
        echo "
    ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
  </div>
  <div class=\"clearfix\"></div>
</div>
";
        
        $__internal_b8ec2fb229b2ca15317c9aff3ee510891540c9c835f733d1b844bf35193acb9f->leave($__internal_b8ec2fb229b2ca15317c9aff3ee510891540c9c835f733d1b844bf35193acb9f_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Product/Include/form-specific-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 151,  284 => 150,  276 => 145,  272 => 144,  263 => 138,  259 => 137,  250 => 131,  246 => 130,  242 => 129,  232 => 122,  228 => 121,  219 => 115,  215 => 114,  211 => 113,  204 => 109,  194 => 102,  190 => 101,  185 => 99,  181 => 98,  173 => 93,  169 => 92,  165 => 91,  157 => 86,  153 => 85,  149 => 84,  140 => 78,  136 => 77,  132 => 76,  127 => 74,  119 => 69,  115 => 68,  111 => 67,  103 => 62,  99 => 61,  90 => 55,  86 => 54,  77 => 48,  73 => 47,  69 => 46,  63 => 42,  57 => 40,  49 => 35,  45 => 34,  41 => 33,  36 => 30,  34 => 29,  29 => 27,  25 => 26,  22 => 25,);
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
<div class=\"card card-block\">
  <h4><b>{{ 'Specific price conditions'|trans({}, 'Admin.Catalog.Feature') }}</b></h4>
  {{ form_errors(form) }}

  {% if form.sp_id_shop.vars.choices is defined %}
  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label>{{ 'Shop'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_shop) }}
        {{ form_widget(form.sp_id_shop) }}
      </fieldset>
    </div>
  </div>
  {% else %}
      {{ form_widget(form.sp_id_shop) }}
  {% endif %}

  <div class=\"row\">
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>{{ 'For'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_currency) }}
        {{ form_widget(form.sp_id_currency) }}
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_id_country) }}
        {{ form_widget(form.sp_id_country) }}
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_id_group) }}
        {{ form_widget(form.sp_id_group) }}
      </fieldset>
    </div>
    <div class=\"col-md-6\">
      <fieldset class=\"form-group autocomplete-search\">
        <label>{{ 'Customer'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_customer) }}
        {{ form_widget(form.sp_id_customer) }}
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div id=\"specific-price-combination-selector\" class=\"col-md-6 {{ has_combinations ? '' : 'hide' }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_id_product_attribute.vars.label }}</label>
        {{ form_errors(form.sp_id_product_attribute) }}
        {{ form_widget(form.sp_id_product_attribute) }}
      </fieldset>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_from.vars.label }}</label>
        {{ form_errors(form.sp_from) }}
        {{ form_widget(form.sp_from) }}
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>{{ 'to'|trans({}, 'Admin.Global')|raw }}</label>
        {{ form_errors(form.sp_to) }}
        {{ form_widget(form.sp_to) }}
      </fieldset>
    </div>
    <div class=\"col-md-2\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_from_quantity.vars.label }}</label>
        {{ form_errors(form.sp_from_quantity) }}
        <div class=\"input-group\">
          {{ form_widget(form.sp_from_quantity) }}
          <span class=\"input-group-addon\">{{ 'Unit(s)'|trans({}, 'Admin.Catalog.Feature') }}</span>
        </div>
      </fieldset>
    </div>
  </div>
  <br>

  <h4><b>{{ 'Impact on price'|trans({}, 'Admin.Catalog.Feature') }}</b></h4>
  <div class=\"row\">
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_price.vars.label }}</label>
        {{ form_errors(form.sp_price) }}
        {{ form_widget(form.sp_price) }}
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.leave_bprice) }}
        {{ form_widget(form.leave_bprice) }}
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-xl-2 col-lg-3\">
      <fieldset class=\"form-group\">
        <label>{{ 'Apply a discount of'|trans({}, 'Admin.Catalog.Feature') }}</label>
        {{ form_errors(form.sp_reduction) }}
        {{ form_widget(form.sp_reduction) }}
      </fieldset>
    </div>
    <div class=\"col-xl-2 col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_reduction_type) }}
        {{ form_widget(form.sp_reduction_type) }}
      </fieldset>
    </div>
    <div class=\"col-xl-2 col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_reduction_tax) }}
        {{ form_widget(form.sp_reduction_tax) }}
      </fieldset>
    </div>
  </div>
  <div class=\"col-md-12 text-xs-right\">
    {{ form_widget(form.cancel) }}
    {{ form_widget(form.save) }}
  </div>
  <div class=\"clearfix\"></div>
</div>
", "PrestaShopBundle:Admin:Product/Include/form-specific-price.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/form-specific-price.html.twig");
    }
}
