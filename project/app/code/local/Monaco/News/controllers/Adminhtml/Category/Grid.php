<?php
/**
 * Monaco News
 */

/**
 * Monaco News Category Grid Block
 *
 * Adminhtml block for category grid.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 */
class Monaco_News_Block_Adminhtml_Category_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * Monaco_News_Block_Adminhtml_Category_Grid constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('category_id');
        $this->setDefaultSort('category_id');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    /**
     * @return Mage_Adminhtml_Block_Widget_Grid
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('monaco_news/category')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    /**
     * _prepareColumns
     * @return $this
     */
    protected function _prepareColumns()
    {
        $this->addColumn(
          'category_id',
          array(
              'index' => 'category_id',
              'header' => $this->__('ID'),
              'width' => 50,
              'type' => 'number'
          )
        );
        $this->addColumn(
            'code',
            array(
                'index' => 'code',
                'header' => $this->__('Code'),
                'width' => 200
            )
        );
        $this->addColumn(
            'name',
            array(
                'index' => 'name',
                'header' => $this->__('Name')
            )
        );
        $this->addColumn(
            'status',
            array(
                'index' => 'status',
                'header' => $this->__('Status'),
                'width' => 250
            )
        );

        return parent::_prepareColumns();
    }
}

