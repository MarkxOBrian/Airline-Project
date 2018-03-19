<?php
$con=mysqli_connect("localhost","root","","users");

session_start();

$name=$_POST['name'];
$_SESSION['var2']=$name;

$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$cardno=$_POST['card'];
$number=$_POST['no'];
$flight_name=$_POST['flight_name'];



	if(empty($name))
	{
		echo "enter your name first <br>";
	}

	 else if (empty($address))
	{
		echo "enter your address<br>";

	}

	 else if(empty($city))
	{
		
		echo "enter your city<br>";

	}


	 else if(empty($cardno))
	{
		
		echo "enter your credit card number<br>";
	}
	 else if(empty($number))
	{
	echo "enter your phone number";
	}
	else if(empty($flight_name))
{
	echo "Enter flight name";
}


if(mysqli_query($con,"INSERT into booked_flights (name, address, city, state, credit_card_no, contact_no, flight_name) values ('$name' , '$address', '$city', '$state', '$cardno', '$number', '$flight_name')"))
	

if(isset($_POST['submission']))
{

	mysqli_select_db($con,"test");

$sql2="SELECT free_seats FROM fly  where flight_name='$flight_name'";
$result2=mysqli_query($con,$sql2) or die('failed to retrieve data');
$row=mysqli_fetch_assoc($result2);


if($row['free_seats']>=1)
{ 

	
		$query="UPDATE fly SET free_seats=free_seats-1 where flight_name='$flight_name'";
	mysqli_query($con,$query) or die('update not successful');

	header("location:ticket.php");
	
}

  

else
{
	echo "No free seats, please book another flight";
}
		
	}
	
mysqli_close($con);
?>