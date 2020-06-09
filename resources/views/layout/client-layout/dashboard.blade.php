<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'F&G') }} - @yield('title')</title>
    @include('layout.dashboard.css')
    @yield('css')
</head>
<body class="adminbody">
<div id="main">
    @include('layout.client-layout.header.header')

    @include('layout.client-layout.header.left-sidebar')

    @yield('content')

    @include('layout.client-layout.footer.footer')

    @include('layout.client-layout.js')

    @yield('script')
{{--    @include('notifications')--}}
</div>
</body>
</html>
