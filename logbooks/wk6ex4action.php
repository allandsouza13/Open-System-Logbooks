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
		$update_sql = "UPDATE test SET email=?, phone_number=? WHERE name=?";
		$stmt = mysqli_prepare($link, $update_sql);

		// Bind parameters
		mysqli_stmt_bind_param($stmt, "sss", $email, $telno, $name);

		// Execute the statement
		if (mysqli_stmt_execute($stmt)) {
			echo "Record updated successfully<br>";
		} else {
			echo "Error updating record: " . mysqli_error($link);
		}

		// Close the statement
		mysqli_stmt_close($stmt);
	}

	// Check if the 'id' parameter is present in the URL
	if (isset($_GET['id'])) {
		$id = mysqli_real_escape_string($link, $_GET['id']);

		// Declare query as an SQL variable
		$sql = "SELECT * FROM test WHERE name = '$id'";
		$result = mysqli_query($link, $sql);

		// Execute query
		$row = mysqli_fetch_assoc($result);
	} else {
		echo "ID is automatically generated.";
	}

	// Check if the delete button is clicked
	if (isset($_POST['btndelete'])) {
		// Use a prepared statement to delete the record from the 'test' table
		$delete_sql = "DELETE FROM test WHERE name=?";
		$stmt = mysqli_prepare($link, $delete_sql);

		// Bind the parameter
		mysqli_stmt_bind_param($stmt, "s", $id);

		// Execute the statement
		if (mysqli_stmt_execute($stmt)) {
			echo "Record deleted successfully<br>";
			// Clear the form values after deletion
			$row = array();
		} else {
			echo "Error deleting record: " . mysqli_error($link);
		}

		// Close the statement
		mysqli_stmt_close($stmt);
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

    <!-- Add a form for deleting the record -->
    <form action="" method="post">
        <input type="hidden" name="txtname" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>" />
        <input type="submit" name="btndelete" value="Delete" onclick="return confirm('Are you sure you want to delete this record?')"/>
    </form>
</body>
</html>
