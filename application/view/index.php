<h1>Main page</h1>
<h2>
	<ul>
		<li><a href="/">Main</a></li>
		<li><a href="/index.php?page=addStudent">Add Student</a></li>
		<li><a href="/index.php?module=controllers&page=updateStudent">Update Student</a></li>
		<li><a href="/index.php?module=controllers&page=getStudentList">Students List</a></li>
	</ul>
</h2>
<hr>
<?php

include './application/view/'.$_GET['page'].'.php';

?>

