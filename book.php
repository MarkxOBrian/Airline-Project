<!doctype html>


<head>
<title>Scorpion Airlines</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<style type="text/css">
    body{
    background: lavender;
  }

  form{
    margin-top: 7%;
    width:20%;
    height: 450px;
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
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/06D32C92-67AB-7641-91C9-5A8A624DFFD3/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/F5DB006D-7254-3B4D-8603-E8CBF3CF95DA/abn/main.css"/></head>

<body>


<div id="content10" class="div">
    <header>
    	<h1><a href="index.html">Scorpion<span> Airlines</span></a></h1>
        <h2><font size="4">Online Flight Booking System</font></h2>
    </header>
    <nav>
    	<ul>
        	  <li class="start selected"><a href="index_verify.html">Home</a></li>
            <li class=""><a href="search.html">Book Flight</a></li>
            <li><a href="cancel.php">Cancel Flight</a></li>
            <li><a href="search.html">Search Flight</a></li>
            <li class="end"><a href="contact_verify.html">Contact Us</a></li>
        </ul>
    </nav>


    <div id="body">
  


	<?php
	$con=mysqli_connect("localhost","root","","test");
	session_start();
	$y=$_SESSION['var1'];
	echo " FLIGHT NAME: ".$y. "<br>";

  $sits=mysqli_query($con, "SELECT free_seats FROM fly WHERE flight_name='$y'");

if(!$sits)
{
  echo "no. of seats not obtained";
}

while($seats=mysqli_fetch_assoc($sits))
{
  echo "<p style='color:black;' >Free seats are : {$seats['free_seats']} </p>";
}             

	?>
	<marquee><input type="submit" value="Please enter your details in the form to get your flight ticket" style="background: #AD0000; color: white;"></marquee>
<form method="POST" action="bookingprocess.php">
	<table align="center" border="1" bgcolor="BurlyWood" style="color:black; width: 80%; height: 300px;">
		<tr><td>Name</td><td><input type="text" name="name" size="80"></td></tr>
		<tr><td>Adress</td><td><input type="text" name="address" size="50"></td></tr>
		<tr><td>City</td><td><input type="text" name="city" size="50"></td></tr>
		<tr><td>State</td><td><input type="text" name="state" size="50"></td></tr>
		<tr><td>Credit card number</td><td><input type="text" name="card" size="50"></td></tr>
		<tr><td>Contact number</td><td><input type="text" name="no" size="50"></td></tr>
		<tr><td>Flight name <br> (Enter the name shown on top of this page/or leave the default value)</td>
		<td><input type="text" name="flight_name" size="50" value="<?php
			echo $y;
			?>"></td></tr>
		<tr><td><input type="submit" name="submission" value="submit"></td></tr>

	</table>

</form>
</div>
</body>
</html>