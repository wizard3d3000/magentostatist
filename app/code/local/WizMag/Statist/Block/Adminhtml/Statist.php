<?php

/*
//рабочая версия 2016-12-09:17-00
class WizMag_Statist_Block_Adminhtml_Statist extends Mage_Adminhtml_Block_Template{
    public function getStatistCollection(){

        $collection = Mage::getModel('wizmagstatist/statist')->getCollection();
        $collection->setOrder('id','DESC');
        return $collection;

    }
}
*/

class WizMag_Statist_Block_Adminhtml_Statist extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected function _construct()
    {

        parent::_construct();

        $helper = Mage::helper('wizmagstatist');

        $this->_blockGroup = 'wizmagstatist';
        $this->_controller = 'adminhtml_statist';

    }
}

