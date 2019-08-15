<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 8/14/19
 * Time: 11:28 AM
 */

namespace ZipClient\Exceptions;


use Exception;

class DownloadFailException extends Exception
{
    public function __construct()
    {
        $message =
            sprintf(
                '下载失败'
            );

        parent::__construct($message);
    }
}