<?php
/**
 * Copyright © 2015 Perficient. All rights reserved.
 */
namespace Perficient\Contactgrid\Model\ResourceModel;

/**
 * Grid resource
 */
class Grid extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('contactgrid_grid', 'id');
    }

  
}
