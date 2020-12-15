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
    }

</script>
<form method="post" action="/cargarEvolucion">
@csrf
<h3>Evolución del paciente</h3>
<div name="form" style="margin:50px; background-color:white; padding:30px;">
    <h5 style="text-align:center;"><B>SIGNOS VITALES</B></h5>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Temperatura</label>
            <input type="number" class="form-control" id="inputEmail4" name="temperatura">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">TA sistolica</label>
            <input type="number" class="form-control" id="inputPassword4" name="sistolica">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">TA distolica</label>
            <input type="number" class="form-control" id="inputPassword4" name="distolica">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Frecuencia cardiaca</label>
            <input type="number" class="form-control" id="inputPassword4" name="frecuencia_cardiaca">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Frecuencia respiratoria</label>
            <input type="number" class="form-control" id="inputPassword4" name="frecuencia_respiratoria">
        </div>
    </div>
</div>
<div name="form" style="margin:50px; background-color:white; padding:30px;" >
    <h5 style="text-align:center;"><B>SISTEMA RESPIRATORIO</B></h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputState">Mecanica respiratoria</label>
            <select id="inputState" class="form-control" name="mecanica">
                <option selected>Selecionar</option>
                <option value="1">Buena</option>
                <option value="2">Regular</option>
                <option value="3">Mala</option>
            </select>
        </div>
    </div>
    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="customSwitch1" onchange="javascript:validar();" name="oxigeno">
        <label class="custom-control-label" for="customSwitch1">Requiere oxigeno</label>
    </div>
    <br>


    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputState">Tipo oxigeno</label>
            <select id="inputState" class="form-control" name="tipo_oxigeno" disabled="true">
                <option selected>Selecionar</option>
                <option>Canula nasal de oxigeno</option>
                <option>Mascara con reservorio</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">Valor</label>
            <input type="number" class="form-control" id="inputPassword4" name="valor_oxigeno" disabled="true">
        </div>
    </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1" name="pafi" disabled="true">
            <label class="custom-control-label" for="customSwitch1">Pafi</label>
        </div>
    </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Valor pafi</label>
            <input type="number" class="form-control" id="inputPassword4" name="valor_pafi" disabled="true">
        </div>


    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1" name="prono" disabled="true">
            <label class="custom-control-label" for="customSwitch1">Prono</label>
        </div>
    </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1" name="tos" disabled="true">
            <label class="custom-control-label" for="customSwitch1">Tos</label>
        </div>
    </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1" name="disnea" disabled="true">
            <label class="custom-control-label" for="customSwitch1">Disnea</label>
        </div>
    </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1" name="estabilidad" disabled="true">
            <label class="custom-control-label" for="customSwitch1">Estabilidad/Desaparicion de sintomas</label>
        </div>
    </div>
</div>

<div name="form" style="margin:50px; background-color:white; padding:30px;">
<h5 style="text-align:center;"><B>OTROS SINTOMAS</B></h5>
    <div class="form-row">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="somnolencia" name="somnolencia">
                <label class="custom-control-label" for="customSwitch1">Somnolencia</label>
            </div>
        </div>
        <div class="form-row">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="anosmia" name="anosmia">
                <label class="custom-control-label" for="customSwitch1">Anosmia</label>
            </div>
        </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="disgeusia" name="disgeusia">
            <label class="custom-control-label" for="customSwitch1">Disgeusia</label>
        </div>
    </div>
</div>

<div name="form" style="margin:50px; background-color:white; padding:30px;">
<h5 style="text-align:center;"><B>ESTUDIOS EN EL DIA DE HOY</B></h5>
    <div class="form-row">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="somnolencia" name="rxtx">
                <label class="custom-control-label" for="customSwitch1">RxTx</label>
            </div>
        </div>
        <div class="form-row">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="anosmia" name="tac">
                <label class="custom-control-label" for="customSwitch1">Tac de torax</label>
            </div>
        </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="disgeusia" name="ecg">
            <label class="custom-control-label" for="customSwitch1">ECG</label>
        </div>
    </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="disgeusia" name="prc">
            <label class="custom-control-label" for="customSwitch1">PCR COVID</label>
        </div>
    </div>
    <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="disgeusia" name="laboratorio">
            <label class="custom-control-label" for="customSwitch1">Laboratorio</label>
        </div>
    </div>
</div>

<div name="form" style="margin:50px; background-color:white; padding:30px;">
    <h5 style="text-align:center;"><B>TRATAMIENTOS ACTUALES</B></h5>
    <h6>Alimentación</h6>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputState">Tipo de alimentación</label>
            <select id="inputState" class="form-control" name="tipo_alimentacio">
                <option selected>Selecionar</option>
                <option value="1">Oral</option>
                <option value="2">Enteral</option>
                <option value="3">Parenteral</option>
            </select>
        </div>
    </div>
    <div class="custom-control">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nota_alimentacio"></textarea>
    </div>
    <br>

    <h6>Antibiotico</h6>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputPassword4">Farmaco</label>
            <input type="number" class="form-control" id="inputPassword4" name="farmaco" disabled="true">
        </div>
        <div class="form-group col-md-3">
            <label for="inputPassword4">Dosis</label>
            <input type="number" class="form-control" id="inputPassword4" name="dosis" disabled="true">
        </div>
        <div class="form-group col-md-3">
            <label for="inputPassword4">Numero de dias</label>
            <input type="number" class="form-control" id="inputPassword4" name="dias" disabled="true">
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
            <input type="checkbox" class="custom-control-input" id="customSwitch1" name="dialisis">
            <label class="custom-control-label" for="customSwitch1">Dialisis</label>
        </div>
    </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Valor dialisis</label>
            <input type="number" class="form-control" id="inputPassword4" name="valor_dialisis" disabled="true">
        </div>

        <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1" name="gastrica">
            <label class="custom-control-label" for="customSwitch1">Proteccion gastrica</label>
        </div>
    </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Valor protección gastrica</label>
            <input type="number" class="form-control" id="inputPassword4" name="valor_gastrica" disabled="true">
        </div>

        <div class="form-row">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1" name="pafi">
            <label class="custom-control-label" for="customSwitch1">Dexamentasona</label>
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
