<?php
/**
 * Class WizMag_Statist_Helper_Data
 */
class WizMag_Statist_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getProductQuantity($productId)
    {
        $cacheKey = "WIZMAG_STAT_" . $productId;
        $quantity = $this->_loadCache($cacheKey);

        if($quantity === false) {
            //Mage::log('go to cache', null, "debug_.log");
            
            $quantity = 0;
            $collection = Mage::getModel('wizmagstatist/statist')->getCollection();
            $product = Mage::getModel('catalog/product')->load($productId);
            $childIds = Mage::getModel('catalog/product_type_configurable')->getChildrenIds($product->getId());

            if (empty($childIds[0])) {
                $collection->addFieldToFilter('product_id', $productId);
                foreach ($collection as $item){
                    if ($productId == $item->getProductId()) $quantity = $item->getQuantity();
                }
            } else {
                foreach ($childIds as $itemChildId) {
                    foreach ($itemChildId as $item) {
                        foreach ($collection as $itemCollection){
                            if ($item == $itemCollection->getProductId()) {
                                $quantity += $itemCollection->getQuantity();
                            }
                        }
                    }
                }
            }
            //save to cache
            $this->_saveCache($quantity, $cacheKey, array('COLLECTION_DATA'));
        }
        return $quantity;
    }
}
