<?php
/**
 * Created by PhpStorm.
 * User: sandhya.sharma
 * Date: 4/14/2016
 * Time: 2:36 PM
 */
namespace Perficient\Ajaxloginsearch\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $post = $this->getRequest()->getParams();
        $q = $post['q'];
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $customer = $objectManager->create('Magento\Customer\Model\Customer')
            ->getCollection()
            ->addFieldToFilter('email', array('like' => "%$q%"));
        foreach($customer->getData() as $customerData) {
            echo $customerData['email']."\n";
        }
    }
}