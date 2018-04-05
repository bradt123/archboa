<?php 
require 'vendor/autoload.php';

use PostgreSQLTutorial\Connection as Connection;
use PostgreSQLTutorial\Colegio as Colegio;

 
try {
	$pdo = Connection::get()->connect();

	$cole = new Colegio($pdo);
	$alumnos = $cole->all();
    /*Connection::get()->connect();
    echo 'A connection to the PostgreSQL database sever has been established successfully.';*/
} catch (\PDOException $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PostgreSQL PHP Consultas a base de datos</title>
	 <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Lista de Alumnos</h1>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Id_alumno</th>
					<th>rut</th>
					<th>Nombre</th>
					<th>Edad</th>
					<th>Sexo</th>
					<th>Id_curso</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($alumnos as $alumno): ?>
				<tr>
					<td><?php echo htmlspecialchars($alumno['nombreAlumno']); ?></td>
					<td><?php echo htmlspecialchars($alumno['nombreAsigantura']); ?></td>
					<td><?php echo htmlspecialchars($alumno['nivel']); ?></td>
					<td><?php echo htmlspecialchars($alumno['notafinal']); ?></td>

				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<h2><a href="../PGSQL/tables.php" title="">Tablas</a></h2>
	<select name="">
		<?php foreach($alumnos as $alumno): ?>
		<option value=""><?php echo htmlspecialchars($alumno['nombreAlumno']); ?></option>
		<?php endforeach; ?>
	</select>

</body>
</html>