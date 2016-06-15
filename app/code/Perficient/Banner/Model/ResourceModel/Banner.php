<?php
/**
 * Copyright © 2015 Perficient. All rights reserved.
 */
namespace Perficient\Banner\Model\ResourceModel;

/**
 * Banner resource
 */
class Banner extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('banner_banner', 'id');
    }

  
}
