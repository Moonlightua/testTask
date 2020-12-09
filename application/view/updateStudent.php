<?php ?>
<link href="../../css/styles.css" rel="stylesheet" type="text/css">
<div class="HeadAdd"></div>
<div class="HeadEdit"></div>
<div>
	<div class="tableEdit">
		<form action="/application/controllers/updateStudent.php" method="post">
			<table>
				<tr>
					Edit student by ID.
				</tr>
				<tr>
					<td>ID:</td>
					<td><input type="text" name="ID" placeholder="ID"></td>
				</tr>
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
					<td><input type="submit" name="Edit" value="Edit"></td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="clear"></div>
<hr>