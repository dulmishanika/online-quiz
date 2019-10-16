<?php
   session_start();
  require 'config.php';
 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
  <style>
    body{
    background-image:  url("image3.jpg");
}

</style>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    
    <div class="login-1">
     

    <h1><center>Login Here<center></h1>

    <form method="POST" action="login.php">
    	<p>Username</p>
    	<input name="username" type="text" name="username" placeholder="Enter Username" required>

    	<p>Password</p>
    	<input name="password" type="password" name="password" placeholder="Enter Password" required>

      <a href="question.php"><input name="login" type="submit" id="login_btn" value="Login" / ></a>

        <p>Are You New User</p>
        <a href="reg.php"><input type="button" id="register_btn" value="Register Here"/ ></a> 
    </form> 

    <?php
      
      if(isset($_POST['login']))
      {
        $username=$_POST['username'];
        $password=$_POST['password'];

        $query= "select * from users WHERE username='$username' AND password='$password'";
        
        $query_run= mysqli_query($con,$query);

        if(mysqli_num_rows($query_run)>0)
        {
          $_SESSION['username']=$username;
          header('location:question.php');
        }
        else
        {
            echo '<script type="text/javascript"> alert("Invalid credentials") </script>';

        }
      }

    ?>

</div>


</body>
</html>