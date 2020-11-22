@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="colum">
        <div style="background-color:#F0B8B8; margin: 70px 0px 10px; padding: 60px;">
        <h1>Datos del Paciente</h1>
        <br>
        <h4>Nombre: {{ $paciente->nombre }}</h4>
        <h4>Apellido: {{ $paciente->apellido}}</h4>
        <h4>DNI: {{ $paciente->dni}}</h4>
        <h4>Direccion: {{ $paciente->direccion}}</h4>
        <h4>Obra Social: {{ $paciente->obra_social}}</h4>
        <h4>Fecha De Nacimiento: {{ $paciente->fecha_nacimiento}}</h4>
        <h4>Telefono: {{ $paciente->telefono}}</h4>
        <h4>Email: {{ $paciente->mail}}</h4>
        <br>
        <a class="btn btn-primary" href="{{ url()->previous() }}">
          Atras
        </a>
        </div> 
    </div>
        <div class="column" style="background-color:#96D1CD; margin: 70px 0px 10px; padding: 60px;">
            <h2>Evolucion</h2>
            <div class="form-group" style="margin: 70px 0px 10px; padding: 60px;">
                <input type="string" placeholder="Describa la evolucion del paciente" style=" padding: 80px;" class="form-control" id="evolucion" name="evolucion" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
        
    <div class="col-sm">
    </div>
  </div>
</div>

@endsection