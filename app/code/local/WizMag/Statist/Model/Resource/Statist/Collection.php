<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 05.12.16
 * Time: 15:55
 */
class WizMag_Statist_Model_Resource_Statist_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('wizmagstatist/statist');
    }

}