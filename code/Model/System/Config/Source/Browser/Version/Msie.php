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
class Ash_Jreject_Model_System_Config_Source_Browser_Version_Msie
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
            array('value' => 'msie5', 'label' => 'Internet Explorer 5'),
            array('value' => 'msie6', 'label' => 'Internet Explorer 6'),
            array('value' => 'msie7', 'label' => 'Internet Explorer 7'),
            array('value' => 'msie8', 'label' => 'Internet Explorer 8'),
            array('value' => 'msie9', 'label' => 'Internet Explorer 9'),
        );
        return $this->_options;
    }
}
