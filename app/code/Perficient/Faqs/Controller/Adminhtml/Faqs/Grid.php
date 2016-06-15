<?php
/**
 * Created by PhpStorm.
 * User: sandhya.sharma
 * Date: 4/18/2016
 * Time: 5:10 PM
 */
namespace Perficient\Faqs\Controller\Adminhtml\Faqs;

class Grid extends \Magento\Backend\App\Action
{
    /**
     * Queue list Ajax action
     *
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout(false);
        $this->_view->renderLayout();
    }
}
