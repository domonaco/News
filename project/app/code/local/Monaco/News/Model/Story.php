<?php
/**
 * Monaco News
 */

/**
 * Monaco News Model Story
 *
 * @method Monaco_News_Model_Story getTitle()
 * @method setTitle(string $title)
 * @method Monaco_News_Model_Story getContent()
 * @method setContent(string $content)
 * @method Monaco_News_Model_Story getStatus()
 * @method setStatus(bool $status)
 * @method Monaco_News_Model_Story getCreatedAt()
 * @method Monaco_News_Model_Story getUpdatedAt()
 * @method setUpdatedAt(string $updatedAt)
 * Category Model.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 */
class Monaco_News_Model_Story extends Mage_Core_Model_Abstract
{
    /**
     * _construct
     *
     */
    protected function _construct()
    {
        $this->_init('monaco_news/story');
    }

    /**
     * _beforeSave
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        $this->setUpdatedAt(Mage::getSingleton('core/date')->gmtDate());
        return $this;
    }
}

