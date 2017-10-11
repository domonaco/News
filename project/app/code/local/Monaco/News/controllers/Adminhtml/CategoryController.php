<?php
/**
 * Monaco News
 */

/**
 * Monaco News Adminhtml Controller
 *
 * Backend Category Controller.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 */
class Monaco_News_Adminhtml_CategoryController extends Mage_Adminhtml_Controller_Action
{
    /**
     * indexAction
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * _isAllowed
     * @return bool
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('monaco_news');

    }
}

