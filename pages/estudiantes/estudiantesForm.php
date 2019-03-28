  <div class="form-group">
    <label for="id_nombre">Nombre</label>
    <input type="text" id="nombre" class="form-control" name="nombre" id="id_nombre" placeholder="Nombre del estudiante" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_apellido">Apellido</label>
    <input type="text" id="apellido" class="form-control" name="apellido" id="id_apellido" placeholder="Apellido del estudiante" pattern="[a-zA-Z]{1,64}" required>
  </div>
  <div class="form-group">
    <label for="id_email">E-mail</label>
    <input type="email" id="email" class="form-control" name="email" id="id_email" placeholder="Correo"  required>
  </div>
  <div class="form-group">
    <label for="sexo">Sexo</label>
    <select name="sexo" id="sexo" required>
    <option value="Femenino">Femenino</option>
    <option value="Masculino">Masculino</option>
    <option value="Otro">Otro</option>
    </select>
  </div>
  <div class="form-group">
    <label for="id_fecha_nacimiento">Fecha de Nacimiento</label>
    <input type="date" id="fecha_nacimiento" class="form-control" name="fecha_nacimiento" id="id_fecha_nacimiento" placeholder="Fcha de nacimiento"  required>
  </div>