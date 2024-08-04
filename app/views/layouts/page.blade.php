@extends("layouts.master")
@section("body")
    <div id="app">
        @include("components.sidebar")
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="ph ph-list fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                @if(_user_has_role("Administrador") && _user_doesnt_store())
                    @include('components.select-store')
                @endif

                @if(_user_has_store())
                    @include('components.selected-store')
                @endif

                <div class="page-arrow">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3></h3>
                        </div>
                    </div>
                </div>
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>@yield("title")</h3>
                        </div>
                    </div>
                </div>
                <section class="section">
                    @yield("content")
                </section>
            </div>
        </div>
    </div>
@endsection
@section("scripts")
    <script src="{{ assets_path("theme/maze/js/components/dark.js")  }}"></script>
    <script src="{{ assets_path("theme/maze/js/components/perfect-scrollbar/perfect-scrollbar.min.js")  }}"></script>
    <script src="{{ assets_path("theme/maze/js/app.js")  }}"></script>
    @stack('js')
@endsection
