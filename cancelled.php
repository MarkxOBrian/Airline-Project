<!doctype html>


<head>
<title>Scorpion Airlines</title>
<link rel="stylesheet" href="styles.css" type="text/css" />


<style type="text/css">
    body{
    background: lavender;
  }

  form{
    margin-top: 7%;
    width:20%;
    height: 600px;
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
        	   <li class=""><a href="adminflights.php">Flights</a></li>
            <li class=""><a href="addUI.php">Add Flight</a></li>
             <li class="end"><a href="removeflight.php">Remove Flight</a></li>
             <li><a href="booked.php">Booked Flights</a></li>
            <li><a href="cancelled.php">Cancelled Flights</a></li>
            <li class=""><a href="logout.php">Logout</a></li>
            
        </ul>
    </nav>


<?php
include('connect.php');

mysqli_select_db($con,"users");
$sql=mysqli_query($con, "SELECT * FROM cancelled_flights")or die('failed to retrieve data');

echo "<table>";
echo "<tr><th>Number</th><th>Name</th><th>Address</th><th>City</th><th>State</th><th>Credit card Number</th><th>Contact number</th><th>Flight_name</th></tr>";


while($row=mysqli_fetch_assoc($sql))
{
	echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['address']}</td><td>{$row['city']}</td><td>{$row['state']}</td><td>{$row['credit_card_no']}</td><td>{$row['contact_no']}</td><td>{$row['flight_name']}</td></tr>";
}

echo "</table>"


?>
</body>
</html>
