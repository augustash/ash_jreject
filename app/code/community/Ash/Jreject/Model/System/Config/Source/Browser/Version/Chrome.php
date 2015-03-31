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
class Ash_Jreject_Model_System_Config_Source_Browser_Version_Chrome
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
            array('value' => 'chrome1', 'label' => 'Chrome 1'),
            array('value' => 'chrome2', 'label' => 'Chrome 2'),
            array('value' => 'chrome3', 'label' => 'Chrome 3'),
            array('value' => 'chrome4', 'label' => 'Chrome 4'),
            array('value' => 'chrome5', 'label' => 'Chrome 5'),
            array('value' => 'chrome6', 'label' => 'Chrome 6'),
            array('value' => 'chrome7', 'label' => 'Chrome 7'),
            array('value' => 'chrome8', 'label' => 'Chrome 8'),
            array('value' => 'chrome9', 'label' => 'Chrome 9'),
            array('value' => 'chrome10', 'label' => 'Chrome 10'),
            array('value' => 'chrome11', 'label' => 'Chrome 11'),
            array('value' => 'chrome12', 'label' => 'Chrome 12'),
            array('value' => 'chrome13', 'label' => 'Chrome 13'),
            array('value' => 'chrome14', 'label' => 'Chrome 14'),
            array('value' => 'chrome15', 'label' => 'Chrome 15'),
            array('value' => 'chrome16', 'label' => 'Chrome 16'),
            array('value' => 'chrome17', 'label' => 'Chrome 17'),
            array('value' => 'chrome18', 'label' => 'Chrome 18'),
            array('value' => 'chrome19', 'label' => 'Chrome 19'),
        );
        return $this->_options;
    }
}
