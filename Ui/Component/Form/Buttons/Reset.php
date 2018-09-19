<?php
namespace IdealCode\Core\Ui\Component\Form\Buttons;

class Reset implements \Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface
{
    public function getButtonData()
    {
        return [
            'label' => __('Reset'),
            'on_click' => 'location.reload();',
            'sort_order' => 30
        ];
    }
}
