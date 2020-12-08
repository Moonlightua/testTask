<?php

namespace Test;

use Exception;
use PDO;

require_once "Database.php";
require_once "deleteStudentInterface.php";

class deleteStudent extends Database implements deleteStudentInterface {

	/**
	 * {@inheritdoc}
	 */
	public function connect():PDO {
		return parent::connect();
	}

	/**
	 * {@inheritdoc}
	 */
	public function execute(int $id):bool {
		$pdo = $this->connect();
		$sql = "DELETE FROM Student_List WHERE id = $id";
		$statment = $pdo->query($sql);
		if (!$statment)
			throw new Exception("Can't delete student!");
		return TRUE;
	}
}