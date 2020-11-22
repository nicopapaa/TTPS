@include('layout')
@include('footer')
@include('navbarAdmin')

<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="colum">
        <div style="background-color:#F0B8B8; margin: 70px 0px 10px; padding: 60px;">
        <h1>El paicente  {{ $paciente->nombre }} {{ $paciente->apellido}} se encuentra "en un sistema"</h1>
        <br>
        <br>
        <a class="btn btn-primary" href="{{ url()->previous() }}">
          Atras
        </a>
        </div> 
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>