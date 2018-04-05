<?php 
namespace PostgreSQLTutorial;

class InsertTable
{
	private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function insert($rut,$nombre,$edad,$sexo,$id_curso)
	{
		//prepare statement for insert
		$sql = 'INSERT INTO alumno (rut,nombre,edad,sexo,id_curso) VALUES (:rut,:nombre,:edad,:sexo,:id_curso)';

		$stmt = $this->pdo->prepare($sql);

		//pass values to the statement
		$stmt->bindValue(':rut',$rut);
		$stmt->bindValue(':nombre',$nombre);
		$stmt->bindValue(':edad',$edad);
		$stmt->bindValue(':sexo',$sexo);
		$stmt->bindValue(':id_curso',$id_curso);

		//execute the insert statement
		$stmt->execute();

		return $this->pdo->lastInsertId('alumno_id_alumno_seq');
	}
}
?>