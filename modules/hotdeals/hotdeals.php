<?php

/**
* 2007-2015 PrestaShop
*
* Jms HotDeals
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2015 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/
if (!defined('_PS_VERSION_'))
    exit;

include_once(_PS_MODULE_DIR_.'hotdeals/Hotdeal.php');

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
class hotdeals extends Module {

    private $_html = '';

  
    public function __construct() {
        $this->name = 'hotdeals';
        $this->tab = 'content_hotdeals';
        $this->version = '1.0.0';
        $this->author = 'joommasters';
        $this->need_instance = 0;
        $this->secure_key = Tools::encrypt($this->name);
        $this->ps_versions_compliancy = array('min' => '1.6.1.0', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();


        $this->displayName = $this->l('hotdeals');
        $this->description = $this->l('Description of my module.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('hotdeals'))
            $this->warning = $this->l('No name provided');

    }



    public function getcontent()
    {


        $this->_html .= $this->headerHTML();

        /* Validate & process */
        if (Tools::isSubmit('submitHotdeals') || Tools::isSubmit('delete_id_hotdeals') || Tools::isSubmit('submitHotdeals_setting') || Tools::isSubmit('changeStatus'))
        {
           
           if($this->_postValidation())
            { 
             
                $this->_postProcess(); 
                $this->_html .= $this->renderForm();
                $this->_html .= $this->renderList();

            }else
                 {
            
                $this->_html .= $this->renderaddForm();
                  }

        }
         elseif(Tools::isSubmit('addhotdeals')){
             $this->_html = $this->renderaddForm();
        }
        elseif(Tools::isSubmit('id_hotdeals'))
        {
            $this->_html .=$this->renderaddForm();
        }
        else{
             $this->_html .= $this->renderForm();
             $this->_html .= $this->renderList();
        }

        return $this->_html;
    }


    public function _postValidation()
    {
        $errors = array();
 
        if(Tools :: isSubmit('submitHotdeals'))
        {
            
            if(Tools::strlen(Tools::getValue('id_product')) == '')            
            $errors[] = $this->l('The product not null.');

         

             if(Tools::strlen(Tools::getValue('deals_time')) == '')           
            $errors[] = $this->l('The deals time not null.');


        }else if (Tools::isSubmit('delete_id_hotdeals') && (!Validate::isInt(Tools::getValue('delete_id_hotdeals')) || !$this->hotdealsExists((int)Tools::getValue('delete_id_hotdeals'))))
            {
            $errors[] = $this->l('Invalid hotdeals ID');

        }else if (Tools::isSubmit('id_hotdeals') && (!Validate::isInt(Tools::getValue('id_hotdeals')) || !$this->hotdealsExists((int)Tools::getValue('id_hotdeals'))))
            {

            $errors[] = $this->l('Invalid hotdeals ID');

        };

        if(count($errors))
            {
                
                $this->_html .= $this->displayError(implode('<br />', $errors));

                return false;
               
            }

            return true;

    }


    public function _postProcess()
    {
        
      
        $errors = array();

          /* Processes Slider */
        if (Tools::isSubmit('submitHotdeals_setting'))
        { 
           
            $res = Configuration::updateValue('HOTDEAL_PRODUCT_SHOW', (int)(Tools::getValue('HOTDEAL_PRODUCT_SHOW')));
            $res &= Configuration::updateValue('HOTDEAL_SPEED', (int)(Tools::getValue('HOTDEAL_SPEED')));                     
            $res &= Configuration::updateValue('HOTDEAL_AUTO_PLAY', (int)(Tools::getValue('HOTDEAL_AUTO_PLAY')));                       

            $res &= Configuration::updateValue('HOTDEAL_NAVIGATION', (int)(Tools::getValue('HOTDEAL_NAVIGATION')));                       
            $res &= Configuration::updateValue('HOTDEAL_PAGINATION', (int)(Tools::getValue('HOTDEAL_PAGINATION')));                       
            $res &= Configuration::updateValue('HOTDEAL_REWINDNAV', (int)(Tools::getValue('HOTDEAL_REWINDNAV')));                       
            $res &= Configuration::updateValue('HOTDEAL_SCROLLPERPAGE', (int)(Tools::getValue('HOTDEAL_SCROLLPERPAGE')));    
            $res &= Configuration::updateValue('HOTDEAL_VIEWALLPRODUCT', (int)(Tools::getValue('HOTDEAL_VIEWALLPRODUCT')));                                          
                
                  
            if (!$res)
                $errors[] = $this->displayError($this->l('The configuration could not be updated.'));
            else
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=6&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        }
             /* Processes deal */
        elseif(Tools::isSubmit('submitHotdeals'))
        {
            /* Sets ID if needed */    
            if(Tools::getValue('id_hotdeals') && $this->hotdealsExists(Tools::getValue('id_hotdeals'))) 
            {
                $hotdeals = new Hotdeal((int)Tools::getValue('id_hotdeals'));
                if (!Validate::isLoadedObject($hotdeals))
                {
                    $this->_html .= $this->displayError($this->l('Invalid id_deal'));
                    return;
                }
            }
            else 
                $hotdeals = new Hotdeal();
           /* Sets ordering */          
            $hotdeals->id_product = (int)Tools::getValue('id_product');
            $hotdeals->ordering = (int)Tools::getValue('ordering');         
            $hotdeals->deals_time = Tools::getValue('deals_time');
            /* Sets active */
            $hotdeals->active = (int)Tools::getValue('active'); 
            /* Processes if no errors  */   

            if(!$errors)
            {

                 
                /* Add */
                if(!Tools::getValue('id_hotdeals'))
                {
                    if(!$hotdeals->add())
                        $errors[] = $this->displayError($this->l('The hotdeals could not be added.'));
                }
                /*  Update  */
                elseif(!$hotdeals->update())
                    $errors[] = $this->displayError($this->l('The hotdeals could not be updated.'));
            }
        }
        elseif(Tools::isSubmit('changeStatus') && Tools::isSubmit('id_hotdeals'))
        {
            $hotdeals = new Hotdeal((int)Tools::getValue('id_hotdeals'));
            if ($hotdeals->active == 0)
                $hotdeals->active = 1;
            else
                $hotdeals->active = 0;
            $res = $hotdeals->update();
            $this->_html .= ($res ? $this->displayConfirmation($this->l('Configuration updated')) : $this->displayError($this->l('The configuration could not be updated.')));

        }
        /* Delete */
        elseif (Tools::isSubmit('delete_id_hotdeals')) 
        {
            $hotdeals = new Hotdeal((int)Tools::getValue('delete_id_hotdeals'));
            $res = $hotdeals->delete();
            if(!$res)
                $this->_html .= $this->displayError('Could not delete');
            else
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=1&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        }

        /* Display errors if needed */
        if (count($errors))
            $this->_html .= $this->displayError(implode('<br />', $errors));
        elseif (Tools::isSubmit('submitHotdeals') && Tools::getValue('id_hotdeals'))
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        elseif (Tools::isSubmit('submitHotdeals'))
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=3&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);

    }


    public function getProductSale($search_key ='')
    {
        
     $req = "SELECT hs.`name`, hs.`id_product`
      FROM `"._DB_PREFIX_."product_lang` hs
      INNER JOIN `"._DB_PREFIX_."specific_price` hss 
      ON (hs.`id_product` = hss.`id_product`) 
      WHERE hs.`name` LIKE '%$search_key%'";
     
       return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($req);

        
    }


    public function install() 
    {
       if (parent::install() && $this->registerHook('header') && $this->registerHook('actionShopDataDuplication'))
        {   

            $res = Configuration::updateValue('HOTDEAL_PRODUCT_SHOW', '2');
            $res &= Configuration::updateValue('HOTDEAL_SPEED', '700');
            $res &= Configuration::updateValue('HOTDEAL_AUTO_PLAY', '1');

            $res &= Configuration::updateValue('HOTDEAL_NAVIGATION', '1');
            $res &= Configuration::updateValue('HOTDEAL_PAGINATION', '1');
            $res &= Configuration::updateValue('HOTDEAL_REWINDNAV', '1');
            $res &= Configuration::updateValue('HOTDEAL_SCROLLPERPAGE', '1');
             $res &= Configuration::updateValue('HOTDEAL_VIEWALLPRODUCT', '1');
             /* Creates tables */

            $res &= $this->createTables();

              if ($res)
                 $this->installSamples();
            return $res;
        }
       return false;
    }


        public function uninstall()
    {
        if (parent:: uninstall())
        {

            /* Deletes tables */
            $res = $this->deleteTables();
            
            /* Unsets configuration */
            $res &= Configuration::deleteByName('HOTDEAL_PRODUCT_SHOW');
            $res &= Configuration::deleteByName('HOTDEAL_SPEED');         
            $res &= Configuration::deleteByName('HOTDEAL_AUTO_PLAY');

            $res &= Configuration::deleteByName('HOTDEAL_NAVIGATION');
            $res &= Configuration::deleteByName('HOTDEAL_PAGINATION');
            $res &= Configuration::deleteByName('HOTDEAL_REWINDNAV');         
            $res &= Configuration::deleteByName('HOTDEAL_SCROLLPERPAGE'); 
            $res &= Configuration::deleteByName('HOTDEAL_VIEWALLPRODUCT'); 

            return $res;
           
        }
        return false;
    }

    public function installSamples()
    {

            $products = Product::getPricesDrop((int)$this->context->language->id, 0, (int)Configuration::get('HOTDEAL_PRODUCT_SHOW')); 

          
            $d =strtotime("+1 Months");
             date("Y-m-d h:i:s", $d);


             $hotdeals = new Hotdeal();
             for($i = 1 ; $i<8 ; ++$i)
             {
                 $hotdeals->ordering = $i;
                 $hotdeals->active = 1;
                 $hotdeals->deals_time = date("Y-m-d h:i:s", $d);
                 $hotdeals->id_product = $products[0]['id_product'];

             $hotdeals->add();
             }
         
    }


     public function createTables()
    {
        $res = true;
        $res &= Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'hotdeals` (
              `id_hotdeals` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `id_shop` int(10) unsigned NOT NULL DEFAULT \'0\',
             
              PRIMARY KEY (`id_hotdeals`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');


        $res &= (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'hotdeals_items` (
                `id_hotdeals` int(10) unsigned NOT NULL AUTO_INCREMENT,
                `id_product` int(50) NOT NULL,
                `deals_time` datetime NOT NULL,
                `ordering` int(10) unsigned NOT NULL DEFAULT \'0\',              
                `active` tinyint(1) unsigned NOT NULL DEFAULT \'0\',

                PRIMARY KEY (`id_hotdeals`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');

        return $res ;
    }


    /**
     * deletes tables
     */
    protected function deleteTables()
    {
        $hotdeals = $this->getHotdeals();   
        foreach ($hotdeals as $hotdeal) 
        {               
            $to_del = new Hotdeal($hotdeal['id_hotdeals']);
            $to_del->delete();
        }       
        Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'hotdeals`;');
        Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'hotdeals_items`;');
       
        return true;
    }

     public function getHotdeals($active = null)
    {
        $this->context = Context::getContext();
        $id_shop = $this->context->shop->id;
      
        $hotdeals = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
                SELECT hs.`id_hotdeals` as id_hotdeals,
                hss.`active`,hss.`ordering`,hss.`id_product`,hss.`deals_time`
               
                FROM '._DB_PREFIX_.'hotdeals hs
                LEFT JOIN '._DB_PREFIX_.'hotdeals_items hss ON (hs.id_hotdeals = hss.id_hotdeals)
              
                WHERE id_shop = '.(int)$id_shop.'
                ORDER BY hss.ordering'
            );
        $total_hotdeals = count($hotdeals);
      
        for($i = 0; $i < $total_hotdeals; $i++)
        {
            $row = $this->getProductName($hotdeals[$i]['id_product']);
            $hotdeals[$i]['product_name'] = $row['name'];
        }
        return $hotdeals;
      
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

    public function renderAddForm()
    {
       $this->context->controller->addCSS(($this->_path).'views/css/admin_style.css', 'all');
       
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Hotdeal informations'),
                    'icon' => 'icon-cogs',
                     'autocomplete' => 'off'
                ),
                'input' => array(                                   
                    array(
                        'type' => 'product_search',
                        'label' => $this->l('Product'),
                        'name' => 'title'
                    ),
					array(
						'type' => 'datetime',
						'label' => $this->l('Set Time'),
						'name' => 'deals_time',
						'lang' => true,
					),			                                                        
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Active'),
                        'name' => 'active',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );

        if (Tools::isSubmit('id_hotdeals') && $this->hotdealsExists((int)Tools::getValue('id_hotdeals')))
            $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'id_hotdeals');       

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->module = $this;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitHotdeals';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));       
        $helper->tpl_vars = array(
            'base_url' => $this->context->shop->getBaseURL(),
            'language' => array(
                'id_lang' => $language->id,
                'iso_code' => $language->iso_code
            ),
            'fields_value' => $this->getAddFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        $helper->override_folder = '/';     
        return $helper->generateForm(array($fields_form));
    }


     public function renderForm()
    {   
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(  

                     array(
                        'type' => 'text',
                        'label' => $this->l('Number of Product Show'),
                        'name' => 'HOTDEAL_PRODUCT_SHOW',                       
                    ),

                    array(
                        'type' => 'text',
                        'label' => $this->l('Speed'),
                        'name' => 'HOTDEAL_SPEED',                      
                    ),   

                    array(
                        'type' => 'switch',
                        'label' => $this->l('Auto Play'),
                        'name' => 'HOTDEAL_AUTO_PLAY',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),


                    array(
                        'type' => 'switch',
                        'label' => $this->l('Navigation'),
                        'name' => 'HOTDEAL_NAVIGATION',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),

                    array(
                        'type' => 'switch',
                        'label' => $this->l('Pagination'),
                        'name' => 'HOTDEAL_PAGINATION',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),


                     array(
                        'type' => 'switch',
                        'label' => $this->l('RewindNav'),
                        'name' => 'HOTDEAL_REWINDNAV',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),  


                    array(
                        'type' => 'switch',
                        'label' => $this->l('ScrollPerPage'),
                        'name' => 'HOTDEAL_SCROLLPERPAGE',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),


                    array(
                        'type' => 'switch',
                        'label' => $this->l('Views all product'),
                        'name' => 'HOTDEAL_VIEWALLPRODUCT',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),

                ),              
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitHotdeals_setting';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
      return  array(
            'HOTDEAL_PRODUCT_SHOW' => Tools::getValue('HOTDEAL_PRODUCT_SHOW', Configuration::get('HOTDEAL_PRODUCT_SHOW')),
            'HOTDEAL_SPEED' => Tools::getValue('HOTDEAL_SPEED', Configuration::get('HOTDEAL_SPEED')),
            'HOTDEAL_AUTO_PLAY' => Tools::getValue('HOTDEAL_AUTO_PLAY', Configuration::get('HOTDEAL_AUTO_PLAY')),

            'HOTDEAL_NAVIGATION' => Tools::getValue('HOTDEAL_NAVIGATION', Configuration::get('HOTDEAL_NAVIGATION')),
            'HOTDEAL_PAGINATION' => Tools::getValue('HOTDEAL_PAGINATION', Configuration::get('HOTDEAL_PAGINATION')),
            'HOTDEAL_REWINDNAV' => Tools::getValue('HOTDEAL_REWINDNAV', Configuration::get('HOTDEAL_REWINDNAV')),
            'HOTDEAL_SCROLLPERPAGE' => Tools::getValue('HOTDEAL_SCROLLPERPAGE', Configuration::get('HOTDEAL_SCROLLPERPAGE')),
            'HOTDEAL_VIEWALLPRODUCT' => Tools::getValue('HOTDEAL_VIEWALLPRODUCT', Configuration::get('HOTDEAL_VIEWALLPRODUCT')),
        );

      
    }


    public function hotdealsExists($id_hotdeals)
    {
       
        $req = 'SELECT hs.`id_hotdeals` as id_hotdeals,
         hss.`id_product`, hss.`deals_time`
        
        FROM '._DB_PREFIX_.'hotdeals hs 
        LEFT JOIN '._DB_PREFIX_.'hotdeals_items hss 
        ON (hs.id_hotdeals = hss.id_hotdeals)
        WHERE hss.`id_hotdeals` = '.(int)$id_hotdeals.'';

        $row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);

        return ($row);
    }

    public function renderList()
    {
        $hotdeals = $this->getHotdeals();
        
        foreach ($hotdeals as $key => $hotdeal) 
           $hotdeals[$key]['status'] = $this->displayStatus($hotdeal['id_hotdeals'],$hotdeal['active']) ;
        
        $this->context->smarty->assign(
                array(
                        'link' =>$this->context->link,
                        'hotdeals' => $hotdeals
                    )
            );   
            return $this->display(__FILE__, 'list.tpl');
    }

    public function headerHTML()
    {
        if (Tools::getValue('controller') != 'AdminModules' && Tools::getValue('configure') != $this->name)
            return;

        $this->context->controller->addJqueryUI('ui.sortable');
        /* Style & js for fieldset 'slides configuration' */
        $html = '<script type="text/javascript">
            $(function() {
                var $mySlides = $("#hotdeals");
                $mySlides.sortable({
                    opacity: 0.6,
                    cursor: "move",
                    update: function() {
                        var order = $(this).sortable("serialize") + "&action=updateHotdealsOrdering";
                        $.post("'.$this->context->shop->physical_uri.$this->context->shop->virtual_uri.'modules/'.$this->name.'/ajax_'.$this->name.'.php?secure_key='.$this->secure_key.'", order);
                        }
                    });
                $mySlides.hover(function() {
                    $(this).css("cursor","move");
                    },
                    function() {
                    $(this).css("cursor","auto");
                });
            });
        </script>';

        return $html;
    }


      public function displayStatus($id_hotdeals, $active)
    {
        $title = ((int)$active == 0 ? $this->l('Disabled') : $this->l('Enabled'));
        $icon = ((int)$active == 0 ? 'icon-remove' : 'icon-check');
        $class = ((int)$active == 0 ? 'btn-danger' : 'btn-success');
        $html = '<a class="btn '.$class.'" href="'.AdminController::$currentIndex.
            '&configure='.$this->name.'
                &token='.Tools::getAdminTokenLite('AdminModules').'
                &changeStatus&id_hotdeals='.(int)$id_hotdeals.'" title="'.$title.'"><i class="'.$icon.'"></i> '.$title.'</a>';

        return $html;
    }



    public function getAddFieldsValues()
    {
        $fields = array();
        
        if (Tools::isSubmit('id_hotdeals') && $this->hotdealsExists((int)Tools::getValue('id_hotdeals')))
        {

            $hotdeals = new Hotdeal((int)Tools::getValue('id_hotdeals'));
            $row = $this->getProductName($hotdeals->id_product);    
            $fields['id_hotdeals'] = (int)Tools::getValue('id_hotdeals', $hotdeals->id);
            $fields['id_product'] = (int)Tools::getValue('id_product', $hotdeals->id_product);
            $fields['product_name'] = $row['name']; 
            $fields['deals_time'] = Tools::getValue('deals_time', $hotdeals->deals_time);

        } else
                $hotdeals = new Hotdeal();

                $fields['active'] = Tools::getValue('active', $hotdeals->active);
         
        return $fields;
        
    }


    public function getProductName($id_product) 
    {
        $id_shop = $this->context->shop->id;
        $id_lang = $this->context->language->id;
        $sql = 'SELECT pl.`name` FROM `'._DB_PREFIX_.'product_lang` pl WHERE id_product = '.$id_product.' AND id_shop = '.$id_shop.' AND id_lang = '.$id_lang;      
        $row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($sql);
        return $row;        
    }


     public function hookDisplayHeader() 
    {	
        $this->context->controller->addJS(($this->_path).'views/js/jquery.plugin.js', 'all');
        $this->context->controller->addJS(($this->_path).'views/js/jquery.countdown.js', 'all');
        $this->context->controller->addJS(($this->_path).'views/js/jmscountdown.js', 'all');
               
    }

     public function hookDisplayFooter($params)
    {                             
        $hotdeals = $this->getHotdeals();
        $result = $this->getDealToShow();     
		
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
		
        $root_url = _PS_BASE_URL_.__PS_BASE_URI__; 
        $this->smarty->assign(array(
            'products' => $products_for_template,
            'hotdeals' => $hotdeals,
            'root_url' => $root_url,
            'items_num' => Configuration::get('HOTDEAL_PRODUCT_SHOW'),
            'speed' => Configuration::get('HOTDEAL_SPEED'),
            'auto' => Configuration::get('HOTDEAL_AUTO_PLAY'),

            'navigation' => Configuration::get('HOTDEAL_NAVIGATION'),
            'pagination' => Configuration::get('HOTDEAL_PAGINATION'),
            'rewindNav' => Configuration::get('HOTDEAL_REWINDNAV'),
            'scrollPerPage' => Configuration::get('HOTDEAL_SCROLLPERPAGE'),
            'viewsAll' => Configuration::get('HOTDEAL_VIEWALLPRODUCT'),
            
        ));     
        return $this->display(__FILE__, 'hotdeals.tpl');
    }


    public function hookDisplayHome($params) {
        return $this->hookDisplayFooter($params);
    }
    

    public function hookDisplayBotsl($params) 
    {
        return $this->hookDisplayFooter($params);
    }
        

    

}