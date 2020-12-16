@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="colum">
        <div style="background-color:#F0B8B8; margin: 70px 0px 10px; padding: 60px; width:1100px;">
        @foreach($sistema as $s)
        <h3>Sistema:  {{ $s->nombre }} </h3>
        <br>
        <h6>Camas Usadas: {{ $s->camas_usadas }}</h6>
        <h6>Camas Libres: {{ $s->camas_totales -  $s->camas_usadas}}</h6>
        <h6>Camas Totales: {{ $s->camas_totales }}</h6>
        <h6>Camas ocupadas: {{ $s->camas_usadas * 100 / $s->camas_totales }} % </h6>
        <form class="form-inline" action="/sistemas/update_camas" method="post">
        @csrf
            <input type="text" class="form-control mr-sm-2" value="{{ $s->camas_totales }}" id="inlineFormInputName2" name="camas_totales">
            <input type="text" class="form-control mr-sm-2" value="{{ $s->id }}" id="inlineFormInputName2" name="sistema" hidden="true">
            <button type="submit" class="btn btn-primary my-1">Actualizar camas</button>
        </form>
        <br>
        <p>
        <button class="btn btn-primary" style="background-color:#B0FDDD; border-color:#B0FDDD; color:black;" type="button" data-toggle="collapse" data-target="#jefe" aria-expanded="false" aria-controls="collapseExample">
            Jefe
        </button>
        <button class="btn btn-primary" style="background-color:#B0FDDD; border-color:#B0FDDD; color:black;" type="button" data-toggle="collapse" data-target="#paciente" aria-expanded="false" aria-controls="collapseExample">
            Pacientes
        </button>
        <button class="btn btn-primary" style="background-color:#B0FDDD; border-color:#B0FDDD; color:black;" type="button" data-toggle="collapse" data-target="#medicos" aria-expanded="false" aria-controls="collapseExample">
            Medicos
        </button>
        </p>
        <div class="collapse" id="paciente">
        <h6>Pacientes</h6>
        @if($paciente == 0)
                        No tengo paciente

                    @else
            <div class="card card-body" style="width:1000px;">
                <table class="table table-bordered" style="background-color:#FFFFFF;">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Obra social</th>
                        <th scope="col">&nbsp;</th>
                    </tr>

                    @foreach($paciente as $p)
                    <tr>
                        <td>{{$p->nombre}}</td>
                        <td>{{$p->apellido}}</td>
                        <td>{{$p->dni}}</td>
                        <td>{{$p->telefono}}</td>
                        <td>{{$p->mail}}</td>
                        <td>{{$p->obra_social}}</td>
                        <td>{{$p->direccion}}</td>
                        <td>
                            <a href="{{ url('/medicosAsignados/'.$p->id) }}"><button class="btn btn-primary" style="background-color:#B0FDDD; border-color:#B0FDDD; color:black;" type="button" data-toggle="collapse" data-target="#medicosasignados" aria-expanded="false" aria-controls="collapseExample">
                                Medicos asignados
                            </button></a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </table>
            </div>
        </div>

        <div class="collapse" id="medicos">
        <h6>Médicos</h6>
            <div class="card card-body">
                <table class="table table-bordered" style="background-color:#FFFFFF;">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Email</th>
                    </tr>
                    @foreach($usuario as $v)
                    <tr>
                        <td>{{$v->name}}</td>
                        <td>{{$v->apellido}}</td>
                        <td>{{$v->dni}}</td>
                        <td>{{$v->telefono}}</td>
                        <td>{{$v->email}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div class="collapse" id="jefe">
        <h6>Jefe</h6>
            <div class="card card-body">
                <table class="table table-bordered" style="background-color:#FFFFFF;">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Email</th>
                    </tr>
                    @foreach($jefe as $v)
                    <tr>
                        <td>{{$v->name}}</td>
                        <td>{{$v->apellido}}</td>
                        <td>{{$v->dni}}</td>
                        <td>{{$v->telefono}}</td>
                        <td>{{$v->email}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        </div>

        </div>
        <br>
        <a class="btn btn-primary" href="{{ url()->previous() }}">
          Atras
        </a>
        </div>
        @endforeach
    <div class="col-sm">
    </div>
  </div>
</div>
@endsection
