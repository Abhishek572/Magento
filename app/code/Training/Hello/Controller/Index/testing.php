<?php 

namespace Training\Hello\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\View\Result\PageFactory;


/**
 * Summary of Testing
 */
class Testing implements HttpGetActionInterface {
    /**
     * Summary of _eventManager
     * @var 
     */
    private $_eventManager;

    /**
     * Summary of resultPageFactory
     * @var 
     */
    protected $resultPageFactory;

    /**
     * Summary of __construct
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     * @param \Magento\Framework\Event\ManagerInterface $eventManager
     */
    public function __construct(PageFactory $resultPageFactory,EventManager $eventManager){
        
        
        $this->resultPageFactory = $resultPageFactory;
        $this->_eventManager = $eventManager;
    }
           
    /**
     * Summary of execute
     * @return mixed
     */
    public function execute()
    {
        $eventData = 'Abhishek';


        // define custom event name with array data
        $this->_eventManager->dispatch('my_module_event_after', ['myEventData' => $eventData]);
        return $this->resultPageFactory->create();
    }
}




?>