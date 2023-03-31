<?php
    # Define which database to connect to
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "php06_form");

    # Connect to the defined database
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "Connected to database successfully";
    }
    echo "<br>";
?>