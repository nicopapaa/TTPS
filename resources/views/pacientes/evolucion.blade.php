@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color:#96D1CD; margin: 70px 0px 10px; padding: 60px;">
            <h2>Evolucion</h2>
            <div class="form-group">
                <p>Describa la evolucion del paciente:</p>
                <!-- <textarea name="textarea" href="{{ asset('css/textarea.css') }}"> </textarea> -->
                <textarea name="textarea" id="evolucion" name="evolucion" rows="10" cols="50" required style="width:100%" ></textarea>
                <!-- <input type="string" class="form-control" id="evolucion" name="evolucion" placeholder="Describa la evolucion del paciente" style=" height: 200px; margin: 70px 0px 60px; padding-left: 10px;" required> -->
            </div>
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
        
    <div class="col-sm">
    </div>
  </div>
</div>

@endsection