<?php
session_start();
//$host = "localhost" ;
//$username = "root";
//$password = "";
//$db = "shopping";

$con = mysqli_connect("localhost", "root","", "hotelmanagement");

$sql="select hotel_type,hotel_location from `hotel` WHERE hotel_id=5";
$res=mysqli_query($con,$sql);
$sql1= "select room_cost,no_of_rooms,room_type from `rooms` WHERE rooms.hotel_id=5";
$res1= mysqli_query($con,$sql1);
?>

<div class="table">
	<table class="table">
		<thead>
			<tr>
				<th>Hotel type:</th>
				<th>Hotel Location:</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php
		$i=1;
		while($row = mysqli_fetch_assoc($res)){?>
	<tr>
			<td><?php echo $row['hotel_type']?></td>
			<td><?php echo $row['hotel_location']?></td>
		
	</tr>
	<?php } ?>
		</tbody>
	</table>
	<table class="table">
		<thead>
			<tr>
				<th>Room Cost:</th>
				<th>No of Rooms:</th>
				<th>Room Type:</th>
				<th></th>
			</tr>
		</thead>
		<?php
		$i=1;
		while($row1 = mysqli_fetch_assoc($res1)){?>
	<tr>
			<td><?php echo $row1['room_cost']?></td>
			<td><?php echo $row1['no_of_rooms']?></td>
			<td><?php echo $row1['room_type']?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
