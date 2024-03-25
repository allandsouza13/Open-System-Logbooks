<?php
	// Connect to server and select database
	$link = mysqli_connect("localhost", "root", "", "logbooks_db");

	// Check if the form is submitted
	if (isset($_POST['btnsubmit'])) {
		// Escape user inputs to prevent SQL injection
		$name = mysqli_real_escape_string($link, $_POST['txtname']);
		$telno = mysqli_real_escape_string($link, $_POST['txttelno']);
		$email = mysqli_real_escape_string($link, $_POST['txtemail']);

		// Update data in the 'test' table
		$update_sql = "UPDATE test SET email='$email', phone_number='$telno' WHERE name='$name'";

		if (mysqli_query($link, $update_sql)) {
			echo "Record updated successfully<br>";
		} else {
			echo "Error updating record: " . mysqli_error($link);
		}
	}

	// Check if the 'id' parameter is present in the URL
	if (isset($_GET['id'])) {
		$id = mysqli_real_escape_string($link, $_GET['id']);

		// Declare query as an SQL variable
		$sql = "SELECT * from test where name = '$id'";
		$result = mysqli_query($link, $sql);

		// Execute query
		$row = mysqli_fetch_assoc($result);
	} else {
		echo "ID is automatically generated.";
	}

	mysqli_close($link);
?>

<html>
<body>
    <form action="" method="post">
        Name:
        <input type="text" name="txtname" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>" />
        </br>
        Phone number:
        <input type="text" name="txttelno" value="<?php echo isset($row['phone_number']) ? $row['phone_number'] : ''; ?>" />
        </br>
        Email:
        <input type="text" name="txtemail" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>" />
        </br>
        <input type="submit" name="btnsubmit" value="save"/>
    </form>
</body>
</html>
