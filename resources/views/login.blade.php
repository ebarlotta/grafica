@extends('layouts.app')
@section('content')
<div class="container">
    <!-- Modal -->
    <div class="modal fade show" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" style="display: block;">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <div class="col-md-6 col-12 d-flex justify-content-center align-items-center">
                            <div class="p-4 w-100">
                                <div class="text-center mb-4">
                                    <i class="bi bi-camera" style="font-size: 2rem;"></i>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingresa tu correo electrónico">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password" placeholder="Ingresa tu contraseña">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Recuérdame</label>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">INICIAR SESIÓN</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <img src="{{ asset('fotos/login1.jpeg') }}" alt="Imagen" class="img-fluid h-100 w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
