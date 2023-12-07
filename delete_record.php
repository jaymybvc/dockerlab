<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Visitors";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['email'])) {
    $email_to_delete = $_POST['email'];

    // Prepare the SQL statement
    $sql = "DELETE FROM details WHERE email = ?";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind the parameter and execute the query
        $stmt->bind_param("s", $email_to_delete); // "s" for a string

        if ($stmt->execute()) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
