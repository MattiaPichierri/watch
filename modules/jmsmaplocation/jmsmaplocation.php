<?php
/**
* 2007-2015 PrestaShop
*
* Jms Map Location Information
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2015 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_'))
	exit;
include_once(_PS_MODULE_DIR_.'jmsmaplocation/JmsLocation.php');
class JmsMaplocation extends Module
{
	private $_html = '';
	private $_postErrors = array();

	public function __construct()
	{
		$this->name = 'jmsmaplocation';
		$this->tab = 'front_office_features';
		$this->version = '1.1.0';
		$this->author = 'Joommasters';
		$this->need_instance = 0;		
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = $this->l('Jms Map Location.');
		$this->description = $this->l('Easy to create and show location on map.');
	}

	public function install()
	{
		if (parent::install() && $this->registerHook('actionShopDataDuplication'))
		{
			$res = Configuration::updateValue('JMS_MAPLOC_SHOW_DROPDOWN', '1');
			$res &= Configuration::updateValue('JMS_MAPLOC_DROPDOWN_POS', 'topleft');						
			/* Creates tables */
			$res &= $this->createTables();
			if ($res)
				$this->installSamples();
			return $res;	
		}		
		return false;		
	}
	private function installSamples()
	{		
		$languages = Language::getLanguages(false);	
		$locs = array();
		$locs[] = array('title' => 'Store 1','address' => '93 Rue de Rennes, Paris, France','latitude' => '48.8495338','longitude' => '2.329648099999986');
		$locs[] = array('title' => 'Store 2','address' => '9 Boulevard Beaumarchais, Paris, France','latitude' => '48.8544817','longitude' => '2.368524999999977');
		$locs[] = array('title' => 'Store 3','address' => '115 Rue Raymond Losserand, Paris, France','latitude' => '48.8326152','longitude' => '2.315880800000059');
		$locs[] = array('title' => 'Store 4','address' => '7 Avenue des Gobelins, Paris, France','latitude' => '48.8382385','longitude' => '2.3512902999999596');
		$locs[] = array('title' => 'Store 5','address' => '16 Rue Jean Bologne, Paris, France','latitude' => '48.8564197','longitude' => '2.2798936000000367');			  			  			  			  
		for ($i = 0; $i < 5; ++$i)
		{
			$loc = new JmsLocation();						
			$loc->class = '';
			$loc->address = $locs[$i]['address'];
			$loc->latitude = $locs[$i]['latitude'];
			$loc->longitude = $locs[$i]['longitude'];
			$loc->active = 1;
			$loc->icon = 'default';		
			foreach ($languages as $language)
			{
				$loc->title[$language['id_lang']] = $locs[$i]['title'];
				$loc->description[$language['id_lang']] = 'Proin ornare quam tortor, a scelerisque turpis elementum mattis. Integer mollis ante at lacus consequat, ac vestibulum dolor semper. Sed molestie nunc at nibh aliquet';				
				$loc->url[$language['id_lang']] = '#';
			}
			$loc->add();		
		}		
	}
	public function uninstall()
	{
		/* Deletes Module */
		if (parent::uninstall())
		{
			/* Deletes tables */
			$res = $this->deleteTables();
			/* Unsets configuration */
			$res &= Configuration::deleteByName('JMS_MAPLOC_SHOW_DROPDOWN');
			$res &= Configuration::deleteByName('JMS_MAPLOC_DROPDOWN_POS');						
			return $res;
		}
		return false;
	}
	/**
	 * Creates tables
	 */
	protected function createTables()
	{	
		$res = (bool)Db::getInstance()->execute('
			CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jmsmaploc` (
				`id_loc` int(10) unsigned NOT NULL AUTO_INCREMENT,
				`id_shop` int(10) unsigned NOT NULL,
				PRIMARY KEY (`id_loc`, `id_shop`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
		');
		
		$res &= Db::getInstance()->execute('
			CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jmsmaploc_locs` (
			  `id_loc` int(10) unsigned NOT NULL AUTO_INCREMENT,			  
			  `class` varchar(20) NOT NULL,
			  `address` varchar(255) NOT NULL,
			  `latitude` varchar(20) NOT NULL,
			  `longitude` varchar(20) NOT NULL,
			  `icon` varchar(20) NOT NULL,
			  `active` tinyint(1) unsigned NOT NULL DEFAULT \'0\',
			  PRIMARY KEY (`id_loc`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
		');
		$res = (bool)Db::getInstance()->execute('
			CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jmsmaploc_locs_lang` (
				`id_loc` int(10) unsigned NOT NULL AUTO_INCREMENT,
				`id_lang` int(10) unsigned NOT NULL,
				`title` varchar(255) NOT NULL,
			  	`description` text NOT NULL,			  	
			  	`url` varchar(255) NOT NULL,			  	
				PRIMARY KEY (`id_loc`, `id_lang`)
			) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
		');		

		return $res;
	}

	/**
	 * deletes tables
	 */
	protected function deleteTables()
	{
		$locs = $this->getLocs();
		
		foreach ($locs as $loc)
		{
			$to_del = new JmsLocation($loc['id_loc']);
			$to_del->delete();
		}
		
		Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmsmaploc`;');
		Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmsmaploc_locs`;');
		Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmsmaploc_locs_lang`;');
		return true;
	}
	
	public function getContent()
	{
		$this->_html .= $this->headerHTML();

		/* Validate & process */
		if (Tools::isSubmit('submitMapLoc') || Tools::isSubmit('delete_id_loc') || Tools::isSubmit('submitLoc') || Tools::isSubmit('changeStatus'))
		{
			if ($this->_postValidation())
			{
				$this->_postProcess();
				$this->_html .= $this->renderForm();
				$this->_html .= $this->renderList();
			}
			else
				$this->_html .= $this->renderAddForm();

			$this->clearCache();
		}
		elseif (Tools::isSubmit('addLoc') || (Tools::isSubmit('id_loc') && $this->locExists((int)Tools::getValue('id_loc'))))
			$this->_html .= $this->renderAddForm();
		else
		{
			$this->_html .= $this->renderForm();
			$this->_html .= $this->renderList();
		}
		return $this->_html;
	}
	
	private function _postValidation()
	{
		$errors = array();

		/* Validation for configuration */
		if (Tools::isSubmit('changeStatus'))
		{
			if (!Validate::isInt(Tools::getValue('id_loc')))
				$errors[] = $this->l('Invalid Location');
		}
		/* Validation for Location */
		elseif (Tools::isSubmit('submitLoc'))
		{	
			/* If edit : checks id_loc */
			if (Tools::isSubmit('id_loc'))
			{					
				if (!Validate::isInt(Tools::getValue('id_loc')) && !$this->locExists(Tools::getValue('id_loc')))
					$errors[] = $this->l('Invalid id_loc');
			}
			
			$languages = Language::getLanguages(false);
			foreach ($languages as $language)
			{
				if (Tools::strlen(Tools::getValue('title_'.$language['id_lang'])) > 255)
					$errors[] = $this->l('The title is too long.');				
				if (Tools::strlen(Tools::getValue('url_'.$language['id_lang'])) > 255)
					$errors[] = $this->l('The URL is too long.');
				if (Tools::strlen(Tools::getValue('description_'.$language['id_lang'])) > 4000)
					$errors[] = $this->l('The description is too long.');
				if (Tools::strlen(Tools::getValue('url_'.$language['id_lang'])) > 0 && !Validate::isUrl(Tools::getValue('url_'.$language['id_lang'])))
					$errors[] = $this->l('The URL format is not correct.');
			}
			
			$id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
			if (Tools::strlen(Tools::getValue('title_'.$id_lang_default)) == 0)
				$errors[] = $this->l('The title is not set.');
		} /* Validation for deletion */
		elseif (Tools::isSubmit('delete_id_loc') && (!Validate::isInt(Tools::getValue('delete_id_loc')) || !$this->locExists((int)Tools::getValue('delete_id_loc'))))
			$errors[] = $this->l('Invalid id_loc');

		/* Display errors if needed */
		if (count($errors))
		{
			$this->_html .= $this->displayError(implode('<br />', $errors));
			return false;
		}

		/* Returns if validation is ok */
		return true;
	}
	private function _postProcess()
	{
		$errors = array();

		/* Processes Hotspot */
		if (Tools::isSubmit('submitMapLoc'))
		{			
			$res = Configuration::updateValue('JMS_MAPLOC_SHOW_DROPDOWN', (int)(Tools::getValue('JMS_MAPLOC_SHOW_DROPDOWN')));
			$res &= Configuration::updateValue('JMS_MAPLOC_DROPDOWN_POS', (Tools::getValue('JMS_MAPLOC_DROPDOWN_POS')));						
							
			$this->clearCache();			
			if (!$res)
				$errors[] = $this->displayError($this->l('The configuration could not be updated.'));
			else
				Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=6&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
		} /* Process loc status */
		elseif (Tools::isSubmit('changeStatus') && Tools::isSubmit('id_loc'))
		{
			$loc = new JmsLocation((int)Tools::getValue('id_loc'));
			if ($loc->active == 0)
				$loc->active = 1;
			else
				$loc->active = 0;
			$res = $loc->update();
			$this->clearCache();
			$this->_html .= ($res ? $this->displayConfirmation($this->l('Configuration updated')) : $this->displayError($this->l('The configuration could not be updated.')));
		} /* Processes location */
		elseif (Tools::isSubmit('submitLoc'))
		{
			
			/* Sets ID if needed */			
			if (Tools::getValue('id_loc'))
			{					
				$loc = new JmsLocation((int)Tools::getValue('id_loc'));
				if (!Validate::isLoadedObject($loc))
				{
					$this->_html .= $this->displayError($this->l('Invalid id_loc'));
					return;
				}				
			}
			else
				$loc = new JmsLocation();			
			/* Sets class */			
			$loc->class = Tools::getValue('class');
			/* Sets active */
			$loc->active = (int)Tools::getValue('active');
			$loc->address = Tools::getValue('address');
			$loc->latitude = Tools::getValue('latitude');
			$loc->longitude = Tools::getValue('longitude');
			$loc->icon = Tools::getValue('icon');				
			/* Sets each langue fields */
			$languages = Language::getLanguages(false);			
			foreach ($languages as $language)
			{
				$loc->title[$language['id_lang']] = Tools::getValue('title_'.$language['id_lang']);
				$loc->url[$language['id_lang']] = Tools::getValue('url_'.$language['id_lang']);				
				$loc->description[$language['id_lang']] = Tools::getValue('description_'.$language['id_lang']);				
			}
			
			/* Processes if no errors  */			
			if (!$errors)
			{
				
				/* Adds */
				if (!Tools::getValue('id_loc'))
				{
					if (!$loc->add())
						$errors[] = $this->displayError($this->l('The location could not be added.'));
				}
				
				/* Update */
				elseif (!$loc->update()) 				
					$errors[] = $this->displayError($this->l('The location could not be updated.'));				
				$this->clearCache();
			}
		} /* Deletes */
		elseif (Tools::isSubmit('delete_id_loc'))
		{
			$loc = new JmsLocation((int)Tools::getValue('delete_id_loc'));
			$res = $loc->delete();
			$this->clearCache();
			if (!$res)
				$this->_html .= $this->displayError('Could not delete');
			else
				Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=1&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
		}

		/* Display errors if needed */
		if (count($errors))
			$this->_html .= $this->displayError(implode('<br />', $errors));
		elseif (Tools::isSubmit('submitLoc') && Tools::getValue('id_loc'))
			Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
		elseif (Tools::isSubmit('submitLoc'))
			Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf=3&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
	}
	public function clearCache()
	{
		$this->_clearCache('jmsmaplocation.tpl');
	}
	public function hookActionShopDataDuplication($params)
	{
		Db::getInstance()->execute('
		INSERT IGNORE INTO '._DB_PREFIX_.'jmsmaploc (id_loc, id_shop)
		SELECT id_loc, '.(int)$params['new_id_shop'].'
		FROM '._DB_PREFIX_.'jmsmaploc
		WHERE id_shop = '.(int)$params['old_id_shop']);
		$this->clearCache();
	}
	public function headerHTML()
	{
		if (Tools::getValue('controller') != 'AdminModules' && Tools::getValue('configure') != $this->name)
			return;

		$this->context->controller->addJqueryUI('ui.sortable');
		/* Style & js for fieldset 'locations configuration' */
		$html = '<script type="text/javascript">
			$(function() {
				var $myLocs = $("#locations");
				$myLocs.sortable({
					opacity: 0.6,
					cursor: "move",
					update: function() {						
						}
					});
				$myLocs.hover(function() {
					$(this).css("cursor","move");
					},
					function() {
					$(this).css("cursor","auto");
				});
			});
		</script>';

		return $html;
	}

	public function getLocs($active = null)
	{
		$this->context = Context::getContext();
		$id_shop = $this->context->shop->id;
		$id_lang = $this->context->language->id;
		
		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT hs.`id_loc`, hss.`icon`, hss.`active`, hssl.`title`, hss.`address`,
			hssl.`url`, hssl.`description`,hss.`class`,hss.`latitude`, hss.`longitude`
			FROM '._DB_PREFIX_.'jmsmaploc hs
			LEFT JOIN '._DB_PREFIX_.'jmsmaploc_locs hss ON (hs.`id_loc` = hss.`id_loc`)
			LEFT JOIN '._DB_PREFIX_.'jmsmaploc_locs_lang hssl ON (hss.`id_loc` = hssl.`id_loc`)
			WHERE `id_shop` = '.(int)$id_shop.'
			AND hssl.`id_lang` = '.(int)$id_lang.
			($active ? ' AND hss.`active` = 1' : ' ').'
			ORDER BY hss.`id_loc`'
		);
	}
	public function getActLocs($active = null)
	{
		$this->context = Context::getContext();
		$id_shop = $this->context->shop->id;
		$id_lang = $this->context->language->id;
		
		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT hs.`id_loc`, hss.`icon`, hss.`active`, hssl.`title`, hss.`address`,
			hssl.`url`, hssl.`description`,hss.`class`,hss.`latitude`, hss.`longitude`
			FROM '._DB_PREFIX_.'jmsmaploc hs
			LEFT JOIN '._DB_PREFIX_.'jmsmaploc_locs hss ON (hs.`id_loc` = hss.`id_loc`)
			LEFT JOIN '._DB_PREFIX_.'jmsmaploc_locs_lang hssl ON (hss.`id_loc` = hssl.`id_loc`)
			WHERE `id_shop` = '.(int)$id_shop.'
			AND hss.`active` = 1 AND hssl.`id_lang` = '.(int)$id_lang.
			($active ? ' AND hss.`active` = 1' : ' ').'
			ORDER BY hss.`id_loc`'
		);
	}

	public function displayStatus($id_loc, $active)
	{
		$title = ((int)$active == 0 ? $this->l('Disabled') : $this->l('Enabled'));
		$icon = ((int)$active == 0 ? 'icon-remove' : 'icon-check');
		$class = ((int)$active == 0 ? 'btn-danger' : 'btn-success');
		$html = '<a class="btn '.$class.'" href="'.AdminController::$currentIndex.
			'&configure='.$this->name.'
				&token='.Tools::getAdminTokenLite('AdminModules').'
				&changeStatus&id_loc='.(int)$id_loc.'" title="'.$title.'"><i class="'.$icon.'"></i> '.$title.'</a>';

		return $html;
	}

	public function locExists($id_loc)
	{
		$req = 'SELECT hs.`id_loc`
				FROM `'._DB_PREFIX_.'jmsmaploc` hs
				WHERE hs.`id_loc` = '.(int)$id_loc;
		$row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);

		return ($row);
	}

	public function renderList()
	{
		$locs = $this->getLocs();
		foreach ($locs as $key => $loc)
			$locs[$key]['status'] = $this->displayStatus($loc['id_loc'], $loc['active']);

		$this->context->smarty->assign(
			array(
				'link' => $this->context->link,
				'locs' => $locs
				)
		);

		return $this->display(__FILE__, 'list.tpl');
	}
	
	public function renderAddForm()
	{
		$this->context->controller->addCSS(($this->_path).'views/css/admin_style.css', 'all');
		$this->context->controller->addJqueryUI('ui.draggable');
		$icons = array();

		$icons[] = array('name' => 'default');
		$fields_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Location informations'),
					'icon' => 'icon-cogs'
				),
				'input' => array(
					array('type' => 'text','label' => $this->l('Address'),'name' => 'address','desc' => $this->l('Enter address to show location on map')),
					array('type' => 'map','label' => $this->l('Map'),'name' => 'map'),		
					array('type' => 'text','label' => $this->l('Latitude'),'name' => 'latitude'),					
					array('type' => 'text','label' => $this->l('Longitude'),'name' => 'longitude'),					
					array('type' => 'text','label' => $this->l('Title'),'name' => 'title','lang' => true),
					array('type' => 'text','label' => $this->l('Class'),'name' => 'class'),
					array('type' => 'select','lang' => true,'label' => $this->l('Icon'),'name' => 'icon','desc' => $this->l('Please Select Icon type'),'options' => array('query' => $icons,'id' => 'name','name' => 'name')),
					array('type' => 'text','label' => $this->l('URL'),'name' => 'url','lang' => true),					
					array('type' => 'textarea','label' => $this->l('Description'),'name' => 'description','autoload_rte' => true,'lang' => true),
					array('type' => 'switch','label' => $this->l('Active'),'name' => 'active','is_bool' => true,
						'values' => array(
							array('id' => 'active_on','value' => 1,'label' => $this->l('Yes')),
							array('id' => 'active_off','value' => 0,'label' => $this->l('No'))
						),
					),
				),
				'submit' => array('title' => $this->l('Save'))
			),
		);

		if (Tools::isSubmit('id_loc') && $this->locExists((int)Tools::getValue('id_loc')))		
			$fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'id_loc');								
		$helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table = $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$this->fields_form = array();
		$helper->module = $this;
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'submitLoc';
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
		//print_r($fields_form); exit;
		return $helper->generateForm(array($fields_form));
	}

	public function renderForm()
	{		
		$positions = array();

		$positions[] = array('name' => 'topleft');
		$positions[] = array('name' => 'topright');
		$positions[] = array('name' => 'bottomleft');
		$positions[] = array('name' => 'bottomright');			  			    		  
		$fields_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Settings'),
					'icon' => 'icon-cogs'
				),
				'input' => array(					
					array(
						'type' => 'switch',
						'label' => $this->l('Show Dropdown Selection'),
						'name' => 'JMS_MAPLOC_SHOW_DROPDOWN',
						'values' => array(
							array('id' => 'active_on','value' => 1,'label' => $this->l('Enabled')),
							array('id' => 'active_off','value' => 0,'label' => $this->l('Disabled'))
						),
					),
					array(
						'type' => 'select',
						'lang' => true,
						'label' => $this->l('Dropdown Position'),
						'name' => 'JMS_MAPLOC_DROPDOWN_POS',
						'desc' => $this->l('Please Select a Position for dropdown box'),
						'options' => array('query' => $positions,'id' => 'name','name' => 'name')
					),													
				),				
				'submit' => array('title' => $this->l('Save'))
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
		$helper->submit_action = 'submitMapLoc';
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
		return array(
			'JMS_MAPLOC_SHOW_DROPDOWN' => Tools::getValue('JMS_MAPLOC_SHOW_DROPDOWN', Configuration::get('JMS_MAPLOC_SHOW_DROPDOWN')),
			'JMS_MAPLOC_DROPDOWN_POS' => Tools::getValue('JMS_MAPLOC_DROPDOWN_POS', Configuration::get('JMS_MAPLOC_DROPDOWN_POS')),						
		);
	}

	public function getAddFieldsValues()
	{
		$fields = array();

		if (Tools::isSubmit('id_loc') && $this->locExists((int)Tools::getValue('id_loc')))
		{
			$loc = new JmsLocation((int)Tools::getValue('id_loc'));
			$fields['id_loc'] = (int)Tools::getValue('id_loc', $loc->id);
		}
		else
			$loc = new JmsLocation();

		$fields['active'] = Tools::getValue('active', $loc->active);
		$fields['class'] = Tools::getValue('class', $loc->class);
		$fields['address'] = Tools::getValue('address', $loc->address);
		$fields['latitude'] = Tools::getValue('latitude', $loc->latitude);
		$fields['longitude'] = Tools::getValue('longitude', $loc->longitude);
		$fields['icon'] = Tools::getValue('icon', $loc->icon);			
		$languages = Language::getLanguages(false);

		foreach ($languages as $lang)
		{			
			$fields['title'][$lang['id_lang']] = Tools::getValue('title_'.(int)$lang['id_lang'], $loc->title[$lang['id_lang']]);
			$fields['url'][$lang['id_lang']] = Tools::getValue('url_'.(int)$lang['id_lang'], $loc->url[$lang['id_lang']]);			
			$fields['description'][$lang['id_lang']] = Tools::getValue('description_'.(int)$lang['id_lang'], $loc->description[$lang['id_lang']]);
		}

		return $fields;
	}
		
	public function hookFooter($params)
	{	
		if (!isset($this->context->controller->php_self))
			return;
		$this->context->controller->addCSS(($this->_path).'views/css/style.css', 'all');	
		$locs = $this->getActLocs();		
		$this->smarty->assign(array(
			'base_url' => $this->context->shop->getBaseURL(),
			'locs' => $locs,			
			'maploc_show_dropdown' => Configuration::get('JMS_MAPLOC_SHOW_DROPDOWN'),
			'maploc_dropdown_pos' => Configuration::get('JMS_MAPLOC_DROPDOWN_POS')
		));		
		return $this->display(__FILE__, 'jmsmaplocation.tpl');
	}
	public function hookDisplayBotsl($params)
	{	
		return $this->hookFooter($params);

	}
}
