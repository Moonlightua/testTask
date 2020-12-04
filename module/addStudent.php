<?php

namespace Test;
use Exception;


require_once "addStudents.php";

$name = htmlspecialchars($_POST['Name']);
$gender = htmlspecialchars($_POST['Gender']);
$age = htmlspecialchars($_POST['Age']);
$group = htmlspecialchars($_POST['Group']);


$class = new addStudents();
$class->execute($name, $gender, $age, $group);

if(!$class){
	throw new Exception("Can't add student!");
}else{
	header("Location: /");
}
