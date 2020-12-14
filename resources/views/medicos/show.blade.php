@extends('layouts.app')
@section('content')
<h4>Listado de medicos</h4>
<table class="table table-bordered" style="background-color:#FFFFFF;">
        <tr>
            <th scope="col">N° de medico</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">DNI</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        @foreach ($medicos as $medico)
        <tr>
            <td>{{$medico->id}}</td>
            <td>{{$medico->name}}</td>
            <td>{{$medico->apellido}}</td>
            <td>{{$medico->dni}}</td>
            <td>
                <a class="btn btn-primary" href="" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        Ver datos
                </a>
            </td>
            <td>
                <a class="btn btn-primary" href="" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        Cambiar de sistema
                </a>
            </td>
        </tr>
        @endforeach
  </table>
@endsection
