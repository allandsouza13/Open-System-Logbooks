<?php
// Include the functions file
include("myfunctions.inc");

// Call the html_header function
html_header("My second function demo");

// Call the calculatetax function and display the result
echo "<br/><br/>My salary is £15000 and I'm taxed at 22%.<br/><br/>"; // Added semicolon here

// Call the updated function with three parameters
echo "I pay £" . calculatetax(15000, 22, 0) . " tax"; // Corrected function name and added the allowance parameter

// Call the html_footer function
html_footer();
?>
