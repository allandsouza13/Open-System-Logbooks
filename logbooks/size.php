<?php
session_start();

// Retrieve selected quantity
$selqty = isset($_POST['selqty']) ? $_POST['selqty'] : '';

// Store selected quantity and size in session variables
$_SESSION['selqty'] = $selqty;
$_SESSION['selsize'] = '';  // Initialize selsize to an empty string

?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Size Page</title>
</head>
<body>
    <form action="selectcolour.php" method="post">
        Select the size for the <?php echo $selqty ?> widgets you are ordering
        <select name="selsize">
            <option value="Small">Small (£15.75)</option>
            <option value="Medium">Medium (£16.75)</option>
            <option value="Large">Large (£17.75)</option>
            <option value="ExtraLarge">Extra Large (£18.75)</option>
        </select>
        <br/><br/>
        <input type="submit" value="Next: Select Colour"/>
    </form>
</body>
</html>
