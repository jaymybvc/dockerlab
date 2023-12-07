
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
		include "../inc/dbinfo.inc";

		// servername => localhost now rds endpoint
		// username => root now your db username 
		// password => empty now your oen password
		// database name => Your database name
		$conn = mysqli_connect("lab2504.czptxhzjxjrt.us-east-1.rds.amazonaws.com", "admin", "JayPatel", "Vacation");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$comment = $_REQUEST['comment'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is details
		$sql = "INSERT INTO details (first_name,
		last_name,address,email, comments) VALUES ('$first_name',
			'$last_name','$address','$email', '$comment')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your AWS Server"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "\n $address\n $email\n $comment");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>




