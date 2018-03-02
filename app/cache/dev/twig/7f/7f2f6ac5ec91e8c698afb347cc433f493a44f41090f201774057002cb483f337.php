<?php

/* PrestaShopBundle:Admin\Product:list.html.twig */
class __TwigTemplate_b009b4e221adb80d6bd1b58cb53ad91b284bd5f26fc0306e5e88d618ce9450f9 extends Twig_Template
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
        $__internal_c0bacf5e56a07ceb393927548951173f6d0adade6e5519e82d39f245a97dd156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bacf5e56a07ceb393927548951173f6d0adade6e5519e82d39f245a97dd156->enter($__internal_c0bacf5e56a07ceb393927548951173f6d0adade6e5519e82d39f245a97dd156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:list.html.twig"));

        // line 25
        echo "<tbody
  ";
        // line 26
        if ((($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop")) && ($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")))) {
            echo "class=\"sortable\"";
        }
        // line 27
        echo "  last_sql=\"";
        echo twig_escape_filter($this->env, ($context["last_sql_query"] ?? $this->getContext($context, "last_sql_query")), "html_attr");
        echo "\"
>
  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 30
            echo "        <tr data-uniturl=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "unit_action_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "unit_action_url", array()), "#")) : ("#")), "html", null, true);
            echo "\" data-product-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id_product", array()), "html", null, true);
            echo "\">
            <td class=\"checkbox-column\">
              <div class=\"checkbox\">
                <label>
                  <input type=\"checkbox\" name=\"bulk_action_selected_products[]\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id_product", array()), "html", null, true);
            echo "\" />
                  ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id_product", array()), "html", null, true);
            echo "
                </label>
              </div>
            </td>
            <td>
              <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "url", array()), "")) : ("")), "html", null, true);
            echo "#tab-step1\">";
            echo $this->getAttribute($context["product"], "image", array());
            echo "</a>
            </td>
            <td>
              <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "url", array()), "")) : ("")), "html", null, true);
            echo "#tab-step1\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))), "html", null, true);
            echo "</a>
            </td>
            <td>
              ";
            // line 46
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "reference", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "reference", array()), "")) : ("")), "html", null, true);
            echo "
            </td>
            <td>
              ";
            // line 49
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "name_category", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "name_category", array()), "")) : ("")), "html", null, true);
            echo "
            </td>
            <td>
              <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "url", array()), "")) : ("")), "html", null, true);
            echo "#tab-step2\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "price", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))), "html", null, true);
            echo "</a>
            </td>

            ";
            // line 55
            if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
                // line 56
                echo "            <td class=\"product-sav-quantity\" data-product-quantity-value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "sav_quantity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "sav_quantity", array()), "")) : ("")), "html", null, true);
                echo "\">
              <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "url", array()), "")) : ("")), "html", null, true);
                echo "#tab-step3\">
                ";
                // line 58
                if (($this->getAttribute($context["product"], "sav_quantity", array(), "any", true, true) && ($this->getAttribute($context["product"], "sav_quantity", array()) > 0))) {
                    // line 59
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "sav_quantity", array()), "html", null, true);
                    echo "
                ";
                } else {
                    // line 61
                    echo "                  <span class=\"badge badge-danger\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "sav_quantity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "sav_quantity", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))), "html", null, true);
                    echo "</span>
                ";
                }
                // line 63
                echo "              </a>
            </td>
            ";
            } else {
                // line 66
                echo "                <td></td>
            ";
            }
            // line 68
            echo "            <td>
              ";
            // line 69
            if (((($this->getAttribute($context["product"], "active", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "active", array()), 0)) : (0)) == 0)) {
                // line 70
                echo "                <a href=\"#\" onclick=\"unitProductAction(this, 'activate'); return false;\">
                  <i class=\"material-icons action-disabled\">clear</i>
                </a>
              ";
            } else {
                // line 74
                echo "                <a href=\"#\" onclick=\"unitProductAction(this, 'deactivate'); return false;\">
                  <i class=\"material-icons action-enabled \">check</i>
                </a>
              ";
            }
            // line 78
            echo "            </td>
            ";
            // line 79
            if ($this->getAttribute($context["product"], "position", array(), "any", true, true)) {
                // line 80
                echo "              <td ";
                if (($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
                    echo "class=\"placeholder\"";
                }
                echo " style=\"cursor: pointer; cursor: hand;\">
                ";
                // line 81
                if (($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
                    // line 82
                    echo "                    <big><big>⇅</big></big>
                ";
                }
                // line 84
                echo "                <span class=\"position\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "position", array()), "html", null, true);
                echo "</span>
                <input type=\"hidden\" name=\"mass_edit_action_sorted_products[]\" value=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id_product", array()), "html", null, true);
                echo "\" />
                <input type=\"hidden\" name=\"mass_edit_action_sorted_positions[]\" value=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "position", array()), "html", null, true);
                echo "\" />
              </td>
            ";
            }
            // line 89
            echo "            <td>
                <div class=\"btn-group-action\">

                    ";
            // line 92
            $context["buttons_action"] = array(0 => array("href" => (($this->getAttribute(            // line 94
$context["product"], "preview_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "preview_url", array()), "#")) : ("#")), "target" => "_blank", "icon" => "remove_red_eye", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Preview", array(), "Admin.Actions")));
            // line 100
            echo "
                    ";
            // line 101
            $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), array(0 => array("onclick" => "unitProductAction(this, 'duplicate');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", array(), "Admin.Actions"))));
            // line 108
            echo "
                    ";
            // line 109
            $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), array(0 => array("onclick" => "unitProductAction(this, 'delete');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", array(), "Admin.Actions"))));
            // line 116
            echo "
                    ";
            // line 117
            $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:form_edit_dropdown.html.twig", "PrestaShopBundle:Admin\\Product:list.html.twig", 117)->display(array_merge($context, array("button_id" => (("product_list_id_" . $this->getAttribute(            // line 118
