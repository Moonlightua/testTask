<?php

namespace Test;

use Exception;
use PDO;

require_once "Database.php";
require_once "getStudentsListInterface.php";

class getStudentsList extends Database implements getStudentsListInterface {

	/**
	 * {@inheritdoc}
	 */
	public function connect() {
		return parent::connect();
	}

	/**
	 * {@inheritdoc}
	 */
	public function execute():array {
		$pdo = $this->connect();
		$sql = "SELECT ID, Name, Gender, Age, GroupName, Date FROM Student_List ORDER BY id DESC";
		$statment = $pdo->query($sql);
		$data = $statment->fetchAll(PDO::FETCH_ASSOC);
		if(!$data)
			throw new Exception("Can't get list of all Students");
		return $data;
	}
}