<?php
/**
 * Monaco News
 */

/**
 * Monaco News Model Resource Category Collection
 *
 * Category Resource Collection Model.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 */
class Monaco_News_Model_Resource_Category_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * _construct
     *
     */
    protected function _construct()
    {
        $this->_init('monaco_news/category');
    }
}

