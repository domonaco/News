<?php
/**
 * Monaco News
 */

/**
 * Monaco News Model Resource Story
 *
 * Story Resource Model.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 */
class Monaco_News_Model_Resource_Story extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * _construct
     *
     */
    protected function _construct()
    {
        $this->_init('monaco_news/story','story_id');
    }
}

