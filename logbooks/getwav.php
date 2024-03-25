<?php
header("Content-type: audio/wav");

$conn = mysqli_connect("localhost", "root", "", "logbooks_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT audio FROM monster WHERE id='$id'";

$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $audio = $row["audio"];
    echo $audio;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
