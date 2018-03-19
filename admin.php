<?php
$con=mysqli_connect("localhost","root","","users");


$username=mysqli_real_escape_string($con,$_POST['user']);
$password=mysqli_real_escape_string($con,$_POST['pass']);


 $result=mysqli_query($con,"select * from customers where username='$username' and password= '$password' ") or die("failed to query database".mysqli_error());
$row=mysqli_fetch_array($result);
if ($row['username']==$username && $row['password']==$password AND !empty($username) AND !empty($password)) {
  session_start();
  echo "login successful";
  $_SESSION['clearance']['username'] = $username;
  echo "<br>";
  echo $_SESSION['clearance']['username'];
  header ("location:adminflights.php");
  
} else {
  echo '<h3>Username or password are invalid. Try again</h3>' ;
  echo '<a href="login.html">Login</a>';
}


?>