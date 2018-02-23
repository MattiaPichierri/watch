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

require_once(_PS_MODULE_DIR_.'jmspagebuilder/classes/jmsHelper.php');
class JmsAddonBase extends Module
{
    public $name = '';
    public $modulename = 'jmspagebuilder';
    public $id_shop = 0;
    public $inputs = array();
    public $root_url = '';

    public function __construct()
    {
        $this->modulename = 'jmspagebuilder';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();
        $this->root_url = JmsPageBuilderHelper::getRootUrl();
    }
    public function getInputs()
    {
    }
    public function genAddonListHeader()
    {
        if (!Module::isInstalled($this->modulename)) {
            $html = '<a class="addon-title disabled" data-type="html" title="You need install '.$this->modulename.' module to use this addon.">';
        } else {
            $html = '<a class="addon-title" data-type="html">';
        }
        $html .= '<img src="'._MODULE_DIR_.'jmspagebuilder/views/img/addons/'.$this->addonname.'.png" />
                    <span class="element-title">'.$this->addontitle.'</span>
                    <span class="element-description">'.$this->addondesc.'</span>
                </a>
                <div class="addon-box addon" data-addon="'.$this->addonname.'" data-active="1">
                    <i class="addon-icon '.$this->addonname.'-icon"></i><span class="addon-title">'.$this->addontitle.'</span>
                    <div class="addon-tools">
                        <a class="active-addon"><i class="icon-check"></i></a>
                        <a class="edit-addon"><i class="icon-edit"></i></a>
                        <a class="duplicate-addon"><i class="icon-copy"></i></a>
                        <a class="remove-addon"><i class="icon-trash"></i></a>
                    </div>';
        return  $html;
    }
    public function genAddonListFields()
    {
        $languages = Language::getLanguages(false);
        $defaultFormLanguage = (int)(Configuration::get('PS_LANG_DEFAULT'));
        $fields = $this->getInputs();
        $html = '';
        if ($this->modulename != 'jmspagebuilder') {
            $html .= '<p class="alert alert-info">To use this addon you need go to : <strong>Modules >> '.$this->modulename.'</strong> to Manager Data.</p>';
        }
        foreach ($fields as $field) {
            $html .= '<div class="form-group">';
            $html .= '<label>'.$field['label'].'</label>';
            if ($field['lang'] == '1') {
                $html .= '<div class="addon-input" data-type="'.$field['type'].'" data-attrname="'.$field['name'].'" data-multilang="1">';
                foreach ($languages as $language) {
                    $id_lang = (int)$language['id_lang'];
                    if (count($languages) > 0) {
                        $html .= '<div class="translatable-field lang-'.$id_lang.'"';
                        if ($id_lang != $defaultFormLanguage) {
                            $html .= 'style="display:none;"';
                        }
                        $html .= '>';
                        $html .= '<div class="col-lg-11">';
                    }
                    if ($field['type'] == 'text') {
                        $html .= '<input type="text"';
                        if (isset($field['default'])) {
                            $html .= ' value="'.$field['default'].'"';
                        }
                    } elseif ($field['type'] == 'textarea' || $field['type'] == 'editor') {
                        $html .= '<textarea ';
                    } elseif ($field['type'] == 'checkbox') {
                        $html .= '<input type="checkbox" ';
                    } elseif ($field['type'] == 'number') {
                        $html .= '<input type="number" ';
                        if (isset($field['default'])) {
                            $html .= ' value="'.$field['default'].'"';
                        }
                    }
                    $html .= 'class="lang-input addon-'.$field['name'];
                    if ($field['type'] == 'editor') {
                        $html .= ' jms-editor';
                    }
                    $html .= '" data-type="'.$field['type'].'" data-attrname="'.$field['type'].'" data-lang="'.$id_lang.'" data-multilang="1"';
                    if (isset($field['rows']) && (int)$field['rows'] > 0) {
                        $html .= ' rows="'.$field['rows'].'"';
                    }
                    if (isset($field['rows']) && (int)$field['cols'] > 0) {
                        $html .= ' cols="'.$field['cols'].'"';
                    }
                    if ($field['type'] == 'textarea' || $field['type'] == 'editor') {
                        $html .= '>';
                        if (isset($field['default'])) {
                            $html .= $field['default'];
                        }
                        $html .= '</textarea>';
                    } elseif ($field['type'] == 'text' || $field['type'] == 'checkbox' || $field['type'] == 'number') {
                        $html .= ' />';
                    }
                    if (count($languages) > 0) {
                        $html .= '</div>
                                <div class="col-lg-1">
                                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">'.$language['iso_code'].'<span class="caret"></span></button><ul class="dropdown-menu">';
                        foreach ($languages as $language) {
                            $id_lang2 = (int)$language['id_lang'];
                            $html .= '<li><a href="javascript:hideOtherLanguage('.$id_lang2.');" tabindex="-1">'.$language['name'].'</a></li>';
                        }
                        $html .= '</ul></div>';
                    }
                    $html .= '</div>';
                }
                $html .= '</div>';
            } else {
                $tag_att = 'class="addon-input addon-'.$field['name'];
                if ($field['type'] == 'editor') {
                    $tag_att .= ' jms-editor';
                }
                if ($field['type'] == 'image') {
                    $tag_att .= ' jms-image';
                }
                if ($field['type'] == 'categories') {
                    $tag_att .= ' addon-categories';
                }
                $tag_att .= '" data-type="'.$field['type'].'" data-attrname="'.$field['name'].'" data-multilang="0"';
                if (isset($field['rows']) && (int)$field['rows'] > 0) {
                    $tag_att .= ' rows="'.$field['rows'].'"';
                }
                if (isset($field['cols']) && (int)$field['cols'] > 0) {
                    $tag_att .= ' cols="'.$field['cols'].'"';
                }
                if ($field['type'] == 'text') {
                    $html .= '<input type="text" '.$tag_att;
                    if (isset($field['default'])) {
                        $html .= ' value="'.$field['default'].'"';
                    }
                } elseif ($field['type'] == 'textarea' || $field['type'] == 'editor') {
                    $html .= '<textarea '.$tag_att;
                } elseif ($field['type'] == 'checkbox') {
                    $html .= '<input type="checkbox" '.$tag_att;
                } elseif ($field['type'] == 'switch') {
                    $html .= '<select name="'.$field['name'].'" '.$tag_att.'>';
                    $html .= '<option value="1"';
                    if (isset($field['default']) && $field['default'] == '1') {
                        $html .= 'selected="selected"';
                    }
                    $html .= '>Yes</option>';
                    $html .= '<option value="0"';
                    if (isset($field['default']) && $field['default'] == '0') {
                        $html .= 'selected="selected"';
                    }
                    $html .= '>No</option>';
                    $html .= '</select>';
                } elseif ($field['type'] == 'select') {
                    $html .= '<select name="'.$field['name'].'" '.$tag_att.'>';
                    foreach ($field['options'] as $option) {
                        $html .= '<option value="'.$option.'"';
                        if (isset($field['default']) && $field['default'] == $option) {
                            $html .= 'selected="selected"';
                        }
                        $html .= '>'.$option.'</option>';
                    }
                    $html .= '</select>';
                } elseif ($field['type'] == 'categories') {
                    $category = Tools::getValue('category', Category::getRootCategory()->id);
                    $categories = new HelperTreeCategories($field['name']."-".rand(1, 1e6));
                    if (version_compare(_PS_VERSION_, '1.6.1', '>=') === true) {
                        $categories->setUseSearch(0)
                        ->setInputName($field['name'])
                        ->setFullTree(1)
                        ->setRootCategory($category)
                        ->setChildrenOnly(true)
                        ->setNoJS(true);
                    } else {
                        $categories->setRootCategory($category);
                    }
                    if ($field['usecheckbox'] == '1') {
                        $categories->setUseCheckBox(1);
                    } else {
                        $categories->setUseCheckBox(0);
                    }
                    $html .= '<div '.$tag_att.'>';
                    $html .= $categories->render();
                    $html .= '</div>';
                } elseif ($field['type'] == 'image') {
                    $html .= '<input type="hidden" '.$tag_att.'><img height="100px" class="media-preview"><a title="Select" class="show-fancybox btn btn-primary" href="index.php?controller=AdminJmspagebuilderMedia">Select</a><a href="#" class="btn btn-danger remove-media"><i class="icon-remove"></i></a>';
                } elseif ($field['type'] == 'number') {
                    $html .= '<input type="number" '.$tag_att;
                    if (isset($field['default'])) {
                        $html .= ' value="'.$field['default'].'"';
                    }
                }
                if ($field['type'] == 'textarea' || $field['type'] == 'editor') {
                    $html .= '>';
                    if (isset($field['default'])) {
                        $html .= $field['default'];
                    }
                    $html .= '</textarea>';
                } elseif ($field['type'] == 'text' || $field['type'] == 'checkbox' || $field['type'] == 'number') {
                    $html .= ' />';
                }
            }
            if (isset($field['desc']) && $field['desc']) {
                $html .= '<p class="help-block">'.$field['desc'].'</p>';
            }
            $html .= '</div>';
        }
        return $html;
    }

