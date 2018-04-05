<?php 
namespace PostgreSQLTutorial;

class CreateTable
{
	private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
/*	public function createTable()
	{
		$sqlList = ['CREATE TABLE IF NOT EXISTS stock (
						id serial PRIMARY KEY,
						symbol character varying(10) NOT NULL UNIQUE,
						company character varying(255) NOT NULL UNIQUE)',
					'CREATE TABLE IF NOT EXISTS stock_valuations(
						id_stock INTEGER NOT NULL,
						value_on date NOT NULL,
						price numeric(8,2) NOT NULL DEFAULT 0,
						PRIMARY KEY(id_stock,value_on),
						FOREIGN KEY(id_stock) REFERENCES stock(id)
					);'
						];
		//execute each sql statement to create new tables
		foreach ($sqlList as $sql){
			$this->pdo->exec($sql);
		}

		return $this;
	}*/
	//return tables in the database
	public function getTables()
	{
		$stmt = $this->pdo->query("SELECT table_name FROM information_schema.tables
			WHERE table_schema = 'public'
			and table_type = 'BASE TABLE'
			ORDER BY table_name");

		$tableList = [];
		while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
			$tableList[] = $row['table_name'];
		}
		return $tableList;
	}
}
?>