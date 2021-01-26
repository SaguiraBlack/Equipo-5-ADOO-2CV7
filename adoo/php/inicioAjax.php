<?php
	$respAX = array(); //asi se vuelve dinamico
	
	if(!empty($_POST['usuario']) && !empty($_POST['contra'])){ //Esto valida que se hayan enviado los datos
		$usuario = $_POST['usuario'];
		$contrasenia = md5($_POST['contra']);	
		$db_conex = mysqli_connect("localhost","root","Shourtex1","rock_lml");	
		if($db_conex != NULL){ //Esto valida que exista la conexion
			$sqlGet = "SELECT * FROM usuarios WHERE usuario = '".mysqli_real_escape_string($db_conex, $usuario)."' and contrasenia='".mysqli_real_escape_string($db_conex, $contrasenia)."' LIMIT 1"; //esto para evitar las inyecciones de SQL y se limita a un usuario
			if($result = mysqli_query($db_conex,$sqlGet)){ //Esto valida que la query este bien			
				if($infGet = mysqli_fetch_array($result)){ //Esto pregunta si hay registros
					session_start();
					$_SESSION["usuario"] = $usuario;
					$_SESSION["autentica"] = "si"; 
					$respAX["cod"] = 1;
					$respAX["msj"] = "Bienvenido ".$infGet[0];
					$respAX["tipoU"] = $infGet[2];
					
				}else{
					$respAX["cod"] = 0;
					$respAX["msj"] = "Ningun registro coincide";
				}
			}else{
				$respAX["cod"] = 0;
				$respAX["msj"] = "Error al ejecutar la query. Favor de intentarlo nuevamente";
			}	
			$db_conex->close();
		}else{
			$respAX["cod"] = 0;
			$respAX["msj"] = "Error al conectar a la base de datos. Favor de intentarlo nuevamente";		
		}
	}else{
		$respAX["cod"] = 0;
		$respAX["msj"] = "Error al obtener los parametros";
	}	
  	echo json_encode($respAX);
?>
