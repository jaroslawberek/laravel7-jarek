<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin.particles.html_head')
</head>

<body>

    @include('admin.particles.header')
    @include('admin.particles.left_menu')

    <div class="right">
        <div class="content-page">
            @yield('content')
        </div>
    </div>
    @include('admin.particles.scripts')
</body>

</html>
