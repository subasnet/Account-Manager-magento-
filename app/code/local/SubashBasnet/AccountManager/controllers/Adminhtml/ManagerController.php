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
        
        $this->_addContent(
            $this->getLayout()->createBlock('accountmanager/adminhtml_manager_edit')
        );
        
        return $this->renderLayout();
    }
}