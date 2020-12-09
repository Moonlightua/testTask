<?php

use App\application\module\addStudents;

include "../module/addStudents.php";


	// Check data from form for add student to database.
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(!empty($_POST['Name']) and !empty($_POST['Gender']) and !empty($_POST['Age']) and !empty($_POST['Group'])){

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
				header("Location: /index.php?module=controllers&page=getStudentList");
			}
		}else{
			throw new Exception("Fill all filds!");
		}
	}


