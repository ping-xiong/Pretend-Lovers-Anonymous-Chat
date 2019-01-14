<?php

namespace App\Http\Controllers\server;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class serverController extends Controller
{

    // 服务器开启
    public function open(Request $request){
        return Artisan::queue('workman',[
            'action' => 'start',
            '--queue' => 'redis'
        ]);
    }

    // 服务器关闭
    public function close(Request $request){

    }
}
