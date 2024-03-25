<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form submission
    $db = mysqli_connect("localhost", "root", "", "logbooks_db");

    $name = mysqli_real_escape_string($db, $_POST['txtname']);

    // File handling
    $image = $_FILES['monsterimage'];
    $audio = $_FILES['monsteraudio'];

    // Check if files are uploaded successfully
    if ($image['error'] == 0 && $audio['error'] == 0) {
        $imagedata = addslashes(file_get_contents($image['tmp_name']));
        $audiodata = addslashes(file_get_contents($audio['tmp_name']));

        $sql = "INSERT INTO monster (name, image, audio) VALUES ('$name', '$imagedata', '$audiodata')";
        mysqli_query($db, $sql);

        mysqli_close($db);
    } else {
        echo "Error uploading files.";
    }
} else {
    // Display the form
    echo "<html><head><title>Monster Details</title></head>";
    echo "<body><h2>Monster Details</h2>";
    echo "<form enctype='multipart/form-data' action='" . $_SERVER['PHP_SELF'] . "' method='post'>";
    echo "Monster name: <input type='text' name='txtname' size='15' class='form-control' /><br/><br/>";
    echo "Monster image: <input type='file' name='monsterimage' accept='image/jpeg' class='form-control' /><br/><br/>";
    echo "Monster Sound: <input type='file' name='monsteraudio' accept='audio/basic' class='form-control' /><br/><br/>";
    echo "<input type='submit' class='btn btn-default' value='Save' />";
    echo "</form></body></html>";
}
?>
