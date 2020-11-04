@include('layout')
@include('footer')
@include('navbarAdmin')

<div class="container">
  <div class="row">
    <div class="col">
        <h6>Paciente encontrado</h6>
    </div>
    <div class="col">
        <h6>Nueva internación</h6>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <div class="table-responsive">
  <table class="table table-bordered" style="background-color:#FFFFFF;">
        <tr>
            <th scope="col">Nombre</th>
            <td>{{$paciente->nombre}}</td>
        </tr>
        <tr>
            <th scope="row">Apellido</th>
            <td>{{$paciente->apellido}}</td>
        </tr>
        <tr>
            <th scope="row">DNI</th>
            <td>{{$paciente->dni}}</td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td>{{$paciente->mail}}</td>
        </tr>
            <th scope="row">Obra social</th>
            <td>{{$paciente->obra_social}}</td>
        </tr>
            <th scope="row">Teléfono</th>
            <td>{{$paciente->telefono}}</td>
        </tr>
  </table>
</div>
    </div>
    <div class="col">
        <form>
            <div class="form-group col-md-10">
                <label for="inputEmail4">Fecha inicio de sintomas</label>
                <input type="date" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-10">
                <label for="inputEmail4">Fecha de diagnostico</label>
                <input type="date" class="form-control" id="inputEmail4">
            </div>
            <div class="col">
                <h6>Descripción</h6>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Complete con información"></textarea>
                </div>
                <a><button type="reset" class="btn btn-primary" style="background-color:#F0B8B8; border-color:#F0B8B8;">Dar alta internación</button></a>
            </div>
    </div>
    <div class="col">
        <img src="https://institutoulton.com.ar/wp-content/uploads/2020/04/doctor-barbijo.png" width="70%">
            
    </div>
  </div>
</div>

    </form>
