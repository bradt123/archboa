<?php 
namespace PostgreSQLTutorial;
class Colegio
{

	private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
	public function all()
	{   
		$stmt = $this->pdo->query('SELECT c1.nombre AS nombre,c2.nombre AS nom,c3.nivel,a.total AS notafinal
FROM alumno_asignatura a 
INNER JOIN alumno c1 ON a.rut_alumno=c1.rut
INNER JOIN asignatura c2 ON a.id_asignatura=c2.id_asignatura
INNER JOIN curso c3 ON a.id_curso = c3.id_curso;');
		$alumnos = [];
		while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
			$alumnos[] = [
				'nombreAlumno' => $row['nombre'],
				'nombreAsigantura' => $row['nom'],
				'nivel' => $row['nivel'],
				'notafinal' => $row['notafinal'],			
	 		];

		}
		return $alumnos;
	}
}
?>