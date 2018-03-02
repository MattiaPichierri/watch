<?php

/* PrestaShopBundle:Admin/Common/_partials:_form_field.html.twig */
class __TwigTemplate_822087504f6f2a7850f957b1e449a4c9b15d4de0dc4bc6cbb4f34a63c1cd52b6 extends Twig_Template
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
        $__internal_217e0f6c622f8b1d5a0fb819e05c14444ac33e36025cd173566be6fb8f1c12d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217e0f6c622f8b1d5a0fb819e05c14444ac33e36025cd173566be6fb8f1c12d1->enter($__internal_217e0f6c622f8b1d5a0fb819e05c14444ac33e36025cd173566be6fb8f1c12d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Common/_partials:_form_field.html.twig"));

        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("id" => ($context["formId"] ?? $this->getContext($context, "formId"))));
        echo "
";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
";
        
        $__internal_217e0f6c622f8b1d5a0fb819e05c14444ac33e36025cd173566be6fb8f1c12d1->leave($__internal_217e0f6c622f8b1d5a0fb819e05c14444ac33e36025cd173566be6fb8f1c12d1_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Common/_partials:_form_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 26,  22 => 25,);
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
{{ form_widget(form, {'id': formId }) }}
{{ form_errors(form) }}
", "PrestaShopBundle:Admin/Common/_partials:_form_field.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Common/_partials/_form_field.html.twig");
    }
}
