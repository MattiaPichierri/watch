<?php
/**
* 2007-2017 PrestaShop
*
* Slider Layer module for prestashop
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit();
}
include_once(_PS_MODULE_DIR_.'jmsslider/SlideObject.php');
include_once(_PS_MODULE_DIR_.'jmsslider/LayerObject.php');
class Jmsslider extends Module
{
    public $_html = '';
    public $_errors = array();

    public function __construct()
    {
        $this->name = 'jmsslider';
        $this->version = '1.6.0';
        $this->author = 'joommasters';
        $this->tab = 'front_office_features';
        $this->bootstrap = true;
        $this->need_instance = 0;
        $this->secure_key = Tools::encrypt($this->name);


        parent::__construct();
        $this->displayName = $this->l('Jms Slider');
        $this->description = $this->l('Slider show');
        $this->ps_version_compliancy = array('min' => '1.5', 'max' => _PS_VERSION_);
    }

    public function installSamples()
    {
        $query = '';
        require_once( dirname(__FILE__).'/install/install.sql.php' );
        $return = true;
        if (isset($query) && !empty($query)) {
            if (!(Db::getInstance()->ExecuteS("SHOW TABLES LIKE '"._DB_PREFIX_."jms_slides'"))) {
                $query = str_replace('_DB_PREFIX_', _DB_PREFIX_, $query);
                $query = str_replace('_MYSQL_ENGINE_', _MYSQL_ENGINE_, $query);
                $db_data_settings = preg_split("/;\s*[\r\n]+/", $query);
                foreach ($db_data_settings as $query) {
                    $query = trim($query);
                    if (!empty($query)) {
                        if (!Db::getInstance()->Execute($query)) {
                            $return = false;
                        }
                    }
                }
            }
        } else {
            $return = false;
        }
        return $return;
    }

    public function install()
    {
        if (parent::install() && $this->registerHook('header') && $this->registerHook('actionShopDataDuplication')) {
            $res = (bool)Configuration::updateValue('JMS_SLIDER_DELAY', 1000);
            $res &=Configuration::updateValue('JMS_SLIDER_END_ANIMATE', 1);
            $res &=Configuration::updateValue('JMS_SLIDER_X', 0);
            $res &=Configuration::updateValue('JMS_SLIDER_Y', 0);
            $res &=Configuration::updateValue('JMS_SLIDER_TRANS', 'fade');
            $res &=Configuration::updateValue('JMS_SLIDER_TRANS_IN', 'left');
            $res &=Configuration::updateValue('JMS_SLIDER_TRANS_OUT', 'left');
            $res &=Configuration::updateValue('JMS_SLIDER_EASE_IN', 'easeInCubic');
            $res &=Configuration::updateValue('JMS_SLIDER_EASE_OUT', 'easeOutExpo');
            $res &=Configuration::updateValue('JMS_SLIDER_SPEED_IN', 300);
            $res &=Configuration::updateValue('JMS_SLIDER_SPEED_OUT', 0);
            $res &=Configuration::updateValue('JMS_SLIDER_DURATION', 7000);
            $res &=Configuration::updateValue('JMS_SLIDER_BG_ANIMATE', 1);
            $res &=Configuration::updateValue('JMS_SLIDER_BG_EASE', 'easeOutCubic');
            $res &=Configuration::updateValue('JMS_SLIDER_FULL_WIDTH', 1);
            $res &=Configuration::updateValue('JMS_SLIDER_RESPONSIVE', 1);
            $res &=Configuration::updateValue('JMS_SLIDER_WIDTH', 1920);
            $res &=Configuration::updateValue('JMS_SLIDER_HEIGHT', 875);
            $res &=Configuration::updateValue('JMS_SLIDER_AUTO_CHANGE', 1);
            $res &=Configuration::updateValue('JMS_SLIDER_PAUSE_HOVER', 0);
            $res &=Configuration::updateValue('JMS_SLIDER_SHOW_PAGES', 1);
            $res &=Configuration::updateValue('JMS_SLIDER_SHOW_CONTROLS', 1);
            $res &= $this->installSamples();
            return $res;
        } else {
            return false;
        }

    }

    public function uninstall()
    {
        if (parent::uninstall() && $this->dropTables() && Configuration::deleteByName('MYMODULE_NAME')) {
            $res = (bool)Configuration::deleteByName('JMS_SLIDER_DELAY');
            $res &= Configuration::deleteByName('JMS_SLIDER_END_ANIMATE');
            $res &= Configuration::deleteByName('JMS_SLIDER_X');
            $res &=Configuration::deleteByName('JMS_SLIDER_Y');
            $res &=Configuration::deleteByName('JMS_SLIDER_TRANS');
            $res &=Configuration::deleteByName('JMS_SLIDER_TRANS_IN');
            $res &=Configuration::deleteByName('JMS_SLIDER_TRANS_OUT');
            $res &=Configuration::deleteByName('JMS_SLIDER_EASE_IN');
            $res &=Configuration::deleteByName('JMS_SLIDER_EASE_OUT');
            $res &=Configuration::deleteByName('JMS_SLIDER_SPEED_IN');
            $res &=Configuration::deleteByName('JMS_SLIDER_SPEED_OUT');
            $res &=Configuration::deleteByName('JMS_SLIDER_DURATION');
            $res &=Configuration::deleteByName('JMS_SLIDER_BG_ANIMATE');
            $res &=Configuration::deleteByName('JMS_SLIDER_BG_EASE');
            $res &=Configuration::deleteByName('JMS_SLIDER_FULL_WIDTH');
            $res &=Configuration::deleteByName('JMS_SLIDER_RESPONSIVE');
            $res &=Configuration::deleteByName('JMS_SLIDER_WIDTH');
            $res &=Configuration::deleteByName('JMS_SLIDER_HEIGHT');
            $res &=Configuration::deleteByName('JMS_SLIDER_AUTO_CHANGE');
            $res &=Configuration::deleteByName('JMS_SLIDER_PAUSE_HOVER');
            $res &=Configuration::deleteByName('JMS_SLIDER_SHOW_PAGES');
            $res &=Configuration::deleteByName('JMS_SLIDER_SHOW_CONTROLS');
            return $res;
        }
        return false;
    }

    public function createTables()
    {
        $res= (bool)Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jms_slides_shop`(
                `id_slide` int(10) NOT NULL AUTO_INCREMENT,
                `id_shop` int(10) NOT NULL,
                PRIMARY KEY(`id_slide`, `id_shop`)
                ) ENGINE = '._MYSQL_ENGINE_.' CHARSET = UTF8;');
        $res&= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jms_slides`(
                `id_slide` int(10) NOT NULL AUTO_INCREMENT,
                `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
                `class_suffix` varchar(100) NOT NULL,
                `bg_type` int(10)  NOT NULL DEFAULT "1",
                `bg_image` varchar(100) COLLATE utf8_unicode_ci,
                `bg_color` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT "#FFF",
                `order` int(10) NOT NULL,
                `status` int(10) NOT NULL DEFAULT "1",
                PRIMARY KEY(`id_slide`)
                ) ENGINE = '._MYSQL_ENGINE_.' CHARSET = UTF8;');
        $res&= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jms_slides_lang`(
                `id_slide` int(10) NOT NULL AUTO_INCREMENT,
                `id_lang` int(10) NOT NULL,
                PRIMARY KEY(`id_slide`, `id_lang`)
            ) ENGINE = '._MYSQL_ENGINE_.' CHARSET = UTF8;');
        $res&= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jms_slides_layers` (
                `id_layer` int(10) NOT NULL AUTO_INCREMENT,
                `id_slide` int(10) NOT NULL,
                `data_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
                `data_class_suffix` varchar(50) NOT NULL,
                `data_fixed` int(10) NOT NULL DEFAULT "0",
                `data_delay` int(10) NOT NULL DEFAULT "1000",
                `data_time` int(10) NOT NULL DEFAULT "1000",
                `data_x` int(10) NOT NULL DEFAULT "0",
                `data_y` int(10) NOT NULL DEFAULT "0",
                `data_in` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT "left",
                `data_out` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT "right",
                `data_ease_in` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT "linear",
                `data_ease_out` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT "linear",
                `data_step` int(10) NOT NULL DEFAULT "0",
                `data_special` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT "cycle",
                `data_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
                `data_image` varchar(100) COLLATE utf8_unicode_ci,
                `data_html` text COLLATE utf8_unicode_ci,
                `data_video` text COLLATE utf8_unicode_ci,
                `data_video_controls` int(10) NOT NULL DEFAULT "1",
                `data_video_muted` int(10) NOT NULL DEFAULT "0",
                `data_video_autoplay` int(10) NOT NULL DEFAULT "1",
                `data_video_loop` int(10) NOT NULL DEFAULT "1",
                `data_video_bg` int(10) NOT NULL DEFAULT "0",
                `data_font_size` int(10) NOT NULL DEFAULT "14",
                `data_style`  varchar(100) COLLATE utf8_unicode_ci DEFAULT "normal",
                `data_color`  varchar(100) COLLATE utf8_unicode_ci DEFAULT "#FFFFFF",
                `data_width` int(10) NOT NULL,
                `data_height` int(10) NOT NULL,
                `data_order` int(10) NOT NULL,
                `data_status` int(10) NOT NULL DEFAULT "1",
                PRIMARY KEY (`id_layer`,`id_slide`)
                ) ENGINE = '._MYSQL_ENGINE_.' CHARSET=UTF8;');
        return $res;
    }

    public function dropTables()
    {
        $res=(bool)Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jms_slides`;');
        $res&=Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jms_slides_shop`;');
        $res&=Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jms_slides_lang`;');
        $res&=Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jms_slides_layers`;');
        return $res;
    }

    public function headerHTML()
    {
        if (Tools::getValue('controller') != 'AdminModules' && Tools::getValue('configure') != $this->name) {
            return;
        }

        $this->context->controller->addJqueryUI('ui.sortable');
    }

    public function getContent()
    {
        $this->context->controller->addJS(($this->_path).'views/js/back_script.js', 'all');
        $this->context->controller->addCSS($this->_path.'views/css/admin_style.css', 'all');
        $this->context->controller->addJqueryUI('ui.draggable');
        $this->context->controller->addJqueryUI('ui.resizable');
        $this->headerHTML();
        if (Tools::isSubmit('updateConfigs')) {
            // handle data
            if ($this->validateConfigs()) {
                $this->updateConfigs();
                $this->redirectAdmin(4);
            } else {
                $this->_html.= $this->renderListSlide();
                $this->_html.= $this->renderFormConfig();
            }
        } elseif (Tools::isSubmit('submitSlide') || Tools::isSubmit('submitLayer') || Tools::isSubmit('copySlide')) {
            $this->process();

        } elseif (Tools::isSubmit('changeStatus')) {
            $this->changeStatusSlide(Tools::getValue('id_slide'));
            $this->redirectAdmin(4);
        } elseif (Tools::isSubmit('delete_id_slide')) {
            $this->deleteSlide((int)Tools::getValue('delete_id_slide'));
            $this->redirectAdmin(2);
        } elseif (Tools::isSubmit('editSlide')) {
            $this->_html.= $this->renderFormSlide();
        } elseif (Tools::isSubmit('addSlide')) {
            $this->_html.= $this->renderFormSlide();
        } elseif (Tools::isSubmit('layers')) {
            $this->_html.= $this->renderListLayer();
        } else {
            $this->_html.= $this->renderListSlide();
            $this->_html.= $this->renderFormConfig();
            $this->clearCache();
        }
        return $this->_html;

    }

    public function process()
    {
        $errs = array();
        // $errs_l=array();
        if (Tools::isSubmit('submitSlide')) {

            if (Tools::isSubmit('id_slide')) {
                $slide = new SlideObject();
            } else {
                $slide = new SlideObject((int)Tools::getValue('id_slide'));
            }

            if ((Tools::getValue('bg_type')==1 && empty($_FILES['bg_image']['name']) && Tools::strlen(Tools::getValue('old_image'))==0) || ( Tools::getValue('bg_type')==0 && Tools::strlen(Tools::getValue('bg_color'))==0)) {
                $errs[] = $this->l('Please choose an image or color for background!');
            }

            if (Tools::strlen(Tools::getValue('title_slide'))==0) {
                $errs[] = $this->l('Please not to empty title.');
            }

            if (Tools::strlen(Tools::getValue('class_slide'))==0) {
                $slide->class_suffix = 'slide';
            } else {
                $slide->class_suffix = 'slide '.Tools::getValue('class_slide');
            }

            if (isset($_FILES) && !empty($_FILES['bg_image']['name'])) {
                $ext = array('jpg', 'gif', 'png', 'bmp', 'jpeg');
                $type = Tools::strtolower(Tools::substr(strrchr($_FILES['bg_image']['name'], '.'), 1));
                $path=dirname(__FILE__).'/views/img/slides/';
                $old_image = Tools::getValue('old_image');
                $new_name = Tools::encrypt($_FILES['bg_image']['name']).'.'.$type;
                if (!file_exists($path.$new_name)) {
                    if (move_uploaded_file($_FILES['bg_image']['tmp_name'], $path.$new_name)) {
                        $slide->bg_image = $new_name;
                        if (Tools::isSubmit('id_slide') && $new_name && file_exists($path.$_FILES['bg_image']['name'])) {
                            unlink($path.$old_image);
                        }
                    }
                }
                if (!in_array($type, $ext)) {
                    $errs[] = $this->l('Format image is incorrect. Try again!');
                }
            } elseif (Tools::getValue('id_slide') && empty($_FILES['bg_image']['name'])) {
                $new_name = Tools::getValue('old_image');
            }
        } elseif (Tools::isSubmit('submitLayer')) {

            $id_slide = (int)Tools::getValue('slide_id');
            $id_layers = Tools::getValue('layer_ids');
            $total_layer = count($id_layers);
            for ($i=0; $i < $total_layer; $i++) {

                $layer = new LayerObject($id_layers[$i]);
                $id_layer = $id_layers[$i];
                $layer->id_slide = Tools::getValue('id_slide', $id_slide);

                if (Tools::strlen(Tools::getValue('data_title_'.$id_layer))==0) {
                    $layer->data_title = $layer->data_title;
                } else {
                    $layer->data_title = Tools::getValue('data_title_'.$id_layer, $layer->data_title);
                }

                if (Tools::strlen(Tools::getValue('data_class_suffix_'.$id_layer))==0) {
                    $layer->data_class_suffix = $layer->data_class_suffix;
                } else {
                    $layer->data_class_suffix = Tools::getValue('data_class_suffix_'.$id_layer, $layer->data_class_suffix);
                }

                if (Tools::strlen(Tools::getValue('data_delay_'.$id_layer))==0 || !Validate::isInt(Tools::getValue('data_delay_'.$id_layer)) || Tools::getValue('data_delay_'.$id_layer)<0) {
                    $layer->data_delay = $layer->data_delay;
                } else {
                    $layer->data_delay = Tools::getValue('data_delay_'.$id_layer, $layer->data_delay);
                }

                if (Tools::strlen(Tools::getValue('data_time_'.$id_layer))==0 || !Validate::isInt(Tools::getValue('data_time_'.$id_layer))
                    || Tools::getValue('data_time_'.$id_layer)<0) {
                    $layer->data_time = $layer->data_time;
                } else {
                    $layer->data_time = Tools::getValue('data_time_'.$id_layer, $layer->data_time);
                }


                if (Tools::strlen(Tools::getValue('data_x_'.$id_layer))==0 || !Validate::isInt(Tools::getValue('data_x_'.$id_layer))) {
                    $layer->data_x = $layer->data_x;
                } else {
                    $layer->data_x = Tools::getValue('data_x_'.$id_layer, $layer->data_x);
                }

                if (Tools::strlen(Tools::getValue('data_y_'.$id_layer))==0 || !Validate::isInt(Tools::getValue('data_y_'.$id_layer))) {
                    $layer->data_y = $layer->data_y;
                } else {
                    $layer->data_y = Tools::getValue('data_y_'.$id_layer, $layer->data_y);
                }

                if (Tools::strlen(Tools::getValue('data_font_size_'.$id_layer))==0 || !Validate::isInt(Tools::getValue('data_font_size_'.$id_layer)) || Tools::getValue('data_font_size_'.$id_layer)<0) {
                    $layer->data_font_size = $layer->data_font_size;
                } else {
                    $layer->data_font_size = Tools::getValue('data_font_size_'.$id_layer, $layer->data_font_size);
                }

                if (Tools::strlen(Tools::getValue('data_line_height_'.$id_layer))==0 || !Validate::isInt(Tools::getValue('data_line_height_'.$id_layer))
                    || Tools::getValue('data_line_height_'.$id_layer)<0) {
                    $layer->data_line_height = $layer->data_line_height;
                } else {
                    $layer->data_line_height = Tools::getValue('data_line_height_'.$id_layer, $layer->data_line_height);
                }

                if (Tools::strlen(Tools::getValue('data_width_'.$id_layer))==0 || !Validate::isInt(Tools::getValue('data_width_'.$id_layer))
                    || Tools::getValue('data_width_'.$id_layer)<0) {
                    $layer->data_width = $layer->data_width;
                } else {
                    $layer->data_width = Tools::getValue('data_width_'.$id_layer, $layer->data_width);
                }

                if (Tools::strlen(Tools::getValue('data_height_'.$id_layer))==0 || !Validate::isInt(Tools::getValue('data_height_'.$id_layer))
                    || Tools::getValue('data_height_'.$id_layer)<0) {
                    $layer->data_height = $layer->data_height;
                } else {
                    $layer->data_height = (int)Tools::getValue('data_height_'.$id_layer, $layer->data_height);
                }

                if (Tools::strlen(Tools::getValue('data_step_'.$id_layer))==0 || !Validate::isInt(Tools::getValue('data_step_'.$id_layer))
                    || Tools::getValue('data_step_'.$id_layer) <0) {
                    $layer->data_step = $layer->data_step;
                } else {
                    $layer->data_step = (int)Tools::getValue('data_step_'.$id_layer, $layer->data_step);
                }

                $layer->data_fixed = Tools::getValue('data_fixed_'.$id_layer, $layer->data_fixed);
                $layer->data_in = Tools::getValue('data_in_'.$id_layer, $layer->data_in);
                $layer->data_out = Tools::getValue('data_out_'.$id_layer, $layer->data_out);
                $layer->data_ease_in = Tools::getValue('data_ease_in_'.$id_layer, $layer->data_ease_in);
                $layer->data_ease_out = Tools::getValue('data_ease_out_'.$id_layer, $layer->data_ease_out);
                $layer->data_special = Tools::getValue('data_special_'.$id_layer, $layer->data_special);
                $layer->data_type = Tools::getValue('data_type_'.$id_layer, $layer->data_type);
                $layer->data_image = Tools::getValue('data_image_'.$id_layer, $layer->data_image);
                $layer->data_html = Tools::getValue('data_html_'.$id_layer, $layer->data_html);
                $layer->data_style = Tools::getValue('data_style_'.$id_layer, $layer->data_style);
                $layer->data_color = Tools::getValue('data_color_'.$id_layer, $layer->data_color);
                $layer->data_video = Tools::getValue('data_video_'.$id_layer, $layer->data_video);
                $layer->data_video_controls = Tools::getValue('data_video_controls_'.$id_layer, $layer->data_video_controls);
                $layer->data_video_muted = Tools::getValue('data_video_muted_'.$id_layer, $layer->data_video_muted);
                $layer->data_video_autoplay = Tools::getValue('data_video_autoplay_'.$id_layer, $layer->data_video_autoplay);
                $layer->data_video_loop = Tools::getValue('data_video_loop_'.$id_layer, $layer->data_video_loop);
                $layer->data_video_bg = Tools::getValue('data_video_bg_'.$id_layer, $layer->data_video_bg);

                $layer->data_order = Tools::getValue('data_order', $layer->data_order);
                $layer->data_status = Tools::getValue('data_status_'.$id_layer, $layer->data_status);
                $layer->update();
            }
            $this->redirectAdmin('4', '&layers=1&id_slide='.$id_slide);
        } elseif (Tools::isSubmit('copySlide')) {
            $slide = new SlideObject((int)Tools::getValue('id_slide'));
            $slide_dup = $slide->duplicateObject();
            $slide_dup->title = $slide_dup->title.'- (Copy)';
            $slide_dup->update();
            $id_lang = $this->getSlideLang((int)Tools::getValue('id_slide'));
            $id_shop = $this->context->shop->id;
            $layers = $this->getLayers((int)Tools::getValue('id_slide'));
            foreach ($layers as $layer) {
                $layerOb = new LayerObject((int)$layer['id_layer']);
                $layer_dup = $layerOb->duplicateObject();
                Db::getInstance()->execute('
                 UPDATE `'._DB_PREFIX_.'jms_slides_layers` SET `id_slide` = '.$slide_dup->id.'
                 WHERE `id_layer` = '.$layer_dup->id);
            }
            Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'jms_slides_lang` VALUES('.$slide_dup->id.', '.$id_lang.')');
            Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'jms_slides_shop` VALUES('.$slide_dup->id.', '.$id_shop.')');
            $this->redirectAdmin(3, '');
        }

        if (count($errs)<1) {
            if (!Tools::getValue('id_slide')) {
                $slide = new SlideObject();
                $slide->title =Tools::getValue('title_slide', $slide->title);
                $slide->class_suffix =Tools::getValue('class_slide', $slide->class_suffix);
                $slide->bg_type =Tools::getValue('bg_type', $slide->bg_type);
                $slide->bg_image = $slide->bg_image;
                $slide->bg_color =Tools::getValue('bg_color', $slide->bg_color);
                $slide->slide_link =Tools::getValue('slide_link', $slide->slide_link);
                $slide->status =Tools::getValue('status_slide', $slide->status);
                $slide->order = (int)Tools::getValue('order_slide', $slide->order);
                $slide->add();
                Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'jms_slides_lang` VALUES('.$slide->id.', '.(int)Tools::getValue('lang_slide').')');
                $this->redirectAdmin(3, '');
            } else {
                $slide = new SlideObject((int)Tools::getValue('id_slide'));
                $slide->title =Tools::getValue('title_slide', $slide->title);
                $slide->class_suffix =Tools::getValue('class_slide', $slide->class_suffix);
                $slide->bg_type =Tools::getValue('bg_type', $slide->bg_type);
                $slide->bg_image = $new_name;
                $slide->bg_color =Tools::getValue('bg_color', $slide->bg_color);
                $slide->slide_link =Tools::getValue('slide_link', $slide->slide_link);
                $slide->status =Tools::getValue('status_slide', $slide->status);
                $slide->order = (int)Tools::getValue('order_slide', $slide->order);
                $slide->update();
                Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'jms_slides_lang` SET `id_lang` = '.(int)Tools::getValue('lang_slide').' WHERE `id_slide` = '.$slide->id);
                $this->redirectAdmin(4, '&editSlide&id_slide='.$slide->id);
            }
        } else {//if not errors
            $this->_html .= $this->displayError($errs);
            $this->_html .= $this->renderFormSlide();
        }
    }


    public function renderListSlide()
    {
        $slides = DB::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'jms_slides` `js`
        LEFT JOIN `'._DB_PREFIX_.'jms_slides_lang` `jsl` ON `js`.`id_slide` = `jsl`.`id_slide`
        LEFT JOIN `'._DB_PREFIX_.'jms_slides_shop` `jss` ON `js`.`id_slide` = `jss`.`id_slide`
            ORDER BY `order` ASC');
        $i=0;
        foreach ($slides as $slide) {
            $slides[$i]['iso_lang'] = Language::getIsoById($slide['id_lang']);
            $i++;
        }
        $force_ssl = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE');
        $protocol_link = (Configuration::get('PS_SSL_ENABLED') || Tools::usingSecureMode()) ? 'https://' : 'http://';
        if (isset($force_ssl) && $force_ssl) {
            $root_url = $protocol_link.Tools::getShopDomainSsl().__PS_BASE_URI__;
        } else {
            $root_url = _PS_BASE_URL_.__PS_BASE_URI__;
        }
        $this->smarty->assign(
            array(
                'slides'=>$slides,
                'link' => $this->context->link,
                'root_url' => $root_url
                )
        );
        return $this->display(__FILE__, 'listslides.tpl');
    }
    public function videoType($url)
    {
        if (strpos($url, 'youtube') > 0) {
            return 'youtube';
        } elseif (strpos($url, 'vimeo') > 0) {
            return 'vimeo';
        } else {
            return 'unknown';
        }
    }
    public function renderListLayer()
    {
        $this->context->controller->addCSS($this->_path.'views/css/front_style.css', 'all');
        $data_specials = array(
            0=>array(
                'id' => '',
                'name' => 'none'
                ),
            1=>array(
                'id' => 'cycle',
                'name' => 'cycle')
            );
        $transitions =array(
            0 => array('id' => 'none', 'name' => 'none'),
            1 => array('id' => 'fade', 'name' => 'Fade'),
            2 => array('id' => 'left', 'name' => 'Left'),
            3 => array('id' => 'right', 'name' => 'Right'),
            4 => array('id' => 'top', 'name' => 'Top'),
            5 => array('id' => 'bottom', 'name' => 'Bottom'),
            6 => array('id' => 'topLeft', 'name' => 'Top Left'),
            7 => array('id' => 'bottomLeft', 'name' => 'Bottom Left'),
            8 => array('id' => 'topRight', 'name' => 'Top Right'),
            9 => array('id' => 'bottomRight', 'name' => 'Bottom Right'),
            );
        $eases=array(
            0 => array('id' => 'linear', 'name' => 'linear'),
            1 => array('id' => 'swing', 'name' => 'swing'),
            2 => array('id' => 'easeInQuad', 'name' => 'easeInQuad'),
            3 => array('id' => 'easeOutQuad', 'name' => 'easeOutQuad'),
            4 => array('id' => 'easeInOutQuad', 'name' => 'easeInOutQuad'),
            5 => array('id' => 'easeInCubic', 'name' => 'easeInCubic'),
            6 => array('id' => 'easeOutCubic', 'name' => 'easeOutCubic'),
            7 => array('id' => 'easeInOutCubic', 'name' => 'easeInOutCubic'),
            8 => array('id' => 'easeInQuart', 'name' => 'easeInQuart'),
            9 => array('id' => 'easeOutQuart', 'name' => 'easeOutQuart'),
            10 => array('id' => 'easeInOutQuart', 'name' => 'easeInOutQuart'),
            11 => array('id' => 'easeInQuint', 'name' => 'easeInQuint'),
            12 => array('id' => 'easeOutQuint', 'name' => 'easeOutQuint'),
            13 => array('id' => 'easeInOutQuint', 'name' => 'easeInOutQuint'),
            14 => array('id' => 'easeInExpo', 'name' => 'easeInExpo'),
            15 => array('id' => 'easeOutExpo', 'name' => 'easeOutExpo'),
            16 => array('id' => 'easeInOutExpo', 'name' => 'easeInOutExpo'),
            17 => array('id' => 'easeInSine', 'name' => 'easeInSine'),
            18 => array('id' => 'easeOutSine', 'name' => 'easeOutSine'),
            19 => array('id' => 'easeInOutSine', 'name' => 'easeInOutSine'),
            20 => array('id' => 'easeInCirc', 'name' => 'easeInCirc'),
            21 => array('id' => 'easeOutCirc', 'name' => 'easeOutCirc'),
            22 => array('id' => 'easeInOutCirc', 'name' => 'easeInOutCirc'),
            23 => array('id' => 'easeInElastic', 'name' => 'easeInElastic'),
            24 => array('id' => 'easeOutElastic', 'name' => 'easeOutElastic'),
            25 => array('id' => 'easeInOutElastic', 'name' => 'easeInOutElastic'),
            26 => array('id' => 'easeInBack', 'name' => 'easeInBack'),
            27 => array('id' => 'easeOutBack', 'name' => 'easeOutBack'),
            28 => array('id' => 'easeInOutBack', 'name' => 'easeInOutBack'),
            23 => array('id' => 'easeInBounce', 'name' => 'easeInBounce'),
            24 => array('id' => 'easeOutBounce', 'name' => 'easeOutBounce'),
            25 => array('id' => 'easeInOutBounce', 'name' => 'easeInOutBounce'),
            );
        $images = $this->getLayerImages();
        $configs = $this->getFieldsConfig();
        $lastIdLayer = $this->getlastIDLayer();
        $all_slides = $this->getAllSlides();
        $slides = $this->getSlide((int)Tools::getValue('id_slide'));
        $layers = $this->getLayers((int)Tools::getValue('id_slide'));
        $i = 0;
        for ($i = 0; $i < count($layers); $i++) {
            $layers[$i]['videotype'] = $this->videoType($layers[$i]['data_video']);
        }
        $force_ssl = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE');
        $protocol_link = (Configuration::get('PS_SSL_ENABLED') || Tools::usingSecureMode()) ? 'https://' : 'http://';
        if (isset($force_ssl) && $force_ssl) {
            $root_url = $protocol_link.Tools::getShopDomainSsl().__PS_BASE_URI__;
        } else {
            $root_url = _PS_BASE_URL_.__PS_BASE_URI__;
        }
        $this->smarty->assign(
            array(
                'slides' => $slides,
                'configs' => $configs,
                'all_slides' => $all_slides,
                'lastIdLayer' => $lastIdLayer,
                'images' => $images,
                'transitions' => $transitions,
                'eases' => $eases,
                'data_specials' => $data_specials,
                'layers' => $layers,
                'link' => $this->context->link,
                'root_url' => $root_url,
                )
        );
        return $this->display(__FILE__, 'listlayers.tpl');
    }

    public function renderFormConfig()
    {
        $slide_transitions =array(
            0 => array('id' => 'none', 'name' => 'none'),
            1 => array('id' => 'fade', 'name' => 'Fade'),
            2 => array('id' => 'slideLeft', 'name' => 'Left'),
            3 => array('id' => 'slideRight', 'name' => 'Right'),
            4 => array('id' => 'slideTop', 'name' => 'Top'),
            5 => array('id' => 'slideBottom', 'name' => 'Bottom'),
            6 => array('id' => 'scrollLeft', 'name' => 'Scroll Left'),
            7 => array('id' => 'scrollRight', 'name' => 'Scroll Right'),
            8 => array('id' => 'scrollTop', 'name' => 'Scroll Top'),
            9 => array('id' => 'scrollBottom', 'name' => 'Scroll Bottom'),
            );
        $transitions =array(
            0 => array('id' => 'none', 'name' => 'none'),
            1 => array('id' => 'fade', 'name' => 'Fade'),
            2 => array('id' => 'left', 'name' => 'Left'),
            3 => array('id' => 'right', 'name' => 'Right'),
            4 => array('id' => 'top', 'name' => 'Top'),
            5 => array('id' => 'bottom', 'name' => 'Bottom'),
            6 => array('id' => 'topLeft', 'name' => 'Top Left'),
            7 => array('id' => 'bottomLeft', 'name' => 'Bottom Left'),
            8 => array('id' => 'topRight', 'name' => 'Top Right'),
            9 => array('id' => 'bottomRight', 'name' => 'Bottom Right'),
            );
        $eases=array(
            0 => array('id' => 'linear', 'name' => 'linear'),
            1 => array('id' => 'swing', 'name' => 'swing'),
            2 => array('id' => 'easeInQuad', 'name' => 'easeInQuad'),
            3 => array('id' => 'easeOutQuad', 'name' => 'easeOutQuad'),
            4 => array('id' => 'easeInOutQuad', 'name' => 'easeInOutQuad'),
            5 => array('id' => 'easeInCubic', 'name' => 'easeInCubic'),
            6 => array('id' => 'easeOutCubic', 'name' => 'easeOutCubic'),
            7 => array('id' => 'easeInOutCubic', 'name' => 'easeInOutCubic'),
            8 => array('id' => 'easeInQuart', 'name' => 'easeInQuart'),
            9 => array('id' => 'easeOutQuart', 'name' => 'easeOutQuart'),
            10 => array('id' => 'easeInOutQuart', 'name' => 'easeInOutQuart'),
            11 => array('id' => 'easeInQuint', 'name' => 'easeInQuint'),
            12 => array('id' => 'easeOutQuint', 'name' => 'easeOutQuint'),
            13 => array('id' => 'easeInOutQuint', 'name' => 'easeInOutQuint'),
            14 => array('id' => 'easeInExpo', 'name' => 'easeInExpo'),
            15 => array('id' => 'easeOutExpo', 'name' => 'easeOutExpo'),
            16 => array('id' => 'easeInOutExpo', 'name' => 'easeInOutExpo'),
            17 => array('id' => 'easeInSine', 'name' => 'easeInSine'),
            18 => array('id' => 'easeOutSine', 'name' => 'easeOutSine'),
            19 => array('id' => 'easeInOutSine', 'name' => 'easeInOutSine'),
            20 => array('id' => 'easeInCirc', 'name' => 'easeInCirc'),
            21 => array('id' => 'easeOutCirc', 'name' => 'easeOutCirc'),
            22 => array('id' => 'easeInOutCirc', 'name' => 'easeInOutCirc'),
            23 => array('id' => 'easeInElastic', 'name' => 'easeInElastic'),
            24 => array('id' => 'easeOutElastic', 'name' => 'easeOutElastic'),
            25 => array('id' => 'easeInOutElastic', 'name' => 'easeInOutElastic'),
            26 => array('id' => 'easeInBack', 'name' => 'easeInBack'),
            27 => array('id' => 'easeOutBack', 'name' => 'easeOutBack'),
            28 => array('id' => 'easeInOutBack', 'name' => 'easeInOutBack'),
            23 => array('id' => 'easeInBounce', 'name' => 'easeInBounce'),
            24 => array('id' => 'easeOutBounce', 'name' => 'easeOutBounce'),
            25 => array('id' => 'easeInOutBounce', 'name' => 'easeInOutBounce'),
            );
        $fields_form=array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                    ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'name' => 'JMS_SLIDER_DELAY',
                        'hint' => $this->l('It work after ms (1s = 1000ms)'),
                        'class' => 'fixed-width-xl',
                        'suffix' => 'ms',
                        'label' => $this->l('Start after'),
                        'required' => true,

                        ),
                    array(
                        'type' => 'text',
                        'name' => 'JMS_SLIDER_X',
                        'hint' => $this->l('Position of slide to width'),
                        'class' => 'fixed-width-xl',
                        'suffix' => 'px',
                        'label' => $this->l('Position X'),
                        'required' => true,

                        ),
                    array(
                        'type' => 'text',
                        'name' => 'JMS_SLIDER_Y',
                        'hint' => $this->l('Position of slide to height'),
                        'class' => 'fixed-width-xl',
                        'suffix' => 'px',
                        'label' => $this->l('Position Y'),
                        'required' => true,

                        ),
                    array(
                        'type' => 'select',
                        'name' => 'JMS_SLIDER_TRANS',
                        'hint' => $this->l('Transition all slide'),
                        'label' => $this->l('Transition All'),
                        'options' => array(
                            'query' => $slide_transitions,
                            'id' => 'id',
                            'name' => 'name'
                            ),
                        ),
                    array(
                        'type' => 'select',
                        'name' => 'JMS_SLIDER_TRANS_IN',
                        'label' => $this->l('Transition In'),
                        'hint' => $this->l('Transition in for slide'),
                        'options' => array(
                            'query' => $transitions,
                            'id' => 'id',
                            'name' => 'name'
                            ),
                        ),
                    array(
                        'type' => 'select',
                        'name' => 'JMS_SLIDER_TRANS_OUT',
                        'hint' => $this->l('Transition out for slide'),
                        'label' => $this->l('Transition Out'),
                        'options' => array(
                            'query' => $transitions,
                            'id' => 'id',
                            'name' => 'name'
                            ),
                        ),
                    array(
                        'type' => 'select',
                        'name' => 'JMS_SLIDER_EASE_IN',
                        'hint' => $this->l('Ease int for slide'),
                        'label' => $this->l('Ease In'),
                        'options' => array(
                            'query' => $eases,
                            'id' => 'id',
                            'name' => 'name'
                            ),
                        ),
                    array(
                        'type' => 'select',
                        'name' => 'JMS_SLIDER_EASE_OUT',
                        'hint' => $this->l('Ease out for slide'),
                        'label' => $this->l('Ease Out'),
                        'options' => array(
                            'query' => $eases,
                            'id' => 'id',
                            'name' => 'name'
                            ),
                        ),
                    array(
                        'type' => 'text',
                        'name' => 'JMS_SLIDER_SPEED_IN',
                        'hint' => $this->l('Time speed transition'),
                        'label' => $this->l('Speed In'),
                        'suffix' => 'ms',
                        'class' => 'fixed-width-xl',
                        ),
                    array(
                        'type' => 'text',
                        'name' => 'JMS_SLIDER_SPEED_OUT',
                        'hint' => $this->l('Time speed transition'),
                        'label' => $this->l('Speed Out'),
                        'suffix' => 'ms',
                        'disabled' => true,
                        'class' => 'fixed-width-xl',
                        ),
                    array(
                        'type' => 'text',
                        'name' => 'JMS_SLIDER_DURATION',
                        'hint' => $this->l('Time show slide'),
                        'class' => 'fixed-width-xl',
                        'label' => 'Duration',
                        'suffix' => 'ms',
                        'required' => true,
                        ),
                    array(
                        'type' => 'switch',
                        'name' => 'JMS_SLIDER_BG_ANIMATE',
                        'label' => $this->l('Background Animate'),
                        'values' =>array(
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
                    array(
                        'type' => 'select',
                        'name' => 'JMS_SLIDER_BG_EASE',
                        'label' => $this->l('Background ease'),
                        'options' => array(
                            'query' => $eases,
                            'id' => 'id',
                            'name' => 'name'
                            ),
                        ),
                    array(
                        'type' => 'switch',
                        'name' => 'JMS_SLIDER_END_ANIMATE',
                        'label' => $this->l('End animate slide'),
                        'hint' => $this->l('If yes, slide and layers will end at the time and no animate'),
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
                    array(
                        'type' => 'switch',
                        'name' => 'JMS_SLIDER_FULL_WIDTH',
                        'label' => $this->l('Fullwidth slide'),
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
                    array(
                        'type' => 'switch',
                        'name' => 'JMS_SLIDER_RESPONSIVE',
                        'label' => $this->l('Responsive'),
                        'values' =>array(
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
                    array(
                        'type' => 'text',
                        'name' => 'JMS_SLIDER_WIDTH',
                        'hint' => $this->l('Max width'),
                        'class' => 'fixed-width-xl',
                        'label' => 'Max width slide',
                        'suffix' => 'px',
                        'required' => true,
                        'tab' => 'general',
                        ),
                    array(
                        'type' => 'text',
                        'name' => 'JMS_SLIDER_HEIGHT',
                        'hint' => $this->l('Max height'),
                        'class' => 'fixed-width-xl',
                        'label' => 'Max height slide',
                        'suffix' => 'px',
                        'required' => true,
                        ),
                    array(
                        'type' => 'switch',
                        'name' => 'JMS_SLIDER_AUTO_CHANGE',
                        'label' => $this->l('Auto change slide'),
                        'values' =>array(
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
                    array(
                        'type' => 'switch',
                        'name' => 'JMS_SLIDER_PAUSE_HOVER',
                        'label' => $this->l('Pause hover'),
                        'values' =>array(
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
                    array(
                        'type' => 'switch',
                        'name' => 'JMS_SLIDER_SHOW_PAGES',
                        'label' => $this->l('Show pagers'),
                        'values' =>array(
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
                    array(
                        'type' => 'switch',
                        'name' => 'JMS_SLIDER_SHOW_CONTROLS',
                        'label' => $this->l('Show controls'),
                        'values' =>array(
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
                    'title' => $this->l('Update')
                    )
                )
            );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG')?Configuration::get('PS_BO_ALLOW_EMPLYEE_FORM_LANG'):0;
        $helper->module = $this;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'updateConfigs';
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $base_url = '';
        $force_ssl = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE');
        $protocol_link = (Configuration::get('PS_SSL_ENABLED') || Tools::usingSecureMode()) ? 'https://' : 'http://';
        if (isset($force_ssl) && $force_ssl) {
            $base_url = $protocol_link.Tools::getShopDomainSsl().__PS_BASE_URI__;
        } else {
            $base_url = _PS_BASE_URL_.__PS_BASE_URI__;
        }
        $helper->tpl_vars = array(
            'base_url' => $base_url,
            'fields_value' => $this->getFieldsConfig(),
            'language' => array(
                'id_lang' => $lang->id,
                'iso_code' => $lang->iso_code
                ),
            'languages' => $this->context->controller->getLanguages(),
            'id_lang' => $this->context->language->id,
            'image_baseurl' => $this->_path.'views/img/'
            );
        return $helper->generateForm(array($fields_form));
    }

    public function renderFormSlide()
    {
        $languages = array();
        $languages[0]['id_lang'] = 0;
        $languages[0]['name'] = 'All';
        $syslanguages = Language::getLanguages(false);
        foreach ($syslanguages as $language) {
            $languages[] =  $language;
        }

        $fields_form = array(
            'form' => array(
                'tabs'=> array(
                    'general'=> $this->l('General Config'),
                    'bg' => $this->l('Background Config')
                    ),
                'legend' => array(
                    'title' => $this->l('Slides'),
                    'icon' => 'icon-cogs'
                    ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'name' => 'title_slide',
                        'label' => $this->l('Title slide'),
                        'hint' => $this->l('Title of slide not show front end'),
                        'required' => true,
                        'class' => 'fixed-width-xl',
                        'tab' => 'general',
                        ),
                    array(
                        'type' => 'select',
                        'name' => 'lang_slide',
                        'label' => $this->l('Language'),
                        'options' => array(
                            'query' => $languages,
                            'id' => 'id_lang',
                            'name' => 'name'
                            ),
                        'tab' => 'general',
                        ),
                    array(
                        'type' => 'text',
                        'name' => 'class_slide',
                        'label' => $this->l('Class suffix'),
                        'required' => true,
                        'class' => 'fixed-width-xl',
                        'tab' => 'general',
                        ),
                    array(
                        'type' => 'text',
                        'name' => 'slide_link',
                        'label' => $this->l('Slide Link'),
                        'hint' => $this->l('Link for Slide, when click to slide on frontend it will redirect to this link'),
                        'required' => true,
                        'class' => 'fixed-width-xl',
                        'tab' => 'general',
                        ),
                    array(
                        'type' => 'switch',
                        'name' => 'status_slide',
                        'label' => $this->l('Active'),
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
                        'tab' => 'general',
                        ),
                    array(
                        'type' => 'switch',
                        'name' => 'bg_type',
                        'label' => $this->l('Background type'),
                        'desc' => $this->l('yes: image - no: color'),
                        'tab' => 'bg',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Image')
                                ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Color')
                                )
                            )
                        ),
                    array(
                        'type' => 'img',
                        'name' => 'bg_image',
                        'label' => 'Image',
                        'form_group_class' => 'bg_img',
                        'pdesc' => $this->l('Choose an image for background'),
                        'link' => $this->context->link->getAdminLink('AdminJms_sliderlayer', true),
                        'tab' => 'bg',
                        ),
                    array(
                        'type' => 'color',
                        'name' => 'bg_color',

                        'label' => $this->l('Color'),
                        'form_group_class' => 'bg_color',
                        'tab' => 'bg'
                        ),
                    ),
                'submit' => array(
                    'title' => $this->l('Save')
                    ),

                )
            );
        if (Tools::isSubmit('id_slide')) {
            $slide = new SlideObject((int)Tools::getValue('id_slide'));
            $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'id_slide');
            $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'old_image', 'tab' => 'bg');
            $fields_form['form']['old_image'] = $slide->bg_image;
        }

        $fields_form['form']['buttons'][] = array('href' => $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),'title' => 'Back to Slides List','icon' => 'process-icon-back');

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->fields_value['display_show_header'] = true;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitSlide';
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG')?Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG'):0;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $base_url = '';
        $force_ssl = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE');
        $protocol_link = (Configuration::get('PS_SSL_ENABLED') || Tools::usingSecureMode()) ? 'https://' : 'http://';
        if (isset($force_ssl) && $force_ssl) {
            $base_url = $protocol_link.Tools::getShopDomainSsl().__PS_BASE_URI__;
        } else {
            $base_url = _PS_BASE_URL_.__PS_BASE_URI__;
        }
        $helper->tpl_vars = array(
            'base_url' => $base_url,
            'fields_value' => $this->addFieldsSlide(),
            'language' => array(
                'id_lang' => $lang->id,
                'iso_code' => $lang->iso_code
                ),
            'languages' => $this->context->controller->getLanguages(),
            'id_lang' => $this->context->language->id,
            'image_baseurl' => $this->_path.'views/img/slides/'
            );

        return $helper->generateForm(array($fields_form));

    }
    public function addFieldsSlide()
    {
        $fields=array();
        if (Tools::isSubmit('id_slide')) {
            $slide = new SlideObject((int)Tools::getValue('id_slide'));
            $fields['old_image'] = $slide->bg_image;
            $fields['bg_color'] = Tools::getValue('bg_color', $slide->bg_color);
            $fields['slide_link'] = Tools::getValue('slide_link', $slide->slide_link);
        } else {
            $slide = new SlideObject();
        }
        $fields['title_slide'] = Tools::getValue('title_slide', $slide->title);
        $fields['class_slide'] = Tools::getValue('class_slide', $slide->class_suffix);
        $fields['bg_type'] = Tools::getValue('bg_type', $slide->bg_type);
        $fields['bg_image'] = Tools::getValue('bg_image', $slide->bg_image);
        $fields['bg_color'] = Tools::getValue('bg_color', $slide->bg_color);
        $fields['slide_link'] = Tools::getValue('slide_link', $slide->slide_link);
        $fields['status_slide'] = Tools::getValue('status_slide', $slide->status);
        $fields['order'] = (int)Tools::getValue('order', $slide->order);
        $fields['lang_slide'] = Tools::getValue('lang_slide', $this->getSlideLang((int)Tools::getValue('id_slide')));
        $fields['id_slide'] = Tools::getValue('id_slide', Tools::getValue('id_slide'));

        return $fields;
    }

    public function changeStatusSlide($id_slide)
    {
        $slide = new SlideObject((int)$id_slide);
        if ($slide->status == 0) {
            $slide->status = 1;
        } else {
            $slide->status = 0;
        }
        $slide->update();
    }

    public function deleteSlide($id_slide)
    {
        $slide = new SlideObject($id_slide);
        Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'jms_slides_lang` WHERE `id_slide` = '.$slide->id);
        $slide->delete();
    }

    public function getFieldsConfig()
    {
        $fields = array(
            'JMS_SLIDER_DELAY' => Tools::getValue('JMS_SLIDER_DELAY', Configuration::get('JMS_SLIDER_DELAY')),
            'JMS_SLIDER_X' => Tools::getValue('JMS_SLIDER_X', Configuration::get('JMS_SLIDER_X')),
            'JMS_SLIDER_Y' => Tools::getValue('JMS_SLIDER_Y', Configuration::get('JMS_SLIDER_Y')),
            'JMS_SLIDER_TRANS' => Tools::getValue('JMS_SLIDER_TRANS', Configuration::get('JMS_SLIDER_TRANS')),
            'JMS_SLIDER_TRANS_IN' => Tools::getValue('JMS_SLIDER_TRANS_IN', Configuration::get('JMS_SLIDER_TRANS_IN')),
            'JMS_SLIDER_TRANS_OUT' => Tools::getValue('JMS_SLIDER_TRANS_OUT', Configuration::get('JMS_SLIDER_TRANS_OUT')),
            'JMS_SLIDER_EASE_IN' => Tools::getValue('JMS_SLIDER_EASE_IN', Configuration::get('JMS_SLIDER_EASE_IN')),
            'JMS_SLIDER_EASE_OUT' => Tools::getValue('JMS_SLIDER_EASE_OUT', Configuration::get('JMS_SLIDER_EASE_OUT')),
            'JMS_SLIDER_SPEED_IN' => Tools::getValue('JMS_SLIDER_SPEED_IN', Configuration::get('JMS_SLIDER_SPEED_IN')),
            'JMS_SLIDER_SPEED_OUT' => Tools::getValue('JMS_SLIDER_SPEED_OUT', 0),
            'JMS_SLIDER_DURATION' => Tools::getValue('JMS_SLIDER_DURATION', Configuration::get('JMS_SLIDER_DURATION')),
            'JMS_SLIDER_BG_ANIMATE' => Tools::getValue('JMS_SLIDER_BG_ANIMATE', Configuration::get('JMS_SLIDER_BG_ANIMATE')),
            'JMS_SLIDER_BG_EASE' => Tools::getValue('JMS_SLIDER_BG_EASE', Configuration::get('JMS_SLIDER_BG_EASE')),
            'JMS_SLIDER_END_ANIMATE' => Tools::getValue('JMS_SLIDER_END_ANIMATE', Configuration::get('JMS_SLIDER_END_ANIMATE')),
            'JMS_SLIDER_FULL_WIDTH' => Tools::getValue('JMS_SLIDER_FULL_WIDTH', Configuration::get('JMS_SLIDER_FULL_WIDTH')),
            'JMS_SLIDER_RESPONSIVE' => Tools::getValue('JMS_SLIDER_RESPONSIVE', Configuration::get('JMS_SLIDER_RESPONSIVE')),
            'JMS_SLIDER_WIDTH' => Tools::getValue('JMS_SLIDER_WIDTH', Configuration::get('JMS_SLIDER_WIDTH')),
            'JMS_SLIDER_HEIGHT' => Tools::getValue('JMS_SLIDER_HEIGHT', Configuration::get('JMS_SLIDER_HEIGHT')),
            'JMS_SLIDER_AUTO_CHANGE' => Tools::getValue('JMS_SLIDER_AUTO_CHANGE', Configuration::get('JMS_SLIDER_AUTO_CHANGE')),
            'JMS_SLIDER_PAUSE_HOVER' => Tools::getValue('JMS_SLIDER_PAUSE_HOVER', Configuration::get('JMS_SLIDER_PAUSE_HOVER')),
            'JMS_SLIDER_SHOW_PAGES' => Tools::getValue('JMS_SLIDER_SHOW_PAGES', Configuration::get('JMS_SLIDER_SHOW_PAGES')),
            'JMS_SLIDER_SHOW_CONTROLS' => Tools::getValue('JMS_SLIDER_SHOW_CONTROLS', Configuration::get('JMS_SLIDER_SHOW_CONTROLS')),

            );
        return $fields;
    }

    public function updateConfigs()
    {
        $res = (bool)Configuration::updateValue('JMS_SLIDER_DELAY', Tools::getValue('JMS_SLIDER_DELAY'));
        $res &= Configuration::updateValue('JMS_SLIDER_X', Tools::getValue('JMS_SLIDER_X'));
        $res &= Configuration::updateValue('JMS_SLIDER_Y', Tools::getValue('JMS_SLIDER_Y'));
        $res &= Configuration::updateValue('JMS_SLIDER_TRANS', Tools::getValue('JMS_SLIDER_TRANS'));
        $res &= Configuration::updateValue('JMS_SLIDER_TRANS_IN', Tools::getValue('JMS_SLIDER_TRANS_IN'));
        $res &= Configuration::updateValue('JMS_SLIDER_TRANS_OUT', Tools::getValue('JMS_SLIDER_TRANS_OUT'));
        $res &= Configuration::updateValue('JMS_SLIDER_EASE_IN', Tools::getValue('JMS_SLIDER_EASE_IN'));
        $res &= Configuration::updateValue('JMS_SLIDER_EASE_OUT', Tools::getValue('JMS_SLIDER_EASE_OUT'));
        $res &= Configuration::updateValue('JMS_SLIDER_SPEED_IN', Tools::getValue('JMS_SLIDER_SPEED_IN'));
        $res &= Configuration::updateValue('JMS_SLIDER_SPEED_OUT', Tools::getValue('JMS_SLIDER_SPEED_OUT'));
        $res &= Configuration::updateValue('JMS_SLIDER_DURATION', Tools::getValue('JMS_SLIDER_DURATION'));
        $res &= Configuration::updateValue('JMS_SLIDER_BG_ANIMATE', Tools::getValue('JMS_SLIDER_BG_ANIMATE'));
        $res &= Configuration::updateValue('JMS_SLIDER_BG_EASE', Tools::getValue('JMS_SLIDER_BG_EASE'));
        $res &= Configuration::updateValue('JMS_SLIDER_END_ANIMATE', Tools::getValue('JMS_SLIDER_END_ANIMATE'));
        $res &= Configuration::updateValue('JMS_SLIDER_FULL_WIDTH', Tools::getValue('JMS_SLIDER_FULL_WIDTH'));
        $res &= Configuration::updateValue('JMS_SLIDER_RESPONSIVE', Tools::getValue('JMS_SLIDER_RESPONSIVE'));
        $res &= Configuration::updateValue('JMS_SLIDER_WIDTH', Tools::getValue('JMS_SLIDER_WIDTH'));
        $res &= Configuration::updateValue('JMS_SLIDER_HEIGHT', Tools::getValue('JMS_SLIDER_HEIGHT'));
        $res &= Configuration::updateValue('JMS_SLIDER_AUTO_CHANGE', Tools::getValue('JMS_SLIDER_AUTO_CHANGE'));
        $res &= Configuration::updateValue('JMS_SLIDER_PAUSE_HOVER', Tools::getValue('JMS_SLIDER_PAUSE_HOVER'));
        $res &= Configuration::updateValue('JMS_SLIDER_SHOW_PAGES', Tools::getValue('JMS_SLIDER_SHOW_PAGES'));
        $res &= Configuration::updateValue('JMS_SLIDER_SHOW_CONTROLS', Tools::getValue('JMS_SLIDER_SHOW_CONTROLS'));

        return $res;
    }
    public function getLayers($id_slide)
    {
        return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'jms_slides_layers` `la`
        LEFT JOIN `'._DB_PREFIX_.'jms_slides` `sl`  ON `la`.`id_slide` = `sl`.`id_slide`
        LEFT JOIN `'._DB_PREFIX_.'jms_slides_lang` `sll`  ON `la`.`id_slide` = `sll`.`id_slide`
        LEFT JOIN `'._DB_PREFIX_.'jms_slides_shop` `sls`  ON `la`.`id_slide` = `sls`.`id_slide`
        WHERE `la`.`id_slide` = '.$id_slide.' ORDER BY `la`.`data_order` ASC');
    }

    public function getSlide($id_slide)
    {
        $this->context = Context::getContext();
        $id_shop = $this->context->shop->id;
        return DB::getInstance(_PS_USE_SQL_SLAVE_)->getRow('SELECT * FROM `'._DB_PREFIX_.'jms_slides` `js`
        LEFT JOIN `'._DB_PREFIX_.'jms_slides_shop` `jss` ON `js`.`id_slide`=`jss`.`id_slide`
        WHERE `jss`.`id_shop`='.(int)$id_shop.' AND `js`.`id_slide` = '.$id_slide);
    }

    public function getAllSlides()
    {
        return DB::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'jms_slides` ORDER BY `order` ASC');
    }
    public function getLayerImages()
    {
        $dir = _PS_MODULE_DIR_.'jmsslider/views/img/layers/';
        //get all image files with a .jpg extension.
        $files = glob($dir.'*.{jpg,png,gif,jpeg,bmp}', GLOB_BRACE);
        $images = array();
        $i = 0;
        foreach ($files as $img) {
            $images[$i]['id'] = Tools::substr($img, Tools::strlen($dir), Tools::strlen($img) - Tools::strlen($dir));
            $i++;
        }
        return $images;
    }
    public function getSlideImages()
    {
        $dir = _PS_MODULE_DIR_.'jmsslider/views/img/slides/';
        //get all image files with a .jpg extension.
        $files = glob($dir.'*.{jpg,png,gif,jpeg,bmp}', GLOB_BRACE);
        $images = array();
        $i = 0;
        foreach ($files as $img) {
            $images[$i]['id'] = Tools::substr($img, Tools::strlen($dir), Tools::strlen($img) - Tools::strlen($dir));
            $i++;
        }
        return $images;
    }

    public function getSlidesLayers()
    {
        $this->context = Context::getContext();
        $id_shop = $this->context->shop->id;
        $id_lang = $this->context->language->id;


        $slides = DB::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'jms_slides` `js`
            LEFT JOIN `'._DB_PREFIX_.'jms_slides_lang` `jsl` ON `js`.`id_slide`=`jsl`.`id_slide`
            LEFT JOIN `'._DB_PREFIX_.'jms_slides_shop` `jss` ON `js`.`id_slide`=`jss`.`id_slide`
            WHERE `jsl`.`id_lang` = "'.(int)$id_lang.'" OR `jsl`.`id_lang` = 0
            AND `jss`.`id_shop`= "'.(int)$id_shop.'"
            AND `js`.`status` = 1
            ORDER BY `js`.`order` ASC');
        $i=0;
        foreach ($slides as $slide) {
            $slides[$i]['layers'] = DB::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'jms_slides_layers`
                WHERE `id_slide` = "'.(int)$slide['id_slide'].'"
                AND `data_status` = 1
                ORDER BY `data_order` ASC');
            $k=0;
            foreach ($slides[$i]['layers'] as $layer) {
                $slides[$i]['layers'][$k]['videotype'] = $this->videoType($layer['data_video']);
                $k++;
            }
            $i++;
        }
        return $slides;
    }


    public function getlastIDLayer()
    {
        $lastId=0;
        $qr= DB::getInstance()->executeS('SELECT `id_layer` FROM `'._DB_PREFIX_.'jms_slides_layers` ORDER BY `id_layer` DESC LIMIT 1');
        foreach ($qr as $id) {
            $lastId+= $id['id_layer'];
        }
        return $lastId;
    }
    public function validateConfigs()
    {
        $delay = Tools::getValue('JMS_SLIDER_DELAY');
        $x = Tools::getValue('JMS_SLIDER_X');
        $y = Tools::getValue('JMS_SLIDER_Y');
        $speed_in = Tools::getValue('JMS_SLIDER_SPEED_IN');
        $speed_out = Tools::getValue('JMS_SLIDER_SPEED_OUT');
        $duration = Tools::getValue('JMS_SLIDER_DURATION');
        $width = Tools::getValue('JMS_SLIDER_WIDTH');
        $height = Tools::getValue('JMS_SLIDER_HEIGHT');

        if (Tools::strlen($delay)==0 || Tools::strlen($x)==0 || Tools::strlen($y)==0 || Tools::strlen($duration)==0 ||
        Tools::strlen($speed_in)==0 || Tools::strlen($width)==0 || Tools::strlen($height)==0) {
            $this->_errors[] = $this->l('Please not to empty fields!');
        }

        if (!Validate::isInt($delay) || !Validate::isInt($x) || !Validate::isInt($y) || !Validate::isInt($speed_in)
            || !Validate::isInt($speed_out)  || !Validate::isInt($duration) || !Validate::isInt($width) || !Validate::isInt($height)) {
            $this->_errors[] = $this->l('Check value in fields not is type string');
        }

        if (count($this->_errors)<1) {
            return true;
        } else {
            $this->_html.=$this->displayError($this->_errors);
            return false;
        }

    }
    public function getSlideLang($id_slide)
    {
        return Db::getInstance()->getValue('
            SELECT id_lang FROM `'._DB_PREFIX_.'jms_slides_lang` WHERE id_slide = '.$id_slide);
    }

    public function clearCache()
    {
        $this->_clearCache('jmsslider.tpl');
    }

    public function redirectAdmin($msg, $page)
    {
        return Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true).'&conf='.$msg.$page.'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);

    }

    public function hookHeader()
    {
        if (!isset($this->context->controller->php_self) || $this->context->controller->php_self != 'index') {
                return;
        }
        $this->context->controller->addCSS(($this->_path).'views/css/fractionslider.css', 'all');
        $this->context->controller->addCSS(($this->_path).'views/css/front_style.css', 'all');
        $this->context->controller->addJS(($this->_path).'views/js/jquery.fractionslider.js', 'all');
    }

    public function hookDisplayHome()
    {
        $slides = $this->getSlidesLayers();
        $root_url = Tools::getHttpHost(true).__PS_BASE_URI__;
        $configs = $this->getFieldsConfig();
        $this->smarty->assign(array(
            'slides' => $slides,
            'root_url' => $root_url,
            'configs' => $configs,
            ));

        return $this->display(__FILE__, 'jmsslider.tpl');
    }
}
