<?php

namespace App\application\module;

use Exception;
use PDO;


class getStudentsList extends Database implements getStudentsListInterface {

	/**
	 * {@inheritdoc}
	 */
	public function connect():PDO {
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