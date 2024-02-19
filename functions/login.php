<?php
include '../config/config.php';

// Check if the username and password are set in the POST request
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Get the username and password from the POST request
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare a SQL query to check if the username and password exist in the database
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if there is a row in the result set
    if (mysqli_num_rows($result) > 0) {
        // The username and password exist in the database
        echo 'success';
    } else {
        // The username and password do not exist in the database
        echo 'error';
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // The username and password were not set in the POST request
    echo 'error';
}
?>
