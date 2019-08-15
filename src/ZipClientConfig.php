<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 8/14/19
 * Time: 9:20 AM
 */

namespace ZipClient;


use ZipClient\LaravelBridge\Functions;

class ZipClientConfig
{
    public static function get_generate_task_url()
    {
        $domain = self::get_domain();

        $key = 'generate_task_path';

        $path = Functions::config($key);

        return sprintf("%s/%s", $domain, $path);
    }

    public static function get_ask_for_zip_url_path()
    {
        $domain = self::get_domain();

        $key = 'ask_for_zip_url_path';

        $path = Functions::config($key);

        return sprintf("%s/%s", $domain, $path);
    }

    public static function get_domain()
    {
        //todo
//        $key = 'domain';
//
//        return Functions::config($key);
        return ZipClientConfigSpecific::get_domain();
    }
}