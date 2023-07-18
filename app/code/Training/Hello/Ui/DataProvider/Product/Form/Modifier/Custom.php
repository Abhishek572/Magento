<?php
namespace Training\Hello\Ui\DataProvider\Product\Form\Modifier;

use Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\AbstractModifier;
use Magento\Ui\Component\Form\Field;
use Magento\Ui\Component\Form\Fieldset;

class Custom extends AbstractModifier
{
    /**
    * @param array $meta
    * @return array
    */
    public function modifyMeta(array $meta): array
    {
        $meta['test'] = [
            'arguments' => [
                'data' => [
                    'config' => [
                        'additionalClasses' =>'admin__fieldset-product-custom',
                        'label' => __('My TEST'),
                        'collapsible' => true,
                        'componentType' => Fieldset::NAME,
                        'disable' => false,
                        'sortOrder' => $this->getNextGroupSortOrder($meta,'search-engine-optimaization',15)
                    ]
                ]
            ],
            'children' => $this->getPanelChildren(),
        ];

        return $meta;
    }

    /**
     * @inheritDoc
     */

     protected function getPanelChildren(){
        return [
            'custom_tab_content' => $this->getCustomContent(),
        ];
     }

     protected function getCustomContent(){
        return[
               'arguments' => [
                    'data' => [
                        'config' => [
                            'formElement' => 'select',
                            'componentType' => Field::NAME,
                            'options' => [
                                ['value' => 'test_value_1', 'label' => 'Test Value 1'],
                                ['value' => 'test_value_2', 'label' => 'Test Value 2'],
                                ['value' => 'test_value_3', 'label' => 'Test Value 3'],
                            ],
                            'visible' => 1,
                            'required' => 1,
                            'label' => __('Test')
                        ]
                    ]
                ]
            
        ];
     }
    public function modifyData(array $data)
    {
        return $data;
    }
}