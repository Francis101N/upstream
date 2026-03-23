<?php
ini_set('display_errors',0);

session_start();  

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="robots" content="noindex,nofollow">
    <title>Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- login form -->
    <link href="css_login/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css_login/startmin.css" rel="stylesheet">

    </head>
    <body>

      <style>
  .login-container {
    min-height: 100vh;
    display: grid;
    place-items: center;
    background-color: #f8f9fa;
  }

  .login-form {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
  }
</style>

<form action="proc-login.php" method="post">
  <div class="login-container">
    <div class="login-form text-center">
      <h2><img src="plugins/images/Upstream-logo-copy.png" alt="" width="250px"></h2><br>
      <h4 class="mb-4">Enter your Username and Password</h4>

                        <?php if($error)
                            {
                             echo '<div  class="alert alert-danger ">'.$error.'</div>' ;
                            }
				    	?>

      <br>
      <div class="mb-3">
        <input type="text" name="username" placeholder="Username" class="form-control" required>
      </div>

      <div class="mb-5">
        <input type="password" name="password" placeholder="Password" class="form-control" required>
      </div>

      <div class="d-grid mb-3">
        <button type="submit" name="btn" class="btn btn-danger">Login</button>
      </div>

      <div id="google_translate_element"></div>
    </div>
  </div>
</form>

       

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
