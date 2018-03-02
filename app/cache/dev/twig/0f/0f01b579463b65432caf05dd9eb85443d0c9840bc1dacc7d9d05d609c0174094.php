<?php

/* PrestaShopBundle:Admin/Product/Include:form_manufacturer.html.twig */
class __TwigTemplate_dc76e547f8430fa9a797b83035a46a2e801617c9f41b0c776fa0e65b8564b779 extends Twig_Template
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
        $__internal_69a3fa2aecbd06d26d6666250668c714a8c68065764c001b483ce57233b00b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a3fa2aecbd06d26d6666250668c714a8c68065764c001b483ce57233b00b9f->enter($__internal_69a3fa2aecbd06d26d6666250668c714a8c68065764c001b483ce57233b00b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product/Include:form_manufacturer.html.twig"));

        // line 25
        echo "<div id=\"manufacturer-content\" class=\"";
        echo ((($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()) == "")) ? ("hide") : (""));
        echo "\">
  <h2>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Brand", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
      ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
      <div class=\"col-md-12\">
        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
      </div>
      </fieldset>
    </div>
    <div class=\"col-md-1\">
      <fieldset class=\"form-group\">
        <button type=\"button\" id=\"reset_brand_product\" class=\"btn btn-invisible btn-block delete p-l-0 p-r-0\"><i class=\"material-icons\">delete</i></button>
      </fieldset>
    </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-4\">
    <button type=\"button\" class=\"btn btn-primary-outline sensitive open ";
        // line 45
        echo ((($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()) != "")) ? ("hide") : (""));
        echo "\" id=\"add_brand_button\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a brand", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        
        $__internal_69a3fa2aecbd06d26d6666250668c714a8c68065764c001b483ce57233b00b9f->leave($__internal_69a3fa2aecbd06d26d6666250668c714a8c68065764c001b483ce57233b00b9f_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:form_manufacturer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 46,  55 => 45,  39 => 32,  34 => 30,  27 => 26,  22 => 25,);
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
<div id=\"manufacturer-content\" class=\"{{ form.vars.value == '' ? 'hide':'' }}\">
  <h2>{{ \"Brand\"|trans({}, 'Admin.Catalog.Feature') }}</h2>
  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
      {{ form_widget(form) }}
      <div class=\"col-md-12\">
        {{ form_errors(form) }}
      </div>
      </fieldset>
    </div>
    <div class=\"col-md-1\">
      <fieldset class=\"form-group\">
        <button type=\"button\" id=\"reset_brand_product\" class=\"btn btn-invisible btn-block delete p-l-0 p-r-0\"><i class=\"material-icons\">delete</i></button>
      </fieldset>
    </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-4\">
    <button type=\"button\" class=\"btn btn-primary-outline sensitive open {{ form.vars.value != '' ? 'hide':'' }}\" id=\"add_brand_button\">
      <i class=\"material-icons\">add_circle</i> {{ 'Add a brand'|trans({}, 'Admin.Catalog.Feature') }}
    </button>
  </div>
</div>
", "PrestaShopBundle:Admin/Product/Include:form_manufacturer.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/form_manufacturer.html.twig");
    }
}
