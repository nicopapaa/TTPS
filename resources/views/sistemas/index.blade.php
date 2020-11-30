@extends('layouts.app')
@section('content')
<h4>Sistemas</h4>
<table class="table table-bordered" style="background-color:#FFFFFF; padding:20px;">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Camas totales</th>
            <th scope="col">Camas usadas</th>
            <th scope="col">&nbsp;</th>
        </tr>
        @foreach($sistema as $sistemas)
        <tr>
            <td>{{ $sistemas->id }}</td>
            <td>{{ $sistemas->nombre }}</td>
            <td>{{ $sistemas->camas_totales }}</td>
            <td>{{ $sistemas->camas_usadas }}</td>
            <td>
                <a class="btn btn-primary" href="{{ url('/sistemas/show/'.$sistemas->id )}}" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        Ver datos
                </a>
            </td>
        </tr>
        @endforeach
  </table>
@endsection