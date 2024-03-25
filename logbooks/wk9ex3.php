<?php
$lottodate = date("Ymd");
echo "The lottery numbers for $lottodate are ";

$number = array(); // Initialize the array to store lottery numbers

for ($n = 1; $n < 7; $n++) {
    $number[$n] = rand(1, 49);
    echo "<br/> $number[$n]";
}

$conn = mysqli_connect("localhost", "root", "", "logbooks_db");

$sql = "INSERT INTO lotto (lottodate, number1, number2, number3, number4, number5, number6) ";
$sql .= "VALUES ('$lottodate', $number[1], $number[2], $number[3], $number[4], $number[5], $number[6])";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<br/>This week's numbers have been saved";
} else {
    echo "<br/>Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
