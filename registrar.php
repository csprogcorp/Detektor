<?php
/* -------------------------------------------

Produce by CSPROG

Proyecto: Usuarios
Fecha 25/10/2020

File: registrar.php
Description: File to access DB
Version: 1.0

Autor: Carlos Roberto Ramirez
Licency: This software have all rights reserved

----------------------------------------------- */

$conn = include_once "conexion.php";
$Nombre = $_POST["nombre"];
$Email = $_POST["email"];

$Qry = "insert into Users (username, email) values ('$Nombre', '$Email')";
//echo $Qry."<br>";


$result = pg_query($conn, $Qry);
if (!$result) {
  echo "Ocurrió un error.\n";
  exit;
}

//$conn->bind_param("ss", $Nombre, $Email);
//$conn->execute();

header("Location: ./listar.php");

?>

