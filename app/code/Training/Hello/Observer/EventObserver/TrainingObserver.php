<?php

namespace Training\Hello\Observer\EventObserver;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;


/**
 * Summary of TrainingObserver
 */
class TrainingObserver implements ObserverInterface{

    /**
     * Summary of execute
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(Observer $observer){

        $product = $observer->getProduct();
        $originalName = $product->getName();
        $Newname = $originalName.' '.'By Abhishek';

        $product->setName($Newname);
    }

}


?>
