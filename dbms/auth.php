<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "hotelmanagement";

$con = mysqli_connect($host, $user, $password, $db);

$username=$_POST['email'];
$password=$_POST['password'];


$query = "SELECT * FROM `login` WHERE email = '$username' && password = '$password'";
$connect = mysqli_query($con, $query) or die("Error: " . mysqli_error($con));
$row = mysqli_fetch_array($connect, MYSQLI_ASSOC);
$check = mysqli_num_rows($connect);

$query1 = "SELECT login_id FROM `login` WHERE email = '$username' && password = '$password'";
$res=mysqli_query($con,$query1);
$row1 = mysqli_fetch_array($res, MYSQLI_ASSOC);

if ($check == 1)
{
  $_SESSION['login']='yes';
  $_SESSION['username']=$username;
  setcookie('user',$row1[login_id]);
  if($row1[login_id] <= 5)
  {
    header('location:admindisplay.php');
  }
  elseif($row1[login_id] > 5 && $row1[login_id] <= 11)
  {
    header('location:manager1.php');
  }
  else
  {
    header('location:hoteldisplay.html');
  }
}
else 
{
  echo "Check Username and password.";
}


?>
