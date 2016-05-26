
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

<?php

//Incluimos el archivo config para trabajar con la base de datos

require_once 'config.php';

//Verificamos que las variables no esten vacias

$id = isset($_POST['temp_Id'])? $_POST['temp_Id']: '';
$mod_nom = isset($_POST['mod_nom'])? $_POST['mod_nom']: '';
$mod_pre = isset($_POST['mod_pre'])? $_POST['mod_pre']: '';

//Entregamos una respuesta dependiendo si se genero algun error o no
	
if(empty($id) || empty($mod_nom) || empty ($mod_pre)){

    echo "<h3>El producto no se pudo editar</h3>";
}else{
	
	$data = $database->update("products", [
	"nombre" => $mod_nom,
	"precio" => $mod_pre,],
	[
		"ID" => $id
	]);

    echo "<h3>El producto se edito correctamente</h3>";
	
}

?>

	<form method="get" action="index.php">
		<button type='submit' id='volver3' class='btn btn-primary'>Volver</button>
	</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<script src="js/bootstrap.min.js"></script>

</body>

</html>