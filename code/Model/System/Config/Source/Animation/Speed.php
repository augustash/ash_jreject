<?php
/**
 * Use the jQuery Browser Rejection library (jReject) to notify customers
 * using old browsers to upgrade
 *
 * @category    Ash
 * @package     Ash_Jreject
 * @copyright   Copyright (c) 2015 August Ash, Inc. (http://www.augustash.com)
 * @license     LICENSE.txt (MIT)
 */
class Ash_Jreject_Model_System_Config_Source_Animation_Speed
{
    /**
     * Select options array
     *
     * @var array
     */
    protected $_options;

    /**
     * Return a dropdown menu array of values
     *
     * @return  array
     */
    public function toOptionArray()
    {
        $this->_options = array(
            array('value' => '', 'label' => Mage::helper('adminhtml')->__('-- Please Select --')),
            array('value' => 300, 'label' => 'Fast (300ms)'),
            array('value' => 500, 'label' => 'Medium (500ms)'),
            array('value' => 700, 'label' => 'Slow (700ms)'),
        );
        return $this->_options;
    }
}
