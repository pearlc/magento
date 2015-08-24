<?php
/**
 * Category View block
 *
 * @category Envato
 * @package Envato_Catalog
 */
class Envato_Catalog_Block_Category_View extends Mage_Catalog_Block_Category_View
{
    public function getProductListHtml()
    {
        // Include your custom code here!
        return $this->getChildHtml('product_list');
    }
}
