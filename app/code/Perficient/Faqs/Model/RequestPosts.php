<?php
/**
 * Created by PhpStorm.
 * User: sandhya.sharma
 * Date: 4/14/2016
 * Time: 4:04 PM
 */

namespace Perficient\Faqs\Model;

class RequestPosts extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Perficient\Faqs\Model\Resource\RequestPosts');
    }
}