<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "hotelmanagement";

$con = mysqli_connect($host, $user, $password, $db);

$username=$_POST['username'];
$password=$_POST['password'];
$mobile_no=$_POST['mobile_no'];
$address=$_POST['address'];
$email=$_POST['email'];

$query = "SELECT * FROM `login` WHERE email = '$email' && password = '$password'";
$connect = mysqli_query($con, $query) or die("Error: " . mysqli_error($con));
$row = mysqli_fetch_array($connect, MYSQLI_ASSOC);
$check = mysqli_num_rows($connect);

if ($check == 1){
echo "User already exists.";
} else {
$insert = "INSERT INTO `login` VALUES('', '$email', '$password')";
$ins ="INSERT INTO `user` VALUES('', '$username', '$password','$mobile_no','$address', '$email')";
$set = mysqli_query($con, $insert);
$set1 = mysqli_query($con, $ins);
echo("registered successfully");
header('location:LOGIN.php');
}

?>