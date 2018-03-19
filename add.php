
<?php
$con=mysqli_connect("localhost","root","","test");
if(!$con)
{
	echo "Not connected";
}

$name=$_POST['name'];
$dcity=$_POST['dcity'];
$acity=$_POST['acity'];
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$time=$_POST['time'];
$cost=$_POST['cost'];
$duration=$_POST['duration'];
$seats=$_POST['seats'];
if(empty($name) or empty($acity) or empty($dcity) or empty($date1) or empty($date2) or empty($time) or empty($cost) or empty($duration) or empty($seats))
{

	echo "Do not leave any field empy, please try again <br>";
	echo "<a href='addui.php'>Okay</a>";
}
else
{
	mysqli_select_db($con, "test");
$sql=mysqli_query($con, "INSERT INTO fly (flight_name, departure_city, arrival_city, departure_date, arrival_date, departure_time, price, duration, free_seats) VALUES ('$name', '$dcity', '$acity', '$date1', '$date2', '$time', '$cost', '$duration', '$seats') ");

if(!$sql)
{
	echo "Failed to insert";
}
else
{
	header("location:success.php");
}
}
?>

