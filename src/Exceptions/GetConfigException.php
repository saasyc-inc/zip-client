<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 8/14/19
 * Time: 11:29 AM
 */

namespace ZipClient\Exceptions;


class GetConfigException extends BaseZipException
{
    public function __construct($config)
    {
        $message =
            sprintf(
                '获取配置 %s 错误', $config
            );

        parent::__construct($message);
    }
}