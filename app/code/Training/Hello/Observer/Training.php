<?php 

namespace Training\Hello\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
class Training implements ObserverInterface
{
  public function __construct()
  {
    // Observer initialization code...
    // You can use dependency injection to get any class this observer may need.
  }

  public function execute(Observer $observer)
  {
    $myEventData = $observer->getData('myEventData');

    \Magento\Framework\App\ObjectManager::getInstance()->get('Magento\Framework\Registry')->register('myEventData', $myEventData);

    // Return is not required because  we are storing the value in registry aka:Temporary Storage For Observer And Many Others
    return $myEventData;
   
  }
}