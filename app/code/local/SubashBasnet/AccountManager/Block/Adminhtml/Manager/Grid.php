<?php
/**
 * app/code/local/SubashBasnet/AccountManager/Block/Adminhtml/Manager/Grid.php
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
class SubashBasnet_AccountManager_Block_Adminhtml_Manager_Grid extends 
    Mage_Adminhtml_Block_Widget_Grid
{
    
    public function getRowUrl($item)
    {
        return $this->getUrl('*/manager/edit', array('manager_id' => $item->getId()));
    }
    
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('accountmanager/manager')->getCollection();
        $this->setCollection($collection);
        
        return parent::_prepareCollection();
    }
    
    protected function _prepareColumns()
    {
        $this->addColumn('postcode', array(
            'type' => 'text',
            'index' => 'postcode',
            'header' => $this->__('Postal Sector')
        ));
        
        $this->addColumn('name', array(
            'type' => 'text',
            'index' => 'name',
            'header' => $this->__('Name')
        ));
        
        
        return $this;
    }
}