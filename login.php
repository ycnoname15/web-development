<?php
print_r($_POST);
$success = 0;
$user = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    // Check if the 'username' and 'password' keys are set in $_POST
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM signup WHERE username = ?";
        $stmt = mysqli_prepare($con, $sql);

        if ($stmt) {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);

            // Get the result
            $result = mysqli_stmt_get_result($stmt);

            if ($result) {
                $row = mysqli_fetch_assoc($result);

                if ($row && password_verify($password, $row['password'])) {
                    echo "Login successfully";
                } else {
                    echo "Invalid username or password";
                }
            } else {
                echo "Query failed: " . mysqli_error($con);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Prepare statement failed: " . mysqli_error($con);
        }
    } else {
        echo "Username or password not set in POST data";
    }

    // Close the database connection if it's valid
    if ($conn) {
        mysqli_close($conn);
    }
}
?>
