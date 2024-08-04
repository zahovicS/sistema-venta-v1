<div class="card">
    <div class="card-header pb-0">
        <h5 class="text-danger"><img src="{{ assets_path("img/icons/colored/w11-error-animated.gif") }}" height="20px"> Por favor elija una tienda </h5>
    </div>
    <div class="card-content">
        <div class="card-body pt-0">
            <form action="#!" method="POST" id="form-select-store-for-user">
                <div class="row">
                    <div class="col-12 col-lg-10 col-md-9 col-sm-8">
                        <select class="choices form-select mb-3" id="select-store"></select>
                    </div>
                    <div class="col-12 col-lg-2 col-md-3 col-sm-4 pt-2 pt-sm-0">
                        <button class="btn btn-primary w-100 h-100" type="submit">Elegir tienda</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@push('js')
    {{ vite_resource("js/stores/select-store.js") }}
@endpush
