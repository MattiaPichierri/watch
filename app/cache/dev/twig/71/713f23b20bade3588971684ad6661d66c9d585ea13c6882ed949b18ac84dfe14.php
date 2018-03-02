<?php

/* PrestaShopBundle:Admin/Product/Include:form_combinations.html.twig */
class __TwigTemplate_535b3a3e5ffd0430656bfe7ca145fc9d545487dbd8672db30cbd4062360a329a extends Twig_Template
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
        $__internal_578aeed7a769e6fed6f3019dd1b7098b141935ffd555466c184615b0faf2ef0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578aeed7a769e6fed6f3019dd1b7098b141935ffd555466c184615b0faf2ef0b->enter($__internal_578aeed7a769e6fed6f3019dd1b7098b141935ffd555466c184615b0faf2ef0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product/Include:form_combinations.html.twig"));

        // line 25
        echo "<div class=\"row\" id=\"combinations\">
  <div class=\"col-md-9\">
    <h2>
      ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage your product combinations", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
      <span
        class=\"help-box\"
        data-toggle=\"popover\"
        data-content=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. To create a combination, you need to create your product attributes first. Go to Catalog > Attributes & Features for this!", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
      ></span>
    </h2>
    <div id=\"attributes-generator\">
      <div class=\"alert alert-info\" role=\"alert\">
        <i class=\"material-icons\">help</i>
        <p class=\"alert-text\">
          ";
        // line 39
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To add combinations, you first need to create proper attributes and values in [1]Attributes & Features[/1]. <br> When done, you may enter the wanted attributes (like \"size\" or \"color\") and their respective values (\"XS\", \"red\", \"all\", etc.) in the field below; or simply select them from the right column. Then click on \"Generate\": it will automatically create all the combinations for you!", array(), "Admin.Catalog.Help"), array("[1]" => (("<a class=\"alert-link\" href=" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminAttributesGroups")) . " target=\"_blank\">"), "[/1]" => "</a>"));
        echo "
        </p>
      </div>
      <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9\">
          <fieldset class=\"form-group\">
            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attributes", array()), 'errors');
        echo "
            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attributes", array()), 'widget');
        echo "
          </fieldset>
        </div>
        <div class=\"col-xl-2 col-lg-3\">
          <button class=\"btn btn-primary-outline\" id=\"create-combinations\">
            Generate
          </button>
        </div>
      </div>
    </div>

    <div id=\"combinations-bulk-form\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <p
            class=\"form-control bulk-action\"
            data-toggle=\"collapse\"
            href=\"#bulk-combinations-container\"
            aria-expanded=\"false\"
            aria-controls=\"bulk-combinations-container\"
          >
            ";
        // line 68
        echo "            <strong>";
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk actions ([1]/[2] combination(s) selected)", array(), "Admin.Catalog.Feature"), array("[1]" => "<span class=\"js-bulk-combinations\">0</span>", "[2]" => (("<span id=\"js-bulk-combinations-total\">" . ($context["combinations_count"] ?? $this->getContext($context, "combinations_count"))) . "</span>")));
        echo "</strong>
            <i class=\"material-icons pull-right\">keyboard_arrow_down</i>
          </p>
        </div>
        <div class=\"col-md-12 collapse js-collapse\" id=\"bulk-combinations-container\">
          ";
        // line 73
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product:form_combinations_bulk.html.twig", array("form" => ($context["form_combination_bulk"] ?? $this->getContext($context, "form_combination_bulk"))));
        echo "
        </div>
      </div>
    </div>

    <div class=\"combinations-list\">
      <table class=\"table table-striped table-no-bordered\">
        <thead id=\"combinations_thead\" ";
        // line 80
        if ( !($context["has_combinations"] ?? $this->getContext($context, "has_combinations"))) {
            echo "style=\"display: none;\"";
        }
        echo ">
          <tr class=\"uppercase\">
            <th>
              <span>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
              <input type=\"checkbox\" id=\"toggle-all-combinations\" >
            </th>
            <th></th>
            <th>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
            <th>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact on price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
            <th>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
            ";
        // line 90
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 91
            echo "                <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
            ";
        }
        // line 93
        echo "            <th colspan=\"3\" class=\"text-xs-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default combination", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
          </tr>
        </thead>
        <tbody class=\"js-combinations-list panel-group accordion\" id=\"accordion_combinations\" data-action-delete-all=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_all_attributes", array("idProduct" => 1));
        echo "\" data-weight-unit=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_WEIGHT_UNIT"), "html", null, true);
        echo "\" data-action-refresh-images=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_get_form_images_combination", array("idProduct" => 1));
        echo "\"  data-id-product= ";
        echo twig_escape_filter($this->env, ($context["id_product"] ?? $this->getContext($context, "id_product")), "html", null, true);
        echo " data-ids-product-attribute=\"";
        echo twig_escape_filter($this->env, ($context["ids_product_attribute"] ?? $this->getContext($context, "ids_product_attribute")), "html", null, true);
        echo "\" data-combinations-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_combination_generate_form", array("combinationIds" => 1));
        echo "\">
          ";
        // line 97
        if (($context["has_combinations"] ?? $this->getContext($context, "has_combinations"))) {
            // line 98
            echo "            <tr class=\"combination loading timeline-wrapper\" id=\"loading-attribute\">
              <td class=\"timeline-item\" width=\"1%\">
              </td>
              <td class=\"timeline-item img\">
                <div class=\"animated-background\"></div>
              </td>
              <td>
                <div class=\"animated-background\"></div>
              </td>
              <td class=\"attribute-price\">
                <div class=\"animated-background\"></div>
              </td>
              <td class=\"attribute-finalprice\">
                <div class=\"animated-background\"></div>
              </td>
              ";
            // line 113
            if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
                // line 114
                echo "                <td class=\"attribute-quantity\">
                  <div class=\"animated-background\"></div>
                </td>
              ";
            }
            // line 118
            echo "              <td colspan=\"6\"></td>
            </tr>
          ";
        }
        // line 121
        echo "        </tbody>
      </table>
    </div>
  </div>

  <div id=\"attributes-list\" class=\"col-md-3\">
    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? $this->getContext($context, "attribute_groups")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
            // line 128
            echo "      <div class=\"attribute-group\">
        <a
          class=\"attribute-group-name ";
            // line 130
            if (($this->getAttribute($context["loop"], "index", array()) <= 3)) {
                echo " collapsed ";
            }
            echo "\"
          data-toggle=\"collapse\"
          href=\"#attribute-group-";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["attribute_group"], "id", array()), "html", null, true);
            echo "\"
          aria-expanded=\"false\"
        >
          ";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["attribute_group"], "name", array()), "html", null, true);
            echo "
        </a>
        <div class=\"collapse ";
            // line 137
            if (($this->getAttribute($context["loop"], "index", array()) <= 3)) {
                echo " in ";
            }
            echo " attributes \" id=\"attribute-group-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["attribute_group"], "id", array()), "html", null, true);
            echo "\">
          <div class=\"attributes-overflow ";
            // line 138
            if ((twig_length_filter($this->env, $this->getAttribute($context["attribute_group"], "attributes", array())) > 7)) {
                echo " two-columns ";
            }
            echo "\">
            ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attributes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 140
                echo "              <div class=\"attribute\">
                <input
                  class=\"js-attribute-checkbox\"
                  id=\"attribute-";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "id", array()), "html", null, true);
                echo "\"
                  data-label=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute_group"], "name", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", array()), "html", null, true);
                echo "\"
                  data-value=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "id", array()), "html", null, true);
                echo "\"
                  data-group-id=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute_group"], "id", array()), "html", null, true);
                echo "\"
                  type=\"checkbox\"
                >
                <label class=\"attribute-label\" for=\"attribute-";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "id", array()), "html", null, true);
                echo "\">
                  <span
                    class=\"pretty-checkbox ";
                // line 151
                if ((twig_test_empty($this->getAttribute($context["attribute"], "color", array())) && twig_test_empty($this->getAttribute($context["attribute"], "texture", array())))) {
                    echo " not-color ";
                }
                echo "\"
                    ";
                // line 152
                if ( !twig_test_empty($this->getAttribute($context["attribute"], "color", array()))) {
                    echo " style=\"background-color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "color", array()), "html", null, true);
                    echo "\" ";
                }
                // line 153
                echo "                    ";
                if ( !twig_test_empty($this->getAttribute($context["attribute"], "texture", array()))) {
                    echo " style=\"content: url(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "texture", array()), "html", null, true);
                    echo ")\" ";
                }
                // line 154
                echo "                  >
                  </span>
                  ";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", array()), "html", null, true);
                echo "
                </label>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "          </div>
        </div>
      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "  </div>
