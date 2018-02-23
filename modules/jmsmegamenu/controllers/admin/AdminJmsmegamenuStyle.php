<?php
/**
* 2007-2017 PrestaShop
*
* Jms Mega Menu
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(_PS_MODULE_DIR_.'jmsmegamenu/class/JmsMegaMenuHelper.php');
class AdminJmsmegamenuStyleController extends ModuleAdminController
{
    public function __construct()
    {
        $this->name = 'jmsmegamenu';
        $this->tab = 'front_office_features';
        $this->bootstrap = true;
        $this->lang = true;
        $this->context = Context::getContext();
        $this->secure_key = Tools::encrypt($this->name);
        $this->menu = '';
        $this->children = array();
        $this->url_root = JmsMegaMenuHelper::getUrl();
        $this->_items = array();
        $this->gens = array();
        $this->settings = (array)Tools::jsonDecode('{"class":"aaa","icon":"fa fa-user","group":1}');
        parent::__construct();
    }

    public function renderList()
    {
        //print_r($this->settings); exit;
        $this->_html = $this->headerHTML();
        /* Validate & process */
        if (Tools::isSubmit('submitStyle')) {
            if ($this->_postValidation()) {
                $this->_postProcess();
            } else {
                $this->_html .= $this->renderMenuStyle();
            }
        } else {
            $this->_html .= $this->renderMenuStyle();
        }
        return $this->_html;
    }

    private function _postValidation()
    {
        $errors = array();

        /* Validation for configuration */
        if (Tools::isSubmit('submitStyle')) {
            if (!Validate::isInt(Tools::getValue('status_id_post'))) {
                $errors[] = $this->l('Invalid Post');
            }
        }
        /* Display errors if needed */
        if (count($errors)) {
            $this->_html .= Tools::displayError(implode('<br />', $errors));
            return false;
        }
        /* Returns if validation is ok */
        return true;
    }
    private function _postProcess()
    {
        $errors = array();

        if (count($errors)) {
            $this->_html .= Tools::displayError(implode('<br />', $errors));
        } elseif (Tools::isSubmit('submitStyle')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmsmegamenuStyle', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        }
    }


    public function headerHTML()
    {
        if (Tools::getValue('controller') != 'AdminJmsmegamenuStyle' && Tools::getValue('configure') != $this->name) {
            return;
        }
        $this->context->controller->addJqueryUI('ui.sortable');
        $html = '<script type="text/javascript">
            $(function() {
                var $posts = $("#posts");
                $posts.sortable({
                    opacity: 0.6,
                    cursor: "move",
                    update: function() {
                        var order = $(this).sortable("serialize") + "&action=updatePostOrdering";
                        $.post("'.$this->url_root.'modules/'.$this->name.'/ajax_'.$this->name.'.php?secure_key='.$this->secure_key.'", order);
                    },
                    stop: function( event, ui ) {
                        showSuccessMessage("Saved!");
                    }
                });
                $posts.hover(function() {
                    $(this).css("cursor","move");
                    },
                    function() {
                    $(this).css("cursor","auto");
                });
            });
        </script>';
        return $html;
    }

    public function beginmenu()
    {
        $this->menu .= '<div id="jms-megamenu-container" class="navbar clearfix"><div class="jms-megamenu"><ul class="nav level0">';
    }

    public function endmenu()
    {
        $this->menu .= '</ul></div></div>';
    }

    public function nav()
    {
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $id_lang = $context->language->id;
        $sql = 'SELECT a.`mitem_id`
                FROM '._DB_PREFIX_.'jmsmegamenu AS a
                INNER JOIN '._DB_PREFIX_.'jmsmegamenu_lang AS b
                ON a.`mitem_id` = b.`mitem_id`
                WHERE a.`active` = 1 AND `parent_id` = 0 AND (a.`id_shop` = '.(int)$id_shop.')
                AND b.`id_lang` = '.(int)$id_lang.
                ' ORDER BY a.`ordering`';
        $items = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        foreach ($items as $item) {
            $this->genItem($item['mitem_id']);
        }
    }

    public function genItem($itemid)
    {
        $item = $this->_items[$itemid];
        $this->context = Context::getContext();
        $lvl     = $this->_items[$itemid]['level'];
        $params = isset($item['params']) ? $item['params'] : array();
        if ($params) {
            $setting = (array)Tools::jsonDecode($params);
        }
        if (!in_array($itemid, $this->gens)) {
            $class = 'class="menu-item';
            $data = ' data-id="'.$itemid.'" data-level="'.$lvl.'"';
            if (isset($this->children[$itemid])) {
                $class .= ' mega';
            }
            if (isset($setting['group'])) {
                $class .= ' group';
                $data .= ' data-group="'.$setting['group'].'"';
            }
            if (isset($setting['title']) && ((int)$setting['title']==0)) {
                $data .= ' data-title="0"';
            } else {
                $data .= ' data-title="1"';
            }
            if (isset($setting['class'])) {
                $class .= ' '.$setting['class'];
                $data .= ' data-class="'.$setting['class'].'"';
            }
            if (isset($setting['align'])) {
                $class .= ' menu-align-'.$setting['align'];
                $data .= ' data-align="'.$setting['align'].'"';
            }
            if (isset($setting['icon'])) {
                $data .= ' data-icon="'.$setting['icon'].'"';
            }
            $this->menu .= '<li '.$class.'"'.$data.'>';
            $this->menu .= '<a';
            if (($item['level'] == 0) && isset($this->children[$itemid])) {
                $this->menu .= ' class="dropdown-toggle" data-toggle="dropdown" ';
            }
            $this->menu .= '>';
            if (isset($setting['icon'])) {
                $this->menu .= '<i class="'.$setting['icon'].'"></i>';
            }
            $this->menu .=  $item['name'];
            if (($item['level'] == 0) && isset($this->children[$itemid])) {
                $this->menu .= '<em class="caret"></em>';
            }
            $this->menu .= '</a>';

            if ($item['type'] == 'module' || $item['type'] == 'html') {
                $this->menu .= '<div class="mod-content"></div>';
            }
            if (isset($this->children[$itemid])) {
                $this->beginDropdown($itemid);
                $this->mega($itemid);
                $this->endDropdown();
            }
            $this->menu .= '</li>';
        }
        $this->gens[] = $itemid;
    }
    public function beginDropdown($itemid)
    {
        $params = isset($this->_items[$itemid]['params']) ? $this->_items[$itemid]['params'] : array();
        if ($params) {
            $params_arr = (array)Tools::jsonDecode($params);
            if (isset($params_arr['sub'])) {
                $setting = $params_arr['sub'];
            }
        }
        $extra_class = '';
        $extra_data = '';
        $extra_style = '';
        if (isset($setting->class) && $setting->class) {
            $extra_class .= ' '.$setting->class;
            $extra_data .= ' data-class="'.$setting->class.'"';
        }
        if (isset($setting->fullwidth) && (int)$setting->fullwidth) {
            $extra_class .= ' container';
            $extra_data .= ' data-fullwidth="1"';
        }
        if (isset($setting->width) && (int)$setting->width) {
            $extra_style = ' style="width:'.$setting->width.'px"';
            $extra_data .= ' data-width="'.$setting->width.'"';
        }
        $this->menu .= '<div class="nav-child dropdown-menu mega-dropdown-menu'.$extra_class.'"'.$extra_data.$extra_style.'><div class="mega-dropdown-inner">';
    }
    public function endDropdown()
    {
        $this->menu .= '</div></div>';
    }
    public function beginRow()
    {
        $this->menu .= '<div class="row">';
    }
    public function endRow()
    {
        $this->menu .= '</div>';
    }
    public function mega($itemid)
    {

        $item = $this->_items[$itemid];
        $params = isset($item['params']) ? $item['params'] : array();
        $setting = (array)Tools::jsonDecode($params);
        if (isset($setting['sub'])) {
            $rows = $setting['sub']->row;
            $i = 0;
            foreach ($rows as $row) {
                $row_show = 0;
                foreach ($row as $col) {
                    $col_show = 0;
                    foreach ($col->items as $_item) {
                        if (isset($this->_items[$_item->item]['parent_id']) && (int)$this->_items[$_item->item]['parent_id'] == $itemid) {
                            $col_show++;
                        }
                    }
                    $col->col_show = $col_show;
                    $row_show += $col_show;
                }
                $rows[$i]['row_show'] = $row_show;
                $i++;
            }
            //$rows_tmp = $rows;
            //print_r($rows);
            foreach ($rows as $row) {
                if ((int)$row['row_show'] == 0) {
                    continue;
                }
                $this->beginRow();
                foreach ($row as $col) {
                    $width = isset($col->width) ? $col->width : 12;
                    $col_class = isset($col->class) ? $col->class : '';
                    if (!isset($col->col_show) || (((int)$col->col_show) == 0)) {
                        continue;
                    }
                    $this->beginCol($width, $col_class);
                    foreach ($col->items as $_item) {
                        if (isset($this->_items[$_item->item]['parent_id']) && (int)$this->_items[$_item->item]['parent_id'] == $itemid) {
                            $this->genItem($_item->item);
                        }
                    }
                    $this->endCol();
                }
                $this->endRow();
            }
        }
        $items = isset($this->children[$itemid]) ? $this->children[$itemid] : array();
        $rest_itemids = array();
        foreach ($items as $_item) {
            if (!in_array($_item['mitem_id'], $this->gens)) {
                $rest_itemids[] = $_item['mitem_id'];
            }
        }
        if (count($rest_itemids) > 0) {
            $this->beginRow();
            $this->beginCol(12);
            foreach ($rest_itemids as $_itemid) {
                $this->genItem($_itemid);
            }
            $this->endCol();
            $this->endRow();
        }
    }

    public function beginCol($width = 12, $class = '')
    {
        $exclass = '';
        $data = ' data-width="'.$width.'"';
        if ($class) {
            $exclass .= ' '.$class;
            $data .= ' data-class="'.$class.'"';
        }
        $this->menu .= '<div class="mega-col-nav col-sm-'.$width.$exclass.'"'.$data.'><div class="mega-inner"><ul class="mega-nav">';
    }
    public function endCol()
    {
        $this->menu .= '</ul>';
        $this->menu .= '</div></div>';
    }

    public function renderMenuStyle()
    {
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $id_lang = $context->language->id;
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/bootstrap.css', 'all');
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/admin_style.css', 'all');
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/font-awesome.css', 'all');
        $this->context->controller->addJS(_MODULE_DIR_.$this->module->name.'/views/js/admin_style.js', 'all');
        $this->context->controller->addJqueryUI('ui.sortable');
        $this->context->controller->addJqueryUI('ui.draggable');
        $sql = 'SELECT *
                FROM '._DB_PREFIX_.'jmsmegamenu AS a
                INNER JOIN '._DB_PREFIX_.'jmsmegamenu_lang AS b
                ON a.`mitem_id` = b.`mitem_id`
                WHERE a.`active` = 1 AND `parent_id` = 0 AND (a.`id_shop` = '.(int)$id_shop.')
                AND b.`id_lang` = '.(int)$id_lang.
                ' ORDER BY a.`ordering`';
        $rows = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        $jmshelper = new JmsMegaMenuHelper();
        $items = $jmshelper->getMenuTree($rows);
        foreach ($items as &$item) {
            $parent = isset($this->children[$item['parent_id']]) ? $this->children[$item['parent_id']] : array();
            $parent[] = $item;
            $this->children[$item['parent_id']] = $parent;

            $this->_items[$item['mitem_id']] = $item;
        }

        foreach ($items as &$item) {
            $item['dropdown'] = 0;
            if ((isset($this->children[$item['mitem_id']]))) {
                $item['dropdown'] = 1;
            }
                $item['title'] = htmlspecialchars($item['name'], ENT_COMPAT, 'UTF-8', false);
                $this->_items[(int)$item['mitem_id']] = $item;
        }
        $this->menu = '';
        $this->beginmenu();
        $this->nav();
        $this->endmenu();
        $tpl = $this->createTemplate('menustyle.tpl');
        $tpl->assign(array(
            'link' => $this->context->link,
            'menuhtml' => $this->menu,
            'base_url' => $this->url_root
        ));
        return $tpl->fetch();
    }
}
