# CRUD con CodeIgniter
Curso básico de MVC


## Prerequisitos
Instalar LAMP o XAMPP
Importar la base de datos desde install/agenda.sql

## Config

//Establecer la locacion de tu proyecto.

Filepath: application/config/config.php  Línea 26
```
$config['base_url'] = 'http://localhost/ci/';
```

//Este servira para el Lang de ValidationForm. Por Ejemplo, para español, cambialo a 'spanish' y en  application/language/spanish crea los mismos archivos que en english y traducelos.
```
$config['language']	= 'english';
```

y en application/config/database.php  Especificar los datos para la conexion de la DB

```
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'agenda',
```


## Completa el CRUD
