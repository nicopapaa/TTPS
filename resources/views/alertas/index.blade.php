
@extends('layouts.app')

@section('content')


@if(count($alerta) == 0)
    <div class="alert alert-secondary" role="alert" style="margin:30px; text-align:center;">
        No tiene alertas
    </div>
@else
    @foreach ( $alerta as $alertas)
        <div class="card"style="margin:50px;">
            <div class="card-body">
            <a href="/leer/{{$alertas->id}}"><button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></a>
            <h5 class="card-title">Paciente - {{ $alertas->id_paciente }}</h5>
            <p class="card-text">{{ $alertas->comentario }}</p>
            <a href="/historial/{{ $alertas->id_paciente }}" class="card-link">Ver historial del paciente</a>
            </div>
        </div>
        @endforeach
@endif
@endsection
