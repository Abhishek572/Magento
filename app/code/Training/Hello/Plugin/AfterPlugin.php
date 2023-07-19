<?php

namespace Training\Hello\Plugin;

use Magento\Catalog\Model\Product;

/**
 * Summary of AfterPlugin
 */
class AfterPlugin
{
    /**
     * Summary of afterGetName
     * @param \Magento\Catalog\Model\Product $subject
     * @param mixed $result
     * @return string
     */
    public function afterGetName(Product $subject, $result)
    {
        return "Magento " . $result; // Adding Apple in product name
    }
}