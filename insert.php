<?php
include 'connect.php';

// Get values from the form
$email = $_POST['email'];
$number = $_POST['number']
$password = $_POST['password'];

// Insert data into the database
$sql = "INSERT INTO signup (email, number, password) VALUES ('$email', '$number','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
