<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Visitors";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Set the values to update
$email = $_POST['email']; // Replace with the way you identify the record
$new_first_name = $_POST['first_name'];
$new_last_name = $_POST['last_name'];
$new_address = $_POST['address'];
$new_comment = $_POST['comment'];

// Prepare the SQL statement using placeholders
$sql = "UPDATE details SET first_name = ?, last_name = ?, address = ?, comment = ? WHERE email = ?";

$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sssss", $new_first_name, $new_last_name, $new_address, $new_comment, $email);

    if ($stmt->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

?>