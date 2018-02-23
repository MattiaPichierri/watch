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

class JmsImportExport extends Module
{
    public function __construct()
    {
        $this->name = 'jmspagebuilder';
        parent::__construct();
    }
    public function getHomepage($id_homepage)
    {
        $req = 'SELECT hs.*
                FROM `'._DB_PREFIX_.'jmspagebuilder_homepages` hs
                WHERE hs.`id_homepage` = '.(int)$id_homepage;
        $homepage = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);
        return ($homepage);
    }

    public function exportHomepage($id_homepage)
    {
        $homepage = $this->getHomepage($id_homepage);
        $filename = str_replace(' ', '_', $homepage['title']).'.txt';
        header('Content-type: text/xml');
        header('Content-Disposition: attachment; filename="'.Tools::strtolower($filename).'"');
        $_output = $homepage['params'];
        echo $_output;
        exit;
    }
}
