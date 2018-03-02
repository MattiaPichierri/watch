<?php

/* PrestaShopBundle:Admin/Product:form_combinations_bulk.html.twig */
class __TwigTemplate_c8d647d7301d57171c5a78d12846da58ec3f4991d67ecc457940a3e90973c00d extends Twig_Template
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
        $__internal_f2e85da18fab8da4559f55a459ac83e7bbaf1a885f0cc8a43b410218d0048719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e85da18fab8da4559f55a459ac83e7bbaf1a885f0cc8a43b410218d0048719->enter($__internal_f2e85da18fab8da4559f55a459ac83e7bbaf1a885f0cc8a43b410218d0048719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product:form_combinations_bulk.html.twig"));

        // line 25
        echo "<div class=\"row\">
  ";
        // line 26
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 27
            echo "    <div class=\"col-xl-2 col-lg-6 custom-width m-b-1\">
      <label class=\"form-control-label\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", array()), "vars", array()), "label", array()), "html", null, true);
            echo "</label>
      ";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", array()), 'errors');
            echo "
      ";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", array()), 'widget');
            echo "
    </div>
  ";
        }
        // line 33
        echo "
  <div class=\"col-xl-2 col-lg-6 custom-width m-b-1\">
    <label class=\"form-control-label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cost_price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cost_price", array()), 'errors');
        echo "
    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cost_price", array()), 'widget');
        echo "
  </div>

  <div class=\"col-xl-2 col-lg-6 custom-width m-b-1\">
    <label class=\"form-control-label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_weight", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_weight", array()), 'errors');
        echo "
    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_weight", array()), 'widget');
        echo "
  </div>

  <div class=\"col-xl-3 col-lg-6 custom-width m-b-1\">
    <label class=\"form-control-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_price_te", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_price_te", array()), 'errors');
        echo "
    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_price_te", array()), 'widget');
        echo "
  </div>

  <div class=\"col-xl-3 col-lg-6 custom-width m-b-1\">
    <label class=\"form-control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_price_ti", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_price_ti", array()), 'errors');
        echo "
    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_price_ti", array()), 'widget');
        echo "
  </div>

  <div class=\"col-xl-4 col-lg-6 custom-width m-b-1\">
    <label class=\"form-control-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_availability", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_availability", array()), 'errors');
        echo "
    ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_availability", array()), 'widget');
        echo "
  </div>

  <div class=\"col-xl-4 col-lg-6 custom-width\">
    <label class=\"form-control-label\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", array()), 'errors');
        echo "
    ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", array()), 'widget');
        echo "
  </div>

  <div class=\"col-xl-4 col-lg-6 custom-width\">
    <label class=\"form-control-label\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minimal_quantity", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minimal_quantity", array()), 'errors');
        echo "
    ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minimal_quantity", array()), 'widget');
        echo "
  </div>
</div>
<div class=\"row\">
    <div class=\"col-md-3 col-md-offset-7\">
      <label class=\"form-control-label\">&nbsp;</label>
      <button id=\"delete-combinations\" class=\"btn btn-tertiary-outline btn-block\" data=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_attribute", array("idProduct" => ($context["id_product"] ?? $this->getContext($context, "id_product")))), "html", null, true);
        echo "\">
        <i class=\"material-icons\">delete</i>
        ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete combinations", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </button>
    </div>
    <div class=\"col-md-2\">
      <label class=\"form-control-label\">&nbsp;</label>
      <button id=\"apply-on-combinations\" class=\"btn btn-primary-outline btn-block\">
        ";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply", array(), "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
</div>
";
        
        $__internal_f2e85da18fab8da4559f55a459ac83e7bbaf1a885f0cc8a43b410218d0048719->leave($__internal_f2e85da18fab8da4559f55a459ac83e7bbaf1a885f0cc8a43b410218d0048719_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product:form_combinations_bulk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 90,  169 => 87,  160 => 81,  155 => 79,  146 => 73,  142 => 72,  138 => 71,  131 => 67,  127 => 66,  123 => 65,  116 => 61,  112 => 60,  108 => 59,  101 => 55,  97 => 54,  93 => 53,  86 => 49,  82 => 48,  78 => 47,  71 => 43,  67 => 42,  63 => 41,  56 => 37,  52 => 36,  48 => 35,  44 => 33,  38 => 30,  34 => 29,  30 => 28,  27 => 27,  25 => 26,  22 => 25,);
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
<div class=\"row\">
  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
    <div class=\"col-xl-2 col-lg-6 custom-width m-b-1\">
      <label class=\"form-control-label\">{{ form.quantity.vars.label }}</label>
      {{ form_errors(form.quantity) }}
      {{ form_widget(form.quantity) }}
    </div>
  {% endif %}

  <div class=\"col-xl-2 col-lg-6 custom-width m-b-1\">
    <label class=\"form-control-label\">{{ form.cost_price.vars.label }}</label>
    {{ form_errors(form.cost_price) }}
    {{ form_widget(form.cost_price) }}
  </div>

  <div class=\"col-xl-2 col-lg-6 custom-width m-b-1\">
    <label class=\"form-control-label\">{{ form.impact_on_weight.vars.label }}</label>
    {{ form_errors(form.impact_on_weight) }}
    {{ form_widget(form.impact_on_weight) }}
  </div>

  <div class=\"col-xl-3 col-lg-6 custom-width m-b-1\">
    <label class=\"form-control-label\">{{ form.impact_on_price_te.vars.label }}</label>
    {{ form_errors(form.impact_on_price_te) }}
    {{ form_widget(form.impact_on_price_te) }}
  </div>

  <div class=\"col-xl-3 col-lg-6 custom-width m-b-1\">
    <label class=\"form-control-label\">{{ form.impact_on_price_ti.vars.label }}</label>
    {{ form_errors(form.impact_on_price_ti) }}
    {{ form_widget(form.impact_on_price_ti) }}
  </div>

  <div class=\"col-xl-4 col-lg-6 custom-width m-b-1\">
    <label class=\"form-control-label\">{{ form.date_availability.vars.label }}</label>
    {{ form_errors(form.date_availability) }}
    {{ form_widget(form.date_availability) }}
  </div>

  <div class=\"col-xl-4 col-lg-6 custom-width\">
    <label class=\"form-control-label\">{{ form.reference.vars.label }}</label>
    {{ form_errors(form.reference) }}
    {{ form_widget(form.reference) }}
  </div>

  <div class=\"col-xl-4 col-lg-6 custom-width\">
    <label class=\"form-control-label\">{{ form.minimal_quantity.vars.label }}</label>
    {{ form_errors(form.minimal_quantity) }}
    {{ form_widget(form.minimal_quantity) }}
  </div>
</div>
<div class=\"row\">
    <div class=\"col-md-3 col-md-offset-7\">
      <label class=\"form-control-label\">&nbsp;</label>
      <button id=\"delete-combinations\" class=\"btn btn-tertiary-outline btn-block\" data=\"{{ path('admin_delete_attribute', {'idProduct': id_product}) }}\">
        <i class=\"material-icons\">delete</i>
        {{ 'Delete combinations'|trans({}, 'Admin.Catalog.Feature') }}
      </button>
    </div>
    <div class=\"col-md-2\">
      <label class=\"form-control-label\">&nbsp;</label>
      <button id=\"apply-on-combinations\" class=\"btn btn-primary-outline btn-block\">
        {{ 'Apply'|trans({}, 'Admin.Actions') }}
      </button>
    </div>
  {{ form_widget(form) }}
</div>
", "PrestaShopBundle:Admin/Product:form_combinations_bulk.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Product/form_combinations_bulk.html.twig");
    }
}
