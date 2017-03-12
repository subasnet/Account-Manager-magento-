<?php
/**
 * app/code/local/SubashBasnet/AccountManager/Model/Observer.php
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
class SubashBasnet_AccountManager_Model_Observer
{
    public function salesOrderGridCollectionLoadBefore($observer)
    {
        $collection = $observer->getOrderGridCollection();
        $select = $collection->getSelect();
        $select->joinLeft(array('payment'=>$collection->getTable('sales/order_payment')), 'payment.parent_id=main_table.entity_id',array('payment_method'=>'method'));
    }
}