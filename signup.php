<?php

session_start();
$con=mysqli_connect('localhost', 'root','');
mysqli_select_db($con,'user');

$name = $_POST['Username'];
$email = $_POST['Email'];
$pass= $_POST['Password'];

$s = "select * from signup where name='$name'";

$result= mysqli_query($con,$s);

$num = mysqli_num_rows($result);
if ($num == 1){
	 echo "username already taken";
}
else{
	$reg="insert into signup(Username,Email,Password) values ('$name','$email,'$pass')";
	mysqli_query($con,$reg);
	echo "Registration successfull";
}
?>