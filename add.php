<!DOCTYPE html>
<html lang="en" hreflang="en">

<head>
	<title>Desserts | Add</title>
	<link rel="stylesheet" href="style.css">
	<script>



function validation() {
			if (document.getElementById('name').value === "" || document.getElementById('address').value === "") {
				alert("Please make sure all fields are filled!");
				return FALSE;
			} else {
				return TRUE;
			}
		}
	</script>
</head>

<body>
	<h1>Add Dessert Shop</h1>
	<form method="post" action="add.php" onsubmit="return validation()">
		<label>Name: <input type="text" name="name" id="name"></label><Br>
		<label>Full address (please provide as much information as possible!): <input type="address" name="address" id="address"></label>
		<input type="submit">
	</form>
	<a href="locations.php">See locations</a>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
	$newdata = implode("|", $_POST);
	file_put_contents("locations.txt", $newdata . "\n", FILE_APPEND | LOCK_EX);
	echo "<B>Saved!</B>";
}
