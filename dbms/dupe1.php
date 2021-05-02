<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "hotelmanagement";

$con = mysqli_connect($host, $user, $password, $db);
$address=$_POST['address'];
$mobile_no=$_POST['mobile_no'];


$sql = "UPDATE `user` SET `address`='$address' WHERE email='manager1@gmail.com'";
$sql1= "UPDATE `user` SET `mobile_no`='$mobile_no' WHERE email='manager1@gmail.com'"; 
if(mysqli_query($con, $sql)) 
{
  header('location:ha1.php');
} 
  else
{
  echo 'Error updating record: ' . mysqli_error($con);
}

if(mysqli_query($con, $sql1)) 
{
  header('location:ha1.php');
} 
  else
{
  echo 'Error updating record: ' . mysqli_error($con);
}

session_close();
?>


