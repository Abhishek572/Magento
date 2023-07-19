<?php

namespace Training\Hello\Controller\Adminhtml\Grid;

use \Magento\Backend\App\Action\Context as Context;
use \Magento\Framework\View\Result\PageFactory as PageFactory;
use \Magento\Backend\App\Action as Action;

/**
 * Summary of Index
 */
class Index extends Action
  {
    const PAGE_TITLE = 'Post Listing';

    /**
     * Summary of resultPageFactory
     * @var 
     */
    protected $resultPageFactory = false;

    /**
     * Summary of __construct
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
    Context $context,
    PageFactory $resultPageFactory
    )
  {
    parent::__construct($context);
    $this->resultPageFactory = $resultPageFactory;
  }

    /**
     * Summary of execute
     * @return mixed
     */
    public function execute()
  {
    $resultPage = $this->resultPageFactory->create();
    $resultPage->setActiveMenu('Training_Hello::postmenu');
    $resultPage->addBreadcrumb(__(static::PAGE_TITLE), __(static::PAGE_TITLE));
    $resultPage->getConfig()->getTitle()->prepend((__('Post Listing')));

    return $resultPage;
  }


  }