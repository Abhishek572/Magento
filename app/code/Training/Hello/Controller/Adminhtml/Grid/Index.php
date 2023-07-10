<?php

namespace Training\Hello\Controller\Adminhtml\Grid;

use \Magento\Backend\App\Action\Context as Context;
use \Magento\Framework\View\Result\PageFactory as PageFactory;
use \Magento\Backend\App\Action as Action;

class Index extends Action
  {
    protected $resultPageFactory = false;

    public function __construct(
    Context $context,
    PageFactory $resultPageFactory
    )
  {
    parent::__construct($context);
    $this->resultPageFactory = $resultPageFactory;
  }

    public function execute()
  {
    $resultPage = $this->resultPageFactory->create();
    $resultPage->setActiveMenu('Training_Hello::postmenu');
    $resultPage->getConfig()->getTitle()->prepend((__('Post Listing')));

    return $resultPage;
  }


  }