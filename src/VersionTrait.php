<?php
/**
 * Project helpers-mobile
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 08/18/2021
 * Time: 07:35
 */

namespace nguyenanhung\Classes\Helper\Mobile;

/**
 * Trait VersionTrait
 *
 * @package   nguyenanhung\Classes\Helper\Mobile
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
trait VersionTrait
{
    /**
     * Function getVersion
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/18/2021 36:23
     */
    public function getVersion()
    {
        return self::VERSION;
    }
}
