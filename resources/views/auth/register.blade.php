@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registrarse') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text"
                                        class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                        value="{{ old('lastname') }}" required autocomplete="lastname">

                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="license"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Cedula') }}</label>

                                <div class="col-md-6">
                                    <input id="license" type="number"
                                        class="form-control @error('license') is-invalid @enderror" name="license"
                                        value="{{ old('license') }}" required autocomplete="license">

                                    @error('license')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="department"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>

                                <div class="col-md-6">
                                    <select name="department" id="department"
                                        class="form-control @error('department') is-invalid @enderror"
                                        value="{{ old('department') }}" required autocomplete="department">
                                    </select>

                                    @error('department')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

                                <div class="col-md-6">
                                    <select name="city" id="city" class="form-control @error('city') is-invalid @enderror"
                                        value="{{ old('city') }}" required autocomplete="city">
                                    </select>

                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cellphone"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Teléfono celular') }}</label>

                                <div class="col-md-6">
                                    <input id="cellphone" type="tel"
                                        class="form-control @error('cellphone') is-invalid @enderror" name="cellphone"
                                        value="{{ old('cellphone') }}" required autocomplete="cellphone">

                                    @error('cellphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Dirección de correo electrónico') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="habeasdata"
                                    class="col-md-4 col-form-label text-md-right">{{ __(' (“Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales”.') }}
                                    <a href="#">Haga clic aquí</a>)</label>

                                <div class="col-md-6">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="habeasdata" id="habeasdata1" value="yes" required>
                                        <label class="form-check-label" for="habeasdata1">
                                            SÍ
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="habeasdata" id="habeasdata2" value="no" checked>
                                        <label class="form-check-label" for="habeasdata2">
                                            NO
                                        </label>
                                    </div>

                                    @error('habeasdata')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button id="button" type="submit" class="btn btn-primary">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('js/dinamicSelect.js') }}"></script>
<script src="{{ asset('js/radioHabeasData.js') }}"></script>
