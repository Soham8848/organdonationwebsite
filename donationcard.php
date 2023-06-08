<?php
 // get form data
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $blood_group = $_POST['blood-group'];
 $organs = $_POST['organs'];

 // Database connection
 $conn = new mysqli('localhost:3306','root','','backendform');
 if($conn->connect_error){
 echo "$conn->connect_error";
 die("Connection Failed : ". $conn->connect_error);
 } else {
 // prepare and execute sql query
 $sql = "INSERT INTO donation_card(name, email, phone, address, gender, blood_group, organs) VALUES(?, ?, ?, ?, ?, ?, ?)";
 $stmt = $conn->prepare($sql);
 $stmt->bind_param("ssissss", $name, $email, $phone, $address, $gender, $blood_group, $organs);
 
 $execval = $stmt->execute(); 
 echo $execval;
 echo "Registration successfully...";
 // close connection and statement
 $stmt->close();
 $conn->close();
 }
?>
