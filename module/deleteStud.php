<?php

namespace Test;

require_once "deleteStudent.php";

if(isset($_GET['del']) && is_numeric($_GET['del'])){
	$class = new deleteStudent();
	$delete = $class->execute($_GET['del']);
	if(!$delete){
		return false;
	}else{
		header('Location: /');
		exit;
	}
}

