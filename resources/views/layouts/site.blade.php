<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>{{ __('panel.site_title') }}</title>
</head>

<body class="text-white min-h-screen flex flex-col">
    @include('site.header')
    @yield('content')
    @include('site.footer')

    @stack('scripts')
</body>


</html>
