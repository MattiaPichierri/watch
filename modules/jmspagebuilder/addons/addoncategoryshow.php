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
class JmsAddonCategoryshow extends JmsAddonBase
{
    public function __construct()
    {
        $this->modulename = 'jmspagebuilder';
        $this->addonname = 'categoryshow';
        $this->addontitle = 'Show Categoy';
        $this->addondesc = 'Show category in your shop';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();
    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'categories',
                'name' => 'ptcategory',
                'label' => $this->l('Category'),
                'lang' => '0',
                'desc' => 'Select parent categories',
                'default' => '',
                'usecheckbox' => '1'
            ),
            array(
                'type' => 'text',
                'name' => 'child_categories',
                'label' => $this->l('Number of Child '),
                'lang' => '0',
                'desc' => 'Number of child category you want to show, not set to show all',
                'default' => 5
            ),
            array(
                'type' => 'switch',
                'name' => 'image_enable',
                'label' => $this->l('Image Enable'),
                'lang' => '0',
                'desc' => 'Enable/Disable Category Image',
                'default' => '1'
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
        $id_cat= $addon->fields[0]->value;
        $show_img = $addon->fields[2]->value;
        $category = new Category($id_cat);
        $id_lang = $this->context->language->id;
        $name_cat = $category->name;
        $link_rewrite = $category->link_rewrite;
        if (Tools::strlen($addon->fields[1]->value) == 0) {
            return "Please select category to show!";
        }
        $filter_cat = $addon->fields[1]->value;
        $limit='';
        if ($filter_cat != '') {
            $limit='LIMIT 0,'.$filter_cat;
        }
        $query = 'SELECT hss.name, hss.id_category, hss.link_rewrite
            FROM '._DB_PREFIX_.'category hs
            LEFT JOIN '._DB_PREFIX_.'category_lang hss ON (hs.id_category = hss.id_category)
            WHERE hs.id_parent = '.$id_cat.' AND hss.id_lang = '.(int)$id_lang.' ORDER BY `name` ASC '.$limit;
        $child = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);
        $num_child=count($child);
        $this->context->smarty->assign(
            array(
                'name' => $name_cat[1],
                'link_rewrite'=>$link_rewrite[1],
                'id_cat' => $id_cat,
                'child' => $child,
                'show_img' => $show_img,
                'num_child' => $num_child,
                'image_url' => $this->root_url.'img/c/'
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
