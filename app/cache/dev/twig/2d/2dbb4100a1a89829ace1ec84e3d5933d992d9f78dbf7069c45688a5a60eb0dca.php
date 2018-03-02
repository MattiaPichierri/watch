<?php

/* PrestaShopBundle:Admin/Product/Include:form_seo.html.twig */
class __TwigTemplate_2c2b3b2b5addb3d4df29e71682c60949e7fa006e2752cdae57a4100402f34680 extends Twig_Template
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
        $__internal_93b7e2c995b630bc5a97af4e865eec659a7ea1be2e9fc23e71fdea137e788052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b7e2c995b630bc5a97af4e865eec659a7ea1be2e9fc23e71fdea137e788052->enter($__internal_93b7e2c995b630bc5a97af4e865eec659a7ea1be2e9fc23e71fdea137e788052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product/Include:form_seo.html.twig"));

        // line 25
        echo "<div class=\"col-md-12\">

  <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search Engine Optimization", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
  <p class=\"subtitle\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Improve your ranking and how your product page will appear in search engines results.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">
        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "meta_title", array()), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "meta_title", array()), 'errors');
        echo "
        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "meta_title", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">
        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "meta_description", array()), 'label');
        echo "
        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "meta_description", array()), 'errors');
        echo "
        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "meta_description", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <fieldset class=\"form-group\">
    <label class=\"form-control-label\">
      ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "link_rewrite", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the human-readable URL, as generated from the product's name. You can change it if you want.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
    </label>
    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "link_rewrite", array()), 'errors');
        echo "
    <div class=\"row\">
      <div class=\"col-md-7\">
        ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "link_rewrite", array()), 'widget');
        echo "
      </div>
      <div class=\"col-md-2\">
        <button type=\"button\" class=\"btn-action btn btn-action btn-block text-uppercase\" id=\"seo-url-regenerate\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset URL", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </fieldset>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <i class=\"material-icons\">help</i>
        <p class=\"alert-text\">
          ";
        // line 71
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_REWRITING_SETTINGS") == 0)) {
            // line 72
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URLs are currently disabled.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
            ";
            // line 73
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To enable it, go to [1]SEO and URLs[/1]", array(), "Admin.Catalog.Notification"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminMeta")) . "#meta_fieldset_general\">"), "[/1]" => "</a>"));
            echo "
          ";
        } else {
            // line 75
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URLs are currently enabled.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
            ";
            // line 76
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To disable it, go to [1]SEO and URLs[/1]", array(), "Admin.Catalog.Notification"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminMeta")) . "#meta_fieldset_general\">"), "[/1]" => "</a>"));
            echo "
          ";
        }
        // line 78
        echo "        </p>
        <p class=\"alert-text\">
          ";
        // line 80
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_FORCE_FRIENDLY_PRODUCT") == 1)) {
            // line 81
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The \"Force update of friendly URL\" option is currently enabled.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
            ";
            // line 83
            echo "            ";
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To disable it, go to [1]Product Settings[/1]", array(), "Admin.Catalog.Notification"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPPreferences")) . "#configuration_fieldset_products\">"), "[/1]" => "</a>"));
            echo "
          ";
        }
        // line 85
        echo "        </p>
      </div>
    </div>
  </div>

  <h2>
    ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Redirection page", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
    <span class=\"help-box\" data-toggle=\"popover\"
      data-content=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When your product is disabled, choose to which page you’d like to redirect the customers visiting its page by typing the product or category name.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
  </h2>

  <div class=\"row\">

    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "redirect_type", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "redirect_type", array()), 'errors');
        echo "
        ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "redirect_type", array()), 'widget');
        echo "
      </fieldset>
    </div>

    <div class=\"col-md-5\" id=\"id-product-redirected\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_type_redirected", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_type_redirected", array()), 'errors');
        echo "
        ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_type_redirected", array()), 'widget');
        echo "
      </fieldset>

    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <i class=\"material-icons\">help</i>
        <p class=\"alert-text\">
          ";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No redirection (404) = Do not redirect anywhere and display a 404 \"Not Found\" page.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "<br>
          ";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permanent redirection (301) = Permanently display another product or category instead.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "<br>
          ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Temporary redirection (302) = Temporarily display another product or category instead.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
        </p>
      </div>
    </div>
  </div>

  ";
        // line 128
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsSeoStepBottom", array("id_product" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
        echo "

