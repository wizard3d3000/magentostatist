<?php
//
//class WizMag_Statist_Block_Adminhtml_Statist_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
//{
//
//    protected function _prepareForm()
//    {
//        $helper = Mage::helper('wizmagstatist');
//        $model = Mage::registry('current_news');
//
//        $form = new Varien_Data_Form(array(
//            'id' => 'edit_form',
//            'action' => $this->getUrl('*/*/save', array(
//                'id' => $this->getRequest()->getParam('id')
//            )),
//            'method' => 'post',
//            'enctype' => 'multipart/form-data'
//        ));
//
//        $this->setForm($form);
//
//        $fieldset = $form->addFieldset('news_form', array('legend' => $helper->__('News Information')));
//
//        $fieldset->addField('sku', 'text', array(
//            'label' => $helper->__('sku'),
//            'required' => true,
//            'name' => 'sku',
//        ));
//
//        $fieldset->addField('vendorsku', 'text', array(
//            'label' => $helper->__('vendorsku'),
//            'required' => true,
//            'name' => 'vendorsku',
//        ));
//
//        $fieldset->addField('productname', 'text', array(
//            'label' => $helper->__('productname'),
//            'required' => true,
//            'name' => 'productname',
//        ));
//    
//
//        $fieldset->addField('quantity', 'text', array(
//            'label' => $helper->__('quantity'),
//            'required' => true,
//            'name' => 'quantity',
//        ));
//
//        
//        $fieldset->addField('totalamount', 'text', array(
//            'label' => $helper->__('totalamount'),
//            'required' => true,
//            'name' => 'totalamount',
//        ));
//        
//
//        $fieldset->addField('lastsold', 'date', array(
//            'format' => Mage::app()->getLocale()->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT),
//            'image' => $this->getSkinUrl('images/grid-cal.gif'),
//            'label' => $helper->__('lastsold'),
//            'name' => 'lastsold'
//        ));
//
//
//        $form->setUseContainer(true);
//
//        if($data = Mage::getSingleton('adminhtml/session')->getFormData()){
//            $form->setValues($data);
//        } else {
//            $form->setValues($model->getData());
//        }
//
//        return parent::_prepareForm();
//    }
//
//}