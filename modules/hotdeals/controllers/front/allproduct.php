<?php
/**
* 2007-2014 PrestaShop
*
* Jms Advance Blog
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2014 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

/**
 * @since 1.5.0
 */
class HotDealsAllProductModuleFrontController extends ModuleFrontController
{
	public $ssl = true;
	public $display_column_left = false;

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
        // $products = $this->getDealToShow();
        // var_dump($products); die();
		
		parent::initContent();	
			
		$products 	= $this->getDealToShow();
		$this->context->controller->addCSS($this->module->getPathUri().'css/style.css', 'all');				
		$this->context->smarty->assign(array(
			'products' => $products
		
		));
		$this->setTemplate('allproduct.tpl');
	}
	

	  public function getDealToShow()
    {
        $this->context = Context::getContext();
        $id_shop = $this->context->shop->id;
        $id_lang = $this->context->language->id;
    
          $hotdeals = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
                SELECT hs.`id_hotdeals` as id_hotdeals,
                hss.`active`,hss.`ordering`,hss.`id_product`,hss.`deals_time`
               
                FROM '._DB_PREFIX_.'hotdeals hs
                LEFT JOIN '._DB_PREFIX_.'hotdeals_items hss ON (hs.id_hotdeals = hss.id_hotdeals)
              
                WHERE id_shop = '.(int)$id_shop.'
                ORDER BY hs.id_hotdeals'
            );
    
        $products = array();
        $total_deals = count($hotdeals);
        for ($i = 0; $i < $total_deals; $i++)
        {   
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
                        
            $products[] = Product::getProductProperties($id_lang, $row);
        }               
        return $products;        
    }

}
