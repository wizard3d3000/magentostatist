<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 05.12.16
 * Time: 15:51
 */
class WizMag_Statist_Model_Statist extends Mage_Core_Model_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('wizmagstatist/statist');
    }

}