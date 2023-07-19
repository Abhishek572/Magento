<?php
namespace Training\Hello\Controller\Crud;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Training\Hello\Model\MyModelFactory;

/**
 * Summary of Index
 */
class Index implements HttpGetActionInterface
{
	/**
	 * @var PageFactory  $pageFactory
	*/
	protected $_pageFactory;

 /**
  * Summary of _modelFactory
  * @var 
  */
	protected $_modelFactory;

	/**
	 * Summary of __construct
	 * @param \Magento\Framework\App\Action\Context $context
	 * @param \Magento\Framework\View\Result\PageFactory $pageFactory
	 * @param \Training\Hello\Model\MyModelFactory $modelFactory
	 */
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		PageFactory $pageFactory,
		MyModelFactory $modelFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_modelFactory = $modelFactory;
	}

	/**
	 * Summary of execute
	 * @return never
	 */
	public function execute()
	{
        $model = $this->_modelFactory->create();
		$collection = $model->getCollection();
		echo $collection->getSize();
		foreach($collection as $item){
			echo "<pre>";
			print_r($item->getData());
			echo "</pre>";
		}
		exit();
		// create page 
		return $this->_pageFactory->create();
	}


	/**
	 * Geting data
	 *
	 * @return mixed
	 */
	public function getData() {
		
	}
}
