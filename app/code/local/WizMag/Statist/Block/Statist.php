<?php
class WizMag_Statist_Block_Statist extends Mage_Core_Block_Template {

    public function getStatistCollection(){

        $collection = Mage::getModel('wizmagstatist/statist')->getCollection();
        $collection->setOrder('id','DESC');
        return $collection;

    }
}


