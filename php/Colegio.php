<?php 
require_once("first.php");
require_once("IColegio.php");

class Colegio implements IColegio
{
	private $con;
	private $id_alumno_asignatura;
	private $nombre;
	private $nombre1;
	private $nivel;
	private $total;

public function __construct(Database $db)
{
	$this->con = new $db;
}

public function get()
{
	try {
		if(is_int($this->id_alumno_asignatura))
		{
			  $query = $this->con->prepare('SELECT c1.nombre,c2.nombre,c3.nivel,a.total
					FROM alumno_asignatura a
					inner join alumno c1 on a.rut_alumno = c1.rut_alumno
					inner join asignatura c2 on a.id_asignatura = c2.id_asignatura
					inner join curso c3 on a.id_curso = c3.id_curso
					WHERE id = ?');

			  $query->bindParam(1,$this->id_alumno_asignatura,PDO::PARAM_INT);
			  $query->execute();
			  $this->con->close();
			  return $query->fetch(PDO::FETCH_OBJ);
		}
		else
		{
			$query = $this->con->prepare('
					SELECT c1.nombre,c2.nombre,c3.nivel,a.total
					FROM alumno_asignatura a
					inner join alumno c1 on a.rut_alumno = c1.rut_alumno
					inner join asignatura c2 on a.id_asignatura = c2.id_asignatura
					inner join curso c3 on a.id_curso = c3.id_curso
				');
			$query->execute();
			$this->con->close();
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}




}

?>