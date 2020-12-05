<?php

namespace Test;

use Exception;

require_once "addStudents.php";

	// Get data from form for add student to database.
$name = htmlspecialchars($_POST['Name']);
$gender = htmlspecialchars($_POST['Gender']);
$age = htmlspecialchars($_POST['Age']);
$group = htmlspecialchars($_POST['Group']);

	// Create object.
$class = new addStudents();
$class->execute($name, $gender, $age, $group);

if(!$class){
	throw new Exception("Can't add student!");
}else{
	header("Location: /");
}
