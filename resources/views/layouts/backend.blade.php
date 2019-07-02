<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title', 'Home') | Mobi</title>
</head>
<body>

    @include('backend.partials.nav')
    <div>
        @yield('content')
    </div>
    
</body>
</html> 