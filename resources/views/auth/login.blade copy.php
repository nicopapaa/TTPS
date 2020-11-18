@include('layout')
@include('footer')

<form class="was-validated" name="form" method="post" action="{{ route('login') }}">
@csrf
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
        <div style="background-color:#F0B8B8; margin: 70px 0px 10px; padding: 60px;">
            <h4>Iniciar sesión</h4>
            <input type="email" class="form-control is-invalid" id="validationServer01" aria-describedby="validationServer03Feedback" placeholder="Email" required>
            <input type="password" class="form-control is-invalid" id="validationServer01" aria-describedby="validationServer03Feedback" placeholder="Contraseña" required>
            <br>
            <button type="reset" class="btn btn-primary my-1">Cancelar</button>
            <button type="submit" class="btn btn-primary my-1">Ingresar</button>
        </div>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
</form>


<style>
    elemento {
    background-color: red;
    padding: 60px;
    margin: ;
    width: 100%;
    height: 100%;
    margin: 70px 0px 10px;
}
</style>
