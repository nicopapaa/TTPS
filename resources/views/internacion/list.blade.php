@extends('layouts.app')
@section('content')

<h4>Listado de Internaciones</h4>

<table class="table table-bordered" style="background-color:#FFFFFF;">
        <tr>
            <th scope="col">Numero</th>
            <th scope="col">Nombre</th>
            <th scope="col">Camas Totales</th>
            <th scope="col">Camas Usadas</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        @foreach ($internaciones as $internacion)
        <tr>
            <td>{{$internacion->id}}</td>

            </td>
        </tr>
        @endforeach
  </table>


@endsection
