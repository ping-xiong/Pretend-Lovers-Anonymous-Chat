<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <title>匿名聊天室后台登录</title>
</head>
<body>

    <div id="app">
        <login></login>
    </div>


    <script src="https://cdn.bootcss.com/vue/2.5.7/vue.min.js"></script>
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    <script src="{{@asset('js/app.js')}}"></script>
</body>
</html>