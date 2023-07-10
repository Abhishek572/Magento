<?php 
namespace Training\Hello\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Quote\Model\Quote;


class Testing extends Template{

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function ja(){

    $g  = 10;
    $b  = 25;

    return $g+$b;
    }
}


?>