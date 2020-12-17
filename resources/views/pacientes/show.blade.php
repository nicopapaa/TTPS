@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
        <h6>Paciente encontrado</h6>
    </div>
    <div class="col">
        <h6>Nueva internación</h6>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <div class="table-responsive">
  <table class="table table-bordered" style="background-color:#FFFFFF;">
        <tr>
            <th scope="col">Nombre</th>
            <td>{{$paciente->nombre}}</td>
        </tr>
        <tr>
            <th scope="row">Apellido</th>
            <td>{{$paciente->apellido}}</td>
        </tr>
        <tr>
            <th scope="row">DNI</th>
            <td>{{$paciente->dni}}</td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td>{{$paciente->mail}}</td>
        </tr>
            <th scope="row">Obra social</th>
            <td>{{$paciente->obra_social}}</td>
        </tr>
            <th scope="row">Teléfono</th>
            <td>{{$paciente->telefono}}</td>
        </tr>
  </table>
</div>
    </div>
    <div class="col">
        <form action="/altaInternacion" method="post">
        @csrf
            <div class="form-group col-md-10">
                <label for="inputEmail4">Fecha inicio de sintomas</label>
                <input type="date" class="form-control" id="inputEmail4" name="f_inicio_sintomas" id="f_inicio_sintomas" required>
            </div>
            <div class="form-group col-md-10">
                <label for="inputEmail4">Fecha de diagnostico</label>
                <input type="date" class="form-control" id="inputEmail4" name="f_diagnostico" id="f_diagnostico" required>
            </div>
            <div class="form-group col-md-10">
                <input type="date" class="form-control" hidden id="inputEmail4" value="<?php echo date("Y-m-d");?>" name="f_internacion" id="f_internacion">
                <input type="string" class="form-control" hidden id="inputEmail4" value="{{ $paciente->id }}" name="id_paciente" id="id_paciente">
            </div>
            <div class="col">
                <h6>Descripción</h6>
                <div class="form-group">
                    <textarea required class="form-control" id="exampleFormControlTextarea1" rows="10" name="descripcion" id="descripcion" placeholder="Complete con información"></textarea>
                </div>
                <a><button type="submit" class="btn btn-primary" style="background-color:#F0B8B8; border-color:#F0B8B8;">Dar alta internación</button></a>
            </div>
            </form>
    </div>
    <div class="col">
        <img src="https://institutoulton.com.ar/wp-content/uploads/2020/04/doctor-barbijo.png" width="70%">

    </div>
  </div>
</div>


@endsection
