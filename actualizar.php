<?php
/* -------------------------------------------

Produce by CSPROG

Proyecto: Usuarios
Fecha 25/10/2020

File: editar.php
Description: File to access DB
Version: 1.0

Autor: Carlos Roberto Ramirez
Licency: This software have all rights reserved

----------------------------------------------- */

$conn = include_once "conexion.php";
$IdUser = $_POST["IdUser"];
$Nombre = $_POST["nombre"];
$Email = $_POST["email"];

$Consulta = "update Users set username='".$Nombre."', email='".$Email."' where IdUser=".$IdUser;
//echo $Consulta."<br>";

$result = pg_query($conn, $Consulta);
if (!$result) {
  echo "Ocurrió un error.\n";
  exit;
}

header("Location: listar.php");

?>
