<?php

/* PrestaShopBundle:Admin/Product/Include:form_combination.html.twig */
class __TwigTemplate_2ad40e4360cde88ce529be027fa41a2dec68c927627df0cc54f8b67dbf06370f extends Twig_Template
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
        // line 25
        echo "<tr class=\"combination loaded\" id=\"attribute_";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\" data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\">
  <td width=\"1%\"><input class=\"js-combination\" type=\"checkbox\" data-id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\"></td>
  <td class=\"img\"><div class=\"fake-img\"></div></td>
    <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "name", array()), "html", null, true);
        echo "</td>
    <td class=\"attribute-price\">
        <div class=\"input-group\">
            <span class=\"input-group-addon\">";
        // line 31
        echo twig_escape_filter($this->env, ($context["default_currency"] ?? null), "html", null, true);
        echo "</span>
            <input type=\"text\" class=\"attribute_priceTE form-control text-xs-right\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "attribute_price", array()), "html", null, true);
        echo "\">
        </div>
    </td>
    <td class=\"attribute-finalprice text-xs-right\">
      <span data-price=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "final_price", array()), "html", null, true);
        echo "\" data-uniqid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "final_price", array()), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, ($context["default_currency"] ?? null), "html", null, true);
        echo "
    </td>
    ";
        // line 38
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 39
            echo "      <td class=\"attribute-quantity\">
          <div>
              <input type=\"text\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "attribute_quantity", array()), "html", null, true);
            echo "\" class=\"form-control text-xs-right\">
          </div>
      </td>
    ";
        }
        // line 45
        echo "
    <td class=\"attribute-actions\">
        <div class=\"btn-group btn-group-sm\" role=\"group\">
            <a href=\"#combination_form_";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\" class=\"btn btn-open btn-invisible btn-sm\"><i class=\"material-icons\">mode_edit</i></a>
        </div>
        <div id=\"combination_form_";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\" data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\" class=\"combination-form hide row\">
            <div class=\"col-xs-12 text-xs-right nav\">
                ";
        // line 53
        echo "                <a class=\"btn-sensitive prev pull-left\"><i class=\"material-icons\">keyboard_arrow_left</i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prev. combination", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a>
                <a class=\"next btn-sensitive\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next combination", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo " <i class=\"material-icons\">keyboard_arrow_right</i></a>
            </div>
            <div class=\"panel col-md-12 p-t-2 p-b-2\">
                <div class=\"pull-left\">
                    <button type=\"button\" class=\"btn btn-tertiary-outline btn-back\"><i class=\"material-icons\">arrow_back</i> ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to product", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
                </div>
                <h2 class=\"title p-t-2\">
                  ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination details", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo " -
                  ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "name", array()), "html", null, true);
        echo "
                </h2>
                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_default", array()), 'widget');
        echo "
                <div class=\"row\">
                  ";
        // line 66
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 67
            echo "                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "attribute_quantity", array()), "vars", array()), "label", array()), "html", null, true);
            echo "
                          </label>
                          ";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_quantity", array()), 'errors');
            echo "
                          ";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_quantity", array()), 'widget');
            echo "
                      </fieldset>
                    </div>
                  ";
        }
        // line 77
        echo "                    <div class=\"col-md-3\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "available_date_attribute", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                          ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "available_date_attribute", array()), 'errors');
        echo "
                          ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "available_date_attribute", array()), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "attribute_minimal_quantity", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                            <span class=\"help-box\" data-toggle=\"popover\"
                              data-content=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                          </label>
                          ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_minimal_quantity", array()), 'errors');
        echo "
                          ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_minimal_quantity", array()), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "attribute_reference", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                          ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_reference", array()), 'errors');
        echo "
                          ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_reference", array()), 'widget');
        echo "
                      </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price and impact", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 109
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "attribute_wholesale_price", array()), "vars", array()), "label", array());
        echo "</label>
                            ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_wholesale_price", array()), 'errors');
        echo "
                            ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_wholesale_price", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "attribute_price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Does this combination have a different price? Is it cheaper or more expensive than the default retail price?", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </label>
                            ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_price", array()), 'errors');
        echo "
                            ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_price", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "attribute_priceTI", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            ";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_priceTI", array()), 'errors');
        echo "
                            ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_priceTI", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                      <small class=\"form-control-label vcenter\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final retail price (tax excl.) will be", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo " <span class=\"final-price\" data-price=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "final_price", array()), "html", null, true);
        echo "\" data-uniqid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "final_price", array()), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, ($context["default_currency"] ?? null), "html", null, true);
        echo "</small>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 ";
        // line 137
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_USE_ECOTAX") != 1)) {
            echo "hide";
        }
        echo "\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "attribute_ecotax", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            ";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_ecotax", array()), 'errors');
        echo "
                            ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_ecotax", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "attribute_unity", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Does this combination have a different price per unit?", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "\" ></span>
                            </label>
                            ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_unity", array()), 'errors');
        echo "
                            ";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_unity", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "attribute_weight", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\">";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_WEIGHT_UNIT"), "html", null, true);
        echo "</span>
                                ";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_weight", array()), 'errors');
        echo "
                                ";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_weight", array()), 'widget');
        echo "
                            </div>
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific references", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 172
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "attribute_isbn", array()), "vars", array()), "label", array());
        echo "</label>
                            ";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_isbn", array()), 'errors');
        echo "
                            ";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_isbn", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "attribute_ean13", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </label>
                            ";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_ean13", array()), 'errors');
        echo "
                            ";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_ean13", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "attribute_upc", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            ";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_upc", array()), 'errors');
        echo "
                            ";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attribute_upc", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Images", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <fieldset class=\"form-group js-combination-images\">
                            <label>
                                <small class=\"form-control-label\">";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "id_image_attr", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</small>
                                <small class=\"form-control-label number-of-images\"></small>
                            </label>
                            ";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id_image_attr", array()), 'errors');
        echo "
                            ";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id_image_attr", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 214
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsCombinationBottom", array("id_product" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product", array()), "id_product_attribute" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product_attribute", array())));
        echo "
                    </div>
                </div>

                ";
        // line 218
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id_product_attribute", array()), 'widget');
        echo "
            </div>
        </div>
    </td>
    <td width=\"5%\">
      <a href=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_attribute", array("idProduct" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product", array()))), "html", null, true);
        echo "\" class=\"btn btn-invisible btn-sm delete\" data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\"><i class=\"material-icons\">delete</i></a>
    </td>
    <td>
      ";
        // line 226
        $context["checked"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "attribute_default", array()) == 1)) ? ("checked") : (""));
        // line 227
        echo "      <input class=\"attribute-default\" type=\"radio\" ";
        echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
        echo " data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\">
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:form_combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 227,  467 => 226,  459 => 223,  451 => 218,  444 => 214,  434 => 207,  430 => 206,  424 => 203,  415 => 197,  407 => 192,  403 => 191,  399 => 190,  391 => 185,  387 => 184,  382 => 182,  377 => 180,  368 => 174,  364 => 173,  360 => 172,  352 => 167,  343 => 161,  339 => 160,  335 => 159,  330 => 157,  322 => 152,  318 => 151,  313 => 149,  308 => 147,  299 => 141,  295 => 140,  291 => 139,  284 => 137,  269 => 133,  262 => 129,  258 => 128,  254 => 127,  246 => 122,  242 => 121,  237 => 119,  232 => 117,  223 => 111,  219 => 110,  215 => 109,  207 => 104,  199 => 99,  195 => 98,  191 => 97,  183 => 92,  179 => 91,  174 => 89,  169 => 87,  160 => 81,  156 => 80,  152 => 79,  148 => 77,  141 => 73,  137 => 72,  132 => 70,  127 => 67,  125 => 66,  120 => 64,  115 => 62,  111 => 61,  105 => 58,  98 => 54,  93 => 53,  86 => 50,  81 => 48,  76 => 45,  69 => 41,  65 => 39,  63 => 38,  52 => 36,  45 => 32,  41 => 31,  35 => 28,  28 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Product/Include:form_combination.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/form_combination.html.twig");
    }
}
