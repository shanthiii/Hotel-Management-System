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
echo $field;
echo $value;
if($_COOKIE[user]=='6')
  $hotel_id=1;
if($_COOKIE[user]=='7')
  $hotel_id=2;
if($_COOKIE[user]=='8')
  $hotel_id=3;
if($_COOKIE[user]=='9')
  $hotel_id=4;
if($_COOKIE[user]=='10')
  $hotel_id=5;
if($_COOKIE[user]=='11')
  $hotel_id=6;

if($field=="room_cost")
{
  if($room_type=="3BHK")
  {
    $sql = "UPDATE `rooms` SET `room_cost`= '$value' WHERE hotel_id='$hotel_id' AND room_type='3BHK'";
    if(mysqli_query($con, $sql)) 
    {
      header('location:manager1.php');
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
      header('location:manager1.php');
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
      header('location:manager1.php');
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
      header('location:manager1.php');
      
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
      header('location:manager1.php');
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
      header('location:manager1.php');   
    } 
    else
    {
      echo 'Error updating record: ' . mysqli_error($con);
    }
  }
}



?>
