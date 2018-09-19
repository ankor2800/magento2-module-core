<?php
namespace IdealCode\Core\Ui\Component\Form\Buttons;

class Save implements \Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface
{
    public function getButtonData()
    {
        return [
            'label' => __('Save Item'),
            'class' => 'primary',
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 50
        ];
    }
}
