<?php
namespace Perficient\Bannerslider\Block\Adminhtml;
class Bannerslider extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
		
        $this->_controller = 'adminhtml_bannerslider';/*block grid.php directory*/
        $this->_blockGroup = 'Perficient_Bannerslider';
        $this->_headerText = __('Bannerslider');
        $this->_addButtonLabel = __('Add New Entry'); 
        parent::_construct();
		
    }
}