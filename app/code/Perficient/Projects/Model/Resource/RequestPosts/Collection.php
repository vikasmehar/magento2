<?php
namespace Perficient\Projects\Model\Resource\RequestPosts;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Perficient\Projects\Model\RequestPosts', 'Perficient\Projects\Model\Resource\RequestPosts');
    }
}