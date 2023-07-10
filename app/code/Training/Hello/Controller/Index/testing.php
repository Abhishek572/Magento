<?php 

namespace Training\Hello\Controller\Index;

use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\DataObject;


class Testing implements HttpGetActionInterface {
    private $_eventManager;

    protected $resultPageFactory;

    public function __construct(PageFactory $resultPageFactory,EventManager $eventManager){
        
        
        $this->resultPageFactory = $resultPageFactory;
        $this->_eventManager = $eventManager;
    }
           
    public function execute()
    {
        $eventData = 'Abhishek';


        // define custom event name with array data
        $this->_eventManager->dispatch('my_module_event_after', ['myEventData' => $eventData]);
        return $this->resultPageFactory->create();
    }
}




?>