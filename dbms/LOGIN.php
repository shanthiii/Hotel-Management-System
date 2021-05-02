

<html lang="en">

    <head>

        <title>MYHome</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="styles.css">

        

    </head>

    <body>

        <header>
      
              <h1>My Home </h1> 
              


        </header>

        <div class="container col-md-4">

            <h2>Login here</h2>

 <form action="auth.php" method="post">
        <div class="form-group">
           <label>Email</label>
           <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label>password</label>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Login">
        </div>
        <p>Don't have an account? <a href="SIGNUP1.php">Sign up now</a>.</p>
</form>

        </div>

 

        <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>

        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>

        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    </body>

</html>