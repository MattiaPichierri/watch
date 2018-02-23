<?php
/**
* 2007-2017 PrestaShop
*
* Jms Blog
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

include_once(_PS_MODULE_DIR_.'jmsblog/class/JmsBlogHelper.php');
class JmsblogCategoryModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    public $display_column_left = false;

    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {

        parent::initContent();
        $category_id = (int)Tools::getValue('category_id');
        $category   = JmsBlogHelper::getCategory($category_id);
        $posts  = $this->getPosts($category_id);
        $jmsblog_setting = JmsBlogHelper::getSettingFieldsValues();
        for ($i = 0; $i < count($posts); $i++) {
            $posts[$i]['introtext'] = JmsBlogHelper::genIntrotext($posts[$i]['introtext'], $jmsblog_setting['JMSBLOG_INTROTEXT_LIMIT']);
            $posts[$i]['comment_count'] = JmsBlogHelper::getCommentCount($posts[$i]['post_id']);
        }
        $this->context->controller->addCSS($this->module->getPathUri().'views/css/style.css', 'all');
        $this->context->smarty->assign(array('meta_title' => $category['title']));
		if(Tools::getValue('layout') != '') {
			$category_layout = Tools::getValue('layout').'.tpl';
		} elseif (Configuration::get('JMSBLOG_CATEGORY_LAYOUT')) {
			$category_layout = Configuration::get('JMSBLOG_CATEGORY_LAYOUT');
		}		
        $this->context->smarty->assign(array(
            'posts' => $posts,
            'current_category' => $category,
            'jmsblog_setting' => $jmsblog_setting,
            'image_baseurl' => $this->module->getPathUri().'views/img/',
			'category_layout' => $category_layout
        ));
			
        $this->setTemplate('module:jmsblog/views/templates/front/category.tpl');
    }

    public function getPosts($category_id = 0)
    {
        $this->context = Context::getContext();
        $id_lang = $this->context->language->id;
        $sql = '
            SELECT hss.`post_id`,hss.`link_video`, hssl.`image`,hss.`category_id`, hss.`ordering`, hss.`active`, hssl.`title`, hss.`created`, hss.`modified`, hss.`views`,
            hssl.`alias`, hssl.`fulltext`, hssl.`introtext`,hssl.`meta_desc`, hssl.`meta_key`, hssl.`key_ref`, catsl.`title` AS category_name, catsl.`alias` AS category_alias
            FROM '._DB_PREFIX_.'jmsblog_posts hss
            LEFT JOIN '._DB_PREFIX_.'jmsblog_posts_lang hssl ON (hss.`post_id` = hssl.`post_id`)
            LEFT JOIN '._DB_PREFIX_.'jmsblog_categories_lang catsl ON (catsl.`category_id` = hss.`category_id`)
            WHERE hss.`active` = 1 AND hssl.`id_lang` = '.(int)$id_lang.' AND catsl.`id_lang` = '.(int)$id_lang.
            ' AND hss.`category_id` = '.$category_id.'
            GROUP BY hss.`post_id`
            ORDER BY hss.`created` DESC';
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }
}
