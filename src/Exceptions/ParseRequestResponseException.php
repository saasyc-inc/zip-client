<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 8/14/19
 * Time: 11:29 AM
 */

namespace ZipClient\Exceptions;


class ParseRequestResponseException extends BaseZipException
{
    public function __construct($info)
    {
        $message = sprintf('解析请求错误 %s', json_encode($info));

        parent::__construct($message);
    }
}