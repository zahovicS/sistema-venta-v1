@extends("layouts.master")
@section("styles")
    <link rel="stylesheet"  href="{{ assets_path("theme/maze/css/auth.css") }}">
@endsection

@section("body")
    <div id="auth">
        @yield("content")
    </div>
@endsection
