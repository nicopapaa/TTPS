@extends('layouts.app')
@section('content')
<h6>Medicos asiganados</h6>

<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="colum">
        <div style="background-color:#F0B8B8; margin: 70px 0px 10px; padding:30px; width:1100px; height:550px;">
          <div class="container">
            <div class="row">
              <div class="col-sm">
                <table class="table table-bordered" style="background-color:#FFFFFF;">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Email</th>
                    </tr>
                    @foreach($medico as $medicos)
                    <tr>
                        <td>{{$medicos->name}}</td>
                        <td>{{$medicos->apellido}}</td>
                        <td>{{$medicos->telefono}}</td>
                        <td>{{$medicos->email}}</td>
                    </tr>
                    @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
        <a class="btn btn-primary" href="{{ url()->previous() }}">
          Atras
        </a>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
 @endsection
