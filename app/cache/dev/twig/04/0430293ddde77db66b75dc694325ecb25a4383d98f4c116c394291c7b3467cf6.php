<?php

/* PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig */
class __TwigTemplate_eabb72e5e52f28b6874ea827f0af1b254aa7710bd3c28d3355c8e392bb0fe5f0 extends Twig_Template
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
        $__internal_ca712a512cf431c87e46404ae933dc92ed41ba06ee710b4a3ee1cb006ffc20bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca712a512cf431c87e46404ae933dc92ed41ba06ee710b4a3ee1cb006ffc20bd->enter($__internal_ca712a512cf431c87e46404ae933dc92ed41ba06ee710b4a3ee1cb006ffc20bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig"));

        // line 25
        list($context["dimension_unit"], $context["weight_unit"]) =         array($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_DIMENSION_UNIT"), $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_WEIGHT_UNIT"));
        // line 26
        echo "
<div class=\"col-md-12 p-b-1\">
  <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Package dimension", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
  <p class=\"subtitle\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adjust your shipping costs by filling in the product dimensions.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
</div>

<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "width", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "width", array()), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "width", array()), 'widget');
        echo "
      <span class=\"input-group-addon\">";
        // line 38
        echo twig_escape_filter($this->env, ($context["dimension_unit"] ?? $this->getContext($context, "dimension_unit")), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "height", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "height", array()), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "height", array()), 'widget');
        echo "
      <span class=\"input-group-addon\">";
        // line 48
        echo twig_escape_filter($this->env, ($context["dimension_unit"] ?? $this->getContext($context, "dimension_unit")), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "depth", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "depth", array()), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "depth", array()), 'widget');
        echo "
      <span class=\"input-group-addon\">";
        // line 58
        echo twig_escape_filter($this->env, ($context["dimension_unit"] ?? $this->getContext($context, "dimension_unit")), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weight", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weight", array()), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weight", array()), 'widget');
        echo "
      <span class=\"input-group-addon\">";
        // line 68
        echo twig_escape_filter($this->env, ($context["weight_unit"] ?? $this->getContext($context, "weight_unit")), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "additional_shipping_cost", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If a carrier has a tax, it will be added to the shipping fees.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
    </h2>
    <label class=\"form-control-label\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Does this product incur additional shipping costs?", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
    <div class=\"row\">
      <div class=\"col-md-2\">
        ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "additional_shipping_cost", array()), 'widget');
        echo "
      </div>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "selectedCarriers", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>
    ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "selectedCarriers", array()), 'widget');
        echo "
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"alert alert-warning\" role=\"alert\">
    <i class=\"material-icons\">info_outline</i>
    <p>";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If no carrier is selected then all the carriers will be available for customers orders.", array(), "Admin.Catalog.Notification");
        echo "</p>
  </div>
</div>

<div class=\"col-md-12\">
  <div id=\"warehouse_combination_collection\" class=\"col-md-12 form-group\" data-url=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_warehouse_refresh_product_warehouse_combination_form");
        echo "\">
    ";
        // line 105
        if (((($context["asm_globally_activated"] ?? $this->getContext($context, "asm_globally_activated")) && ($context["isNotVirtual"] ?? $this->getContext($context, "isNotVirtual"))) && ($context["isChecked"] ?? $this->getContext($context, "isChecked")))) {
            // line 106
            echo "      ";
            echo twig_include($this->env, $context, "PrestaShopBundle:Admin:Product/Include/form-warehouse-combination.html.twig", array("warehouses" => ($context["warehouses"] ?? $this->getContext($context, "warehouses")), "form" => ($context["form"] ?? $this->getContext($context, "form"))));
            echo "
    ";
        }
        // line 108
        echo "  </div>
</div>

";
        // line 111
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsShippingStepBottom", array("id_product" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
        echo "
";
        
        $__internal_ca712a512cf431c87e46404ae933dc92ed41ba06ee710b4a3ee1cb006ffc20bd->leave($__internal_ca712a512cf431c87e46404ae933dc92ed41ba06ee710b4a3ee1cb006ffc20bd_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 111,  191 => 108,  185 => 106,  183 => 105,  179 => 104,  171 => 99,  161 => 92,  157 => 91,  146 => 83,  140 => 80,  135 => 78,  130 => 76,  119 => 68,  115 => 67,  110 => 65,  106 => 64,  97 => 58,  93 => 57,  88 => 55,  84 => 54,  75 => 48,  71 => 47,  66 => 45,  62 => 44,  53 => 38,  49 => 37,  44 => 35,  40 => 34,  32 => 29,  28 => 28,  24 => 26,  22 => 25,);
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
{% set dimension_unit, weight_unit = 'PS_DIMENSION_UNIT'|configuration, 'PS_WEIGHT_UNIT'|configuration %}

<div class=\"col-md-12 p-b-1\">
  <h2>{{ 'Package dimension'|trans({}, 'Admin.Catalog.Feature') }}</h2>
  <p class=\"subtitle\">{{ 'Adjust your shipping costs by filling in the product dimensions.'|trans({}, 'Admin.Catalog.Feature') }}</p>
</div>

<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.width.vars.label }}</label>
    {{ form_errors(form.width) }}
    <div class=\"input-group\">
      {{ form_widget(form.width) }}
      <span class=\"input-group-addon\">{{ dimension_unit }}</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.height.vars.label }}</label>
    {{ form_errors(form.height) }}
    <div class=\"input-group\">
      {{ form_widget(form.height) }}
      <span class=\"input-group-addon\">{{ dimension_unit }}</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.depth.vars.label }}</label>
    {{ form_errors(form.depth) }}
    <div class=\"input-group\">
      {{ form_widget(form.depth) }}
      <span class=\"input-group-addon\">{{ dimension_unit }}</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.weight.vars.label }}</label>
    {{ form_errors(form.weight) }}
    <div class=\"input-group\">
      {{ form_widget(form.weight) }}
      <span class=\"input-group-addon\">{{ weight_unit }}</span>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      {{ form.additional_shipping_cost.vars.label }}
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"{{ \"If a carrier has a tax, it will be added to the shipping fees.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
    </h2>
    <label class=\"form-control-label\">{{ 'Does this product incur additional shipping costs?'|trans({}, 'Admin.Catalog.Feature') }}</label>
    <div class=\"row\">
      <div class=\"col-md-2\">
        {{ form_widget(form.additional_shipping_cost) }}
      </div>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>{{ form.selectedCarriers.vars.label }}</h2>
    {{ form_widget(form.selectedCarriers) }}
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"alert alert-warning\" role=\"alert\">
    <i class=\"material-icons\">info_outline</i>
    <p>{{ 'If no carrier is selected then all the carriers will be available for customers orders.'|trans({}, 'Admin.Catalog.Notification')|raw }}</p>
  </div>
</div>

<div class=\"col-md-12\">
  <div id=\"warehouse_combination_collection\" class=\"col-md-12 form-group\" data-url=\"{{ path('admin_warehouse_refresh_product_warehouse_combination_form') }}\">
    {% if asm_globally_activated and isNotVirtual and isChecked %}
      {{ include('PrestaShopBundle:Admin:Product/Include/form-warehouse-combination.html.twig', { 'warehouses': warehouses, 'form': form }) }}
    {% endif %}
  </div>
</div>

{{ renderhook('displayAdminProductsShippingStepBottom', { 'id_product': id_product }) }}
", "PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/form_shipping.html.twig");
    }
}
