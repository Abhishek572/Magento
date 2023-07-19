<?php
namespace Training\Hello\Block\Adminhtml\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Summary of GenericButton
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * Summary of getButtonData
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Save'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => [
                    'button' => ['event' => 'save']
                ],
                'form-role' => 'save',
            ],
            'sort_order' => 90
        ];
    }
    /**
     * Summary of getSaveUrl
     * @return void
     */
    public function getSaveUrl()
    {
        return $this->getUrl('training_adminpanel\manage\save', []);
    }
}