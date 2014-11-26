<?php

class JZ_MagicentoBugs_Block_Index_Working extends Mage_Core_Block_Template
{

    /**
     * Retrieving size_guide attribute values.
     *
     * @return mixed|string
     */
    public function getAttributeValue()
    {
        /* @var $current_product Mage_Catalog_Model_Product | null */
        if ($current_product = Mage::registry('current_product')) {
            return $current_product->getResource()->getAttribute('an_attribute');
        }

        return '';
    }
}
