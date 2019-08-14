<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 8/12/19
 * Time: 11:43 AM
 */

namespace ZipClient;


class ZipClientServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    const alias = 'ZipClient';

    public function provides()
    {
        $alias = self::alias;

        return [ZipClient::class, $alias];
    }

    public function boot()
    {
        $config_path =
            sprintf('%s/%s', __DIR__, 'zip.php');

        $this->publishes([
            $config_path => config_path('zip.php'),
        ]);
    }


}