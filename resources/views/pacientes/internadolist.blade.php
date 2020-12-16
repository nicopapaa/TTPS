@extends('layouts.app')
@section('content')
<h4>Listado de pacientes internados</h4>
@if ($paciente == null)
    <div class="alert alert-secondary" role="alert" style="margin:30px; text-align:center;">
        No hay pacientes internados
    </div>
@else
<table class="table table-bordered" style="background-color:#FFFFFF;">
        <tr>
            <th scope="col">N° de paciente</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">DNI</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        @foreach ($paciente as $pacientes)
        <tr>
            <td>{{$pacientes->id}}</td>
            <td>{{$pacientes->nombre}}</td>
            <td>{{$pacientes->apellido}}</td>
            <td>{{$pacientes->dni}}</td>
            <td>
                <a class="btn btn-primary" href="{{ url('/pacienteInternado/'.$pacientes->id)}}" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        Ver datos
                </a>
            </td>
            <td>
                <a class="btn btn-primary" href="{{ url('/evolucion/'.$pacientes->id)}}" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        Hacer evolución
                </a>
            </td>
            <td>
                <a class="btn btn-primary" href="{{ url('/cambiarSistema/'.$pacientes->id)}}" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        Cambiar de sistema
                </a>
            </td>
            <td>
                <a class="btn btn-primary" href="{{ url('/darDeAltaPacienteInternado/'.$pacientes->id)}}" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        Dar de Alta
                </a>
            </td>
            <td>
                <a class="btn btn-primary" href="{{ url('/darDeObitoPacienteInternado/'.$pacientes->id)}}" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        Dar por Obio
                </a>
            </td>
        </tr>
        @endforeach
  </table>

@endif
@endsection
