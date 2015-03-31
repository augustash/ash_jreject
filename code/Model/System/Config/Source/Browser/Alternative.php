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
class Ash_Jreject_Model_System_Config_Source_Browser_Alternative
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
            // array('value' => '', 'label' => Mage::helper('adminhtml')->__('-- Please Select --')),
            array('value' => 'msie', 'label' => 'Internet Explorer'),
            array('value' => 'firefox', 'label' => 'Firefox'),
            array('value' => 'chrome', 'label' => 'Chrome'),
            array('value' => 'safari', 'label' => 'Safari'),
            array('value' => 'opera', 'label' => 'Opera'),
        );
        return $this->_options;
    }
}
