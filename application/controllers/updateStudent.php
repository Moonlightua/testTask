<?php

namespace Test;

use Exception;

include "../module/editStudent.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(!empty($_POST['Name']) and !empty($_POST['Gender']) and !empty($_POST['Age']) and !empty($_POST['Group']) and !empty($_POST['ID'])){

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
				header("Location: /index.php?module=controllers&page=getStudentList");
			}

	}
}

