<?php
namespace Training\Hello\Controller\Adminhtml\Manage;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class AddPost extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Training_Hello::addpost';

    const PAGE_TITLE = 'Add Post';

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;

  
    /**
     * Summary of __construct
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     * @return void
     */
    public function __construct(
       Context $context,
       PageFactory $pageFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    /**
     * Index action
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
         /** @var \Magento\Framework\View\Result\Page $resultPage */
         $resultPage = $this->_pageFactory->create();
         $resultPage->setActiveMenu(static::ADMIN_RESOURCE);
         $resultPage->addBreadcrumb(__(static::PAGE_TITLE), __(static::PAGE_TITLE));
         $resultPage->getConfig()->getTitle()->prepend(__(static::PAGE_TITLE));

         return $resultPage;
    }

    /**
     * Is the user allowed to view the page.
    *
    * @return bool
    */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed(static::ADMIN_RESOURCE);
    }
}
