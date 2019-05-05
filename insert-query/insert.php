<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (firstname, lastname, email)
VALUES ('Praveen', 'Kumar', 'praveen@codeleson.com'),
       ('Alpha', 'Beta', 'alpha@codeleson.com'),
       ('Xyz', 'Name', 'xyz@codeleson.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>