<?php 
require 'vendor/autoload.php';

use PostgreSQLTutorial\Connection as Connection;
use PostgreSQLTutorial\InsertTable as InsertTable;

try {
	$pdo = Connection::get()->connect();

	$insertDemo = new InsertTable($pdo);

	$id = $insertDemo->insert('333FFP','renato molina',10,'f',4);
	 echo 'The stock has been inserted with the id ' . $id . '<br>';
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>  


insert into alumno (rut,nombre,edad,sexo,id_curso) values
()
select c1.nombre,c2.nombre
from alumno c1 
inner join curso c2
on c1.id_curso = c2.id_curso;
