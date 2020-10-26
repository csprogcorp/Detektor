<?php
/* -------------------------------------------

Produce by CSPROG

Proyecto: Usuarios
Fecha 25/10/2020

File: listar.php
Description: File to access DB
Version: 1.0

Autor: Carlos Roberto Ramirez
Licency: This software have all rights reserved

----------------------------------------------- */

include_once "encabezado.php";

$conn = include_once "conexion.php";
$Consulta = "select IdUser, username, email from Users";
$result = pg_query($conn, $Consulta);
if (!$result) {
  echo "Ocurrió un error.\n";
  exit;
}


?>


<div class="row">
	<div class="col-12">
		<h1>Lista de Usuarios</h1>
	</div>
	<div class="col-12">
		<a class="btn btn-success my-2" href="form_Registrar.php">Agregar Nuevo</a>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>NOMBRE</th>
					<th>EMAIL</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = pg_fetch_row($result)) { 
				?>
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td>
						<a href="editar.php?IdUser=<?php echo $row[0]; ?>">Editar</a>
					</td><td>
						<a href="eliminar.php?IdUser=<?php echo $row[0]; ?>">Eliminar</a>
					</td>
				</tr>
				<?php 
				}
				?>
			</tbody>
		</table>
	</div>
</div>

<?php
include_once "pie.php";
?>
