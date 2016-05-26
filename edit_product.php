<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crud Medoo</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilos.css" rel="stylesheet">

</head>

<body>
	
	<!-- generamos nuestra vista para editar-->
	
	<div class="contenedor-principal">
	
		<form class="form-horizontal" id="form_edit" method="POST" action="edit_success.php">
			<!-- aca tenemos nuestro id oculto -->
			<?php echo "<input type='hidden' name='temp_Id' value='".$_POST["tempId"]."'/>" ?>
		  <div class="form-group">
			<label class="col-sm-2 control-label">Nombre</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="mod_nom" name="mod_nom" placeholder="Nombre" required="required">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-2 control-label">Precio</label>
			<div class="col-sm-10">
			  <input type="number" class="form-control" id="mod_pre" name="mod_pre" placeholder="Precio" required="required">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" id="editButton" class="btn btn-success">Modificar</button>
			</div>
		  </div>
		</form>
	
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>

</body>

</html>

</html>