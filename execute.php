<?php 
session_start();
include('db.php');
$username=$_POST['username'];
$result = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: index.php?remarks=failed"); 
}else {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email_id=$_POST['email_id'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 if(mysqli_query($con,"INSERT INTO users(fname, lname, email_id,username, password)VALUES('$fname', '$lname','$email_id', '$username', '$password')")){ 
	header("location: index.php?remarks=success");
 }else{
	 $e=mysqli_error($con);
	header("location: index.php?remarks=error&value=$e");	 
 }
}
?>