<!DOCTYPE html>
<html>
<head>
    <title>@yield('name')</title>
    <style>
    .active a {
        color: red;
        text-decoration: none;
    }
    </style>
</head>
<body>
 @yield('content')
</body>
</html class="{{ request()->routeIs('home') ? 'active' : ''}}">