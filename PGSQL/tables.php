<?php 
require 'vendor/autoload.php';
//require 'vendor/autoload.php';
use PostgreSQLTutorial\Connection as Connection;
use PostgreSQLTutorial\CreateTable as CreateTable;

try {
	$pdo = Connection::get()->connect();
	$tableCreator = new CreateTable($pdo);

	$tables = $tableCreator->getTables();

	foreach ($tables as $table) {
		echo $table.'<br>';
	}

} catch (PDOException $e) {
	echo $e->getMessage();
}


?>