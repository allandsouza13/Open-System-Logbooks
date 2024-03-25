<?php
	// Connect to server and select database
	$link = mysqli_connect("localhost", "root", "", "logbooks_db");

    //Declare query as sql variable
	$sql = "SELECT * from test where name = '{$_GET["id"]}' ";
    $result = mysqli_query($link, $sql);

	//Execute query
	$row = mysqli_fetch_assoc($result);
?>

<html>
<body>
    <form action="" method="post">
        Name:
        <input type="text" name="txtname" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>" readonly />
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