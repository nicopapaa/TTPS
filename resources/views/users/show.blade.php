@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="colum">
        <div style="background-color:#F0B8B8; margin: 70px 0px 10px; padding:30px; width:800px; height:400px;">
          <div class="container">
            <div class="row">
              <div class="col-sm">
                <h3>Mi perfil</h1>
                <h6>Nombre: {{ $user->name }} </h6>
                <h6>Apellido: {{ $user->apellido }} </h6>
                <h6>DNI: {{ $user->dni }} </h6>
                <h6>Email: {{ $user->email }} </h6>
                <h6>Teléfono: {{ $user->telefono }} </h6>
                <h6>Rol: @foreach($user->getRoleNames() as $v)
                <label class="badge badge-success">{{ $v }}</label>
                @endforeach </h6>
              </div>
              <div class="col-sm">
              <img style="width:250px; height:300px; " src="https://us.123rf.com/450wm/alexutemov/alexutemov1604/alexutemov160400060/54585015-muchacho-m%C3%A9dico-personaje-de-dibujos-animados-y-de-juego-el-doctor-del-ni%C3%B1o-doctor-con-ni%C3%B1o-peque%C3%B1o-persona-est.jpg?ver=6">
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
