<?php

namespace Test;

use Exception;

require_once "editStudent.php";

	// Get data for updating student info from form.
$id = htmlspecialchars($_POST['ID']);
$name = htmlspecialchars($_POST['Name']);
$gender = htmlspecialchars($_POST['Gender']);
$age = htmlspecialchars($_POST['Age']);
$group = htmlspecialchars($_POST['Group']);

	// Create object and execute updating.
$class = new editStudent();
$class->execute($id, $name, $gender, $age, $group);

if(!$class){
	throw new Exception("Can't add student!");
}else{
	header("Location: /");
}
