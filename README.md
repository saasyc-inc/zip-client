#####  打包下载写的客户端

    执行    php artisan vendor:publish


#####  调用示例

        提供两个方法
#####  创建下载任务
```

        
        $path = '/age';
        
        $urls = [
            'https://yiche-static.oss-cn-hangzhou.aliyuncs.com/yiche/uploads/image/20190814/bba450c87f32fbb711be606090df97bd.jpg',
        ];
        
        $jobs  = [
            'task' => [
                [
                    'path'  => $path,
                    'files' => $urls,
                ],
            ],
        ];
        $token = self::TOKEN;
        
        $task_id = ZipClient::download($token, $jobs);  //返回　下载任务id
        
        $this->assertTrue(is_int($task_id));
        
```

#####  返回任务生成的地址

```
        
         
         $token = self::TOKEN;
        
         $url = ZipClient::get_generated_url($token, $task_id); // 返回 下载完成后生成的地址　或者　空字符串
        
         $this->assertTrue(is_string($url));
```