</div>

<div class=\"form-group\">
  <div class=\"row\">

    <div class=\"col-md-12\">
      <h2>";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Availability preferences", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    </div>
    ";
        // line 173
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 174
            echo "      <div class=\"col-md-12\">
        <label class=\"form-control-label\">";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Behavior when out of stock", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</label>
        ";
            // line 176
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "out_of_stock", array()), 'errors');
            echo "
        ";
            // line 177
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "out_of_stock", array()), 'widget');
            echo "
      </div>

      <div class=\"col-md-4\">
        <label class=\"form-control-label\">";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_now", array()), "vars", array()), "label", array()), "html", null, true);
            echo "</label>
        ";
            // line 182
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_now", array()), 'errors');
            echo "
        ";
            // line 183
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_now", array()), 'widget');
            echo "
      </div>

      <div class=\"col-md-4 \">
        <label class=\"form-control-label\">";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_later", array()), "vars", array()), "label", array()), "html", null, true);
            echo "</label>
        ";
            // line 188
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_later", array()), 'errors');
            echo "
        ";
            // line 189
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_later", array()), 'widget');
            echo "
      </div>
    ";
        } else {
            // line 192
            echo "      <div class=\"col-md-12\">
        <h3>";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock management is disabled", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h3>
      </div>
    ";
        }
        // line 196
        echo "
    ";
        // line 197
        if ( !($context["has_combinations"] ?? $this->getContext($context, "has_combinations"))) {
            // line 198
            echo "    <div class=\"col-md-4 \">
      <label class=\"form-control-label\">";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date", array()), "vars", array()), "label", array()), "html", null, true);
            echo "</label>
      ";
            // line 200
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date", array()), 'errors');
            echo "
      ";
            // line 201
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date", array()), 'widget');
            echo "
    </div>
    ";
        }
        // line 204
        echo "
  </div>
