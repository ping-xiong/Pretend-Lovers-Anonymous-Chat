<?php
/**
 * Created by PhpStorm.
 * User: https://pingxonline.com
 * Date: 2019-01-12
 * Time: 20:58
 */


return [

    'server' => [
        // 服务地址，一般不修改，除非端口冲突
        // 必须与Register端口一致
        'RegisterHost' => 'text://0.0.0.0:1236',
        // 服务注册地址，一般不修改，除非端口冲突
        // 必须与RegisterHost端口一致
        'Register' => '127.0.0.1:1236',
        // 聊天服务器端口
        // 如果端口冲突则修改8282为其他端口
        // 注意服务商和系统的防火墙放行该端口
        'Gateway' => 'websocket://0.0.0.0:8282'
    ]

];