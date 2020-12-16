@extends('layouts.app')
@section('content')

<script>

    function validar(){
        alert('hola');
        if(document.getElementsByName("oxigeno")[0].checked){
            document.getElementsByName("tipo_oxigeno")[0].disabled = false;
            document.getElementsByName("valor_oxigeno")[0].disabled = false;
            document.getElementsByName("pafi")[0].disabled = false;
            document.getElementsByName("prono")[0].disabled = false;
            document.getElementsByName("tos")[0].disabled = false;
            document.getElementsByName("disnea")[0].disabled = false;
            document.getElementsByName("estabilidad")[0].disabled = false;
        }
        else{
            document.getElementsByName("tipo_oxigeno")[0].disabled = true;
            document.getElementsByName("valor_oxigeno")[0].disabled = true;
            document.getElementsByName("pafi")[0].disabled = true;
            document.getElementsByName("valor_pafi")[0].disabled = true;
            document.getElementsByName("prono")[0].disabled = true;
            document.getElementsByName("tos")[0].disabled = true;
            document.getElementsByName("disnea")[0].disabled = true;
            document.getElementsByName("estabilidad")[0].disabled = true;
        }
    }

    function validar_parte_cinco(){
        if(document.getElementsByName("tromboprofilaxis")[0].checked){
            document.getElementsByName("valor_tromboprofilaxis")[0].disabled = false;
        }
        else{
            document.getElementsByName("valor_tromboprofilaxis")[0].disabled = true;
        }

        if(document.getElementsByName("dialisis")[0].checked){
            document.getElementsByName("valor_dialisis")[0].disabled = false;
        }
        else{
            document.getElementsByName("valor_dialisis")[0].disabled = true;
        }

        if(document.getElementsByName("gastrica")[0].checked){
            document.getElementsByName("valor_gastrica")[0].disabled = false;
        }
        else{
            document.getElementsByName("valor_gastrica")[0].disabled = true;
        }

        if(document.getElementsByName("dexamentasona")[0].checked){
            document.getElementsByName("valor_dexamentasona")[0].disabled = false;
        }
        else{
            document.getElementsByName("valor_dexamentasona")[0].disabled = true;
        }
    }

</script>
<form method="post" action="/cargarEvolucion">
@csrf
<h3>Evolución del paciente</h3>
<div name="form" style="margin:50px; background-color:white; padding:30px;">
    <h5 style="text-align:center;"><B>SIGNOS VITALES</B></h5>
    <input hidden="true" value="{{$paciente}}" name="id_paciente" id="id_paciente">
    <input hidden="true" value="{{Auth::user()->id}}" name="id_medico" id="id_medico">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Temperatura</label>
            <input type="number" class="form-control" id="temperatura" name="temperatura">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">TA sistolica</label>
            <input type="number" class="form-control" id="sistolica" name="sistolica">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">TA distolica</label>
            <input type="number" class="form-control" id="distolica" name="distolica">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Frecuencia cardiaca</label>
            <input type="number" class="form-control" id="frecuencia_cardiaca" name="frecuencia_cardiaca">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Frecuencia respiratoria</label>
            <input type="number" class="form-control" id="frecuencia_respiratoria" name="frecuencia_respiratoria">
        </div>
    </div>
</div>
<div name="form" style="margin:50px; background-color:white; padding:30px;" >
    <h5 style="text-align:center;"><B>SISTEMA RESPIRATORIO</B></h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputState">Mecanica respiratoria</label>
            <select id="inputState" class="form-control" name="mecanica" id="mecanica">
                <option selected>Selecionar</option>
                <option value="1">Buena</option>
                <option value="2">Regular</option>
                <option value="3">Mala</option>
            </select>
        </div>
    </div>
    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="oxigeno" name="oxigeno" onchange="javascript:validar();">
        <label class="custom-control-label" for="oxigeno">Requiere oxigeno</label>
    </div>
    <br>


    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputState">Tipo oxigeno</label>
            <select id="inputState" class="form-control" id="tipo_oxigeno" name="tipo_oxigeno" disabled="true">
                <option selected>Selecionar</option>
                <option>Canula nasal de oxigeno</option>
                <option>Mascara con reservorio</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">Valor</label>
            <input type="number" class="form-control" id="valor_oxigeno" name="valor_oxigeno" disabled="true">
        </div>
    </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="pafi" name="pafi" disabled="true">
            <label class="custom-control-label" for="pafi">Pafi</label>
        </div>
    </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Valor pafi</label>
            <input type="number" class="form-control" id="valor_pafi" name="valor_pafi" disabled="true">
        </div>


    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="prono" name="prono" disabled="true">
            <label class="custom-control-label" for="prono">Prono</label>
        </div>
    </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="tos" name="tos" disabled="true">
            <label class="custom-control-label" for="tos">Tos</label>
        </div>
    </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="disnea" name="disnea" disabled="true">
            <label class="custom-control-label" for="disnea">Disnea</label>
        </div>
    </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="estabilidad" name="estabilidad" disabled="true">
            <label class="custom-control-label" for="estabilidad">Estabilidad/Desaparicion de sintomas</label>
        </div>
    </div>
