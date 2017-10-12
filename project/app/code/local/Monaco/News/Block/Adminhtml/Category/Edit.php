<?php
/**
 * Monaco News
 */

/**
 * Monaco News Adminhtml Edit Block
 *
 * Category edit block.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 */
class Monaco_News_Block_Adminhtml_Category_Edit extends
    Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId = 'category_id';
        $this->_blockGroup = 'monaco_news';
        $this->_controller = 'adminhtml_category';
        parent::__construct();
    }

    public function getHeaderText()
    {
        return $this->__('Category Details');
    }
}