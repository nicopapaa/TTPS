@extends('layouts.app')

@section('content')

<h4>Listado de pacientes</h4>

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
                <a class="btn btn-primary" href="{{ route('paciente.details',$pacientes) }}" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        Ver datos
                </a>
            </td>
            <td>
                <a class="btn btn-primary" href="{{ route('paciente.evolucion',$pacientes)}}" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        Hacer evolución          
                </a>
            </td>
            <td>
                <a class="btn btn-primary" href="{{ route('paciente.cambiar_sistema',$pacientes)}}" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        Cambiar de sistema
                </a>
            </td>
        </tr>
        @endforeach
  </table>


@endsection
