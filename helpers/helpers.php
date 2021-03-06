<?php
/**
 * Project helpers-mobile
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/20/2021
 * Time: 19:18
 */
if (!function_exists('getVersionHelperMobileByBear')) {
    /**
     * Function getVersionHelperMobileByBear
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/20/2021 14:08
     */
    function getVersionHelperMobileByBear()
    {
        $helper = new nguyenanhung\Classes\Helper\Mobile\AppleLink();

        return $helper->getVersion();
    }
}
if (!function_exists('getInfoPropertiesHelperMobileByBear')) {
    /**
     * Function getInfoPropertiesHelperMobileByBear
     *
     * @return array
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/20/2021 19:26
     */
    function getInfoPropertiesHelperMobileByBear()
    {
        $helper = new nguyenanhung\Classes\Helper\Mobile\AppleLink();

        return $helper->getHelperProperties();
    }
}
if (!function_exists('appleMailLink')) {
    /**
     * Function appleMailLink
     *
     * @param string $mailto
     * @param string $cc
     * @param string $subject
     * @param string $body
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/20/2021 33:41
     */
    function appleMailLink($mailto = '', $cc = '', $subject = '', $body = '')
    {
        return nguyenanhung\Classes\Helper\Mobile\AppleLink::mailLink($mailto, $cc, $subject, $body);
    }
}
if (!function_exists('applePhoneLink')) {
    /**
     * Function applePhoneLink
     *
     * @param string $phone
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/20/2021 35:46
     */
    function applePhoneLink($phone = '')
    {
        return nguyenanhung\Classes\Helper\Mobile\AppleLink::phoneLink($phone);
    }
}
if (!function_exists('appleFaceTimeVideoLink')) {
    /**
     * Function appleFaceTimeVideoLink
     *
     * @param string $appleId
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/20/2021 36:23
     */
    function appleFaceTimeVideoLink($appleId = '')
    {
        return nguyenanhung\Classes\Helper\Mobile\AppleLink::FaceTimeVideoLink($appleId);
    }
}
if (!function_exists('appleFaceTimeAudioLink')) {
    /**
     * Function appleFaceTimeAudioLink
     *
     * @param string $appleId
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/20/2021 36:44
     */
    function appleFaceTimeAudioLink($appleId = '')
    {
        return nguyenanhung\Classes\Helper\Mobile\AppleLink::FaceTimeAudioLink($appleId);
    }
}
if (!function_exists('appleSmsLink')) {
    /**
     * Function appleSmsLink
     *
     * @param string $phone
     * @param string $body
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/20/2021 37:30
     */
    function appleSmsLink($phone = '', $body = '')
    {
        return nguyenanhung\Classes\Helper\Mobile\AppleLink::smsLink($phone, $body);
    }
}
if (!function_exists('detectDeviceLinkName')) {
    /**
     * Function detectDeviceLinkName
     *
     * @param array $data
     * @param bool  $redirect
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/20/2021 40:51
     */
    function detectDeviceLinkName($data = array(), $redirect = false)
    {
        $device = new nguyenanhung\Classes\Helper\Mobile\DeviceDetectLink();
        $device->setData($data)->detectDevice();
        if ($redirect === true) {
            $device->redirect();
        }

        return $device->getLink();
    }
}
if (!function_exists('detectDeviceLinkSystem')) {
    /**
     * Function detectDeviceLinkSystem
     *
     * @param array $data
     * @param bool  $redirect
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/20/2021 41:17
     */
    function detectDeviceLinkSystem($data = array(), $redirect = false)
    {
        $device = new nguyenanhung\Classes\Helper\Mobile\DeviceDetectLink();
        $device->setData($data)->detectSystem();

        if ($redirect === true) {
            $device->redirect();
        }

        return $device->getLink();
    }
}
