<?php

namespace App\application\module;

use PDO;

class Database {

	private $host = 'localhost';
	private $user = 'root';
	private $pass = 'root';
	private $db = 'students';

	/**
	 * This method returns object of PDO class for connectio to database.
	 *
	 * @return PDO
	 */
	public function connect():PDO
	{
		$pdo = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass);

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		return $pdo;
	}
}