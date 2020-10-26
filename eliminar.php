<?php
/* -------------------------------------------

Produce by CSPROG

Proyecto: Usuarios
Fecha 25/10/2020

File: eliminar.php
Description: File to access DB
Version: 1.0

Autor: Carlos Roberto Ramirez
Licency: This software have all rights reserved

----------------------------------------------- */

if (!isset($_GET["IdUser"])){
	exit("No hay ID");
}else{
	$IdUser = $_GET["IdUser"];
}

$conn = include_once "conexion.php";
$Consulta = "delete from Users where IdUser=".$IdUser;
//echo $Consulta."<br>";

$result = pg_query($conn, $Consulta);
if (!$result) {
  echo "Ocurrió un error.\n";
  exit;
}

header("Location: listar.php");

?>

