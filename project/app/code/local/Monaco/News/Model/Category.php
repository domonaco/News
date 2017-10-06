<?php
/**
 * Monaco News
 */

/**
 * Monaco News Model Category
 *
 * @method Monaco_News_Model_Category getCode()
 * @method setCode(string $code)
 * @method Monaco_News_Model_Category getName()
 * @method setName(string $name)
 * @method Monaco_News_Model_Category getStatus()
 * @method setStatus(bool $status)
 * @method Monaco_News_Model_Category getCreatedAt()
 * @method Monaco_News_Model_Category getUpdatedAt()
 * @method setUpdatedAt(string $updatedAt)
 * Category Model.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 */
class Monaco_News_Model_Category extends Mage_Core_Model_Abstract
{
    /**
     * _construct
     *
     */
    protected function _construct()
    {
        $this->_init('monaco_news/category');
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

