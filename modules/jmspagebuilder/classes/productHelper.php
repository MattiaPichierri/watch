<?php
/**
* 2007-2017 PrestaShop
*
* Jms Theme Layout
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;

class JmsProductHelper extends Module
{
    public function __construct()
    {
        $context = Context::getContext();
    }
    public static function getFeaturedProducts($categories_ids, $total_config)
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
                    .(count($categories_ids) > 0 ? ' AND cpp.`id_category` IN ('.implode(",", $categories_ids).')' : '');
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

        $products_for_template = [];

        foreach ($result as $rawProduct) {
            $products_for_template[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $context->language
            );
        }

        return $products_for_template;
    }
	public static function getProducts($total_config = 20, $order_by = 'date_add', $order_way = 'DESC')
    {
        $id_lang = Context::getContext()->language->id;        
        $context = Context::getContext();

        $front = true;
        if (!in_array($context->controller->controller_type, array('front', 'modulefront'))) {
            $front = false;
        }        
		$order_by_prefix = false;
        if ($order_by == 'id_product' || $order_by == 'date_add' || $order_by == 'date_upd') {
            $order_by_prefix = 'p';
        } elseif ($order_by == 'name') {
            $order_by_prefix = 'pl';
        } elseif ($order_by == 'manufacturer' || $order_by == 'manufacturer_name') {
            $order_by_prefix = 'm';
            $order_by = 'name';
        } elseif ($order_by == 'position') {
            $order_by_prefix = 'cp';
        }

        if ($order_by == 'price') {
            $order_by = 'orderprice';
        }
       // $sql_groups = '';
        if (Group::isFeatureActive()) {
            $groups = FrontController::getCurrentCustomerGroups();            
        }
        
        $sql = new DbQuery();
        $sql->select(
            'p.*, product_shop.*, stock.out_of_stock, IFNULL(stock.quantity, 0) as quantity, pl.`description`, pl.`description_short`, pl.`link_rewrite`, pl.`meta_description`,
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
        if (Group::isFeatureActive()) {
            $groups = FrontController::getCurrentCustomerGroups();
            $sql->where('EXISTS(SELECT 1 FROM `'._DB_PREFIX_.'category_product` cp
                JOIN `'._DB_PREFIX_.'category_group` cg ON (cp.id_category = cg.id_category AND cg.`id_group` '.(count($groups) ? 'IN ('.implode(',', $groups).')' : '= 1').')
                WHERE cp.`id_product` = p.`id_product`)');
        }
        $sql->groupBy('p.id_product');
        $sql->orderBy((isset($order_by_prefix) ? pSQL($order_by_prefix).'.' : '').'`'.pSQL($order_by).'` '.pSQL($order_way));
		if((int)$total_config > 0)
			$sql->limit($total_config, 0);

        if (Combination::isFeatureActive()) {
            $sql->select('product_attribute_shop.minimal_quantity AS product_attribute_minimal_quantity, IFNULL(product_attribute_shop.id_product_attribute,0) id_product_attribute');
            $sql->leftJoin('product_attribute_shop', 'product_attribute_shop', 'p.`id_product` = product_attribute_shop.`id_product` AND product_attribute_shop.`default_on` = 1 AND product_attribute_shop.id_shop='.(int)$context->shop->id);
        }
        $sql->join(Product::sqlStock('p', 0));		
		//print_r($sql); exit;
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
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

        $products_for_template = [];

        foreach ($result as $rawProduct) {
            $products_for_template[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $context->language
            );
        }
        return $products_for_template;

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

        return $result;
    }
    public static function getNewProducts($categories_ids, $total_config)
    {
        $id_lang = Context::getContext()->language->id;
        $now = date('Y-m-d') . ' 00:00:00';
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
        $sql_groups = '';
        if (Group::isFeatureActive()) {
            $groups = FrontController::getCurrentCustomerGroups();
            $sql_groups = ' AND EXISTS(SELECT 1 FROM `'._DB_PREFIX_.'category_product` cp
                JOIN `'._DB_PREFIX_.'category_group` cg ON (cp.id_category = cg.id_category AND cg.`id_group` '.(count($groups) ? 'IN ('.implode(',', $groups).')' : '= '.(int)Configuration::get('PS_UNIDENTIFIED_GROUP')).')
                WHERE cp.`id_product` = p.`id_product`)';
        }
        $nb_days_new_product = (int) Configuration::get('PS_NB_DAYS_NEW_PRODUCT');

        $sql = new DbQuery();
        $sql->select(
            'p.*, product_shop.*, stock.out_of_stock, IFNULL(stock.quantity, 0) as quantity, pl.`description`, pl.`description_short`, pl.`link_rewrite`, pl.`meta_description`,
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
        if (count($categories_ids)) {
            $sql->where('cp.`id_category` IN ('.implode(",", $categories_ids).')');
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

        $products_for_template = [];

        foreach ($result as $rawProduct) {
            $products_for_template[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $context->language
            );
        }
        return $products_for_template;
    }
    public static function getTopSellerProducts($categories_ids, $total_config)
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
        if (count($categories_ids) > 0) {
            $sql .= ' AND cpp.`id_category` IN ('.implode(",", $categories_ids).')';
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

        $products_for_template = [];

        foreach ($result as $rawProduct) {
            $products_for_template[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $context->language
            );
        }

        return $products_for_template;
    }
    public static function getonSaleProducts($categories_ids, $total_config)
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
        if (count($categories_ids)) {
            $sql .= ' AND cp.id_category IN ('.implode(",", $categories_ids).')';
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

        $products_for_template = [];

        foreach ($result as $rawProduct) {
            $products_for_template[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $context->language
            );
        }

        return $products_for_template;
    }
    public static function getSpecialProducts($total_config)
    {
        $context = Context::getContext();
        $id_lang = Context::getContext()->language->id;
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

        $products_for_template = [];
        if ($result == null) {
            return;
        }
        foreach ($result as $rawProduct) {
            $products_for_template[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $context->language
            );
        }
        return $products_for_template;
    }

    public static function sliceProducts($products, $rows, $cols, $total_config)
    {
        if (count($products) > $total_config) {
            $total = $total_config;
        } else {
            $total = count($products);
        }
        if (Validate::isInt($total / $rows)) {
            $number_cols = $total / $rows;
        } else {
            $number_cols = $total / $rows + 1;
        }
        if ($cols > $number_cols) {
            $number_cols = $cols;
        }
        $result = array();
        if ($cols == 1) {
            for ($i = 0; $i < count($products); $i++) {
                $_index = floor($i / $rows);
                $result[$_index][] = $products[$i];
            }
        } else {
            for ($i = 0; $i < count($products); $i++) {
                if ($i % $number_cols == 0) {
                    $_index = 0;
                } else {
                    $_index = $i % $number_cols;
                }
                $result[$_index][] = $products[$i];
            }
        }
        return $result;
    }
}
