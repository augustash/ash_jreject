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
class Ash_Jreject_Model_System_Config_Source_Browser_Version_Opera
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
            array('value' => 'opera1', 'label' => 'Opera 1'),
            array('value' => 'opera2', 'label' => 'Opera 2'),
            array('value' => 'opera3', 'label' => 'Opera 3'),
            array('value' => 'opera4', 'label' => 'Opera 4'),
            array('value' => 'opera5', 'label' => 'Opera 5'),
            array('value' => 'opera6', 'label' => 'Opera 6'),
            array('value' => 'opera7', 'label' => 'Opera 7'),
            array('value' => 'opera8', 'label' => 'Opera 8'),
            array('value' => 'opera9', 'label' => 'Opera 9'),
            array('value' => 'opera10', 'label' => 'Opera 10'),
        );
        return $this->_options;
    }
}
