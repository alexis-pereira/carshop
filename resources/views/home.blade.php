@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Ganador del primer premio') }}
                        <div class="mr-2 float-md-right">
                            <a href="{{ route('user.export') }}" class="btn btn-sm bg-gradient-success btn-flat"
                                onclick="return confirm('¿ Desea descargar el excel de todos los usuarios ?')"><i
                                    class="fas fa-download"></i> Descargar excel de usuarios</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="scroll" style="height: 200px;overflow-y: scroll;overflow-x: hidden;">
                            <div class="col-12 text-center">
                                <strong>Usuarios registrados actualmente</strong>
                            </div>
                            @foreach ($users as $user)
                                <div class="row align-items-center">
                                    <div class="col-2"></div>
                                    <div class="col-8 text-center">
                                        <div class="">
                                            <small>{{ $user->name }} {{ $user->lastname }}</small>
                                            <br>
                                            <small>{{ $user->cellphone }}</small>
                                        </div>
                                    </div>
                                    <div class="col-2"></div>
                                </div>
                            @endforeach
                        </div>
                        <hr>
                        @if (isset($userWined))
                            <div class="row align-items-center">
                                <div class="col-2"></div>
                                <div class="col-8 text-center">
                                    <strong>Usuario ganador</strong>
                                    <br>
                                    <div class="">
                                        <small>{{ $userWined->name }} {{ $userWined->lastname }}</small>
                                        <br>
                                        <small>{{ $userWined->cellphone }}</small>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        @endif
                        <form action="{{ route('spin.roulette') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success">Girar la ruleta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
