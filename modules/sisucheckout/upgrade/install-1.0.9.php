<?php
/**
 * This file is part of the simplesurance GmbH checkout plugin for PrestaShop.
 *
 * @author simplesurance GmbH
 * @copyright (C) simplesurance GmbH
 * @license see /LICENCE
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_0_9($object)
{
    return $object->registerHook('actionFrontControllerSetMedia');
}
