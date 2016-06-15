<?php
/**
 * Copyright © 2015 Perficient. All rights reserved.
 */
namespace Perficient\Bannerslider\Model\ResourceModel;

/**
 * Bannerslider resource
 */
class Bannerslider extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('bannerslider_bannerslider', 'id');
    }

  
}
