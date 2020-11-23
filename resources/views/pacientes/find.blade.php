@extends('layouts.app')

<style>
.contenedor{
    height:400px;
    display:flex;
    justify-content:center;
    align-items:center;
}
</style>

@section('content')
<div class="contenedor">
    <form class="form-inline my-2 my-lg-0" action="{{url('/show')}}" method="POST">
        @csrf
        <div style = "margen-top: 90px;">
            <input aling ="center" class="form-control mr-sm-2" type="number" id="dni" name="dni" placeholder="Ingrese DNI" required>
        </div>
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
        
    </form>
</div>
@endsection
