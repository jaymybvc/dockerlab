<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    
</head>

<body>
    <style>
        p{
            font-size: 16px;
        }
    </style>
    <nav>
        <div id="header" style="background: rgb(199 189 189 / 50%);">
              <ul>
                <li><a href="index.html"><b>Home</b></a></li>
                <li><a href="second_destination.html" class="mx-3"><b>Lake Luise</b></a></li>
                <li><a href="Booking_info.html" class="mx-3"><b>Book</b></a></li>
                <li><a href="details.php" class="mx-3"><b>Details</b></a></li>
              </ul>
            </div>
        </nav>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Visitors";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM details";
$result = $conn->query($sql);
?>

<table class="table">
    <tr class="table-active">
        <th><p>idx</p></th>
        <th><p>Email Id</p></th>
        <th><p>First Name</p></th>
        <th><p>Last Name</p></th>
        <th><p>Address</p></th>
        <th><p>Comment</p></th>
        <th></th>
        <!-- Add more table headers for other columns as needed -->
    </tr>

    <?php
    $counter = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $counter++;
            ?>
            <tr 
                data-first_name=<?php echo $row['first_name']; ?> 
                data-last_name=<?php echo $row['last_name']; ?>
                data-email=<?php echo $row['email']; ?>
            >
                <td><p><?php  echo $counter; ?></p></td>
                <td><p><?php echo $row['email']; ?></p></td>
                <td><p><?php echo $row['first_name']; ?></p></td>
                <td><p><?php echo $row['last_name']; ?></p></td>
                <td><p><?php echo $row['address']; ?></p></td>
                <td><p><?php echo $row['comment']; ?></p></td>
                <td>
                    <i class="fa fa-edit edit-button" style="font-size:30px;color:blue"></i>
                    <form method="POST" action="delete_record.php">
                        <input type="hidden" name="email" value=<?php echo $row['email']; ?>>
                        <button type="submit" style='font-size:24px' class="btn btn-danger my-3">Delete </button>
                    </form>
                </td>
                <!-- Add more table data cells for other columns as needed -->
            </tr>
            <?php
        }
    } else {
        echo "<tr><td colspan='2'>No results found</td></tr>";
    }
    ?>
</table>

<?php
$conn->close();
?>



</body>

</html>
