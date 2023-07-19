<?php
namespace Training\Hello\Model;
 
use Magento\Ui\DataProvider\AbstractDataProvider;
use Training\Hello\Model\ResourceModel\MyModel\CollectionFactory;
 
/**
 * Summary of DataProvider
 */
class DataProvider extends AbstractDataProvider
{

 /**
  * Summary of collection
  * @var 
  */
	protected $collection;
    /**
     * Summary of loadedData
     * @var 
     */
    protected $loadedData;
    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $postCollectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $postCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $postCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }
 
    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        $items = $this->collection->getItems();
        $this->loadedData = array();
        
        foreach ($items as $post) {
            $this->loadedData[$post->getId()] = $post->getData();
        }
        return $this->loadedData;
    }
}