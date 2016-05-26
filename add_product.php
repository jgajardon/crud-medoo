
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

<?php

//Incluimos el archivo config para trabajar con la base de datos
require_once 'config.php';

//Verificamos que las variables no esten vacias
$nombre = isset($_POST['name'])? $_POST['name']: '';
$precio = isset($_POST['precio'])? $_POST['precio']: '';



//Entregamos una respuesta dependiendo si se genero algun error o no

if(empty($nombre) || empty($precio)){

    echo "<h3>No se puedo ingresar el producto</h3>";
	
}else{
	
	$data = $database->insert("products",[
        "nombre" => $nombre,
        "precio" => $precio,
    ]);
	
    echo "<h3>El producto se ingreso correctamente</h3>";
}

?>

	<form method="get" action="index.php">
		<button type='submit' id='volver1' class='btn btn-primary'>Volver</button>
	</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<script src="js/bootstrap.min.js"></script>

</body>

</html>
