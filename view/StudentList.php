<?php

require_once "module/StudentsList.php";

?>
<div class="articles-list">
	<?php
foreach($result as $items) {
	$id = $items['ID'];
	$name = $items['Name'];
	$gender = $items['Gender'];
	$age = $items['Age'];
	$group = $items['GroupName'];
	$date = $items['Date'];
	echo <<< msg
	<p>
		$id.) <b>$name</b> [Age: $age | $gender] <br> Group:$group <br>Added: $date
		<p align="right">
		<a href="module/deleteStud.php?del=$id">Delete</a>
	</p>
	<hr>
	</p>
	msg; }
	?>
</div>