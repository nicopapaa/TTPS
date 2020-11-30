@include('layouts.app')
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="colum">
        <div style="background-color:#F0B8B8; margin: 70px 0px 10px; padding:30px; width:1100px; height:550px;">
          <div class="container">
            <div class="row">
              <div class="col-sm">
                <h3>Datos paciente</h1>
                <h5>Nombre: {{ $paciente->nombre }}</h4>
                <h5>Apellido: {{ $paciente->apellido}}</h4>
                <h5>DNI: {{ $paciente->dni}}</h4>
                <h5>Direccion: {{ $paciente->direccion}}</h4>
                <h5>Obra Social: {{ $paciente->obra_social}}</h4>
                <h5>Fecha De Nacimiento: {{ $paciente->fecha_nacimiento}}</h4>
                <h5>Telefono: {{ $paciente->telefono}}</h4>
                <h5>Email: {{ $paciente->mail}}</h4>
                <h5>Nombre del Contacto: {{ $paciente->contacto_nombre}}</h4>
                <h5>Apellido del Contacto: {{ $paciente->contacto_apellido}}</h4>
                <h5>Parentesco del Contacto: {{ $paciente->contacto_parentesco}}</h4>
                <h5>Telefono del Contacto: {{ $paciente->contacto_telefono}}</h4>
                <h5>Antecendentes: {{ $paciente->antecedentes}}</h4>
              </div>
              <div class="col-sm">
              <img src="{{ asset('img/paciente.PNG') }}" style="width:400px; height:400px;">
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


