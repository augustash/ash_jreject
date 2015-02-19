<?php
/**
 * Use the jQuery Browser Rejection library (jReject) to notify customers
 * using old browsers to upgrade
 *
 * @category    Ash
 * @package     Ash_Jreject
 * @copyright   Copyright (c) 2015 August Ash, Inc. (http://www.augustash.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Ash_Jreject_Model_System_Config_Source_Browser_Version_Safari
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
            array('value' => 'safari1', 'label' => 'Safari 1'),
            array('value' => 'safari2', 'label' => 'Safari 2'),
            array('value' => 'safari3', 'label' => 'Safari 3'),
            array('value' => 'safari4', 'label' => 'Safari 4'),
            array('value' => 'safari5', 'label' => 'Safari 5'),
        );
        return $this->_options;
    }
}
