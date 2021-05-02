<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "hotelmanagement";

$con = mysqli_connect($host, $user, $password, $db);

$field=$_POST['field'];
$value=$_POST['updated_value'];
$room_type=$_POST['room_type'];

$hotel_id=3;

if($field=="room_cost")
{
  if($room_type=="3BHK")
  {
    $sql = "UPDATE `rooms` SET `room_cost`= '$value' WHERE hotel_id='$hotel_id' AND room_type='3BHK'";
    if(mysqli_query($con, $sql)) 
    {
      header('location:ha3.php');
    } 
    else
    {
      echo 'Error updating record: ' . mysqli_error($con);
    }
  }
  elseif($room_type=="2BHK")
  {
    $sql = "UPDATE `rooms` SET `room_cost`= '$value' WHERE hotel_id='$hotel_id' AND room_type='2BHK'";
    if(mysqli_query($con, $sql)) 
    {
      header('location:ha3.php');
    } 
    else
    {
      echo 'Error updating record: ' . mysqli_error($con);
    }
  }
  else
  {
    $sql = "UPDATE `rooms` SET `room_cost`= '$value' WHERE hotel_id='$hotel_id' AND room_type='1BHK'";
    if(mysqli_query($con, $sql)) 
    {
      header('location:ha3.php');
    } 
    else
    {
      echo 'Error updating record: ' . mysqli_error($con);
    }
  }
}

if($field=="no_of_rooms")
{
  if($room_type=="3BHK")
  {
    $sql = "UPDATE `rooms` SET `no_of_rooms`= '$value' WHERE hotel_id='$hotel_id' AND room_type='3BHK'";
    if(mysqli_query($con, $sql)) 
    {
      header('location:ha3.php');
      
    } 
    else
    {
      echo 'Error updating record: ' . mysqli_error($con);
    }
  }
  elseif($room_type=="2BHK")
  {
    $sql = "UPDATE `rooms` SET `no_of_rooms`= '$value' WHERE hotel_id='$hotel_id' AND room_type='2BHK'";
    if(mysqli_query($con, $sql)) 
    {
      header('location:ha3.php');
    } 
    else
    {
      echo 'Error updating record: ' . mysqli_error($con);
    }
  }
  else
  {
    $sql = "UPDATE `rooms` SET `no_of_rooms`= '$value' WHERE hotel_id='$hotel_id' AND room_type='1BHK'";
    if(mysqli_query($con, $sql)) 
    {
      header('location:ha3.php');   
    } 
    else
    {
      echo 'Error updating record: ' . mysqli_error($con);
    }
  }
}



?>
