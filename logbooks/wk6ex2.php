<?php
	// Establish a connection to the database
	$link = mysqli_connect("localhost", "root", "", "logbooks_db");

    // Select all records from the 'test' table
	$sql = "SELECT * FROM test";
	$result = mysqli_query($link, $sql);
?>
<html>
<body>
 
<?php
while ($row = mysqli_fetch_assoc($result))
{
    echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a></br>";
}
?>
</body>
</html>