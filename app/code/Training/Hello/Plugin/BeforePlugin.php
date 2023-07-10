<?php
    
    namespace Training\Hello\Plugin;

    use Magento\Quote\Model\Quote;

    class BeforePlugin
    {
        public function beforeAddProduct(Quote $subject, $productInfo, $requestInfo = null) {

            $requestInfo['qty'] = 10; // increasing quantity to 10
            return array($productInfo, $requestInfo);
        }
    }