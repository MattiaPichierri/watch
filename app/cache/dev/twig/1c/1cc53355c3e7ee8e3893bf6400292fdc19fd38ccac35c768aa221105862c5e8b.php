<?php

/* PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig */
class __TwigTemplate_62df9ad729740ef7b8449906ac440cd9b9f3e97e825bfe28ede47201ca22178c extends Twig_Template
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
        $__internal_b446c287e3eff6fd8ac590b44c5020f99939e8dd870b1111463277139c5e6368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b446c287e3eff6fd8ac590b44c5020f99939e8dd870b1111463277139c5e6368->enter($__internal_b446c287e3eff6fd8ac590b44c5020f99939e8dd870b1111463277139c5e6368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "suppliers", array())) > 0)) {
            // line 26
            echo "  <div id=\"custom_fields\">
    <h2>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "suppliers", array()), "vars", array()), "label", array()), "html", null, true);
            echo "</h2>
    <div class=\"row m-b-1\">
      <div class=\"col-md-12\">
        <div class=\"alert alert-info alert-drop\" role=\"alert\">
          <i class=\"material-icons\">help</i>
          <p class=\"alert-text\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This interface allows you to specify the suppliers of the current product and its combinations, if any.", array(), "Admin.Catalog.Help");
            echo "<br>
            ";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can specify supplier references according to previously associated suppliers.", array(), "Admin.Catalog.Help");
            echo "
            <strong>";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more", array(), "Admin.Actions");
            echo "</strong>
          </p>
        </div>
        <div class=\"alert alert-info alert-down\" role=\"alert\">
          <p class=\"alert-down-text\">
            ";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When using the advanced stock management tool (see Shop Parameters > Products settings), the values you define (price, references) will be used in supply orders.", array(), "Admin.Catalog.Help");
            echo "
          </p>
        </div>
      </div>
    </div>

    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div>
          ";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "suppliers", array()), 'errors');
            echo "
          <table class=\"table table-striped\" id=\"form_step6_suppliers\">
            <thead>
            <tr class=\"text-uppercase\">
              <th width=\"70%\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose the suppliers associated with this product", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=30%\">";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default supplier", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "suppliers", array()));
            foreach ($context['_seq'] as $context["key"] => $context["supplier"]) {
                // line 59
                echo "              <tr>
                <td>";
                // line 60
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["supplier"], 'widget');
                echo "</td>
                <td>";
                // line 61
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "default_supplier", array()), $context["key"], array(), "array"), 'widget');
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['supplier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
";
        }
        
        $__internal_b446c287e3eff6fd8ac590b44c5020f99939e8dd870b1111463277139c5e6368->leave($__internal_b446c287e3eff6fd8ac590b44c5020f99939e8dd870b1111463277139c5e6368_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 64,  93 => 61,  89 => 60,  86 => 59,  82 => 58,  75 => 54,  71 => 53,  64 => 49,  52 => 40,  44 => 35,  40 => 34,  36 => 33,  27 => 27,  24 => 26,  22 => 25,);
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
{% if form.suppliers|length > 0 %}
  <div id=\"custom_fields\">
    <h2>{{ form.suppliers.vars.label }}</h2>
    <div class=\"row m-b-1\">
      <div class=\"col-md-12\">
        <div class=\"alert alert-info alert-drop\" role=\"alert\">
          <i class=\"material-icons\">help</i>
          <p class=\"alert-text\">
            {{ 'This interface allows you to specify the suppliers of the current product and its combinations, if any.'|trans({}, 'Admin.Catalog.Help')|raw }}<br>
            {{ 'You can specify supplier references according to previously associated suppliers.'|trans({}, 'Admin.Catalog.Help')|raw }}
            <strong>{{ 'Read more'|trans({}, 'Admin.Actions')|raw }}</strong>
          </p>
        </div>
        <div class=\"alert alert-info alert-down\" role=\"alert\">
          <p class=\"alert-down-text\">
            {{ 'When using the advanced stock management tool (see Shop Parameters > Products settings), the values you define (price, references) will be used in supply orders.'|trans({}, 'Admin.Catalog.Help')|raw }}
          </p>
        </div>
      </div>
    </div>

    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div>
          {{ form_errors(form.suppliers) }}
          <table class=\"table table-striped\" id=\"form_step6_suppliers\">
            <thead>
            <tr class=\"text-uppercase\">
              <th width=\"70%\">{{ 'Choose the suppliers associated with this product'|trans({}, 'Admin.Catalog.Feature') }}</th>
              <th width=30%\">{{ 'Default supplier'|trans({}, 'Admin.Catalog.Feature') }}</th>
            </tr>
            </thead>
            <tbody>
            {% for key, supplier in form.suppliers %}
              <tr>
                <td>{{ form_widget(supplier) }}</td>
                <td>{{ form_widget(form.default_supplier[key]) }}</td>
              </tr>
            {% endfor %}
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
{% endif %}
", "PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/form-supplier-choice.html.twig");
    }
}