$context["product"], "id_product", array())) . "_menu"), "default_item" => array("href" => (($this->getAttribute(            // line 120
$context["product"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "url", array()), "#")) : ("#")), "icon" => "mode_edit"), "right" => true, "items" =>             // line 124
($context["buttons_action"] ?? $this->getContext($context, "buttons_action")))));
            // line 126
            echo "                </div>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 130
            echo "        <tr><td colspan=\"11\">
            ";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no result for this search. Update your filters to view other products.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "
        </td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "</tbody>
";
        
        $__internal_c0bacf5e56a07ceb393927548951173f6d0adade6e5519e82d39f245a97dd156->leave($__internal_c0bacf5e56a07ceb393927548951173f6d0adade6e5519e82d39f245a97dd156_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 134,  240 => 131,  237 => 130,  221 => 126,  219 => 124,  218 => 120,  217 => 118,  216 => 117,  213 => 116,  211 => 109,  208 => 108,  206 => 101,  203 => 100,  201 => 94,  200 => 92,  195 => 89,  189 => 86,  185 => 85,  180 => 84,  176 => 82,  174 => 81,  167 => 80,  165 => 79,  162 => 78,  156 => 74,  150 => 70,  148 => 69,  145 => 68,  141 => 66,  136 => 63,  130 => 61,  124 => 59,  122 => 58,  118 => 57,  113 => 56,  111 => 55,  103 => 52,  97 => 49,  91 => 46,  83 => 43,  75 => 40,  67 => 35,  63 => 34,  53 => 30,  35 => 29,  29 => 27,  25 => 26,  22 => 25,);
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
<tbody
  {% if activate_drag_and_drop and has_category_filter %}class=\"sortable\"{% endif %}
  last_sql=\"{{ last_sql_query|escape('html_attr') }}\"
