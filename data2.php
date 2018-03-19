<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="style2.css">

<title>Scorpion Airlines</title>
<link rel="stylesheet" href="styles.css" type="text/css" />


<style type="text/css">
    body{
    background: lavender;
  }

  form{
    margin-top: 7%;
    width:20%;
    height: 300px;
    padding-top: 1%;
    padding-bottom:9%;
  }
  input{
  width:70%;

  }
  form{

    font-weight: bold;
    font-weight: "Times New Roman",serif;
    width:100%;
    background-color: white;

  }
  .div{
    margin-top: 10%;
    background-color: white;
    border-style: solid;
    border-radius: 20px;
    border-width: 5px;
    width: 30em;
  }
  #submit{
    color: red;
    border-style: solid 2px;
    border-radius: 2px;
    background-color: #000000;
    font-size: +1.5;
    width:100px;
    height: 30px;
  }

  </style>
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/06D32C92-67AB-7641-91C9-5A8A624DFFD3/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/F5DB006D-7254-3B4D-8603-E8CBF3CF95DA/abn/main.css"/>
</head>

<body>


<div id="content10" class="div">
    <header>
    	<h1><a href="index.html">Scorpion<span> Airlines</span></a></h1>
        <h2><font size="4">Online Flight Booking System</font></h2>
    </header>
    <nav>
    	<ul>
        	  <li class="start selected"><a href="index_verify.html">Home</a></li>
            <li class=""><a href="book.php">Book Flight</a></li>
            <li><a href="cancel.php">Cancel Flight</a></li>
            <li><a href="search.html">Search Flight</a></li>
            <li class="end"><a href="contact_verify.html">Contact Us</a></li>
        </ul>
    </nav>


    <div id="body">
  


<?php
$con=mysqli_connect("localhost","root","","test");

@$departure_city=$_POST['depat'];
@$arrival_city=$_POST['arrive'];
@$departure_date=$_POST['date1'];
@$arrival_date=$_POST['date2'];

$sql= "SELECT * FROM fly where departure_city='$departure_city' and arrival_city='$arrival_city' and departure_date='$departure_date' and arrival_date='$arrival_date'";
$result=mysqli_query($con,$sql) or die("Failed to retrieve data");
$returnedrows=mysqli_affected_rows($con);
//if($returnedrows>=1)
//{

echo "<table>";
echo "<tr><th>Number</th><th>Flight name</th><th>Depature city</th><th>arrival city</th><th>departure date</th><th>arrival date</th><th>departure time</th><th>price(ksh)</th><th>Duration</th></tr>";


while($row=mysqli_fetch_assoc($result))
{
	echo "<tr><td>{$row['id']}</td><td>{$row['flight_name']}</td><td>{$row['departure_city']}</td><td>{$row['arrival_city']}</td><td>{$row['departure_date']}</td><td>{$row['arrival_date']}</td><td>{$row['departure_time']}</td><td>{$row['price']}</td><td>{$row['duration']}</td>";
	

}



echo "</table>";
 echo "If no flights are returned then there are no flights that satisfy your search details, please try again with different details"; 

 
session_start();
//$check1='var1';
@$check1=$_POST['check'];
$_SESSION['var1']=$check1;


if(isset($_POST['book2']))
{
$sql2="SELECT free_seats FROM fly  where flight_name='$check1'";
$result2=mysqli_query($con,$sql2) or die('failed to retrieve data');
$row=mysqli_fetch_assoc($result2);

if($row['free_seats']>=1)
{
	echo "seats are vailable";
	header("location:book.php");
}

else
{
	echo "The flight is fully-booked, please book another one";
}
}



mysqli_close($con);
?>
<form method='POST' action='data2.php'>
<table>
<tr><td>Enter the name of the flight to check if seats are available </td><tr>
<tr><td><input type='text' name='check'></td></tr>
<tr><td ><input type='submit' name='book2' value='view' id="buttn" style="background:#AD0000; color: white;"></td></tr>
</table>
</form>

</body>
</html>