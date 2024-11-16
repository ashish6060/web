<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the data from the form
if (isset($_GET['id']) && isset($_GET['name'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $name = $conn->real_escape_string($_GET['name']);

    // Insert data into the database
    $sql = "INSERT INTO MyGuests (id, firstname) VALUES ('$id', '$name')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
