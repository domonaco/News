<?php
/**
 * Monaco News
 */

/**
 * Monaco News Controller
 *
 * Stories Controller.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 */
class Monaco_News_ListController extends Mage_Core_Controller_Front_Action
{
    /**
     * indexAction
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}