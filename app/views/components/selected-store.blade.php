<div class="card">
    <div class="card-content">
        <div class="card-body">
            @php
                $store = _user_get_store();
                $store_name = $store->name ?? 'SIN TIENDA';
            @endphp
            <div class="row">
                <div class="col-10 d-sm-flex flex-sm-wrap align-content-center">
                    <img class="d-inline" src="{{ assets_path("img/icons/colored/w11-store.png") }}" height="20px"><h5 class="ps-2 fw-bold d-inline mb-0">{{ $store_name }}</h5>
                </div>
                <div class="col-2 text-end">
                    <a href="#!" class="btn btn-danger btn-sm fw-bold" id="clear-store-for-user">Salir</a>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    {{ vite_resource("js/stores/clear-select-store.js") }}
@endpush
