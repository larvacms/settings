<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

use LarvaCMS\Settings\Contracts\SettingsRepository;

if (!function_exists('settings')) {
    /**
     * Get setting value or object.
     *
     * @param string $key
     * @param string $default
     * @return SettingsRepository|mixed
     */
    function settings($key = '', $default = null)
    {
        if (empty($key)) {
            return app()->make(SettingsRepository::class);
        }
        return app()->make(SettingsRepository::class)->get($key, $default);
    }
}
