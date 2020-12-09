<?php

use App\application\module\deleteStudent;

require_once "./application/module/deleteStudent.php";


	// Check if exist ID of student and this ID is number execute deleting student.
if(isset($_GET['del']) && is_numeric($_GET['del'])){
	$class = new deleteStudent();
	$delete = $class->execute($_GET['del']);
	if(!$delete){
		return false;
	}else{
		header('Location: /index.php?module=controllers&page=getStudentList');
		exit;
	}
}

