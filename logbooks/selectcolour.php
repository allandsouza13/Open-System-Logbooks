<?php
session_start();

// Retrieve selected quantity, size, and colour
$selqty = isset($_SESSION['selqty']) ? $_SESSION['selqty'] : '';
$selsize = isset($_POST['selsize']) ? $_POST['selsize'] : 'Not selected';

// Store selected size in session variable
$_SESSION['selsize'] = $selsize;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Colour Page</title>
</head>
<body>
    <form action="confirmation.php" method="post">
        Select the colour for the <?php echo $selqty ?> widgets in size <?php echo $selsize ?>
        <select name="selcolour">
            <option>white</option>
            <option>red</option>
            <option>yellow</option>
            <option>green</option>
            <option>blue</option>
        </select>
        <br/><br/>
        <!-- Add hidden input for selected size -->
        <input type="hidden" name="selsize" value="<?php echo $selsize ?>">
        <input type="submit" value="Buy"/>
    </form>
</body>
</html>
