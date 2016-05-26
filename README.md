## Como Empezar

CRUD realizado en el lenguaje de programación PHP, realizado las distintas tareas como crear, modificar o eliminar un producto, tambien puedes ver el listado de los productos almacenados. Desarrollado con el framework MYSQL Medoo.in, y Bootstrap para el diseño amigable de la aplicación.

### Configuración archivo config.php

```php


// Inicializar
$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'nombre',
    'server' => 'localhost',
    'username' => 'your_username',
    'password' => 'your_password',
    'charset' => 'utf8'
]);

// Insert

$data = $database->insert("products",[
        "nombre" => $nombre,
        "precio" => $precio,
    ]);
```


## Enlaces

* Sitio Oficial Desarrollador : [http://jgajardo.cl](http://jgajardo.cl)

* DEMO: [http://jgajardo.cl/crudmedoo](http://jgajardo.cl/crudmedoo)
