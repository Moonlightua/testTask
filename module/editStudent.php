<?php

namespace Test;

use Exception;

require_once "Database.php";
require_once "editStudentInterface.php";

class editStudent extends Database implements editStudentInterface {

	/**
	 * {@inheritdoc}
	 */
	public function connect() {
		return parent::connect();
	}

	/**
	 * {@inheritdoc}
	 */
	public function execute(int $id, string $name, string $gender, int $age, string $group):bool {
		$pdo = $this->connect();
		$sql = "UPDATE Student_List SET Name = '$name', Gender = '$gender', Age = '$age', GroupName = '$group' WHERE ID = '$id'";
		$statment = $pdo->query($sql);
		if(!$statment)
			throw new Exception("Can't edit student!");
		return true;
	}
}