<?php 

    $conn = mysqli_connect("localhost", "root", "", "db_rmutt_wks");

    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($conn));
    }

?>