</div>
";
        
        $__internal_578aeed7a769e6fed6f3019dd1b7098b141935ffd555466c184615b0faf2ef0b->leave($__internal_578aeed7a769e6fed6f3019dd1b7098b141935ffd555466c184615b0faf2ef0b_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:form_combinations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 204,  421 => 201,  417 => 200,  413 => 199,  410 => 198,  408 => 197,  405 => 196,  399 => 193,  396 => 192,  390 => 189,  386 => 188,  382 => 187,  375 => 183,  371 => 182,  367 => 181,  360 => 177,  356 => 176,  352 => 175,  349 => 174,  347 => 173,  342 => 171,  333 => 164,  316 => 160,  306 => 156,  302 => 154,  295 => 153,  289 => 152,  283 => 151,  278 => 149,  272 => 146,  268 => 145,  262 => 144,  258 => 143,  253 => 140,  249 => 139,  243 => 138,  235 => 137,  230 => 135,  224 => 132,  217 => 130,  213 => 128,  196 => 127,  188 => 121,  183 => 118,  177 => 114,  175 => 113,  158 => 98,  156 => 97,  142 => 96,  135 => 93,  129 => 91,  127 => 90,  123 => 89,  119 => 88,  115 => 87,  108 => 83,  100 => 80,  90 => 73,  81 => 68,  57 => 46,  53 => 45,  44 => 39,  34 => 32,  27 => 28,  22 => 25,);
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
<div class=\"row\" id=\"combinations\">
  <div class=\"col-md-9\">
    <h2>
      {{ 'Manage your product combinations'|trans({}, 'Admin.Catalog.Feature') }}
      <span
        class=\"help-box\"
        data-toggle=\"popover\"
        data-content=\"{{ \"Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. To create a combination, you need to create your product attributes first. Go to Catalog > Attributes & Features for this!\"|trans({}, 'Admin.Catalog.Help') }}\"
      ></span>
    </h2>
    <div id=\"attributes-generator\">
      <div class=\"alert alert-info\" role=\"alert\">
        <i class=\"material-icons\">help</i>
        <p class=\"alert-text\">
          {{ 'To add combinations, you first need to create proper attributes and values in [1]Attributes & Features[/1]. <br> When done, you may enter the wanted attributes (like \"size\" or \"color\") and their respective values (\"XS\", \"red\", \"all\", etc.) in the field below; or simply select them from the right column. Then click on \"Generate\": it will automatically create all the combinations for you!'|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a class=\"alert-link\" href=' ~ getAdminLink(\"AdminAttributesGroups\") ~ ' target=\"_blank\">', '[/1]': '</a>'})|raw }}
        </p>
      </div>
      <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9\">
          <fieldset class=\"form-group\">
            {{ form_errors(form.attributes) }}
            {{ form_widget(form.attributes) }}
          </fieldset>
        </div>
        <div class=\"col-xl-2 col-lg-3\">
          <button class=\"btn btn-primary-outline\" id=\"create-combinations\">
            Generate
          </button>
        </div>
      </div>
    </div>

    <div id=\"combinations-bulk-form\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <p
            class=\"form-control bulk-action\"
            data-toggle=\"collapse\"
            href=\"#bulk-combinations-container\"
            aria-expanded=\"false\"
            aria-controls=\"bulk-combinations-container\"
          >
            {# First tag [1] is number of combinations selected. Second tag [2] is the total of combinations available. #}
            <strong>{{ 'Bulk actions ([1]/[2] combination(s) selected)'|trans({}, 'Admin.Catalog.Feature')|replace({ '[1]': '<span class=\"js-bulk-combinations\">0</span>', '[2]': '<span id=\"js-bulk-combinations-total\">' ~ combinations_count ~ '</span>' })|raw }}</strong>
            <i class=\"material-icons pull-right\">keyboard_arrow_down</i>
          </p>
        </div>
        <div class=\"col-md-12 collapse js-collapse\" id=\"bulk-combinations-container\">
          {{ include('PrestaShopBundle:Admin/Product:form_combinations_bulk.html.twig', { 'form': form_combination_bulk }) }}
        </div>
      </div>
    </div>

    <div class=\"combinations-list\">
      <table class=\"table table-striped table-no-bordered\">
        <thead id=\"combinations_thead\" {% if not has_combinations %}style=\"display: none;\"{% endif %}>
          <tr class=\"uppercase\">
            <th>
              <span>{{ 'Select'|trans([], 'Admin.Actions') }}</span>
              <input type=\"checkbox\" id=\"toggle-all-combinations\" >
            </th>
            <th></th>
            <th>{{ 'Combinations'|trans({}, 'Admin.Catalog.Feature') }}</th>
            <th>{{ 'Impact on price'|trans({}, 'Admin.Catalog.Feature') }}</th>
            <th>{{ 'Final price'|trans({}, 'Admin.Catalog.Feature') }}</th>
            {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                <th>{{ 'Quantity'|trans({}, 'Admin.Catalog.Feature') }}</th>
            {% endif %}
            <th colspan=\"3\" class=\"text-xs-right\">{{ 'Default combination'|trans({}, 'Admin.Catalog.Feature') }}</th>
          </tr>
        </thead>
        <tbody class=\"js-combinations-list panel-group accordion\" id=\"accordion_combinations\" data-action-delete-all=\"{{ path('admin_delete_all_attributes', { 'idProduct': 1 }) }}\" data-weight-unit=\"{{ 'PS_WEIGHT_UNIT'|configuration }}\" data-action-refresh-images=\"{{ path('admin_get_form_images_combination', { 'idProduct': 1 }) }}\"  data-id-product= {{ id_product }} data-ids-product-attribute=\"{{ ids_product_attribute }}\" data-combinations-url=\"{{ path('admin_combination_generate_form', { 'combinationIds': 1 }) }}\">
          {% if has_combinations %}
            <tr class=\"combination loading timeline-wrapper\" id=\"loading-attribute\">
              <td class=\"timeline-item\" width=\"1%\">
              </td>
              <td class=\"timeline-item img\">
                <div class=\"animated-background\"></div>
              </td>
              <td>
                <div class=\"animated-background\"></div>
              </td>
              <td class=\"attribute-price\">
                <div class=\"animated-background\"></div>
              </td>
              <td class=\"attribute-finalprice\">
                <div class=\"animated-background\"></div>
              </td>
              {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                <td class=\"attribute-quantity\">
                  <div class=\"animated-background\"></div>
                </td>
              {% endif %}
              <td colspan=\"6\"></td>
            </tr>
          {%  endif %}
        </tbody>
      </table>
    </div>
  </div>

  <div id=\"attributes-list\" class=\"col-md-3\">
    {% for attribute_group in attribute_groups %}
      <div class=\"attribute-group\">
        <a
          class=\"attribute-group-name {% if loop.index <= 3 %} collapsed {% endif %}\"
          data-toggle=\"collapse\"
          href=\"#attribute-group-{{ attribute_group.id }}\"
          aria-expanded=\"false\"
        >
          {{ attribute_group.name }}
        </a>
        <div class=\"collapse {% if loop.index <= 3 %} in {% endif %} attributes \" id=\"attribute-group-{{ attribute_group.id }}\">
          <div class=\"attributes-overflow {% if attribute_group.attributes|length > 7 %} two-columns {% endif %}\">
            {% for attribute in attribute_group.attributes %}
              <div class=\"attribute\">
                <input
                  class=\"js-attribute-checkbox\"
                  id=\"attribute-{{ attribute.id }}\"
                  data-label=\"{{ attribute_group.name }} : {{ attribute.name }}\"
                  data-value=\"{{ attribute.id }}\"
                  data-group-id=\"{{ attribute_group.id }}\"
                  type=\"checkbox\"
                >
                <label class=\"attribute-label\" for=\"attribute-{{ attribute.id }}\">
                  <span
                    class=\"pretty-checkbox {% if attribute.color is empty and attribute.texture is empty %} not-color {% endif %}\"
                    {% if attribute.color is not empty %} style=\"background-color: {{ attribute.color }}\" {% endif %}
                    {% if attribute.texture is not empty %} style=\"content: url({{ attribute.texture }})\" {% endif %}
                  >
                  </span>
                  {{ attribute.name }}
                </label>
              </div>
            {% endfor %}
          </div>
        </div>
      </div>
    {% endfor %}
  </div>
</div>

<div class=\"form-group\">
  <div class=\"row\">

    <div class=\"col-md-12\">
      <h2>{{ 'Availability preferences'|trans({}, 'Admin.Catalog.Feature') }}</h2>
    </div>
    {% if 'PS_STOCK_MANAGEMENT'|configuration %}
      <div class=\"col-md-12\">
        <label class=\"form-control-label\">{{ 'Behavior when out of stock'|trans({}, 'Admin.Catalog.Feature') }}</label>
        {{ form_errors(form.out_of_stock) }}
        {{ form_widget(form.out_of_stock) }}
      </div>

      <div class=\"col-md-4\">
        <label class=\"form-control-label\">{{ form.available_now.vars.label }}</label>
        {{ form_errors(form.available_now) }}
        {{ form_widget(form.available_now) }}
      </div>

      <div class=\"col-md-4 \">
        <label class=\"form-control-label\">{{ form.available_later.vars.label }}</label>
        {{ form_errors(form.available_later) }}
        {{ form_widget(form.available_later) }}
      </div>
    {% else %}
      <div class=\"col-md-12\">
        <h3>{{  'Stock management is disabled'|trans({}, 'Admin.Catalog.Feature') }}</h3>
      </div>
    {% endif %}

    {% if not has_combinations %}
    <div class=\"col-md-4 \">
      <label class=\"form-control-label\">{{ form.available_date.vars.label }}</label>
      {{ form_errors(form.available_date) }}
      {{ form_widget(form.available_date) }}
    </div>
    {% endif %}

  </div>
</div>
", "PrestaShopBundle:Admin/Product/Include:form_combinations.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/form_combinations.html.twig");
    }
}
