<?php
/**
 * app/code/local/SubashBasnet/AccountManager/controllers/ManagerController.php
 *
 * This is description
 *
 * NOTICE OF LICENSE
 *
 * @author      Subash Basnet
 * @category    SubashBasnet
 * @package     AccountManager
 * @copyright   Copyright (c) 2017 
 */
class SubashBasnet_AccountManager_Adminhtml_ManagerController extends Mage_Adminhtml_Controller_Action
{
   
    
    public function indexAction()
    {
        $this->loadLayout();
        
        $this->_setActiveMenu('accountmanager/managers');
        
        $this->_addContent(
            $this->getLayout()->createBlock('accountmanager/adminhtml_manager')
        );
        
        return $this->renderLayout();
    }
    
    public function newAction()
    {
        $this->_forward('edit');
    }
    
    public function editAction()
    {
        if ( $managerId = $this->getRequest()->getParam('manager_id') ) {
            Mage::register('current_manager', Mage::getModel('accountmanager/manager')->load($managerId));
        }
        
        $this->loadLayout();
        $this->_setActiveMenu('accountmanager/managers');
        
        $this->_addContent(
            $this->getLayout()->createBlock('accountmanager/adminhtml_manager_edit')
        );
        
        return $this->renderLayout();
    }
    
    public function saveAction()
    {
        $managerId = $this->getRequest()->getParam('manager_id');
        $managerModel = Mage::getModel('accountmanager/manager')->load($managerId);
        
        if ( $data = $this->getRequest()->getPost() ) {
            try {
                $managerModel->addData($data)->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    $this->__("Account manager has been saved successfully.")
                );
            } catch ( Exception $e ) {
                Mage::getSingleton('adminhtml/session')->setManagerFormData($data);
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('_current' => true));
            }
        }
        
        $this->_redirect('*/*/index');
    }
    
    public function deleteAction()
    {
        $managerId = $this->getRequest()->getParam('manager_id');
        $managerModel = Mage::getModel('accountmanager/manager')->load($managerId);
        
            try {
                $managerModel->delete();
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    $this->__("Account manager has been deleted.")
                );
            } catch ( Exception $e ) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('_current' => true));
            }
        
        $this->_redirect('*/*/index');
    }
    
}