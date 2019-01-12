<?php
/**
 * Created by PhpStorm.
 * User: 平兄
 * Date: 2019-01-12
 * Time: 15:53
 */

namespace App\Workerman;


class Events
{
    public static function onWorkerStart($businessWorker){

    }

    public static function onConnect($client_id){

    }

    public static function onWebSocketConnect($client_id, $data){

    }

    public static function onMessage($client_id, $message){

    }

    public static function onClose($client_id){

    }
}