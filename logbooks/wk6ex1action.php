<?php
	// Establish a connection to the database
	$link = mysqli_connect("localhost", "root", "", "logbooks_db");

	// Escape user inputs to prevent SQL injection
	$name = mysqli_real_escape_string($link, $_POST['txtName']);
	$email = mysqli_real_escape_string($link, $_POST['txtEmail']);
	$phone_number = mysqli_real_escape_string($link, $_POST['txtPhoneNumber']);

	// Insert data into the 'test' table
	$sql = "INSERT INTO test (name, email, phone_number) VALUES ('$name', '$email', '$phone_number')";

	if (mysqli_query($link, $sql)) {
		echo "Record added successfully<br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($link);
	}

	// Select all records from the 'test' table
	$sql = "SELECT * FROM test";
	$result = mysqli_query($link, $sql);

	if ($result) {
		// Fetch and display records
		while ($row = mysqli_fetch_assoc($result)) {
			echo "$row[name]  $row[email]  $row[phone_number] <br/>";
		}
		mysqli_free_result($result);
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($link);
	}

	// Close the connection
	mysqli_close($link);
?>
