<?php
namespace Training\Hello\Controller\Adminhtml\Manage;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Ui\Component\MassAction\Filter;
use Training\Hello\Model\ResourceModel\MyModel\CollectionFactory;
use Training\Hello\Model\MyModelFactory as ModelFactory;
use Training\Hello\Model\ResourceModel\MyModelFactory as ResourceModelFactory;


class MassDelete extends Action
{
    private $ModelFactory;
    private $ResourceModelFactory;

    public $collectionFactory;
    // public $blogFactory;
    public $filter;

    public function __construct(
        Context $context,
        Filter $filter,
        CollectionFactory $collectionFactory,
        ModelFactory $ModelFactory,
        ResourceModelFactory $ResourceModelFactory
    ) {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->ModelFactory = $ModelFactory;
        $this->ResourceModelFactory = $ResourceModelFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        try {
            $collection = $this->filter->getCollection($this->collectionFactory->create());

            $count = 0;
            foreach ($collection->getAllIds() as $model) {
                $mymodel = $this->ModelFactory->create();
                $resourceModel = $this->ResourceModelFactory->create();
                $resourceModel->load($mymodel, $model); // for load
                $resourceModel->save($mymodel); // for save
                $resourceModel->delete($mymodel,$model); // for del
                $count++;
            }
            $this->messageManager->addSuccess(__('A total of %1 blog(s) have been deleted.', $count));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('training_adminpanel/grid/index');
    }

    public function _isAllowed()
    {
        return $this->_authorization->isAllowed('Training_Hello::massdelete');
    }
}