<?php
session_start();

// Retrieve selected quantity, size, and colour
$selqty = isset($_SESSION['selqty']) ? $_SESSION['selqty'] : '';
$selsize = isset($_SESSION['selsize']) ? $_SESSION['selsize'] : 'Not selected';
$selcolour = isset($_POST['selcolour']) ? htmlspecialchars($_POST['selcolour']) : 'Not selected';

// Calculate the price based on the selected size
switch ($selsize) {
    case 'Small':
        $price = 15.75;
        break;
    case 'Medium':
        $price = 16.75;
        break;
    case 'Large':
        $price = 17.75;
        break;
    case 'ExtraLarge':
        $price = 18.75;
        break;
    default:
        $price = 0;
}

echo "<h2>Your order qty is $selqty</h2>";
echo "<h2>Selected size is $selsize</h2>";
echo "<h2>Selected colour is $selcolour</h2>";

// Calculate and display the total cost
$totalCost = $selqty * $price;
echo "<h2>Total cost is £$totalCost</h2>";
?>
