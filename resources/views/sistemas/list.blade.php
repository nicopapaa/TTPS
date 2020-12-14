@extends('layouts.app')

@section('content')

<h4>Listado de Sistemas</h4>

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
        @foreach ($sistemas as $sistema)
        <tr>
            <td>{{$sistema->id}}</td>
            <td>{{$sistema->nombre}}</td>
            <td>{{$sistema->camas_totales}}</td>
            <td>{{$sistema->camas_usadas}}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('sistema.show',$sistema) }}" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        Ver datos
                </a>
            </td>
            <td>
                <a>
                    <button type="reset" class="btn btn-primary" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        NO HACE NADA
                    </button>
                </a>
            </td>
            <td>
                <a>
                    <button type="reset" class="btn btn-primary" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        NO HACE NADA
                    </button>
                </a>
            </td>
        </tr>
        @endforeach
  </table>


@endsection
