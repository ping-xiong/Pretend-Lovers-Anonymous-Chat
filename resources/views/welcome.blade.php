<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>假装情侣匿名聊天室</title>
        <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">

    </head>
    <body>
           <div id="app">

           </div>

    </body>

    <script src="https://cdn.bootcss.com/vue/2.5.7/vue.min.js"></script>
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    <script src="{{@asset('js/app.js')}}"></script>
</html>
