<?php
/**
* 2007-2017 PrestaShop
*
* Jms facebook Connect
*
*  @author    joommasters <tdahhaoui@hotmail.com>
*  @copyright 2007-2017 joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class Jmsfacebookconnect extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'jmsfacebookconnect';
        $this->tab = 'front_office_features';
        $this->version = '1.1.0';
        $this->author = 'joommasters';
        $this->need_instance = 0;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Jms facebook Connect');
        $this->description = $this->l('login site by facebook ');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        if (parent::install() && $this->registerHook('header')) {
            Configuration::updateValue('JMSFB_APP_ID', '293392564478667');
            Configuration::updateValue('JMSFB_REDIRECT', 'no_redirect');
			Configuration::updateValue('JMSFB_BUTTON_SIZE', 'large');
			Configuration::updateValue('JMSFB_BUTTON_TEXT', 'continue_with');
			Configuration::updateValue('JMSFB_SHOW_FRIENDS', 0);
			Configuration::updateValue('JMSFB_LOGOUT_BUTTON', 0);
			Configuration::updateValue('JMSFB_PROFILE_INCLUDED', 0);
            $this->createFbTable();
            return true;
        }
        return false;
    }

    public function uninstall()
    {
        if (parent::uninstall()) {
            $this->deleteFbTable();
            $form_values = $this->getConfigFormValues();

            foreach (array_keys($form_values) as $key) {
                Configuration::deleteByName($key);
            }
            return true;
        }
        return false;
    }
    private function createFbTable()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jmsfacebookusers` (
           `id`            INT NOT NULL AUTO_INCREMENT,
           `id_user`       VARCHAR (100) NOT NULL,
           `id_shop_group` INT (11) NOT NULL,
           `id_shop`       INT (11) NOT NULL,
           `first_name`    VARCHAR (100) NOT NULL,
           `last_name`     VARCHAR (100) NOT NULL,
           `email`         VARCHAR (100) NOT NULL,
           `gender`        VARCHAR (100) NOT NULL,
           `birthday`      DATE NOT NULL,
           `date_add`      DATE NOT NULL,
           `date_upd`      DATE NOT NULL,
           PRIMARY KEY     ( `id` )
        ) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;';
        return Db::getInstance()->execute(trim($sql));
    }
    private function deleteFbTable()
    {
        return DB::getInstance()->execute("DROP TABLE IF EXISTS "._DB_PREFIX_."jmsfacebookusers");
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::isSubmit('submitJmsfacebookconnectModule')) == true) {
            $this->postProcess();
        }

        return $this->renderForm();
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitJmsfacebookconnectModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Settings'),
                'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'name' => 'JMSFB_APP_ID',
                        'label' => $this->l('Facebook App ID'),
						'desc' => 'see how to create app at : https://developers.facebook.com/docs/apps/register/',
						'class' => 'fixed-width-xl'
                    ),
                    array(
                        'type' => 'select',
                        'name' => 'JMSFB_REDIRECT',
                        'label' => $this->l('Redirect After Login'),
                        'options' => array(
                            'query' => array(
                                array('id' => 'no_redirect', 'name' => $this->l('No Redirect')),
                                array('id' => 'authentication_page', 'name' => $this->l('My Account page')),
								array('id' => 'home_page', 'name' => $this->l('Home Page')),
                            ),
                            'id' => 'id',
                            'name' => 'name',
                        )
                    ),
					array(
                        'type' => 'select',
                        'name' => 'JMSFB_BUTTON_SIZE',
                        'label' => $this->l('Button Size'),
                        'options' => array(
                            'query' => array(
                                array('id' => 'small', 'name' => $this->l('Small')),
                                array('id' => 'medium', 'name' => $this->l('Medium')),
								array('id' => 'large', 'name' => $this->l('Large')),
                            ),
                            'id' => 'id',
                            'name' => 'name',
                        ),
						'default' => 'large'
                    ),
					array(
                        'type' => 'select',
                        'name' => 'JMSFB_BUTTON_TEXT',
                        'label' => $this->l('Button Text'),
                        'options' => array(
                            'query' => array(
                                array('id' => 'continue_with', 'name' => $this->l('Continue With ...')),
                                array('id' => 'login_with', 'name' => $this->l('Login With ...'))
                            ),
                            'id' => 'id',
                            'name' => 'name',
                        ),
						'default' => 'continue_with'
                    ),
					array(
						'type' => 'switch',
						'label' => $this->l('Show Friends Faces'),
						'name' => 'JMSFB_SHOW_FRIENDS',
						'desc' => $this->l('Show/Hide Profile Photo of friend who have used this site.'),
						'values'    => array(
							array('id'    => 'active_on','value' => 1,'label' => $this->l('Show')),
							array('id'    => 'active_off','value' => 0,'label' => $this->l('Hide'))
						)
					),
					array(
						'type' => 'switch',
						'label' => $this->l('Enable Logout Button'),
						'name' => 'JMSFB_LOGOUT_BUTTON',
						'desc' => $this->l('Whether the logout button is shown to logged in users.'),
						'values'    => array(
							array('id'    => 'active_on','value' => 1,'label' => $this->l('Show')),
							array('id'    => 'active_off','value' => 0,'label' => $this->l('Hide'))
						)
					),
					array(
						'type' => 'switch',
						'label' => $this->l('Show name and profile picture when signed'),
						'name' => 'JMSFB_PROFILE_INCLUDED',
						'desc' => $this->l('Include name and profile picture when user is signed into Facebook.'),
						'values'    => array(
							array('id'    => 'active_on','value' => 1,'label' => $this->l('Show')),
							array('id'    => 'active_off','value' => 0,'label' => $this->l('Hide'))
						)
					)
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'JMSFB_APP_ID' => Configuration::get('JMSFB_APP_ID'),
            'JMSFB_REDIRECT' => Configuration::get('JMSFB_REDIRECT'),
			'JMSFB_BUTTON_SIZE' => Configuration::get('JMSFB_BUTTON_SIZE'),
			'JMSFB_BUTTON_TEXT' => Configuration::get('JMSFB_BUTTON_TEXT'),
			'JMSFB_SHOW_FRIENDS' => (int)Configuration::get('JMSFB_SHOW_FRIENDS'),
			'JMSFB_LOGOUT_BUTTON' => (int)Configuration::get('JMSFB_LOGOUT_BUTTON'),
			'JMSFB_PROFILE_INCLUDED' => (int)Configuration::get('JMSFB_PROFILE_INCLUDED')
        );
    }

    /**
     * Save form data.
     */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key));
        }
    }


    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        $fb_enable = false;
        if (!$this->context->customer->isLogged()) {
            $fb_enable = true;
        }        
        $this->context->smarty->assign(array(
            'fb_on' => $fb_enable,
            'login_page' => Configuration::get('JMSFB_APP_ID'),
            'link' => $this->context->link,
            'JMSFB_REDIRECT' => Configuration::get('JMSFB_REDIRECT'),
			'JMSFB_BUTTON_SIZE' => Configuration::get('JMSFB_BUTTON_SIZE'),
			'JMSFB_BUTTON_TEXT' => Configuration::get('JMSFB_BUTTON_TEXT'),
			'JMSFB_SHOW_FRIENDS' => (int)Configuration::get('JMSFB_SHOW_FRIENDS'),
			'JMSFB_LOGOUT_BUTTON' => (int)Configuration::get('JMSFB_LOGOUT_BUTTON'),
			'JMSFB_PROFILE_INCLUDED' => (int)Configuration::get('JMSFB_PROFILE_INCLUDED')
        ));
        return $this->fetch('module:'.$this->name.'/views/templates/hook/header.tpl');
    }    
}
