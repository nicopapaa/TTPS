@include('layout')
@include('footer')
@include('navbarAdmin')



<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="colum">
        <div style="background-color:#F0B8B8; margin: 70px 0px 10px; padding: 60px;">
        <h1>Detalle Sistema</h1>
        <br>
        <h4>Nombre: {{ $sistema->nombre }}</h4>
        <h4>Camas Usadas: {{ $sistema->camas_usadas }}</h4>
        <a class="btn btn-primary" href="" style="background-color:#000000; border-color:#000000;">
            Jefes de Sistma Asignados
        </a>
        <a class="btn btn-primary" href="" style="background-color:#000000; border-color:#000000;">
            Pacientes Asignados
        </a>
        <a class="btn btn-primary" href="" style="background-color:#000000; border-color:#000000;">
            Medicos Asignados
        </a>
        </div>
        <br>
        <a class="btn btn-primary" href="{{ url()->previous() }}">
          Atras
        </a>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>