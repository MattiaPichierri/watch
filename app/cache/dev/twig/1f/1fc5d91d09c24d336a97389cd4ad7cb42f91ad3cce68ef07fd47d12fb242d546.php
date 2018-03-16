<?php

/* PrestaShopBundle:Admin\ProductImage:form.html.twig */
class __TwigTemplate_b2112ffdaf06c8986396af4917e16963d766b511ac4bdfa27ee1fc5001dfc755 extends Twig_Template
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
        $__internal_0280d278d6dcaafae98da6195001ab5ad047aa8080f184a85986aa7c73fbe576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0280d278d6dcaafae98da6195001ab5ad047aa8080f184a85986aa7c73fbe576->enter($__internal_0280d278d6dcaafae98da6195001ab5ad047aa8080f184a85986aa7c73fbe576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\ProductImage:form.html.twig"));

        // line 25
        echo "<button type=\"button\" class=\"pull-right close\" onclick=\"formImagesProduct.close()\"><i class=\"material-icons\">close</i></button>

<div class=\"row\">
    <div class=\"col-lg-12 col-xl-7\">
      ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cover", array()), 'widget');
        echo "
    </div>
    <div class=\"col-lg-12 col-xl-4\">
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "base_image_url", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "format", array()), "html", null, true);
        echo "\" class=\"btn btn-invisible btn-sm open-image\" target=\"_blank\">
          <i class=\"material-icons\">zoom_in</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zoom", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </a>
    </div>
</div>

<label class=\"control-label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "legend", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "legend", array()), 'widget');
        echo "
";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "legend", array()), 'errors');
        echo "

<div class=\"actions\">
    <button type=\"button\" class=\"btn btn-sm btn-primary pull-sm-right\" onclick=\"formImagesProduct.send(";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "id", array()), "html", null, true);
        echo ")\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save image settings", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
    <button type=\"button\" class=\"btn btn-sm btn-invisible\" onclick=\"formImagesProduct.delete(";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "id", array()), "html", null, true);
        echo ")\"><i class=\"material-icons\">delete</i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
</div>
";
        
        $__internal_0280d278d6dcaafae98da6195001ab5ad047aa8080f184a85986aa7c73fbe576->leave($__internal_0280d278d6dcaafae98da6195001ab5ad047aa8080f184a85986aa7c73fbe576_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\ProductImage:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 44,  62 => 43,  56 => 40,  52 => 39,  48 => 38,  40 => 33,  34 => 32,  28 => 29,  22 => 25,);
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
<button type=\"button\" class=\"pull-right close\" onclick=\"formImagesProduct.close()\"><i class=\"material-icons\">close</i></button>

<div class=\"row\">
    <div class=\"col-lg-12 col-xl-7\">
      {{ form_widget(form.cover) }}
    </div>
    <div class=\"col-lg-12 col-xl-4\">
        <a href=\"{{ image.base_image_url }}.{{ image.format }}\" class=\"btn btn-invisible btn-sm open-image\" target=\"_blank\">
          <i class=\"material-icons\">zoom_in</i> {{ 'Zoom'|trans({}, 'Admin.Catalog.Feature') }}
        </a>
    </div>
</div>

<label class=\"control-label\">{{ form.legend.vars.label }}</label>
{{ form_widget(form.legend) }}
{{ form_errors(form.legend) }}

<div class=\"actions\">
    <button type=\"button\" class=\"btn btn-sm btn-primary pull-sm-right\" onclick=\"formImagesProduct.send({{ image.id }})\">{{ 'Save image settings'|trans({}, 'Admin.Actions') }}</button>
    <button type=\"button\" class=\"btn btn-sm btn-invisible\" onclick=\"formImagesProduct.delete({{ image.id }})\"><i class=\"material-icons\">delete</i> {{ 'Delete'|trans({}, 'Admin.Actions') }}</button>
</div>
", "PrestaShopBundle:Admin\\ProductImage:form.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/ProductImage/form.html.twig");
    }
}
