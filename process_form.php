<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $ownerName = $_POST["ownerName"];
    $phone = $_POST["phone"];
    $carName = $_POST["carName"];
    $year = $_POST["year"];
    $mileage = $_POST["mileage"];

    // Process file uploads
    $uploadDirectory = "uploads/";
    $uploadedFiles = [];

    foreach ($_FILES["pictures"]["tmp_name"] as $key => $tmp_name) {
        $fileName = $_FILES["pictures"]["name"][$key];
        $uploadPath = $uploadDirectory . basename($fileName);

        if (move_uploaded_file($_FILES["pictures"]["tmp_name"][$key], $uploadPath)) {
            $uploadedFiles[] = $uploadPath;
        }
    }

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "YConcept";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the car_sales table
    $picturesString = implode(", ", $uploadedFiles);
    $sql = "INSERT INTO car_sales (ownerName, phone, carName, year, mileage, pictures) 
            VALUES ('$ownerName', '$phone', '$carName', $year, $mileage, '$picturesString')";

    if ($conn->query($sql) === TRUE) {
        header("Location: CEM1.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
