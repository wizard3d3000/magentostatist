<?php
/*
 *  блок для редактирования новости
 */

class WizMag_Statist_Block_Adminhtml_Statist_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    protected function _construct()
    {
        $this->_blockGroup = 'wizmagstatist';
        $this->_controller = 'adminhtml_statist';

        $this->_addButton('save_and_continue', array(
            'label'     => Mage::helper('wizmagstatist')->__('Save and Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class' => 'save'
        ), 10);

        $this->_formScripts[] = "function saveAndContinueEdit()
        {
         editForm.submit($('edit_form').action + 'back/edit/') 
        } 
        ";
    }

    public function getHeaderText()
    {
        $helper = Mage::helper('wizmagstatist');
        $model = Mage::registry('current_news');

        if ($model->getId()) {
            return $helper->__("Edit News item '%s'", $this->escapeHtml($model->getTitle()));
        } else {
            return $helper->__("Add News item");
        }

    }
}
