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
include_once(_PS_MODULE_DIR_.'jmspagebuilder/lib/twitterphp/TweetPHP.php');
class JmsAddonTwitter extends JmsAddonBase
{
    public function __construct()
    {
        $this->modulename = 'jmspagebuilder';
        $this->addonname = 'twitter';
        $this->addontitle = 'Twitter Feed';
        $this->addondesc = 'Show latest twitter feed';
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
                'default' => 'Tweets'
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
                'name' => 'username',
                'lang' => '0',
                'label' => $this->l('Twitter Username'),
                'desc' => 'Enter Twitter username',
                'default' => 'joommasters'
            ),
            array(
                'type' => 'text',
                'name' => 'consumer_key',
                'lang' => '0',
                'label' => $this->l('Consumer Key'),
                'desc' => 'Twitter API Consumer Key',
                'default' => 'uIY2u9EleSSuBQSDazdtZLoin'
            ),
            array(
                'type' => 'text',
                'name' => 'consumer_secret',
                'lang' => '0',
                'label' => $this->l('Consumer Secret'),
                'desc' => 'Twitter API Consumer Secret',
                'default' => 'eSIw9f14e0aogX2o02pAE4VqPuQGITC5skH96lWGbqhemmtxos'
            ),
            array(
                'type' => 'text',
                'name' => 'access_token',
                'lang' => '0',
                'label' => $this->l('Access Token'),
                'desc' => 'Twitter API Access Token',
                'default' => '37429157-3o3jilq1ZYW641s2AeA1gjvvxghpmTDSog4M1BZ9p'
            ),
            array(
                'type' => 'text',
                'name' => 'access_token_secret',
                'lang' => '0',
                'label' => $this->l('Access Token Secret'),
                'desc' => 'Twitter API Access Token Secret',
                'default' => 'RS7OqZGJaN17a41voftENda1kBifMfhgkiQmfcvWdxTUS'
            ),
            array(
                'type' => 'text',
                'name' => 'tweets_to_display',
                'lang' => '0',
                'label' => $this->l('Tweets To Display'),
                'desc' => 'Number of Tweets To Display',
                'default' => 3
            ),
            array(
                'type' => 'switch',
                'name' => 'enable_cache',
                'label' => $this->l('Enable Cache'),
                'lang' => '0',
                'desc' => 'Cache Enable/Disable',
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
        $this->context = Context::getContext();
        $id_lang = $this->context->language->id;
        if ($addon->fields[8]->value == '1') {
            $enable_cache = true;
        } else {
            $enable_cache = false;
        }
        $TweetPHP = new TweetPHP(array(
          'consumer_key'              => $addon->fields[3]->value,
          'consumer_secret'           => $addon->fields[4]->value,
          'access_token'              => $addon->fields[5]->value,
          'access_token_secret'       => $addon->fields[6]->value,
          'twitter_screen_name'       => $addon->fields[2]->value,
          'tweets_to_display'         => $addon->fields[7]->value,
          'enable_cache'              => $enable_cache
        ));
        $tweets = $TweetPHP->get_tweet_list();
        $this->context->smarty->assign(array(
                'link' => $this->context->link,
                'tweets' => $tweets,
                'addon_title' => $addon->fields[0]->value->$id_lang,
                'addon_desc' => $addon->fields[1]->value->$id_lang
        ));
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
