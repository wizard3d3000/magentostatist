<?php

class WizMag_Statist_Block_Adminhtml_Statist_Grid extends Mage_Adminhtml_Block_Widget_Grid
{


    protected function _prepareCollection()
    {
        $collection = Mage::getModel('wizmagstatist/statist')->getCollection();
        #TODO: join product Vendor SKU


        /**
         * it's part of attribute columns to joing in the module's grid
         */
//        $collection->getSelect()->joinLeft(array('value' => 'eav_attribute_option_value'),
//            'value = productname',
//            array(), null, 'left'
//        );
//

        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        $helper = Mage::helper('wizmagstatist');

        $this->addColumn('id', array(
            'header' => $helper->__('id'),
            'index' => 'id'
        ));

        $this->addColumn('sku', array(
            'header' => $helper->__('SKU'),
            'index' => 'sku',
            'type' => 'text',
        ));

//        $this->addColumn('vendorsku', array(
//            'header' => $helper->__('VendorSKU'),
//            'index' => 'productname',
//            'type' => 'text',
//        ));

        $this->addColumn('productname', array(
            'header' => $helper->__('Product Name'),
            'index' => 'productname',
            'type' => 'text',
        ));

        $this->addColumn('quantity', array(
            'header' => $helper->__('Quantity'),
            'index' => 'quantity',
            'type' => 'text',
        ));

        $this->addColumn('totalamount', array(
            'header' => $helper->__('Total Amount'),
            'index' => 'totalamount',
            'type' => 'text',
        ));

        $this->addColumn('product_id', array(
            'header' => $helper->__('Product ID'),
            'index' => 'product_id',
            'type' => 'text',
        ));

        $this->addColumn('lastsold', array(
            'header' => $helper->__('Last sold'),
            'index' => 'lastsold',
            'type' => 'date',
        ));

        return parent::_prepareColumns();

    }

    //просто метод для массовых операций над гридом
    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('id');
        $this->getMassactionBlock()->setFormFieldName('news'); // news - переменная в которой хрянится массив id полей моей базы

        $this->getMassactionBlock()->addItem('delete', array(
            'label' => $this->__('Delete'),
            'url' => $this->getUrl('*/*/massDelete'),
        ));
        return $this;
    }

    // - для массовых операция в CRUD метод инициализации ссылки для каждой из строк Data Grid — реакция на клик пользователя по строке.
    public function getRowUrl($model)
    {
        return $this->getUrl('*/*/edit', array(
            'id' => $model->getId(),
        ));
    }


}