>
  {% for product in products %}
        <tr data-uniturl=\"{{ product.unit_action_url|default('#') }}\" data-product-id=\"{{ product.id_product }}\">
            <td class=\"checkbox-column\">
              <div class=\"checkbox\">
                <label>
                  <input type=\"checkbox\" name=\"bulk_action_selected_products[]\" value=\"{{ product.id_product }}\" />
                  {{ product.id_product }}
                </label>
              </div>
            </td>
            <td>
              <a href=\"{{ product.url|default('') }}#tab-step1\">{{ product.image|raw }}</a>
            </td>
            <td>
              <a href=\"{{ product.url|default('') }}#tab-step1\">{{ product.name|default('N/A'|trans({}, 'Admin.Global')) }}</a>
            </td>
            <td>
              {{ product.reference|default('') }}
            </td>
            <td>
              {{ product.name_category|default('') }}
            </td>
            <td>
              <a href=\"{{ product.url|default('') }}#tab-step2\">{{ product.price|default('N/A'|trans({}, 'Admin.Global')) }}</a>
            </td>

            {% if 'PS_STOCK_MANAGEMENT'|configuration %}
            <td class=\"product-sav-quantity\" data-product-quantity-value=\"{{ product.sav_quantity|default('') }}\">
              <a href=\"{{ product.url|default('') }}#tab-step3\">
                {% if product.sav_quantity is defined and product.sav_quantity > 0 %}
                  {{ product.sav_quantity }}
                {% else %}
                  <span class=\"badge badge-danger\">{{ product.sav_quantity|default('N/A'|trans({}, 'Admin.Global')) }}</span>
                {% endif %}
              </a>
            </td>
            {% else %}
                <td></td>
            {% endif %}
            <td>
              {% if product.active|default(0) == 0 %}
                <a href=\"#\" onclick=\"unitProductAction(this, 'activate'); return false;\">
                  <i class=\"material-icons action-disabled\">clear</i>
                </a>
              {% else %}
                <a href=\"#\" onclick=\"unitProductAction(this, 'deactivate'); return false;\">
                  <i class=\"material-icons action-enabled \">check</i>
                </a>
              {% endif %}
            </td>
            {% if product.position is defined %}
              <td {% if activate_drag_and_drop %}class=\"placeholder\"{% endif %} style=\"cursor: pointer; cursor: hand;\">
                {% if activate_drag_and_drop %}
                    <big><big>⇅</big></big>
                {% endif %}
                <span class=\"position\">{{ product.position }}</span>
                <input type=\"hidden\" name=\"mass_edit_action_sorted_products[]\" value=\"{{ product.id_product }}\" />
                <input type=\"hidden\" name=\"mass_edit_action_sorted_positions[]\" value=\"{{ product.position }}\" />
              </td>
            {% endif %}
            <td>
                <div class=\"btn-group-action\">

                    {% set buttons_action = [
                      {
                      \"href\": product.preview_url|default('#'),
                      \"target\": \"_blank\",
                      \"icon\": \"remove_red_eye\",
                      \"label\": \"Preview\"|trans({}, 'Admin.Actions')
                      }
                    ] %}

                    {% set buttons_action = buttons_action|merge([
                      {
                      \"onclick\": \"unitProductAction(this, 'duplicate');\",
                      \"icon\": \"content_copy\",
                      \"label\": \"Duplicate\"|trans({}, 'Admin.Actions')
                      }
                    ]) %}

                    {% set buttons_action = buttons_action|merge([
                      {
                      \"onclick\": \"unitProductAction(this, 'delete');\",
                      \"icon\": \"delete\",
                      \"label\": \"Delete\"|trans({}, 'Admin.Actions')
                      }
                    ]) %}

                    {% include 'PrestaShopBundle:Admin/Product/Include:form_edit_dropdown.html.twig' with {
                      'button_id': \"product_list_id_\" ~ product.id_product ~ \"_menu\",
                      'default_item': {
                        \"href\": product.url|default('#'),
                        \"icon\": \"mode_edit\"
                      },
                      'right': true,
                      'items': buttons_action
                    } %}
                </div>
            </td>
        </tr>
    {% else %}
        <tr><td colspan=\"11\">
            {{ \"There is no result for this search. Update your filters to view other products.\"|trans({}, 'Admin.Catalog.Notification') }}
        </td></tr>
    {% endfor %}
</tbody>
", "PrestaShopBundle:Admin\\Product:list.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Product/list.html.twig");
    }
}
