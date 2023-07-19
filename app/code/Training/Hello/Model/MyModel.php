<?php 

namespace Training\Hello\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Training\Hello\Model\ResourceModel\MyModel as ResourceModel;


/**
 * Summary of MyModel
 */
class MyModel extends AbstractModel implements IdentityInterface{

    const CACHE_TAG = "training_test";
    /**
     * Summary of _cacheTag
     * @var string
     */
    protected $_cacheTag = "training_test";
    /**
     * Summary of _eventPrefix
     * @var string
     */
    protected $_eventPrefix = "training_test";

    /**
     * Summary of _construct
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }


    /**
     * Summary of getIdentities
     * @return array<string>
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG.'_'.$this->getId()];
    }

    /**
     * Summary of getDefaultValues
     * @return array
     */
    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
    

}


?>