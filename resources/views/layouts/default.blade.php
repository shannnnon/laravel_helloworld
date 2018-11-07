<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layouts._header')

<div class="container">
    <!--    加入消息提醒视图-->
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
</div>

<script src="/js/app.js"></script>
</body>
</html>