<?php

namespace Training\Hello\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;
// use Magento\Framework\Model\AbstractModel;


/**
 * Summary of MyModel
 */
class MyModel extends AbstractDb
{

    /**
     * Summary of __construct
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     */
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * Summary of _construct
     * @return void
     */
    protected function _construct()
    {
        $this->_init('training_test', 'post_id');
    }
    /**
     * Summary of getResource
     * @return MyModel
     */
    public function getResource()
    {
        return $this;
    }
    

}



?>