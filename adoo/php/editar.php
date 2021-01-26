<?php
  include("./conexionDB.php");

  $usuario = $_REQUEST["alumno"];
  $consulta = "SELECT * FROM artista WHERE nombreArtista = '$usuario'";
  $resultado = mysqli_query($db_conex, $consulta);
  $info = mysqli_fetch_array($resultado);
  if ($usuario==""){
	  echo "jummm";
  }else{
	  echo "$usuario";
  }
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="../css/registro.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container row">
        <div class="wrapper">        
            <form name="registro" id="registro" class="formulario">
                <h5>Ingresa los datos para realizar un nuevo registro</h5><br>
                <img src="../images/lml.png" class="logo" alt="Logo ESCOM"><br>
                <h6>Nuevo artista</h6>
                    <div class="input-field col m6 s12">
                        <input type="text" name="nombre" class="validate" id="nombre">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <select name="genero">
                            <option value="" disabled selected>Género</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="input-field col m6 s12">
                        <input type="text" name="ciudad" class="validate" id="ciudad">
                        <label for="ciudad">Ciudad de nacimiento</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input type="text" name="sitioweb" class="validate" id="sitioweb">
                        <label for="sitioweb">Sitio web del artista</label>
                    </div>
                    <div class="input-field col m12 s12">
                        <textarea id="biografia" name="biografia" class="materialize-textarea"></textarea>
                        <label for="bio">Biografía</label>
                    </div>
                 
            <br><br>

                <h6>Nuevo álbum</h6>
                    <div class="input-field col m6 s12">
                        <input type="text" name="nombreAlbum" class="validate" id="nombreAlbum">
                        <label for="nombreAlbum">Nombre del álbum</label>
                    </div>
					 <div class="row">
                        <label>Fecha de nacimiento *</label>
                        <input type="text" class="datepicker col m6 s12" id="fecha" name="anioL"> 
                    </div>
                    <div class="input-field col m6 s12">
                        <input type="text" name="numPistas" class="validate" id="numPistas">
                        <label for="numPistas">Número de pistas</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input type="text" name="estudio" class="validate" id="estudio">
                        <label for="estudio">Estudio de grabación</label>
                    </div>
                     
            <br><br>
            
                <h6>Nuevo estudio de grabación</h6>
                    <div class="input-field col m6 s12">
                        <input type="text" name="nombreComp" class="validate" id="nombreComp">
                        <label for="nombreComp">Nombre de la compañía</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input type="text" name="direccionCom" class="validate" id="direccionCom">
                        <label for="direccionCom">Dirección de la compañía</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input type="text" name="webComp" class="validate" id="webComp">
                        <label for="webComp">Sitio web de la compañía</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input type="text" name="numComp" class="validate" id="numComp">
                        <label for="numComp">Teléfono</label>
                    </div>
                      
				<br><br>
      
                <h6>Nueva canción</h6>
                    <div class="input-field col m6 s12">
                        <input type="text" name="nombreCancion" class="validate" id="nombreCancion">
                        <label for="nombreCancion">Nombre de la canción</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input type="text" name="duracion" class="validate" id="duracion">
                        <label for="duracion">Duración</label>
                    </div>
                    <div class="input-field col m12 s12">
                        <input type="text" name="numPista" class="validate" id="numPista">
                        <label for="numPists">Número de pista</label>
                    </div>
					<div class="input-field col m12 s12">
                        <input type="text" name="url" class="validate" id="url">
                        <label for="webComp">URL</label>
                    </div>
                    <button class="btn waves-effect waves-light enviar" type="submit" name="Submit" value="Enviar" id="mandar">
                        Registrar
                        <i class="material-icons right">send</i>
                    </button>    
            <br><br></form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../javascript/validaciones.js"></script>
	<script src="../javascript/update.js"></script>
</body>

</html>
