<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02.12.16
 * Time: 13:46
 */


class WizMag_Statist_IndexController extends  Mage_Core_Controller_Front_Action{


    public function getQtyAction()
    {

        $productId = (int)$this->getRequest()->getParam('id');
        //$statist = Mage::getModel('wizmagstatist/statist')->load($productId, 'product_id');

        $helper = Mage::helper('wizmagstatist');
        $quantity = $helper->getProductQuantity($productId);

        //Mage::log($quantity, null, "debug_.log");

        //$result = array('qty'=>$statist->getQ);
        $result = array('qty'=>$quantity);

        $this->getResponse()->setHeader('Content-type', 'application/json');
        $this->getResponse()->setBody(json_encode($result));
    }

    
    public function viewAction()
    {
        $newsId = Mage::app()->getRequest()->getParam('id', 0);
        $news = Mage::getModel('wizmagstatist/statist')->load($newsId);

        if ($news->getId() > 0) {
            $this->loadLayout();
            $this->getLayout()->getBlock('statist.content')->assign(array(
                "statistItem" => $news,
            ));
            $this->renderLayout();
        } else {
            $this->_forward('noRoute');
        }

    }

    public function secondAction(){
        echo '<h4>second Action</h4>';
    }

}
