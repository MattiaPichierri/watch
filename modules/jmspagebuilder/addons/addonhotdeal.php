<?php
/**
* 2007-2017 PrestaShop
*
* Jms Page Builder
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}
use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;

include_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/addonbase.php');

class JmsAddonHotdeal extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'hotdeal';
        $this->modulename = 'hotdeals';
        $this->addontitle = 'Hot Deals';
        $this->addondesc = 'Show Hot Deals';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();

    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'title',
                'label' => $this->l('Title'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon title. Leave blank if no title is needed.',
                'default' => 'Hot Deals'
            ),
            array(
                'type' => 'text',
                'name' => 'desc',
                'label' => $this->l('Description'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon description. Leave blank if no description is needed.',
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'items_total',
                'label' => $this->l('Total Items'),
                'lang' => '0',
                'desc' => 'Total Number Items',
                'default' => 10
            ),
            array(
                'type' => 'text',
                'name' => 'items_show',
                'label' => $this->l('Items Show'),
                'lang' => '0',
                'desc' => 'Number of Items Show ( > 1199px )',
                'default' => 5
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_md',
                'label' => $this->l('Items Show On Medium Device'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Medium Device ( > 991px )',
                'default' => 4
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_sm',
                'label' => $this->l('Items Show On Tablet'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Tablet( >= 768px )',
                'default' => 3
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_xs',
                'label' => $this->l('Items Show On Mobile'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Mobile( >= 320px )',
                'default' => 2
            ),
            array(
                'type' => 'switch',
                'name' => 'navigation',
                'label' => $this->l('Show Navigation'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Navigation',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'pagination',
                'label' => $this->l('Show Pagination'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Pagination',
                'default' => '0'
            ),
            array(
                'type' => 'switch',
                'name' => 'autoplay',
                'label' => $this->l('Auto Play'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Auto Play',
                'default' => '0'
            ),
            array(
                'type' => 'switch',
                'name' => 'rewind',
                'label' => $this->l('ReWind Navigation'),
                'lang' => '0',
                'desc' => 'Enanble/Disable ReWind Navigation',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'slidebypage',
                'label' => $this->l('slide By Page'),
                'lang' => '0',
                'desc' => 'Enanble/Disable Slide By Page',
                'default' => '0'
            ),
            array(
                'type' => 'switch',
                'name' => 'showall_link',
                'label' => $this->l('Show All Link'),
                'lang' => '0',
                'desc' => 'Show/Hide Show All Link',
                'default' => '0'
            ),
            array(
                'type' => 'text',
                'name' => 'overwrite_tpl',
                'label' => $this->l('Overwrite Tpl File'),
                'lang' => '0',
                'desc' => 'Use When you want overwrite template file'
            )
        );
        return $inputs;
    }
    public function returnValue($addon)
    {
        $this->context = Context::getContext();
        $id_shop = $this->context->shop->id;
        $id_lang = $this->context->language->id;
        $hotdeals = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('SELECT hs.`id_hotdeals` as id_hotdeals,hss.`active`,hss.`ordering`,hss.`id_product`,hss.`deals_time` FROM '._DB_PREFIX_.'hotdeals hs LEFT JOIN '._DB_PREFIX_.'hotdeals_items hss ON (hs.`id_hotdeals` = hss.`id_hotdeals`) WHERE `id_shop` = '.(int)$id_shop.' AND hss.`active` = 1 ORDER BY hs.`id_hotdeals` LIMIT 0,'.$addon->fields[2]->value);
        $products = array();
        $total_deals = count($hotdeals);
        for ($i = 0; $i < $total_deals; $i++) {
            $sql = 'SELECT p.*, product_shop.*, stock.out_of_stock, IFNULL(stock.quantity, 0) as quantity, MAX(product_attribute_shop.id_product_attribute) id_product_attribute, product_attribute_shop.minimal_quantity AS product_attribute_minimal_quantity, pl.`description`, pl.`description_short`, pl.`available_now`,
                    pl.`available_later`, pl.`link_rewrite`, pl.`meta_description`, pl.`meta_keywords`, pl.`meta_title`, pl.`name`, MAX(image_shop.`id_image`) id_image,
                    il.`legend`, m.`name` AS manufacturer_name,
                    DATEDIFF(product_shop.`date_add`, DATE_SUB(NOW(),
                    INTERVAL '.(Validate::isUnsignedInt(Configuration::get('PS_NB_DAYS_NEW_PRODUCT')) ? Configuration::get('PS_NB_DAYS_NEW_PRODUCT') : 20).'
                        DAY)) > 0 AS new, product_shop.price AS orderprice
                FROM `'._DB_PREFIX_.'product` p
                '.Shop::addSqlAssociation('product', 'p').'
                LEFT JOIN `'._DB_PREFIX_.'product_attribute` pa
                ON (p.`id_product` = pa.`id_product`)
                '.Shop::addSqlAssociation('product_attribute', 'pa', false, 'product_attribute_shop.`default_on` = 1').'
                '.Product::sqlStock('p', 'product_attribute_shop', false, $this->context->shop).'
                LEFT JOIN `'._DB_PREFIX_.'product_lang` pl
                    ON (p.`id_product` = pl.`id_product`
                    AND pl.`id_lang` = '.(int)$id_lang.Shop::addSqlRestrictionOnLang('pl').')
                LEFT JOIN `'._DB_PREFIX_.'image` i
                    ON (i.`id_product` = p.`id_product`)'.
                                Shop::addSqlAssociation('image', 'i', false, 'image_shop.cover=1').'
                LEFT JOIN `'._DB_PREFIX_.'image_lang` il
                    ON (image_shop.`id_image` = il.`id_image`
                    AND il.`id_lang` = '.(int)$id_lang.')
                LEFT JOIN `'._DB_PREFIX_.'manufacturer` m
                    ON m.`id_manufacturer` = p.`id_manufacturer`
                WHERE p.`id_product` = '.$hotdeals[$i]['id_product'].' AND product_shop.`id_shop` = '.(int)$id_shop.'
                     AND product_shop.`active` = 1'
                    .' GROUP BY product_shop.id_product';
            $row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($sql);
            if (isset($row['id_product'])) {
                $products[] = Product::getProductProperties($id_lang, $row);
            }
            $product_img = array();

            foreach ($products as $k => $product) {
                $pr = new Product($product['id_product']);
                $product_img = $pr->getImages($id_lang);
                $products[$k]['images']=$product_img;
                $products[$k]['sold'] = JmsPageBuilderHelper::getNbOfSales($product['id_product']);

            }
        }
        //print_r($products); exit;
        if (count($products) == 0) {
            return "Please go to modules >>hotdeal to add product!";
        }
        $assembler = new ProductAssembler($this->context);

        $presenterFactory = new ProductPresenterFactory($this->context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(
            new ImageRetriever(
                $this->context->link
            ),
            $this->context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            $this->context->getTranslator()
        );

        $products_for_template = [];

        foreach ($products as $rawProduct) {
            $products_for_template[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $this->context->language
            );
        }
        $addon_tpl_dir = $this->loadTplDir();
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'hotdeals' => $hotdeals,
                'products' => $products_for_template,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'items_show' => $addon->fields[3]->value,
                'items_show_md' => $addon->fields[4]->value,
                'items_show_sm' => $addon->fields[5]->value,
                'items_show_xs' => $addon->fields[6]->value,
                'navigation' => $addon->fields[7]->value,
                'pagination' => $addon->fields[8]->value,
                'autoplay' => $addon->fields[9]->value,
                'rewind' => $addon->fields[10]->value,
                'slidebypage' => $addon->fields[11]->value,
                'showall_link' => $addon->fields[12]->value,
                'addon_tpl_dir' => $addon_tpl_dir
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
