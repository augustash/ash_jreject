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
/**
 * Core data helper
 *
 * @category    Ash
 * @package     Ash_Jreject
 * @author      August Ash Team <core@augustash.com>
 */
class Ash_Jreject_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_ENABLED                              = 'ash_jreject/general/enabled';
    const XML_PATH_CONFIG_ALLOW_CLOSE                   = 'ash_jreject/config/close';
    const XML_PATH_CONFIG_ALLOW_CLOSE_WITH_ESC          = 'ash_jreject/config/close_esc';
    const XML_PATH_CONFIG_REMEMBER_CLOSE_WITH_COOKIE    = 'ash_jreject/config/close_cookie';
    const XML_PATH_CONFIG_OVERLAY_BG_COLOR              = 'ash_jreject/config/overlay_bg_color';
    const XML_PATH_CONFIG_OVERLAY_BG_OPACITY            = 'ash_jreject/config/overlay_opacity';
    const XML_PATH_CONFIG_FADE_IN_SPEED                 = 'ash_jreject/config/fade_in_time';
    const XML_PATH_CONFIG_FADE_OUT_SPEED                = 'ash_jreject/config/fade_out_time';
    const XML_PATH_BROWSERS_IE                          = 'ash_jreject/browsers/msie';
    const XML_PATH_BROWSERS_FIREFOX                     = 'ash_jreject/browsers/firefox';
    const XML_PATH_BROWSERS_SAFARI                      = 'ash_jreject/browsers/safari';
    const XML_PATH_BROWSERS_CHROME                      = 'ash_jreject/browsers/chrome';
    const XML_PATH_BROWSERS_OPERA                       = 'ash_jreject/browsers/opera';
    const XML_PATH_BROWSER_ALTERNATIVES                 = 'ash_jreject/browser_alternatives/display';
    const XML_PATH_CUSTOM_HEADER                        = 'ash_jreject/custom/header';
    const XML_PATH_CUSTOM_PARAGRAPH1                    = 'ash_jreject/custom/paragraph1';
    const XML_PATH_CUSTOM_PARAGRAPH2                    = 'ash_jreject/custom/paragraph1';
    const XML_PATH_CUSTOM_CLOSE_MESSAGE                 = 'ash_jreject/custom/close_message';
    const XML_PATH_CUSTOM_CLOSE_LINK                    = 'ash_jreject/custom/close_link';
    const XML_PATH_CUSTOM_CLOSE_URL                     = 'ash_jreject/custom/close_url';

    /**
     * $_browsers
     *
     * @var array
     */
    protected $_browsers = array('msie', 'firefox', 'chrome', 'safari', 'opera');

    /**
     * Check if Yeti Polyfills is enabled
     *
     * @return  boolean
     */
    public function isEnabled()
    {
        if (Mage::getStoreConfigFlag(self::XML_PATH_ENABLED)) {
            return true;
        }
        return false;
    }

    /**
     * Check if the modal window is allowed to be closed
     *
     * @return boolean
     */
    public function getAllowModalClose()
    {
        if (Mage::getStoreConfigFlag(self::XML_PATH_CONFIG_ALLOW_CLOSE)) {
            return true;
        }
        return false;
    }

    /**
     * Check if the modal window is allowed to be closed by pressing the ESC key
     *
     * @return boolean
     */
    public function getAllowModalCloseByEsc()
    {
        if (Mage::getStoreConfigFlag(self::XML_PATH_CONFIG_ALLOW_CLOSE_WITH_ESC)) {
            return true;
        }
        return false;
    }

    /**
     * Check if the modal window is allowed to be closed by pressing the ESC key
     *
     * @return boolean
     */
    public function getRememberModalCloseWithCookie()
    {
        if (Mage::getStoreConfigFlag(self::XML_PATH_CONFIG_REMEMBER_CLOSE_WITH_COOKIE)) {
            return true;
        }
        return false;
    }

    /**
     * Return the hex color value for the overlay's background
     *
     * @return string
     */
    public function getOverlayBgColor()
    {
        return Mage::getStoreConfig(self::XML_PATH_CONFIG_OVERLAY_BG_COLOR);
    }

    /**
     * Return the hex color value for the overlay's opacity
     *
     * @return float
     */
    public function getOverlayOpacity()
    {
        return (float)Mage::getStoreConfig(self::XML_PATH_CONFIG_OVERLAY_BG_OPACITY);
    }

    /**
     * Return the animation speed in ms (i.e., 300)
     *
     * @return integer|string
     */
    public function getFadeInTime()
    {
        return Mage::getStoreConfig(self::XML_PATH_CONFIG_FADE_IN_SPEED);
    }

    /**
     * Return the animation speed in ms (i.e., 300)
     *
     * @return integer|string
     */
    public function getFadeOutTime()
    {
        return Mage::getStoreConfig(self::XML_PATH_CONFIG_FADE_OUT_SPEED);
    }

    /**
     * Return the custom header text
     *
     * @return string
     */
    public function getCustomHeader()
    {
        return Mage::getStoreConfig(self::XML_PATH_CUSTOM_HEADER);
    }

    /**
     * Return the custom paragraph 1 text
     *
     * @return string
     */
    public function getCustomParagraph1()
    {
        return Mage::getStoreConfig(self::XML_PATH_CUSTOM_PARAGRAPH1);
    }

    /**
     * Return the custom paragraph 2 text
     *
     * @return string
     */
    public function getCustomParagraph2()
    {
        return Mage::getStoreConfig(self::XML_PATH_CUSTOM_PARAGRAPH2);
    }

    /**
     * Return the custom closing message
     *
     * @return string
     */
    public function getCustomCloseMessage()
    {
        return Mage::getStoreConfig(self::XML_PATH_CUSTOM_CLOSE_MESSAGE);
    }

    /**
     * Return the custom close link text
     *
     * @return string
     */
    public function getCustomCloseLink()
    {
        return Mage::getStoreConfig(self::XML_PATH_CUSTOM_CLOSE_LINK);
    }

    /**
     * Return the custom close url path
     *
     * @return string
     */
    public function getCustomCloseUrl()
    {
        return Mage::getStoreConfig(self::XML_PATH_CUSTOM_CLOSE_URL);
    }

    /**
     * Return an array of browser alternatives to suggest to the end user
     *
     * @return array
     */
    public function getBrowserAlternatives()
    {
        return explode(',', Mage::getStoreConfig(self::XML_PATH_BROWSER_ALTERNATIVES));
    }

    /**
     * Return an array of rejected browser versions
     *
     * The browser version will be the key & the value will be hardcoded to true
     *
     * @return array
     */
    public function getSelectedBrowserVersions()
    {
        $browsers = $this->getBrowsers();
        $rejected = array();

        foreach($browsers as $browser) {
            $versions = explode(',', $this->getSelectedBrowserVersionsForBrowser($browser));
            foreach($versions as $version) {
                $rejected[$version] = true;
            }
        }

        return $rejected;
    }

    /**
     * Return the list/array of selected browser versions for an individual browser
     *
     * @return integer|string
     */
    public function getSelectedBrowserVersionsForBrowser($browser = 'msie')
    {
        switch ($browser) {
            case 'firefox':
                $versions = Mage::getStoreConfig(self::XML_PATH_BROWSERS_FIREFOX);
                break;

            case 'chrome':
                $versions = Mage::getStoreConfig(self::XML_PATH_BROWSERS_CHROME);
                break;

            case 'safari':
                $versions = Mage::getStoreConfig(self::XML_PATH_BROWSERS_SAFARI);
                break;

            case 'opera':
                $versions = Mage::getStoreConfig(self::XML_PATH_BROWSERS_OPERA);
                break;

            case 'msie':
            default:
                $versions = Mage::getStoreConfig(self::XML_PATH_BROWSERS_IE);
                break;
        }

        return $versions;
    }

    /**
     * Return the relative path to the jreject browser image assets
     * accounting for the current skin/theme.
     *
     * @return string
     */
    public function getImagePath()
    {
        $skinDir = Mage::getBaseDir('skin');
        $relativeCurrentSkinPath = str_replace($skinDir, '/skin', $this->_getCurrentSkinPath());

        return $relativeCurrentSkinPath . DS . 'ash_jreject' . DS . 'images' . DS . 'browsers' . DS;
    }

    /**
     * Return the file path to the current skin/theme as a string
     *
     * @return string
     */
    protected function _getCurrentSkinPath()
    {
        return Mage::getDesign()->getSkinBaseDir();
    }

    /**
     * getter method for $_browsers
     *
     * @return array
     */
    public function getBrowsers()
    {
        return $this->_browsers;
    }

}
