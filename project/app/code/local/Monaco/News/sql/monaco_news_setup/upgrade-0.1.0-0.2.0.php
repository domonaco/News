<?php
/** Monaco News ... */

/**
 * Monaco News Installer
 *
 * Monaco News SQL Installer
 *
 * MySQL installer.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 *
 */

/** @var Mage_Core_Model_Resource_Setup $installer*/
$installer = $this;
$installer->startSetup();

// prepare table for monaco_news_story
$tableStory = $installer->getConnection()->newTable($installer->getTable('monaco_news/story'));

$tableStory->addColumn(
    'story_id',
    Varien_Db_Ddl_Table::TYPE_INTEGER,
    null,
    array('primary' => true, 'identity' => true, 'nullable' => false),
    'Story ID'
)->addColumn(
    'title',
    Varien_Db_Ddl_Table::TYPE_TEXT,
    256,
    array('nullable' => false),
    'Story Title'
)->addColumn(
    'content',
    Varien_Db_Ddl_Table::TYPE_TEXT,
    null,
    array('nullable' => false),
    'Story Content'
)->addColumn(
    'status',
    Varien_Db_Ddl_Table::TYPE_BOOLEAN,
    null,
    array('nullable' => false),
    'Story Status'
)->addColumn(
    'category_id',
    Varien_Db_Ddl_Table::TYPE_INTEGER,
    null,
    array('nullable' => false),
    'Story Category'
)->addColumn(
    'created_at',
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    null,
    array('default' => Varien_Db_Ddl_Table::TIMESTAMP_INIT),
    'Story Created At'
)->addColumn(
    'updated_at',
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    null,
    array('default' => Varien_Db_Ddl_Table::TIMESTAMP_INIT_UPDATE),
    'Story Updated At'
);

// create tables
$installer->getConnection()->createTable($tableStory);

$installer->endSetup();