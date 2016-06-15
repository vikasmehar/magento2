<?php
/**
 * Created by PhpStorm.
 * User: sandhya.sharma
 * Date: 4/14/2016
 * Time: 4:05 PM
 */

namespace Perficient\Projects\Model\Resource;

class RequestPosts extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('perficient_projects', 'project_id');
    }
}