</div>
";
        
        $__internal_93b7e2c995b630bc5a97af4e865eec659a7ea1be2e9fc23e71fdea137e788052->leave($__internal_93b7e2c995b630bc5a97af4e865eec659a7ea1be2e9fc23e71fdea137e788052_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:form_seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 128,  217 => 122,  213 => 121,  209 => 120,  196 => 110,  192 => 109,  188 => 108,  179 => 102,  175 => 101,  171 => 100,  161 => 93,  156 => 91,  148 => 85,  142 => 83,  137 => 81,  135 => 80,  131 => 78,  126 => 76,  121 => 75,  116 => 73,  111 => 72,  109 => 71,  96 => 61,  90 => 58,  84 => 55,  79 => 53,  74 => 51,  65 => 45,  61 => 44,  57 => 43,  46 => 35,  42 => 34,  38 => 33,  30 => 28,  26 => 27,  22 => 25,);
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
<div class=\"col-md-12\">

  <h2>{{ 'Search Engine Optimization'|trans({}, 'Admin.Catalog.Feature') }}</h2>
  <p class=\"subtitle\">{{ 'Improve your ranking and how your product page will appear in search engines results.'|trans({}, 'Admin.Catalog.Feature') }}</p>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">
        {{ form_label(form.meta_title) }}
        {{ form_errors(form.meta_title) }}
        {{ form_widget(form.meta_title) }}
      </fieldset>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">
        {{ form_label(form.meta_description) }}
        {{ form_errors(form.meta_description) }}
        {{ form_widget(form.meta_description) }}
      </fieldset>
    </div>
  </div>
  <fieldset class=\"form-group\">
    <label class=\"form-control-label\">
      {{ form.link_rewrite.vars.label }}
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"{{ \"This is the human-readable URL, as generated from the product's name. You can change it if you want.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
    </label>
    {{ form_errors(form.link_rewrite) }}
    <div class=\"row\">
      <div class=\"col-md-7\">
        {{ form_widget(form.link_rewrite) }}
      </div>
      <div class=\"col-md-2\">
        <button type=\"button\" class=\"btn-action btn btn-action btn-block text-uppercase\" id=\"seo-url-regenerate\">{{ 'Reset URL'|trans({}, 'Admin.Catalog.Feature') }}</button>
      </div>
    </div>
  </fieldset>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <i class=\"material-icons\">help</i>
        <p class=\"alert-text\">
          {% if 'PS_REWRITING_SETTINGS'|configuration == 0 %}
            <strong>{{ 'Friendly URLs are currently disabled.'|trans({}, 'Admin.Catalog.Notification') }}</strong>
            {{ 'To enable it, go to [1]SEO and URLs[/1]'|trans({}, 'Admin.Catalog.Notification')|replace({'[1]': '<a href=\"' ~ getAdminLink(\"AdminMeta\") ~ '#meta_fieldset_general\">', '[/1]': '</a>'})|raw }}
          {% else %}
            <strong>{{ 'Friendly URLs are currently enabled.'|trans({}, 'Admin.Catalog.Notification') }}</strong>
            {{ 'To disable it, go to [1]SEO and URLs[/1]'|trans({}, 'Admin.Catalog.Notification')|replace({'[1]': '<a href=\"' ~ getAdminLink(\"AdminMeta\") ~ '#meta_fieldset_general\">', '[/1]': '</a>'})|raw }}
          {% endif %}
        </p>
        <p class=\"alert-text\">
          {% if 'PS_FORCE_FRIENDLY_PRODUCT'|configuration == 1 %}
            <strong>{{ 'The \"Force update of friendly URL\" option is currently enabled.'|trans({}, 'Admin.Catalog.Notification') }}</strong>
            {# \"It\" refers to the option \"Force update of friendly URL\" #}
            {{ 'To disable it, go to [1]Product Settings[/1]'|trans({}, 'Admin.Catalog.Notification')|replace({'[1]': '<a href=\"' ~ getAdminLink(\"AdminPPreferences\") ~ '#configuration_fieldset_products\">', '[/1]': '</a>'})|raw }}
          {% endif %}
        </p>
      </div>
    </div>
  </div>

  <h2>
    {{ 'Redirection page'|trans({}, 'Admin.Catalog.Feature') }}
    <span class=\"help-box\" data-toggle=\"popover\"
      data-content=\"{{ \"When your product is disabled, choose to which page you’d like to redirect the customers visiting its page by typing the product or category name.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
  </h2>

  <div class=\"row\">

    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">{{ form.redirect_type.vars.label }}</label>
        {{ form_errors(form.redirect_type) }}
        {{ form_widget(form.redirect_type) }}
      </fieldset>
    </div>

    <div class=\"col-md-5\" id=\"id-product-redirected\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">{{ form.id_type_redirected.vars.label }}</label>
        {{ form_errors(form.id_type_redirected) }}
        {{ form_widget(form.id_type_redirected) }}
      </fieldset>

    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <i class=\"material-icons\">help</i>
        <p class=\"alert-text\">
          {{ 'No redirection (404) = Do not redirect anywhere and display a 404 \"Not Found\" page.'|trans({}, 'Admin.Catalog.Help') }}<br>
          {{ 'Permanent redirection (301) = Permanently display another product or category instead.'|trans({}, 'Admin.Catalog.Help') }}<br>
          {{ 'Temporary redirection (302) = Temporarily display another product or category instead.'|trans({}, 'Admin.Catalog.Help') }}
        </p>
      </div>
    </div>
  </div>

  {{ renderhook('displayAdminProductsSeoStepBottom', { 'id_product': id_product }) }}

</div>
", "PrestaShopBundle:Admin/Product/Include:form_seo.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/form_seo.html.twig");
    }
}
