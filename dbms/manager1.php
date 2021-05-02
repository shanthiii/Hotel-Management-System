<html lang="en">

    <head>

        <title>MYHome</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit=no">

        
        <link rel="stylesheet" href="managercss.css">
    </head>

    <body>
      <h1>My Home</h1><br><br>
      
      <div class="manager-head">
        <h2>WELCOME MANAGER</h2>
      <div class="row-main">
        <div class="table-display">
            <?php
       session_start();

       $host = "localhost";
       $user = "root";
       $password = "";
       $db = "hotelmanagement";

       $con = mysqli_connect($host, $user, $password, $db);

       if($_COOKIE["user"]=='6')
         $hotel_id=1;
       if($_COOKIE["user"]=='7')
         $hotel_id=2;
       if($_COOKIE["user"]=='8')
         $hotel_id=3;
       if($_COOKIE["user"]=='9')
         $hotel_id=4;
       if($_COOKIE["user"]=='10')
         $hotel_id=5;
       if($_COOKIE["user"]=='11')
         $hotel_id=6;

               

       $sql1="select hotel_name,hotel_type,hotel_location from `hotel` WHERE hotel_id='$hotel_id'";
       $res=mysqli_query($con,$sql1);
       $sql2= "select room_cost,no_of_rooms,room_type from `rooms` WHERE rooms.hotel_id='$hotel_id'";
       $res1= mysqli_query($con,$sql2);
       ?>

<div class="table">
   <table class="table">
       <thead>
           <tr>
               <th>Hotel Name:</th>
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
           <td><?php echo $row['hotel_name']?></td>
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

            </div> 
            
           
        
          <div class="column-2"> 
            <div class="contact-display">
                <h4>For any enquiry please contact us: </h4>
                <p>
                        admin-1: bhanuvishwa@gmail.com<br>
                        admin-2: nagapraharsha@gmail.com<br>
                        admin-3: srinadhreddy@gmail.com<br>
                        admin-4: harshith@gmail.com<br>
                        admin-5: prashanthi@gmail.com<br>
                </p>
            </div>

             <div class="form-display">
                  <h3>Update Here</h3>
                  <form action="xyz.php" method="post">
                      <div class="form-group">
                          <label for="field">Choose a field:</label>
                          <select name="field">
                             <option value="no_of_rooms">number of rooms</option>
                             <option value="room_cost">room cost</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>updated_value</label>
                          <input type="text"name="updated_value" id="updated_value" class="form-control">
                      </div>
                <div class="form-group">
                          <label for="rooms">Choose room type:</label>
              <select name="room_type">
                <option value="1BHK">1BHK</option>
                <option value="2BHK">2BHK</option>
                <option value="3BHK">3BHK</option>
              </select>
                      </div>
                      <div class="form-group">
                          <input type="submit" class="btn btn-primary" value="Update">
             </div>
          </div>
      </div>
      </div>
      </div> 

 

        <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>

        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>

        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    </body>

</html>