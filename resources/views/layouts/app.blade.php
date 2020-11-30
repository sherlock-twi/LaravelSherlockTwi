<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titlename')</title>
    <link rel="stylesheet" href="/css/icons-font.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body id="body">
    @include('inc.messages')
    @include('inc.nav')
    <div class="content">
        @yield('content')
    </div>
    <script src="/js/MainFunctional.js"></script>
    </div>
</body>
</html>
