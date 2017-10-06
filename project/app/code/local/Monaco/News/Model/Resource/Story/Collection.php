<?php
/**
 * Monaco News
 */

/**
 * Monaco News Model Resource Story Collection
 *
 * Story Resource Collection Model.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 */
class Monaco_News_Model_Resource_Story_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * _construct
     *
     */
    protected function _construct()
    {
        $this->_init('monaco_news/story');
    }
}

