<?php 
namespace Training\Hello\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;


/**
 * Summary of Testing
 */
class Testing extends Template{

    /**
     * Summary of __construct
     * @param \Magento\Framework\View\Element\Template\Context $context
     */
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * Summary of ja
     * @return int
     */
    public function ja(){

    $g  = 10;
    $b  = 25;

    return $g+$b;
    }
}


?>