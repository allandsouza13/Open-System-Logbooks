<?php
$db = mysqli_connect("localhost", "root", "", "logbooks_db");

// Check if files were uploaded
if (isset($_FILES['monsterimage']) && isset($_FILES['monsteraudio'])) {
    // Obtain the file paths
    $image = $_FILES['monsterimage']['tmp_name'];
    $audio = $_FILES['monsteraudio']['tmp_name'];

    // Check if files were uploaded successfully
    if ($_FILES['monsterimage']['error'] === UPLOAD_ERR_OK && $_FILES['monsteraudio']['error'] === UPLOAD_ERR_OK) {
        // Get the file binary data
        $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
        $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));

        // Prepare the SQL statement
        $sql = "INSERT INTO monster (name, image, audio) ";
        $sql .= "VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($db, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $_POST['txtname'], $imagedata, $audiodata);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Record saved successfully";
        } else {
            echo "Error: " . mysqli_error($db);
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: File upload error";
    }
} else {
    echo "Error: Files not uploaded";
}

// Close connection
mysqli_close($db);
?>
