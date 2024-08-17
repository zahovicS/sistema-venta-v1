@extends("layouts.page")
@section('title','Dashboard')
@section('content')
    <div class="row">
        <div class="col-12 col-lg-9">
            @include('components.dashboard.widgets')
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="{{ assets_path("img/icons/colored/w11-profile.png")  }}" alt="profile">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">{{ auth()->user()["fullname"] }}</h5>
                            <h6 class="text-muted mb-0">&#64;{{ auth()->user()["username"] }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Clientes potenciales</h4>
                </div>
                <div class="card-content pb-4" id="container-potential-clients">

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    {{ vite_resource("js/dashboard/client-dashboard.js") }}
@endpush
