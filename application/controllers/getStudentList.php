<?php

namespace Test;

require_once "./application/module/getStudentsList.php";

$class = new getStudentsList();
$result = $class->execute();