    public function genAddonList()
    {
        $html = $this->genAddonListHeader();
        $html .= '<div class="item-inner">';
        $html .= $this->genAddonListFields();
        $html .= '</div>';
        return  $html;
    }

    public function genAddonLayout($addon)
    {
        $this->root_url = JmsPageBuilderHelper::getRootUrl();
        $languages = Language::getLanguages(false);
        $defaultFormLanguage = (int)(Configuration::get('PS_LANG_DEFAULT'));
        if ($this->addonname == 'module') {
            $html = '<div class="addon-box" data-addon="module" data-modulename="'.$addon->settings->modulename.'" data-hook="'.$addon->settings->hook.'" data-active="'.(isset($addon->settings->active) ? $addon->settings->active : '1').'">
                        <i class="addon-icon module-icon"></i>
                        <span class="addon-title">'.$addon->settings->modulename.'</span>
                        <div class="addon-tools">
                            <a class="active-addon"><i class="icon-'.((isset($addon->settings->active) && $addon->settings->active == '0') ? 'remove' : 'check').'"></i></a>
                            <a class="edit-addon"><i class="icon-edit"></i></a>
                            <a class="duplicate-addon"><i class="icon-copy"></i></a>
                            <a class="remove-addon"><i class="icon-trash"></i></a>
                        </div>
                    </div>';
        } else {
            $html = '<div class="addon-box" data-addon="'.$addon->settings->addon.'" data-active="'.(isset($addon->settings->active) ? $addon->settings->active : '1').'">
                        <i class="addon-icon '.$addon->settings->addon.'-icon"></i>
                        <span class="addon-title">'.$this->addontitle.'</span>
                        <div class="addon-tools">
                            <a class="active-addon"><i class="icon-'.((isset($addon->settings->active) && $addon->settings->active == '0') ? 'remove' : 'check').'"></i></a>
                            <a class="edit-addon"><i class="icon-edit"></i></a>
                            <a class="duplicate-addon"><i class="icon-copy"></i></a>
                            <a class="remove-addon"><i class="icon-trash"></i></a>
                        </div>
                        <div class="item-inner">';
            if ($this->modulename != 'jmspagebuilder') {
                $html .= '<p class="alert alert-info">To use this addon you need go to : <strong>Modules >> '.$this->modulename.'</strong> to Manager Data.</p>';
            }
            foreach ($addon->fields as $findex => $field) {
                $_desc = $this->getDesc($findex);
                $html .= '<div class="form-group">
                            <label>'.$field->label.'</label>';
                if ($field->multilang == '1') {
                    $html .= '<div class="addon-input" data-type="'.$field->type.'" data-attrname="'.$field->name.'" data-multilang="1">';
                    foreach ($languages as $language) {
                        $id_lang = (int)$language['id_lang'];
                        if (count($languages) > 0) {
                            $html .= '<div class="translatable-field lang-'.$id_lang.'"';
                            if ($id_lang != $defaultFormLanguage) {
                                $html .= 'style="display:none;"';
                            }
                            $html .= '>';
                            $html .= '<div class="col-lg-11">';
                        }
                        $tag_att = 'class="lang-input addon-'.$field->name;
                        if ($field->type == 'editor') {
                            $tag_att .= ' jms-editor';
                        }
                        $tag_att .= '" data-type="'.$field->type.'" data-attrname="'.$field->type.'" data-lang="'.$id_lang.'" data-multilang="1"';
                        if (isset($field->rows) && (int)$field->rows > 0) {
                            $tag_att .= ' rows="'.$field->rows.'"';
                        }
                        if (isset($field->cols) && (int)$field->cols > 0) {
                            $tag_att .= ' cols="'.$field->cols.'"';
                        }
                        if ($field->type == 'text') {
                            if (isset($field->value->$id_lang)) {
                                $html .= '<input type="text" value="'.JmsPageBuilderHelper::decodeHTML($field->value->$id_lang).'" '.$tag_att;
                            } else {
                                $html .= '<input type="text" value="" '.$tag_att;
                            }
                        } elseif ($field->type == 'textarea' || $field->type == 'editor') {
                            $html .= '<textarea '.$tag_att;
                        } elseif ($field->type == 'checkbox') {
                            $html .= '<input type="checkbox" '.$tag_att;
                        } elseif ($field->type == 'number') {
                            if (isset($field->value->$id_lang)) {
                                $html .= '<input type="number" value="'.$field->value->$id_lang.'" '.$tag_att;
                            } else {
                                $html .= '<input type="number" value="" '.$tag_att;
                            }
                        }
                        if ($field->type == 'textarea' || $field->type == 'editor') {
                            if (isset($field->value->$id_lang)) {
                                $html .= '>'.htmlentities(JmsPageBuilderHelper::decodeHTML($field->value->$id_lang)).'</textarea>';
                            } else {
                                $html .= '></textarea>';
                            }
                        } elseif ($field->type == 'text' || $field->type == 'checkbox' || $field->type == 'number') {
                            $html .= ' />';
                        }
                        if (count($languages) > 0) {
                            $html .= '</div>
                                <div class="col-lg-1">
                                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">'.$language['iso_code'].'<span class="caret"></span></button><ul class="dropdown-menu">';
                            foreach ($languages as $language) {
                                $id_lang2 = (int)$language['id_lang'];
                                $html .= '<li><a href="javascript:hideOtherLanguage('.$id_lang2.');" tabindex="-1">'.$language['name'].'</a></li>';
                            }
                            $html .= '</ul></div>';
                        }
                        $html .= '</div>';
                    }
                    $html .= '</div>';
                } else {
                    $tag_att = 'class="addon-input addon-'.$field->name;
                    if ($field->type == 'editor') {
                        $tag_att .= ' jms-editor';
                    }
                    if ($field->type == 'image') {
                        $tag_att .= ' jms-image';
                    }
                    if ($field->type == 'categories') {
                        $tag_att .= ' addon-categories';
                    }
                    $tag_att .= '" data-type="'.$field->type.'" data-attrname="'.$field->name.'" data-multilang="0"';
                    if (isset($field->rows) && (int)$field->rows > 0) {
                        $tag_att .= ' rows="'.$field->rows.'"';
                    }
                    if (isset($field->cols) && (int)$field->cols > 0) {
                        $tag_att .= ' cols="'.$field->cols.'"';
                    }
                    if ($field->type == 'text') {
                        $html .= '<input type="text" value="'.JmsPageBuilderHelper::decodeHTML($field->value).'" '.$tag_att;
                    } elseif ($field->type == 'textarea' || $field->type == 'editor') {
                        $html .= '<textarea '.$tag_att;
                    } elseif ($field->type == 'checkbox') {
                        $html .= '<input type="checkbox" '.$tag_att;
                    } elseif ($field->type == 'switch') {
                        $html .= '<select name="'.$field->name.'" '.$tag_att.'>';
                        $html .= '<option value="1"';
                        if ($field->value == '1') {
                            $html .= 'selected="selected"';
                        }
                        $html .= '>Yes</option>';
                        $html .= '<option value="0"';
                        if ($field->value == '0') {
                            $html .= 'selected="selected"';
                        }
                        $html .= '>No</option>';
                        $html .= '</select>';
                    } elseif ($field->type == 'select') {
                        $_options = $this->getFieldAttr($findex, 'options');
                        $html .= '<select name="'.$field->name.'" '.$tag_att.'>';
                        foreach ($_options as $_option) {
                            $html .= '<option value="'.$_option.'"';
                            if ($field->value == $_option) {
                                $html .= 'selected="selected"';
                            }
                            $html .= '>'.$_option.'</option>';
                        }
                        $html .= '</select>';
                    } elseif ($field->type == 'categories') {
                        $_usecheckbox = $this->getFieldAttr($findex, 'usecheckbox');
                        $category = Tools::getValue('category', Category::getRootCategory()->id);
                        $categories = new HelperTreeCategories($field->name."-".rand(1, 1e6));
                        if (version_compare(_PS_VERSION_, '1.6.1', '>=') === true) {
                             $categories->setUseSearch(0)
                            ->setInputName($field->name)
                            ->setFullTree(1)
                            ->setSelectedCategories(explode(",", $field->value))
                            ->setRootCategory($category)
                            ->setChildrenOnly(false)
                            ->setNoJS(true);
                        } else {
                            $categories->setRootCategory($category);
                        }
                        if ($_usecheckbox == '1') {
                            $categories->setUseCheckBox(1);
                        } else {
                            $categories->setUseCheckBox(0);
                        }
                        $html .= '<div '.$tag_att.'>';
                        $html .= $categories->render();
                        $html .= '</div>';
                    } elseif ($field->type == 'image') {
                        $html .= '<input type="hidden" '.$tag_att.' value="'.$field->value.'"><img height="100px" class="media-preview" src="'.$this->root_url.$field->value.'"><a title="Select" class="show-fancybox btn btn-primary" href="index.php?controller=AdminJmspagebuilderMedia">Select</a><a href="#" class="btn btn-danger remove-media"><i class="icon-remove"></i></a>';
                    } elseif ($field->type == 'number') {
                        $html .= '<input type="number" value="'.$field->value.'" '.$tag_att;
                    }
                    if ($field->type == 'textarea' || $field->type == 'editor') {
                        $html .= '>'.htmlentities(JmsPageBuilderHelper::decodeHTML($field->value)).'</textarea>';
                    } elseif ($field->type == 'text' || $field->type == 'checkbox' || $field->type == 'number') {
                        $html .= ' />';
                    }
                }
                if ($_desc) {
                    $html .= '<p class="help-block">'.$_desc.'</p>';
                }
                $html .= '</div>';
            }
            $html .= '</div></div>';
        }
        return  $html;
    }
    public function loadTplDir()
    {
        $tpl_dir = _PS_MODULE_DIR_.'jmspagebuilder/views/templates/hook/';
        if (file_exists(_PS_THEME_DIR_.'modules/jmspagebuilder/views/templates/hook/')) {
            $tpl_dir = _PS_THEME_DIR_.'modules/jmspagebuilder/views/templates/hook/';
        }
        return $tpl_dir;
    }
    public function loadTplPath()
    {
        $template = 'addon'.$this->addonname.'.tpl';
        if ($this->overwrite_tpl && Tools::file_exists_cache(_PS_THEME_DIR_.'modules/jmspagebuilder/views/templates/hook/'.$this->overwrite_tpl.'.tpl')) {
            return _PS_THEME_DIR_.'modules/jmspagebuilder/views/templates/hook/'.$this->overwrite_tpl.'.tpl';
        } elseif ($this->overwrite_tpl && Tools::file_exists_cache(_PS_MODULE_DIR_.'jmspagebuilder/views/templates/hook/'.$this->overwrite_tpl.'.tpl')) {
            return _PS_MODULE_DIR_.'jmspagebuilder/views/templates/hook/'.$this->overwrite_tpl.'.tpl';
        } elseif (Tools::file_exists_cache(_PS_THEME_DIR_.'modules/jmspagebuilder/views/templates/hook/'.$template)) {
            return _PS_THEME_DIR_.'modules/jmspagebuilder/views/templates/hook/'.$template;
        } elseif (Tools::file_exists_cache(_PS_MODULE_DIR_.'jmspagebuilder/views/templates/hook/'.$template)) {
            return _PS_MODULE_DIR_.'jmspagebuilder/views/templates/hook/'.$template;
        } else {
            return '';
        }
    }
    public function getFieldAttr($findex, $attrname)
    {
        $fields = $this->getInputs();
        if (isset($fields[$findex][$attrname])) {
            return $fields[$findex][$attrname];
        } else {
            return null;
        }
    }
    public function getDesc($findex)
    {
        $fields = $this->getInputs();
        if (isset($fields[$findex]['desc'])) {
            return $fields[$findex]['desc'];
        } else {
            return "";
        }
    }
}