</div>

<div name="form" style="margin:50px; background-color:white; padding:30px;">
<h5 style="text-align:center;"><B>OTROS SINTOMAS</B></h5>
    <div class="form-row">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="somnolencia" name="somnolencia" value='1'>
                <label class="custom-control-label" for="somnolencia">Somnolencia</label>
            </div>
        </div>
        <div class="form-row">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="anosmia" name="anosmia">
                <label class="custom-control-label" for="anosmia">Anosmia</label>
            </div>
        </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="disgeusia" name="disgeusia">
            <label class="custom-control-label" for="disgeusia">Disgeusia</label>
        </div>
    </div>
</div>

<div name="form" style="margin:50px; background-color:white; padding:30px;">
<h5 style="text-align:center;"><B>ESTUDIOS EN EL DIA DE HOY</B></h5>
    <div class="form-row">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="rxtx" name="rxtx">
                <label class="custom-control-label" for="rxtx">RxTx</label>
            </div>
        </div>
        <div class="form-row">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="tac" name="tac">
                <label class="custom-control-label" for="tac">Tac de torax</label>
            </div>
        </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="ecg" name="ecg">
            <label class="custom-control-label" for="ecg">ECG</label>
        </div>
    </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="prc" name="prc">
            <label class="custom-control-label" for="prc">PCR COVID</label>
        </div>
    </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="laboratorio" name="laboratorio">
            <label class="custom-control-label" for="laboratorio">Laboratorio</label>
        </div>
    </div>
</div>

<div name="form" style="margin:50px; background-color:white; padding:30px;">
    <h5 style="text-align:center;"><B>TRATAMIENTOS ACTUALES</B></h5>
    <h6>Alimentación</h6>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputState">Tipo de alimentación</label>
            <select id="inputState" class="form-control" name="tipo_alimentacion" id="tipo_alimentacion">
                <option value="0" selected>Selecionar</option>
                <option value="1">Oral</option>
                <option value="2">Enteral</option>
                <option value="3">Parenteral</option>
            </select>
        </div>
    </div>
    <div class="custom-control">
        <label for="inputPassword4">Nota alimentaria</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" id="nota_alimentacion" name="nota_alimentacion"></textarea>
    </div>
    <br>

    <h6>Antibiotico</h6>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputPassword4">Farmaco</label>
            <input type="number" class="form-control" id="farmaco" name="farmaco">
        </div>
        <div class="form-group col-md-3">
            <label for="inputPassword4">Dosis</label>
            <input type="number" class="form-control" id="dosis" name="dosis">
        </div>
        <div class="form-group col-md-3">
            <label for="inputPassword4">Numero de dias</label>
            <input type="number" class="form-control" id="dias" name="dias">
        </div>
    </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="tromboprofilaxis" name="tromboprofilaxis" onchange="javascript:validar_parte_cinco();">
            <label class="custom-control-label" for="tromboprofilaxis">Tromboprofilaxis</label>
        </div>
    </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Valor Tromboprofilaxis</label>
            <input type="number" class="form-control" id="valor_tromboprofilaxis" name="valor_tromboprofilaxis" disabled="true">
        </div>

        <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="dialisis" name="dialisis" onchange="javascript:validar_parte_cinco();">
            <label class="custom-control-label" for="dialisis">Dialisis</label>
        </div>
    </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Valor dialisis</label>
            <input type="number" class="form-control" id="inputPassword4" name="valor_dialisis" disabled="true">
        </div>

        <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="gastrica" name="gastrica" onchange="javascript:validar_parte_cinco();">
            <label class="custom-control-label" for="gastrica">Proteccion gastrica</label>
        </div>
    </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Valor protección gastrica</label>
            <input type="number" class="form-control" id="inputPassword4" name="valor_gastrica" disabled="true">
        </div>

        <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="dexamentasona" name="dexamentasona" onchange="javascript:validar_parte_cinco();">
            <label class="custom-control-label" for="dexamentasona">Dexamentasona</label>
        </div>
    </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Valor Dexamentasona</label>
            <input type="number" class="form-control" id="inputPassword4" name="valor_dexamentasona" disabled="true">
        </div>
</div>

<div name="form" style="margin:50px; background-color:white; padding:30px;" >
    <h5 style="text-align:center;"><B>OBSERVACIONES</B></h5>
    <div class="form-row">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="observaciones"></textarea>
    </div>
</div>
<button type="submit" class="btn btn-primary">Cargar evolución</button>
</form>

@endsection
