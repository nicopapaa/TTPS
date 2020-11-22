@include('layout')
@include('footer')
@include('navbarAdmin')

<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="colum">
        <div style="background-color:#F0B8B8; margin: 70px 0px 10px; padding: 60px;">
        <h1>Datos del Paciente</h1>
        <br>
        <h4>Nombre: {{ $paciente->nombre }}</h4>
        <h4>Apellido: {{ $paciente->apellido}}</h4>
        <h4>DNI: {{ $paciente->dni}}</h4>
        <h4>Direccion: {{ $paciente->direccion}}</h4>
        <h4>Obra Social: {{ $paciente->obra_social}}</h4>
        <h4>Fecha De Nacimiento: {{ $paciente->fecha_nacimiento}}</h4>
        <h4>Telefono: {{ $paciente->telefono}}</h4>
        <h4>Email: {{ $paciente->mail}}</h4>
        <h4>Nombre del Contacto: {{ $paciente->contacto_nombre}}</h4>
        <h4>Apellido del Contacto: {{ $paciente->contacto_apellido}}</h4>
        <h4>Parentesco del Contacto: {{ $paciente->contacto_parentesco}}</h4>
        <h4>Telefono del Contacto: {{ $paciente->contacto_telefono}}</h4>
        <h4>Antecendentes: {{ $paciente->antecedentes}}</h4>
        </div>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>