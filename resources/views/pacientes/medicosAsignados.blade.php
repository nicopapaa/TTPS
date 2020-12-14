@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="colum">
        <div style="background-color:#F0B8B8; margin: 70px 0px 10px; padding:30px; width:1100px; height:500px;">
        <h6>Medicos asiganados</h6>
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

                <h6>Asiganar nuevo médico</h6>
                <form class="form-inline" action="/asignarMedicos" method="post">
                    @csrf
                        <div class="form-row align-items-center">
                            <div class="col-auto my-1">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="id_medico">
                                <option selected>Seleccionar</option>
                                @foreach($user as $users)
                                    <option value="{{$users->id}}">{{$users->name }} {{ $users->apellido}} </option>
                                @endforeach
                            </select>
                        </div>
                    <input type="text" class="form-control mr-sm-2" value="{{ $paciente }}" id="inlineFormInputName2" name="id_paciente" hidden="true">
                    <button type="submit" class="btn btn-primary my-1">Asignar</button>
                </form>
              </div>
            </div>
          </div>
        </div>

    </div>
    <a class="btn btn-primary" href="{{ url()->previous() }}">
          Atras
        </a>
    <div class="col-sm">
    </div>
  </div>
</div>
 @endsection
