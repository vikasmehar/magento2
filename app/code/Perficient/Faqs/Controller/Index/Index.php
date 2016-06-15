<?php
/**
 * Created by PhpStorm.
 * User: sandhya.sharma
 * Date: 4/14/2016
 * Time: 2:36 PM
 */
namespace Perficient\Faqs\Controller\Index;

class Index extends \Perficient\Faqs\Controller\Index
{
    public function execute(){
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}