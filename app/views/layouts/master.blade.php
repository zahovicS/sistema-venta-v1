<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de ventas - @yield("title","inicio")</title>
    <meta name="base-url" content="{{ base_url() }}">
    {{-- CSS THEME --}}
    <link rel="stylesheet" href="{{ assets_path("theme/maze/css/app.css") }}">
    <link rel="stylesheet" href="{{ assets_path("theme/maze/css/app-dark.css") }}">
    {{-- PHOSPHOR ICONS --}}
    <link rel="stylesheet" href="{{ assets_path("css/phosphor-icons/bold.css") }}">
    <link rel="stylesheet" href="{{ assets_path("css/phosphor-icons/duetone.css") }}">
    <link rel="stylesheet" href="{{ assets_path("css/phosphor-icons/fill.css") }}">
    <link rel="stylesheet" href="{{ assets_path("css/phosphor-icons/light.css") }}">
    <link rel="stylesheet" href="{{ assets_path("css/phosphor-icons/regular.css") }}">
    <link rel="stylesheet" href="{{ assets_path("css/phosphor-icons/thin.css") }}">
    {{-- CUSTOM THEME --}}
    {{ vite_resource("css/custom.css") }}
    {{ vite_resource("css/skeleton.css") }}
    {{-- INIT THEME --}}
    <script src="{{ assets_path("theme/maze/js/initTheme.js") }}"></script>
    @yield("styles")
</head>
<body>
@yield("body")
@yield("scripts")
</body>
</html>
