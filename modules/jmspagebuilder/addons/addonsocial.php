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

class JmsAddonSocial extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'social';
        $this->modulename = 'jmspagebuilder';
        $this->addontitle = 'Social Icon';
        $this->addondesc = 'Social Icons for your site';
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
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'desc',
                'label' => $this->l('Description'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon description. Leave blank if no description is needed.',
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'facebook_url',
                'label' => $this->l('FaceBook URL'),
                'lang' => '0',
                'desc' => 'our Facebook fan page.',
                'default' => 'https://www.facebook.com/joommasters2015'
            ),
             array(
                'type' => 'text',
                'name' => 'twitter_url',
                'label' => $this->l('Twitter Url'),
                'lang' => '0',
                'desc' => 'Your Linkedin Page.',
                'default' => '#'
            ),
            array(
                'type' => 'text',
                'name' => 'linkedin_url',
                'label' => $this->l('LinkedIn Url'),
                'lang' => '0',
                'desc' => 'Your official Twitter accounts.',
                'default' => '#'
            ),
            array(
                'type' => 'text',
                'name' => 'youtube_url',
                'label' => $this->l('YouTube Url'),
                'lang' => '0',
                'desc' => 'Your official YouTube account.',
                'default' => '#'
            ),
            array(
                'type' => 'text',
                'name' => 'google_plus_url',
                'label' => $this->l('Google Plus Url'),
                'lang' => '0',
                'desc' => 'You official Google Plus page.',
                'default' => '#'
            ),
            array(
                'type' => 'text',
                'name' => 'pinterest_url',
                'label' => $this->l('Pinterest Url'),
                'lang' => '0',
                'desc' => 'Your official Pinterest account.',
                'default' => '#'
            ),
            array(
                'type' => 'text',
                'name' => 'instagram_url',
                'label' => $this->l('Instagram Url'),
                'lang' => '0',
                'desc' => 'Your official Instagram account.',
                'default' => '#'
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
		if(isset($addon->fields[8]->name) && $addon->fields[8]->name != 'instagram_url') {
			$instagram_url = $addon->fields[8]->value;			
		} else {			
			$instagram_url = '#';
		}
        $this->context->smarty->assign(array(
                'link' => $this->context->link,
                'addon_title' => JmsPageBuilderHelper::decodeHTML($addon->fields[0]->value->$id_lang),
                'addon_desc' => JmsPageBuilderHelper::decodeHTML($addon->fields[1]->value->$id_lang),
                'facebook_url' => $addon->fields[2]->value,
                'twitter_url' => $addon->fields[3]->value,
                'linkedin_url' => $addon->fields[4]->value,
                'youtube_url' => $addon->fields[5]->value,
                'google_plus_url' => $addon->fields[6]->value,
                'pinterest_url' => $addon->fields[7]->value,
                'instagram_url' => $instagram_url
        ));
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
