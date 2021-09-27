<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://unpkg.com/feather-icons"></script>

    <title>{{ $title ?? 'Brain' }}</title>

    @yield('baseStyles')
</head>
<body class="body">
    
    @yield('body')


    @yield('baseScripts')
    <script>
        feather.replace()
    </script>
    
    {{-- Sweetalert --}}
    @include('sweetalert::alert')


</body>
</html>
