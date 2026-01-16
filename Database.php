<?php

class Database
{

	private $connection;
	public function __construct()
	{
		$config = [
			'host' => 'localhost',
			'port' => 3306,
			'dbname' => 'dbs',
		];
		dd(http_build_query($config, "", ";"));
		$dsn = "mysql:host=localhost;port=3306;dbname=dbs;";
		$this->connection = new PDO($dsn, 'root', 'root', [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]);
	}
	function query($query)
	{
		$stmt = $this->connection->prepare($query);
		$stmt->execute();
		return $stmt;


	}

}