<?php
/* -------------------------------------------

Produce by CSPROG

Proyecto: Usuarios
Fecha 25/10/2020

File: form_Registrar.php
Description: File to access DB
Version: 1.0

Autor: Carlos Roberto Ramirez
Licency: This software have all rights reserved

--------------------------------------------- */


include_once "encabezado.php";
?>
<div class="row">
	<div class="col-12">
	<h1>Registrar Usuario</h1>

	<form action="registrar.php" method="POST">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input placeholder="Email" class="form-control" type="text" name="email" id="email" required>
		</div>
		<div class="form-group">
			<button class="btn btn-success">Guardar</button>
		</div>
		</form>
	</div>
</div>

<?php
include_once "pie.php";
?>

