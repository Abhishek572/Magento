<?php

namespace Training\Hello\Observer\EventObserver;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;


class TrainingObserver implements ObserverInterface{

    public function execute(Observer $observer){

        $product = $observer->getProduct();
        $originalName = $product->getName();
        $Newname = $originalName.' '.'By Abhishek';

        $product->setName($Newname);
    }

}


?>
