
<?php
include("./conexionDB.php");
//Verificacion de registros en la base de datos
$nombre=$_POST['nombre'];
$genero=$_POST['genero'];
$ciudadNac=$_POST['ciudad'];
$biografia=$_POST['biografia'];
$sitioWeb=$_POST['sitioweb'];
$Album=$_POST['nombreAlbum'];
$anioLanzamiento=$_POST['anioL'];
$numPistas=$_POST['numPistas'];
$estudio=$_POST['estudio'];

$Cancion=$_POST['nombreCancion'];
$duracion=$_POST['duracion'];
$numPista=$_POST['numPista'];
$url=$_POST['url'];
$nombreComp=$_POST['nombreComp'];
$direccion=$_POST['direccionCom'];
$sitioWeb1=$_POST['webComp'];
$numeroTel=$_POST['numComp'];


	$insertR = "INSERT INTO Artista VALUES('$nombre', '$genero','$ciudadNac','$biografia','$sitioWeb')"; 
	$insertAlbum="INSERT INTO album VALUES('$nombre', '$Album','$anioLanzamiento','$numPistas','$estudio')";
	$insertCancion="INSERT INTO Cancion VALUES('$nombre','$Album','$Cancion','$duracion','$numPista','$url')";
	$insertComp="INSERT INTO companiaGrab VALUES('$Album', '$nombreComp','$direccion','$sitioWeb1','$numeroTel')";
	
$respAX = [];
	 if (  mysqli_query($db_conex,$insertR) &&  mysqli_query($db_conex,$insertAlbum) &&  mysqli_query($db_conex,$insertCancion) && mysqli_query($db_conex,$insertComp)) {
		$respAX["cod"] = 1;
		$respAX["msj"] = "Registro exitoso.";
		$db_conex->close();
    } else {
		$respAX["cod"] = 0;
		$respAX["msj"] = "Error. Favor de intentarlo nuevamente";
		$db_conex->close();
    }echo json_encode($respAX);
?>
 
