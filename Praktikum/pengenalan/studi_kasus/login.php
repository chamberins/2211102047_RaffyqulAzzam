
<?php session_start();
if (isset($_SESSION['username'])) {
  header("Location: dashboard.php");
} ?> 
<form method="POST" action="login_proccess.php"> 
  Username: <input type="text" name="username" required> <br>  
  Password: <input type="password" name="password" required> <br>
  <input type="submit" value="Login"> 
</form>