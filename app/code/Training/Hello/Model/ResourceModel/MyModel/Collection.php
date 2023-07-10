<?php
namespace Training\Hello\Model\ResourceModel\MyModel;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Training\Hello\Model\MyModel;
use Training\Hello\Model\ResourceModel\MyModel as ResourceModel;

class Collection extends AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'training_test_collection';
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