
@extends('layouts.app')

@section('content')

@if(count($paciente) == 0)
    <div class="alert alert-secondary" role="alert" style="margin:30px; text-align:center;">
        No tiene alertas
    </div>
@else
    @foreach ( $paciente as $pacientes)
        <div class="card"style="margin:50px;">
            <div class="card-body">
            <a href="/leer/{{$pacientes->id}}"><button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></a>
            <h5 class="card-title">Paciente - {{ $pacientes->nombre }} {{ $pacientes->apellido}}</h5>
            <p class="card-text">{{ $pacientes->comentario }}</p>
            <a href="/historial/{{ $pacientes->id_paciente }}" class="card-link">Ver historial del paciente</a>
            </div>
        </div>
        @endforeach
@endif
@endsection
