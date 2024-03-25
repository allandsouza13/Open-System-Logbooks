<?php
include("myfunctions.inc");

html_header("My function demo");

echo "<br/><br/>My salary is £15000 and I'm taxed at 40% <br/><br/>";

// Call calculatetax function with only one argument
echo "I pay £" . calculatetax(15000) . " tax";

html_footer();
?>
