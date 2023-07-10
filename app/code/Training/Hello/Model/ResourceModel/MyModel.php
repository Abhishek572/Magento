<?php

namespace Training\Hello\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;
// use Magento\Framework\Model\AbstractModel;


class MyModel extends AbstractDb
{

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('training_test', 'post_id');
    }
    public function getResource()
    {
        return $this;
    }
    

}



?>