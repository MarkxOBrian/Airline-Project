
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
    height: 400px;
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
$con=mysqli_connect("localhost","root","","users");

if(!$con)
{
	echo "No connection";
}


$name=$_POST['nam'];
$name2=$_POST['nam2'];
if(empty($name) or empty($name2))
{
	echo "You must enter the names in your ticket number to canncel flight";
	//header ("location:cancel.php");
}

$sql=mysqli_query($con, "INSERT INTO cancelled_flights SELECT * FROM booked_flights WHERE name='$name'") or die('failed to insert');
$sql="DELETE FROM booked_flights WHERE name='$name'" ;
//if(!$sql)
//{
//}

$resultset=mysqli_query($con,$sql) or die('Deletion not successful');

$row=mysqli_affected_rows($con);

if($row>=1)
{
	echo "Your flight has successfully been cancelled";
	//("location:cancel.php");

	mysqli_select_db($con,"test");


$sql2="SELECT free_seats FROM fly  where flight_name='$name2'";
$result2=mysqli_query($con,$sql2) or die('failed to retrieve data');
$row2=mysqli_fetch_assoc($result2);


if($row2['free_seats']>=0)
{ 
	
		$query="UPDATE fly SET free_seats=free_seats+1 where flight_name='$name2'";
	mysqli_query($con,$query) or die('update not successful');
}
}
else
{
	echo "Flight not cancelled, please enter your name and the flight name in your ticket number";
	//header("location:cancel.php");
}


?>
</div>
</body>
</html>