<?php
  include("./conexionDB.php");

  $consulta= "SELECT * FROM Artista";
  $result = mysqli_query($db_conex, $consulta);
  $artista = "";
 
  while($filas = mysqli_fetch_array($result,MYSQLI_BOTH)){
	 
    $artista .= "
    <tr>
      <td>$filas[0]</td>
      <td>$filas[1] </td>
      <td>
        <i class='fas fa-edit ver' data-alumno='$filas[0]'></i>&nbsp;&nbsp;
        <i class='fas fa-times eliminar' data-alumno='$filas[0]'></i>&nbsp;&nbsp;
		</form>
      </td>
    </tr>
    ";
  }
?>
