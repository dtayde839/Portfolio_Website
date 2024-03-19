<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "message";

	// database connection

	$conn = mysqli_connect($servername, $username, $password, $db_name);

	if(!$conn){
		die("Connection failed:" . mysqli_connect_error());
	}

	if(isset($_POST['save']))
	{
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$message = $_POST['message'];

		$sql_query = "INSERT INTO messages (firstname, lastname, email, mobile, message)
					  VALUES('$firstname', '$lastname', '$email', '$number', '$message')";

		$data = mysqli_query($conn, $sql_query);

		if($data)
		{
			echo "New Details Inserted Successfully.";
		}
		else
		{
			echo "Failed";
		}
		mysqli_close($conn);
	}

?>