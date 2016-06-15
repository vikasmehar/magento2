<?php

namespace Perficient\Faqs\Block;

use Magento\Framework\View\Element\Template;

/**
 * Main Faqs form block
 */
class FaqsForm extends Template
{
    /**
     * @var \Perficient\Faqs\Model\Resource\RequestPosts\CollectionFactory
     */
    protected $_faqsCollection;

    /**
     * @var \Magento\Catalog\Model\CategoryFactory
     */
    protected $_categoryFactory;


    /**
     * @param Template\Context $context
     * @param \Perficient\Faqs\Model\Resource\RequestPosts\CollectionFactory $faqsCollection
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        \Perficient\Faqs\Model\Resource\RequestPosts\CollectionFactory $faqsCollection,
        array $data = []
    )
    {
        $this->_faqsCollection = $faqsCollection;
        parent::__construct($context, $data);
        $this->_isScopePrivate = true;

    }

    /**
     * Returns action url for contact form
     *
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('faqs/index/post', ['_secure' => true]);
    }

    public function getAllFaqs()
    {
         $collection = $this->_faqsCollection->create();
         return $collection;
    }
}
