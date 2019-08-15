<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 8/14/19
 * Time: 9:20 AM
 */

namespace ZipClient;


use SimpleRequest\SimpleRequest;
use Throwable;
use ZipClient\Exceptions\DownloadFailException;
use ZipClient\Exceptions\ParseRequestResponseException;

class ZipClient
{
    /**
     * @param array $jobs
     * @return mixed
     * @throws \SimpleRequest\Exceptions\FailRequestException
     * @throws DownloadFailException
     */
    public static function download(array $jobs)
    {
        $illumination = '请求压缩生成压缩包';

        $complete_url = ZipClientConfig::get_ask_for_zip_url_path();

        $params = $jobs;

        $info = SimpleRequest::json_post($illumination, $complete_url, $params);

        //不判断code 省的后期变动被影响到　
        //不知道　code 为　10000 会不会改　反正改了都不通知
        try {

            [
                'result' => [
                    'task_id' => $task_id,
                ],
            ] = $info;

        } catch (Throwable $exception) {
            throw new DownloadFailException();
        }

        return $task_id;
    }

    /**
     * @param $task_id
     * @return string
     * @throws \SimpleRequest\Exceptions\FailRequestException
     * @throws ParseRequestResponseException
     */
    public static function get_generated_url($task_id) : string
    {
        $illumination = '请求压缩生成压缩包';

        $complete_url = ZipClientConfig::get_generate_task_url();

        $params = [
            'task_id' => $task_id,
        ];

        $info = SimpleRequest::json_post($illumination, $complete_url, $params);

        try {

            [
                'result' => [
                    'url' => $url,
                ],
            ] = $info;
        } catch (Throwable $exception) {
            throw new ParseRequestResponseException($info);
        }

        return $url;
    }
}