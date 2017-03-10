<?php

/* @var $this Mage_Core_Model_Resource_Setup */
$this->startSetup();

$this->run("
CREATE TABLE {$this->getTable('accountmanager/manager')} (
    `manager_id`INTEGER AUTO_INCREMENT PRIMARY KEY,
    `name`VARCHAR(255),
    `postcode`VARCHAR(255),
    `created_at`DATETIME,
    `modified_at`DATETIME
    );
    ");

$this->endSetup();