<?php
/**
 * app/code/local/SubashBasnet/AccountManager/controllers/AccountManagerController.php
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
class SubashBasnet_AccountManager_Adminhtml_AccountManagerController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        
        return $this->renderLayout();
    }
}