<?php
session_start();
if(isset($_COOKIE["Logged_In"])){
	$_SESSION['ID'] = $_COOKIE["Logged_In"];
	header("location: ../Menu.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="LoginStyle.css">
  <title>Login</title>
</head>
<body style="margin: 0px; padding: 0px;">
  <h1 style="font-family: Brush Script MT, Brush Script Std, cursive; font-size: 100px; margin: 5px;">Love Connect</h1>
  <div class="login">

    <div class="heading">

      <h1>Sign in</h1>

      <form action="includes/login.inc.php" method="post">

        <div class="input-user">
          <input type="text" class="form-control" name="usersId" placeholder="Username">
        </div>

        <div class="input-password">
          <input type="password" class="form-control" name="pwd" placeholder="Password">
        </div>

        <div class="submit-button">
          <button type="submit" name="submit" class="float">Sign In</button>
        </div>

        <p><a href="Register.html">Register</a>   </p>
        
      </form>
    </div>
  </div>
</body>
</html>
