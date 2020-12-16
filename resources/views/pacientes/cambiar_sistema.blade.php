@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="colum">
        <div style="background-color:#F0B8B8; margin: 70px 0px 10px; padding: 60px;">
        <h4>El paciente  {{ $paciente->nombre }} {{ $paciente->apellido}} se encuentra en {{ $sistema_actual[0]->nombre }}</h1>
        <div>
            <form action="/cambiarSistema" method="post">
            @csrf
                <label class="radio-inline">
                    <input type="radio" name="id_sistema" required value="{{ $sistema[0]->id }}">{{ $sistema[0]->nombre }}</label>
                    <br>
                <label class="radio-inline">
                    <input type="radio" name="id_sistema" required value="{{ $sistema[1]->id }}">{{ $sistema[1]->nombre }}</label>
                    <br>
                <label class="radio-inline">
                    <input type="radio" name="id_sistema" required value="{{ $sistema[2]->id }}">{{ $sistema[2]->nombre }}</label>
                    <br>
                <label class="radio-inline">
                    <input type="radio" name="id_sistema" required value="{{ $sistema[3]->id }}">{{ $sistema[3]->nombre }}</label>
                </div>
                <br>
                <input value="{{$paciente->id}}" hidden="true" name="id_user">
                <input value="{{$sistema_actual[0]->id}}" hidden="true" name="sistema_actual">
                <button class="btn btn-primary" type="submit" required style="background-color:#B0FDDD; border-color:#B0FDDD; color:black;" >
                Cambiar de Sistema
                </button>
            </form>
        </div>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
@endsection
