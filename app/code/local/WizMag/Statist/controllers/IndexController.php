<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02.12.16
 * Time: 13:46
 */


class WizMag_Statist_IndexController extends  Mage_Core_Controller_Front_Action{


    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
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
