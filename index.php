
<?php require_once ('config.php');?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Medoo</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilos.css" rel="stylesheet">
	
</head>

<body>

	<div class="contenedor-principal">
	
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Modificar</th>
			<th>Eliminar</th>
		</tr>
		</thead>
		<tbody>

		<?php 
		//Realizamos una consulta a la BD para traer los productos
		$datas = $database->select("products", "*"); 
		
		?>

		<?php 
		//Realizamos un foreach para generar los datos en nuestra tabla con boostrap
		foreach($datas as $data)
		
		{
		?>
		
		<tr>
			<td><?php echo $data['ID']; ?></td>
			<td><?php echo $data['nombre']; ?></td>
			<td><?php echo "$ " . $data['precio']; ?></td>
			<?php echo "<td><form action='edit_product.php' method='POST'><button href='edit_product.php' type='submit' name='tempId' id='tempId' value='".$data['ID']."' class='btn btn-success' data-toggle='modal' data-target='#myModal2'>Modificar Producto</button></form></td>"; ?>
			<?php echo "<td><form action='delete_product.php' method='POST'><button href='delete_product.php' type='submit' name='tempIdDelete' id='tempIdDelete' value='".$data['ID']."' class='btn btn-danger' data-toggle='modal' data-target='#myModal3' >Eliminar</button></form></td>"; ?>
		</tr>
		<?php } ?>

		</tbody>
		
	</table>
	
	<button type="button" id="crearButton" class="btn btn-info" data-toggle="modal" data-target="#myModal">Agregar Producto</button>
	
	</div>


	

	
	
		<form id="form1" method="POST" action="add_product.php">

			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Crear Producto</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="usr">Nombre Producto:</label>
								<input type="text" class="form-control" id="name" name="name" required="required">
							</div>
							<div class="form-group">
								<label for="usr">Precio Producto:</label>
								<input type="number" class="form-control" id="precio" name="precio" required="required">
							</div>
							<button type="submit" class="btn btn-primary">Crear</button>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						</div>
					</div>

				</div>
			</div>

		</form>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>

	<?php include_once("analyticstracking.php") ?>

</body>

</html>