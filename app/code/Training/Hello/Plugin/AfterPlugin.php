<?php
    
    namespace Training\Hello\Plugin;
    use Magento\Catalog\Model\Product;

    class AfterPlugin
    {
        public function afterGetName(Product $subject, $result) {
            return "Magento ".$result; // Adding Apple in product name
        }
    }