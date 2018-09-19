<?php
namespace IdealCode\Core\Ui\Component\Form\Buttons;

class SaveAndContinue implements \Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface
{
    public function getButtonData()
    {
        return [
            'label' => __('Save and Continue Edit'),
            'data_attribute' => [
                'mage-init' => [
                    'button' => ['event' => 'saveAndContinueEdit'],
                ],
            ],
            'sort_order' => 40,
        ];
    }
}
