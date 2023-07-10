<?php 

namespace Training\Hello\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;
use Training\Hello\Model\ResourceModel\MyModel as ResourceModel;


class MyModel extends AbstractModel implements IdentityInterface{

    const CACHE_TAG = "training_test";
    protected $_cacheTag = "training_test";
    protected $_eventPrefix = "training_test";

    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }


    public function getIdentities()
    {
        return [self::CACHE_TAG.'_'.$this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
    

}


?>