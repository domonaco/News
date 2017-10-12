<?php
/**
 * Monaco News
 */

/**
 * Monaco News Status Model
 *
 * Options to Status.
 * @author Domenico Monaco
 * @version 0.2.0
 * @package Cms
 */
class Monaco_News_Model_Source_Status
{
    /**
     * toOptionArray
     * @return array
     */
    public function toOptionArray()
    {
        return array (
            array('value' => 0, 'label' => Mage::helper('monaco_news')->__('Disabled')),
            array('value' => 1, 'label' => Mage::helper('monaco_news')->__('Enabled'))
        );
    }

    /**
     * toGridArray
     *
     * Returns toOptionArray method as options to grid column
     * @return array
     */
    public function toGridArray()
    {
        $array = array();
        foreach($this->toOptionArray() as $option){
            $array[$option['value']] = $option['label'];
        }

        return $array;
    }
}
