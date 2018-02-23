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
if (file_exists(_PS_MODULE_DIR_.'jmsblog/class/JmsBlogHelper.php')) {
    include_once(_PS_MODULE_DIR_.'jmsblog/class/JmsBlogHelper.php');
}
class JmsAddonBlog extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'blog';
        $this->modulename = 'jmsblog';
        $this->addontitle = 'Blog';
        $this->addondesc = 'Show Blog Posts On Homepage';
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
                'default' => 'Latest Blog'
            ),
            array(
                'type' => 'text',
                'name' => 'desc',
                'label' => $this->l('Description'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon description. Leave blank if no description is needed.',
                'default' => 'Latest news from our'
            ),
            array(
                'type' => 'text',
                'name' => 'items_total',
                'label' => $this->l('Total Items'),
                'lang' => '0',
                'desc' => 'Total Number Items',
                'default' => 10
            ),
            array(
                'type' => 'text',
                'name' => 'items_show',
                'label' => $this->l('Items Show'),
                'lang' => '0',
                'desc' => 'Number of Items Show ( > 1199px )',
                'default' => 3
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_md',
                'label' => $this->l('Items Show On Medium Device'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Medium Device ( > 991px )',
                'default' => 2
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_sm',
                'label' => $this->l('Items Show On Tablet'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Tablet( >= 768px )',
                'default' => 2
            ),
            array(
                'type' => 'text',
                'name' => 'items_show_xs',
                'label' => $this->l('Items Show On Mobile'),
                'lang' => '0',
                'desc' => 'Number of Items Show On Mobile( >= 320px )',
                'default' => 1
            ),
            array(
                'type' => 'switch',
                'name' => 'show_category',
                'label' => $this->l('Show Category'),
                'lang' => '0',
                'desc' => 'Show/Hide Category Link',
                'default' => '0'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_introtext',
                'label' => $this->l('Show Introtext'),
                'lang' => '0',
                'desc' => 'Show/Hide Intro Text',
                'default' => '1'
            ),
            array(
                'type' => 'text',
                'name' => 'introtext_limit',
                'label' => $this->l('Introtext Character Limit'),
                'lang' => '0',
                'desc' => 'Number of Character limit for Introtext',
                'default' => 120
            ),
            array(
                'type' => 'switch',
                'name' => 'show_readmore',
                'label' => $this->l('Show Readmore'),
                'lang' => '0',
                'desc' => 'Show/Hide Readmore Button',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_time',
                'label' => $this->l('Show Time'),
                'lang' => '0',
                'desc' => 'Show/Hide Created Time',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_ncomments',
                'label' => $this->l('Show Comment Number'),
                'lang' => '0',
                'desc' => 'Show/Hide Number of Comments',
                'default' => '0'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_nviews',
                'label' => $this->l('Show View Number'),
                'lang' => '0',
                'desc' => 'Show/Hide Number of Views',
                'default' => '1'
            ),
            array(
                'type' => 'switch',
                'name' => 'show_media',
                'label' => $this->l('Show Media'),
                'lang' => '0',
                'desc' => 'Show/Hide Image/Video',
                'default' => '1'
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
    public function returnValue($addon)
    {
        $id_lang = $this->context->language->id;
        $query = 'SELECT hss.`post_id`,hss.`link_video`, hssl.`image`,hss.`category_id`, hss.`ordering`, hss.`active`, hssl.`title`, hss.`created`, hss.`modified`, hss.`views`,
            hssl.`alias`, hssl.`fulltext`, hssl.`introtext`,hssl.`meta_desc`, hssl.`meta_key`, hssl.`key_ref`, catsl.`title` AS category_name, catsl.`alias` AS category_alias
            FROM '._DB_PREFIX_.'jmsblog_posts hss
            LEFT JOIN '._DB_PREFIX_.'jmsblog_posts_lang hssl ON (hss.post_id = hssl.post_id)
            LEFT JOIN '._DB_PREFIX_.'jmsblog_categories_lang catsl ON (catsl.category_id = hss.category_id)
            WHERE hss.active = 1 AND hssl.id_lang = '.(int)$id_lang.' AND catsl.id_lang = '.(int)$id_lang.
            ' GROUP BY hss.post_id
            ORDER BY hss.created DESC
            LIMIT 0,'.$addon->fields[2]->value;
        $posts = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);
        for ($i = 0; $i < count($posts); $i++) {
            $posts[$i]['introtext'] = JmsBlogHelper::genIntrotext($posts[$i]['introtext'], $addon->fields[9]->value);
            $posts[$i]['comment_count'] = JmsBlogHelper::getCommentCount($posts[$i]['post_id']);
        }
        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'posts' => $posts,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'items_show' => $addon->fields[3]->value,
                'items_show_md' => $addon->fields[4]->value,
                'items_show_sm' => $addon->fields[5]->value,
                'items_show_xs' => $addon->fields[6]->value,
                'show_category' => $addon->fields[7]->value,
                'show_introtext' => $addon->fields[8]->value,
                'introtext_limit' => $addon->fields[9]->value,
                'show_readmore' => $addon->fields[10]->value,
                'show_time' => $addon->fields[11]->value,
                'show_ncomments' => $addon->fields[12]->value,
                'show_nviews' => $addon->fields[13]->value,
                'show_media' => $addon->fields[14]->value,
                'navigation' => $addon->fields[15]->value,
                'pagination' => $addon->fields[16]->value,
                'autoplay' => $addon->fields[17]->value,
                'rewind' => $addon->fields[18]->value,
                'slidebypage' => $addon->fields[19]->value,
                'image_url' => $this->root_url.'modules/'.$this->modulename.'/views/img/',
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
