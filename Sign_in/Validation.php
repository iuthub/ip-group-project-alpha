<!--?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registration_page');

$mail = $_POST['email'];
$pass = $_POST['password'];


$s = " select * from usertable where email = '$mail' and password = '$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	header('location:home_page/home.php');

} 
else
 {
	header('location:Sign_in.php');

}


?>
