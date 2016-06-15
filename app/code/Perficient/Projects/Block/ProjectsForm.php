<?php

namespace Perficient\Projects\Block;

use Magento\Framework\View\Element\Template;

/**
 * Main Faqs form block
 */
class ProjectsForm extends Template
{
    /**
     * @var \Perficient\Projects\Model\Resource\RequestPosts\CollectionFactory
     */
    protected $_projectsCollection;

    /**
     * @var \Magento\Catalog\Model\CategoryFactory
     */
    protected $_categoryFactory;


    /**
     * @param Template\Context $context
     * @param \Perficient\Projects\Model\Resource\RequestPosts\CollectionFactory $projectsCollection
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        \Perficient\Projects\Model\Resource\RequestPosts\CollectionFactory $projectsCollection,
        array $data = []
    )
    {
        $this->_projectsCollection = $projectsCollection;
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
        return $this->getUrl('projects/index/post', ['_secure' => true]);
    }

    public function getAllProjects()
    {
        $projectCollection = $this->_projectsCollection->create();
        return $projectCollection->getData();
    }
}
