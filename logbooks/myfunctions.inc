<?php
function html_header($pageTitle)
{
    echo "<html><head><title>$pageTitle</title></head><body>";
}

function html_h1($text)
{
    echo "<h1>$text</h1>";
}

function html_h2($text)
{
    echo "<h2>$text</h2>";
}

function html_footer()
{
    echo "</body></html>";
}


function calculatetax($salary, $rate, $allowance)
{
    $taxableIncome = $salary - $allowance;

    if ($taxableIncome < 0) {
        return 0; // No tax if income is below allowance
    }

    $tax = $taxableIncome * ($rate / 100);
    return $tax;
}
?>

