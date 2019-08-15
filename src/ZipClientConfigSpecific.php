<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 8/14/19
 * Time: 9:20 AM
 */

namespace ZipClient;


use Yiche\Config\Models\SapiConfig;

class ZipClientConfigSpecific
{

    public static function get_domain()
    {
        $config_key = 'INTERNAL_OPEN_PLATFORM';

//        try {
        $info = SapiConfig::getConfigValue($config_key);

        $info = json_decode($info, true);

        [
            'url' => $url,
        ] = $info;
//        } catch (Throwable $throwable) {
//
//        }

        return $url;
    }
}