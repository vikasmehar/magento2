<?php
namespace Perficient\Bannerslider\Block\Adminhtml\Bannerslider\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    protected function _construct()
    {
		
        parent::_construct();
        $this->setId('checkmodule_bannerslider_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Bannerslider Information'));
    }
}