# CRUD con CodeIgniter
Curso básico de MVC


## Prerequisitos
Instalar LAMP
Importar la base de datos desde install/agenda.sql

## Config
//Deberas configurar el base_url de tu aplicacion
Filepath: application/config/config.php  Línea 26
´´´
$config['base_url'] = 'http://localhost/ci/';
´´´´

y en application/config/database.php  especificar los datos para la conexion de la DB

´´´
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'agenda',
´´´


## Completar el CRUD
