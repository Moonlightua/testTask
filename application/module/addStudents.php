<?php

namespace Test;

use Exception;
use PDO;

require_once "Database.php";
require_once "addStudentInterface.php";

class addStudents extends Database implements addStudentInterface {

	/**
	 * {@inheritdoc}
	 */
	public function connect():PDO {
		return parent::connect();
	}

	/**
	 * {@inheritdoc}
	 */
	public function execute(string $name, string $gender, int $age, string $group):bool {
		$pdo = $this->connect();
		$date = date("Y-M-d H:i:s");
		$sql = "INSERT INTO Student_List(Name,Gender,Age,GroupName,Date) VALUES('$name', '$gender', '$age', '$group','$date')";
		$statment = $pdo->query($sql);
		if(!$statment)
			throw new Exception("Can't add student!");
		return TRUE;
	}
}