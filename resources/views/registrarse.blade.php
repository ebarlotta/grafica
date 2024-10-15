blade
@extends('layouts.app')
@section('content')
<div class="container">
    <!-- Modal -->
    <div class="modal fade show" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true" style="display: block;">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <div class="col-md-6 col-12 d-flex justify-content-center align-items-center">
                            <div class="p-4 w-100">
                                <div class="text-center mb-4">
                                    <i class="bi bi-person-plus" style="font-size: 2rem;"></i>
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ingresa tu nombre">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingresa tu correo electrónico">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password" placeholder="Ingresa tu contraseña">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma tu contraseña">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">REGISTRARSE</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <img src="{{ asset('fotos/register.jpeg') }}" alt="Imagen" class="img-fluid h-100 w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
