<?php
/**
* 2007-2017 PrestaShop
*
* Jms Theme Layout
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

class JmsPageBuilderHelper extends Module
{
    public function __construct()
    {
        $this->name = 'jmspagebuilder';
        parent::__construct();
    }
    public static function getModules()
    {
        $not_module = array('jmspagebuilder', 'themeconfigurator', 'themeinstallator', 'cheque', 'autoupgrade', 'statsbestcategories', 'statsbestcustomers','statsbestproducts', 'statsbestsuppliers', 'statsbestvouchers', 'statscarrier', 'statscatalog', 'statscheckup', 'statsequipment', 'statsforecast', 'statslive', 'statsnewsletter', 'statsorigin', 'statspersonalinfos', 'statsproduct', 'statsregistrations', 'statssales', 'statssearch', 'statsstock', 'statsvisits', 'cronjobs', 'pagesnotfound', 'sekeywords', 'gamification', 'gridhtml', 'graphnvd3','jmsblog','jmstestimonials','jmsmaplocation','jmsbrands','jmsexplorer','jmsslider');
        $where = '';
        if (count($not_module) == 1) {
            $where = ' WHERE m.`name` <> \''.$not_module[0].'\'';
        } elseif (count($not_module) > 1) {
            $where = ' WHERE m.`name` NOT IN (\''.implode("','", $not_module).'\')';
        }
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $sql = 'SELECT m.name
                FROM `'._DB_PREFIX_.'module` m
                JOIN `'._DB_PREFIX_.'module_shop` ms ON (m.`id_module` = ms.`id_module` AND ms.`id_shop` = '.(int)$id_shop.')
                '.$where;
        $module_list = Db::getInstance()->ExecuteS($sql);
        $module_info = ModuleCore::getModulesOnDisk(true);
        $modulenames = array();
        $modulenames[] = '';
        foreach ($module_list as $m) {
            foreach ($module_info as $mi) {
                if ($m['name'] === $mi->name) {
                    break;
                }
            }
            $modulenames[] = $m['name'];
        }
        return $modulenames;
    }
    public static function MNexec($hook_name, $module_name = null)
    {
        if (empty($module_name) || !Validate::isHookName($hook_name)) {
            die(Tools::displayError());
        }

        if (!($moduleInstance = Module::getInstanceByName($module_name))) {
            return;
        }
        $hook_args = array();
        $context = Context::getContext();
        if (!isset($hook_args['cookie']) || !$hook_args['cookie']) {
            $hook_args['cookie'] = $context->cookie;
        }
        if (!isset($hook_args['cart']) || !$hook_args['cart']) {
            $hook_args['cart'] = $context->cart;
        }
        $altern = 0;
        if ($hook_name != 'widget') {
            $retro_hook_name = Hook::getRetroHookName($hook_name);

            $hook_callable = is_callable(array($moduleInstance, 'hook'.$hook_name));
            $hook_retro_callable = is_callable(array($moduleInstance, 'hook'.$retro_hook_name));
            $output = '';

            if ($hook_callable || $hook_retro_callable) {
                $hook_args['altern'] = ++$altern;
                // Call hook method
                if ($hook_callable) {
                    $output = Hook::coreCallHook($moduleInstance, 'hook'.$hook_name, $hook_args);
                } elseif ($hook_retro_callable) {
                    $output = Hook::coreCallHook($moduleInstance, 'hook'.$retro_hook_name, $hook_args);
                }
            }
        } else {
            $output = Hook::coreRenderWidget($moduleInstance, 'displayTop', array());
        }
        return $output;
    }
    public static function decodeHTML($str)
    {
        $str = str_replace(htmlentities("_JMSQUOTE_"), '"', $str);
        $str = str_replace(htmlentities("_JMSQUOTE2_"), "'", $str);
        $str = str_replace(htmlentities("_JMSSLASH_"), "\\", $str);
        $str = str_replace(htmlentities("_JMSLB_"), "\n", $str);
        $str = str_replace(htmlentities("_JMSRN_"), "\r", $str);
        $str = str_replace(htmlentities("_JMSTAB_"), "\t", $str);
        return $str;
    }
    public static function getVideoSrc($src_url)
    {
        $video_url = parse_url($src_url);
        switch($video_url['host']) {
            case 'youtu.be':
                $id = trim($video_url['path'], '/');
                $src = '//www.youtube.com/embed/' . $id;
                break;

            case 'www.youtube.com':
            case 'youtube.com':
                parse_str($video_url['query'], $query);
                $id = $query['v'];
                $src = '//www.youtube.com/embed/' . $id;
                break;

            case 'vimeo.com':
            case 'www.vimeo.com':
                $id = trim($video_url['path'], '/');
                $src = "//player.vimeo.com/video/{$id}";
        }
        return $src;
    }
    public static function returnBytes($val)
    {
        $val = trim($val);
        $last = Tools::strtolower($val[Tools::strlen($val)-1]);
        $_val = Tools::substr($val, 0, Tools::strlen($val)-1);
        if ($last == 'g') {
             $result = $_val*1024*1024*1024;
        }
        if ($last == 'm') {
             $result = $_val*1024*1024;
        }
        if ($last == 'k') {
             $result = $_val*1024;
        }
        return $result;
    }
    public static function getAddonDesc($addonname, $findex)
    {
        $addonfile = 'addon'.addonname.'.php';
        $addonclass = 'JmsAddon'.Tools::ucfirst($addonname);
        if (file_exists(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile)) {
            require_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile);
        }
        $addon_instance = new $addonclass();
        return $addon_instance->getDesc($findex);
    }


    public static function getFilePermission($file)
    {
        $length = Tools::strlen(decoct(fileperms($file)))-3;
        return Tools::substr(decoct(fileperms($file)), $length);
    }
    public static function hasSubDir($dir)
    {
        if (!is_readable($dir)) {
            return false;
        }
        $items = scandir($dir);
        if (count($items) <= 0) {
            return false;
        }
        foreach ($items as $item) {
            if (is_dir($dir.'/'.$item) && $item != '.' && $item != '..') {
                return true;
            }
        }
    }
    public static function getHomePages($active = '')
    {
        $query = 'SELECT *
            FROM '._DB_PREFIX_.'jmspagebuilder_homepages pb';
        if ($active != '') {
            $query .= " WHERE active = '".$active."'";
        }
        $query .= ' ORDER BY pb.ordering';
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);
    }
    public static function getRootUrl()
    {
        $force_ssl = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE');
        $protocol_link = (Configuration::get('PS_SSL_ENABLED') || Tools::usingSecureMode()) ? 'https://' : 'http://';
        if (isset($force_ssl) && $force_ssl) {
            $root_url = $protocol_link.Tools::getShopDomainSsl().__PS_BASE_URI__;
        } else {
            $root_url = _PS_BASE_URL_.__PS_BASE_URI__;
        }
        return $root_url;
    }
    public static function getNbOfSales($id_product)
    {
        $res = Db::getInstance()->getRow('
            SELECT quantity FROM `'._DB_PREFIX_.'product_sale`
            WHERE `id_product` = '.(int)$id_product);
            return $res['quantity'];
    }
	public static function getFiles($_folder, $_prefix)
    {
		$folder_path = _PS_ROOT_DIR_.'/themes/'._THEME_NAME_.'/'.$_folder;		
		
        $ffs = scandir($folder_path);				
		$result = array();			
		foreach($ffs as $ff){
			$ext = pathinfo($ff, PATHINFO_EXTENSION);	
			if(!is_dir($folder_path.'/'.$ff) && $ff != '.' && $ff != '..' && (strpos($ff, $_prefix) === 0)) {
				$result[]['file'] = $ff;								
			}
		}		
		return $result;
    }
}
