<html>
<head>
		<title>Agenda</title>
</head>
<body>


<h1>Agenda</h1>

<a href="<?=site_url('usuario/nuevo')?>">Nuevo</a>

<p>
	
</p>

<!-- Listado de todos los usuarios -->
<table>

<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Genero</th>
		<th>Fecha de Nacimiento</th>
		<th>Acciones</th>
</tr>

<?php

if($sql_usuarios->num_rows()>0)
{
		foreach($sql_usuarios->result() as $row)
		{
			echo '<tr>'.
			'<td>'.$row->id.'</td>'.
			'<td>'.$row->nombre.'</td>'.
			'<td>'. ( ($row->genero==0)?'Hombre':'Mujer' ).'</td>'.
			'<td>'.$row->fecha_nacimiento.'</td>'.
			//Acciones
			'<td>
			<a href="'.site_url('usuario/ver').'" />Ver</a>
			<a href="'.site_url('usuario/editar').'" />Editar</a>
			<a href="'.site_url('usuario/eliminar').'" />Eliminar</a>
			</td>'.
			'</tr>';
		}
}
else
{
	echo 'No se encontraron resultados';
}

?>
</table>

</body>
</html>