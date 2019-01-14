<?php

namespace App\Http\Controllers\login;

use App\Model\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
    //

    public function auth(Request $request){

        $username = $request->get('username');
        $password = $request->get('password');

        $admin = admin::where([
            ['username', $username],
            ['password', $password]
        ])->first();

        if (!empty($admin)){
            session(
                [
                    "admin" => 1,
                    "name" => $admin->name
                ]
            );

            return [
                "code" => 0,
                "msg" => "登录成功"
            ];

        }else{
            return [
                "code" => -1,
                "msg" => "账号或密码错误"
            ];
        }

    }
}
