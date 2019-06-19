<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Weibo App')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>

<body>
    @include('layouts._header')
    <div class="container">
        <div class="offset-md-1 col-md-10">
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>
</body>

</html>