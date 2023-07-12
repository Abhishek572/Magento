<?php
namespace Training\Hello\Controller\Adminhtml\Manage;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Training\Hello\Model\MyModelFactory as YourModelFactory;

class Save extends Action
{
    protected $yourModelFactory;

    public function __construct(
        Context $context,
        YourModelFactory $yourModelFactory
    ) {
        parent::__construct($context);
        $this->yourModelFactory = $yourModelFactory;
    }

    public function execute()
    {
        ?>
        <script>
            console.log("Hello");
        </script>
        <?php
        $data = $this->getRequest()->getPostValue();
        $id = $data['post_id'];
        if (!$data) {
            $this->_redirect('training_adminpanel/grid/index');
            return;
        }

        try {
            // Process the form data and update the database
            $yourModel = $this->yourModelFactory->create()->load($id);
           $yourModel->addData([    
                'post_name' => $data['post_name'],
                'url_key' => $data['url_key'],
                'post_content' => $data['post_content']
            ]);
            $yourModel->save();

            $this->messageManager->addSuccessMessage(__('Data saved successfully.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('Error: %1', $e->getMessage()));
        }

        $this->_redirect('training_adminpanel/grid/index');
    }
    public function _isAllowed()
    {
        return $this->_authorization->isAllowed('Training_Hello::save');
    }
}
