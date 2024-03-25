<html>
<body>
<?php
    $hourlyrate = 5.75;
    $hoursperweek = 40;

    // Calculate gross wage
    $gross = $hourlyrate * $hoursperweek;

    // Define tax rate
    $taxRate = 0.22;

    // Calculate net wage after tax
    $net = $gross * (1 - $taxRate);

    echo $net;
?>
</body>
</html>
