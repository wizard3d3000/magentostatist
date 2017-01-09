<?php

/**
 * Class WizMag_Statist_Block_Totalamount
 */
class WizMag_Statist_Block_Totalamount extends Mage_Core_Block_Template
{
    public function getTotalAmount()
    {
        $collection = Mage::getModel('wizmagstatist/statist')->getCollection();
        //return $a;
    }


}