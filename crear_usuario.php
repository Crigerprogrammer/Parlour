<?php require 'php/cusuario.php'; ?>
     
       
       

       <!-- Formulario para registro de nuevo cliente -->
       <form method="POST" name="crearUsuario" enctype="multipart/form-data">
      <h2 class="text-primary"> Nuevo TIPO_USUARIO</h2>  
      <div class="form-group">
        <label for="campoPlazas">TIPO_USUARIO</label>
        <input 
          type="text" 
          class="form-control" 
          id="plazas" 
          name="tipo_usuario" 
          placeholder="c"
          required
        >
      </div>
      <div class="form-group">
        <label for="campoPlazas">DESC_USUARIO</label>
        <input 
          type="text" 
          class="form-control" 
          id="plazas" 
          name="desc_usuario" 
          placeholder="c"
          required
        >
      </div>
      <div class="form-group">
          <!-- Boton para enviar los datos a la base de datos -->
          <a onclick="return confirm('Esta seguro de registrar el avion?')">
            <button type="submit" 
            value="Registrar Avion" 
            name ="send" 
            class="btn btn-info">Registrar Avion </button>
          </a>
      </div>
    </form>