      <div class="manager-details">
      <?php
		session_start();

		$host = "localhost";
		$user = "root";
		$password = "";
		$db = "hotelmanagement";

		$con = mysqli_connect($host, $user, $password, $db);
				
		$sql1="select username,mobile_no,address from `user` WHERE email='manager1@gmail.com'";
		$res=mysqli_query($con,$sql1);
		?>
		<table class="table">
		<thead>
			<tr>
				<th>User name:</th>
				<th>Mobile no.:</th>
				<th>Address:</th>
				<th></th>
			</tr>
		</thead>
		<?php
		$i=1;
		while($row1 = mysqli_fetch_assoc($res)){?>
	<tr>
			<td><?php echo $row1['username']?></td>
			<td><?php echo $row1['mobile_no']?></td>
			<td><?php echo $row1['address']?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>

		
	
      </div>