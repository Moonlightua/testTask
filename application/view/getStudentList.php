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
		<a href="/index.php?module=controllers&page=deleteStud&del=$id">Delete</a>
	</p>
	<hr>
	</p>
	msg; }
	?>
</div>