<?php

namespace Test;

use PDO;

class Database {

	private $host = 'localhost';
	private $user = 'root';
	private $pass = 'root';
	private $db = 'students';

	// Connect to DB with PDO.
	public function connect()
	{
		$pdo = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass);

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		return $pdo;
	}
}