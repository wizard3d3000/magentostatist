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

        /* it's work modul, it's can look data from a base

        $model = Mage::getModel('wizmagstatist/statist');
        $collection = $model->getCollection();

        foreach ($collection as $statist){
            echo 'id = '.$statist->getId().' Productname = '.$statist->getProductname().'<br>';
           //print_r($statist->debug());
           // Mage::log($statist, null, "debug_1.log");
           // Zend_Debug::dump($collection);
        }

        */

        /* it's save new row in table
        $model = Mage::getModel('wizmagstatist/statist');
        $model->setProductname('ProductName 3');
        $model->save();
        echo $model->getId();
        */

        /* it's chanching same row in table
        $model = Mage::getModel('wizmagstatist/statist')->load(5);
        $model->setProductname('Lord');
        $model->save();
        */

        /* it's sample from some web...
        $model = Mage::getModel('catalog/product')->load(27);
        $price = $model->getPrice();
        $price += 5;
        $model->setPrice($price)->setSku('SK83293432');
        $model->save();
        */

        /*
        //вывести сумму полей quantity у которых значение поля productname =  ProductName 3

        $model = Mage::getModel('wizmagstatist/statist');
        $collection = $model->getCollection();

        $count=0;
        foreach ($collection as $statist){
            if ($statist->getProductname()=='ProductName 3') {
                $count += ($statist->getQuantity())*1;
            }

        }
        echo $count;
        */
//        $currentOrderItems = Mage::getModel('sales/order')->load(221)->getAllItems();
        /**
         * it's my test of order
         */

        //$currentOrderItems = Mage::getModel('sales/order')->load(221)->getAllItems();

        /*
        $valuesCollection = Mage::getResourceModel('eav/entity_attribute_option_collection')
            ->setAttributeFilter(210)
            ->setStoreFilter(0, false)
            ->load();

        foreach ($valuesCollection as $item) {
            echo $item->getValue();
            echo $item->getId();
            var_dump($item);
        }*/

        /*
         $productId = 450;
         $product = Mage::getModel('catalog/product')->load($productId);
         $attributes = $product->getAttributes();
         foreach ($attributes as $item){
             if ($item->getId() == '210'){
                 echo $item->.'<br>';
             }
         }
        */

        // get all attributes of a product

        /**
         * it's worked version, this can get a value of vendorSKU about productid
         */
        $productId = 450;
        $product = Mage::getModel('catalog/product')->load($productId);
        echo $product->getAttributeText('vendorsku');
        echo 'sdfsdfsdfsdfsdf';




            //$collection = Mage::getModel('tasknews/news')->getCollection();
            //$newsAuthorsTable = Mage::getSingleton('core/resource')->getTableName('catalog/product');
            //$collection->getSelect()->join(array('authors'=> $newsAuthorsTable),'main_table.news_id=authors.news_id',array('author'));
            //$this->setCollection($collection);




//        $collection = Mage::getModel('wizmagstatist/statist')->getCollection();
//        //$productTable = Mage::getSingleton('core/resource')->getTableName('catalog/product');
//        $collection->getSelect()->join(array('value'=> 'eav_attribute_option_value'),'wizmagstatist_entities',array('vendorsku'));
//
//        $canape = Mage::getModel ("eav/entity_attribute_option")
//            -> getCollection()
//            -> join(
//                'eav/attribute_option_value',
//                'eav_attribute_option.option_id = eav_attribute_option_value.option_id', array('value'))
//            -> addFieldToFilter('attribute_id', '210')
//        ;
//
//        //var_dump($canape);
//        die($canape);



        /**
         * /it's my test of order
         */

//        $this->loadLayout();
//        $this->renderLayout();

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
