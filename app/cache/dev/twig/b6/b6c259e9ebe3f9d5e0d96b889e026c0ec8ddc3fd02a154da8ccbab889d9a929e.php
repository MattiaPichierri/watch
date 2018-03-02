<?php

/* PrestaShopBundle:Admin/Product/Include:form_feature.html.twig */
class __TwigTemplate_e1aaacd447f21995e74ba969e51944e6c8bf1b99bcc09b01c9145bf516638697 extends Twig_Template
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
        $__internal_c091c90bfdaa22de708f978273fa51bc561d5628f5a9eb47a13d8bfd1641615d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c091c90bfdaa22de708f978273fa51bc561d5628f5a9eb47a13d8bfd1641615d->enter($__internal_c091c90bfdaa22de708f978273fa51bc561d5628f5a9eb47a13d8bfd1641615d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product/Include:form_feature.html.twig"));

        // line 25
        echo "<div class=\"row\">
    <div class=\"col-lg-12 col-xl-4\">
        <fieldset class=\"form-group\">
            <label class=\"form-control-label\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "feature", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "feature", array()), 'widget');
        echo "
        </fieldset>
    </div>
    <div class=\"col-lg-12 col-xl-4\">
        <fieldset class=\"form-group\">
            <label class=\"form-control-label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "value", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
            ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "value", array()), 'widget');
        echo "
        </fieldset>
    </div>
    <div class=\"col-lg-11 col-xl-3\">
        <fieldset class=\"form-group\">
            <label class=\"form-control-label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "custom_value", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
            ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "custom_value", array()), 'widget');
        echo "
        </fieldset>
    </div>
    <div class=\"col-lg-1 col-xl-1\">
        <fieldset class=\"form-group\">
            <label class=\"form-control-label\">&nbsp;</label>
            <button type=\"button\" class=\"btn btn-invisible btn-block delete p-l-0 p-r-0\"><i class=\"material-icons\">delete</i></button>
        </fieldset>
    </div>
</div>
<hr class=\"m-b-2 hidden-xl-up\" />
";
        
        $__internal_c091c90bfdaa22de708f978273fa51bc561d5628f5a9eb47a13d8bfd1641615d->leave($__internal_c091c90bfdaa22de708f978273fa51bc561d5628f5a9eb47a13d8bfd1641615d_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:form_feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 41,  51 => 40,  43 => 35,  39 => 34,  31 => 29,  27 => 28,  22 => 25,);
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
    <div class=\"col-lg-12 col-xl-4\">
        <fieldset class=\"form-group\">
            <label class=\"form-control-label\">{{ form.feature.vars.label }}</label>
            {{ form_widget(form.feature) }}
        </fieldset>
    </div>
    <div class=\"col-lg-12 col-xl-4\">
        <fieldset class=\"form-group\">
            <label class=\"form-control-label\">{{ form.value.vars.label }}</label>
            {{ form_widget(form.value) }}
        </fieldset>
    </div>
    <div class=\"col-lg-11 col-xl-3\">
        <fieldset class=\"form-group\">
            <label class=\"form-control-label\">{{ form.custom_value.vars.label }}</label>
            {{ form_widget(form.custom_value) }}
        </fieldset>
    </div>
    <div class=\"col-lg-1 col-xl-1\">
        <fieldset class=\"form-group\">
            <label class=\"form-control-label\">&nbsp;</label>
            <button type=\"button\" class=\"btn btn-invisible btn-block delete p-l-0 p-r-0\"><i class=\"material-icons\">delete</i></button>
        </fieldset>
    </div>
</div>
<hr class=\"m-b-2 hidden-xl-up\" />
", "PrestaShopBundle:Admin/Product/Include:form_feature.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/form_feature.html.twig");
    }
}
