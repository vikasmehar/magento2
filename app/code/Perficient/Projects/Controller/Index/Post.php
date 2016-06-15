<?php
/**
 * Created by PhpStorm.
 * User: sandhya.sharma
 * Date: 4/14/2016
 * Time: 3:27 PM
 */
namespace Perficient\Projects\Controller\Index;

class Post extends \Magento\Framework\App\Action\Action
{
    /**
     * Post user question
     *
     * @return void
     * @throws \Exception
     */
    public function execute()
    {
        $post = $this->getRequest()->getPostValue();
        if (!$post) {
            $this->_redirect('*/*/');
            return;
        }

        try {
            $postObject = new \Magento\Framework\DataObject();
            $postObject->setData($post);

            $error = false;

            if (!\Zend_Validate::is(trim($post['name']), 'NotEmpty')) {
                $error = true;
            }
            if (!\Zend_Validate::is(trim($post['department']), 'NotEmpty')) {
                $error = true;
            }
            if ($error) {
                throw new \Exception();
            }

            //Save
            $projectModel = $this->_objectManager->create('Perficient\Projects\Model\RequestPosts');
            $projectModel->setData($post)->setCreateDate(date("Y-m-d"))->save();
            $this->messageManager->addSuccess(
                __('Project added successfully!!')
            );
            $this->_redirect('projects/index');
            return;
        } catch (\Exception $e) {
            $this->messageManager->addError(
                __('We can\'t process your request right now. Sorry, that\'s all we know.')
            );
            $this->_redirect('projects/index');
            return;
        }
    }
}
