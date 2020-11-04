@include('layout')
@include('footer')
@include('navbarAdmin')



<div class="container">
  <div class="row">
    <div class="col">
        <h6>Nuevo Paciente</h6>
    </div>
    <div class="col">
      <form action="{{url('/addPaciente')}}" method="post">
      @csrf
    </div>
  </div>
  <div class="row">
    <div class="col">
        <div class="form-group col-md-10">
            <label for="inputEmail4">Nombre</label>
            <input type="string" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="form-group col-md-10">
            <label for="inputEmail4">DNI</label>
            <input type="number" class="form-control" id="dni" name="dni" placeholder="DNI" required>
        </div>
        <div class="form-group col-md-10">
            <label for="inputEmail4">Teléfono</label>
            <input type="number" class="form-control" id="telefono" name="telefono"  placeholder="Teléfono" required>
        </div>
        <div class="form-group col-md-10">
            <label for="inputEmail4">Obra social</label>
            <input type="string" class="form-control" id="obra_social" name="obra_social"  placeholder="Obra social" required>
        </div>

        <h6>Contacto opcional</h6>
        <div class="form-group col-md-10">
            <label for="inputEmail4">Nombre</label>
            <input type="string" class="form-control" id="contacto_nombre" name="contacto_nombre"  placeholder="Nombre contacto opcional">
        </div>
        <div class="form-group col-md-10">
            <label for="inputEmail4">Teléfono</label>
            <input type="number" class="form-control" id="contacto_telefono" name="contacto_telefono"  placeholder="Teléfono contacto opcional">
        </div>
    </div>
    <div class="col">
        <div class="form-group col-md-10">
            <label for="inputEmail4">Apellido</label>
            <input type="string" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
        </div>
        <div class="form-group col-md-10">
            <label for="inputEmail4">Dirección</label>
            <input type="string" class="form-control" id="direccion" name="direccion" placeholder="Dirección" required>
        </div>
        <div class="form-group col-md-10">
            <label for="inputEmail4">Fecha nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>
        <div class="form-group col-md-10">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="Email" required>
        </div>
        <h6>&nbsp;&nbsp;&nbsp;&nbsp;</h6>
        <div class="form-group col-md-10">
            <label for="inputEmail4">Apellido</label>
            <input type="string" class="form-control" id="contacto_apellido" name="contacto_apellido" placeholder="Apellido contacto opcional">
        </div>
        <div class="form-group col-md-10">
            <label for="inputEmail4">Parentesco</label>
            <select id="inputState" class="form-control" name="contacto_parentesco" id="contacto_parentesco">
                <option value="0">Seleccione Parentesco
                <option value="1">Padres
                <option value="2">Hermano/a
                <option value="3">Abuelo/a
                <option value="4">Primo/a
                <option value="5">Tio/a
                <option value="6">Amigo/a
                <option value="7">Conocido/a
                <option value="8">Otro
                </option>
            </select>
        </div>
    </div>
    <div class="col">
      <h6>Ancetecendes o enfermedades anteriores</h6>
      <div class="form-group">
        <textarea class="form-control" id="exampleFormControlTextarea1" name="antecedentes" id="antecedentes" rows="10" placeholder="Complete con información" required></textarea>
     </div>
     <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Registrar</button>
      <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
    </form>

  </div>
  
    </div>
  </div>
</div>