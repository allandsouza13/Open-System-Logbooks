<?php
include("myfunctions.inc");

html_header("My function demo");

echo "<br/><br/>Salary = £15000<br/>Tax threshold= £1000<br/>Tax rate = 22%<br/><br/>";

// Provide the tax allowance as the third argument
echo "I pay £" . calculatetax(15000, 22, 1000) . " tax";

html_footer();
?>
