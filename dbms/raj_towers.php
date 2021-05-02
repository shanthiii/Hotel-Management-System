<!DOCTYPE html>

<html lang="en">

    <head>

        <title>MYHome</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="hotel1_style.css">

        

    </head>

    <body>

        <header>

            <h1>MYHome</h1>
            
        </header>
        <div class="layout">
            
            <h3>RAJ TOWERS</h3>
		<?php

		require('raj_towers_details.php');

		?>
             <div class="back"><a href="hoteldisplay.html">
                <button class="button"><span>Back</span></button>
              </a></div>
        </div>
        

 

        <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>

        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>

        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    </body>

</html>