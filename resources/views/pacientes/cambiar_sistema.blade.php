@include('layout')
@include('footer')
@include('navbarAdmin')

<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="colum">
        <div style="background-color:#F0B8B8; margin: 70px 0px 10px; padding: 60px;">
        <h1>El paicente  {{ $paciente->nombre }} {{ $paciente->apellido}} se encuentra {{ $sistema_actual[0]->nombre }}</h1>
        <div>
          <label class="radio-inline">
            <input type="radio" name="movimiento" value="nuevo_sistema">{{ $sistema[0]->nombre }}</label>
          <label class="radio-inline">
            <input type="radio" name="movimiento" value="nuevo_sistema">{{ $sistema[1]->nombre }}</label>
          <label class="radio-inline">
            <input type="radio" name="movimiento" value="nuevo_sistema">{{ $sistema[2]->nombre }}</label>
          <label class="radio-inline">
            <input type="radio" name="movimiento" value="nuevo_sistema">{{ $sistema[3]->nombre }}</label>
        </div>
        <br>
        <a class="btn btn-primary" href="{{ url()->previous() }}">
          Atras
        </a>
        <a class="btn btn-primary" href="" style="background-color:#B0FDDD; border-color:#B0FDDD; color:black;" >
          Cambiar de Sistema
        </a>
        </div> 
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>