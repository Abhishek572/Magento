<?php
namespace Training\Hello\Block\Adminhtml\Edit;

use Magento\Framework\UrlInterface;

/**
 * Summary of GenericButton
 */
class GenericButton
{
    // private $url;
    /**
     * Summary of __construct
     * @param \Magento\Framework\UrlInterface $url
     */
    public function __construct(
        private UrlInterface $url
    ){}

    /**
     * Summary of getUrl
     * @param string $route
     * @param array $params
     * @return void
     */
    public function getUrl(string $route = '', array $params = [])
    {
        $this->url->getUrl($route,$params);
    }
    
}