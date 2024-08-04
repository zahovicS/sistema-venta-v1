@extends('layouts.auth')
@section('content')
    @php
        $error_auth = null;
        if(session()->has('message_auth')){
            $error_auth = session()->retrieve('message_auth');
        }
    @endphp
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <img src="{{ assets_path("img/logo/system-logo.png")  }}" alt="Logo">
                </div>
                @if($error_auth)
                    <div class="alert alert-danger"><i class="ph ph-warning-diamond"></i> {{ $error_auth }}</div>
                @endif
                <h1 class="auth-title">Sis. ventas v1</h1>
                <p class="auth-subtitle mb-5">Inicie sesión con su usuario y contraseña.</p>

                <form action="{{ base_url("auth/login") }}" method="post">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" name="username" placeholder="Username"
                               value="{{ $username ?? '' }}" readonly>
                        <div class="form-control-icon">
                            <i class="ph ph-user"></i>
                        </div>
                        <small class="mb-1 text-danger">{{ $errors['username'] ?? ($errors['auth'] ?? null) }}</small>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" name="password"
                               placeholder="Password" value="{{ $password ?? '' }}" readonly>
                        <div class="form-control-icon">
                            <i class="ph ph-key"></i>
                        </div>
                        <small class="mb-1 text-danger">{{ $errors['password'] ?? null }}</small>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Iniciar sesión</button>
                </form>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script>
        setTimeout(function(){
            document.querySelector("input[name='username']").removeAttribute("readonly");
            document.querySelector("input[name='password']").removeAttribute("readonly");
        },900);
    </script>
@endsection
