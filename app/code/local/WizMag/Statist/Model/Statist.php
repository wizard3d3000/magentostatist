<?php
/**
 * Class WizMag_Statist_Model_Statist
 *
 * @method string getSku()
 * @method setSku(string $sku)
 * @method getProductId()
 */
class WizMag_Statist_Model_Statist extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('wizmagstatist/statist');
    }

    protected  function _afterSave()
    {
        parent::_afterSave();
        //clean cache
        $cache = Mage::app()->getCache();
        $productId = $this->getData('product_id');

        $parentIds = Mage::getModel('catalog/product_type_configurable')->getParentIdsByChild($productId);
    
        if (empty($parentIds)) {
            $cacheKey = "WIZMAG_STAT_" . $productId;
            $cache->remove($cacheKey);
        } else {
            foreach ($parentIds as $item) {
                $cacheKey = "WIZMAG_STAT_" . $item;
                $cache->remove($cacheKey);
            }
        }
        
//        Mage::log($cacheKey, null, "debug_.log");
        
    }
}