<?php ?>
<link href="../../css/styles.css" rel="stylesheet" type="text/css">
<div class="HeadAdd"></div>
<div class="HeadEdit"></div>
<div>
	<div class="tableAdd">
		<form action="/application/controllers/addStudent.php" method="post">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="Name" placeholder="Name"></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><input type="text" name="Gender" placeholder="Gender"></td>
				</tr>
				<tr>
					<td>Age:</td>
					<td><input type="text" name="Age" placeholder="Age"></td>
				</tr>
				<tr>
					<td>Group:</td>
					<td><input type="text" name="Group" placeholder="Group"></td>
				</tr>
				<tr>
					<td><input type="submit" name="Create" value="Add"></td>
				</tr>
			</table>
		</form>
	</div>
<div class="clear"></div>
	<hr>