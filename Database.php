<?php

class Database
{

	private $connection;
	public function __construct($config, $user = "root", $password="root")
	{
		$dsn = "mysql:" . http_build_query($config, "", ";");
		$this->connection = new PDO($dsn, $user, $password, [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]);
	}
	function query($query, $params = [])
	{
		$stmt = $this->connection->prepare($query);
		$stmt->execute($params);
		return $stmt;


	}

}