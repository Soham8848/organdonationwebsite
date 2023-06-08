<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
    $address = $_POST['address'];
	$gender = $_POST['gender'];

	// Database connection
	$conn = new mysqli('localhost:3306','root','','backendform');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO registration_form(name,  email,phone, password, address, gender) VALUES(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssisss", $name, $email,$phone, $password,$address,  $gender);
		
		$execval = $stmt->execute(); 
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>