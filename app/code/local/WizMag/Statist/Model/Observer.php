<?php
class WizMag_Statist_Model_Observer
{
    function sales_order_place_after($observer)
    {
        /** @var Mage_Sales_Model_Order $order */
        //$order = $observer->getOrder();
        //$currentOrderItems = $order->getAllItems();

        $order = $observer->getOrder();
        $currentOrderItems = $order->getAllItems();
        /** @var Mage_Sales_Model_Order_item  $orderItem */
        foreach ($currentOrderItems as $orderItem) {
            if($orderItem->getChildrenItems()) continue;

            $parentItem = $orderItem->getParentItem();
            if ($parentItem) {
                $rowTotal = $parentItem->getBaseRowTotal();
            } else {
                $rowTotal = $orderItem->getBaseRowTotal();
            }

            $productId = $orderItem->getProductId();
            $statist = Mage::getModel('wizmagstatist/statist')->load($productId, 'product_id');
            if (!$statist->getId()) {
                $statist = Mage::getModel('wizmagstatist/statist');
                $statist->setSku($orderItem->getSku());
                $statist->setVendorsku(NULL);
                $statist->setProductname($orderItem->getName());
                $statist->setQuantity($orderItem->getQtyOrdered());
                $statist->setTotalamount($rowTotal);
                $statist->setLastsold($orderItem->getUpdatedAt());
                $statist->setProductId($orderItem->getProductId());
                $statist->save();
            } else {
                $statist->setVendorsku(NULL);
                $statist->setQuantity($orderItem->getQtyOrdered() + $statist->getQuantity());
                $statist->setTotalamount($rowTotal + ($statist->getTotalamount()));
                $statist->setLastsold($orderItem->getUpdatedAt());
                $statist->save();
            }
        }
    }
}

