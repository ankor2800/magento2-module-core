<?php
namespace IdealCode\Core\Ui\Component\Form\Buttons;

class GenericButton
{
    /**
     * @var \Magento\Framework\UrlInterface
     */
    protected $_urlBuilder;

    /**
     * @var \Magento\Framework\Model\ResourceModel\Db\AbstractDb
     */
    protected $_resource;

    protected $_id;

    /**
     * @param \Magento\Framework\UrlInterface $urlBuilder
     * @param \Magento\Framework\App\RequestInterface $request
     * @param \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function __construct(
        \Magento\Framework\UrlInterface $urlBuilder,
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource
    ) {
        $this->_urlBuilder = $urlBuilder;
        $this->_resource = $resource;
        $this->_id = $request->getParam($this->_resource->getIdFieldName());
    }
}
