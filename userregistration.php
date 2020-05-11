<?php

session_start();
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registration_page');

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$mail = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['configpassword'];

$s = " select * from usertable where firstname = '$fname' and email = '$mail' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo " Username or Email is already used ";

} 
else
 {
	$reg = " insert into usertable(firstname , lastname , email, password, configpassword) values ('$fname' , '$lname', '$mail', '$pass', '$cpass')";
	mysqli_query($con, $reg);
	header('Location: http://localhost/IP_project/home_page/home.php');
	//echo "/IP_project/home_page/home.php";

}


?>
