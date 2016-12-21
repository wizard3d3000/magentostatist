<?php

class WizMag_Statist_Adminhtml_StatistController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        //die('admin action controller');

        $this->loadLayout();

        $this->_setActiveMenu('Product Statistic');

       // $contentBlock = $this->getLayout()->createBlock('wizmagstatist/adminhtml_statist');
       // $this->_addContent($contentBlock);
        
        $this->renderLayout();
        
    }
    
    /* ******  Блоки для CRUD операций ****** */
//
//    public function newAction()
//    {
//        $this->_forward('edit');
//    }
//
//    public function editAction()
//    {
//        $id = (int) $this->getRequest()->getParam('id');
//        Mage::register('current_news', Mage::getModel('wizmagstatist/statist')->load($id)); // глобальная переменная current_news (созданая в реестре), мы ей передаем нашу модель
//
//        $this->loadLayout()->_setActiveMenu('Product Statistic');
//        $this->_addContent($this->getLayout()->createBlock('wizmagstatist/adminhtml_statist_edit'));
//        $this->renderLayout();
//    }
//
//    public function saveAction()
//    {
//        if ($data = $this->getRequest()->getPost()) {
//            $id = (int)$this->getRequest()->getParam('id');
//            try {
//                $model = Mage::getModel('wizmagstatist/statist');
//                $model->setData($data)->setId($id);
//
//                $model->save();
//
//                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('News was saved successfully'));
//                Mage::getSingleton('adminhtml/session')->setFormData(false);
//                $this->_redirect('*/*/');
//            } catch (Exception $e) {
//                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
//                Mage::getSingleton('adminhtml/session')->setFormData($data);
//                $this->_redirect('*/*/edit', array(
//                    'id' => $id
//                ));
//            }
//            return;
//        }
//        Mage::getSingleton('adminhtml/session')->addError($this->__('Unable to find item to save'));
//        $this->_redirect('*/*/');
//    }
//
//    /**
//     *
//     */
//    public function deleteAction()
//    {
//        if ($id = $this->getRequest()->getParam('id')) {
//            try {
//                Mage::getModel('wizmagstatist/statist')->setId($id)->delete();
//                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('News was deleted successfully'));
//            } catch (Exception $e) {
//                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
//                $this->_redirect('*/*/edit', array('id' => $id));
//            }
//        }
//        $this->_redirect('*/*/');
//    }

    /* ****  Блоки для CRUD операций ******  */


    // метод для масовых операций над гридом массовых удалений
//    public function massDeleteAction()
//    {
//        $news = $this->getRequest()->getParam('news', null); // news - переменная в которую мы указывали в блоке с массивом id полей нашей таблицы
//
//        if (is_array($news) && $news) {
//            try {
//                foreach ($news as $id) {
//                    Mage::getModel('wizmagstatist/statist')->setId($id)->delete();
//                }
//                $this->_getSession()->addSuccess($this->__('Total of %d news have been deleted', count($news)));
//            } catch (Exception $e) {
//                $this->_getSession()->addError($e->getMessage());
//            }
//        } else {
//            $this->_getSession()->addError($this->__('Please select news'));
//        }
//        $this->_redirect('*/*');
//    }

}
