<?php
namespace Perficient\Faqs\Model\Resource\RequestPosts;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Perficient\Faqs\Model\RequestPosts', 'Perficient\Faqs\Model\Resource\RequestPosts');
    }
}