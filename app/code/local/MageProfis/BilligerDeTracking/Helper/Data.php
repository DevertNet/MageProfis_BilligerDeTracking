<?php
class MageProfis_BilligerDeTracking_Helper_Data extends Mage_Core_Helper_Abstract 
{
    const XML_PATH_SHOP_ID = 'checkout/billigerde_tracking/shopid';
    
    public function getShopId()
    {
        $shopid = Mage::getStoreConfig(self::XML_PATH_SHOP_ID);
        return $shopid;
    }
}