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
class Ash_Jreject_Model_System_Config_Source_Browser_Version_Firefox
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
            array('value' => 'firefox2', 'label' => 'Firefox 2'),
            array('value' => 'firefox3', 'label' => 'Firefox 3'),
            array('value' => 'firefox4', 'label' => 'Firefox 4'),
            array('value' => 'firefox5', 'label' => 'Firefox 5'),
            array('value' => 'firefox6', 'label' => 'Firefox 6'),
            array('value' => 'firefox7', 'label' => 'Firefox 7'),
            array('value' => 'firefox8', 'label' => 'Firefox 8'),
            array('value' => 'firefox9', 'label' => 'Firefox 9'),
            array('value' => 'firefox10', 'label' => 'Firefox 10'),
            array('value' => 'firefox11', 'label' => 'Firefox 11'),
            array('value' => 'firefox12', 'label' => 'Firefox 12'),
        );
        return $this->_options;
    }
}
