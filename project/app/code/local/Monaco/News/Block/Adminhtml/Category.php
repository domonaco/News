<?php
/**
 * Monaco News
 */

/**
 * Monaco News Category Block
 *
 * Adminhtml block for category grid.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 */
class Monaco_News_Block_Adminhtml_Category extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Monaco_News_Block_Adminhtml_Category constructor
     */
    public function __construct()
    {
        $this->_blockGroup = 'monaco_news';
        $this->_controller = 'adminhtml_category';
        $this->_headerText = $this->__('News Categories');
        parent::__construct();
    }
}
