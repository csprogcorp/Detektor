<?php
/* -------------------------------------------

Produce by CSPROG

Proyecto: Usuarios
Fecha 25/10/2020

File: conexion.php
Description: File to access DB
Version: 1.0

Autor: Carlos Roberto Ramirez
Licency: This software have all rights reserved

----------------------------------------------- */


$Host = "localhost";
$port = '5432';
$Usuario = "root";
$Contrasenia = "root"; 
$Database = "test";

$connectString = 'host=' . $Host . ' port=' . $port . ' dbname=' . $Database . 
        ' user=' . $Usuario . ' password=' . $Contrasenia;

//echo "Hostname=".$Host."<br> ";
//echo "UserName=".$Usuario."<br>";
//echo "Password=".$Contrasenia."<br>";
//echo "DB_Name=".$Database."<br>";

$link = pg_connect ($connectString);
if (!$link)
{
        die('Error: Fallo la conexion a PG: ' . pg_last_error());
}

return $link;

?>
