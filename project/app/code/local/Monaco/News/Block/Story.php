<?php
/**
 * Monaco News
 */

/**
 * Monaco News Story Block
 *
 * Story Block.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 */
class Monaco_News_Block_Story extends Mage_Core_Block_Template
{
    /**
     * getStories
     * @return Monaco_News_Model_Resource_Story_Collection
     * /Mage_Eav_Model_Entity_Collection_Abstract
     */
    public function getStories()
    {
        // control if there are filter parameters
        if($this->getRequest()->getParam('category')){
            $stories = Mage::getModel('monaco_news/story')
                ->getCollection()
                                ->addFieldToFilter('status', array('eq' => 1))
                                ->addFieldToFilter('category_id', array('eq' =>
                                    $this->getRequest()->getParam('category')));
        } else{
            $stories = Mage::getModel('monaco_news/story')
                ->getCollection()
                                ->addFieldToFilter('status', array('eq' => 1));
        }

        return $stories;


        // get model



        // return object
    }
}