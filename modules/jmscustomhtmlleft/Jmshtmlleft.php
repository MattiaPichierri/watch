<?php
/**
* 2007-2014 PrestaShop
*
* Custom html Left hook
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2014 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

class JmsHtmlLeft extends ObjectModel
{
    /** @var integer info id*/
    public $html_id;
    public $html;
    public $id_shop;

    public static $definition = array(
        'table' => 'jmshtml_left',
        'primary' => 'html_id',
        'multilang' => true,
        'fields' => array(
            'id_shop' =>                array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),
            'html' =>                   array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => false),
        )
    );
    public function __construct($html_id = null, $id_lang = null, $id_shop = null)
    {
        parent::__construct($html_id, $id_lang, $id_shop);
    }
}
