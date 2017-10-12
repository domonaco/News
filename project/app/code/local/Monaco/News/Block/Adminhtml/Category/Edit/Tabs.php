<?php
/**
 * Monaco News
 */

/**
 * Monaco News Adminhtml Edit Block
 *
 * Category Edit Tab Block.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 */
class Monaco_News_Block_Adminhtml_Category_Edit_Tabs extends
Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('category_edit_tabs');
        $this->setDestElementId('category_edit_form');
    }

    protected function _beforeToHtml()
    {
        $this->addTab(
            'Category Details',
            array(
                'label' => $this->__('Details'),
                'title' => $this->__('Details'),
            )
        );

        parent::_beforeToHtml();
    }
}