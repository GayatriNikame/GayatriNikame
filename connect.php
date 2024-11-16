<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobileno = $_POST['mobileno'];

//database connection
$conn = new mysql('localhost', 'root', '','test');
if($conn->connect_error){
	die('Connection failed : ' .$conn->connect_error);
}else  {
	$stmt = $conn-> prepare("insert into registration(firstname, lastname, email, password, mobileno) values(?, ?, ?, ?, ?)");
	$stmt->mysqli_bind_param("ssssi",$firstname, $lastname, $email, $password, $mobileno);
	$stmt->mysqli_execute();
	echo "registration successfully";
	$stmt->close();
	$stmt->close();
} 

?>