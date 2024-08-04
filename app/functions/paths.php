<?php

function base_url(string $path = ""): string
{
    $url = _env("BASE_URL") ?? "/";
    return "{$url}{$path}";
}

function assets_path(string $asset = ""): string
{
    $paths = MvcConfig("paths");
    return base_url() . removePublicPath($paths["assets"]) . "/" . $asset;
}

function vite_resource(string $path = ""): \Illuminate\Support\HtmlString
{
    return vite($path, "/resources");
}

function _route(string $route = ""): string
{
    try {
        return base_url(removeLastSlash(route($route))) ?? "/";
    }catch (Exception $exception){
        return "#!";
    }
}

function is_current_route($route = ""): bool{
    $current_uri = app()->getCurrentUri();
    try {
        return strpos(_route($route),$current_uri);
    }catch (Exception $exception){
        return false;
    }
}

function removeLastSlash(string $string)
{
    if (substr($string, 0, 1) == "/") {
        return substr($string, 1);
    }
    return $string;
}

function removePublicPath(string $path = ""): string
{
    return str_replace(["/public", "public/"], "", $path);
}

