<?php
include("./conexionDB.php");
if($curp=$_POST['alumnoD']){
	$curp=$_POST['alumnoD'];
	$respAX = array(); //asi se vuelve dinamico
	if(!empty($_POST['alumnoD'])){ //Esto valida que se hayan enviado los datos
		if($db_conex != NULL){ //Esto valida que exista la conexion
			$consulta="Delete From alumno Where curp='$curp'";
			if($result  = mysqli_query($db_conex,$consulta)){ //Esto valida que la query este bien			
				if(mysqli_affected_rows($db_conex) == 1){
					//Si se hizo la eliminacion
					$respAX["cod"] = 1;
					$respAX["msj"] = "Alumno eliminado de la base de datos. ";
					
				}else{
					$respAX["cod"] = 0;
					$respAX["msj"] = "Erro al eliminar alumno.";
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
	}$db_c = mysqli_connect("localhost","root","Shourtex1","Usuario");
	$us3="Delete From usuarios Where usuario='$curp'";
	$sql=mysqli_query($db_c,$us3);
	echo json_encode($respAX);
}
?>
