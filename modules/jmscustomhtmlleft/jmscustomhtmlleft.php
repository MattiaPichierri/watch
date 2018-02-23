<?php
/**
* 2007-2014 PrestaShop
*
* Custom html Left hook
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2014 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(_PS_MODULE_DIR_.'jmscustomhtmlleft/Jmshtmlleft.php');
class JmsCustomhtmlLeft extends Module
{
    private $_html = '';
    private $_postErrors = array();

    public function __construct()
    {
        $this->name = 'jmscustomhtmlleft';
        $this->tab = 'front_office_features';
        $this->version = '1.1.0';
        $this->author = 'Joommasters';
        $this->bootstrap = true;
        $this->need_instance = 0;
        parent::__construct();
        $this->displayName = $this->l('Jms Custom Html Left.');
        $this->description = $this->l('Enter html codes and show them in Left position of your theme.');
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        if (parent::install() && $this->registerHook('displayLeft')) {
            $res = $this->createTables();
            $res  &= $this->installFixtures();
            return $res;
        }
        return false;
    }


    public function uninstall()
    {
        /* Deletes Module */
        if (parent::uninstall() && $this->deleteTables()) {
            return true;
        }
        return false;
    }
    /**
     * Creates tables
     */
    protected function createTables()
    {
        /* Slides */
        $res = (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jmshtml_left` (
                `html_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                `id_shop` int(10) unsigned NOT NULL,
                PRIMARY KEY (`html_id`, `id_shop`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');

        $res = (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jmshtml_left_lang` (
                `html_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                `id_lang` int(10) unsigned NOT NULL,
                `html` text NOT NULL,
                PRIMARY KEY (`html_id`, `id_lang`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');

        return $res;
    }

    /**
     * deletes tables
     */
    protected function deleteTables()
    {
        $res = Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmshtml_left`;');
        $res &= Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmshtml_left_lang`;');
        return $res;
    }
    public function getContent()
    {
        $html_id = $this->getHtmlID();
        $html = '';
        if (Tools::isSubmit('savehtmlleft')) {
            if ($html_id) {
                $info = new JmsHtmlLeft((int)$html_id);
            } else {
                $info = new JmsHtmlLeft();
            }

            $info->id_shop = $this->context->shop->id;

            $languages = Language::getLanguages(false);
            foreach ($languages as $language) {
                $info->html[$language['id_lang']] = Tools::getValue('html_'.$language['id_lang']);
            }

            if ($info->validateFields(false)) {
                $info->save();
                $this->_clearCache('jmscustomhtmlleft.tpl');
            } else {
                $html .= '<div class="conf error">'.$this->l('An error occurred while attempting to save.').'</div>';
            }
        }
        $helper = $this->initForm();
        foreach (Language::getLanguages(false) as $lang) {
            if ($html_id) {
                $info = new JmsHtmlLeft((int)$html_id);
                $helper->fields_value['html'][(int)$lang['id_lang']] = $info->html[(int)$lang['id_lang']];
            } else {
                $helper->fields_value['html'][(int)$lang['id_lang']] = Tools::getValue('html_'.(int)$lang['id_lang'], '');
            }
        }
        return $html.$helper->generateForm($this->fields_form);
    }


    public function initForm()
    {
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $this->fields_form[0]['form'] = array(
            'tinymce' => true,
            'legend' => array(
                'title' => $this->l('custom Html Left block'),
            ),
            'input' => array(
                array(
                    'type' => 'textarea',
                    'label' => $this->l('Text'),
                    'lang' => true,
                    'name' => 'html',
                    'cols' => 40,
                    'rows' => 10,
                    'class' => 'rte',
                    'autoload_rte' => true,

                )
            ),
            'submit' => array(
                'title' => $this->l('Save'),
            )
        );

        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = 'jmscustomhtmlleft';
        $helper->identifier = $this->identifier;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        foreach (Language::getLanguages(false) as $lang) {
            $helper->languages[] = array(
                'id_lang' => $lang['id_lang'],
                'iso_code' => $lang['iso_code'],
                'name' => $lang['name'],
                'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
            );
        }

        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->toolbar_scroll = true;
        $helper->title = $this->displayName;
        $helper->submit_action = 'savehtmlleft';
        $helper->toolbar_btn = array(
            'save' =>
                array(
                    'desc' => $this->l('Save'),
                    'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
                )
        );

        return $helper;
    }
    public function getHtmlID()
    {
        $this->context = Context::getContext();
        $id_shop = $this->context->shop->id;
        $id_lang = $this->context->language->id;

        $sql = 'SELECT hs.`html_id` as html_id
            FROM '._DB_PREFIX_.'jmshtml_left hs
            LEFT JOIN '._DB_PREFIX_.'jmshtml_left_lang hsl ON (hs.html_id = hsl.html_id)
            WHERE (id_shop = '.(int)$id_shop.')
            AND hsl.id_lang = '.(int)$id_lang;

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($sql);
    }
    public function hookLeftColumn()
    {
        $this->context = Context::getContext();
        $id_shop = $this->context->shop->id;
        $sql = 'SELECT hsl.`html`
            FROM '._DB_PREFIX_.'jmshtml_left hs
            LEFT JOIN '._DB_PREFIX_.'jmshtml_left_lang hsl ON (hs.html_id = hsl.html_id)
            WHERE (id_shop = '.(int)$id_shop.')';
        $html = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($sql);

        $this->smarty->assign(array(
            'html_left' => $html
        ));

        return $this->display(__FILE__, 'jmscustomhtmlleft.tpl');
    }
    public function hookRightColumn()
    {
        return $this->hookLeftColumn();
    }
    public function hookLeftColumnProduct()
    {
        return $this->hookLeftColumn();
    }
    public function installFixtures()
    {
        $return = true;
        $html_demo = '<div class="html_left"><img class="img-responsive" src="themes/jms_fluent/assets/img/demo/customhtml.jpg" alt="Banner HTML" />
<div class="banner-text">
<div class="top-text">NEW DESIGN</div>
<div class="bottom-text">FROM FLUENT STORE</div>
</div>
</div>';
        $info = new JmsHtmlLeft();
        foreach (Language::getLanguages(false) as $lang) {
            $info->html[$lang['id_lang']] = $html_demo;
        }
        $info->id_shop = $this->context->shop->id;
        $return &= $info->save();

        return $return;
    }
}
