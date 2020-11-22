@include('layout')
@include('footer')
@include('navbarAdmin')


<div class="container">
    <h1>Detalle Sistema</h1>
    <h4>id: {{ $sistema->id }}</h4>
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