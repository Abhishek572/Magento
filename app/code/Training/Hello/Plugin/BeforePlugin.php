<?php

namespace Training\Hello\Plugin;

use Magento\Quote\Model\Quote;

/**
 * Summary of BeforePlugin
 */
class BeforePlugin
{
    /**
     * Summary of beforeAddProduct
     * @param \Magento\Quote\Model\Quote $subject
     * @param mixed $productInfo
     * @param mixed $requestInfo
     * @return array
     */
    public function beforeAddProduct(Quote $subject, $productInfo, $requestInfo = null)
    {

        $requestInfo['qty'] = 10; // increasing quantity to 10
        return array($productInfo, $requestInfo);
    }
}