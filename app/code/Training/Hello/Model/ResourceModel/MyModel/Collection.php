<?php
namespace Training\Hello\Model\ResourceModel\MyModel;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Training\Hello\Model\MyModel;
use Training\Hello\Model\ResourceModel\MyModel as ResourceModel;

/**
 * Summary of Collection
 */
class Collection extends AbstractCollection
{
	/**
	 * Summary of _idFieldName
	 * @var string
	 */
	protected $_idFieldName = 'post_id';
	/**
	 * Summary of _eventPrefix
	 * @var string
	 */
	protected $_eventPrefix = 'training_test_collection';
 /**
  * Summary of _eventObject
  * @var string
  */
	protected $_eventObject = 'test_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init(MyModel::class,ResourceModel::class);
	}


}