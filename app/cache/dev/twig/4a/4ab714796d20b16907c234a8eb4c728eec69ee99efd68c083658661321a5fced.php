<?php

/* PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig */
class __TwigTemplate_b15bb3e41139703900efbc4b5e5757e24250838762db03f3e80ba79510820d74 extends Twig_Template
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
        $__internal_1e6f7838c4c8480737f3e7ce67e901c19628df22c9ce0694754030a068585848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6f7838c4c8480737f3e7ce67e901c19628df22c9ce0694754030a068585848->enter($__internal_1e6f7838c4c8480737f3e7ce67e901c19628df22c9ce0694754030a068585848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, ($context["suppliers"] ?? $this->getContext($context, "suppliers"))) > 0)) {
            // line 26
            echo "  <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supplier reference(s)", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h4>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"alert alert-info\" role=\"alert\">
        <i class=\"material-icons\">help</i>
        <p>
          ";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can specify product reference(s) for each associated supplier. Click \"Save\" after changing selected suppliers to display the associated product references.", array(), "Admin.Catalog.Help");
            echo "
        </p>
      </div>
    </div>
  </div>
";
        }
        // line 38
        echo "
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers"] ?? $this->getContext($context, "suppliers")));
        foreach ($context['_seq'] as $context["_key"] => $context["supplierId"]) {
            // line 40
            echo "  ";
            $context["collectionName"] = ("supplier_combination_" . $context["supplierId"]);
            // line 41
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><strong>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["collectionName"] ?? $this->getContext($context, "collectionName")), array(), "array"), "vars", array()), "label", array()), "html", null, true);
            echo "</strong></div>
    <div class=\"panel-body\" id=\"supplier_combination_";
            // line 43
            echo twig_escape_filter($this->env, $context["supplierId"], "html", null, true);
            echo "\">
      <div>
        ";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["collectionName"] ?? $this->getContext($context, "collectionName")), array(), "array"), 'errors');
            echo "
        <table class=\"table table-striped\">
          <thead>
            <tr class=\"text-uppercase\">
              <th width=\"30%\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product name", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=\"30%\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supplier reference", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=\"20%\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=\"20%\">";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency", array(), "Admin.Global"), "html", null, true);
            echo "</th>
            </tr>
          </thead>
          <tbody>
          ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["collectionName"] ?? $this->getContext($context, "collectionName")), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["supplier_combination"]) {
                // line 57
                echo "            <tr>
              <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["supplier_combination"], "vars", array()), "value", array()), "label", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 59
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "supplier_reference", array()), 'widget');
                echo "</td>
              <td>";
                // line 60
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "product_price", array()), 'widget');
                echo "</td>
              <td>
                ";
                // line 62
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "product_price_currency", array()), 'widget');
                echo "
                ";
                // line 63
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "id_product_attribute", array()), 'widget');
                echo "
                ";
                // line 64
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["supplier_combination"], "supplier_id", array()), 'widget');
                echo "
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier_combination'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplierId'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1e6f7838c4c8480737f3e7ce67e901c19628df22c9ce0694754030a068585848->leave($__internal_1e6f7838c4c8480737f3e7ce67e901c19628df22c9ce0694754030a068585848_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 68,  119 => 64,  115 => 63,  111 => 62,  106 => 60,  102 => 59,  98 => 58,  95 => 57,  91 => 56,  84 => 52,  80 => 51,  76 => 50,  72 => 49,  65 => 45,  60 => 43,  56 => 42,  53 => 41,  50 => 40,  46 => 39,  43 => 38,  34 => 32,  24 => 26,  22 => 25,);
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
{% if suppliers|length > 0 %}
  <h4>{{ 'Supplier reference(s)'|trans({}, 'Admin.Catalog.Feature') }}</h4>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"alert alert-info\" role=\"alert\">
        <i class=\"material-icons\">help</i>
        <p>
          {{ 'You can specify product reference(s) for each associated supplier. Click \"Save\" after changing selected suppliers to display the associated product references.'|trans({}, 'Admin.Catalog.Help')|raw }}
        </p>
      </div>
    </div>
  </div>
{% endif %}

{% for supplierId in suppliers %}
  {% set collectionName = 'supplier_combination_' ~ supplierId %}
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><strong>{{ form[collectionName].vars.label }}</strong></div>
    <div class=\"panel-body\" id=\"supplier_combination_{{ supplierId }}\">
      <div>
        {{ form_errors(form[collectionName]) }}
        <table class=\"table table-striped\">
          <thead>
            <tr class=\"text-uppercase\">
              <th width=\"30%\">{{ 'Product name'|trans({}, 'Admin.Catalog.Feature') }}</th>
              <th width=\"30%\">{{ 'Supplier reference'|trans({}, 'Admin.Catalog.Feature') }}</th>
              <th width=\"20%\">{{ 'Price (tax excl.)'|trans({}, 'Admin.Catalog.Feature') }}</th>
              <th width=\"20%\">{{ 'Currency'|trans({}, 'Admin.Global') }}</th>
            </tr>
          </thead>
          <tbody>
          {% for supplier_combination in form[collectionName] %}
            <tr>
              <td>{{ supplier_combination.vars.value.label }}</td>
              <td>{{ form_widget(supplier_combination.supplier_reference) }}</td>
              <td>{{ form_widget(supplier_combination.product_price) }}</td>
              <td>
                {{ form_widget(supplier_combination.product_price_currency) }}
                {{ form_widget(supplier_combination.id_product_attribute) }}
                {{ form_widget(supplier_combination.supplier_id) }}
              </td>
            </tr>
          {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endfor %}
", "PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/form-supplier-combination.html.twig");
    }
}
