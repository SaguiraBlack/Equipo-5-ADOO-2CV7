<?php
include("./sessionCheck.php");
session_start();

  if(isset($_SESSION["usuario"])){
	if($_SESSION["usuario"] != 'admin'){
		header("location:../web-pages/index.html");
	}else{
     include("./adminDB.php");  
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Administrador</title>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
<link href="../materialize/css/materialize.min.css" rel="stylesheet">
<link href="./../materialize/css/materialize.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/admin.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="./../javascript/jquery-3.5.1.min.js"></script>
<script src="./../materialize/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="../javascript/admin.js"></script>
</head>
<body>
    <header>
      
    </header>
    <main>
      <div class="container">
        <h4>Administraci&oacute;n</h4>
        <img src="../images/escomlogo.png" class="logo" alt="Logo ESCOM"><br>
        <table class="responsive-table striped centered">
          <thead>
            <tr><th>Boleta</th><th>Nombre</th><th>Opciones</th></tr>
          </thead>
          <tbody>
            <?php echo $artista; ?>
          </tbody>
        </table>
        <form action="../php/cerrarSesion.php?nombreSesion=curp_inicio">
          <button name="mandar" value="Enviar" id="send">
              Cerrar sesión
              <i class="tiny material-icons right">send</i>
          </button> 
        </form>	
        <form action="../web-pages/registro.html">
          <button name="mandar" value="Enviar" id="send">
              Nuevo registro
              <i class="tiny material-icons right">insert_chart</i>
          </button> 
        </form>	
      </div>
    </main>
	
</body>
</html>
<?php
  }else{
    header("Location:../web-pages/index.html");
  }
?>
