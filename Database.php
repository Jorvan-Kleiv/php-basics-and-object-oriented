<?php

class Database
{

	public $connection;
	public $stmt;
	public function __construct($config, $user = "root", $password="root")
	{
		$dsn = "mysql:" . http_build_query($config, "", ";");
		$this->connection = new PDO($dsn, $user, $password, [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]);
	}
	function query($query, $params = [])
	{
		$this->stmt = $this->connection->prepare($query);
		$this->stmt->execute($params);
		return $this;
	}
	function get()
	{
		return $this->stmt->fetchAll();
	}
	function find()
	{
		return $this->stmt->fetch();
	}
	function findOrFail()
	{
		$result = $this->find();

		authorize($result);

		return $result;
	}


}