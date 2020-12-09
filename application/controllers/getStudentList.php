<?php

use App\application\module\getStudentsList;

require_once "./application/module/getStudentsList.php";

$class = new getStudentsList();
$result = $class->execute();

