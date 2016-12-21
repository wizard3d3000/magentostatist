<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 05.12.16
 * Time: 15:53
 */
class WizMag_Statist_Model_Resource_Statist extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('wizmagstatist/table_statist', 'id');
    }

}
