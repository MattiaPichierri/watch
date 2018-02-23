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
include_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/addonbase.php');
include_once(_PS_MODULE_DIR_.'jmspagebuilder/classes/productHelper.php');

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;

class JmsAddonMegatab extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'megatab';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Mega Tab Product';
        $this->addondesc = 'Show Product Carousel';
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
                'default' => 'Our Products'
            ),
            array(
                'type' => 'text',
                'name' => 'desc',
                'label' => $this->l('Description'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon description. Leave blank if no description is needed.',
                'default' => 'Easy to find product following category'
            ),
            array(
                'type' => 'categories',
                'name' => 'ctcategories',
                'label' => $this->l('Categories'),
                'lang' => '0',
                'desc' => 'Select Categories to Show',
                'default' => '',
                'usecheckbox' => '1'
            ),
            array(
                'type' => 'select',
                'name' => 'producttype',
                'label' => $this->l('Product Type'),
                'lang' => '0',
                'desc' => 'Choose Product Type to Show',
                'options' => array('featured', 'new', 'onsale', 'topseller','special'),
                'default' => 'featured'
            ),
            array(
                'type' => 'select',
                'name' => 'order_by',
                'label' => $this->l('Order By'),
                'lang' => '0',
                'desc' => 'Order By Column',
                'options' => array('position', 'id_product', 'date_add', 'date_upd', 'name', 'manufacturer_name', 'price'),
                'default' => 'position'
            ),
            array(
                'type' => 'select',
                'name' => 'order_way',
                'label' => $this->l('Order Way'),
                'lang' => '0',
                'desc' => 'Order Way Or Order Direction',
                'options' => array('DESC','ASC'),
                'default' => 'DESC'
            ),
            array(
                'type' => 'text',
                'name' => 'items_total',
                'label' => $this->l('Total Items'),
                'lang' => '0',
                'desc' => 'Total Number Items',
                'default' => 40
            ),
            array(
                'type' => 'text',
                'name' => 'rows',
                'label' => $this->l('Number of Rows'),
                'lang' => '0',
                'desc' => 'Number of Rows (Or Number of Product per Column)',
                'default' => 2
            ),
            array(
                'type' => 'text',
                'name' => 'cols',
                'label' => $this->l('Number of Columns'),
                'lang' => '0',
                'desc' => 'Number of Columns (Or Number of Product per Row) ( > 1199px )',
                'default' => 4
            ),
            array(
                'type' => 'text',
                'name' => 'cols_md',
                'label' => $this->l('Number of Columns On Medium Device'),
                'lang' => '0',
                'desc' => 'Number of Columns (Or Number of Product per Row) On Medium Device ( > 991px )',
                'default' => 3
            ),
            array(
                'type' => 'text',
                'name' => 'cols_sm',
                'label' => $this->l('Number of Columns On Tablet'),
                'lang' => '0',
                'desc' => 'Number of Columns (Or Number of Product per Row) On Tablet( >= 768px )',
                'default' => 2
            ),
            array(
                'type' => 'text',
                'name' => 'cols_xs',
                'label' => $this->l('Number of Columns On Mobile'),
                'lang' => '0',
                'desc' => 'Number of Columns (Or Number of Product per Row) On Mobile( >= 320px )',
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
                'type' => 'text',
                'name' => 'overwrite_tpl',
                'label' => $this->l('Overwrite Tpl File'),
                'lang' => '0',
                'desc' => 'Use When you want overwrite template file'
            )
        );
        return $inputs;
    }
    public static function getFeaturedProducts1($category_id, $total_config)
    {
        $context = Context::getContext();
        $id_lang = Context::getContext()->language->id;
        $front = in_array($context->controller->controller_type, array('front', 'modulefront'));
        $orderyBy  = 'position';
        $orderWay = 'ASC';
        $orderByPrefix = 'cp';

        $nbDaysNewProduct = Configuration::get('PS_NB_DAYS_NEW_PRODUCT');
        if (!Validate::isUnsignedInt($nbDaysNewProduct)) {
            $nbDaysNewProduct = 20;
        }

        $sql = 'SELECT p.*, product_shop.*, stock.out_of_stock, IFNULL(stock.quantity, 0) AS quantity'.(Combination::isFeatureActive() ? ', IFNULL(product_attribute_shop.id_product_attribute, 0) AS id_product_attribute,
                    product_attribute_shop.minimal_quantity AS product_attribute_minimal_quantity' : '').', pl.`description`, pl.`description_short`, pl.`available_now`,
                    pl.`available_later`, pl.`link_rewrite`, pl.`meta_description`, pl.`meta_keywords`, pl.`meta_title`, pl.`name`, image_shop.`id_image` id_image,
                    il.`legend` as legend, m.`name` AS manufacturer_name, cl.`name` AS category_default,
                    DATEDIFF(product_shop.`date_add`, DATE_SUB("'.date('Y-m-d').' 00:00:00",
                    INTERVAL '.(int) $nbDaysNewProduct.' DAY)) > 0 AS new, product_shop.price AS orderprice
                FROM `'._DB_PREFIX_.'category_product` cp
                LEFT JOIN `'._DB_PREFIX_.'product` p
                    ON p.`id_product` = cp.`id_product`
                '.Shop::addSqlAssociation('product', 'p').
                (Combination::isFeatureActive() ? ' LEFT JOIN `'._DB_PREFIX_.'product_attribute_shop` product_attribute_shop
                ON (p.`id_product` = product_attribute_shop.`id_product` AND product_attribute_shop.`default_on` = 1 AND product_attribute_shop.id_shop='.(int) $context->shop->id.')':'').'
                '.Product::sqlStock('p', 0).'
                LEFT JOIN `'._DB_PREFIX_.'category_lang` cl
                    ON (product_shop.`id_category_default` = cl.`id_category`
                    AND cl.`id_lang` = '.(int) $id_lang.Shop::addSqlRestrictionOnLang('cl').')
                LEFT JOIN `'._DB_PREFIX_.'product_lang` pl
                    ON (p.`id_product` = pl.`id_product`
                    AND pl.`id_lang` = '.(int) $id_lang.Shop::addSqlRestrictionOnLang('pl').')
                LEFT JOIN `'._DB_PREFIX_.'image_shop` image_shop
                    ON (image_shop.`id_product` = p.`id_product` AND image_shop.cover=1 AND image_shop.id_shop='.(int)$context->shop->id.')
                LEFT JOIN `'._DB_PREFIX_.'image_lang` il
                    ON (image_shop.`id_image` = il.`id_image`
                    AND il.`id_lang` = '.(int) $id_lang.')
                LEFT JOIN `'._DB_PREFIX_.'manufacturer` m
                    ON m.`id_manufacturer` = p.`id_manufacturer`
                LEFT JOIN `'._DB_PREFIX_.'category_product` cpp
                    ON cpp.`id_product` = p.`id_product`
                WHERE product_shop.`id_shop` = '.(int) $context->shop->id.'
                    AND cp.`id_category` = '.(int) Configuration::get('HOME_FEATURED_CAT')
                    .' AND product_shop.`active` = 1'
                    .($front ? ' AND product_shop.`visibility` IN ("both", "catalog")' : '')
                    .(count($category_id) > 0 ? ' AND cpp.`id_category` = '.$category_id.'.' : '');
        $sql .= ' GROUP BY p.`id_product` ORDER BY '.(!empty($orderByPrefix) ? $orderByPrefix.'.' : '').'`'.bqSQL($orderyBy).'` '.pSQL($orderWay).'
        LIMIT 0,'.$total_config;
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql, true, false);

        // Modify SQL result
        $result = Product::getProductsProperties($id_lang, $result);

        $assembler = new ProductAssembler($context);

        $presenterFactory = new ProductPresenterFactory($context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(
            new ImageRetriever(
                $context->link
            ),
            $context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            $context->getTranslator()
        );

        $products = [];

        foreach ($result as $rawProduct) {
            $products[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $context->language
            );
        }
        $result_f = array();
        foreach ($products as $product) {
            if ($product['id_category_default'] == $category_id) {
                $result_f[] =  $product;
            }
        }
        return $result_f;
    }
    public static function getNewProducts1($category_id, $total_config)
    {
        $id_lang = Context::getContext()->language->id;
        $context = Context::getContext();

        $front = true;
        if (!in_array($context->controller->controller_type, array('front', 'modulefront'))) {
            $front = false;
        }
        if ($total_config < 1) {
            $total_config = 10;
        }
        $order_by = 'date_add';
        $order_way = 'DESC';
        $order_by_prefix = 'product_shop';
        if (Group::isFeatureActive()) {
            $groups = FrontController::getCurrentCustomerGroups();
            $sql_groups = ' AND EXISTS(SELECT 1 FROM `'._DB_PREFIX_.'category_product` cp
                JOIN `'._DB_PREFIX_.'category_group` cg ON (cp.id_category = cg.id_category AND cg.`id_group` '.(count($groups) ? 'IN ('.implode(',', $groups).')' : '= '.(int)Configuration::get('PS_UNIDENTIFIED_GROUP')).')
                WHERE cp.`id_product` = p.`id_product`)';
        }

        $sql = new DbQuery();
        $sql->select(
            'p.*, product_shop.*, stock.out_of_stock, IFNULL(stock.quantity, 0) as quanti, pl.`description`, pl.`description_short`, pl.`link_rewrite`, pl.`meta_description`,
            pl.`meta_keywords`, pl.`meta_title`, pl.`name`, pl.`available_now`, pl.`available_later`, image_shop.`id_image` id_image, il.`legend`, m.`name` AS manufacturer_name'
        );

        $sql->from('product', 'p');
        $sql->join(Shop::addSqlAssociation('product', 'p'));
        $sql->leftJoin('product_lang', 'pl', 'p.`id_product` = pl.`id_product` AND pl.`id_lang` = '.(int)$id_lang.Shop::addSqlRestrictionOnLang('pl'));
        $sql->leftJoin('image_shop', 'image_shop', 'image_shop.`id_product` = p.`id_product` AND image_shop.cover=1 AND image_shop.id_shop='.(int)$context->shop->id);
        $sql->leftJoin('image_lang', 'il', 'image_shop.`id_image` = il.`id_image` AND il.`id_lang` = '.(int)$id_lang);
        $sql->leftJoin('manufacturer', 'm', 'm.`id_manufacturer` = p.`id_manufacturer`');
        $sql->leftJoin('category_product', 'cp', 'cp.`id_product` = p.`id_product`');

        $sql->where('product_shop.`active` = 1');
        if ($front) {
            $sql->where('product_shop.`visibility` IN ("both", "catalog")');
        }
        if (count($category_id)) {
            $sql->where('cp.`id_category` = '.$category_id);
        }
        if (Group::isFeatureActive()) {
            $groups = FrontController::getCurrentCustomerGroups();
            $sql->where('EXISTS(SELECT 1 FROM `'._DB_PREFIX_.'category_product` cp
                JOIN `'._DB_PREFIX_.'category_group` cg ON (cp.id_category = cg.id_category AND cg.`id_group` '.(count($groups) ? 'IN ('.implode(',', $groups).')' : '= 1').')
                WHERE cp.`id_product` = p.`id_product`)');
        }
        $sql->groupBy('p.id_product');
        $sql->orderBy((isset($order_by_prefix) ? pSQL($order_by_prefix).'.' : '').'`'.pSQL($order_by).'` '.pSQL($order_way));
        $sql->limit($total_config, 0);

        if (Combination::isFeatureActive()) {
            $sql->select('product_attribute_shop.minimal_quantity AS product_attribute_minimal_quantity, IFNULL(product_attribute_shop.id_product_attribute,0) id_product_attribute');
            $sql->leftJoin('product_attribute_shop', 'product_attribute_shop', 'p.`id_product` = product_attribute_shop.`id_product` AND product_attribute_shop.`default_on` = 1 AND product_attribute_shop.id_shop='.(int)$context->shop->id);
        }
        $sql->join(Product::sqlStock('p', 0));
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

        if (!$result) {
            return false;
        }

        $products_ids = array();
        foreach ($result as $row) {
            $products_ids[] = $row['id_product'];
        }
        // Thus you can avoid one query per product, because there will be only one query for all the products of the cart
        Product::cacheFrontFeatures($products_ids, $id_lang);
        $result = Product::getProductsProperties((int)$id_lang, $result);
        $assembler = new ProductAssembler($context);

        $presenterFactory = new ProductPresenterFactory($context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(
            new ImageRetriever(
                $context->link
            ),
            $context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            $context->getTranslator()
        );

        $newProducts = [];

        foreach ($result as $rawProduct) {
            $newProducts[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $context->language
            );
        }
        $result_new = array();
        foreach ($newProducts as $product) {
            if ($product['id_category_default'] == $category_id) {
                $result_new[] =  $product;
            }
        }
        return $result_new;
    }
    public static function getonSaleProducts1($category_id, $total_config)
    {
        $context = Context::getContext();
        $id_lang = Context::getContext()->language->id;
        $sql = 'SELECT p.*, product_shop.*, pl.*,MAX(image_shop.`id_image`) id_image
                FROM `'._DB_PREFIX_.'product` p
                '.Shop::addSqlAssociation('product', 'p').'
                LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` '.Shop::addSqlRestrictionOnLang('pl').')
                LEFT JOIN `'._DB_PREFIX_.'category_product` cp ON (cp.id_product = pl.id_product)
                LEFT JOIN `'._DB_PREFIX_.'image` i ON (i.`id_product` = p.`id_product`)'.Shop::addSqlAssociation('image', 'i', false, 'image_shop.cover=1').'
                LEFT JOIN `'._DB_PREFIX_.'image_lang` il ON (image_shop.`id_image` = il.`id_image` AND il.`id_lang` = '.(int)$id_lang.')
                WHERE  pl.`id_lang` = '.(int)$id_lang.' AND p.`on_sale` = 1 AND p.`active` = 1';
        if (count($category_id)) {
            $sql .= ' AND cp.id_category = ('.$category_id.')';
        }
        $sql .= ' GROUP BY p.`id_product` LIMIT 0,'.$total_config;
        $result = Db::getInstance()->executeS($sql);
        $result = Product::getProductsProperties((int)Context::getContext()->language->id, $result);
        $assembler = new ProductAssembler($context);

        $presenterFactory = new ProductPresenterFactory($context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(
            new ImageRetriever(
                $context->link
            ),
            $context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            $context->getTranslator()
        );

        $sale_product = [];

        foreach ($result as $rawProduct) {
            $sale_product[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $context->language
            );
        }

        $result_sale = array();
        foreach ($sale_product as &$row) {
            if ($row['id_category_default'] == $category_id) {
                $result_sale[] =  $row;
            }
        }
        return $result_sale;
    }
    public static function getTopSellerProducts1($category_id, $total_config)
    {
        $context = Context::getContext();
        $id_lang = Context::getContext()->language->id;

        if ($total_config < 1) {
            $total_config = 10;
        }
        $sql = '
        SELECT
            p.*, IFNULL(product_attribute_shop.id_product_attribute,0) id_product_attribute, pl.`link_rewrite`, pl.`name`, pl.`description_short`, product_shop.`id_category_default`,
            image_shop.`id_image` id_image, il.`legend`,
            ps.`quantity` AS sales, p.`ean13`, p.`upc`, cl.`link_rewrite` AS category, p.show_price, p.available_for_order, IFNULL(stock.quantity, 0) as quantity, p.customizable,
            IFNULL(pa.minimal_quantity, p.minimal_quantity) as minimal_quantity, stock.out_of_stock,
            product_shop.`date_add` > "'.date('Y-m-d', strtotime('-'.(Configuration::get('PS_NB_DAYS_NEW_PRODUCT') ? (int) Configuration::get('PS_NB_DAYS_NEW_PRODUCT') : 20).' DAY')).'" as new,
            product_shop.`on_sale`, product_attribute_shop.minimal_quantity AS product_attribute_minimal_quantity
        FROM `'._DB_PREFIX_.'product_sale` ps
        LEFT JOIN `'._DB_PREFIX_.'product` p ON ps.`id_product` = p.`id_product`
        '.Shop::addSqlAssociation('product', 'p').'
        LEFT JOIN `'._DB_PREFIX_.'product_attribute_shop` product_attribute_shop
            ON (p.`id_product` = product_attribute_shop.`id_product` AND product_attribute_shop.`default_on` = 1 AND product_attribute_shop.id_shop='.(int)$context->shop->id.')
        LEFT JOIN `'._DB_PREFIX_.'product_attribute` pa ON (product_attribute_shop.id_product_attribute=pa.id_product_attribute)
        LEFT JOIN `'._DB_PREFIX_.'product_lang` pl
            ON p.`id_product` = pl.`id_product`
            AND pl.`id_lang` = '.(int) $id_lang.Shop::addSqlRestrictionOnLang('pl').'
        LEFT JOIN `'._DB_PREFIX_.'image_shop` image_shop
            ON (image_shop.`id_product` = p.`id_product` AND image_shop.cover=1 AND image_shop.id_shop='.(int) $context->shop->id.')
        LEFT JOIN `'._DB_PREFIX_.'image_lang` il ON (image_shop.`id_image` = il.`id_image` AND il.`id_lang` = '.(int) $id_lang.')
        LEFT JOIN `'._DB_PREFIX_.'category_lang` cl
            ON cl.`id_category` = product_shop.`id_category_default`
            AND cl.`id_lang` = '.(int) $id_lang.Shop::addSqlRestrictionOnLang('cl').Product::sqlStock('p', 0)
        .'LEFT JOIN `'._DB_PREFIX_.'category_product` cpp
                    ON cpp.`id_product` = p.`id_product`';
        $sql .= '
        WHERE product_shop.`active` = 1
        AND p.`visibility` != \'none\'' ;
        if (count($category_id) > 0) {
            $sql .= ' AND cpp.`id_category` = '.$category_id;
        }
        if (Group::isFeatureActive()) {
            $groups = FrontController::getCurrentCustomerGroups();
            $sql .= ' AND EXISTS(SELECT 1 FROM `'._DB_PREFIX_.'category_product` cp
                JOIN `'._DB_PREFIX_.'category_group` cg ON (cp.id_category = cg.id_category AND cg.`id_group` '.(count($groups) ? 'IN ('.implode(',', $groups).')' : '= 1').')
                WHERE cp.`id_product` = p.`id_product`)';
        }

        $sql .= ' GROUP BY p.`id_product`
        ORDER BY ps.quantity DESC
        LIMIT 0,'.$total_config;
        if (!$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql)) {
            return false;
        }
        $result = Product::getProductsProperties((int)$id_lang, $result);

        $assembler = new ProductAssembler($context);

        $presenterFactory = new ProductPresenterFactory($context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(
            new ImageRetriever(
                $context->link
            ),
            $context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            $context->getTranslator()
        );

        $products = [];

        foreach ($result as $rawProduct) {
            $products[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $context->language
            );
        }
        $result_top = array();
        foreach ($products as &$product) {
            if ($product['id_category_default'] == $category_id) {
                $result_top[] = $product;
            }
        }
        return $result_top;
    }
    public static function getSpecialProducts1($category_id, $total_config)
    {
        $context = Context::getContext();
        $result = Product::getPricesDrop($context->language->id, 0, $total_config);
        $assembler = new ProductAssembler($context);

        $presenterFactory = new ProductPresenterFactory($context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(
            new ImageRetriever(
                $context->link
            ),
            $context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            $context->getTranslator()
        );

        $products_special = [];

        foreach ($result as $rawProduct) {
            $products_special[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $context->language
            );
        }
        $result_special = array();
        foreach ($result as &$rows) {
            if ($rows['id_category_default'] == $category_id) {
                $result_special[] = $rows;
            }
        }
        return $result_special;
    }
    public function getProducts1($fields, $id_category)
    {
        $producttype = $fields[3]->value;
        $total_config = $fields[6]->value;
        $rows = $fields[7]->value;
        $cols = $fields[8]->value;
        $_products = array();
        if ($producttype == 'onsale') {
            $_products = $this->getonSaleProducts1($id_category, $total_config);
        } elseif ($producttype == 'new') {
            $_products = $this->getNewProducts1($id_category, $total_config);
        } elseif ($producttype == 'topseller') {
            $_products = $this->getTopSellerProducts1($id_category, $total_config);
        } elseif ($producttype == 'special') {
            $_products = $this->getSpecialProducts1($id_category, $total_config);
        } else {
            $_products = $this->getFeaturedProducts1($id_category, $total_config);
        }
        return JmsProductHelper::sliceProducts($_products, $rows, $cols, $total_config);
    }
    public function returnValue($addon)
    {
        $id_lang = $this->context->language->id;
        if (Tools::strlen($addon->fields[2]->value) == 0) {
            return "Please select categories for tab!";
        }
        $category_ids = $addon->fields[2]->value;
        $category_ids = explode(",", $addon->fields[2]->value);
        $categories = array();
        foreach ($category_ids as $k => $id_category) {
            $category = new Category($id_category, (int)Context::getContext()->language->id);
            $categories[$k]['id_category'] = $id_category;
            $categories[$k]['name'] = $category->name;
            $categories[$k]['products'] = $this->getProducts1($addon->fields, $id_category);
        }        
        $addon_tpl_dir = $this->loadTplDir();
         $this->context->smarty->assign(array(
                'link' => $this->context->link,
                'categories' => $categories,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'cols'  => $addon->fields[8]->value,
                'cols_md'   => $addon->fields[9]->value,
                'cols_sm'   => $addon->fields[10]->value,
                'cols_xs'   => $addon->fields[11]->value,
                'navigation' => $addon->fields[12]->value,
                'pagination' => $addon->fields[13]->value,
                'autoplay' => $addon->fields[14]->value,
                'rewind' => $addon->fields[15]->value,
                'slidebypage' => $addon->fields[16]->value,
                'addon_tpl_dir' => $addon_tpl_dir
        ));
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
