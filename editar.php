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

--------------------------------------------- */

include_once "encabezado.php";

$conn = include_once "conexion.php" ;

$IdUser=$_GET["IdUser"];
$Consulta = "select IdUser, username, email from Users where IdUser=".$IdUser;
//echo $Consulta."<br>";

$result = pg_query($conn, $Consulta);
if (!$result) {
  echo "Ocurrió un error.\n";
  exit;
}

$row = pg_fetch_row($result);

if (!$row[0]){
        exit("No hay resiltado para este ID");
}
?>

<div class="row">
        <div class="col-12">
                <h1>Actualizar Usuario</h1>

                <form action="actualizar.php" method="POST">
                        <input type="hidden" name="IdUser" value="<?php echo $row[0]; ?>">

                        <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input value="<?php echo $row[1]; ?>" placeholder="Nombre" class="form-control" type="text" name="nombre"$
                        </div>
                        <div class="form-group">
                                        <label for="email">Email</label>
                                        <input value="<?php echo $row[2]; ?>" placeholder="Email" class="form-control" type="text" name="email" i$
                        </div>
                        <div class="form-group">
                                        <button class="btn btn-success">Guardar</button>
                                        <a class="btn btn-warning" href="listar.php">Volver</a>
                        </div>

                </form>
        </div>
</div>

<?php
include_once "pie.php";
?>
